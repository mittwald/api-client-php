<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\User\OauthGetAuthorization;

use InvalidArgumentException;
use JsonSchema\Validator;

class OauthGetAuthorizationRequest
{
    public const method = 'get';

    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'type' => 'object',
        'properties' => [
            'grant_consent' => [
                'type' => 'boolean',
            ],
            'grant_type' => [
                'enum' => [
                    'authorization_code',
                ],
                'type' => 'string',
            ],
            'response_type' => [
                'enum' => [
                    'code',
                ],
                'type' => 'string',
            ],
            'client_id' => [
                'type' => 'string',
            ],
            'redirect_uri' => [
                'format' => 'uri',
                'type' => 'string',
            ],
            'scope' => [
                'type' => 'string',
            ],
            'state' => [
                'type' => 'string',
            ],
            'code_challenge' => [
                'type' => 'string',
            ],
            'code_challenge_method' => [
                'enum' => [
                    'S256',
                ],
                'type' => 'string',
            ],
        ],
        'required' => [
            'response_type',
            'client_id',
        ],
    ];

    private ?bool $grantConsent = null;

    private ?OauthGetAuthorizationRequestGrantType $grantType = null;

    private OauthGetAuthorizationRequestResponseType $responseType;

    private string $clientId;

    private ?string $redirectUri = null;

    private ?string $scope = null;

    private ?string $state = null;

    private ?string $codeChallenge = null;

    private ?OauthGetAuthorizationRequestCodeChallengeMethod $codeChallengeMethod = null;

    private array $headers = [

    ];

    public function __construct(OauthGetAuthorizationRequestResponseType $responseType, string $clientId)
    {
        $this->responseType = $responseType;
        $this->clientId = $clientId;
    }

    public function getGrantConsent(): ?bool
    {
        return $this->grantConsent ?? null;
    }

    public function getGrantType(): ?OauthGetAuthorizationRequestGrantType
    {
        return $this->grantType ?? null;
    }

    public function getResponseType(): OauthGetAuthorizationRequestResponseType
    {
        return $this->responseType;
    }

    public function getClientId(): string
    {
        return $this->clientId;
    }

    public function getRedirectUri(): ?string
    {
        return $this->redirectUri ?? null;
    }

    public function getScope(): ?string
    {
        return $this->scope ?? null;
    }

    public function getState(): ?string
    {
        return $this->state ?? null;
    }

    public function getCodeChallenge(): ?string
    {
        return $this->codeChallenge ?? null;
    }

    public function getCodeChallengeMethod(): ?OauthGetAuthorizationRequestCodeChallengeMethod
    {
        return $this->codeChallengeMethod ?? null;
    }

    public function withGrantConsent(bool $grantConsent): self
    {
        $validator = new Validator();
        $validator->validate($grantConsent, self::$schema['properties']['grant_consent']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->grantConsent = $grantConsent;

        return $clone;
    }

    public function withoutGrantConsent(): self
    {
        $clone = clone $this;
        unset($clone->grantConsent);

        return $clone;
    }

    public function withGrantType(OauthGetAuthorizationRequestGrantType $grantType): self
    {
        $clone = clone $this;
        $clone->grantType = $grantType;

        return $clone;
    }

    public function withoutGrantType(): self
    {
        $clone = clone $this;
        unset($clone->grantType);

        return $clone;
    }

    public function withResponseType(OauthGetAuthorizationRequestResponseType $responseType): self
    {
        $clone = clone $this;
        $clone->responseType = $responseType;

        return $clone;
    }

    public function withClientId(string $clientId): self
    {
        $validator = new Validator();
        $validator->validate($clientId, self::$schema['properties']['client_id']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->clientId = $clientId;

        return $clone;
    }

    public function withRedirectUri(string $redirectUri): self
    {
        $validator = new Validator();
        $validator->validate($redirectUri, self::$schema['properties']['redirect_uri']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->redirectUri = $redirectUri;

        return $clone;
    }

    public function withoutRedirectUri(): self
    {
        $clone = clone $this;
        unset($clone->redirectUri);

        return $clone;
    }

    public function withScope(string $scope): self
    {
        $validator = new Validator();
        $validator->validate($scope, self::$schema['properties']['scope']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->scope = $scope;

        return $clone;
    }

    public function withoutScope(): self
    {
        $clone = clone $this;
        unset($clone->scope);

        return $clone;
    }

    public function withState(string $state): self
    {
        $validator = new Validator();
        $validator->validate($state, self::$schema['properties']['state']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->state = $state;

        return $clone;
    }

    public function withoutState(): self
    {
        $clone = clone $this;
        unset($clone->state);

        return $clone;
    }

    public function withCodeChallenge(string $codeChallenge): self
    {
        $validator = new Validator();
        $validator->validate($codeChallenge, self::$schema['properties']['code_challenge']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->codeChallenge = $codeChallenge;

        return $clone;
    }

    public function withoutCodeChallenge(): self
    {
        $clone = clone $this;
        unset($clone->codeChallenge);

        return $clone;
    }

    public function withCodeChallengeMethod(OauthGetAuthorizationRequestCodeChallengeMethod $codeChallengeMethod): self
    {
        $clone = clone $this;
        $clone->codeChallengeMethod = $codeChallengeMethod;

        return $clone;
    }

    public function withoutCodeChallengeMethod(): self
    {
        $clone = clone $this;
        unset($clone->codeChallengeMethod);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return OauthGetAuthorizationRequest Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): OauthGetAuthorizationRequest
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $grantConsent = null;
        if (isset($input->{'grant_consent'})) {
            $grantConsent = (bool)($input->{'grant_consent'});
        }
        $grantType = null;
        if (isset($input->{'grant_type'})) {
            $grantType = OauthGetAuthorizationRequestGrantType::from($input->{'grant_type'});
        }
        $responseType = OauthGetAuthorizationRequestResponseType::from($input->{'response_type'});
        $clientId = $input->{'client_id'};
        $redirectUri = null;
        if (isset($input->{'redirect_uri'})) {
            $redirectUri = $input->{'redirect_uri'};
        }
        $scope = null;
        if (isset($input->{'scope'})) {
            $scope = $input->{'scope'};
        }
        $state = null;
        if (isset($input->{'state'})) {
            $state = $input->{'state'};
        }
        $codeChallenge = null;
        if (isset($input->{'code_challenge'})) {
            $codeChallenge = $input->{'code_challenge'};
        }
        $codeChallengeMethod = null;
        if (isset($input->{'code_challenge_method'})) {
            $codeChallengeMethod = OauthGetAuthorizationRequestCodeChallengeMethod::from($input->{'code_challenge_method'});
        }

        $obj = new self($responseType, $clientId);
        $obj->grantConsent = $grantConsent;
        $obj->grantType = $grantType;
        $obj->redirectUri = $redirectUri;
        $obj->scope = $scope;
        $obj->state = $state;
        $obj->codeChallenge = $codeChallenge;
        $obj->codeChallengeMethod = $codeChallengeMethod;
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
        if (isset($this->grantConsent)) {
            $output['grant_consent'] = $this->grantConsent;
        }
        if (isset($this->grantType)) {
            $output['grant_type'] = ($this->grantType)->value;
        }
        $output['response_type'] = ($this->responseType)->value;
        $output['client_id'] = $this->clientId;
        if (isset($this->redirectUri)) {
            $output['redirect_uri'] = $this->redirectUri;
        }
        if (isset($this->scope)) {
            $output['scope'] = $this->scope;
        }
        if (isset($this->state)) {
            $output['state'] = $this->state;
        }
        if (isset($this->codeChallenge)) {
            $output['code_challenge'] = $this->codeChallenge;
        }
        if (isset($this->codeChallengeMethod)) {
            $output['code_challenge_method'] = ($this->codeChallengeMethod)->value;
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
        $validator->validate($input, self::$schema);

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
        return '/v2/oauth2/authorize';
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
        if (isset($mapped['grant_consent'])) {
            $query['grant_consent'] = $mapped['grant_consent'];
        }
        if (isset($mapped['grant_type'])) {
            $query['grant_type'] = $mapped['grant_type'];
        }
        if (isset($mapped['response_type'])) {
            $query['response_type'] = $mapped['response_type'];
        }
        if (isset($mapped['client_id'])) {
            $query['client_id'] = $mapped['client_id'];
        }
        if (isset($mapped['redirect_uri'])) {
            $query['redirect_uri'] = $mapped['redirect_uri'];
        }
        if (isset($mapped['scope'])) {
            $query['scope'] = $mapped['scope'];
        }
        if (isset($mapped['state'])) {
            $query['state'] = $mapped['state'];
        }
        if (isset($mapped['code_challenge'])) {
            $query['code_challenge'] = $mapped['code_challenge'];
        }
        if (isset($mapped['code_challenge_method'])) {
            $query['code_challenge_method'] = $mapped['code_challenge_method'];
        }
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
