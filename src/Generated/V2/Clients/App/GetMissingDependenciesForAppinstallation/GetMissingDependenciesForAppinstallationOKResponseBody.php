<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\App\GetMissingDependenciesForAppinstallation;

use InvalidArgumentException;
use JsonSchema\Validator;
use Mittwald\ApiClient\Generated\V2\Schemas\App\SystemSoftwareDependency;
use Mittwald\ApiClient\Generated\V2\Schemas\App\UserInput;

class GetMissingDependenciesForAppinstallationOKResponseBody
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'missingSystemSoftwareDependencies' => [
                'items' => [
                    '$ref' => '#/components/schemas/de.mittwald.v1.app.SystemSoftwareDependency',
                ],
                'type' => 'array',
            ],
            'missingUserInputs' => [
                'items' => [
                    '$ref' => '#/components/schemas/de.mittwald.v1.app.UserInput',
                ],
                'type' => 'array',
            ],
        ],
        'type' => 'object',
    ];

    /**
     * @var SystemSoftwareDependency[]|null
     */
    private ?array $missingSystemSoftwareDependencies = null;

    /**
     * @var UserInput[]|null
     */
    private ?array $missingUserInputs = null;

    /**
     *
     */
    public function __construct()
    {
    }

    /**
     * @return
     * \Mittwald\ApiClient\Generated\V2\Schemas\App\SystemSoftwareDependency[]|null
     */
    public function getMissingSystemSoftwareDependencies(): ?array
    {
        return $this->missingSystemSoftwareDependencies ?? null;
    }

    /**
     * @return UserInput[]|null
     */
    public function getMissingUserInputs(): ?array
    {
        return $this->missingUserInputs ?? null;
    }

    /**
     * @param SystemSoftwareDependency[] $missingSystemSoftwareDependencies
     * @return self
     */
    public function withMissingSystemSoftwareDependencies(array $missingSystemSoftwareDependencies): self
    {
        $clone = clone $this;
        $clone->missingSystemSoftwareDependencies = $missingSystemSoftwareDependencies;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutMissingSystemSoftwareDependencies(): self
    {
        $clone = clone $this;
        unset($clone->missingSystemSoftwareDependencies);

        return $clone;
    }

    /**
     * @param UserInput[] $missingUserInputs
     * @return self
     */
    public function withMissingUserInputs(array $missingUserInputs): self
    {
        $clone = clone $this;
        $clone->missingUserInputs = $missingUserInputs;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutMissingUserInputs(): self
    {
        $clone = clone $this;
        unset($clone->missingUserInputs);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return GetMissingDependenciesForAppinstallationOKResponseBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): GetMissingDependenciesForAppinstallationOKResponseBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $missingSystemSoftwareDependencies = null;
        if (isset($input->{'missingSystemSoftwareDependencies'})) {
            $missingSystemSoftwareDependencies = array_map(fn (array|object $i): SystemSoftwareDependency => SystemSoftwareDependency::buildFromInput($i, validate: $validate), $input->{'missingSystemSoftwareDependencies'});
        }
        $missingUserInputs = null;
        if (isset($input->{'missingUserInputs'})) {
            $missingUserInputs = array_map(fn (array|object $i): UserInput => UserInput::buildFromInput($i, validate: $validate), $input->{'missingUserInputs'});
        }

        $obj = new self();
        $obj->missingSystemSoftwareDependencies = $missingSystemSoftwareDependencies;
        $obj->missingUserInputs = $missingUserInputs;
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
        if (isset($this->missingSystemSoftwareDependencies)) {
            $output['missingSystemSoftwareDependencies'] = array_map(fn (SystemSoftwareDependency $i): array => $i->toJson(), $this->missingSystemSoftwareDependencies);
        }
        if (isset($this->missingUserInputs)) {
            $output['missingUserInputs'] = array_map(fn (UserInput $i): array => $i->toJson(), $this->missingUserInputs);
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
}
