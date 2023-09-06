<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Signup;

use DateTime;
use InvalidArgumentException;
use JsonSchema\Validator;

class UserSession
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'created' => [
                'format' => 'date-time',
                'type' => 'string',
            ],
            'device' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.signup.DeviceInfo',
            ],
            'lastAccess' => [
                'format' => 'date-time',
                'type' => 'string',
            ],
            'location' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.signup.Location',
            ],
            'tokenId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
        ],
        'required' => [
            'device',
            'created',
            'tokenId',
        ],
        'type' => 'object',
    ];

    /**
     * @var DateTime
     */
    private DateTime $created;

    /**
     * @var DeviceInfo
     */
    private DeviceInfo $device;

    /**
     * @var DateTime|null
     */
    private ?DateTime $lastAccess = null;

    /**
     * @var Location|null
     */
    private ?Location $location = null;

    /**
     * @var string
     */
    private string $tokenId;

    /**
     * @param DateTime $created
     * @param DeviceInfo $device
     * @param string $tokenId
     */
    public function __construct(DateTime $created, DeviceInfo $device, string $tokenId)
    {
        $this->created = $created;
        $this->device = $device;
        $this->tokenId = $tokenId;
    }

    /**
     * @return DateTime
     */
    public function getCreated(): DateTime
    {
        return $this->created;
    }

    /**
     * @return DeviceInfo
     */
    public function getDevice(): DeviceInfo
    {
        return $this->device;
    }

    /**
     * @return DateTime|null
     */
    public function getLastAccess(): ?DateTime
    {
        return $this->lastAccess ?? null;
    }

    /**
     * @return Location|null
     */
    public function getLocation(): ?Location
    {
        return $this->location ?? null;
    }

    /**
     * @return string
     */
    public function getTokenId(): string
    {
        return $this->tokenId;
    }

    /**
     * @param DateTime $created
     * @return self
     */
    public function withCreated(DateTime $created): self
    {
        $clone = clone $this;
        $clone->created = $created;

        return $clone;
    }

    /**
     * @param DeviceInfo $device
     * @return self
     */
    public function withDevice(DeviceInfo $device): self
    {
        $clone = clone $this;
        $clone->device = $device;

        return $clone;
    }

    /**
     * @param DateTime $lastAccess
     * @return self
     */
    public function withLastAccess(DateTime $lastAccess): self
    {
        $clone = clone $this;
        $clone->lastAccess = $lastAccess;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutLastAccess(): self
    {
        $clone = clone $this;
        unset($clone->lastAccess);

        return $clone;
    }

    /**
     * @param Location $location
     * @return self
     */
    public function withLocation(Location $location): self
    {
        $clone = clone $this;
        $clone->location = $location;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutLocation(): self
    {
        $clone = clone $this;
        unset($clone->location);

        return $clone;
    }

    /**
     * @param string $tokenId
     * @return self
     */
    public function withTokenId(string $tokenId): self
    {
        $validator = new Validator();
        $validator->validate($tokenId, static::$schema['properties']['tokenId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->tokenId = $tokenId;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return UserSession Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): UserSession
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $created = new DateTime($input->{'created'});
        $device = DeviceInfo::buildFromInput($input->{'device'}, validate: $validate);
        $lastAccess = null;
        if (isset($input->{'lastAccess'})) {
            $lastAccess = new DateTime($input->{'lastAccess'});
        }
        $location = null;
        if (isset($input->{'location'})) {
            $location = Location::buildFromInput($input->{'location'}, validate: $validate);
        }
        $tokenId = $input->{'tokenId'};

        $obj = new self($created, $device, $tokenId);
        $obj->lastAccess = $lastAccess;
        $obj->location = $location;
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
        $output['created'] = ($this->created)->format(DateTime::ATOM);
        $output['device'] = $this->device->toJson();
        if (isset($this->lastAccess)) {
            $output['lastAccess'] = ($this->lastAccess)->format(DateTime::ATOM);
        }
        if (isset($this->location)) {
            $output['location'] = $this->location->toJson();
        }
        $output['tokenId'] = $this->tokenId;

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
        $this->created = clone $this->created;
        if (isset($this->lastAccess)) {
            $this->lastAccess = clone $this->lastAccess;
        }
    }
}
