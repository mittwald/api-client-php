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

    private ?bool $grant_consent = null;

    private ?OauthGetAuthorizationRequestGrant_type $grant_type = null;

    private OauthGetAuthorizationRequestResponse_type $response_type;

    private string $client_id;

    private ?string $redirect_uri = null;

    private ?string $scope = null;

    private ?string $state = null;

    private ?string $code_challenge = null;

    private ?OauthGetAuthorizationRequestCode_challenge_method $code_challenge_method = null;

    private array $headers = [

    ];

    public function __construct(OauthGetAuthorizationRequestResponse_type $responseType, string $clientId)
    {
        $this->response_type = $responseType;
        $this->client_id = $clientId;
    }

    public function getGrantConsent(): ?bool
    {
        return $this->grant_consent ?? null;
    }

    public function getGrantType(): ?OauthGetAuthorizationRequestGrant_type
    {
        return $this->grant_type ?? null;
    }

    public function getResponseType(): OauthGetAuthorizationRequestResponse_type
    {
        return $this->response_type;
    }

    public function getClientId(): string
    {
        return $this->client_id;
    }

    public function getRedirectUri(): ?string
    {
        return $this->redirect_uri ?? null;
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
        return $this->code_challenge ?? null;
    }

    public function getCodeChallengeMethod(): ?OauthGetAuthorizationRequestCode_challenge_method
    {
        return $this->code_challenge_method ?? null;
    }

    public function withGrantConsent(bool $grant_consent): self
    {
        $validator = new Validator();
        $validator->validate($grant_consent, static::$schema['properties']['grant_consent']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->grant_consent = $grant_consent;

        return $clone;
    }

    public function withoutGrantConsent(): self
    {
        $clone = clone $this;
        unset($clone->grant_consent);

        return $clone;
    }

    public function withGrantType(OauthGetAuthorizationRequestGrant_type $grant_type): self
    {
        $clone = clone $this;
        $clone->grant_type = $grant_type;

        return $clone;
    }

    public function withoutGrantType(): self
    {
        $clone = clone $this;
        unset($clone->grant_type);

        return $clone;
    }

    public function withResponseType(OauthGetAuthorizationRequestResponse_type $response_type): self
    {
        $clone = clone $this;
        $clone->response_type = $response_type;

        return $clone;
    }

    public function withClientId(string $client_id): self
    {
        $validator = new Validator();
        $validator->validate($client_id, static::$schema['properties']['client_id']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->client_id = $client_id;

        return $clone;
    }

    public function withRedirectUri(string $redirect_uri): self
    {
        $validator = new Validator();
        $validator->validate($redirect_uri, static::$schema['properties']['redirect_uri']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->redirect_uri = $redirect_uri;

        return $clone;
    }

    public function withoutRedirectUri(): self
    {
        $clone = clone $this;
        unset($clone->redirect_uri);

        return $clone;
    }

    public function withScope(string $scope): self
    {
        $validator = new Validator();
        $validator->validate($scope, static::$schema['properties']['scope']);
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
        $validator->validate($state, static::$schema['properties']['state']);
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

    public function withCodeChallenge(string $code_challenge): self
    {
        $validator = new Validator();
        $validator->validate($code_challenge, static::$schema['properties']['code_challenge']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->code_challenge = $code_challenge;

        return $clone;
    }

    public function withoutCodeChallenge(): self
    {
        $clone = clone $this;
        unset($clone->code_challenge);

        return $clone;
    }

    public function withCodeChallengeMethod(OauthGetAuthorizationRequestCode_challenge_method $code_challenge_method): self
    {
        $clone = clone $this;
        $clone->code_challenge_method = $code_challenge_method;

        return $clone;
    }

    public function withoutCodeChallengeMethod(): self
    {
        $clone = clone $this;
        unset($clone->code_challenge_method);

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

        $grant_consent = null;
        if (isset($input->{'grant_consent'})) {
            $grant_consent = (bool)($input->{'grant_consent'});
        }
        $grant_type = null;
        if (isset($input->{'grant_type'})) {
            $grant_type = OauthGetAuthorizationRequestGrant_type::from($input->{'grant_type'});
        }
        $response_type = OauthGetAuthorizationRequestResponse_type::from($input->{'response_type'});
        $client_id = $input->{'client_id'};
        $redirect_uri = null;
        if (isset($input->{'redirect_uri'})) {
            $redirect_uri = $input->{'redirect_uri'};
        }
        $scope = null;
        if (isset($input->{'scope'})) {
            $scope = $input->{'scope'};
        }
        $state = null;
        if (isset($input->{'state'})) {
            $state = $input->{'state'};
        }
        $code_challenge = null;
        if (isset($input->{'code_challenge'})) {
            $code_challenge = $input->{'code_challenge'};
        }
        $code_challenge_method = null;
        if (isset($input->{'code_challenge_method'})) {
            $code_challenge_method = OauthGetAuthorizationRequestCode_challenge_method::from($input->{'code_challenge_method'});
        }

        $obj = new self($response_type, $client_id);
        $obj->grant_consent = $grant_consent;
        $obj->grant_type = $grant_type;
        $obj->redirect_uri = $redirect_uri;
        $obj->scope = $scope;
        $obj->state = $state;
        $obj->code_challenge = $code_challenge;
        $obj->code_challenge_method = $code_challenge_method;
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
        if (isset($this->grant_consent)) {
            $output['grant_consent'] = $this->grant_consent;
        }
        if (isset($this->grant_type)) {
            $output['grant_type'] = ($this->grant_type)->value;
        }
        $output['response_type'] = ($this->response_type)->value;
        $output['client_id'] = $this->client_id;
        if (isset($this->redirect_uri)) {
            $output['redirect_uri'] = $this->redirect_uri;
        }
        if (isset($this->scope)) {
            $output['scope'] = $this->scope;
        }
        if (isset($this->state)) {
            $output['state'] = $this->state;
        }
        if (isset($this->code_challenge)) {
            $output['code_challenge'] = $this->code_challenge;
        }
        if (isset($this->code_challenge_method)) {
            $output['code_challenge_method'] = ($this->code_challenge_method)->value;
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
        $validator = new Validator();
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        $validator->validate($input, static::$schema);

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
