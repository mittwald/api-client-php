<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Article;

use InvalidArgumentException;

class ReadableModifierArticleOptions
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'articleId' => [
                'minLength' => 1,
                'type' => 'string',
            ],
            'info' => [
                'properties' => [
                    'articleName' => [
                        'example' => 'proSpace lite',
                        'type' => 'string',
                    ],
                    'articleTemplateName' => [
                        'example' => 'proSpace',
                        'type' => 'string',
                    ],
                    'fromArticleTemplate' => [
                        'type' => 'boolean',
                    ],
                ],
                'type' => 'object',
            ],
            'maxArticleCount' => [
                'minimum' => 1,
                'type' => 'number',
            ],
        ],
        'required' => [
            'articleId',
            'maxArticleCount',
        ],
        'type' => 'object',
    ];

    /**
     * @var string
     */
    private string $articleId;

    /**
     * @var ReadableModifierArticleOptionsInfo|null
     */
    private ?ReadableModifierArticleOptionsInfo $info = null;

    /**
     * @var int|float
     */
    private int|float $maxArticleCount;

    /**
     * @param string $articleId
     * @param int|float $maxArticleCount
     */
    public function __construct(string $articleId, int|float $maxArticleCount)
    {
        $this->articleId = $articleId;
        $this->maxArticleCount = $maxArticleCount;
    }

    /**
     * @return string
     */
    public function getArticleId(): string
    {
        return $this->articleId;
    }

    /**
     * @return ReadableModifierArticleOptionsInfo|null
     */
    public function getInfo(): ?ReadableModifierArticleOptionsInfo
    {
        return $this->info ?? null;
    }

    /**
     * @return int|float
     */
    public function getMaxArticleCount(): int|float
    {
        return $this->maxArticleCount;
    }

    /**
     * @param string $articleId
     * @return self
     */
    public function withArticleId(string $articleId): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($articleId, static::$schema['properties']['articleId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->articleId = $articleId;

        return $clone;
    }

    /**
     * @param ReadableModifierArticleOptionsInfo $info
     * @return self
     */
    public function withInfo(ReadableModifierArticleOptionsInfo $info): self
    {
        $clone = clone $this;
        $clone->info = $info;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutInfo(): self
    {
        $clone = clone $this;
        unset($clone->info);

        return $clone;
    }

    /**
     * @param int|float $maxArticleCount
     * @return self
     */
    public function withMaxArticleCount(int|float $maxArticleCount): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($maxArticleCount, static::$schema['properties']['maxArticleCount']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->maxArticleCount = $maxArticleCount;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return ReadableModifierArticleOptions Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ReadableModifierArticleOptions
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $articleId = $input->{'articleId'};
        $info = null;
        if (isset($input->{'info'})) {
            $info = ReadableModifierArticleOptionsInfo::buildFromInput($input->{'info'}, validate: $validate);
        }
        $maxArticleCount = str_contains($input->{'maxArticleCount'}, '.') ? (float)($input->{'maxArticleCount'}) : (int)($input->{'maxArticleCount'});

        $obj = new self($articleId, $maxArticleCount);
        $obj->info = $info;
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
        $output['articleId'] = $this->articleId;
        if (isset($this->info)) {
            $output['info'] = ($this->info)->toJson();
        }
        $output['maxArticleCount'] = $this->maxArticleCount;

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
        $validator = new \JsonSchema\Validator();
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
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
        if (isset($this->info)) {
            $this->info = clone $this->info;
        }
    }
}
