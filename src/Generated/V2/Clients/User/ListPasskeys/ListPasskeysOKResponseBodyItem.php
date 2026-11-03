<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\User\ListPasskeys;

use DateTime;
use InvalidArgumentException;
use JsonSchema\Validator;

class ListPasskeysOKResponseBodyItem
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'properties' => [
            'aaguid' => [
                'description' => 'The authenticator model identifier.',
                'type' => 'string',
            ],
            'backupEligible' => [
                'description' => 'Whether the authenticator can back up (sync) the passkey, as reported at registration.',
                'type' => 'boolean',
            ],
            'backupState' => [
                'description' => 'Whether the passkey was backed up (synced) at registration. Not updated afterwards.',
                'type' => 'boolean',
            ],
            'createdAt' => [
                'format' => 'date-time',
                'type' => 'string',
            ],
            'credentialId' => [
                'description' => 'The base64url encoded WebAuthn credential id.',
                'type' => 'string',
            ],
            'id' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'name' => [
                'type' => 'string',
            ],
            'rpId' => [
                'type' => 'string',
            ],
        ],
        'required' => [
            'id',
            'credentialId',
            'rpId',
            'name',
            'aaguid',
            'backupEligible',
            'backupState',
            'createdAt',
        ],
        'type' => 'object',
    ];

    /**
     * The authenticator model identifier.
     */
    private string $aaguid;

    /**
     * Whether the authenticator can back up (sync) the passkey, as reported at registration.
     */
    private bool $backupEligible;

    /**
     * Whether the passkey was backed up (synced) at registration. Not updated afterwards.
     */
    private bool $backupState;

    private DateTime $createdAt;

    /**
     * The base64url encoded WebAuthn credential id.
     */
    private string $credentialId;

    private string $id;

    private string $name;

    private string $rpId;

    public function __construct(string $aaguid, bool $backupEligible, bool $backupState, DateTime $createdAt, string $credentialId, string $id, string $name, string $rpId)
    {
        $this->aaguid = $aaguid;
        $this->backupEligible = $backupEligible;
        $this->backupState = $backupState;
        $this->createdAt = $createdAt;
        $this->credentialId = $credentialId;
        $this->id = $id;
        $this->name = $name;
        $this->rpId = $rpId;
    }

    public function getAaguid(): string
    {
        return $this->aaguid;
    }

    public function getBackupEligible(): bool
    {
        return $this->backupEligible;
    }

    public function getBackupState(): bool
    {
        return $this->backupState;
    }

    public function getCreatedAt(): DateTime
    {
        return $this->createdAt;
    }

    public function getCredentialId(): string
    {
        return $this->credentialId;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getRpId(): string
    {
        return $this->rpId;
    }

    public function withAaguid(string $aaguid): self
    {
        $validator = new Validator();
        $validator->validate($aaguid, self::$internalValidationSchema['properties']['aaguid']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->aaguid = $aaguid;

        return $clone;
    }

    public function withBackupEligible(bool $backupEligible): self
    {
        $validator = new Validator();
        $validator->validate($backupEligible, self::$internalValidationSchema['properties']['backupEligible']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->backupEligible = $backupEligible;

        return $clone;
    }

    public function withBackupState(bool $backupState): self
    {
        $validator = new Validator();
        $validator->validate($backupState, self::$internalValidationSchema['properties']['backupState']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->backupState = $backupState;

        return $clone;
    }

    public function withCreatedAt(DateTime $createdAt): self
    {
        $clone = clone $this;
        $clone->createdAt = $createdAt;

        return $clone;
    }

    public function withCredentialId(string $credentialId): self
    {
        $validator = new Validator();
        $validator->validate($credentialId, self::$internalValidationSchema['properties']['credentialId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->credentialId = $credentialId;

        return $clone;
    }

    public function withId(string $id): self
    {
        $validator = new Validator();
        $validator->validate($id, self::$internalValidationSchema['properties']['id']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->id = $id;

        return $clone;
    }

    public function withName(string $name): self
    {
        $validator = new Validator();
        $validator->validate($name, self::$internalValidationSchema['properties']['name']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->name = $name;

        return $clone;
    }

    public function withRpId(string $rpId): self
    {
        $validator = new Validator();
        $validator->validate($rpId, self::$internalValidationSchema['properties']['rpId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->rpId = $rpId;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return ListPasskeysOKResponseBodyItem Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ListPasskeysOKResponseBodyItem
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $aaguid = $input->{'aaguid'};
        $backupEligible = (bool)($input->{'backupEligible'});
        $backupState = (bool)($input->{'backupState'});
        $createdAt = new DateTime($input->{'createdAt'});
        $credentialId = $input->{'credentialId'};
        $id = $input->{'id'};
        $name = $input->{'name'};
        $rpId = $input->{'rpId'};

        $obj = new self($aaguid, $backupEligible, $backupState, $createdAt, $credentialId, $id, $name, $rpId);

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
        $output['aaguid'] = $this->aaguid;
        $output['backupEligible'] = $this->backupEligible;
        $output['backupState'] = $this->backupState;
        $output['createdAt'] = ($this->createdAt)->format(DateTime::ATOM);
        $output['credentialId'] = $this->credentialId;
        $output['id'] = $this->id;
        $output['name'] = $this->name;
        $output['rpId'] = $this->rpId;

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
        $this->createdAt = clone $this->createdAt;
    }
}
