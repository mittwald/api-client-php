<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Article;

use InvalidArgumentException;
use JsonSchema\Validator;

class ReadableBookableArticleOptions
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'articleId' => [
                'example' => 'PS23-BASIC-0001',
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
                'example' => 10,
                'type' => 'number',
            ],
        ],
        'required' => [
            'articleId',
        ],
        'type' => 'object',
    ];

    /**
     * @var string
     */
    private string $articleId;

    /**
     * @var ReadableBookableArticleOptionsInfo|null
     */
    private ?ReadableBookableArticleOptionsInfo $info = null;

    /**
     * @var int|float|null
     */
    private int|float|null $maxArticleCount = null;

    /**
     * @param string $articleId
     */
    public function __construct(string $articleId)
    {
        $this->articleId = $articleId;
    }

    /**
     * @return string
     */
    public function getArticleId(): string
    {
        return $this->articleId;
    }

    /**
     * @return ReadableBookableArticleOptionsInfo|null
     */
    public function getInfo(): ?ReadableBookableArticleOptionsInfo
    {
        return $this->info ?? null;
    }

    /**
     * @return int|float|null
     */
    public function getMaxArticleCount(): int|float|null
    {
        return $this->maxArticleCount;
    }

    /**
     * @param string $articleId
     * @return self
     */
    public function withArticleId(string $articleId): self
    {
        $validator = new Validator();
        $validator->validate($articleId, static::$schema['properties']['articleId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->articleId = $articleId;

        return $clone;
    }

    /**
     * @param ReadableBookableArticleOptionsInfo $info
     * @return self
     */
    public function withInfo(ReadableBookableArticleOptionsInfo $info): self
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
        $validator = new Validator();
        $validator->validate($maxArticleCount, static::$schema['properties']['maxArticleCount']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->maxArticleCount = $maxArticleCount;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutMaxArticleCount(): self
    {
        $clone = clone $this;
        unset($clone->maxArticleCount);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return ReadableBookableArticleOptions Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ReadableBookableArticleOptions
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $articleId = $input->{'articleId'};
        $info = null;
        if (isset($input->{'info'})) {
            $info = ReadableBookableArticleOptionsInfo::buildFromInput($input->{'info'}, validate: $validate);
        }
        $maxArticleCount = null;
        if (isset($input->{'maxArticleCount'})) {
            $maxArticleCount = str_contains($input->{'maxArticleCount'}, '.') ? (float)($input->{'maxArticleCount'}) : (int)($input->{'maxArticleCount'});
        }

        $obj = new self($articleId);
        $obj->info = $info;
        $obj->maxArticleCount = $maxArticleCount;
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
        if (isset($this->maxArticleCount)) {
            $output['maxArticleCount'] = $this->maxArticleCount;
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
        if (isset($this->info)) {
            $this->info = clone $this->info;
        }
    }
}
