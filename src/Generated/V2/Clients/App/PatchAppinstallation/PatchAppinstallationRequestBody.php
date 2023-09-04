<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\App\PatchAppinstallation;

class PatchAppinstallationRequestBody
{
    public const method = 'patch';

    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'appVersionId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'customDocumentRoot' => [
                'type' => 'string',
            ],
            'description' => [
                'type' => 'string',
            ],
            'systemSoftware' => [
                'additionalProperties' => [
                    'properties' => [
                        'systemSoftwareVersion' => [
                            'type' => 'string',
                        ],
                        'updatePolicy' => [
                            '$ref' => '#/components/schemas/de.mittwald.v1.app.SystemSoftwareUpdatePolicy',
                        ],
                    ],
                    'type' => 'object',
                ],
                'type' => 'object',
            ],
            'updatePolicy' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.app.AppUpdatePolicy',
            ],
            'userInputs' => [
                'items' => [
                    '$ref' => '#/components/schemas/de.mittwald.v1.app.SavedUserInput',
                ],
                'type' => 'array',
            ],
        ],
        'type' => 'object',
    ];

    /**
     * @var string|null
     */
    private ?string $appVersionId = null;

    /**
     * @var string|null
     */
    private ?string $customDocumentRoot = null;

    /**
     * @var string|null
     */
    private ?string $description = null;

    /**
     * @var PatchAppinstallationRequestBodySystemSoftwareItem[]|null
     */
    private ?array $systemSoftware = null;

    /**
     * @var \Mittwald\ApiClient\Generated\V2\Schemas\App\AppUpdatePolicy|null
     */
    private ?\Mittwald\ApiClient\Generated\V2\Schemas\App\AppUpdatePolicy $updatePolicy = null;

    /**
     * @var \Mittwald\ApiClient\Generated\V2\Schemas\App\SavedUserInput[]|null
     */
    private ?array $userInputs = null;

    private array $headers = [
        
    ];

    /**
     *
     */
    public function __construct()
    {
    }

    /**
     * @return string|null
     */
    public function getAppVersionId() : ?string
    {
        return $this->appVersionId ?? null;
    }

    /**
     * @return string|null
     */
    public function getCustomDocumentRoot() : ?string
    {
        return $this->customDocumentRoot ?? null;
    }

    /**
     * @return string|null
     */
    public function getDescription() : ?string
    {
        return $this->description ?? null;
    }

    /**
     * @return PatchAppinstallationRequestBodySystemSoftwareItem[]|null
     */
    public function getSystemSoftware() : ?array
    {
        return $this->systemSoftware ?? null;
    }

    /**
     * @return \Mittwald\ApiClient\Generated\V2\Schemas\App\AppUpdatePolicy|null
     */
    public function getUpdatePolicy() : ?\Mittwald\ApiClient\Generated\V2\Schemas\App\AppUpdatePolicy
    {
        return $this->updatePolicy ?? null;
    }

    /**
     * @return \Mittwald\ApiClient\Generated\V2\Schemas\App\SavedUserInput[]|null
     */
    public function getUserInputs() : ?array
    {
        return $this->userInputs ?? null;
    }

    /**
     * @param string $appVersionId
     * @return self
     */
    public function withAppVersionId(string $appVersionId) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($appVersionId, static::$schema['properties']['appVersionId']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->appVersionId = $appVersionId;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutAppVersionId() : self
    {
        $clone = clone $this;
        unset($clone->appVersionId);

        return $clone;
    }

    /**
     * @param string $customDocumentRoot
     * @return self
     */
    public function withCustomDocumentRoot(string $customDocumentRoot) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($customDocumentRoot, static::$schema['properties']['customDocumentRoot']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->customDocumentRoot = $customDocumentRoot;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutCustomDocumentRoot() : self
    {
        $clone = clone $this;
        unset($clone->customDocumentRoot);

        return $clone;
    }

    /**
     * @param string $description
     * @return self
     */
    public function withDescription(string $description) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($description, static::$schema['properties']['description']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->description = $description;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutDescription() : self
    {
        $clone = clone $this;
        unset($clone->description);

        return $clone;
    }

    /**
     * @param PatchAppinstallationRequestBodySystemSoftwareItem[] $systemSoftware
     * @return self
     */
    public function withSystemSoftware(array $systemSoftware) : self
    {
        $clone = clone $this;
        $clone->systemSoftware = $systemSoftware;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutSystemSoftware() : self
    {
        $clone = clone $this;
        unset($clone->systemSoftware);

        return $clone;
    }

    /**
     * @param \Mittwald\ApiClient\Generated\V2\Schemas\App\AppUpdatePolicy $updatePolicy
     * @return self
     */
    public function withUpdatePolicy(\Mittwald\ApiClient\Generated\V2\Schemas\App\AppUpdatePolicy $updatePolicy) : self
    {
        $clone = clone $this;
        $clone->updatePolicy = $updatePolicy;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutUpdatePolicy() : self
    {
        $clone = clone $this;
        unset($clone->updatePolicy);

        return $clone;
    }

    /**
     * @param \Mittwald\ApiClient\Generated\V2\Schemas\App\SavedUserInput[] $userInputs
     * @return self
     */
    public function withUserInputs(array $userInputs) : self
    {
        $clone = clone $this;
        $clone->userInputs = $userInputs;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutUserInputs() : self
    {
        $clone = clone $this;
        unset($clone->userInputs);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return PatchAppinstallationRequestBody Created instance
     * @throws \InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true) : PatchAppinstallationRequestBody
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $appVersionId = null;
        if (isset($input->{'appVersionId'})) {
            $appVersionId = $input->{'appVersionId'};
        }
        $customDocumentRoot = null;
        if (isset($input->{'customDocumentRoot'})) {
            $customDocumentRoot = $input->{'customDocumentRoot'};
        }
        $description = null;
        if (isset($input->{'description'})) {
            $description = $input->{'description'};
        }
        $systemSoftware = null;
        if (isset($input->{'systemSoftware'})) {
            $systemSoftware = array_map(fn (array|object $i): PatchAppinstallationRequestBodySystemSoftwareItem => PatchAppinstallationRequestBodySystemSoftwareItem::buildFromInput($i, validate: $validate), $input->{'systemSoftware'});
        }
        $updatePolicy = null;
        if (isset($input->{'updatePolicy'})) {
            $updatePolicy = \Mittwald\ApiClient\Generated\V2\Schemas\App\AppUpdatePolicy::from($input->{'updatePolicy'});
        }
        $userInputs = null;
        if (isset($input->{'userInputs'})) {
            $userInputs = array_map(fn(array $i): \Mittwald\ApiClient\Generated\V2\Schemas\App\SavedUserInput => \Mittwald\ApiClient\Generated\V2\Schemas\App\SavedUserInput::buildFromInput($i, validate: $validate), $input->{'userInputs'});
        }

        $obj = new self();
        $obj->appVersionId = $appVersionId;
        $obj->customDocumentRoot = $customDocumentRoot;
        $obj->description = $description;
        $obj->systemSoftware = $systemSoftware;
        $obj->updatePolicy = $updatePolicy;
        $obj->userInputs = $userInputs;
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
        if (isset($this->appVersionId)) {
            $output['appVersionId'] = $this->appVersionId;
        }
        if (isset($this->customDocumentRoot)) {
            $output['customDocumentRoot'] = $this->customDocumentRoot;
        }
        if (isset($this->description)) {
            $output['description'] = $this->description;
        }
        if (isset($this->systemSoftware)) {
            $output['systemSoftware'] = array_map(fn (PatchAppinstallationRequestBodySystemSoftwareItem $i) => $i->toJson(), $this->systemSoftware);
        }
        if (isset($this->updatePolicy)) {
            $output['updatePolicy'] = $this->updatePolicy->value;
        }
        if (isset($this->userInputs)) {
            $output['userInputs'] = array_map(fn(\Mittwald\ApiClient\Generated\V2\Schemas\App\SavedUserInput $i): array => $i->toJson(), $this->userInputs);
        }

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
        if (isset($this->systemSoftware)) {
            $this->systemSoftware = array_map(fn (PatchAppinstallationRequestBodySystemSoftwareItem $i) => clone $i, $this->systemSoftware);
        }
    }

    public function getUrl() : string
    {
        $mapped = $this->toJson();
        $appInstallationId = urlencode($mapped['appInstallationId']);
        return '/v2/appinstallations/' . $appInstallationId;
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

