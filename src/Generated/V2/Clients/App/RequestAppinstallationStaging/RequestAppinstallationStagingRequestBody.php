<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\App\RequestAppinstallationStaging;

use InvalidArgumentException;
use JsonSchema\Validator;

class RequestAppinstallationStagingRequestBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'properties' => [
            'description' => [
                'type' => 'string',
            ],
            'domain' => [
                'type' => 'string',
            ],
            'installationPath' => [
                'type' => 'string',
            ],
        ],
        'required' => [
            'description',
            'domain',
        ],
        'type' => 'object',
    ];

    private string $description;

    private string $domain;

    private ?string $installationPath = null;

    public function __construct(string $description, string $domain)
    {
        $this->description = $description;
        $this->domain = $domain;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getDomain(): string
    {
        return $this->domain;
    }

    public function getInstallationPath(): ?string
    {
        return $this->installationPath ?? null;
    }

    public function withDescription(string $description): self
    {
        $validator = new Validator();
        $validator->validate($description, self::$internalValidationSchema['properties']['description']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->description = $description;

        return $clone;
    }

    public function withDomain(string $domain): self
    {
        $validator = new Validator();
        $validator->validate($domain, self::$internalValidationSchema['properties']['domain']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->domain = $domain;

        return $clone;
    }

    public function withInstallationPath(string $installationPath): self
    {
        $validator = new Validator();
        $validator->validate($installationPath, self::$internalValidationSchema['properties']['installationPath']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->installationPath = $installationPath;

        return $clone;
    }

    public function withoutInstallationPath(): self
    {
        $clone = clone $this;
        unset($clone->installationPath);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return RequestAppinstallationStagingRequestBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): RequestAppinstallationStagingRequestBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $description = $input->{'description'};
        $domain = $input->{'domain'};
        $installationPath = null;
        if (isset($input->{'installationPath'})) {
            $installationPath = $input->{'installationPath'};
        }

        $obj = new self($description, $domain);
        $obj->installationPath = $installationPath;
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
        $output['description'] = $this->description;
        $output['domain'] = $this->domain;
        if (isset($this->installationPath)) {
            $output['installationPath'] = $this->installationPath;
        }

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
}
