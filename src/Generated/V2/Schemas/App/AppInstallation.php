<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\App;

use DateTime;
use InvalidArgumentException;
use JsonSchema\Validator;

/**
 * An AppInstallation is a concrete manifestation of an App in a specific
 * AppVersion.
 *
 * DO NOT EDIT; this class was generated by the mittwald/api-client-builder package
 * (https://github.com/mittwald/api-client-php-builder). Please make any changes
 * there.
 *
 * @generated
 * @see https://github.com/mittwald/api-client-php-builder
 */
class AppInstallation
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'description' => 'An AppInstallation is a concrete manifestation of an App in a specific AppVersion.',
        'properties' => [
            'appId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'appVersion' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.app.VersionStatus',
            ],
            'createdAt' => [
                'example' => '2024-09-20T22:57:32.000Z',
                'format' => 'date-time',
                'type' => 'string',
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
            'shortId' => [
                'example' => 'a-XXXXXX',
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
            'shortId',
            'appVersion',
            'description',
            'installationPath',
            'disabled',
            'createdAt',
        ],
        'type' => 'object',
    ];

    private string $appId;

    private VersionStatus $appVersion;

    private DateTime $createdAt;

    private ?string $customDocumentRoot = null;

    private string $description;

    private bool $disabled = false;

    private string $id;

    private string $installationPath;

    /**
     * @var LinkedDatabase[]|null
     */
    private ?array $linkedDatabases = null;

    /**
     * @var string[]|null
     */
    private ?array $processes = null;

    private ?string $projectId = null;

    private ?string $screenshotId = null;

    private ?string $screenshotRef = null;

    private string $shortId;

    /**
     * @var InstalledSystemSoftware[]|null
     */
    private ?array $systemSoftware = null;

    private ?AppUpdatePolicy $updatePolicy = null;

    /**
     * @var SavedUserInput[]|null
     */
    private ?array $userInputs = null;

    public function __construct(string $appId, VersionStatus $appVersion, DateTime $createdAt, string $description, string $id, string $installationPath, string $shortId)
    {
        $this->appId = $appId;
        $this->appVersion = $appVersion;
        $this->createdAt = $createdAt;
        $this->description = $description;
        $this->id = $id;
        $this->installationPath = $installationPath;
        $this->shortId = $shortId;
    }

    public function getAppId(): string
    {
        return $this->appId;
    }

    public function getAppVersion(): VersionStatus
    {
        return $this->appVersion;
    }

    public function getCreatedAt(): DateTime
    {
        return $this->createdAt;
    }

    public function getCustomDocumentRoot(): ?string
    {
        return $this->customDocumentRoot ?? null;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getDisabled(): bool
    {
        return $this->disabled;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getInstallationPath(): string
    {
        return $this->installationPath;
    }

    /**
     * @return LinkedDatabase[]|null
     */
    public function getLinkedDatabases(): ?array
    {
        return $this->linkedDatabases ?? null;
    }

    /**
     * @return string[]|null
     */
    public function getProcesses(): ?array
    {
        return $this->processes ?? null;
    }

    public function getProjectId(): ?string
    {
        return $this->projectId ?? null;
    }

    public function getScreenshotId(): ?string
    {
        return $this->screenshotId ?? null;
    }

    public function getScreenshotRef(): ?string
    {
        return $this->screenshotRef ?? null;
    }

    public function getShortId(): string
    {
        return $this->shortId;
    }

    /**
     * @return InstalledSystemSoftware[]|null
     */
    public function getSystemSoftware(): ?array
    {
        return $this->systemSoftware ?? null;
    }

    public function getUpdatePolicy(): ?AppUpdatePolicy
    {
        return $this->updatePolicy ?? null;
    }

    /**
     * @return SavedUserInput[]|null
     */
    public function getUserInputs(): ?array
    {
        return $this->userInputs ?? null;
    }

    public function withAppId(string $appId): self
    {
        $validator = new Validator();
        $validator->validate($appId, static::$schema['properties']['appId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->appId = $appId;

        return $clone;
    }

    public function withAppVersion(VersionStatus $appVersion): self
    {
        $clone = clone $this;
        $clone->appVersion = $appVersion;

        return $clone;
    }

    public function withCreatedAt(DateTime $createdAt): self
    {
        $clone = clone $this;
        $clone->createdAt = $createdAt;

        return $clone;
    }

    public function withCustomDocumentRoot(string $customDocumentRoot): self
    {
        $validator = new Validator();
        $validator->validate($customDocumentRoot, static::$schema['properties']['customDocumentRoot']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->customDocumentRoot = $customDocumentRoot;

        return $clone;
    }

    public function withoutCustomDocumentRoot(): self
    {
        $clone = clone $this;
        unset($clone->customDocumentRoot);

        return $clone;
    }

    public function withDescription(string $description): self
    {
        $validator = new Validator();
        $validator->validate($description, static::$schema['properties']['description']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->description = $description;

        return $clone;
    }

    public function withDisabled(bool $disabled): self
    {
        $validator = new Validator();
        $validator->validate($disabled, static::$schema['properties']['disabled']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->disabled = $disabled;

        return $clone;
    }

    public function withId(string $id): self
    {
        $validator = new Validator();
        $validator->validate($id, static::$schema['properties']['id']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->id = $id;

        return $clone;
    }

    public function withInstallationPath(string $installationPath): self
    {
        $validator = new Validator();
        $validator->validate($installationPath, static::$schema['properties']['installationPath']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->installationPath = $installationPath;

        return $clone;
    }

    /**
     * @param LinkedDatabase[] $linkedDatabases
     */
    public function withLinkedDatabases(array $linkedDatabases): self
    {
        $clone = clone $this;
        $clone->linkedDatabases = $linkedDatabases;

        return $clone;
    }

    public function withoutLinkedDatabases(): self
    {
        $clone = clone $this;
        unset($clone->linkedDatabases);

        return $clone;
    }

    /**
     * @param string[] $processes
     */
    public function withProcesses(array $processes): self
    {
        $validator = new Validator();
        $validator->validate($processes, static::$schema['properties']['processes']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->processes = $processes;

        return $clone;
    }

    public function withoutProcesses(): self
    {
        $clone = clone $this;
        unset($clone->processes);

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

    public function withoutProjectId(): self
    {
        $clone = clone $this;
        unset($clone->projectId);

        return $clone;
    }

    public function withScreenshotId(string $screenshotId): self
    {
        $validator = new Validator();
        $validator->validate($screenshotId, static::$schema['properties']['screenshotId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->screenshotId = $screenshotId;

        return $clone;
    }

    public function withoutScreenshotId(): self
    {
        $clone = clone $this;
        unset($clone->screenshotId);

        return $clone;
    }

    public function withScreenshotRef(string $screenshotRef): self
    {
        $validator = new Validator();
        $validator->validate($screenshotRef, static::$schema['properties']['screenshotRef']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->screenshotRef = $screenshotRef;

        return $clone;
    }

    public function withoutScreenshotRef(): self
    {
        $clone = clone $this;
        unset($clone->screenshotRef);

        return $clone;
    }

    public function withShortId(string $shortId): self
    {
        $validator = new Validator();
        $validator->validate($shortId, static::$schema['properties']['shortId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->shortId = $shortId;

        return $clone;
    }

    /**
     * @param InstalledSystemSoftware[] $systemSoftware
     */
    public function withSystemSoftware(array $systemSoftware): self
    {
        $clone = clone $this;
        $clone->systemSoftware = $systemSoftware;

        return $clone;
    }

    public function withoutSystemSoftware(): self
    {
        $clone = clone $this;
        unset($clone->systemSoftware);

        return $clone;
    }

    public function withUpdatePolicy(AppUpdatePolicy $updatePolicy): self
    {
        $clone = clone $this;
        $clone->updatePolicy = $updatePolicy;

        return $clone;
    }

    public function withoutUpdatePolicy(): self
    {
        $clone = clone $this;
        unset($clone->updatePolicy);

        return $clone;
    }

    /**
     * @param SavedUserInput[] $userInputs
     */
    public function withUserInputs(array $userInputs): self
    {
        $clone = clone $this;
        $clone->userInputs = $userInputs;

        return $clone;
    }

    public function withoutUserInputs(): self
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
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): AppInstallation
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $appId = $input->{'appId'};
        $appVersion = VersionStatus::buildFromInput($input->{'appVersion'}, validate: $validate);
        $createdAt = new DateTime($input->{'createdAt'});
        $customDocumentRoot = null;
        if (isset($input->{'customDocumentRoot'})) {
            $customDocumentRoot = $input->{'customDocumentRoot'};
        }
        $description = $input->{'description'};
        $disabled = false;
        if (isset($input->{'disabled'})) {
            $disabled = (bool)($input->{'disabled'});
        }
        $id = $input->{'id'};
        $installationPath = $input->{'installationPath'};
        $linkedDatabases = null;
        if (isset($input->{'linkedDatabases'})) {
            $linkedDatabases = array_map(fn (array|object $i): LinkedDatabase => LinkedDatabase::buildFromInput($i, validate: $validate), $input->{'linkedDatabases'});
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
        $shortId = $input->{'shortId'};
        $systemSoftware = null;
        if (isset($input->{'systemSoftware'})) {
            $systemSoftware = array_map(fn (array|object $i): InstalledSystemSoftware => InstalledSystemSoftware::buildFromInput($i, validate: $validate), $input->{'systemSoftware'});
        }
        $updatePolicy = null;
        if (isset($input->{'updatePolicy'})) {
            $updatePolicy = AppUpdatePolicy::from($input->{'updatePolicy'});
        }
        $userInputs = null;
        if (isset($input->{'userInputs'})) {
            $userInputs = array_map(fn (array|object $i): SavedUserInput => SavedUserInput::buildFromInput($i, validate: $validate), $input->{'userInputs'});
        }

        $obj = new self($appId, $appVersion, $createdAt, $description, $id, $installationPath, $shortId);
        $obj->customDocumentRoot = $customDocumentRoot;
        $obj->disabled = $disabled;
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
    public function toJson(): array
    {
        $output = [];
        $output['appId'] = $this->appId;
        $output['appVersion'] = $this->appVersion->toJson();
        $output['createdAt'] = ($this->createdAt)->format(DateTime::ATOM);
        if (isset($this->customDocumentRoot)) {
            $output['customDocumentRoot'] = $this->customDocumentRoot;
        }
        $output['description'] = $this->description;
        $output['disabled'] = $this->disabled;
        $output['id'] = $this->id;
        $output['installationPath'] = $this->installationPath;
        if (isset($this->linkedDatabases)) {
            $output['linkedDatabases'] = array_map(fn (LinkedDatabase $i): array => $i->toJson(), $this->linkedDatabases);
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
        $output['shortId'] = $this->shortId;
        if (isset($this->systemSoftware)) {
            $output['systemSoftware'] = array_map(fn (InstalledSystemSoftware $i): array => $i->toJson(), $this->systemSoftware);
        }
        if (isset($this->updatePolicy)) {
            $output['updatePolicy'] = $this->updatePolicy->value;
        }
        if (isset($this->userInputs)) {
            $output['userInputs'] = array_map(fn (SavedUserInput $i): array => $i->toJson(), $this->userInputs);
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
        $validator = new \Mittwald\ApiClient\Validator\Validator();
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
        $this->createdAt = clone $this->createdAt;
    }
}
