<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\App\RequestAppinstallation;

use InvalidArgumentException;
use JsonSchema\Validator;
use Mittwald\ApiClient\Generated\V2\Schemas\App\AppUpdatePolicy;
use Mittwald\ApiClient\Generated\V2\Schemas\App\SavedUserInput;

class RequestAppinstallationRequestBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'appVersionId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'description' => [
                'type' => 'string',
            ],
            'updatePolicy' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.app.AppUpdatePolicy',
            ],
            'userInputs' => [
                'items' => [
                    '$ref' => '#/components/schemas/de.mittwald.v1.app.SavedUserInput',
                ],
                'type' => 'array',
            ],
        ],
        'required' => [
            'appVersionId',
            'description',
            'userInputs',
            'updatePolicy',
        ],
        'type' => 'object',
    ];

    private string $appVersionId;

    private string $description;

    private AppUpdatePolicy $updatePolicy;

    /**
     * @var SavedUserInput[]
     */
    private array $userInputs;

    /**
     * @param SavedUserInput[] $userInputs
     */
    public function __construct(string $appVersionId, string $description, AppUpdatePolicy $updatePolicy, array $userInputs)
    {
        $this->appVersionId = $appVersionId;
        $this->description = $description;
        $this->updatePolicy = $updatePolicy;
        $this->userInputs = $userInputs;
    }

    public function getAppVersionId(): string
    {
        return $this->appVersionId;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getUpdatePolicy(): AppUpdatePolicy
    {
        return $this->updatePolicy;
    }

    /**
     * @return SavedUserInput[]
     */
    public function getUserInputs(): array
    {
        return $this->userInputs;
    }

    public function withAppVersionId(string $appVersionId): self
    {
        $validator = new Validator();
        $validator->validate($appVersionId, static::$schema['properties']['appVersionId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->appVersionId = $appVersionId;

        return $clone;
    }

    public function withDescription(string $description): self
    {
        $validator = new Validator();
        $validator->validate($description, static::$schema['properties']['description']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->description = $description;

        return $clone;
    }

    public function withUpdatePolicy(AppUpdatePolicy $updatePolicy): self
    {
        $clone = clone $this;
        $clone->updatePolicy = $updatePolicy;

        return $clone;
    }

    /**
     * @param SavedUserInput[] $userInputs
     */
    public function withUserInputs(array $userInputs): self
    {
        $clone = clone $this;
        $clone->userInputs = $userInputs;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return RequestAppinstallationRequestBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): RequestAppinstallationRequestBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $appVersionId = $input->{'appVersionId'};
        $description = $input->{'description'};
        $updatePolicy = AppUpdatePolicy::from($input->{'updatePolicy'});
        $userInputs = array_map(fn (array|object $i): SavedUserInput => SavedUserInput::buildFromInput($i, validate: $validate), $input->{'userInputs'});

        $obj = new self($appVersionId, $description, $updatePolicy, $userInputs);

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
        $output['appVersionId'] = $this->appVersionId;
        $output['description'] = $this->description;
        $output['updatePolicy'] = $this->updatePolicy->value;
        $output['userInputs'] = array_map(fn (SavedUserInput $i): array => $i->toJson(), $this->userInputs);

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
