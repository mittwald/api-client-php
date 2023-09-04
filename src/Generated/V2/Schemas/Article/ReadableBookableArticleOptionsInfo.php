<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Article;

class ReadableBookableArticleOptionsInfo
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
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
    ];

    /**
     * @var string|null
     */
    private ?string $articleName = null;

    /**
     * @var string|null
     */
    private ?string $articleTemplateName = null;

    /**
     * @var bool|null
     */
    private ?bool $fromArticleTemplate = null;

    /**
     *
     */
    public function __construct()
    {
    }

    /**
     * @return string|null
     */
    public function getArticleName() : ?string
    {
        return $this->articleName ?? null;
    }

    /**
     * @return string|null
     */
    public function getArticleTemplateName() : ?string
    {
        return $this->articleTemplateName ?? null;
    }

    /**
     * @return bool|null
     */
    public function getFromArticleTemplate() : ?bool
    {
        return $this->fromArticleTemplate ?? null;
    }

    /**
     * @param string $articleName
     * @return self
     */
    public function withArticleName(string $articleName) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($articleName, static::$schema['properties']['articleName']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->articleName = $articleName;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutArticleName() : self
    {
        $clone = clone $this;
        unset($clone->articleName);

        return $clone;
    }

    /**
     * @param string $articleTemplateName
     * @return self
     */
    public function withArticleTemplateName(string $articleTemplateName) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($articleTemplateName, static::$schema['properties']['articleTemplateName']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->articleTemplateName = $articleTemplateName;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutArticleTemplateName() : self
    {
        $clone = clone $this;
        unset($clone->articleTemplateName);

        return $clone;
    }

    /**
     * @param bool $fromArticleTemplate
     * @return self
     */
    public function withFromArticleTemplate(bool $fromArticleTemplate) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($fromArticleTemplate, static::$schema['properties']['fromArticleTemplate']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->fromArticleTemplate = $fromArticleTemplate;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutFromArticleTemplate() : self
    {
        $clone = clone $this;
        unset($clone->fromArticleTemplate);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return ReadableBookableArticleOptionsInfo Created instance
     * @throws \InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true) : ReadableBookableArticleOptionsInfo
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $articleName = null;
        if (isset($input->{'articleName'})) {
            $articleName = $input->{'articleName'};
        }
        $articleTemplateName = null;
        if (isset($input->{'articleTemplateName'})) {
            $articleTemplateName = $input->{'articleTemplateName'};
        }
        $fromArticleTemplate = null;
        if (isset($input->{'fromArticleTemplate'})) {
            $fromArticleTemplate = (bool)($input->{'fromArticleTemplate'});
        }

        $obj = new self();
        $obj->articleName = $articleName;
        $obj->articleTemplateName = $articleTemplateName;
        $obj->fromArticleTemplate = $fromArticleTemplate;
        return $obj;
    }

    /**
     * Converts this object back to a simple array that can be JSON-serialized
     *
     * @return array Converted array
     */
    public function toJson() : array
    {
        $output = [];
        if (isset($this->articleName)) {
            $output['articleName'] = $this->articleName;
        }
        if (isset($this->articleTemplateName)) {
            $output['articleTemplateName'] = $this->articleTemplateName;
        }
        if (isset($this->fromArticleTemplate)) {
            $output['fromArticleTemplate'] = $this->fromArticleTemplate;
        }

        return $output;
    }

    /**
     * Validates an input array
     *
     * @param array|object $input Input data
     * @param bool $return Return instead of throwing errors
     * @return bool Validation result
     * @throws \InvalidArgumentException
     */
    public static function validateInput(array|object $input, bool $return = false) : bool
    {
        $validator = new \JsonSchema\Validator();
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        $validator->validate($input, static::$schema);

        if (!$validator->isValid() && !$return) {
            $errors = array_map(function(array $e): string {
                return $e["property"] . ": " . $e["message"];
            }, $validator->getErrors());
            throw new \InvalidArgumentException(join(", ", $errors));
        }

        return $validator->isValid();
    }

    public function __clone()
    {
    }
}

