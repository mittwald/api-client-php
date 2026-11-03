<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\User\CreatePasskey;

use InvalidArgumentException;
use JsonSchema\Validator;
use Mittwald\ApiClient\Generated\V2\Schemas\Signup\PasskeyRegistrationResponse;

class CreatePasskeyRequestBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'properties' => [
            'challengeId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'credential' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.signup.PasskeyRegistrationResponse',
            ],
            'name' => [
                'description' => 'The display name of the passkey.',
                'maxLength' => 64,
                'minLength' => 1,
                'type' => 'string',
            ],
        ],
        'required' => [
            'challengeId',
            'credential',
            'name',
        ],
        'type' => 'object',
    ];

    private string $challengeId;

    private PasskeyRegistrationResponse $credential;

    /**
     * The display name of the passkey.
     */
    private string $name;

    public function __construct(string $challengeId, PasskeyRegistrationResponse $credential, string $name)
    {
        $this->challengeId = $challengeId;
        $this->credential = $credential;
        $this->name = $name;
    }

    public function getChallengeId(): string
    {
        return $this->challengeId;
    }

    public function getCredential(): PasskeyRegistrationResponse
    {
        return $this->credential;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function withChallengeId(string $challengeId): self
    {
        $validator = new Validator();
        $validator->validate($challengeId, self::$internalValidationSchema['properties']['challengeId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->challengeId = $challengeId;

        return $clone;
    }

    public function withCredential(PasskeyRegistrationResponse $credential): self
    {
        $clone = clone $this;
        $clone->credential = $credential;

        return $clone;
    }

    public function withName(string $name): self
    {
        $validator = new Validator();
        $validator->validate($name, self::$internalValidationSchema['properties']['name']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->name = $name;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return CreatePasskeyRequestBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): CreatePasskeyRequestBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $challengeId = $input->{'challengeId'};
        $credential = PasskeyRegistrationResponse::buildFromInput($input->{'credential'}, validate: $validate);
        $name = $input->{'name'};

        $obj = new self($challengeId, $credential, $name);

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
        $output['challengeId'] = $this->challengeId;
        $output['credential'] = $this->credential->toJson();
        $output['name'] = $this->name;

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
