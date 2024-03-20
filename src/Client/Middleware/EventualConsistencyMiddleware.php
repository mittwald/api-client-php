<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Client\Middleware;

use Closure;
use GuzzleHttp\Promise\PromiseInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

/**
 * EventualConsistencyMiddleware works around the intricacies of the API's
 * eventual consistency.
 *
 * In a nutshell: A response may contain a header "etag" which is a unique
 * identifier for the current state of the resource. If a subsequent request
 * includes the "If-Event-Reached" header with the value of the previous
 * response's "etag" header, the API will wait until the resource has reached
 * the state identified by the "etag" before processing the request.
 *
 * @see https://developer.mittwald.de/docs/v2/api/intro/#eventual-consistency
 */
class EventualConsistencyMiddleware
{
    private string | null $lastEventId = null;

    public function __invoke(callable $handler): Closure
    {
        return function (RequestInterface $request, array $options) use ($handler): PromiseInterface {
            if ($this->lastEventId !== null) {
                $request = $request->withHeader("If-Event-Reached", $this->lastEventId);
            }

            /** @var PromiseInterface $responsePromise */
            $responsePromise = $handler($request, $options);

            return $responsePromise->then(function (ResponseInterface $response): ResponseInterface {
                if ($response->hasHeader("etag")) {
                    $this->lastEventId = $response->getHeader("etag")[0];
                }

                return $response;
            });
        };
    }
}
