<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Error;

use Exception;
use InvalidArgumentException;
use Mittwald\ApiClient\Client\ResponseContainer;
use Psr\Http\Message\ResponseInterface;
use Throwable;

class UnexpectedResponseException extends Exception
{
    public readonly ResponseInterface $response;

    public function __construct(ResponseContainer $response, ?Throwable $previous = null)
    {
        $response = $response->getResponse();
        if ($response === null) {
            throw new InvalidArgumentException('ResponseContainer must contain a response');
        }

        $this->response = $response;
        parent::__construct(
            sprintf(
                'Unexpected response status code %d %s',
                $this->response->getStatusCode(),
                $this->response->getReasonPhrase(),
            ),
            previous: $previous,
        );
    }
}
