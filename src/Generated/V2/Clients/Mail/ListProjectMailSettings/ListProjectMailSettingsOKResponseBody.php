<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Mail\ListProjectMailSettings;

use InvalidArgumentException;
use JsonSchema\Validator;

class ListProjectMailSettingsOKResponseBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'blacklist' => [
                'items' => [
                    'format' => 'email',
                    'type' => 'string',
                ],
                'type' => 'array',
            ],
            'projectId' => [
                'type' => 'string',
            ],
            'whitelist' => [
                'items' => [
                    'format' => 'email',
                    'type' => 'string',
                ],
                'type' => 'array',
            ],
        ],
        'required' => [
            'projectId',
            'blacklist',
            'whitelist',
        ],
        'type' => 'object',
    ];

    /**
     * @var string[]
     */
    private array $blacklist;

    private string $projectId;

    /**
     * @var string[]
     */
    private array $whitelist;

    /**
     * @param string[] $blacklist
     * @param string[] $whitelist
     */
    public function __construct(array $blacklist, string $projectId, array $whitelist)
    {
        $this->blacklist = $blacklist;
        $this->projectId = $projectId;
        $this->whitelist = $whitelist;
    }

    /**
     * @return string[]
     */
    public function getBlacklist(): array
    {
        return $this->blacklist;
    }

    public function getProjectId(): string
    {
        return $this->projectId;
    }

    /**
     * @return string[]
     */
    public function getWhitelist(): array
    {
        return $this->whitelist;
    }

    /**
     * @param string[] $blacklist
     */
    public function withBlacklist(array $blacklist): self
    {
        $validator = new Validator();
        $validator->validate($blacklist, static::$schema['properties']['blacklist']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->blacklist = $blacklist;

        return $clone;
    }

    public function withProjectId(string $projectId): self
    {
        $validator = new Validator();
        $validator->validate($projectId, static::$schema['properties']['projectId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->projectId = $projectId;

        return $clone;
    }

    /**
     * @param string[] $whitelist
     */
    public function withWhitelist(array $whitelist): self
    {
        $validator = new Validator();
        $validator->validate($whitelist, static::$schema['properties']['whitelist']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->whitelist = $whitelist;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return ListProjectMailSettingsOKResponseBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ListProjectMailSettingsOKResponseBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $blacklist = $input->{'blacklist'};
        $projectId = $input->{'projectId'};
        $whitelist = $input->{'whitelist'};

        $obj = new self($blacklist, $projectId, $whitelist);

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
        $output['blacklist'] = $this->blacklist;
        $output['projectId'] = $this->projectId;
        $output['whitelist'] = $this->whitelist;

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
    }
}
