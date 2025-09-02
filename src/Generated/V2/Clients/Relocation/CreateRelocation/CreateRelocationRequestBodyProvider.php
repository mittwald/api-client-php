<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Relocation\CreateRelocation;

use InvalidArgumentException;
use JsonSchema\Validator;

class CreateRelocationRequestBodyProvider
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'properties' => [
            'loginUrl' => [
                'description' => 'Url to the control panel of the provider',
                'minLength' => 1,
                'type' => 'string',
            ],
            'name' => [
                'description' => 'Name of your provider',
                'oneOf' => [
                    [
                        'minLength' => 1,
                        'type' => 'string',
                    ],
                    [
                        'enum' => [
                            '1und1',
                            'strato',
                        ],
                        'type' => 'string',
                    ],
                ],
            ],
            'password' => [
                'minLength' => 1,
                'type' => 'string',
            ],
            'sourceAccount' => [
                'description' => 'Which account of your provider should be moved?',
                'minLength' => 1,
                'type' => 'string',
            ],
            'userName' => [
                'description' => 'Login name to your provider',
                'minLength' => 1,
                'type' => 'string',
            ],
        ],
        'required' => [
            'name',
            'loginUrl',
            'userName',
            'password',
            'sourceAccount',
        ],
        'type' => 'object',
    ];

    /**
     * Url to the control panel of the provider
     */
    private string $loginUrl;

    /**
     * Name of your provider
     */
    private string|CreateRelocationRequestBodyProviderNameAlternative2 $name;

    private string $password;

    /**
     * Which account of your provider should be moved?
     */
    private string $sourceAccount;

    /**
     * Login name to your provider
     */
    private string $userName;

    public function __construct(string $loginUrl, CreateRelocationRequestBodyProviderNameAlternative2|string $name, string $password, string $sourceAccount, string $userName)
    {
        $this->loginUrl = $loginUrl;
        $this->name = $name;
        $this->password = $password;
        $this->sourceAccount = $sourceAccount;
        $this->userName = $userName;
    }

    public function getLoginUrl(): string
    {
        return $this->loginUrl;
    }

    public function getName(): CreateRelocationRequestBodyProviderNameAlternative2|string
    {
        return $this->name;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function getSourceAccount(): string
    {
        return $this->sourceAccount;
    }

    public function getUserName(): string
    {
        return $this->userName;
    }

    public function withLoginUrl(string $loginUrl): self
    {
        $validator = new Validator();
        $validator->validate($loginUrl, self::$internalValidationSchema['properties']['loginUrl']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->loginUrl = $loginUrl;

        return $clone;
    }

    public function withName(CreateRelocationRequestBodyProviderNameAlternative2|string $name): self
    {
        $clone = clone $this;
        $clone->name = $name;

        return $clone;
    }

    public function withPassword(string $password): self
    {
        $validator = new Validator();
        $validator->validate($password, self::$internalValidationSchema['properties']['password']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->password = $password;

        return $clone;
    }

    public function withSourceAccount(string $sourceAccount): self
    {
        $validator = new Validator();
        $validator->validate($sourceAccount, self::$internalValidationSchema['properties']['sourceAccount']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->sourceAccount = $sourceAccount;

        return $clone;
    }

    public function withUserName(string $userName): self
    {
        $validator = new Validator();
        $validator->validate($userName, self::$internalValidationSchema['properties']['userName']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->userName = $userName;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return CreateRelocationRequestBodyProvider Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): CreateRelocationRequestBodyProvider
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $loginUrl = $input->{'loginUrl'};
        $name = match (true) {
            is_string($input->{'name'}) => $input->{'name'},
            CreateRelocationRequestBodyProviderNameAlternative2::tryFrom($input->{'name'}) !== null => CreateRelocationRequestBodyProviderNameAlternative2::from($input->{'name'}),
            default => throw new InvalidArgumentException("could not build property 'name' from JSON"),
        };
        $password = $input->{'password'};
        $sourceAccount = $input->{'sourceAccount'};
        $userName = $input->{'userName'};

        $obj = new self($loginUrl, $name, $password, $sourceAccount, $userName);

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
        $output['loginUrl'] = $this->loginUrl;
        $output['name'] = match (true) {
            is_string($this->name) => $this->name,
            $this->name instanceof CreateRelocationRequestBodyProviderNameAlternative2 => ($this->name)->value,
        };
        $output['password'] = $this->password;
        $output['sourceAccount'] = $this->sourceAccount;
        $output['userName'] = $this->userName;

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
        $this->name = match (true) {
            is_string($this->name), $this->name instanceof CreateRelocationRequestBodyProviderNameAlternative2 => $this->name,
        };
    }
}
