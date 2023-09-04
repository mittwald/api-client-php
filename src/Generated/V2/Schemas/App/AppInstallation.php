<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\App;

class AppInstallation
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'description' => 'An `AppInstallation` is a concrete manifestation of an `App` in a specific `AppVersion`.',
        'properties' => [
            'appId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'appVersion' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.app.VersionStatus',
            ],
            'customDocumentRoot' => [
                'type' => 'string',
            ],
            'description' => [
                'type' => 'string',
            ],
            'disabled' => [
                'default' => false,
                'type' => 'boolean',
            ],
            'id' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'installationPath' => [
                'type' => 'string',
            ],
            'linkedDatabases' => [
                'items' => [
                    '$ref' => '#/components/schemas/de.mittwald.v1.app.LinkedDatabase',
                ],
                'type' => 'array',
            ],
            'processes' => [
                'items' => [
                    'format' => 'uuid',
                    'type' => 'string',
                ],
                'type' => 'array',
            ],
            'projectId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'screenshotId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'screenshotRef' => [
                'type' => 'string',
            ],
            'systemSoftware' => [
                'items' => [
                    '$ref' => '#/components/schemas/de.mittwald.v1.app.InstalledSystemSoftware',
                ],
                'type' => 'array',
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
        'required' => [
            'id',
            'appId',
            'appVersion',
            'description',
            'installationPath',
            'disabled',
        ],
        'type' => 'object',
    ];

    /**
     * @var string
     */
    private string $appId;

    /**
     * @var VersionStatus
     */
    private VersionStatus $appVersion;

    /**
     * @var string|null
     */
    private ?string $customDocumentRoot = null;

    /**
     * @var string
     */
    private string $description;

    /**
     * @var bool
     */
    private bool $disabled;

    /**
     * @var string
     */
    private string $id;

    /**
     * @var string
     */
    private string $installationPath;

    /**
     * @var LinkedDatabase[]|null
     */
    private ?array $linkedDatabases = null;

    /**
     * @var string[]|null
     */
    private ?array $processes = null;

    /**
     * @var string|null
     */
    private ?string $projectId = null;

    /**
     * @var string|null
     */
    private ?string $screenshotId = null;

    /**
     * @var string|null
     */
    private ?string $screenshotRef = null;

    /**
     * @var InstalledSystemSoftware[]|null
     */
    private ?array $systemSoftware = null;

    /**
     * @var AppUpdatePolicy|null
     */
    private ?AppUpdatePolicy $updatePolicy = null;

    /**
     * @var SavedUserInput[]|null
     */
    private ?array $userInputs = null;

    /**
     * @param string $appId
     * @param VersionStatus $appVersion
     * @param string $description
     * @param bool $disabled
     * @param string $id
     * @param string $installationPath
     */
    public function __construct(string $appId, VersionStatus $appVersion, string $description, bool $disabled, string $id, string $installationPath)
    {
        $this->appId = $appId;
        $this->appVersion = $appVersion;
        $this->description = $description;
        $this->disabled = $disabled;
        $this->id = $id;
        $this->installationPath = $installationPath;
    }

    /**
     * @return string
     */
    public function getAppId() : string
    {
        return $this->appId;
    }

    /**
     * @return VersionStatus
     */
    public function getAppVersion() : VersionStatus
    {
        return $this->appVersion;
    }

    /**
     * @return string|null
     */
    public function getCustomDocumentRoot() : ?string
    {
        return $this->customDocumentRoot ?? null;
    }

    /**
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }

    /**
     * @return bool
     */
    public function getDisabled() : bool
    {
        return $this->disabled;
    }

    /**
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getInstallationPath() : string
    {
        return $this->installationPath;
    }

    /**
     * @return LinkedDatabase[]|null
     */
    public function getLinkedDatabases() : ?array
    {
        return $this->linkedDatabases ?? null;
    }

    /**
     * @return string[]|null
     */
    public function getProcesses() : ?array
    {
        return $this->processes ?? null;
    }

    /**
     * @return string|null
     */
    public function getProjectId() : ?string
    {
        return $this->projectId ?? null;
    }

    /**
     * @return string|null
     */
    public function getScreenshotId() : ?string
    {
        return $this->screenshotId ?? null;
    }

    /**
     * @return string|null
     */
    public function getScreenshotRef() : ?string
    {
        return $this->screenshotRef ?? null;
    }

    /**
     * @return
     * InstalledSystemSoftware[]|null
     */
    public function getSystemSoftware() : ?array
    {
        return $this->systemSoftware ?? null;
    }

    /**
     * @return AppUpdatePolicy|null
     */
    public function getUpdatePolicy() : ?AppUpdatePolicy
    {
        return $this->updatePolicy ?? null;
    }

    /**
     * @return SavedUserInput[]|null
     */
    public function getUserInputs() : ?array
    {
        return $this->userInputs ?? null;
    }

    /**
     * @param string $appId
     * @return self
     */
    public function withAppId(string $appId) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($appId, static::$schema['properties']['appId']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->appId = $appId;

        return $clone;
    }

    /**
     * @param VersionStatus $appVersion
     * @return self
     */
    public function withAppVersion(VersionStatus $appVersion) : self
    {
        $clone = clone $this;
        $clone->appVersion = $appVersion;

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
     * @param bool $disabled
     * @return self
     */
    public function withDisabled(bool $disabled) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($disabled, static::$schema['properties']['disabled']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->disabled = $disabled;

        return $clone;
    }

    /**
     * @param string $id
     * @return self
     */
    public function withId(string $id) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($id, static::$schema['properties']['id']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->id = $id;

        return $clone;
    }

    /**
     * @param string $installationPath
     * @return self
     */
    public function withInstallationPath(string $installationPath) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($installationPath, static::$schema['properties']['installationPath']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->installationPath = $installationPath;

        return $clone;
    }

    /**
     * @param LinkedDatabase[] $linkedDatabases
     * @return self
     */
    public function withLinkedDatabases(array $linkedDatabases) : self
    {
        $clone = clone $this;
        $clone->linkedDatabases = $linkedDatabases;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutLinkedDatabases() : self
    {
        $clone = clone $this;
        unset($clone->linkedDatabases);

        return $clone;
    }

    /**
     * @param string[] $processes
     * @return self
     */
    public function withProcesses(array $processes) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($processes, static::$schema['properties']['processes']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->processes = $processes;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutProcesses() : self
    {
        $clone = clone $this;
        unset($clone->processes);

        return $clone;
    }

    /**
     * @param string $projectId
     * @return self
     */
    public function withProjectId(string $projectId) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($projectId, static::$schema['properties']['projectId']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->projectId = $projectId;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutProjectId() : self
    {
        $clone = clone $this;
        unset($clone->projectId);

        return $clone;
    }

    /**
     * @param string $screenshotId
     * @return self
     */
    public function withScreenshotId(string $screenshotId) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($screenshotId, static::$schema['properties']['screenshotId']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->screenshotId = $screenshotId;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutScreenshotId() : self
    {
        $clone = clone $this;
        unset($clone->screenshotId);

        return $clone;
    }

    /**
     * @param string $screenshotRef
     * @return self
     */
    public function withScreenshotRef(string $screenshotRef) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($screenshotRef, static::$schema['properties']['screenshotRef']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->screenshotRef = $screenshotRef;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutScreenshotRef() : self
    {
        $clone = clone $this;
        unset($clone->screenshotRef);

        return $clone;
    }

    /**
     * @param InstalledSystemSoftware[] $systemSoftware
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
     * @param AppUpdatePolicy $updatePolicy
     * @return self
     */
    public function withUpdatePolicy(AppUpdatePolicy $updatePolicy) : self
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
     * @param SavedUserInput[] $userInputs
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
     * @return AppInstallation Created instance
     * @throws \InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true) : AppInstallation
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $appId = $input->{'appId'};
        $appVersion = VersionStatus::buildFromInput($input->{'appVersion'}, validate: $validate);
        $customDocumentRoot = null;
        if (isset($input->{'customDocumentRoot'})) {
            $customDocumentRoot = $input->{'customDocumentRoot'};
        }
        $description = $input->{'description'};
        $disabled = (bool)($input->{'disabled'});
        $id = $input->{'id'};
        $installationPath = $input->{'installationPath'};
        $linkedDatabases = null;
        if (isset($input->{'linkedDatabases'})) {
            $linkedDatabases = array_map(fn(array $i): LinkedDatabase => LinkedDatabase::buildFromInput($i, validate: $validate), $input->{'linkedDatabases'});
        }
        $processes = null;
        if (isset($input->{'processes'})) {
            $processes = $input->{'processes'};
        }
        $projectId = null;
        if (isset($input->{'projectId'})) {
            $projectId = $input->{'projectId'};
        }
        $screenshotId = null;
        if (isset($input->{'screenshotId'})) {
            $screenshotId = $input->{'screenshotId'};
        }
        $screenshotRef = null;
        if (isset($input->{'screenshotRef'})) {
            $screenshotRef = $input->{'screenshotRef'};
        }
        $systemSoftware = null;
        if (isset($input->{'systemSoftware'})) {
            $systemSoftware = array_map(fn(array $i): InstalledSystemSoftware => InstalledSystemSoftware::buildFromInput($i, validate: $validate), $input->{'systemSoftware'});
        }
        $updatePolicy = null;
        if (isset($input->{'updatePolicy'})) {
            $updatePolicy = AppUpdatePolicy::from($input->{'updatePolicy'});
        }
        $userInputs = null;
        if (isset($input->{'userInputs'})) {
            $userInputs = array_map(fn(array $i): SavedUserInput => SavedUserInput::buildFromInput($i, validate: $validate), $input->{'userInputs'});
        }

        $obj = new self($appId, $appVersion, $description, $disabled, $id, $installationPath);
        $obj->customDocumentRoot = $customDocumentRoot;
        $obj->linkedDatabases = $linkedDatabases;
        $obj->processes = $processes;
        $obj->projectId = $projectId;
        $obj->screenshotId = $screenshotId;
        $obj->screenshotRef = $screenshotRef;
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
        $output['appId'] = $this->appId;
        $output['appVersion'] = $this->appVersion->toJson();
        if (isset($this->customDocumentRoot)) {
            $output['customDocumentRoot'] = $this->customDocumentRoot;
        }
        $output['description'] = $this->description;
        $output['disabled'] = $this->disabled;
        $output['id'] = $this->id;
        $output['installationPath'] = $this->installationPath;
        if (isset($this->linkedDatabases)) {
            $output['linkedDatabases'] = array_map(fn(LinkedDatabase $i): array => $i->toJson(), $this->linkedDatabases);
        }
        if (isset($this->processes)) {
            $output['processes'] = $this->processes;
        }
        if (isset($this->projectId)) {
            $output['projectId'] = $this->projectId;
        }
        if (isset($this->screenshotId)) {
            $output['screenshotId'] = $this->screenshotId;
        }
        if (isset($this->screenshotRef)) {
            $output['screenshotRef'] = $this->screenshotRef;
        }
        if (isset($this->systemSoftware)) {
            $output['systemSoftware'] = array_map(fn(InstalledSystemSoftware $i): array => $i->toJson(), $this->systemSoftware);
        }
        if (isset($this->updatePolicy)) {
            $output['updatePolicy'] = $this->updatePolicy->value;
        }
        if (isset($this->userInputs)) {
            $output['userInputs'] = array_map(fn(SavedUserInput $i): array => $i->toJson(), $this->userInputs);
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
    }
}

