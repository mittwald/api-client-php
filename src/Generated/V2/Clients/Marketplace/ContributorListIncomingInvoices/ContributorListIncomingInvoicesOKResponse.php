<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ContributorListIncomingInvoices;

use InvalidArgumentException;
use JsonSchema\Validator;
use Mittwald\ApiClient\Client\ResponseContainer;
use Psr\Http\Message\ResponseInterface;

class ContributorListIncomingInvoicesOKResponse implements ResponseContainer
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
                'items' => [
                    'properties' => [
                        'currency' => [
                            'example' => 'EUR',
                            'type' => 'string',
                        ],
                        'customerId' => [
                            'example' => '6439a2f4-5de2-4314-bae2-b6edb4eb4c37',
                            'type' => 'string',
                        ],
                        'customerName' => [
                            'example' => 'Meine Organisation',
                            'type' => 'string',
                        ],
                        'customerNumber' => [
                            'example' => '4151123',
                            'type' => 'string',
                        ],
                        'date' => [
                            'format' => 'date-time',
                            'type' => 'string',
                        ],
                        'id' => [
                            'format' => 'uuid',
                            'type' => 'string',
                        ],
                        'invoiceNumber' => [
                            'example' => 'RG1234567',
                            'type' => 'string',
                        ],
                        'pdfId' => [
                            'format' => 'uuid',
                            'type' => 'string',
                        ],
                        'recipient' => [
                            '$ref' => '#/components/schemas/de.mittwald.v1.invoice.Recipient',
                        ],
                        'totalGross' => [
                            'example' => 595,
                            'type' => 'number',
                        ],
                        'totalNet' => [
                            'example' => 500,
                            'type' => 'number',
                        ],
                    ],
                    'required' => [
                        'id',
                        'invoiceNumber',
                        'customerId',
                        'customerNumber',
                        'customerName',
                        'date',
                        'pdfId',
                        'recipient',
                        'totalNet',
                        'totalGross',
                        'currency',
                    ],
                    'type' => 'object',
                ],
                'type' => 'array',
            ],
        ],
    ];

    /**
     * @var ContributorListIncomingInvoicesOKResponseBodyItem[]
     */
    private array $body;

    private ResponseInterface|null $httpResponse = null;

    /**
     * @param ContributorListIncomingInvoicesOKResponseBodyItem[] $body
     */
    public function __construct(array $body)
    {
        $this->body = $body;
    }

    /**
     * @return ContributorListIncomingInvoicesOKResponseBodyItem[]
     */
    public function getBody(): array
    {
        return $this->body;
    }

    /**
     * @param ContributorListIncomingInvoicesOKResponseBodyItem[] $body
     */
    public function withBody(array $body): self
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
     * @return ContributorListIncomingInvoicesOKResponse Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ContributorListIncomingInvoicesOKResponse
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $body = array_map(fn (array|object $i): ContributorListIncomingInvoicesOKResponseBodyItem => ContributorListIncomingInvoicesOKResponseBodyItem::buildFromInput($i, validate: $validate), $input->{'body'});

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
        $output['body'] = array_map(fn (ContributorListIncomingInvoicesOKResponseBodyItem $i) => $i->toJson(), $this->body);

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
        $this->body = array_map(fn (ContributorListIncomingInvoicesOKResponseBodyItem $i) => clone $i, $this->body);
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
