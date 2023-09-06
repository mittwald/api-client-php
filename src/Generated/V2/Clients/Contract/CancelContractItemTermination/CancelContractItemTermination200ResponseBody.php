<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Contract\CancelContractItemTermination;

use InvalidArgumentException;

class CancelContractItemTermination200ResponseBody
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'contractId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'contractItemId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'isCancelled' => [
                'type' => 'boolean',
            ],
        ],
    ];

    /**
     * @var string|null
     */
    private ?string $contractId = null;

    /**
     * @var string|null
     */
    private ?string $contractItemId = null;

    /**
     * @var bool|null
     */
    private ?bool $isCancelled = null;

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
    public function getContractId(): ?string
    {
        return $this->contractId ?? null;
    }

    /**
     * @return string|null
     */
    public function getContractItemId(): ?string
    {
        return $this->contractItemId ?? null;
    }

    /**
     * @return bool|null
     */
    public function getIsCancelled(): ?bool
    {
        return $this->isCancelled ?? null;
    }

    /**
     * @param string $contractId
     * @return self
     */
    public function withContractId(string $contractId): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($contractId, static::$schema['properties']['contractId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->contractId = $contractId;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutContractId(): self
    {
        $clone = clone $this;
        unset($clone->contractId);

        return $clone;
    }

    /**
     * @param string $contractItemId
     * @return self
     */
    public function withContractItemId(string $contractItemId): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($contractItemId, static::$schema['properties']['contractItemId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->contractItemId = $contractItemId;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutContractItemId(): self
    {
        $clone = clone $this;
        unset($clone->contractItemId);

        return $clone;
    }

    /**
     * @param bool $isCancelled
     * @return self
     */
    public function withIsCancelled(bool $isCancelled): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($isCancelled, static::$schema['properties']['isCancelled']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->isCancelled = $isCancelled;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutIsCancelled(): self
    {
        $clone = clone $this;
        unset($clone->isCancelled);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return CancelContractItemTermination200ResponseBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): CancelContractItemTermination200ResponseBody
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $contractId = null;
        if (isset($input->{'contractId'})) {
            $contractId = $input->{'contractId'};
        }
        $contractItemId = null;
        if (isset($input->{'contractItemId'})) {
            $contractItemId = $input->{'contractItemId'};
        }
        $isCancelled = null;
        if (isset($input->{'isCancelled'})) {
            $isCancelled = (bool)($input->{'isCancelled'});
        }

        $obj = new self();
        $obj->contractId = $contractId;
        $obj->contractItemId = $contractItemId;
        $obj->isCancelled = $isCancelled;
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
        if (isset($this->contractId)) {
            $output['contractId'] = $this->contractId;
        }
        if (isset($this->contractItemId)) {
            $output['contractItemId'] = $this->contractItemId;
        }
        if (isset($this->isCancelled)) {
            $output['isCancelled'] = $this->isCancelled;
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
