<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Domain;

class DomainOwnership
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'domain' => [
                'format' => 'hostname',
                'type' => 'string',
            ],
            'id' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'projectId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'txtRecord' => [
                'type' => 'string',
            ],
        ],
        'required' => [
            'id',
            'domain',
            'txtRecord',
            'projectId',
        ],
        'type' => 'object',
    ];

    /**
     * @var string
     */
    private string $domain;

    /**
     * @var string
     */
    private string $id;

    /**
     * @var string
     */
    private string $projectId;

    /**
     * @var string
     */
    private string $txtRecord;

    /**
     * @param string $domain
     * @param string $id
     * @param string $projectId
     * @param string $txtRecord
     */
    public function __construct(string $domain, string $id, string $projectId, string $txtRecord)
    {
        $this->domain = $domain;
        $this->id = $id;
        $this->projectId = $projectId;
        $this->txtRecord = $txtRecord;
    }

    /**
     * @return string
     */
    public function getDomain() : string
    {
        return $this->domain;
    }

    /**
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getProjectId() : string
    {
        return $this->projectId;
    }

    /**
     * @return string
     */
    public function getTxtRecord() : string
    {
        return $this->txtRecord;
    }

    /**
     * @param string $domain
     * @return self
     */
    public function withDomain(string $domain) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($domain, static::$schema['properties']['domain']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->domain = $domain;

        return $clone;
    }

    /**
     * @param string $id
     * @return self
     */
    public function withId(string $id) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($id, static::$schema['properties']['id']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->id = $id;

        return $clone;
    }

    /**
     * @param string $projectId
     * @return self
     */
    public function withProjectId(string $projectId) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($projectId, static::$schema['properties']['projectId']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->projectId = $projectId;

        return $clone;
    }

    /**
     * @param string $txtRecord
     * @return self
     */
    public function withTxtRecord(string $txtRecord) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($txtRecord, static::$schema['properties']['txtRecord']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->txtRecord = $txtRecord;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return DomainOwnership Created instance
     * @throws \InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true) : DomainOwnership
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $domain = $input->{'domain'};
        $id = $input->{'id'};
        $projectId = $input->{'projectId'};
        $txtRecord = $input->{'txtRecord'};

        $obj = new self($domain, $id, $projectId, $txtRecord);

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
        $output['domain'] = $this->domain;
        $output['id'] = $this->id;
        $output['projectId'] = $this->projectId;
        $output['txtRecord'] = $this->txtRecord;

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
    }
}

