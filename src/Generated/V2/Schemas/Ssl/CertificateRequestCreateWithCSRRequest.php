<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Ssl;

use InvalidArgumentException;
use JsonSchema\Validator;

/**
 * Auto-generated class for
 * de.mittwald.v1.ssl.CertificateRequestCreateWithCSRRequest.
 *
 * DO NOT EDIT; this class was generated by the mittwald/api-client-builder package
 * (https://github.com/mittwald/api-client-php-builder). Please make any changes
 * there.
 *
 * @generated
 * @see https://github.com/mittwald/api-client-php-builder
 */
class CertificateRequestCreateWithCSRRequest
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'commonName' => [
                'type' => 'string',
            ],
            'contact' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.ssl.Contact',
            ],
            'projectId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
        ],
        'required' => [
            'projectId',
            'commonName',
            'contact',
        ],
        'type' => 'object',
    ];

    private string $commonName;

    private Contact $contact;

    private string $projectId;

    public function __construct(string $commonName, Contact $contact, string $projectId)
    {
        $this->commonName = $commonName;
        $this->contact = $contact;
        $this->projectId = $projectId;
    }

    public function getCommonName(): string
    {
        return $this->commonName;
    }

    public function getContact(): Contact
    {
        return $this->contact;
    }

    public function getProjectId(): string
    {
        return $this->projectId;
    }

    public function withCommonName(string $commonName): self
    {
        $validator = new Validator();
        $validator->validate($commonName, static::$schema['properties']['commonName']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->commonName = $commonName;

        return $clone;
    }

    public function withContact(Contact $contact): self
    {
        $clone = clone $this;
        $clone->contact = $contact;

        return $clone;
    }

    public function withProjectId(string $projectId): self
    {
        $validator = new Validator();
        $validator->validate($projectId, static::$schema['properties']['projectId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->projectId = $projectId;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return CertificateRequestCreateWithCSRRequest Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): CertificateRequestCreateWithCSRRequest
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $commonName = $input->{'commonName'};
        $contact = Contact::buildFromInput($input->{'contact'}, validate: $validate);
        $projectId = $input->{'projectId'};

        $obj = new self($commonName, $contact, $projectId);

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
        $output['commonName'] = $this->commonName;
        $output['contact'] = $this->contact->toJson();
        $output['projectId'] = $this->projectId;

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
