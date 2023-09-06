<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\User\DeleteUser;

use InvalidArgumentException;
use JsonSchema\Validator;
use Psr\Http\Message\ResponseInterface;

class DeleteUser409ResponseBody
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'info' => [
                'description' => 'A json object, given further information about the error',
                'example' => [
                    'customerId' => 'xyz',
                ],
                'type' => 'object',
            ],
            'message' => [
                'description' => 'more information about the error',
                'example' => 'The user cannot be removed because it is the last owner of the customer with the id \'xyz\'',
                'type' => 'string',
            ],
            'name' => [
                'enum' => [
                    'RemovingLastOwnerNotAllowedError',
                ],
                'example' => 'RemovingLastOwnerNotAllowedError',
                'type' => 'string',
            ],
        ],
        'required' => [
            'name',
            'message',
        ],
        'type' => 'object',
    ];

    /**
     * A json object, given further information about the error
     *
     * @var DeleteUser409ResponseBodyInfo|null
     */
    private ?DeleteUser409ResponseBodyInfo $info = null;

    /**
     * more information about the error
     *
     * @var string
     */
    private string $message;

    /**
     * @var DeleteUser409ResponseBodyName
     */
    private DeleteUser409ResponseBodyName $name;

    public ResponseInterface|null $httpResponse = null;

    /**
     * @param string $message
     * @param DeleteUser409ResponseBodyName $name
     */
    public function __construct(string $message, DeleteUser409ResponseBodyName $name)
    {
        $this->message = $message;
        $this->name = $name;
    }

    /**
     * @return DeleteUser409ResponseBodyInfo|null
     */
    public function getInfo(): ?DeleteUser409ResponseBodyInfo
    {
        return $this->info ?? null;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * @return DeleteUser409ResponseBodyName
     */
    public function getName(): DeleteUser409ResponseBodyName
    {
        return $this->name;
    }

    /**
     * @param DeleteUser409ResponseBodyInfo $info
     * @return self
     */
    public function withInfo(DeleteUser409ResponseBodyInfo $info): self
    {
        $clone = clone $this;
        $clone->info = $info;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutInfo(): self
    {
        $clone = clone $this;
        unset($clone->info);

        return $clone;
    }

    /**
     * @param string $message
     * @return self
     */
    public function withMessage(string $message): self
    {
        $validator = new Validator();
        $validator->validate($message, static::$schema['properties']['message']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->message = $message;

        return $clone;
    }

    /**
     * @param DeleteUser409ResponseBodyName $name
     * @return self
     */
    public function withName(DeleteUser409ResponseBodyName $name): self
    {
        $clone = clone $this;
        $clone->name = $name;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return DeleteUser409ResponseBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): DeleteUser409ResponseBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $info = null;
        if (isset($input->{'info'})) {
            $info = DeleteUser409ResponseBodyInfo::buildFromInput($input->{'info'}, validate: $validate);
        }
        $message = $input->{'message'};
        $name = DeleteUser409ResponseBodyName::from($input->{'name'});

        $obj = new self($message, $name);
        $obj->info = $info;
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
        if (isset($this->info)) {
            $output['info'] = ($this->info)->toJson();
        }
        $output['message'] = $this->message;
        $output['name'] = ($this->name)->value;

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
        if (isset($this->info)) {
            $this->info = clone $this->info;
        }
    }

    public static function fromResponse(ResponseInterface $httpResponse): self
    {
        $parsedBody = json_decode($httpResponse->getBody()->getContents(), associative: true);
        $response = static::buildFromInput(['body' => $parsedBody], validate: false);
        $response->httpResponse = $httpResponse;
        return $response;
    }
}
