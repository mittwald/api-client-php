<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionChangeContext;

use InvalidArgumentException;
use JsonSchema\Validator;
use Mittwald\ApiClient\Generated\V2\Schemas\Marketplace\Context;

class ExtensionChangeContextOKResponseBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'cleaningUpInstances' => [
                'description' => 'If this value is true the context will change asynchronously after removing all extension-instances of this extension.',
                'example' => true,
                'type' => 'boolean',
            ],
            'currentContext' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.marketplace.Context',
            ],
            'id' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
        ],
        'required' => [
            'id',
            'currentContext',
            'cleaningUpInstances',
        ],
        'type' => 'object',
    ];

    /**
     * If this value is true the context will change asynchronously after removing all extension-instances of this extension.
     */
    private bool $cleaningUpInstances;

    private Context $currentContext;

    private string $id;

    public function __construct(bool $cleaningUpInstances, Context $currentContext, string $id)
    {
        $this->cleaningUpInstances = $cleaningUpInstances;
        $this->currentContext = $currentContext;
        $this->id = $id;
    }

    public function getCleaningUpInstances(): bool
    {
        return $this->cleaningUpInstances;
    }

    public function getCurrentContext(): Context
    {
        return $this->currentContext;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function withCleaningUpInstances(bool $cleaningUpInstances): self
    {
        $validator = new Validator();
        $validator->validate($cleaningUpInstances, self::$schema['properties']['cleaningUpInstances']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->cleaningUpInstances = $cleaningUpInstances;

        return $clone;
    }

    public function withCurrentContext(Context $currentContext): self
    {
        $clone = clone $this;
        $clone->currentContext = $currentContext;

        return $clone;
    }

    public function withId(string $id): self
    {
        $validator = new Validator();
        $validator->validate($id, self::$schema['properties']['id']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->id = $id;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return ExtensionChangeContextOKResponseBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ExtensionChangeContextOKResponseBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $cleaningUpInstances = (bool)($input->{'cleaningUpInstances'});
        $currentContext = Context::from($input->{'currentContext'});
        $id = $input->{'id'};

        $obj = new self($cleaningUpInstances, $currentContext, $id);

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
        $output['cleaningUpInstances'] = $this->cleaningUpInstances;
        $output['currentContext'] = $this->currentContext->value;
        $output['id'] = $this->id;

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
}
