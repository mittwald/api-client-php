<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\App;

use InvalidArgumentException;

class SystemSoftwareVersion
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'description' => 'A `SystemSoftwareVersion` is an officially  supported version of a `SystemSoftware`, containing the necessary and recommended configuration und dependencies',
        'properties' => [
            'externalVersion' => [
                'type' => 'string',
            ],
            'id' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'internalVersion' => [
                'type' => 'string',
            ],
            'recommended' => [
                'type' => 'boolean',
            ],
            'systemSoftwareDependencies' => [
                'items' => [
                    '$ref' => '#/components/schemas/de.mittwald.v1.app.SystemSoftwareDependency',
                ],
                'type' => 'array',
            ],
            'userInputs' => [
                'items' => [
                    '$ref' => '#/components/schemas/de.mittwald.v1.app.UserInput',
                ],
                'type' => 'array',
            ],
        ],
        'required' => [
            'id',
            'internalVersion',
            'externalVersion',
        ],
        'type' => 'object',
    ];

    /**
     * @var string
     */
    private string $externalVersion;

    /**
     * @var string
     */
    private string $id;

    /**
     * @var string
     */
    private string $internalVersion;

    /**
     * @var bool|null
     */
    private ?bool $recommended = null;

    /**
     * @var SystemSoftwareDependency[]|null
     */
    private ?array $systemSoftwareDependencies = null;

    /**
     * @var UserInput[]|null
     */
    private ?array $userInputs = null;

    /**
     * @param string $externalVersion
     * @param string $id
     * @param string $internalVersion
     */
    public function __construct(string $externalVersion, string $id, string $internalVersion)
    {
        $this->externalVersion = $externalVersion;
        $this->id = $id;
        $this->internalVersion = $internalVersion;
    }

    /**
     * @return string
     */
    public function getExternalVersion(): string
    {
        return $this->externalVersion;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getInternalVersion(): string
    {
        return $this->internalVersion;
    }

    /**
     * @return bool|null
     */
    public function getRecommended(): ?bool
    {
        return $this->recommended ?? null;
    }

    /**
     * @return
     * SystemSoftwareDependency[]|null
     */
    public function getSystemSoftwareDependencies(): ?array
    {
        return $this->systemSoftwareDependencies ?? null;
    }

    /**
     * @return UserInput[]|null
     */
    public function getUserInputs(): ?array
    {
        return $this->userInputs ?? null;
    }

    /**
     * @param string $externalVersion
     * @return self
     */
    public function withExternalVersion(string $externalVersion): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($externalVersion, static::$schema['properties']['externalVersion']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->externalVersion = $externalVersion;

        return $clone;
    }

    /**
     * @param string $id
     * @return self
     */
    public function withId(string $id): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($id, static::$schema['properties']['id']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->id = $id;

        return $clone;
    }

    /**
     * @param string $internalVersion
     * @return self
     */
    public function withInternalVersion(string $internalVersion): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($internalVersion, static::$schema['properties']['internalVersion']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->internalVersion = $internalVersion;

        return $clone;
    }

    /**
     * @param bool $recommended
     * @return self
     */
    public function withRecommended(bool $recommended): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($recommended, static::$schema['properties']['recommended']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->recommended = $recommended;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutRecommended(): self
    {
        $clone = clone $this;
        unset($clone->recommended);

        return $clone;
    }

    /**
     * @param SystemSoftwareDependency[] $systemSoftwareDependencies
     * @return self
     */
    public function withSystemSoftwareDependencies(array $systemSoftwareDependencies): self
    {
        $clone = clone $this;
        $clone->systemSoftwareDependencies = $systemSoftwareDependencies;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutSystemSoftwareDependencies(): self
    {
        $clone = clone $this;
        unset($clone->systemSoftwareDependencies);

        return $clone;
    }

    /**
     * @param UserInput[] $userInputs
     * @return self
     */
    public function withUserInputs(array $userInputs): self
    {
        $clone = clone $this;
        $clone->userInputs = $userInputs;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutUserInputs(): self
    {
        $clone = clone $this;
        unset($clone->userInputs);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return SystemSoftwareVersion Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): SystemSoftwareVersion
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $externalVersion = $input->{'externalVersion'};
        $id = $input->{'id'};
        $internalVersion = $input->{'internalVersion'};
        $recommended = null;
        if (isset($input->{'recommended'})) {
            $recommended = (bool)($input->{'recommended'});
        }
        $systemSoftwareDependencies = null;
        if (isset($input->{'systemSoftwareDependencies'})) {
            $systemSoftwareDependencies = array_map(fn (array $i): SystemSoftwareDependency => SystemSoftwareDependency::buildFromInput($i, validate: $validate), $input->{'systemSoftwareDependencies'});
        }
        $userInputs = null;
        if (isset($input->{'userInputs'})) {
            $userInputs = array_map(fn (array $i): UserInput => UserInput::buildFromInput($i, validate: $validate), $input->{'userInputs'});
        }

        $obj = new self($externalVersion, $id, $internalVersion);
        $obj->recommended = $recommended;
        $obj->systemSoftwareDependencies = $systemSoftwareDependencies;
        $obj->userInputs = $userInputs;
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
        $output['externalVersion'] = $this->externalVersion;
        $output['id'] = $this->id;
        $output['internalVersion'] = $this->internalVersion;
        if (isset($this->recommended)) {
            $output['recommended'] = $this->recommended;
        }
        if (isset($this->systemSoftwareDependencies)) {
            $output['systemSoftwareDependencies'] = array_map(fn (SystemSoftwareDependency $i): array => $i->toJson(), $this->systemSoftwareDependencies);
        }
        if (isset($this->userInputs)) {
            $output['userInputs'] = array_map(fn (UserInput $i): array => $i->toJson(), $this->userInputs);
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
    }
}
