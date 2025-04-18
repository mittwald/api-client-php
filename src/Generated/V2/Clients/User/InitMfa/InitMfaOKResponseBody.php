<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\User\InitMfa;

use InvalidArgumentException;
use JsonSchema\Validator;

class InitMfaOKResponseBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'barcode' => [
                'description' => 'base64 encoded barcode content to scan from your mfa app. e.g. `iVBORw0KGgoAAAANSUhEUgAAAMgAAADIEAAAAADYoy...`. You
can display it with `<img src="data:image/png;base64,iVBORw0KGgoAAAANSUh.." />`
',
                'type' => 'string',
            ],
            'url' => [
                'description' => 'Same as barcode,  but in URL form.
',
                'example' => 'otpauth://totp/mStudio:test@gmail.com?algorithm=SHA1&digits=6&issuer=mStudio&period=30&secret=HTXT7KJFVNAJUPYWQRWMNVQE5AF5YZI2',
                'type' => 'string',
            ],
        ],
        'required' => [
            'barcode',
            'url',
        ],
        'type' => 'object',
    ];

    /**
     * base64 encoded barcode content to scan from your mfa app. e.g. `iVBORw0KGgoAAAANSUhEUgAAAMgAAADIEAAAAADYoy...`. You
     * can display it with `<img src="data:image/png;base64,iVBORw0KGgoAAAANSUh.." />`
     *
     */
    private string $barcode;

    /**
     * Same as barcode,  but in URL form.
     *
     */
    private string $url;

    public function __construct(string $barcode, string $url)
    {
        $this->barcode = $barcode;
        $this->url = $url;
    }

    public function getBarcode(): string
    {
        return $this->barcode;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function withBarcode(string $barcode): self
    {
        $validator = new Validator();
        $validator->validate($barcode, self::$schema['properties']['barcode']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->barcode = $barcode;

        return $clone;
    }

    public function withUrl(string $url): self
    {
        $validator = new Validator();
        $validator->validate($url, self::$schema['properties']['url']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->url = $url;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return InitMfaOKResponseBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): InitMfaOKResponseBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $barcode = $input->{'barcode'};
        $url = $input->{'url'};

        $obj = new self($barcode, $url);

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
        $output['barcode'] = $this->barcode;
        $output['url'] = $this->url;

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
        $validator->validate($input, self::$schema);

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
