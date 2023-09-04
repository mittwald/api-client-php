<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Mail\MailaddressUpdateSpamprotection;

class MailaddressUpdateSpamprotectionRequestBodySpamProtection
{
    public const method = 'put';

    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'active' => [
                'type' => 'boolean',
            ],
            'autoDeleteSpam' => [
                'type' => 'boolean',
            ],
            'folder' => [
                'enum' => [
                    'inbox',
                    'spam',
                ],
                'type' => 'string',
            ],
            'relocationMinSpamScore' => [
                'maximum' => 10,
                'type' => 'integer',
            ],
        ],
        'required' => [
            'active',
            'folder',
            'relocationMinSpamScore',
            'autoDeleteSpam',
        ],
        'type' => 'object',
    ];

    /**
     * @var bool
     */
    private bool $active;

    /**
     * @var bool
     */
    private bool $autoDeleteSpam;

    /**
     * @var MailaddressUpdateSpamprotectionRequestBodySpamProtectionFolder
     */
    private MailaddressUpdateSpamprotectionRequestBodySpamProtectionFolder $folder;

    /**
     * @var int
     */
    private int $relocationMinSpamScore;

    private array $headers = [
        
    ];

    /**
     * @param bool $active
     * @param bool $autoDeleteSpam
     * @param MailaddressUpdateSpamprotectionRequestBodySpamProtectionFolder $folder
     * @param int $relocationMinSpamScore
     */
    public function __construct(bool $active, bool $autoDeleteSpam, MailaddressUpdateSpamprotectionRequestBodySpamProtectionFolder $folder, int $relocationMinSpamScore)
    {
        $this->active = $active;
        $this->autoDeleteSpam = $autoDeleteSpam;
        $this->folder = $folder;
        $this->relocationMinSpamScore = $relocationMinSpamScore;
    }

    /**
     * @return bool
     */
    public function getActive() : bool
    {
        return $this->active;
    }

    /**
     * @return bool
     */
    public function getAutoDeleteSpam() : bool
    {
        return $this->autoDeleteSpam;
    }

    /**
     * @return MailaddressUpdateSpamprotectionRequestBodySpamProtectionFolder
     */
    public function getFolder() : MailaddressUpdateSpamprotectionRequestBodySpamProtectionFolder
    {
        return $this->folder;
    }

    /**
     * @return int
     */
    public function getRelocationMinSpamScore() : int
    {
        return $this->relocationMinSpamScore;
    }

    /**
     * @param bool $active
     * @return self
     */
    public function withActive(bool $active) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($active, static::$schema['properties']['active']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->active = $active;

        return $clone;
    }

    /**
     * @param bool $autoDeleteSpam
     * @return self
     */
    public function withAutoDeleteSpam(bool $autoDeleteSpam) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($autoDeleteSpam, static::$schema['properties']['autoDeleteSpam']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->autoDeleteSpam = $autoDeleteSpam;

        return $clone;
    }

    /**
     * @param MailaddressUpdateSpamprotectionRequestBodySpamProtectionFolder $folder
     * @return self
     */
    public function withFolder(MailaddressUpdateSpamprotectionRequestBodySpamProtectionFolder $folder) : self
    {
        $clone = clone $this;
        $clone->folder = $folder;

        return $clone;
    }

    /**
     * @param int $relocationMinSpamScore
     * @return self
     */
    public function withRelocationMinSpamScore(int $relocationMinSpamScore) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($relocationMinSpamScore, static::$schema['properties']['relocationMinSpamScore']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->relocationMinSpamScore = $relocationMinSpamScore;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return MailaddressUpdateSpamprotectionRequestBodySpamProtection Created instance
     * @throws \InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true) : MailaddressUpdateSpamprotectionRequestBodySpamProtection
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $active = (bool)($input->{'active'});
        $autoDeleteSpam = (bool)($input->{'autoDeleteSpam'});
        $folder = MailaddressUpdateSpamprotectionRequestBodySpamProtectionFolder::from($input->{'folder'});
        $relocationMinSpamScore = (int)($input->{'relocationMinSpamScore'});

        $obj = new self($active, $autoDeleteSpam, $folder, $relocationMinSpamScore);

        return $obj;
    }

    /**
     * Converts this object back to a simple array that can be JSON-serialized
     *
     * @return array Converted array
     */
    public function toJson() : array
    {
        $output = [];
        $output['active'] = $this->active;
        $output['autoDeleteSpam'] = $this->autoDeleteSpam;
        $output['folder'] = ($this->folder)->value;
        $output['relocationMinSpamScore'] = $this->relocationMinSpamScore;

        return $output;
    }

    /**
     * Validates an input array
     *
     * @param array|object $input Input data
     * @param bool $return Return instead of throwing errors
     * @return bool Validation result
     * @throws \InvalidArgumentException
     */
    public static function validateInput(array|object $input, bool $return = false) : bool
    {
        $validator = new \JsonSchema\Validator();
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        $validator->validate($input, static::$schema);

        if (!$validator->isValid() && !$return) {
            $errors = array_map(function(array $e): string {
                return $e["property"] . ": " . $e["message"];
            }, $validator->getErrors());
            throw new \InvalidArgumentException(join(", ", $errors));
        }

        return $validator->isValid();
    }

    public function __clone()
    {
    }

    public function getUrl() : string
    {
        $mapped = $this->toJson();
        $id = urlencode($mapped['id']);
        return '/v2/mailaddresses/' . $id . '/spamprotection';
    }

    public function getQuery() : array
    {
        $mapped = $this->toJson();
        $query = [];
        return $query;
    }

    public function getHeaders() : array
    {
        return $this->headers;
    }

    public function withHeader(string $name, string|array $value) : self
    {
        $clone = clone $this;
        $clone->headers[$name] = $value;
        return $clone;
    }
}

