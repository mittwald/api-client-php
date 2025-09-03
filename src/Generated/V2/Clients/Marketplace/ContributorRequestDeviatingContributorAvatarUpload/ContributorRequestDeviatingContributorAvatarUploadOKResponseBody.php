<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ContributorRequestDeviatingContributorAvatarUpload;

use InvalidArgumentException;
use JsonSchema\Validator;

class ContributorRequestDeviatingContributorAvatarUploadOKResponseBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'properties' => [
            'avatarRefId' => [
                'description' => 'Use the avatarRefId as updload token at `/v2/files/{logoRefId}`.',
                'format' => 'uuid',
                'type' => 'string',
            ],
            'rules' => [
                'description' => 'Constraints for the logo image upload.',
                'properties' => [
                    'extensions' => [
                        'items' => [
                            'example' => '.png',
                            'type' => 'string',
                        ],
                        'type' => 'array',
                    ],
                    'fileTypes' => [
                        'items' => [
                            'properties' => [
                                'extensions' => [
                                    'items' => [
                                        'example' => '.png',
                                        'type' => 'string',
                                    ],
                                    'type' => 'array',
                                ],
                                'mimeType' => [
                                    'example' => 'image/png',
                                    'type' => 'string',
                                ],
                            ],
                            'required' => [
                                'mimeType',
                                'extensions',
                            ],
                            'type' => 'object',
                        ],
                        'type' => 'array',
                    ],
                    'maxSizeInBytes' => [
                        'type' => 'integer',
                    ],
                    'mimeTypes' => [
                        'items' => [
                            'example' => 'image/png',
                            'type' => 'string',
                        ],
                        'type' => 'array',
                    ],
                    'properties' => [
                        'properties' => [
                            'imageDimensions' => [
                                'properties' => [
                                    'max' => [
                                        'properties' => [
                                            'height' => [
                                                'type' => 'integer',
                                            ],
                                            'width' => [
                                                'type' => 'integer',
                                            ],
                                        ],
                                        'type' => 'object',
                                    ],
                                    'min' => [
                                        'properties' => [
                                            'height' => [
                                                'type' => 'integer',
                                            ],
                                            'width' => [
                                                'type' => 'integer',
                                            ],
                                        ],
                                        'type' => 'object',
                                    ],
                                ],
                                'required' => [
                                    'min',
                                    'max',
                                ],
                                'type' => 'object',
                            ],
                        ],
                        'type' => 'object',
                    ],
                ],
                'required' => [
                    'mimeTypes',
                    'extensions',
                    'fileTypes',
                    'maxSizeInBytes',
                ],
                'type' => 'object',
            ],
        ],
        'required' => [
            'avatarRefId',
            'rules',
        ],
        'type' => 'object',
    ];

    /**
     * Use the avatarRefId as updload token at `/v2/files/{logoRefId}`.
     */
    private string $avatarRefId;

    /**
     * Constraints for the logo image upload.
     */
    private ContributorRequestDeviatingContributorAvatarUploadOKResponseBodyRules $rules;

    public function __construct(string $avatarRefId, ContributorRequestDeviatingContributorAvatarUploadOKResponseBodyRules $rules)
    {
        $this->avatarRefId = $avatarRefId;
        $this->rules = $rules;
    }

    public function getAvatarRefId(): string
    {
        return $this->avatarRefId;
    }

    public function getRules(): ContributorRequestDeviatingContributorAvatarUploadOKResponseBodyRules
    {
        return $this->rules;
    }

    public function withAvatarRefId(string $avatarRefId): self
    {
        $validator = new Validator();
        $validator->validate($avatarRefId, self::$internalValidationSchema['properties']['avatarRefId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->avatarRefId = $avatarRefId;

        return $clone;
    }

    public function withRules(ContributorRequestDeviatingContributorAvatarUploadOKResponseBodyRules $rules): self
    {
        $clone = clone $this;
        $clone->rules = $rules;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return ContributorRequestDeviatingContributorAvatarUploadOKResponseBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ContributorRequestDeviatingContributorAvatarUploadOKResponseBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $avatarRefId = $input->{'avatarRefId'};
        $rules = ContributorRequestDeviatingContributorAvatarUploadOKResponseBodyRules::buildFromInput($input->{'rules'}, validate: $validate);

        $obj = new self($avatarRefId, $rules);

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
        $output['avatarRefId'] = $this->avatarRefId;
        $output['rules'] = ($this->rules)->toJson();

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
        $this->rules = clone $this->rules;
    }
}
