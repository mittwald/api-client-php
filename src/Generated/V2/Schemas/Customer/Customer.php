<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Customer;

use DateTime;
use InvalidArgumentException;
use JsonSchema\Validator;

class Customer
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'activeSuspension' => [
                'properties' => [
                    'createdAt' => [
                        'format' => 'date-time',
                        'type' => 'string',
                    ],
                ],
                'required' => [
                    'createdAt',
                ],
                'type' => 'object',
            ],
            'avatarRefId' => [
                'type' => 'string',
            ],
            'categoryId' => [
                'type' => 'string',
            ],
            'creationDate' => [
                'format' => 'date-time',
                'type' => 'string',
            ],
            'customerId' => [
                'type' => 'string',
            ],
            'customerNumber' => [
                'type' => 'string',
            ],
            'executingUserRoles' => [
                'items' => [
                    '$ref' => '#/components/schemas/de.mittwald.v1.customer.Role',
                ],
                'type' => 'array',
            ],
            'isBanned' => [
                'type' => 'boolean',
            ],
            'isInDefaultOfPayment' => [
                'type' => 'boolean',
            ],
            'memberCount' => [
                'minimum' => 0,
                'type' => 'integer',
            ],
            'name' => [
                'type' => 'string',
            ],
            'owner' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.customer.Contact',
            ],
            'projectCount' => [
                'minimum' => 0,
                'type' => 'integer',
            ],
            'vatId' => [
                'type' => 'string',
            ],
            'vatIdValidationState' => [
                'enum' => [
                    'valid',
                    'invalid',
                    'pending',
                    'unspecified',
                ],
                'type' => 'string',
            ],
        ],
        'required' => [
            'customerId',
            'customerNumber',
            'name',
            'creationDate',
            'memberCount',
            'projectCount',
        ],
        'type' => 'object',
    ];

    /**
     * @var CustomerActiveSuspension|null
     */
    private ?CustomerActiveSuspension $activeSuspension = null;

    /**
     * @var string|null
     */
    private ?string $avatarRefId = null;

    /**
     * @var string|null
     */
    private ?string $categoryId = null;

    /**
     * @var DateTime
     */
    private DateTime $creationDate;

    /**
     * @var string
     */
    private string $customerId;

    /**
     * @var string
     */
    private string $customerNumber;

    /**
     * @var Role[]|null
     */
    private ?array $executingUserRoles = null;

    /**
     * @var bool|null
     */
    private ?bool $isBanned = null;

    /**
     * @var bool|null
     */
    private ?bool $isInDefaultOfPayment = null;

    /**
     * @var int
     */
    private int $memberCount;

    /**
     * @var string
     */
    private string $name;

    /**
     * @var Contact|null
     */
    private ?Contact $owner = null;

    /**
     * @var int
     */
    private int $projectCount;

    /**
     * @var string|null
     */
    private ?string $vatId = null;

    /**
     * @var CustomerVatIdValidationState|null
     */
    private ?CustomerVatIdValidationState $vatIdValidationState = null;

    /**
     * @param DateTime $creationDate
     * @param string $customerId
     * @param string $customerNumber
     * @param int $memberCount
     * @param string $name
     * @param int $projectCount
     */
    public function __construct(DateTime $creationDate, string $customerId, string $customerNumber, int $memberCount, string $name, int $projectCount)
    {
        $this->creationDate = $creationDate;
        $this->customerId = $customerId;
        $this->customerNumber = $customerNumber;
        $this->memberCount = $memberCount;
        $this->name = $name;
        $this->projectCount = $projectCount;
    }

    /**
     * @return CustomerActiveSuspension|null
     */
    public function getActiveSuspension(): ?CustomerActiveSuspension
    {
        return $this->activeSuspension ?? null;
    }

    /**
     * @return string|null
     */
    public function getAvatarRefId(): ?string
    {
        return $this->avatarRefId ?? null;
    }

    /**
     * @return string|null
     */
    public function getCategoryId(): ?string
    {
        return $this->categoryId ?? null;
    }

    /**
     * @return DateTime
     */
    public function getCreationDate(): DateTime
    {
        return $this->creationDate;
    }

    /**
     * @return string
     */
    public function getCustomerId(): string
    {
        return $this->customerId;
    }

    /**
     * @return string
     */
    public function getCustomerNumber(): string
    {
        return $this->customerNumber;
    }

    /**
     * @return Role[]|null
     */
    public function getExecutingUserRoles(): ?array
    {
        return $this->executingUserRoles ?? null;
    }

    /**
     * @return bool|null
     */
    public function getIsBanned(): ?bool
    {
        return $this->isBanned ?? null;
    }

    /**
     * @return bool|null
     */
    public function getIsInDefaultOfPayment(): ?bool
    {
        return $this->isInDefaultOfPayment ?? null;
    }

    /**
     * @return int
     */
    public function getMemberCount(): int
    {
        return $this->memberCount;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return Contact|null
     */
    public function getOwner(): ?Contact
    {
        return $this->owner ?? null;
    }

    /**
     * @return int
     */
    public function getProjectCount(): int
    {
        return $this->projectCount;
    }

    /**
     * @return string|null
     */
    public function getVatId(): ?string
    {
        return $this->vatId ?? null;
    }

    /**
     * @return CustomerVatIdValidationState|null
     */
    public function getVatIdValidationState(): ?CustomerVatIdValidationState
    {
        return $this->vatIdValidationState ?? null;
    }

    /**
     * @param CustomerActiveSuspension $activeSuspension
     * @return self
     */
    public function withActiveSuspension(CustomerActiveSuspension $activeSuspension): self
    {
        $clone = clone $this;
        $clone->activeSuspension = $activeSuspension;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutActiveSuspension(): self
    {
        $clone = clone $this;
        unset($clone->activeSuspension);

        return $clone;
    }

    /**
     * @param string $avatarRefId
     * @return self
     */
    public function withAvatarRefId(string $avatarRefId): self
    {
        $validator = new Validator();
        $validator->validate($avatarRefId, static::$schema['properties']['avatarRefId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->avatarRefId = $avatarRefId;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutAvatarRefId(): self
    {
        $clone = clone $this;
        unset($clone->avatarRefId);

        return $clone;
    }

    /**
     * @param string $categoryId
     * @return self
     */
    public function withCategoryId(string $categoryId): self
    {
        $validator = new Validator();
        $validator->validate($categoryId, static::$schema['properties']['categoryId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->categoryId = $categoryId;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutCategoryId(): self
    {
        $clone = clone $this;
        unset($clone->categoryId);

        return $clone;
    }

    /**
     * @param DateTime $creationDate
     * @return self
     */
    public function withCreationDate(DateTime $creationDate): self
    {
        $clone = clone $this;
        $clone->creationDate = $creationDate;

        return $clone;
    }

    /**
     * @param string $customerId
     * @return self
     */
    public function withCustomerId(string $customerId): self
    {
        $validator = new Validator();
        $validator->validate($customerId, static::$schema['properties']['customerId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->customerId = $customerId;

        return $clone;
    }

    /**
     * @param string $customerNumber
     * @return self
     */
    public function withCustomerNumber(string $customerNumber): self
    {
        $validator = new Validator();
        $validator->validate($customerNumber, static::$schema['properties']['customerNumber']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->customerNumber = $customerNumber;

        return $clone;
    }

    /**
     * @param Role[] $executingUserRoles
     * @return self
     */
    public function withExecutingUserRoles(array $executingUserRoles): self
    {
        $clone = clone $this;
        $clone->executingUserRoles = $executingUserRoles;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutExecutingUserRoles(): self
    {
        $clone = clone $this;
        unset($clone->executingUserRoles);

        return $clone;
    }

    /**
     * @param bool $isBanned
     * @return self
     */
    public function withIsBanned(bool $isBanned): self
    {
        $validator = new Validator();
        $validator->validate($isBanned, static::$schema['properties']['isBanned']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->isBanned = $isBanned;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutIsBanned(): self
    {
        $clone = clone $this;
        unset($clone->isBanned);

        return $clone;
    }

    /**
     * @param bool $isInDefaultOfPayment
     * @return self
     */
    public function withIsInDefaultOfPayment(bool $isInDefaultOfPayment): self
    {
        $validator = new Validator();
        $validator->validate($isInDefaultOfPayment, static::$schema['properties']['isInDefaultOfPayment']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->isInDefaultOfPayment = $isInDefaultOfPayment;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutIsInDefaultOfPayment(): self
    {
        $clone = clone $this;
        unset($clone->isInDefaultOfPayment);

        return $clone;
    }

    /**
     * @param int $memberCount
     * @return self
     */
    public function withMemberCount(int $memberCount): self
    {
        $validator = new Validator();
        $validator->validate($memberCount, static::$schema['properties']['memberCount']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->memberCount = $memberCount;

        return $clone;
    }

    /**
     * @param string $name
     * @return self
     */
    public function withName(string $name): self
    {
        $validator = new Validator();
        $validator->validate($name, static::$schema['properties']['name']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->name = $name;

        return $clone;
    }

    /**
     * @param Contact $owner
     * @return self
     */
    public function withOwner(Contact $owner): self
    {
        $clone = clone $this;
        $clone->owner = $owner;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutOwner(): self
    {
        $clone = clone $this;
        unset($clone->owner);

        return $clone;
    }

    /**
     * @param int $projectCount
     * @return self
     */
    public function withProjectCount(int $projectCount): self
    {
        $validator = new Validator();
        $validator->validate($projectCount, static::$schema['properties']['projectCount']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->projectCount = $projectCount;

        return $clone;
    }

    /**
     * @param string $vatId
     * @return self
     */
    public function withVatId(string $vatId): self
    {
        $validator = new Validator();
        $validator->validate($vatId, static::$schema['properties']['vatId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->vatId = $vatId;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutVatId(): self
    {
        $clone = clone $this;
        unset($clone->vatId);

        return $clone;
    }

    /**
     * @param CustomerVatIdValidationState $vatIdValidationState
     * @return self
     */
    public function withVatIdValidationState(CustomerVatIdValidationState $vatIdValidationState): self
    {
        $clone = clone $this;
        $clone->vatIdValidationState = $vatIdValidationState;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutVatIdValidationState(): self
    {
        $clone = clone $this;
        unset($clone->vatIdValidationState);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return Customer Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): Customer
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $activeSuspension = null;
        if (isset($input->{'activeSuspension'})) {
            $activeSuspension = CustomerActiveSuspension::buildFromInput($input->{'activeSuspension'}, validate: $validate);
        }
        $avatarRefId = null;
        if (isset($input->{'avatarRefId'})) {
            $avatarRefId = $input->{'avatarRefId'};
        }
        $categoryId = null;
        if (isset($input->{'categoryId'})) {
            $categoryId = $input->{'categoryId'};
        }
        $creationDate = new DateTime($input->{'creationDate'});
        $customerId = $input->{'customerId'};
        $customerNumber = $input->{'customerNumber'};
        $executingUserRoles = null;
        if (isset($input->{'executingUserRoles'})) {
            $executingUserRoles = array_map(fn (string $i): Role => Role::from($i), $input->{'executingUserRoles'});
        }
        $isBanned = null;
        if (isset($input->{'isBanned'})) {
            $isBanned = (bool)($input->{'isBanned'});
        }
        $isInDefaultOfPayment = null;
        if (isset($input->{'isInDefaultOfPayment'})) {
            $isInDefaultOfPayment = (bool)($input->{'isInDefaultOfPayment'});
        }
        $memberCount = (int)($input->{'memberCount'});
        $name = $input->{'name'};
        $owner = null;
        if (isset($input->{'owner'})) {
            $owner = Contact::buildFromInput($input->{'owner'}, validate: $validate);
        }
        $projectCount = (int)($input->{'projectCount'});
        $vatId = null;
        if (isset($input->{'vatId'})) {
            $vatId = $input->{'vatId'};
        }
        $vatIdValidationState = null;
        if (isset($input->{'vatIdValidationState'})) {
            $vatIdValidationState = CustomerVatIdValidationState::from($input->{'vatIdValidationState'});
        }

        $obj = new self($creationDate, $customerId, $customerNumber, $memberCount, $name, $projectCount);
        $obj->activeSuspension = $activeSuspension;
        $obj->avatarRefId = $avatarRefId;
        $obj->categoryId = $categoryId;
        $obj->executingUserRoles = $executingUserRoles;
        $obj->isBanned = $isBanned;
        $obj->isInDefaultOfPayment = $isInDefaultOfPayment;
        $obj->owner = $owner;
        $obj->vatId = $vatId;
        $obj->vatIdValidationState = $vatIdValidationState;
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
        if (isset($this->activeSuspension)) {
            $output['activeSuspension'] = ($this->activeSuspension)->toJson();
        }
        if (isset($this->avatarRefId)) {
            $output['avatarRefId'] = $this->avatarRefId;
        }
        if (isset($this->categoryId)) {
            $output['categoryId'] = $this->categoryId;
        }
        $output['creationDate'] = ($this->creationDate)->format(DateTime::ATOM);
        $output['customerId'] = $this->customerId;
        $output['customerNumber'] = $this->customerNumber;
        if (isset($this->executingUserRoles)) {
            $output['executingUserRoles'] = array_map(fn (Role $i): string => $i->value, $this->executingUserRoles);
        }
        if (isset($this->isBanned)) {
            $output['isBanned'] = $this->isBanned;
        }
        if (isset($this->isInDefaultOfPayment)) {
            $output['isInDefaultOfPayment'] = $this->isInDefaultOfPayment;
        }
        $output['memberCount'] = $this->memberCount;
        $output['name'] = $this->name;
        if (isset($this->owner)) {
            $output['owner'] = $this->owner->toJson();
        }
        $output['projectCount'] = $this->projectCount;
        if (isset($this->vatId)) {
            $output['vatId'] = $this->vatId;
        }
        if (isset($this->vatIdValidationState)) {
            $output['vatIdValidationState'] = ($this->vatIdValidationState)->value;
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
        $validator = new Validator();
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
        if (isset($this->activeSuspension)) {
            $this->activeSuspension = clone $this->activeSuspension;
        }
        $this->creationDate = clone $this->creationDate;
    }
}
