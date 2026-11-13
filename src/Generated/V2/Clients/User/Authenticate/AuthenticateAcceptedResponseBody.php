<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\User\Authenticate;

use InvalidArgumentException;
use JsonSchema\Validator;
use Mittwald\ApiClient\Generated\V2\Schemas\Signup\PasskeyChallenge;

class AuthenticateAcceptedResponseBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'properties' => [
            'availableSecondFactors' => [
                'description' => 'More values may be added in the future; clients must ignore values they do not know.',
                'items' => [
                    'enum' => [
                        'totp',
                        'passkey',
                        'email',
                    ],
                    'type' => 'string',
                ],
                'type' => 'array',
            ],
            'name' => [
                'enum' => [
                    'SecondFactorRequired',
                ],
                'type' => 'string',
            ],
            'passkeyChallenge' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.signup.PasskeyChallenge',
            ],
        ],
        'required' => [
            'availableSecondFactors',
        ],
        'type' => 'object',
    ];

    /**
     * More values may be added in the future; clients must ignore values they do not know.
     *
     * @var string[]
     */
    private array $availableSecondFactors;

    private ?AuthenticateAcceptedResponseBodyName $name = null;

    private ?PasskeyChallenge $passkeyChallenge = null;

    /**
     * @param string[] $availableSecondFactors
     */
    public function __construct(array $availableSecondFactors)
    {
        $this->availableSecondFactors = $availableSecondFactors;
    }

    /**
     * @return string[]
     */
    public function getAvailableSecondFactors(): array
    {
        return $this->availableSecondFactors;
    }

    public function getName(): ?AuthenticateAcceptedResponseBodyName
    {
        return $this->name ?? null;
    }

    public function getPasskeyChallenge(): ?PasskeyChallenge
    {
        return $this->passkeyChallenge ?? null;
    }

    /**
     * @param string[] $availableSecondFactors
     */
    public function withAvailableSecondFactors(array $availableSecondFactors): self
    {
        $validator = new Validator();
        $validator->validate($availableSecondFactors, self::$internalValidationSchema['properties']['availableSecondFactors']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->availableSecondFactors = $availableSecondFactors;

        return $clone;
    }

    public function withName(AuthenticateAcceptedResponseBodyName $name): self
    {
        $clone = clone $this;
        $clone->name = $name;

        return $clone;
    }

    public function withoutName(): self
    {
        $clone = clone $this;
        unset($clone->name);

        return $clone;
    }

    public function withPasskeyChallenge(PasskeyChallenge $passkeyChallenge): self
    {
        $clone = clone $this;
        $clone->passkeyChallenge = $passkeyChallenge;

        return $clone;
    }

    public function withoutPasskeyChallenge(): self
    {
        $clone = clone $this;
        unset($clone->passkeyChallenge);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return AuthenticateAcceptedResponseBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): AuthenticateAcceptedResponseBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $availableSecondFactors = $input->{'availableSecondFactors'};
        $name = null;
        if (isset($input->{'name'})) {
            $name = AuthenticateAcceptedResponseBodyName::from($input->{'name'});
        }
        $passkeyChallenge = null;
        if (isset($input->{'passkeyChallenge'})) {
            $passkeyChallenge = PasskeyChallenge::buildFromInput($input->{'passkeyChallenge'}, validate: $validate);
        }

        $obj = new self($availableSecondFactors);
        $obj->name = $name;
        $obj->passkeyChallenge = $passkeyChallenge;
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
        $output['availableSecondFactors'] = $this->availableSecondFactors;
        if (isset($this->name)) {
            $output['name'] = ($this->name)->value;
        }
        if (isset($this->passkeyChallenge)) {
            $output['passkeyChallenge'] = $this->passkeyChallenge->toJson();
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
