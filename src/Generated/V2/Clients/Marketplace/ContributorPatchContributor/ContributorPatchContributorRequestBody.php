<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ContributorPatchContributor;

use InvalidArgumentException;
use JsonSchema\Validator;
use Mittwald\ApiClient\Generated\V2\Schemas\Marketplace\ContributorImprintAlternative1;
use Mittwald\ApiClient\Generated\V2\Schemas\Marketplace\ContributorImprintAlternative2;

class ContributorPatchContributorRequestBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'properties' => [
            'contactPersonUserId' => [
                'type' => 'string',
            ],
            'descriptions' => [
                'allOf' => [
                    [
                        '$ref' => '#/components/schemas/de.mittwald.v1.marketplace.LocalizedDescription',
                    ],
                ],
                'nullable' => true,
            ],
            'deviatingContractOwner' => [
                'allOf' => [
                    [
                        '$ref' => '#/components/schemas/de.mittwald.v1.marketplace.ContractOwner',
                    ],
                ],
                'nullable' => true,
            ],
            'deviatingName' => [
                'type' => 'string',
            ],
            'deviatingSupportInformation' => [
                'allOf' => [
                    [
                        '$ref' => '#/components/schemas/de.mittwald.v1.marketplace.SupportMeta',
                    ],
                ],
                'nullable' => true,
            ],
            'homepage' => [
                'type' => 'string',
            ],
            'imprint' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.marketplace.ContributorImprint',
            ],
        ],
        'type' => 'object',
    ];

    private ?string $contactPersonUserId = null;

    private ?ContributorPatchContributorRequestBodyDescriptions $descriptions = null;

    private ?ContributorPatchContributorRequestBodyDeviatingContractOwner $deviatingContractOwner = null;

    private ?string $deviatingName = null;

    private ?ContributorPatchContributorRequestBodyDeviatingSupportInformation $deviatingSupportInformation = null;

    private ?string $homepage = null;

    private ContributorImprintAlternative1|ContributorImprintAlternative2|null $imprint = null;

    /**
     *
     */
    public function __construct()
    {
    }

    public function getContactPersonUserId(): ?string
    {
        return $this->contactPersonUserId ?? null;
    }

    public function getDescriptions(): ?ContributorPatchContributorRequestBodyDescriptions
    {
        return $this->descriptions ?? null;
    }

    public function getDeviatingContractOwner(): ?ContributorPatchContributorRequestBodyDeviatingContractOwner
    {
        return $this->deviatingContractOwner ?? null;
    }

    public function getDeviatingName(): ?string
    {
        return $this->deviatingName ?? null;
    }

    public function getDeviatingSupportInformation(): ?ContributorPatchContributorRequestBodyDeviatingSupportInformation
    {
        return $this->deviatingSupportInformation ?? null;
    }

    public function getHomepage(): ?string
    {
        return $this->homepage ?? null;
    }

    public function getImprint(): ContributorImprintAlternative1|ContributorImprintAlternative2|null
    {
        return $this->imprint;
    }

    public function withContactPersonUserId(string $contactPersonUserId): self
    {
        $validator = new Validator();
        $validator->validate($contactPersonUserId, self::$internalValidationSchema['properties']['contactPersonUserId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->contactPersonUserId = $contactPersonUserId;

        return $clone;
    }

    public function withoutContactPersonUserId(): self
    {
        $clone = clone $this;
        unset($clone->contactPersonUserId);

        return $clone;
    }

    public function withDescriptions(ContributorPatchContributorRequestBodyDescriptions $descriptions): self
    {
        $clone = clone $this;
        $clone->descriptions = $descriptions;

        return $clone;
    }

    public function withoutDescriptions(): self
    {
        $clone = clone $this;
        unset($clone->descriptions);

        return $clone;
    }

    public function withDeviatingContractOwner(ContributorPatchContributorRequestBodyDeviatingContractOwner $deviatingContractOwner): self
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

    public function withDeviatingSupportInformation(ContributorPatchContributorRequestBodyDeviatingSupportInformation $deviatingSupportInformation): self
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

    public function withHomepage(string $homepage): self
    {
        $validator = new Validator();
        $validator->validate($homepage, self::$internalValidationSchema['properties']['homepage']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->homepage = $homepage;

        return $clone;
    }

    public function withoutHomepage(): self
    {
        $clone = clone $this;
        unset($clone->homepage);

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
     * @return ContributorPatchContributorRequestBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ContributorPatchContributorRequestBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $contactPersonUserId = null;
        if (isset($input->{'contactPersonUserId'})) {
            $contactPersonUserId = $input->{'contactPersonUserId'};
        }
        $descriptions = null;
        if (isset($input->{'descriptions'})) {
            $descriptions = ContributorPatchContributorRequestBodyDescriptions::buildFromInput($input->{'descriptions'}, validate: $validate);
        }
        $deviatingContractOwner = null;
        if (isset($input->{'deviatingContractOwner'})) {
            $deviatingContractOwner = ContributorPatchContributorRequestBodyDeviatingContractOwner::buildFromInput($input->{'deviatingContractOwner'}, validate: $validate);
        }
        $deviatingName = null;
        if (isset($input->{'deviatingName'})) {
            $deviatingName = $input->{'deviatingName'};
        }
        $deviatingSupportInformation = null;
        if (isset($input->{'deviatingSupportInformation'})) {
            $deviatingSupportInformation = ContributorPatchContributorRequestBodyDeviatingSupportInformation::buildFromInput($input->{'deviatingSupportInformation'}, validate: $validate);
        }
        $homepage = null;
        if (isset($input->{'homepage'})) {
            $homepage = $input->{'homepage'};
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
        $obj->contactPersonUserId = $contactPersonUserId;
        $obj->descriptions = $descriptions;
        $obj->deviatingContractOwner = $deviatingContractOwner;
        $obj->deviatingName = $deviatingName;
        $obj->deviatingSupportInformation = $deviatingSupportInformation;
        $obj->homepage = $homepage;
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
        if (isset($this->contactPersonUserId)) {
            $output['contactPersonUserId'] = $this->contactPersonUserId;
        }
        if (isset($this->descriptions)) {
            $output['descriptions'] = ($this->descriptions)->toJson();
        }
        if (isset($this->deviatingContractOwner)) {
            $output['deviatingContractOwner'] = ($this->deviatingContractOwner)->toJson();
        }
        if (isset($this->deviatingName)) {
            $output['deviatingName'] = $this->deviatingName;
        }
        if (isset($this->deviatingSupportInformation)) {
            $output['deviatingSupportInformation'] = ($this->deviatingSupportInformation)->toJson();
        }
        if (isset($this->homepage)) {
            $output['homepage'] = $this->homepage;
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
        if (isset($this->descriptions)) {
            $this->descriptions = clone $this->descriptions;
        }
        if (isset($this->deviatingContractOwner)) {
            $this->deviatingContractOwner = clone $this->deviatingContractOwner;
        }
        if (isset($this->deviatingSupportInformation)) {
            $this->deviatingSupportInformation = clone $this->deviatingSupportInformation;
        }
    }
}
