<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Article;

use InvalidArgumentException;
use JsonSchema\Validator;

/**
 * Auto-generated class for de.mittwald.v1.article.ReadableChangeArticleOptions.
 *
 * DO NOT EDIT; this class was generated by the mittwald/api-client-builder package
 * (https://github.com/mittwald/api-client-php-builder). Please make any changes
 * there.
 *
 * @generated
 * @see https://github.com/mittwald/api-client-php-builder
 */
class ReadableChangeArticleOptions
{
    /**
     * Schema used to validate input for creating instances of this class
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
        ],
        'required' => [
            'articleId',
        ],
        'type' => 'object',
    ];

    private string $articleId;

    private ?ReadableChangeArticleOptionsInfo $info = null;

    public function __construct(string $articleId)
    {
        $this->articleId = $articleId;
    }

    public function getArticleId(): string
    {
        return $this->articleId;
    }

    public function getInfo(): ?ReadableChangeArticleOptionsInfo
    {
        return $this->info ?? null;
    }

    public function withArticleId(string $articleId): self
    {
        $validator = new Validator();
        $validator->validate($articleId, self::$schema['properties']['articleId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->articleId = $articleId;

        return $clone;
    }

    public function withInfo(ReadableChangeArticleOptionsInfo $info): self
    {
        $clone = clone $this;
        $clone->info = $info;

        return $clone;
    }

    public function withoutInfo(): self
    {
        $clone = clone $this;
        unset($clone->info);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return ReadableChangeArticleOptions Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ReadableChangeArticleOptions
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $articleId = $input->{'articleId'};
        $info = null;
        if (isset($input->{'info'})) {
            $info = ReadableChangeArticleOptionsInfo::buildFromInput($input->{'info'}, validate: $validate);
        }

        $obj = new self($articleId);
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
        if (isset($this->info)) {
            $this->info = clone $this->info;
        }
    }
}
