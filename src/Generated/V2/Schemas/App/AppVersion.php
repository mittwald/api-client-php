<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\App;

use InvalidArgumentException;
use JsonSchema\Validator;

class AppVersion
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'description' => 'An `AppVersion` is an officially supported version of an `App`, containing the necessary and recommended configuration und dependencies',
        'properties' => [
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
        ],
        'type' => 'object',
    ];

    /**
     * @var BreakingNote|null
     */
    private ?BreakingNote $breakingNote = null;

    /**
     * @var DatabaseDependency[]|null
     */
    private ?array $databases = null;

    /**
     * @var string
     */
    private string $docRoot;

    /**
     * @var bool
     */
    private bool $docRootUserEditable;

    /**
     * @var string
     */
    private string $externalVersion;

    /**
     * @var string
     */
    private string $id;

    /**
     * @var string
     */
    private string $internalVersion;

    /**
     * @var bool|null
     */
    private ?bool $recommended = null;

    /**
     * @var RequestHandlerRequirement|null
     */
    private ?RequestHandlerRequirement $requestHandler = null;

    /**
     * @var SystemSoftwareDependency[]|null
     */
    private ?array $systemSoftwareDependencies = null;

    /**
     * @var UserInput[]|null
     */
    private ?array $userInputs = null;

    /**
     * @param string $docRoot
     * @param bool $docRootUserEditable
     * @param string $externalVersion
     * @param string $id
     * @param string $internalVersion
     */
    public function __construct(string $docRoot, bool $docRootUserEditable, string $externalVersion, string $id, string $internalVersion)
    {
        $this->docRoot = $docRoot;
        $this->docRootUserEditable = $docRootUserEditable;
        $this->externalVersion = $externalVersion;
        $this->id = $id;
        $this->internalVersion = $internalVersion;
    }

    /**
     * @return BreakingNote|null
     */
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

    /**
     * @return string
     */
    public function getDocRoot(): string
    {
        return $this->docRoot;
    }

    /**
     * @return bool
     */
    public function getDocRootUserEditable(): bool
    {
        return $this->docRootUserEditable;
    }

    /**
     * @return string
     */
    public function getExternalVersion(): string
    {
        return $this->externalVersion;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getInternalVersion(): string
    {
        return $this->internalVersion;
    }

    /**
     * @return bool|null
     */
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

    /**
     * @param BreakingNote $breakingNote
     * @return self
     */
    public function withBreakingNote(BreakingNote $breakingNote): self
    {
        $clone = clone $this;
        $clone->breakingNote = $breakingNote;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutBreakingNote(): self
    {
        $clone = clone $this;
        unset($clone->breakingNote);

        return $clone;
    }

    /**
     * @param DatabaseDependency[] $databases
     * @return self
     */
    public function withDatabases(array $databases): self
    {
        $clone = clone $this;
        $clone->databases = $databases;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutDatabases(): self
    {
        $clone = clone $this;
        unset($clone->databases);

        return $clone;
    }

    /**
     * @param string $docRoot
     * @return self
     */
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

    /**
     * @param bool $docRootUserEditable
     * @return self
     */
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

    /**
     * @param string $externalVersion
     * @return self
     */
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

    /**
     * @param string $id
     * @return self
     */
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

    /**
     * @param string $internalVersion
     * @return self
     */
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

    /**
     * @param bool $recommended
     * @return self
     */
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

    /**
     * @return self
     */
    public function withoutRecommended(): self
    {
        $clone = clone $this;
        unset($clone->recommended);

        return $clone;
    }

    /**
     * @param RequestHandlerRequirement $requestHandler
     * @return self
     */
    public function withRequestHandler(RequestHandlerRequirement $requestHandler): self
    {
        $clone = clone $this;
        $clone->requestHandler = $requestHandler;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutRequestHandler(): self
    {
        $clone = clone $this;
        unset($clone->requestHandler);

        return $clone;
    }

    /**
     * @param SystemSoftwareDependency[] $systemSoftwareDependencies
     * @return self
     */
    public function withSystemSoftwareDependencies(array $systemSoftwareDependencies): self
    {
        $clone = clone $this;
        $clone->systemSoftwareDependencies = $systemSoftwareDependencies;

        return $clone;
    }

    /**
     * @return self
     */
    public function withoutSystemSoftwareDependencies(): self
    {
        $clone = clone $this;
        unset($clone->systemSoftwareDependencies);

        return $clone;
    }

    /**
     * @param UserInput[] $userInputs
     * @return self
     */
    public function withUserInputs(array $userInputs): self
    {
        $clone = clone $this;
        $clone->userInputs = $userInputs;

        return $clone;
    }

    /**
     * @return self
     */
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

        $breakingNote = null;
        if (isset($input->{'breakingNote'})) {
            $breakingNote = BreakingNote::buildFromInput($input->{'breakingNote'}, validate: $validate);
        }
        $databases = null;
        if (isset($input->{'databases'})) {
            $databases = array_map(fn (array $i): DatabaseDependency => DatabaseDependency::buildFromInput($i, validate: $validate), $input->{'databases'});
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
            $systemSoftwareDependencies = array_map(fn (array $i): SystemSoftwareDependency => SystemSoftwareDependency::buildFromInput($i, validate: $validate), $input->{'systemSoftwareDependencies'});
        }
        $userInputs = null;
        if (isset($input->{'userInputs'})) {
            $userInputs = array_map(fn (array $i): UserInput => UserInput::buildFromInput($i, validate: $validate), $input->{'userInputs'});
        }

        $obj = new self($docRoot, $docRootUserEditable, $externalVersion, $id, $internalVersion);
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
