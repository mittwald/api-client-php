<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Contract\InvoiceUpdateInvoiceSettings;

class InvoiceUpdateInvoiceSettingsRequest
{
    public const method = 'put';

    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'type' => 'object',
        'properties' => [
            'customerId' => [
                'type' => 'string',
            ],
            'body' => [
                'properties' => [
                    'additionalEmailRecipients' => [
                        'example' => [
                            'hallo@test.de',
                        ],
                        'items' => [
                            'format' => 'email',
                            'type' => 'string',
                        ],
                        'type' => 'array',
                    ],
                    'invoicePeriod' => [
                        'example' => 1,
                        'minimum' => 0,
                        'type' => 'integer',
                    ],
                    'paymentSettings' => [
                        '$ref' => '#/components/schemas/de.mittwald.v1.invoice.PaymentSettings',
                    ],
                    'printedInvoices' => [
                        'type' => 'boolean',
                    ],
                    'recipient' => [
                        '$ref' => '#/components/schemas/de.mittwald.v1.invoice.Recipient',
                    ],
                    'recipientSameAsOwner' => [
                        'type' => 'boolean',
                    ],
                    'targetDay' => [
                        'example' => 15,
                        'maximum' => 28,
                        'minimum' => 0,
                        'type' => 'integer',
                    ],
                ],
                'required' => [
                    'invoicePeriod',
                    'paymentSettings',
                ],
                'type' => 'object',
            ],
        ],
        'required' => [
            'customerId',
            'body',
        ],
    ];

    /**
     * @var string
     */
    private string $customerId;

    /**
     * @var InvoiceUpdateInvoiceSettingsRequestBody
     */
    private InvoiceUpdateInvoiceSettingsRequestBody $body;

    private array $headers = [
        
    ];

    /**
     * @param string $customerId
     * @param InvoiceUpdateInvoiceSettingsRequestBody $body
     */
    public function __construct(string $customerId, InvoiceUpdateInvoiceSettingsRequestBody $body)
    {
        $this->customerId = $customerId;
        $this->body = $body;
    }

    /**
     * @return string
     */
    public function getCustomerId() : string
    {
        return $this->customerId;
    }

    /**
     * @return InvoiceUpdateInvoiceSettingsRequestBody
     */
    public function getBody() : InvoiceUpdateInvoiceSettingsRequestBody
    {
        return $this->body;
    }

    /**
     * @param string $customerId
     * @return self
     */
    public function withCustomerId(string $customerId) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($customerId, static::$schema['properties']['customerId']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->customerId = $customerId;

        return $clone;
    }

    /**
     * @param InvoiceUpdateInvoiceSettingsRequestBody $body
     * @return self
     */
    public function withBody(InvoiceUpdateInvoiceSettingsRequestBody $body) : self
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
     * @return InvoiceUpdateInvoiceSettingsRequest Created instance
     * @throws \InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true) : InvoiceUpdateInvoiceSettingsRequest
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $customerId = $input->{'customerId'};
        $body = InvoiceUpdateInvoiceSettingsRequestBody::buildFromInput($input->{'body'}, validate: $validate);

        $obj = new self($customerId, $body);

        return $obj;
    }

    /**
     * Converts this object back to a simple array that can be JSON-serialized
     *
     * @return array Converted array
     */
    public function toJson() : array
    {
        $output = [];
        $output['customerId'] = $this->customerId;
        $output['body'] = ($this->body)->toJson();

        return $output;
    }

    /**
     * Validates an input array
     *
     * @param array|object $input Input data
     * @param bool $return Return instead of throwing errors
     * @return bool Validation result
     * @throws \InvalidArgumentException
     */
    public static function validateInput(array|object $input, bool $return = false) : bool
    {
        $validator = new \JsonSchema\Validator();
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        $validator->validate($input, static::$schema);

        if (!$validator->isValid() && !$return) {
            $errors = array_map(function(array $e): string {
                return $e["property"] . ": " . $e["message"];
            }, $validator->getErrors());
            throw new \InvalidArgumentException(join(", ", $errors));
        }

        return $validator->isValid();
    }

    public function __clone()
    {
        $this->body = clone $this->body;
    }

    public function getUrl() : string
    {
        $mapped = $this->toJson();
        $customerId = urlencode($mapped['customerId']);
        return '/v2/customers/' . $customerId . '/invoice-settings';
    }

    public function getQuery() : array
    {
        $mapped = $this->toJson();
        $query = [];
        return $query;
    }

    public function getHeaders() : array
    {
        return $this->headers;
    }

    public function withHeader(string $name, string|array $value) : self
    {
        $clone = clone $this;
        $clone->headers[$name] = $value;
        return $clone;
    }
}

