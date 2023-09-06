<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Customer\UpdateCategory;

use InvalidArgumentException;

class UpdateCategory200ResponseBody
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'customerId' => [
                'type' => 'string',
            ],
            'isPublic' => [
                'type' => 'boolean',
            ],
            'name' => [
                'type' => 'string',
            ],
            'useAgencyDomainPrices' => [
                'type' => 'boolean',
            ],
            'useAgencySslPrices' => [
                'type' => 'boolean',
            ],
        ],
        'required' => [
            'categoryId',
        ],
        'type' => 'object',
    ];

    /**
     * @var string|null
     */
    private ?string $customerId = null;

    /**
     * @var bool|null
     */
    private ?bool $isPublic = null;

    /**
     * @var string|null
     */
    private ?string $name = null;

    /**
     * @var bool|null
     */
    private ?bool $useAgencyDomainPrices = null;

    /**
     * @var bool|null
     */
    private ?bool $useAgencySslPrices = null;

    public \Psr\Http\Message\ResponseInterface|null $httpResponse = null;

    /**
     *
     */
    public function __construct()
    {
    }

    /**
     * @return string|null
     */
    public function getCustomerId(): ?string
    {
        return $this->customerId ?? null;
    }

    /**
     * @return bool|null
     */
    public function getIsPublic(): ?bool
    {
        return $this->isPublic ?? null;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name ?? null;
    }

    /**
     * @return bool|null
     */
    public function getUseAgencyDomainPrices(): ?bool
    {
        return $this->useAgencyDomainPrices ?? null;
    }

    /**
     * @return bool|null
     */
    public function getUseAgencySslPrices(): ?bool
    {
        return $this->useAgencySslPrices ?? null;
    }

    /**
     * @param string $customerId
     * @return self
     */
    public function withCustomerId(string $customerId): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($customerId, static::$schema['properties']['customerId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->customerId = $customerId;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutCustomerId(): self
    {
        $clone = clone $this;
        unset($clone->customerId);

        return $clone;
    }

    /**
     * @param bool $isPublic
     * @return self
     */
    public function withIsPublic(bool $isPublic): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($isPublic, static::$schema['properties']['isPublic']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->isPublic = $isPublic;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutIsPublic(): self
    {
        $clone = clone $this;
        unset($clone->isPublic);

        return $clone;
    }

    /**
     * @param string $name
     * @return self
     */
    public function withName(string $name): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($name, static::$schema['properties']['name']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->name = $name;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutName(): self
    {
        $clone = clone $this;
        unset($clone->name);

        return $clone;
    }

    /**
     * @param bool $useAgencyDomainPrices
     * @return self
     */
    public function withUseAgencyDomainPrices(bool $useAgencyDomainPrices): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($useAgencyDomainPrices, static::$schema['properties']['useAgencyDomainPrices']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->useAgencyDomainPrices = $useAgencyDomainPrices;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutUseAgencyDomainPrices(): self
    {
        $clone = clone $this;
        unset($clone->useAgencyDomainPrices);

        return $clone;
    }

    /**
     * @param bool $useAgencySslPrices
     * @return self
     */
    public function withUseAgencySslPrices(bool $useAgencySslPrices): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($useAgencySslPrices, static::$schema['properties']['useAgencySslPrices']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->useAgencySslPrices = $useAgencySslPrices;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutUseAgencySslPrices(): self
    {
        $clone = clone $this;
        unset($clone->useAgencySslPrices);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return UpdateCategory200ResponseBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): UpdateCategory200ResponseBody
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $customerId = null;
        if (isset($input->{'customerId'})) {
            $customerId = $input->{'customerId'};
        }
        $isPublic = null;
        if (isset($input->{'isPublic'})) {
            $isPublic = (bool)($input->{'isPublic'});
        }
        $name = null;
        if (isset($input->{'name'})) {
            $name = $input->{'name'};
        }
        $useAgencyDomainPrices = null;
        if (isset($input->{'useAgencyDomainPrices'})) {
            $useAgencyDomainPrices = (bool)($input->{'useAgencyDomainPrices'});
        }
        $useAgencySslPrices = null;
        if (isset($input->{'useAgencySslPrices'})) {
            $useAgencySslPrices = (bool)($input->{'useAgencySslPrices'});
        }

        $obj = new self();
        $obj->customerId = $customerId;
        $obj->isPublic = $isPublic;
        $obj->name = $name;
        $obj->useAgencyDomainPrices = $useAgencyDomainPrices;
        $obj->useAgencySslPrices = $useAgencySslPrices;
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
        if (isset($this->customerId)) {
            $output['customerId'] = $this->customerId;
        }
        if (isset($this->isPublic)) {
            $output['isPublic'] = $this->isPublic;
        }
        if (isset($this->name)) {
            $output['name'] = $this->name;
        }
        if (isset($this->useAgencyDomainPrices)) {
            $output['useAgencyDomainPrices'] = $this->useAgencyDomainPrices;
        }
        if (isset($this->useAgencySslPrices)) {
            $output['useAgencySslPrices'] = $this->useAgencySslPrices;
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

    public static function fromResponse(\Psr\Http\Message\ResponseInterface $httpResponse): self
    {
        $parsedBody = json_decode($httpResponse->getBody()->getContents(), associative: true);
        $response = static::buildFromInput(['body' => $parsedBody], validate: false);
        $response->httpResponse = $httpResponse;
        return $response;
    }
}
