<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Relocation\CreateRelocation;

use InvalidArgumentException;
use JsonSchema\Validator;

class CreateRelocationRequestBodyTarget
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'organisation' => [
                'description' => 'Your customer or organisation number',
                'minLength' => 1,
                'type' => 'string',
            ],
            'product' => [
                'description' => 'Help our customer service finding your target account',
                'oneOf' => [
                    [
                        'minLength' => 1,
                        'type' => 'string',
                    ],
                    [
                        'enum' => [
                            'spaceServer',
                            'proSpace',
                            'agencyServer',
                            'cmsHosting',
                            'shopHosting',
                        ],
                        'type' => 'string',
                    ],
                ],
                'type' => 'string',
            ],
            'projectName' => [
                'description' => 'In which p-account or short project id your project should be moved.',
                'minLength' => 1,
                'type' => 'string',
            ],
            'system' => [
                'description' => 'Which mittwald system does the targetProject use?',
                'enum' => [
                    'kc',
                    'mstudio',
                ],
                'type' => 'string',
            ],
        ],
        'required' => [
            'organisation',
            'projectName',
            'system',
            'product',
        ],
        'type' => 'object',
    ];

    /**
     * Your customer or organisation number
     *
     * @var string
     */
    private string $organisation;

    /**
     * Help our customer service finding your target account
     *
     * @var string|CreateRelocationRequestBodyTargetProductAlternative2
     */
    private string|CreateRelocationRequestBodyTargetProductAlternative2 $product;

    /**
     * In which p-account or short project id your project should be moved.
     *
     * @var string
     */
    private string $projectName;

    /**
     * Which mittwald system does the targetProject use?
     *
     * @var CreateRelocationRequestBodyTargetSystem
     */
    private CreateRelocationRequestBodyTargetSystem $system;

    /**
     * @param string $organisation
     * @param string|CreateRelocationRequestBodyTargetProductAlternative2 $product
     * @param string $projectName
     * @param CreateRelocationRequestBodyTargetSystem $system
     */
    public function __construct(string $organisation, CreateRelocationRequestBodyTargetProductAlternative2|string $product, string $projectName, CreateRelocationRequestBodyTargetSystem $system)
    {
        $this->organisation = $organisation;
        $this->product = $product;
        $this->projectName = $projectName;
        $this->system = $system;
    }

    /**
     * @return string
     */
    public function getOrganisation(): string
    {
        return $this->organisation;
    }

    /**
     * @return string|CreateRelocationRequestBodyTargetProductAlternative2
     */
    public function getProduct(): CreateRelocationRequestBodyTargetProductAlternative2|string
    {
        return $this->product;
    }

    /**
     * @return string
     */
    public function getProjectName(): string
    {
        return $this->projectName;
    }

    /**
     * @return CreateRelocationRequestBodyTargetSystem
     */
    public function getSystem(): CreateRelocationRequestBodyTargetSystem
    {
        return $this->system;
    }

    /**
     * @param string $organisation
     * @return self
     */
    public function withOrganisation(string $organisation): self
    {
        $validator = new Validator();
        $validator->validate($organisation, static::$schema['properties']['organisation']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->organisation = $organisation;

        return $clone;
    }

    /**
     * @param string|CreateRelocationRequestBodyTargetProductAlternative2 $product
     * @return self
     */
    public function withProduct(CreateRelocationRequestBodyTargetProductAlternative2|string $product): self
    {
        $clone = clone $this;
        $clone->product = $product;

        return $clone;
    }

    /**
     * @param string $projectName
     * @return self
     */
    public function withProjectName(string $projectName): self
    {
        $validator = new Validator();
        $validator->validate($projectName, static::$schema['properties']['projectName']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->projectName = $projectName;

        return $clone;
    }

    /**
     * @param CreateRelocationRequestBodyTargetSystem $system
     * @return self
     */
    public function withSystem(CreateRelocationRequestBodyTargetSystem $system): self
    {
        $clone = clone $this;
        $clone->system = $system;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return CreateRelocationRequestBodyTarget Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): CreateRelocationRequestBodyTarget
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $organisation = $input->{'organisation'};
        $product = match (true) {
            is_string($input->{'product'}) => $input->{'product'},
            CreateRelocationRequestBodyTargetProductAlternative2::tryFrom($input->{'product'}) !== null => CreateRelocationRequestBodyTargetProductAlternative2::from($input->{'product'}),
        };
        $projectName = $input->{'projectName'};
        $system = CreateRelocationRequestBodyTargetSystem::from($input->{'system'});

        $obj = new self($organisation, $product, $projectName, $system);

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
        $output['organisation'] = $this->organisation;
        $output['product'] = match (true) {
            is_string($this->product) => $this->product,
            $this->product instanceof CreateRelocationRequestBodyTargetProductAlternative2 => ($this->product)->value,
        };
        $output['projectName'] = $this->projectName;
        $output['system'] = ($this->system)->value;

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
        $this->product = match (true) {
            is_string($this->product), $this->product instanceof CreateRelocationRequestBodyTargetProductAlternative2 => $this->product,
        };
    }
}
