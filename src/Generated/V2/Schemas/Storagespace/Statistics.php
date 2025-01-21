<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Storagespace;

use InvalidArgumentException;
use JsonSchema\Validator;

/**
 * Auto-generated class for de.mittwald.v1.storagespace.Statistics.
 *
 * DO NOT EDIT; this class was generated by the mittwald/api-client-builder package
 * (https://github.com/mittwald/api-client-php-builder). Please make any changes
 * there.
 *
 * @generated
 * @see https://github.com/mittwald/api-client-php-builder
 */
class Statistics
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'childStatistics' => [
                'items' => [
                    '$ref' => '#/components/schemas/de.mittwald.v1.storagespace.Statistics',
                ],
                'type' => 'array',
                'uniqueItems' => true,
            ],
            'description' => [
                'example' => 'My First Project',
                'type' => 'string',
            ],
            'id' => [
                'example' => '169cea81-2c11-46a4-8f0b-5b0b47caeb78',
                'type' => 'string',
            ],
            'kind' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.storagespace.StatisticsKind',
            ],
            'meta' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.storagespace.StatisticsMeta',
            ],
            'name' => [
                'example' => 'p-zkl8tr',
                'type' => 'string',
            ],
            'notificationThresholdInBytes' => [
                'example' => 10000,
                'type' => 'integer',
            ],
            'statisticCategories' => [
                'items' => [
                    '$ref' => '#/components/schemas/de.mittwald.v1.storagespace.StatisticsCategory',
                ],
                'type' => 'array',
                'uniqueItems' => true,
            ],
        ],
        'required' => [
            'id',
            'kind',
            'name',
            'meta',
        ],
        'type' => 'object',
    ];

    /**
     * @var Statistics[]|null
     */
    private ?array $childStatistics = null;

    private ?string $description = null;

    private string $id;

    private StatisticsKind $kind;

    private StatisticsMeta $meta;

    private string $name;

    private ?int $notificationThresholdInBytes = null;

    /**
     * @var StatisticsCategory[]|null
     */
    private ?array $statisticCategories = null;

    public function __construct(string $id, StatisticsKind $kind, StatisticsMeta $meta, string $name)
    {
        $this->id = $id;
        $this->kind = $kind;
        $this->meta = $meta;
        $this->name = $name;
    }

    /**
     * @return Statistics[]|null
     */
    public function getChildStatistics(): ?array
    {
        return $this->childStatistics ?? null;
    }

    public function getDescription(): ?string
    {
        return $this->description ?? null;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getKind(): StatisticsKind
    {
        return $this->kind;
    }

    public function getMeta(): StatisticsMeta
    {
        return $this->meta;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getNotificationThresholdInBytes(): ?int
    {
        return $this->notificationThresholdInBytes ?? null;
    }

    /**
     * @return StatisticsCategory[]|null
     */
    public function getStatisticCategories(): ?array
    {
        return $this->statisticCategories ?? null;
    }

    /**
     * @param Statistics[] $childStatistics
     */
    public function withChildStatistics(array $childStatistics): self
    {
        $clone = clone $this;
        $clone->childStatistics = $childStatistics;

        return $clone;
    }

    public function withoutChildStatistics(): self
    {
        $clone = clone $this;
        unset($clone->childStatistics);

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

    public function withoutDescription(): self
    {
        $clone = clone $this;
        unset($clone->description);

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

    public function withKind(StatisticsKind $kind): self
    {
        $clone = clone $this;
        $clone->kind = $kind;

        return $clone;
    }

    public function withMeta(StatisticsMeta $meta): self
    {
        $clone = clone $this;
        $clone->meta = $meta;

        return $clone;
    }

    public function withName(string $name): self
    {
        $validator = new Validator();
        $validator->validate($name, static::$schema['properties']['name']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->name = $name;

        return $clone;
    }

    public function withNotificationThresholdInBytes(int $notificationThresholdInBytes): self
    {
        $validator = new Validator();
        $validator->validate($notificationThresholdInBytes, static::$schema['properties']['notificationThresholdInBytes']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->notificationThresholdInBytes = $notificationThresholdInBytes;

        return $clone;
    }

    public function withoutNotificationThresholdInBytes(): self
    {
        $clone = clone $this;
        unset($clone->notificationThresholdInBytes);

        return $clone;
    }

    /**
     * @param StatisticsCategory[] $statisticCategories
     */
    public function withStatisticCategories(array $statisticCategories): self
    {
        $clone = clone $this;
        $clone->statisticCategories = $statisticCategories;

        return $clone;
    }

    public function withoutStatisticCategories(): self
    {
        $clone = clone $this;
        unset($clone->statisticCategories);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return Statistics Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): Statistics
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $childStatistics = null;
        if (isset($input->{'childStatistics'})) {
            $childStatistics = array_map(fn (array|object $i): Statistics => Statistics::buildFromInput($i, validate: $validate), $input->{'childStatistics'});
        }
        $description = null;
        if (isset($input->{'description'})) {
            $description = $input->{'description'};
        }
        $id = $input->{'id'};
        $kind = StatisticsKind::from($input->{'kind'});
        $meta = StatisticsMeta::buildFromInput($input->{'meta'}, validate: $validate);
        $name = $input->{'name'};
        $notificationThresholdInBytes = null;
        if (isset($input->{'notificationThresholdInBytes'})) {
            $notificationThresholdInBytes = (int)($input->{'notificationThresholdInBytes'});
        }
        $statisticCategories = null;
        if (isset($input->{'statisticCategories'})) {
            $statisticCategories = array_map(fn (array|object $i): StatisticsCategory => StatisticsCategory::buildFromInput($i, validate: $validate), $input->{'statisticCategories'});
        }

        $obj = new self($id, $kind, $meta, $name);
        $obj->childStatistics = $childStatistics;
        $obj->description = $description;
        $obj->notificationThresholdInBytes = $notificationThresholdInBytes;
        $obj->statisticCategories = $statisticCategories;
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
        if (isset($this->childStatistics)) {
            $output['childStatistics'] = array_map(fn (Statistics $i): array => $i->toJson(), $this->childStatistics);
        }
        if (isset($this->description)) {
            $output['description'] = $this->description;
        }
        $output['id'] = $this->id;
        $output['kind'] = $this->kind->value;
        $output['meta'] = $this->meta->toJson();
        $output['name'] = $this->name;
        if (isset($this->notificationThresholdInBytes)) {
            $output['notificationThresholdInBytes'] = $this->notificationThresholdInBytes;
        }
        if (isset($this->statisticCategories)) {
            $output['statisticCategories'] = array_map(fn (StatisticsCategory $i): array => $i->toJson(), $this->statisticCategories);
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
