<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Ingress;

use InvalidArgumentException;

class Path
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'path' => [
                'type' => 'string',
            ],
            'target' => [
                'oneOf' => [
                    [
                        '$ref' => '#/components/schemas/de.mittwald.v1.ingress.TargetDirectory',
                    ],
                    [
                        '$ref' => '#/components/schemas/de.mittwald.v1.ingress.TargetUrl',
                    ],
                    [
                        '$ref' => '#/components/schemas/de.mittwald.v1.ingress.TargetInstallation',
                    ],
                ],
            ],
        ],
        'required' => [
            'path',
            'target',
        ],
        'type' => 'object',
    ];

    /**
     * @var string
     */
    private string $path;

    /**
     * @var TargetDirectory|TargetUrl|TargetInstallation
     */
    private TargetDirectory|TargetUrl|TargetInstallation $target;

    /**
     * @param string $path
     * @param TargetDirectory|TargetUrl|TargetInstallation $target
     */
    public function __construct(string $path, TargetDirectory|TargetInstallation|TargetUrl $target)
    {
        $this->path = $path;
        $this->target = $target;
    }

    /**
     * @return string
     */
    public function getPath(): string
    {
        return $this->path;
    }

    /**
     * @return
     * TargetDirectory|TargetUrl|TargetInstallation
     */
    public function getTarget(): TargetDirectory|TargetInstallation|TargetUrl
    {
        return $this->target;
    }

    /**
     * @param string $path
     * @return self
     */
    public function withPath(string $path): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($path, static::$schema['properties']['path']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->path = $path;

        return $clone;
    }

    /**
     * @param TargetDirectory|TargetUrl|TargetInstallation $target
     * @return self
     */
    public function withTarget(TargetDirectory|TargetInstallation|TargetUrl $target): self
    {
        $clone = clone $this;
        $clone->target = $target;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return Path Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): Path
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $path = $input->{'path'};
        $target = match (true) {
            TargetDirectory::validateInput($input->{'target'}, true) => TargetDirectory::buildFromInput($input->{'target'}, validate: $validate),
            TargetUrl::validateInput($input->{'target'}, true) => TargetUrl::buildFromInput($input->{'target'}, validate: $validate),
            TargetInstallation::validateInput($input->{'target'}, true) => TargetInstallation::buildFromInput($input->{'target'}, validate: $validate),
        };

        $obj = new self($path, $target);

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
        $output['path'] = $this->path;
        $output['target'] = match (true) {
            ($this->target) instanceof TargetDirectory, ($this->target) instanceof TargetUrl, ($this->target) instanceof TargetInstallation => $this->target->toJson(),
        };

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
        $this->target = match (true) {
            ($this->target) instanceof TargetDirectory, ($this->target) instanceof TargetUrl, ($this->target) instanceof TargetInstallation => $this->target,
        };
    }
}
