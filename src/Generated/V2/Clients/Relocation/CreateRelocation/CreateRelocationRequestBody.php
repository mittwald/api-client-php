<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Relocation\CreateRelocation;

use InvalidArgumentException;
use JsonSchema\Validator;
use Mittwald\ApiClient\Generated\V2\Schemas\Directus\Domain;

class CreateRelocationRequestBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'additionalServices' => [
                'properties' => [
                    'dataCompare' => [
                        'enum' => [
                            'default',
                            'additionalCompare',
                        ],
                        'type' => 'string',
                    ],
                ],
                'required' => [
                    'dataCompare',
                ],
                'type' => 'object',
            ],
            'allDomains' => [
                'description' => 'Should all project releated domains should be transferred to mittwald?',
                'type' => 'boolean',
            ],
            'allowPasswordChange' => [
                'description' => 'Has to be true. Do you accept that our mittwald team can change and get password from your current provider?',
                'type' => 'boolean',
            ],
            'articleType' => [
                'description' => 'Type of the article you want to relocate.',
                'enum' => [
                    'cms-hosting',
                    'cms-hosting-express',
                    'onlineshop',
                    'onlineshop-express',
                ],
                'type' => 'string',
            ],
            'contact' => [
                'properties' => [
                    'email' => [
                        'format' => 'email',
                        'minLength' => 1,
                        'type' => 'string',
                    ],
                    'firstName' => [
                        'minLength' => 1,
                        'type' => 'string',
                    ],
                    'lastName' => [
                        'minLength' => 1,
                        'type' => 'string',
                    ],
                    'phoneNumber' => [
                        'pattern' => '|^\\+([0-9]{2,3}|1)-[0-9]{2,5}-[0-9]+$',
                        'type' => 'string',
                    ],
                ],
                'required' => [
                    'firstName',
                    'lastName',
                    'email',
                ],
                'type' => 'object',
            ],
            'domains' => [
                'description' => 'List of domains which should be transferred (when allDomains is not checked).',
                'items' => [
                    '$ref' => '#/components/schemas/de.mittwald.v1.directus.Domain',
                ],
                'type' => 'array',
            ],
            'notes' => [
                'description' => 'Anything our customer service needs to know for the relocation process.',
                'type' => 'string',
            ],
            'prices' => [
                'properties' => [
                    'positions' => [
                        'items' => [
                            'properties' => [
                                'name' => [
                                    'minLength' => 1,
                                    'type' => 'string',
                                ],
                                'price' => [
                                    'minimum' => 0,
                                    'type' => 'number',
                                ],
                            ],
                            'required' => [
                                'name',
                                'price',
                            ],
                            'type' => 'object',
                        ],
                        'type' => 'array',
                    ],
                    'total' => [
                        'minimum' => 0,
                        'type' => 'number',
                    ],
                ],
                'required' => [
                    'positions',
                    'total',
                ],
                'type' => 'object',
            ],
            'provider' => [
                'properties' => [
                    'loginUrl' => [
                        'description' => 'Url to the control panel of the provider',
                        'minLength' => 1,
                        'type' => 'string',
                    ],
                    'name' => [
                        'description' => 'Name of your provider',
                        'oneOf' => [
                            [
                                'minLength' => 1,
                                'type' => 'string',
                            ],
                            [
                                'enum' => [
                                    '1und1',
                                    'strato',
                                ],
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'password' => [
                        'minLength' => 1,
                        'type' => 'string',
                    ],
                    'sourceAccount' => [
                        'description' => 'Which account of your provider should be moved?',
                        'minLength' => 1,
                        'type' => 'string',
                    ],
                    'userName' => [
                        'description' => 'Login name to your provider',
                        'minLength' => 1,
                        'type' => 'string',
                    ],
                ],
                'required' => [
                    'name',
                    'loginUrl',
                    'userName',
                    'password',
                    'sourceAccount',
                ],
                'type' => 'object',
            ],
            'target' => [
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
                                    'Space-Server',
                                    'proSpace',
                                    'Agentur-Server',
                                    'CMS-Hosting',
                                    'Shop-Hosting',
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
            ],
            'userId' => [
                'oneOf' => [
                    [
                        'format' => 'uuid',
                        'minLength' => 1,
                        'type' => 'string',
                    ],
                    [
                        'maxLength' => 0,
                        'type' => 'string',
                    ],
                ],
            ],
        ],
        'required' => [
            'articleType',
            'additionalServices',
            'prices',
            'provider',
            'contact',
            'target',
            'allowPasswordChange',
        ],
        'type' => 'object',
    ];

    private CreateRelocationRequestBodyAdditionalServices $additionalServices;

    /**
     * Should all project releated domains should be transferred to mittwald?
     */
    private ?bool $allDomains = null;

    /**
     * Has to be true. Do you accept that our mittwald team can change and get password from your current provider?
     */
    private bool $allowPasswordChange;

    /**
     * Type of the article you want to relocate.
     */
    private CreateRelocationRequestBodyArticleType $articleType;

    private CreateRelocationRequestBodyContact $contact;

    /**
     * List of domains which should be transferred (when allDomains is not checked).
     *
     * @var Domain[]|null
     */
    private ?array $domains = null;

    /**
     * Anything our customer service needs to know for the relocation process.
     */
    private ?string $notes = null;

    private CreateRelocationRequestBodyPrices $prices;

    private CreateRelocationRequestBodyProvider $provider;

    private CreateRelocationRequestBodyTarget $target;

    private ?string $userId = null;

    public function __construct(CreateRelocationRequestBodyAdditionalServices $additionalServices, bool $allowPasswordChange, CreateRelocationRequestBodyArticleType $articleType, CreateRelocationRequestBodyContact $contact, CreateRelocationRequestBodyPrices $prices, CreateRelocationRequestBodyProvider $provider, CreateRelocationRequestBodyTarget $target)
    {
        $this->additionalServices = $additionalServices;
        $this->allowPasswordChange = $allowPasswordChange;
        $this->articleType = $articleType;
        $this->contact = $contact;
        $this->prices = $prices;
        $this->provider = $provider;
        $this->target = $target;
    }

    public function getAdditionalServices(): CreateRelocationRequestBodyAdditionalServices
    {
        return $this->additionalServices;
    }

    public function getAllDomains(): ?bool
    {
        return $this->allDomains ?? null;
    }

    public function getAllowPasswordChange(): bool
    {
        return $this->allowPasswordChange;
    }

    public function getArticleType(): CreateRelocationRequestBodyArticleType
    {
        return $this->articleType;
    }

    public function getContact(): CreateRelocationRequestBodyContact
    {
        return $this->contact;
    }

    /**
     * @return Domain[]|null
     */
    public function getDomains(): ?array
    {
        return $this->domains ?? null;
    }

    public function getNotes(): ?string
    {
        return $this->notes ?? null;
    }

    public function getPrices(): CreateRelocationRequestBodyPrices
    {
        return $this->prices;
    }

    public function getProvider(): CreateRelocationRequestBodyProvider
    {
        return $this->provider;
    }

    public function getTarget(): CreateRelocationRequestBodyTarget
    {
        return $this->target;
    }

    public function getUserId(): ?string
    {
        return $this->userId ?? null;
    }

    public function withAdditionalServices(CreateRelocationRequestBodyAdditionalServices $additionalServices): self
    {
        $clone = clone $this;
        $clone->additionalServices = $additionalServices;

        return $clone;
    }

    public function withAllDomains(bool $allDomains): self
    {
        $validator = new Validator();
        $validator->validate($allDomains, self::$schema['properties']['allDomains']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->allDomains = $allDomains;

        return $clone;
    }

    public function withoutAllDomains(): self
    {
        $clone = clone $this;
        unset($clone->allDomains);

        return $clone;
    }

    public function withAllowPasswordChange(bool $allowPasswordChange): self
    {
        $validator = new Validator();
        $validator->validate($allowPasswordChange, self::$schema['properties']['allowPasswordChange']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->allowPasswordChange = $allowPasswordChange;

        return $clone;
    }

    public function withArticleType(CreateRelocationRequestBodyArticleType $articleType): self
    {
        $clone = clone $this;
        $clone->articleType = $articleType;

        return $clone;
    }

    public function withContact(CreateRelocationRequestBodyContact $contact): self
    {
        $clone = clone $this;
        $clone->contact = $contact;

        return $clone;
    }

    /**
     * @param Domain[] $domains
     */
    public function withDomains(array $domains): self
    {
        $clone = clone $this;
        $clone->domains = $domains;

        return $clone;
    }

    public function withoutDomains(): self
    {
        $clone = clone $this;
        unset($clone->domains);

        return $clone;
    }

    public function withNotes(string $notes): self
    {
        $validator = new Validator();
        $validator->validate($notes, self::$schema['properties']['notes']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->notes = $notes;

        return $clone;
    }

    public function withoutNotes(): self
    {
        $clone = clone $this;
        unset($clone->notes);

        return $clone;
    }

    public function withPrices(CreateRelocationRequestBodyPrices $prices): self
    {
        $clone = clone $this;
        $clone->prices = $prices;

        return $clone;
    }

    public function withProvider(CreateRelocationRequestBodyProvider $provider): self
    {
        $clone = clone $this;
        $clone->provider = $provider;

        return $clone;
    }

    public function withTarget(CreateRelocationRequestBodyTarget $target): self
    {
        $clone = clone $this;
        $clone->target = $target;

        return $clone;
    }

    public function withUserId(string $userId): self
    {
        $clone = clone $this;
        $clone->userId = $userId;

        return $clone;
    }

    public function withoutUserId(): self
    {
        $clone = clone $this;
        unset($clone->userId);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return CreateRelocationRequestBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): CreateRelocationRequestBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $additionalServices = CreateRelocationRequestBodyAdditionalServices::buildFromInput($input->{'additionalServices'}, validate: $validate);
        $allDomains = null;
        if (isset($input->{'allDomains'})) {
            $allDomains = (bool)($input->{'allDomains'});
        }
        $allowPasswordChange = (bool)($input->{'allowPasswordChange'});
        $articleType = CreateRelocationRequestBodyArticleType::from($input->{'articleType'});
        $contact = CreateRelocationRequestBodyContact::buildFromInput($input->{'contact'}, validate: $validate);
        $domains = null;
        if (isset($input->{'domains'})) {
            $domains = array_map(fn (array|object $i): Domain => Domain::buildFromInput($i, validate: $validate), $input->{'domains'});
        }
        $notes = null;
        if (isset($input->{'notes'})) {
            $notes = $input->{'notes'};
        }
        $prices = CreateRelocationRequestBodyPrices::buildFromInput($input->{'prices'}, validate: $validate);
        $provider = CreateRelocationRequestBodyProvider::buildFromInput($input->{'provider'}, validate: $validate);
        $target = CreateRelocationRequestBodyTarget::buildFromInput($input->{'target'}, validate: $validate);
        $userId = null;
        if (isset($input->{'userId'})) {
            $userId = match (true) {
                is_string($input->{'userId'}) => $input->{'userId'},
                default => throw new InvalidArgumentException("could not build property 'userId' from JSON"),
            };
        }

        $obj = new self($additionalServices, $allowPasswordChange, $articleType, $contact, $prices, $provider, $target);
        $obj->allDomains = $allDomains;
        $obj->domains = $domains;
        $obj->notes = $notes;
        $obj->userId = $userId;
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
        $output['additionalServices'] = ($this->additionalServices)->toJson();
        if (isset($this->allDomains)) {
            $output['allDomains'] = $this->allDomains;
        }
        $output['allowPasswordChange'] = $this->allowPasswordChange;
        $output['articleType'] = ($this->articleType)->value;
        $output['contact'] = ($this->contact)->toJson();
        if (isset($this->domains)) {
            $output['domains'] = array_map(fn (Domain $i): array => $i->toJson(), $this->domains);
        }
        if (isset($this->notes)) {
            $output['notes'] = $this->notes;
        }
        $output['prices'] = ($this->prices)->toJson();
        $output['provider'] = ($this->provider)->toJson();
        $output['target'] = ($this->target)->toJson();
        if (isset($this->userId)) {
            $output['userId'] = match (true) {
                is_string($this->userId) => $this->userId,
            };
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
        $this->additionalServices = clone $this->additionalServices;
        $this->contact = clone $this->contact;
        $this->prices = clone $this->prices;
        $this->provider = clone $this->provider;
        $this->target = clone $this->target;
        if (isset($this->userId)) {
            $this->userId = match (true) {
                is_string($this->userId) => $this->userId,
            };
        }
    }
}
