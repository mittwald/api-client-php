<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\User\AuthenticatePasskey;

use InvalidArgumentException;
use JsonSchema\Validator;
use Mittwald\ApiClient\Generated\V2\Schemas\Signup\PasskeyAuthenticationResponse;

class AuthenticatePasskeyRequestBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'properties' => [
            'captchaToken' => [
                'description' => 'The response token of a solved captcha challenge, as issued by the captcha widget of the login
form. A missing, unsolved or already used token is rejected with `CaptchaVerificationFailed` (400).
',
                'maxLength' => 2048,
                'minLength' => 1,
                'type' => 'string',
            ],
            'challengeId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'credential' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.signup.PasskeyAuthenticationResponse',
            ],
        ],
        'required' => [
            'challengeId',
            'credential',
        ],
        'type' => 'object',
    ];

    /**
     * The response token of a solved captcha challenge, as issued by the captcha widget of the login
     * form. A missing, unsolved or already used token is rejected with `CaptchaVerificationFailed` (400).
     */
    private ?string $captchaToken = null;

    private string $challengeId;

    private PasskeyAuthenticationResponse $credential;

    public function __construct(string $challengeId, PasskeyAuthenticationResponse $credential)
    {
        $this->challengeId = $challengeId;
        $this->credential = $credential;
    }

    public function getCaptchaToken(): ?string
    {
        return $this->captchaToken ?? null;
    }

    public function getChallengeId(): string
    {
        return $this->challengeId;
    }

    public function getCredential(): PasskeyAuthenticationResponse
    {
        return $this->credential;
    }

    public function withCaptchaToken(string $captchaToken): self
    {
        $validator = new Validator();
        $validator->validate($captchaToken, self::$internalValidationSchema['properties']['captchaToken']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->captchaToken = $captchaToken;

        return $clone;
    }

    public function withoutCaptchaToken(): self
    {
        $clone = clone $this;
        unset($clone->captchaToken);

        return $clone;
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

    public function withCredential(PasskeyAuthenticationResponse $credential): self
    {
        $clone = clone $this;
        $clone->credential = $credential;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return AuthenticatePasskeyRequestBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): AuthenticatePasskeyRequestBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $captchaToken = null;
        if (isset($input->{'captchaToken'})) {
            $captchaToken = $input->{'captchaToken'};
        }
        $challengeId = $input->{'challengeId'};
        $credential = PasskeyAuthenticationResponse::buildFromInput($input->{'credential'}, validate: $validate);

        $obj = new self($challengeId, $credential);
        $obj->captchaToken = $captchaToken;
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
        if (isset($this->captchaToken)) {
            $output['captchaToken'] = $this->captchaToken;
        }
        $output['challengeId'] = $this->challengeId;
        $output['credential'] = $this->credential->toJson();

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
