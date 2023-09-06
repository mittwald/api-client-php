<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Dns;

use InvalidArgumentException;

class ZoneRecordSet
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
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
    ];

    /**
     * @var RecordUnset|RecordCNAMEComponent
     */
    private RecordUnset|RecordCNAMEComponent $cname;

    /**
     * @var RecordUnset|CombinedACustom|CombinedAManaged
     */
    private RecordUnset|CombinedACustom|CombinedAManaged $combinedARecords;

    /**
     * @var RecordUnset|RecordMXManaged|RecordMXCustom
     */
    private RecordUnset|RecordMXManaged|RecordMXCustom $mx;

    /**
     * @var RecordUnset|RecordSRVComponent
     */
    private RecordUnset|RecordSRVComponent $srv;

    /**
     * @var RecordUnset|RecordTXTComponent
     */
    private RecordUnset|RecordTXTComponent $txt;

    /**
     * @param RecordUnset|RecordCNAMEComponent $cname
     * @param RecordUnset|CombinedACustom|CombinedAManaged $combinedARecords
     * @param RecordUnset|RecordMXManaged|RecordMXCustom $mx
     * @param RecordUnset|RecordSRVComponent $srv
     * @param RecordUnset|RecordTXTComponent $txt
     */
    public function __construct(RecordCNAMEComponent|RecordUnset $cname, CombinedACustom|CombinedAManaged|RecordUnset $combinedARecords, RecordMXCustom|RecordMXManaged|RecordUnset $mx, RecordSRVComponent|RecordUnset $srv, RecordTXTComponent|RecordUnset $txt)
    {
        $this->cname = $cname;
        $this->combinedARecords = $combinedARecords;
        $this->mx = $mx;
        $this->srv = $srv;
        $this->txt = $txt;
    }

    /**
     * @return
     * RecordUnset|RecordCNAMEComponent
     */
    public function getCname(): RecordCNAMEComponent|RecordUnset
    {
        return $this->cname;
    }

    /**
     * @return
     * RecordUnset|CombinedACustom|CombinedAManaged
     */
    public function getCombinedARecords(): CombinedACustom|CombinedAManaged|RecordUnset
    {
        return $this->combinedARecords;
    }

    /**
     * @return
     * RecordUnset|RecordMXManaged|RecordMXCustom
     */
    public function getMx(): RecordMXCustom|RecordMXManaged|RecordUnset
    {
        return $this->mx;
    }

    /**
     * @return
     * RecordUnset|RecordSRVComponent
     */
    public function getSrv(): RecordSRVComponent|RecordUnset
    {
        return $this->srv;
    }

    /**
     * @return
     * RecordUnset|RecordTXTComponent
     */
    public function getTxt(): RecordTXTComponent|RecordUnset
    {
        return $this->txt;
    }

    /**
     * @param RecordUnset|RecordCNAMEComponent $cname
     * @return self
     */
    public function withCname(RecordCNAMEComponent|RecordUnset $cname): self
    {
        $clone = clone $this;
        $clone->cname = $cname;

        return $clone;
    }

    /**
     * @param RecordUnset|CombinedACustom|CombinedAManaged $combinedARecords
     * @return self
     */
    public function withCombinedARecords(CombinedACustom|CombinedAManaged|RecordUnset $combinedARecords): self
    {
        $clone = clone $this;
        $clone->combinedARecords = $combinedARecords;

        return $clone;
    }

    /**
     * @param RecordUnset|RecordMXManaged|RecordMXCustom $mx
     * @return self
     */
    public function withMx(RecordMXCustom|RecordMXManaged|RecordUnset $mx): self
    {
        $clone = clone $this;
        $clone->mx = $mx;

        return $clone;
    }

    /**
     * @param RecordUnset|RecordSRVComponent $srv
     * @return self
     */
    public function withSrv(RecordSRVComponent|RecordUnset $srv): self
    {
        $clone = clone $this;
        $clone->srv = $srv;

        return $clone;
    }

    /**
     * @param RecordUnset|RecordTXTComponent $txt
     * @return self
     */
    public function withTxt(RecordTXTComponent|RecordUnset $txt): self
    {
        $clone = clone $this;
        $clone->txt = $txt;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return ZoneRecordSet Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ZoneRecordSet
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $cname = match (true) {
            default => throw new InvalidArgumentException("input cannot be mapped to any valid type"),
            RecordUnset::validateInput($input->{'cname'}, true) => RecordUnset::buildFromInput($input->{'cname'}, validate: $validate),
            RecordCNAMEComponent::validateInput($input->{'cname'}, true) => RecordCNAMEComponent::buildFromInput($input->{'cname'}, validate: $validate),
        };
        $combinedARecords = match (true) {
            default => throw new InvalidArgumentException("input cannot be mapped to any valid type"),
            RecordUnset::validateInput($input->{'combinedARecords'}, true) => RecordUnset::buildFromInput($input->{'combinedARecords'}, validate: $validate),
            CombinedACustom::validateInput($input->{'combinedARecords'}, true) => CombinedACustom::buildFromInput($input->{'combinedARecords'}, validate: $validate),
            CombinedAManaged::validateInput($input->{'combinedARecords'}, true) => CombinedAManaged::buildFromInput($input->{'combinedARecords'}, validate: $validate),
        };
        $mx = match (true) {
            default => throw new InvalidArgumentException("input cannot be mapped to any valid type"),
            RecordUnset::validateInput($input->{'mx'}, true) => RecordUnset::buildFromInput($input->{'mx'}, validate: $validate),
            RecordMXManaged::validateInput($input->{'mx'}, true) => RecordMXManaged::buildFromInput($input->{'mx'}, validate: $validate),
            RecordMXCustom::validateInput($input->{'mx'}, true) => RecordMXCustom::buildFromInput($input->{'mx'}, validate: $validate),
        };
        $srv = match (true) {
            default => throw new InvalidArgumentException("input cannot be mapped to any valid type"),
            RecordUnset::validateInput($input->{'srv'}, true) => RecordUnset::buildFromInput($input->{'srv'}, validate: $validate),
            RecordSRVComponent::validateInput($input->{'srv'}, true) => RecordSRVComponent::buildFromInput($input->{'srv'}, validate: $validate),
        };
        $txt = match (true) {
            default => throw new InvalidArgumentException("input cannot be mapped to any valid type"),
            RecordUnset::validateInput($input->{'txt'}, true) => RecordUnset::buildFromInput($input->{'txt'}, validate: $validate),
            RecordTXTComponent::validateInput($input->{'txt'}, true) => RecordTXTComponent::buildFromInput($input->{'txt'}, validate: $validate),
        };

        $obj = new self($cname, $combinedARecords, $mx, $srv, $txt);

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
        $output['cname'] = match (true) {
            default => throw new InvalidArgumentException("input cannot be mapped to any valid type"),
            ($this->cname) instanceof RecordUnset, ($this->cname) instanceof RecordCNAMEComponent => $this->cname->toJson(),
        };
        $output['combinedARecords'] = match (true) {
            default => throw new InvalidArgumentException("input cannot be mapped to any valid type"),
            ($this->combinedARecords) instanceof RecordUnset, ($this->combinedARecords) instanceof CombinedACustom, ($this->combinedARecords) instanceof CombinedAManaged => $this->combinedARecords->toJson(),
        };
        $output['mx'] = match (true) {
            default => throw new InvalidArgumentException("input cannot be mapped to any valid type"),
            ($this->mx) instanceof RecordUnset, ($this->mx) instanceof RecordMXManaged, ($this->mx) instanceof RecordMXCustom => $this->mx->toJson(),
        };
        $output['srv'] = match (true) {
            default => throw new InvalidArgumentException("input cannot be mapped to any valid type"),
            ($this->srv) instanceof RecordUnset, ($this->srv) instanceof RecordSRVComponent => $this->srv->toJson(),
        };
        $output['txt'] = match (true) {
            default => throw new InvalidArgumentException("input cannot be mapped to any valid type"),
            ($this->txt) instanceof RecordUnset, ($this->txt) instanceof RecordTXTComponent => $this->txt->toJson(),
        };

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
        $validator = new \JsonSchema\Validator();
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
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
