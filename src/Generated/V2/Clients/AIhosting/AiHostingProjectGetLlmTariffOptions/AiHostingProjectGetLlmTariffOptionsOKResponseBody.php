<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\AIhosting\AiHostingProjectGetLlmTariffOptions;

use InvalidArgumentException;
use JsonSchema\Validator;
use Mittwald\ApiClient\Generated\V2\Schemas\Aihosting\TariffUsage;

class AiHostingProjectGetLlmTariffOptionsOKResponseBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'properties' => [
            'licences' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.aihosting.TariffUsage',
            ],
        ],
        'required' => [
            'licences',
        ],
        'type' => 'object',
    ];

    private TariffUsage $licences;

    public function __construct(TariffUsage $licences)
    {
        $this->licences = $licences;
    }

    public function getLicences(): TariffUsage
    {
        return $this->licences;
    }

    public function withLicences(TariffUsage $licences): self
    {
        $clone = clone $this;
        $clone->licences = $licences;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return AiHostingProjectGetLlmTariffOptionsOKResponseBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): AiHostingProjectGetLlmTariffOptionsOKResponseBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $licences = TariffUsage::buildFromInput($input->{'licences'}, validate: $validate);

        $obj = new self($licences);

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
        $output['licences'] = $this->licences->toJson();

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
