<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionUpdateExtensionPricing;

use InvalidArgumentException;
use JsonSchema\Validator;
use Mittwald\ApiClient\Client\ResponseContainer;
use Psr\Http\Message\ResponseInterface;

class ExtensionUpdateExtensionPricingOKResponse implements ResponseContainer
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'type' => 'object',
        'required' => [
            'body',
        ],
        'properties' => [
            'body' => [
                'properties' => [
                    'extensionId' => [
                        'description' => 'The ID of the Extension.',
                        'format' => 'uuid',
                        'type' => 'string',
                    ],
                    'nextPossiblePriceChange' => [
                        'description' => 'The time until which the contributor is blocked from changing the price again.',
                        'format' => 'date-time',
                        'type' => 'string',
                    ],
                    'priceChangeConsequence' => [
                        'properties' => [
                            'contributorConsequence' => [
                                'description' => 'Description of the consequence for the Extension from the perspective of the contributor. Values: * "NONE": No consequence. * "EDIT_BLOCK": The Extension will be blocked for editing by the contributor for 30 days.
',
                                'enum' => [
                                    'NONE',
                                    'EDIT_BLOCK',
                                ],
                                'type' => 'string',
                            ],
                            'globalCustomerConsequence' => [
                                'description' => 'Description of the consequence for all Customers of the Extension. Values: * "NONE": No consequence. * "INFO": Customers will be informed about the upcoming changes to their contracts. * "CONFIRM_REQUIRED": Customers will have to confirm or select the accepted changes to their contracts within 30 days or their contracts will be automatically cancelled.
',
                                'enum' => [
                                    'NONE',
                                    'INFO',
                                    'CONFIRM_REQUIRED',
                                ],
                                'type' => 'string',
                            ],
                            'variantConsequences' => [
                                'items' => [
                                    'properties' => [
                                        'consequence' => [
                                            'description' => 'The individual consequence for customers of a specific variant of the Extension. Values: * "NONE": No consequence. * "INFO": Customers will be informed about the upcoming changes to their contracts. * "CONFIRM_REQUIRED": Customers will have to confirm or select the accepted changes to their contracts within 30 days or their contracts will be automatically cancelled.
',
                                            'enum' => [
                                                'NONE',
                                                'INFO',
                                                'CONFIRM_REQUIRED',
                                            ],
                                            'type' => 'string',
                                        ],
                                        'deletionDeadline' => [
                                            'description' => 'The date the variant will ne deleted',
                                            'format' => 'date-time',
                                            'type' => 'string',
                                        ],
                                        'variantKey' => [
                                            'description' => 'The key of the variant of the Extension.',
                                            'type' => 'string',
                                        ],
                                    ],
                                    'type' => 'object',
                                ],
                                'type' => 'array',
                            ],
                        ],
                        'required' => [
                            'contributorConsequence',
                            'globalCustomerConsequence',
                            'variantConsequences',
                        ],
                        'type' => 'object',
                    ],
                ],
                'required' => [
                    'extensionId',
                    'priceChangeConsequence',
                ],
                'type' => 'object',
            ],
        ],
    ];

    private ExtensionUpdateExtensionPricingOKResponseBody $body;

    private ResponseInterface|null $httpResponse = null;

    public function __construct(ExtensionUpdateExtensionPricingOKResponseBody $body)
    {
        $this->body = $body;
    }

    public function getBody(): ExtensionUpdateExtensionPricingOKResponseBody
    {
        return $this->body;
    }

    public function withBody(ExtensionUpdateExtensionPricingOKResponseBody $body): self
    {
        $clone = clone $this;
        $clone->body = $body;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return ExtensionUpdateExtensionPricingOKResponse Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ExtensionUpdateExtensionPricingOKResponse
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $body = ExtensionUpdateExtensionPricingOKResponseBody::buildFromInput($input->{'body'}, validate: $validate);

        $obj = new self($body);

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
        $output['body'] = ($this->body)->toJson();

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
        $this->body = clone $this->body;
    }

    public static function fromResponse(ResponseInterface $httpResponse): self
    {
        $parsedBody = json_decode($httpResponse->getBody()->getContents(), associative: true);
        $response = static::buildFromInput(['body' => $parsedBody], validate: false);
        $response->httpResponse = $httpResponse;
        return $response;
    }

    public function getResponse(): ResponseInterface|null
    {
        return $this->httpResponse;
    }
}
