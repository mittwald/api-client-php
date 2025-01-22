<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Domain\Suggest;

use InvalidArgumentException;
use JsonSchema\Validator;

class SuggestRequest
{
    public const method = 'get';

    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'type' => 'object',
        'properties' => [
            'prompt' => [
                'maxLength' => 500,
                'type' => 'string',
            ],
            'domainCount' => [
                'default' => 6,
                'maximum' => 30,
                'minimum' => 1,
                'type' => 'integer',
            ],
            'tlds' => [
                'items' => [
                    'type' => 'string',
                ],
                'type' => 'array',
            ],
        ],
        'required' => [
            'prompt',
        ],
    ];

    private string $prompt;

    private int $domainCount = 6;

    /**
     * @var string[]|null
     */
    private ?array $tlds = null;

    private array $headers = [

    ];

    public function __construct(string $prompt)
    {
        $this->prompt = $prompt;
    }

    public function getPrompt(): string
    {
        return $this->prompt;
    }

    public function getDomainCount(): int
    {
        return $this->domainCount;
    }

    /**
     * @return string[]|null
     */
    public function getTlds(): ?array
    {
        return $this->tlds ?? null;
    }

    public function withPrompt(string $prompt): self
    {
        $validator = new Validator();
        $validator->validate($prompt, self::$schema['properties']['prompt']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->prompt = $prompt;

        return $clone;
    }

    public function withDomainCount(int $domainCount): self
    {
        $validator = new Validator();
        $validator->validate($domainCount, self::$schema['properties']['domainCount']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->domainCount = $domainCount;

        return $clone;
    }

    /**
     * @param string[] $tlds
     */
    public function withTlds(array $tlds): self
    {
        $validator = new Validator();
        $validator->validate($tlds, self::$schema['properties']['tlds']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->tlds = $tlds;

        return $clone;
    }

    public function withoutTlds(): self
    {
        $clone = clone $this;
        unset($clone->tlds);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return SuggestRequest Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): SuggestRequest
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $prompt = $input->{'prompt'};
        $domainCount = 6;
        if (isset($input->{'domainCount'})) {
            $domainCount = (int)($input->{'domainCount'});
        }
        $tlds = null;
        if (isset($input->{'tlds'})) {
            $tlds = $input->{'tlds'};
        }

        $obj = new self($prompt);
        $obj->domainCount = $domainCount;
        $obj->tlds = $tlds;
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
        $output['prompt'] = $this->prompt;
        $output['domainCount'] = $this->domainCount;
        if (isset($this->tlds)) {
            $output['tlds'] = $this->tlds;
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
        return '/v2/domain-suggestions';
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
        if (isset($mapped['prompt'])) {
            $query['prompt'] = $mapped['prompt'];
        }
        if (isset($mapped['domainCount'])) {
            $query['domainCount'] = $mapped['domainCount'];
        }
        if (isset($mapped['tlds'])) {
            $query['tlds'] = $mapped['tlds'];
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
