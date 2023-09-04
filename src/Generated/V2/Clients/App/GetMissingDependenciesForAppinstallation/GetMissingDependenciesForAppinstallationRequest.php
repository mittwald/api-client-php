<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\App\GetMissingDependenciesForAppinstallation;

class GetMissingDependenciesForAppinstallationRequest
{
    public const method = 'get';

    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'type' => 'object',
        'properties' => [
            'appInstallationId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'targetAppVersionID' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
        ],
        'required' => [
            'appInstallationId',
            'targetAppVersionID',
        ],
    ];

    /**
     * @var string
     */
    private string $appInstallationId;

    /**
     * @var string
     */
    private string $targetAppVersionID;

    private array $headers = [
        
    ];

    /**
     * @param string $appInstallationId
     * @param string $targetAppVersionID
     */
    public function __construct(string $appInstallationId, string $targetAppVersionID)
    {
        $this->appInstallationId = $appInstallationId;
        $this->targetAppVersionID = $targetAppVersionID;
    }

    /**
     * @return string
     */
    public function getAppInstallationId() : string
    {
        return $this->appInstallationId;
    }

    /**
     * @return string
     */
    public function getTargetAppVersionID() : string
    {
        return $this->targetAppVersionID;
    }

    /**
     * @param string $appInstallationId
     * @return self
     */
    public function withAppInstallationId(string $appInstallationId) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($appInstallationId, static::$schema['properties']['appInstallationId']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->appInstallationId = $appInstallationId;

        return $clone;
    }

    /**
     * @param string $targetAppVersionID
     * @return self
     */
    public function withTargetAppVersionID(string $targetAppVersionID) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($targetAppVersionID, static::$schema['properties']['targetAppVersionID']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->targetAppVersionID = $targetAppVersionID;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return GetMissingDependenciesForAppinstallationRequest Created instance
     * @throws \InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true) : GetMissingDependenciesForAppinstallationRequest
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $appInstallationId = $input->{'appInstallationId'};
        $targetAppVersionID = $input->{'targetAppVersionID'};

        $obj = new self($appInstallationId, $targetAppVersionID);

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
        $output['appInstallationId'] = $this->appInstallationId;
        $output['targetAppVersionID'] = $this->targetAppVersionID;

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
        $appInstallationId = urlencode($mapped['appInstallationId']);
        return '/v2/appinstallations/' . $appInstallationId . '/missing-dependencies';
    }

    public function getQuery() : array
    {
        $mapped = $this->toJson();
        $query = [];
        if (isset($mapped['targetAppVersionID'])) {
            $query['targetAppVersionID'] = $mapped['targetAppVersionID'];
        }
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

