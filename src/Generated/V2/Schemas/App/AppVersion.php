<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\App;

use InvalidArgumentException;
use JsonSchema\Validator;

/**
 * An AppVersion is an officially supported version of an App, containing the
 * necessary and recommended configuration und dependencies.
 *
 * DO NOT EDIT; this class was generated by the mittwald/api-client-builder package
 * (https://github.com/mittwald/api-client-php-builder). Please make any changes
 * there.
 *
 * @generated
 * @see https://github.com/mittwald/api-client-php-builder
 */
class AppVersion
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'description' => 'An AppVersion is an officially supported version of an App, containing the necessary and recommended configuration und dependencies.',
        'properties' => [
            'appId' => [
                'type' => 'string',
            ],
            'breakingNote' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.app.BreakingNote',
            ],
            'databases' => [
                'items' => [
                    '$ref' => '#/components/schemas/de.mittwald.v1.app.DatabaseDependency',
                ],
                'type' => 'array',
            ],
            'docRoot' => [
                'type' => 'string',
            ],
            'docRootUserEditable' => [
                'type' => 'boolean',
            ],
            'externalVersion' => [
                'type' => 'string',
            ],
            'id' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'internalVersion' => [
                'type' => 'string',
            ],
            'recommended' => [
                'type' => 'boolean',
            ],
            'requestHandler' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.app.RequestHandlerRequirement',
            ],
            'systemSoftwareDependencies' => [
                'items' => [
                    '$ref' => '#/components/schemas/de.mittwald.v1.app.SystemSoftwareDependency',
                ],
                'type' => 'array',
                'uniqueItems' => true,
            ],
            'userInputs' => [
                'items' => [
                    '$ref' => '#/components/schemas/de.mittwald.v1.app.UserInput',
                ],
                'type' => 'array',
                'uniqueItems' => true,
            ],
        ],
        'required' => [
            'id',
            'externalVersion',
            'internalVersion',
            'docRoot',
            'docRootUserEditable',
            'appId',
        ],
        'type' => 'object',
    ];

    private string $appId;

    private ?BreakingNote $breakingNote = null;

    /**
     * @var DatabaseDependency[]|null
     */
    private ?array $databases = null;

    private string $docRoot;

    private bool $docRootUserEditable;

    private string $externalVersion;

    private string $id;

    private string $internalVersion;

    private ?bool $recommended = null;

    private ?RequestHandlerRequirement $requestHandler = null;

    /**
     * @var SystemSoftwareDependency[]|null
     */
    private ?array $systemSoftwareDependencies = null;

    /**
     * @var UserInput[]|null
     */
    private ?array $userInputs = null;

    public function __construct(string $appId, string $docRoot, bool $docRootUserEditable, string $externalVersion, string $id, string $internalVersion)
    {
        $this->appId = $appId;
        $this->docRoot = $docRoot;
        $this->docRootUserEditable = $docRootUserEditable;
        $this->externalVersion = $externalVersion;
        $this->id = $id;
        $this->internalVersion = $internalVersion;
    }

    public function getAppId(): string
    {
        return $this->appId;
    }

    public function getBreakingNote(): ?BreakingNote
    {
        return $this->breakingNote ?? null;
    }

    /**
     * @return DatabaseDependency[]|null
     */
    public function getDatabases(): ?array
    {
        return $this->databases ?? null;
    }

    public function getDocRoot(): string
    {
        return $this->docRoot;
    }

    public function getDocRootUserEditable(): bool
    {
        return $this->docRootUserEditable;
    }

    public function getExternalVersion(): string
    {
        return $this->externalVersion;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getInternalVersion(): string
    {
        return $this->internalVersion;
    }

    public function getRecommended(): ?bool
    {
        return $this->recommended ?? null;
    }

    /**
     * @return
     * RequestHandlerRequirement|null
     */
    public function getRequestHandler(): ?RequestHandlerRequirement
    {
        return $this->requestHandler ?? null;
    }

    /**
     * @return
     * SystemSoftwareDependency[]|null
     */
    public function getSystemSoftwareDependencies(): ?array
    {
        return $this->systemSoftwareDependencies ?? null;
    }

    /**
     * @return UserInput[]|null
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

    public function withBreakingNote(BreakingNote $breakingNote): self
    {
        $clone = clone $this;
        $clone->breakingNote = $breakingNote;

        return $clone;
    }

    public function withoutBreakingNote(): self
    {
        $clone = clone $this;
        unset($clone->breakingNote);

        return $clone;
    }

    /**
     * @param DatabaseDependency[] $databases
     */
    public function withDatabases(array $databases): self
    {
        $clone = clone $this;
        $clone->databases = $databases;

        return $clone;
    }

    public function withoutDatabases(): self
    {
        $clone = clone $this;
        unset($clone->databases);

        return $clone;
    }

    public function withDocRoot(string $docRoot): self
    {
        $validator = new Validator();
        $validator->validate($docRoot, static::$schema['properties']['docRoot']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->docRoot = $docRoot;

        return $clone;
    }

    public function withDocRootUserEditable(bool $docRootUserEditable): self
    {
        $validator = new Validator();
        $validator->validate($docRootUserEditable, static::$schema['properties']['docRootUserEditable']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->docRootUserEditable = $docRootUserEditable;

        return $clone;
    }

    public function withExternalVersion(string $externalVersion): self
    {
        $validator = new Validator();
        $validator->validate($externalVersion, static::$schema['properties']['externalVersion']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->externalVersion = $externalVersion;

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

    public function withInternalVersion(string $internalVersion): self
    {
        $validator = new Validator();
        $validator->validate($internalVersion, static::$schema['properties']['internalVersion']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->internalVersion = $internalVersion;

        return $clone;
    }

    public function withRecommended(bool $recommended): self
    {
        $validator = new Validator();
        $validator->validate($recommended, static::$schema['properties']['recommended']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->recommended = $recommended;

        return $clone;
    }

    public function withoutRecommended(): self
    {
        $clone = clone $this;
        unset($clone->recommended);

        return $clone;
    }

    public function withRequestHandler(RequestHandlerRequirement $requestHandler): self
    {
        $clone = clone $this;
        $clone->requestHandler = $requestHandler;

        return $clone;
    }

    public function withoutRequestHandler(): self
    {
        $clone = clone $this;
        unset($clone->requestHandler);

        return $clone;
    }

    /**
     * @param SystemSoftwareDependency[] $systemSoftwareDependencies
     */
    public function withSystemSoftwareDependencies(array $systemSoftwareDependencies): self
    {
        $clone = clone $this;
        $clone->systemSoftwareDependencies = $systemSoftwareDependencies;

        return $clone;
    }

    public function withoutSystemSoftwareDependencies(): self
    {
        $clone = clone $this;
        unset($clone->systemSoftwareDependencies);

        return $clone;
    }

    /**
     * @param UserInput[] $userInputs
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
     * @return AppVersion Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): AppVersion
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $appId = $input->{'appId'};
        $breakingNote = null;
        if (isset($input->{'breakingNote'})) {
            $breakingNote = BreakingNote::buildFromInput($input->{'breakingNote'}, validate: $validate);
        }
        $databases = null;
        if (isset($input->{'databases'})) {
            $databases = array_map(fn (array|object $i): DatabaseDependency => DatabaseDependency::buildFromInput($i, validate: $validate), $input->{'databases'});
        }
        $docRoot = $input->{'docRoot'};
        $docRootUserEditable = (bool)($input->{'docRootUserEditable'});
        $externalVersion = $input->{'externalVersion'};
        $id = $input->{'id'};
        $internalVersion = $input->{'internalVersion'};
        $recommended = null;
        if (isset($input->{'recommended'})) {
            $recommended = (bool)($input->{'recommended'});
        }
        $requestHandler = null;
        if (isset($input->{'requestHandler'})) {
            $requestHandler = RequestHandlerRequirement::buildFromInput($input->{'requestHandler'}, validate: $validate);
        }
        $systemSoftwareDependencies = null;
        if (isset($input->{'systemSoftwareDependencies'})) {
            $systemSoftwareDependencies = array_map(fn (array|object $i): SystemSoftwareDependency => SystemSoftwareDependency::buildFromInput($i, validate: $validate), $input->{'systemSoftwareDependencies'});
        }
        $userInputs = null;
        if (isset($input->{'userInputs'})) {
            $userInputs = array_map(fn (array|object $i): UserInput => UserInput::buildFromInput($i, validate: $validate), $input->{'userInputs'});
        }

        $obj = new self($appId, $docRoot, $docRootUserEditable, $externalVersion, $id, $internalVersion);
        $obj->breakingNote = $breakingNote;
        $obj->databases = $databases;
        $obj->recommended = $recommended;
        $obj->requestHandler = $requestHandler;
        $obj->systemSoftwareDependencies = $systemSoftwareDependencies;
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
        if (isset($this->breakingNote)) {
            $output['breakingNote'] = $this->breakingNote->toJson();
        }
        if (isset($this->databases)) {
            $output['databases'] = array_map(fn (DatabaseDependency $i): array => $i->toJson(), $this->databases);
        }
        $output['docRoot'] = $this->docRoot;
        $output['docRootUserEditable'] = $this->docRootUserEditable;
        $output['externalVersion'] = $this->externalVersion;
        $output['id'] = $this->id;
        $output['internalVersion'] = $this->internalVersion;
        if (isset($this->recommended)) {
            $output['recommended'] = $this->recommended;
        }
        if (isset($this->requestHandler)) {
            $output['requestHandler'] = $this->requestHandler->toJson();
        }
        if (isset($this->systemSoftwareDependencies)) {
            $output['systemSoftwareDependencies'] = array_map(fn (SystemSoftwareDependency $i): array => $i->toJson(), $this->systemSoftwareDependencies);
        }
        if (isset($this->userInputs)) {
            $output['userInputs'] = array_map(fn (UserInput $i): array => $i->toJson(), $this->userInputs);
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
    }
}
