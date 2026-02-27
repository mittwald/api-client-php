<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Mail\DeprecatedMailUpdateProjectMailSetting;

use InvalidArgumentException;
use JsonSchema\Validator;

class DeprecatedMailUpdateProjectMailSettingRequestBodyAlternative1
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'properties' => [
            'blacklist' => [
                'items' => [
                    'pattern' => '^([a-zA-Z0-9.!#$%&\'*\\/=?^_{|}~-]+@[a-zA-Z0-9-*]+(?:\\.([a-zA-Z0-9-]+|\\*))+)$',
                    'type' => 'string',
                ],
                'type' => 'array',
            ],
        ],
        'required' => [
            'blacklist',
        ],
        'type' => 'object',
    ];

    /**
     * @var string[]
     */
    private array $blacklist;

    /**
     * @param string[] $blacklist
     */
    public function __construct(array $blacklist)
    {
        $this->blacklist = $blacklist;
    }

    /**
     * @return string[]
     */
    public function getBlacklist(): array
    {
        return $this->blacklist;
    }

    /**
     * @param string[] $blacklist
     */
    public function withBlacklist(array $blacklist): self
    {
        $validator = new Validator();
        $validator->validate($blacklist, self::$internalValidationSchema['properties']['blacklist']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->blacklist = $blacklist;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return DeprecatedMailUpdateProjectMailSettingRequestBodyAlternative1 Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): DeprecatedMailUpdateProjectMailSettingRequestBodyAlternative1
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $blacklist = $input->{'blacklist'};

        $obj = new self($blacklist);

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
        $output['blacklist'] = $this->blacklist;

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
