<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\AIHosting\ProjectLinkContainer;

use InvalidArgumentException;
use JsonSchema\Validator;

class ProjectLinkContainerRequestBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'properties' => [
            'containerId' => [
                'type' => 'string',
            ],
            'ingressId' => [
                'type' => 'string',
            ],
            'stackId' => [
                'type' => 'string',
            ],
        ],
        'required' => [
            'containerId',
            'stackId',
            'ingressId',
        ],
        'type' => 'object',
    ];

    private string $containerId;

    private string $ingressId;

    private string $stackId;

    public function __construct(string $containerId, string $ingressId, string $stackId)
    {
        $this->containerId = $containerId;
        $this->ingressId = $ingressId;
        $this->stackId = $stackId;
    }

    public function getContainerId(): string
    {
        return $this->containerId;
    }

    public function getIngressId(): string
    {
        return $this->ingressId;
    }

    public function getStackId(): string
    {
        return $this->stackId;
    }

    public function withContainerId(string $containerId): self
    {
        $validator = new Validator();
        $validator->validate($containerId, self::$internalValidationSchema['properties']['containerId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->containerId = $containerId;

        return $clone;
    }

    public function withIngressId(string $ingressId): self
    {
        $validator = new Validator();
        $validator->validate($ingressId, self::$internalValidationSchema['properties']['ingressId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->ingressId = $ingressId;

        return $clone;
    }

    public function withStackId(string $stackId): self
    {
        $validator = new Validator();
        $validator->validate($stackId, self::$internalValidationSchema['properties']['stackId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->stackId = $stackId;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return ProjectLinkContainerRequestBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ProjectLinkContainerRequestBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $containerId = $input->{'containerId'};
        $ingressId = $input->{'ingressId'};
        $stackId = $input->{'stackId'};

        $obj = new self($containerId, $ingressId, $stackId);

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
        $output['containerId'] = $this->containerId;
        $output['ingressId'] = $this->ingressId;
        $output['stackId'] = $this->stackId;

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
        $validator->validate($input, self::$internalValidationSchema);

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
