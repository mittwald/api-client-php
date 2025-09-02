<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ContributorExpressInterestToContribute;

use InvalidArgumentException;
use JsonSchema\Validator;
use Mittwald\ApiClient\Generated\V2\Schemas\Commons\Contact;
use Mittwald\ApiClient\Generated\V2\Schemas\Marketplace\ContributorImprintAlternative1;
use Mittwald\ApiClient\Generated\V2\Schemas\Marketplace\ContributorImprintAlternative2;
use Mittwald\ApiClient\Generated\V2\Schemas\Marketplace\SupportMeta;

class ContributorExpressInterestToContributeRequestBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'properties' => [
            'deviatingContactPersonUserId' => [
                'description' => 'A user, which can be contacted by mittwald, if problems arise. If not defined, the contact person will be the executing user. The user has to be a member of the underlying customer.',
                'format' => 'uuid',
                'type' => 'string',
            ],
            'deviatingContractOwner' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.commons.Contact',
            ],
            'deviatingName' => [
                'type' => 'string',
            ],
            'deviatingSupportInformation' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.marketplace.SupportMeta',
            ],
            'imprint' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.marketplace.ContributorImprint',
            ],
        ],
        'type' => 'object',
    ];

    /**
     * A user, which can be contacted by mittwald, if problems arise. If not defined, the contact person will be the executing user. The user has to be a member of the underlying customer.
     */
    private ?string $deviatingContactPersonUserId = null;

    private ?Contact $deviatingContractOwner = null;

    private ?string $deviatingName = null;

    private ?SupportMeta $deviatingSupportInformation = null;

    private ContributorImprintAlternative1|ContributorImprintAlternative2|null $imprint = null;

    /**
     *
     */
    public function __construct()
    {
    }

    public function getDeviatingContactPersonUserId(): ?string
    {
        return $this->deviatingContactPersonUserId ?? null;
    }

    public function getDeviatingContractOwner(): ?Contact
    {
        return $this->deviatingContractOwner ?? null;
    }

    public function getDeviatingName(): ?string
    {
        return $this->deviatingName ?? null;
    }

    public function getDeviatingSupportInformation(): ?SupportMeta
    {
        return $this->deviatingSupportInformation ?? null;
    }

    public function getImprint(): ContributorImprintAlternative1|ContributorImprintAlternative2|null
    {
        return $this->imprint;
    }

    public function withDeviatingContactPersonUserId(string $deviatingContactPersonUserId): self
    {
        $validator = new Validator();
        $validator->validate($deviatingContactPersonUserId, self::$internalValidationSchema['properties']['deviatingContactPersonUserId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->deviatingContactPersonUserId = $deviatingContactPersonUserId;

        return $clone;
    }

    public function withoutDeviatingContactPersonUserId(): self
    {
        $clone = clone $this;
        unset($clone->deviatingContactPersonUserId);

        return $clone;
    }

    public function withDeviatingContractOwner(Contact $deviatingContractOwner): self
    {
        $clone = clone $this;
        $clone->deviatingContractOwner = $deviatingContractOwner;

        return $clone;
    }

    public function withoutDeviatingContractOwner(): self
    {
        $clone = clone $this;
        unset($clone->deviatingContractOwner);

        return $clone;
    }

    public function withDeviatingName(string $deviatingName): self
    {
        $validator = new Validator();
        $validator->validate($deviatingName, self::$internalValidationSchema['properties']['deviatingName']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->deviatingName = $deviatingName;

        return $clone;
    }

    public function withoutDeviatingName(): self
    {
        $clone = clone $this;
        unset($clone->deviatingName);

        return $clone;
    }

    public function withDeviatingSupportInformation(SupportMeta $deviatingSupportInformation): self
    {
        $clone = clone $this;
        $clone->deviatingSupportInformation = $deviatingSupportInformation;

        return $clone;
    }

    public function withoutDeviatingSupportInformation(): self
    {
        $clone = clone $this;
        unset($clone->deviatingSupportInformation);

        return $clone;
    }

    public function withImprint(ContributorImprintAlternative1|ContributorImprintAlternative2 $imprint): self
    {
        $clone = clone $this;
        $clone->imprint = $imprint;

        return $clone;
    }

    public function withoutImprint(): self
    {
        $clone = clone $this;
        unset($clone->imprint);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return ContributorExpressInterestToContributeRequestBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ContributorExpressInterestToContributeRequestBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $deviatingContactPersonUserId = null;
        if (isset($input->{'deviatingContactPersonUserId'})) {
            $deviatingContactPersonUserId = $input->{'deviatingContactPersonUserId'};
        }
        $deviatingContractOwner = null;
        if (isset($input->{'deviatingContractOwner'})) {
            $deviatingContractOwner = Contact::buildFromInput($input->{'deviatingContractOwner'}, validate: $validate);
        }
        $deviatingName = null;
        if (isset($input->{'deviatingName'})) {
            $deviatingName = $input->{'deviatingName'};
        }
        $deviatingSupportInformation = null;
        if (isset($input->{'deviatingSupportInformation'})) {
            $deviatingSupportInformation = SupportMeta::buildFromInput($input->{'deviatingSupportInformation'}, validate: $validate);
        }
        $imprint = null;
        if (isset($input->{'imprint'})) {
            $imprint = match (true) {
                default => throw new InvalidArgumentException("input cannot be mapped to any valid type"),
                ContributorImprintAlternative1::validateInput($input->{'imprint'}, true) => ContributorImprintAlternative1::buildFromInput($input->{'imprint'}, validate: $validate),
                ContributorImprintAlternative2::validateInput($input->{'imprint'}, true) => ContributorImprintAlternative2::buildFromInput($input->{'imprint'}, validate: $validate),
            };
        }

        $obj = new self();
        $obj->deviatingContactPersonUserId = $deviatingContactPersonUserId;
        $obj->deviatingContractOwner = $deviatingContractOwner;
        $obj->deviatingName = $deviatingName;
        $obj->deviatingSupportInformation = $deviatingSupportInformation;
        $obj->imprint = $imprint;
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
        if (isset($this->deviatingContactPersonUserId)) {
            $output['deviatingContactPersonUserId'] = $this->deviatingContactPersonUserId;
        }
        if (isset($this->deviatingContractOwner)) {
            $output['deviatingContractOwner'] = $this->deviatingContractOwner->toJson();
        }
        if (isset($this->deviatingName)) {
            $output['deviatingName'] = $this->deviatingName;
        }
        if (isset($this->deviatingSupportInformation)) {
            $output['deviatingSupportInformation'] = $this->deviatingSupportInformation->toJson();
        }
        if (isset($this->imprint)) {
            $output['imprint'] = match (true) {
                default => throw new InvalidArgumentException("input cannot be mapped to any valid type"),
                ($this->imprint) instanceof ContributorImprintAlternative1, ($this->imprint) instanceof ContributorImprintAlternative2 => $this->imprint->toJson(),
            };
        }

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
