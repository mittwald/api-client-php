<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressCreateIngress;

use InvalidArgumentException;
use JsonSchema\Validator;
use Mittwald\ApiClient\Generated\V2\Schemas\Ingress\Ownership;

class IngressCreateIngressCreatedResponseBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'properties' => [
            'id' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'ownership' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.ingress.Ownership',
            ],
        ],
        'required' => [
            'id',
            'ownership',
        ],
        'type' => 'object',
    ];

    private string $id;

    private Ownership $ownership;

    public function __construct(string $id, Ownership $ownership)
    {
        $this->id = $id;
        $this->ownership = $ownership;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getOwnership(): Ownership
    {
        return $this->ownership;
    }

    public function withId(string $id): self
    {
        $validator = new Validator();
        $validator->validate($id, self::$internalValidationSchema['properties']['id']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->id = $id;

        return $clone;
    }

    public function withOwnership(Ownership $ownership): self
    {
        $clone = clone $this;
        $clone->ownership = $ownership;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return IngressCreateIngressCreatedResponseBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): IngressCreateIngressCreatedResponseBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $id = $input->{'id'};
        $ownership = Ownership::buildFromInput($input->{'ownership'}, validate: $validate);

        $obj = new self($id, $ownership);

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
        $output['id'] = $this->id;
        $output['ownership'] = $this->ownership->toJson();

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
