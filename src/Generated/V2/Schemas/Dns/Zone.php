<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Dns;

class Zone
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'domain' => [
                'type' => 'string',
            ],
            'id' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'recordSet' => [
                'properties' => [
                    'cname' => [
                        '$ref' => '#/components/schemas/de.mittwald.v1.dns.RecordCNAME',
                    ],
                    'combinedARecords' => [
                        '$ref' => '#/components/schemas/de.mittwald.v1.dns.RecordCombinedA',
                    ],
                    'mx' => [
                        '$ref' => '#/components/schemas/de.mittwald.v1.dns.RecordMX',
                    ],
                    'srv' => [
                        '$ref' => '#/components/schemas/de.mittwald.v1.dns.RecordSRV',
                    ],
                    'txt' => [
                        '$ref' => '#/components/schemas/de.mittwald.v1.dns.RecordTXT',
                    ],
                ],
                'required' => [
                    'combinedARecords',
                    'cname',
                    'mx',
                    'txt',
                    'srv',
                ],
                'type' => 'object',
            ],
        ],
        'required' => [
            'id',
            'domain',
            'recordSet',
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
     * @var ZoneRecordSet
     */
    private ZoneRecordSet $recordSet;

    /**
     * @param string $domain
     * @param string $id
     * @param ZoneRecordSet $recordSet
     */
    public function __construct(string $domain, string $id, ZoneRecordSet $recordSet)
    {
        $this->domain = $domain;
        $this->id = $id;
        $this->recordSet = $recordSet;
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
     * @return ZoneRecordSet
     */
    public function getRecordSet() : ZoneRecordSet
    {
        return $this->recordSet;
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
     * @param ZoneRecordSet $recordSet
     * @return self
     */
    public function withRecordSet(ZoneRecordSet $recordSet) : self
    {
        $clone = clone $this;
        $clone->recordSet = $recordSet;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return Zone Created instance
     * @throws \InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true) : Zone
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $domain = $input->{'domain'};
        $id = $input->{'id'};
        $recordSet = ZoneRecordSet::buildFromInput($input->{'recordSet'}, validate: $validate);

        $obj = new self($domain, $id, $recordSet);

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
        $output['recordSet'] = ($this->recordSet)->toJson();

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
        $this->recordSet = clone $this->recordSet;
    }
}

