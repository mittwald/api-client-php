<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Mail\RecoverMailAddressEmails;

use InvalidArgumentException;
use JsonSchema\Validator;

class RecoverMailAddressEmailsRequest
{
    public const method = 'post';

    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'type' => 'object',
        'properties' => [
            'mailAddressId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'backupId' => [
                'pattern' => '^[0-9]{8}$',
                'type' => 'string',
            ],
        ],
        'required' => [
            'mailAddressId',
            'backupId',
        ],
    ];

    private string $mailAddressId;

    private string $backupId;

    private array $headers = [

    ];

    public function __construct(string $mailAddressId, string $backupId)
    {
        $this->mailAddressId = $mailAddressId;
        $this->backupId = $backupId;
    }

    public function getMailAddressId(): string
    {
        return $this->mailAddressId;
    }

    public function getBackupId(): string
    {
        return $this->backupId;
    }

    public function withMailAddressId(string $mailAddressId): self
    {
        $validator = new Validator();
        $validator->validate($mailAddressId, self::$internalValidationSchema['properties']['mailAddressId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->mailAddressId = $mailAddressId;

        return $clone;
    }

    public function withBackupId(string $backupId): self
    {
        $validator = new Validator();
        $validator->validate($backupId, self::$internalValidationSchema['properties']['backupId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->backupId = $backupId;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return RecoverMailAddressEmailsRequest Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): RecoverMailAddressEmailsRequest
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $mailAddressId = $input->{'mailAddressId'};
        $backupId = $input->{'backupId'};

        $obj = new self($mailAddressId, $backupId);

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
        $output['mailAddressId'] = $this->mailAddressId;
        $output['backupId'] = $this->backupId;

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
    }

    /**
     * Builds the URL for this request
     *
     * This method is used internally by the client to build the URL for this request.
     * You should not need to call this method directly.
     *
     * @internal
     * @return string The URL for this request
     */
    public function buildUrl(): string
    {
        $mapped = $this->toJson();
        $mailAddressId = urlencode($mapped['mailAddressId']);
        $backupId = urlencode($mapped['backupId']);
        return '/v2/mail-addresses/' . $mailAddressId . '/backups/' . $backupId . '/recovery';
    }

    /**
     * Builds the request options for this request
     *
     * This method is used internally by the client to build the Guzzle request options
     * for this request. You should not need to call this method directly.
     *
     * @internal
     * @return array The Guzzle request options for this request
     */
    public function buildRequestOptions(): array
    {
        $mapped = $this->toJson();
        $query = [];
        return [
            'query' => $query,
            'headers' => $this->headers,
        ];
    }

    /**
     * Adds a header to this request
     *
     * You can use this method to add custom HTTP headers to the request.
     *
     * @param string $name The name of the header to add
     * @param string|array $value The value of the header to add
     * @return self A clone of this request with the header added
     */
    public function withHeader(string $name, string|array $value): self
    {
        $clone = clone $this;
        $clone->headers[$name] = $value;
        return $clone;
    }
}
