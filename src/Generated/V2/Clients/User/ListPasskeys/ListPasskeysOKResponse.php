<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\User\ListPasskeys;

use InvalidArgumentException;
use JsonSchema\Validator;
use Mittwald\ApiClient\Client\ResponseContainer;
use Psr\Http\Message\ResponseInterface;

class ListPasskeysOKResponse implements ResponseContainer
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'type' => 'object',
        'required' => [
            'body',
        ],
        'properties' => [
            'body' => [
                'items' => [
                    'properties' => [
                        'aaguid' => [
                            'description' => 'The authenticator model identifier.',
                            'type' => 'string',
                        ],
                        'backupEligible' => [
                            'description' => 'Whether the authenticator can back up (sync) the passkey, as reported at registration.',
                            'type' => 'boolean',
                        ],
                        'backupState' => [
                            'description' => 'Whether the passkey was backed up (synced) at registration. Not updated afterwards.',
                            'type' => 'boolean',
                        ],
                        'createdAt' => [
                            'format' => 'date-time',
                            'type' => 'string',
                        ],
                        'credentialId' => [
                            'description' => 'The base64url encoded WebAuthn credential id.',
                            'type' => 'string',
                        ],
                        'id' => [
                            'format' => 'uuid',
                            'type' => 'string',
                        ],
                        'name' => [
                            'type' => 'string',
                        ],
                        'rpId' => [
                            'type' => 'string',
                        ],
                    ],
                    'required' => [
                        'id',
                        'credentialId',
                        'rpId',
                        'name',
                        'aaguid',
                        'backupEligible',
                        'backupState',
                        'createdAt',
                    ],
                    'type' => 'object',
                ],
                'type' => 'array',
            ],
        ],
    ];

    /**
     * @var ListPasskeysOKResponseBodyItem[]
     */
    private array $body;

    private ResponseInterface|null $httpResponse = null;

    /**
     * @param ListPasskeysOKResponseBodyItem[] $body
     */
    public function __construct(array $body)
    {
        $this->body = $body;
    }

    /**
     * @return ListPasskeysOKResponseBodyItem[]
     */
    public function getBody(): array
    {
        return $this->body;
    }

    /**
     * @param ListPasskeysOKResponseBodyItem[] $body
     */
    public function withBody(array $body): self
    {
        $clone = clone $this;
        $clone->body = $body;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return ListPasskeysOKResponse Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ListPasskeysOKResponse
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $body = array_map(fn (array|object $i): ListPasskeysOKResponseBodyItem => ListPasskeysOKResponseBodyItem::buildFromInput($i, validate: $validate), $input->{'body'});

        $obj = new self($body);

        return $obj;
    }

    /**
     * Converts this object back to a simple array that can be JSON-serialized
     *
     * @return array Converted array
     */
    public function toJson(): array
    {
        $output = [];
        $output['body'] = array_map(fn (ListPasskeysOKResponseBodyItem $i) => $i->toJson(), $this->body);

        return $output;
    }

    /**
     * Validates an input array
     *
     * @param array|object $input Input data
     * @param bool $return Return instead of throwing errors
     * @return bool Validation result
     * @throws InvalidArgumentException
     */
    public static function validateInput(array|object $input, bool $return = false): bool
    {
        $validator = new \Mittwald\ApiClient\Validator\Validator();
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        $validator->validate($input, self::$internalValidationSchema);

        if (!$validator->isValid() && !$return) {
            $errors = array_map(function (array $e): string {
                return $e["property"] . ": " . $e["message"];
            }, $validator->getErrors());
            throw new InvalidArgumentException(join(", ", $errors));
        }

        return $validator->isValid();
    }

    public function __clone()
    {
        $this->body = array_map(fn (ListPasskeysOKResponseBodyItem $i) => clone $i, $this->body);
    }

    public static function fromResponse(ResponseInterface $httpResponse): self
    {
        $parsedBody = json_decode($httpResponse->getBody()->getContents(), associative: true);
        $response = static::buildFromInput(['body' => $parsedBody], validate: false);
        $response->httpResponse = $httpResponse;
        return $response;
    }

    public function getResponse(): ResponseInterface|null
    {
        return $this->httpResponse;
    }
}
