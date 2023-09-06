<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Notification\NotificationsCountUnreadNotifications;

use InvalidArgumentException;

class NotificationsCountUnreadNotifications200ResponseBody
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'error' => [
                'minimum' => 0,
                'type' => 'integer',
            ],
            'info' => [
                'minimum' => 0,
                'type' => 'integer',
            ],
            'success' => [
                'minimum' => 0,
                'type' => 'integer',
            ],
            'total' => [
                'minimum' => 0,
                'type' => 'integer',
            ],
            'warning' => [
                'minimum' => 0,
                'type' => 'integer',
            ],
        ],
        'required' => [
            'total',
            'success',
            'info',
            'warning',
            'error',
        ],
        'type' => 'object',
    ];

    /**
     * @var int
     */
    private int $error;

    /**
     * @var int
     */
    private int $info;

    /**
     * @var int
     */
    private int $success;

    /**
     * @var int
     */
    private int $total;

    /**
     * @var int
     */
    private int $warning;

    public \Psr\Http\Message\ResponseInterface|null $httpResponse = null;

    /**
     * @param int $error
     * @param int $info
     * @param int $success
     * @param int $total
     * @param int $warning
     */
    public function __construct(int $error, int $info, int $success, int $total, int $warning)
    {
        $this->error = $error;
        $this->info = $info;
        $this->success = $success;
        $this->total = $total;
        $this->warning = $warning;
    }

    /**
     * @return int
     */
    public function getError(): int
    {
        return $this->error;
    }

    /**
     * @return int
     */
    public function getInfo(): int
    {
        return $this->info;
    }

    /**
     * @return int
     */
    public function getSuccess(): int
    {
        return $this->success;
    }

    /**
     * @return int
     */
    public function getTotal(): int
    {
        return $this->total;
    }

    /**
     * @return int
     */
    public function getWarning(): int
    {
        return $this->warning;
    }

    /**
     * @param int $error
     * @return self
     */
    public function withError(int $error): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($error, static::$schema['properties']['error']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->error = $error;

        return $clone;
    }

    /**
     * @param int $info
     * @return self
     */
    public function withInfo(int $info): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($info, static::$schema['properties']['info']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->info = $info;

        return $clone;
    }

    /**
     * @param int $success
     * @return self
     */
    public function withSuccess(int $success): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($success, static::$schema['properties']['success']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->success = $success;

        return $clone;
    }

    /**
     * @param int $total
     * @return self
     */
    public function withTotal(int $total): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($total, static::$schema['properties']['total']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->total = $total;

        return $clone;
    }

    /**
     * @param int $warning
     * @return self
     */
    public function withWarning(int $warning): self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($warning, static::$schema['properties']['warning']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->warning = $warning;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return NotificationsCountUnreadNotifications200ResponseBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): NotificationsCountUnreadNotifications200ResponseBody
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $error = (int)($input->{'error'});
        $info = (int)($input->{'info'});
        $success = (int)($input->{'success'});
        $total = (int)($input->{'total'});
        $warning = (int)($input->{'warning'});

        $obj = new self($error, $info, $success, $total, $warning);

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
        $output['error'] = $this->error;
        $output['info'] = $this->info;
        $output['success'] = $this->success;
        $output['total'] = $this->total;
        $output['warning'] = $this->warning;

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
