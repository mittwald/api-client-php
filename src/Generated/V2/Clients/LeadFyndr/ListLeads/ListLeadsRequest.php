<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\LeadFyndr\ListLeads;

use InvalidArgumentException;
use JsonSchema\Validator;

class ListLeadsRequest
{
    public const method = 'get';

    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'type' => 'object',
        'properties' => [
            'customerId' => [
                'type' => 'string',
            ],
            'potentialRangeMin' => [
                'format' => 'float',
                'maximum' => 1,
                'minimum' => 0,
                'type' => 'number',
            ],
            'potentialRangeMax' => [
                'format' => 'float',
                'maximum' => 1,
                'minimum' => 0,
                'type' => 'number',
            ],
            'employeeCountMin' => [
                'format' => 'int64',
                'type' => 'integer',
            ],
            'employeeCountMax' => [
                'format' => 'int64',
                'type' => 'integer',
            ],
            'salesVolumeMin' => [
                'format' => 'int64',
                'type' => 'integer',
            ],
            'salesVolumeMax' => [
                'format' => 'int64',
                'type' => 'integer',
            ],
            'technologies' => [
                'items' => [
                    'type' => 'string',
                ],
                'type' => 'array',
            ],
            'businessFields' => [
                'items' => [
                    'type' => 'string',
                ],
                'maxItems' => 15,
                'type' => 'array',
            ],
            'locationCity' => [
                'type' => 'string',
            ],
            'locationPostCode' => [
                'type' => 'string',
            ],
            'locationRadiusInKm' => [
                'minimum' => 20,
                'type' => 'number',
            ],
            'basic:timeToFirstByteMs:min' => [
                'type' => 'number',
            ],
            'basic:timeToFirstByteMs:max' => [
                'type' => 'number',
            ],
            'basic:desktop:performance:min' => [
                'format' => 'float',
                'maximum' => 1,
                'minimum' => 0,
                'type' => 'number',
            ],
            'basic:desktop:performance:max' => [
                'format' => 'float',
                'maximum' => 1,
                'minimum' => 0,
                'type' => 'number',
            ],
            'basic:mobile:performance:min' => [
                'format' => 'float',
                'maximum' => 1,
                'minimum' => 0,
                'type' => 'number',
            ],
            'basic:mobile:performance:max' => [
                'format' => 'float',
                'maximum' => 1,
                'minimum' => 0,
                'type' => 'number',
            ],
            'limit' => [
                'type' => 'integer',
                'default' => 10,
                'minimum' => 1,
            ],
            'skip' => [
                'type' => 'integer',
                'default' => 0,
            ],
            'page' => [
                'type' => 'integer',
                'minimum' => 1,
            ],
            'sort' => [
                'type' => 'string',
                'enum' => [
                    'potential',
                    'relevance',
                ],
                'default' => 'relevance',
            ],
            'order' => [
                'type' => 'string',
                'enum' => [
                    'asc',
                    'desc',
                ],
                'default' => 'desc',
            ],
        ],
        'required' => [
            'customerId',
        ],
    ];

    private string $customerId;

    private int|float|null $potentialRangeMin = null;

    private int|float|null $potentialRangeMax = null;

    private ?int $employeeCountMin = null;

    private ?int $employeeCountMax = null;

    private ?int $salesVolumeMin = null;

    private ?int $salesVolumeMax = null;

    /**
     * @var string[]|null
     */
    private ?array $technologies = null;

    /**
     * @var string[]|null
     */
    private ?array $businessFields = null;

    private ?string $locationCity = null;

    private ?string $locationPostCode = null;

    private int|float|null $locationRadiusInKm = null;

    private int|float|null $basicTimeToFirstByteMsMin = null;

    private int|float|null $basicTimeToFirstByteMsMax = null;

    private int|float|null $basicDesktopPerformanceMin = null;

    private int|float|null $basicDesktopPerformanceMax = null;

    private int|float|null $basicMobilePerformanceMin = null;

    private int|float|null $basicMobilePerformanceMax = null;

    private int $limit = 10;

    private int $skip = 0;

    private ?int $page = null;

    private ListLeadsRequestSort $sort = ListLeadsRequestSort::relevance;

    private ListLeadsRequestOrder $order = ListLeadsRequestOrder::desc;

    private array $headers = [

    ];

    public function __construct(string $customerId)
    {
        $this->customerId = $customerId;
    }

    public function getCustomerId(): string
    {
        return $this->customerId;
    }

    public function getPotentialRangeMin(): int|float|null
    {
        return $this->potentialRangeMin;
    }

    public function getPotentialRangeMax(): int|float|null
    {
        return $this->potentialRangeMax;
    }

    public function getEmployeeCountMin(): ?int
    {
        return $this->employeeCountMin ?? null;
    }

    public function getEmployeeCountMax(): ?int
    {
        return $this->employeeCountMax ?? null;
    }

    public function getSalesVolumeMin(): ?int
    {
        return $this->salesVolumeMin ?? null;
    }

    public function getSalesVolumeMax(): ?int
    {
        return $this->salesVolumeMax ?? null;
    }

    /**
     * @return string[]|null
     */
    public function getTechnologies(): ?array
    {
        return $this->technologies ?? null;
    }

    /**
     * @return string[]|null
     */
    public function getBusinessFields(): ?array
    {
        return $this->businessFields ?? null;
    }

    public function getLocationCity(): ?string
    {
        return $this->locationCity ?? null;
    }

    public function getLocationPostCode(): ?string
    {
        return $this->locationPostCode ?? null;
    }

    public function getLocationRadiusInKm(): int|float|null
    {
        return $this->locationRadiusInKm;
    }

    public function getBasicTimeToFirstByteMsMin(): int|float|null
    {
        return $this->basicTimeToFirstByteMsMin;
    }

    public function getBasicTimeToFirstByteMsMax(): int|float|null
    {
        return $this->basicTimeToFirstByteMsMax;
    }

    public function getBasicDesktopPerformanceMin(): int|float|null
    {
        return $this->basicDesktopPerformanceMin;
    }

    public function getBasicDesktopPerformanceMax(): int|float|null
    {
        return $this->basicDesktopPerformanceMax;
    }

    public function getBasicMobilePerformanceMin(): int|float|null
    {
        return $this->basicMobilePerformanceMin;
    }

    public function getBasicMobilePerformanceMax(): int|float|null
    {
        return $this->basicMobilePerformanceMax;
    }

    public function getLimit(): int
    {
        return $this->limit;
    }

    public function getSkip(): int
    {
        return $this->skip;
    }

    public function getPage(): ?int
    {
        return $this->page ?? null;
    }

    public function getSort(): ListLeadsRequestSort
    {
        return $this->sort;
    }

    public function getOrder(): ListLeadsRequestOrder
    {
        return $this->order;
    }

    public function withCustomerId(string $customerId): self
    {
        $validator = new Validator();
        $validator->validate($customerId, self::$internalValidationSchema['properties']['customerId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->customerId = $customerId;

        return $clone;
    }

    public function withPotentialRangeMin(int|float $potentialRangeMin): self
    {
        $validator = new Validator();
        $validator->validate($potentialRangeMin, self::$internalValidationSchema['properties']['potentialRangeMin']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->potentialRangeMin = $potentialRangeMin;

        return $clone;
    }

    public function withoutPotentialRangeMin(): self
    {
        $clone = clone $this;
        unset($clone->potentialRangeMin);

        return $clone;
    }

    public function withPotentialRangeMax(int|float $potentialRangeMax): self
    {
        $validator = new Validator();
        $validator->validate($potentialRangeMax, self::$internalValidationSchema['properties']['potentialRangeMax']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->potentialRangeMax = $potentialRangeMax;

        return $clone;
    }

    public function withoutPotentialRangeMax(): self
    {
        $clone = clone $this;
        unset($clone->potentialRangeMax);

        return $clone;
    }

    public function withEmployeeCountMin(int $employeeCountMin): self
    {
        $validator = new Validator();
        $validator->validate($employeeCountMin, self::$internalValidationSchema['properties']['employeeCountMin']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->employeeCountMin = $employeeCountMin;

        return $clone;
    }

    public function withoutEmployeeCountMin(): self
    {
        $clone = clone $this;
        unset($clone->employeeCountMin);

        return $clone;
    }

    public function withEmployeeCountMax(int $employeeCountMax): self
    {
        $validator = new Validator();
        $validator->validate($employeeCountMax, self::$internalValidationSchema['properties']['employeeCountMax']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->employeeCountMax = $employeeCountMax;

        return $clone;
    }

    public function withoutEmployeeCountMax(): self
    {
        $clone = clone $this;
        unset($clone->employeeCountMax);

        return $clone;
    }

    public function withSalesVolumeMin(int $salesVolumeMin): self
    {
        $validator = new Validator();
        $validator->validate($salesVolumeMin, self::$internalValidationSchema['properties']['salesVolumeMin']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->salesVolumeMin = $salesVolumeMin;

        return $clone;
    }

    public function withoutSalesVolumeMin(): self
    {
        $clone = clone $this;
        unset($clone->salesVolumeMin);

        return $clone;
    }

    public function withSalesVolumeMax(int $salesVolumeMax): self
    {
        $validator = new Validator();
        $validator->validate($salesVolumeMax, self::$internalValidationSchema['properties']['salesVolumeMax']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->salesVolumeMax = $salesVolumeMax;

        return $clone;
    }

    public function withoutSalesVolumeMax(): self
    {
        $clone = clone $this;
        unset($clone->salesVolumeMax);

        return $clone;
    }

    /**
     * @param string[] $technologies
     */
    public function withTechnologies(array $technologies): self
    {
        $validator = new Validator();
        $validator->validate($technologies, self::$internalValidationSchema['properties']['technologies']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->technologies = $technologies;

        return $clone;
    }

    public function withoutTechnologies(): self
    {
        $clone = clone $this;
        unset($clone->technologies);

        return $clone;
    }

    /**
     * @param string[] $businessFields
     */
    public function withBusinessFields(array $businessFields): self
    {
        $validator = new Validator();
        $validator->validate($businessFields, self::$internalValidationSchema['properties']['businessFields']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->businessFields = $businessFields;

        return $clone;
    }

    public function withoutBusinessFields(): self
    {
        $clone = clone $this;
        unset($clone->businessFields);

        return $clone;
    }

    public function withLocationCity(string $locationCity): self
    {
        $validator = new Validator();
        $validator->validate($locationCity, self::$internalValidationSchema['properties']['locationCity']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->locationCity = $locationCity;

        return $clone;
    }

    public function withoutLocationCity(): self
    {
        $clone = clone $this;
        unset($clone->locationCity);

        return $clone;
    }

    public function withLocationPostCode(string $locationPostCode): self
    {
        $validator = new Validator();
        $validator->validate($locationPostCode, self::$internalValidationSchema['properties']['locationPostCode']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->locationPostCode = $locationPostCode;

        return $clone;
    }

    public function withoutLocationPostCode(): self
    {
        $clone = clone $this;
        unset($clone->locationPostCode);

        return $clone;
    }

    public function withLocationRadiusInKm(int|float $locationRadiusInKm): self
    {
        $validator = new Validator();
        $validator->validate($locationRadiusInKm, self::$internalValidationSchema['properties']['locationRadiusInKm']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->locationRadiusInKm = $locationRadiusInKm;

        return $clone;
    }

    public function withoutLocationRadiusInKm(): self
    {
        $clone = clone $this;
        unset($clone->locationRadiusInKm);

        return $clone;
    }

    public function withBasicTimeToFirstByteMsMin(int|float $basicTimeToFirstByteMsMin): self
    {
        $validator = new Validator();
        $validator->validate($basicTimeToFirstByteMsMin, self::$internalValidationSchema['properties']['basic:timeToFirstByteMs:min']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->basicTimeToFirstByteMsMin = $basicTimeToFirstByteMsMin;

        return $clone;
    }

    public function withoutBasicTimeToFirstByteMsMin(): self
    {
        $clone = clone $this;
        unset($clone->basicTimeToFirstByteMsMin);

        return $clone;
    }

    public function withBasicTimeToFirstByteMsMax(int|float $basicTimeToFirstByteMsMax): self
    {
        $validator = new Validator();
        $validator->validate($basicTimeToFirstByteMsMax, self::$internalValidationSchema['properties']['basic:timeToFirstByteMs:max']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->basicTimeToFirstByteMsMax = $basicTimeToFirstByteMsMax;

        return $clone;
    }

    public function withoutBasicTimeToFirstByteMsMax(): self
    {
        $clone = clone $this;
        unset($clone->basicTimeToFirstByteMsMax);

        return $clone;
    }

    public function withBasicDesktopPerformanceMin(int|float $basicDesktopPerformanceMin): self
    {
        $validator = new Validator();
        $validator->validate($basicDesktopPerformanceMin, self::$internalValidationSchema['properties']['basic:desktop:performance:min']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->basicDesktopPerformanceMin = $basicDesktopPerformanceMin;

        return $clone;
    }

    public function withoutBasicDesktopPerformanceMin(): self
    {
        $clone = clone $this;
        unset($clone->basicDesktopPerformanceMin);

        return $clone;
    }

    public function withBasicDesktopPerformanceMax(int|float $basicDesktopPerformanceMax): self
    {
        $validator = new Validator();
        $validator->validate($basicDesktopPerformanceMax, self::$internalValidationSchema['properties']['basic:desktop:performance:max']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->basicDesktopPerformanceMax = $basicDesktopPerformanceMax;

        return $clone;
    }

    public function withoutBasicDesktopPerformanceMax(): self
    {
        $clone = clone $this;
        unset($clone->basicDesktopPerformanceMax);

        return $clone;
    }

    public function withBasicMobilePerformanceMin(int|float $basicMobilePerformanceMin): self
    {
        $validator = new Validator();
        $validator->validate($basicMobilePerformanceMin, self::$internalValidationSchema['properties']['basic:mobile:performance:min']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->basicMobilePerformanceMin = $basicMobilePerformanceMin;

        return $clone;
    }

    public function withoutBasicMobilePerformanceMin(): self
    {
        $clone = clone $this;
        unset($clone->basicMobilePerformanceMin);

        return $clone;
    }

    public function withBasicMobilePerformanceMax(int|float $basicMobilePerformanceMax): self
    {
        $validator = new Validator();
        $validator->validate($basicMobilePerformanceMax, self::$internalValidationSchema['properties']['basic:mobile:performance:max']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->basicMobilePerformanceMax = $basicMobilePerformanceMax;

        return $clone;
    }

    public function withoutBasicMobilePerformanceMax(): self
    {
        $clone = clone $this;
        unset($clone->basicMobilePerformanceMax);

        return $clone;
    }

    public function withLimit(int $limit): self
    {
        $validator = new Validator();
        $validator->validate($limit, self::$internalValidationSchema['properties']['limit']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->limit = $limit;

        return $clone;
    }

    public function withSkip(int $skip): self
    {
        $validator = new Validator();
        $validator->validate($skip, self::$internalValidationSchema['properties']['skip']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->skip = $skip;

        return $clone;
    }

    public function withPage(int $page): self
    {
        $validator = new Validator();
        $validator->validate($page, self::$internalValidationSchema['properties']['page']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->page = $page;

        return $clone;
    }

    public function withoutPage(): self
    {
        $clone = clone $this;
        unset($clone->page);

        return $clone;
    }

    public function withSort(ListLeadsRequestSort $sort): self
    {
        $clone = clone $this;
        $clone->sort = $sort;

        return $clone;
    }

    public function withOrder(ListLeadsRequestOrder $order): self
    {
        $clone = clone $this;
        $clone->order = $order;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return ListLeadsRequest Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ListLeadsRequest
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $customerId = $input->{'customerId'};
        $potentialRangeMin = null;
        if (isset($input->{'potentialRangeMin'})) {
            $potentialRangeMin = str_contains((string)($input->{'potentialRangeMin'}), '.') ? (float)($input->{'potentialRangeMin'}) : (int)($input->{'potentialRangeMin'});
        }
        $potentialRangeMax = null;
        if (isset($input->{'potentialRangeMax'})) {
            $potentialRangeMax = str_contains((string)($input->{'potentialRangeMax'}), '.') ? (float)($input->{'potentialRangeMax'}) : (int)($input->{'potentialRangeMax'});
        }
        $employeeCountMin = null;
        if (isset($input->{'employeeCountMin'})) {
            $employeeCountMin = (int)($input->{'employeeCountMin'});
        }
        $employeeCountMax = null;
        if (isset($input->{'employeeCountMax'})) {
            $employeeCountMax = (int)($input->{'employeeCountMax'});
        }
        $salesVolumeMin = null;
        if (isset($input->{'salesVolumeMin'})) {
            $salesVolumeMin = (int)($input->{'salesVolumeMin'});
        }
        $salesVolumeMax = null;
        if (isset($input->{'salesVolumeMax'})) {
            $salesVolumeMax = (int)($input->{'salesVolumeMax'});
        }
        $technologies = null;
        if (isset($input->{'technologies'})) {
            $technologies = $input->{'technologies'};
        }
        $businessFields = null;
        if (isset($input->{'businessFields'})) {
            $businessFields = $input->{'businessFields'};
        }
        $locationCity = null;
        if (isset($input->{'locationCity'})) {
            $locationCity = $input->{'locationCity'};
        }
        $locationPostCode = null;
        if (isset($input->{'locationPostCode'})) {
            $locationPostCode = $input->{'locationPostCode'};
        }
        $locationRadiusInKm = null;
        if (isset($input->{'locationRadiusInKm'})) {
            $locationRadiusInKm = str_contains((string)($input->{'locationRadiusInKm'}), '.') ? (float)($input->{'locationRadiusInKm'}) : (int)($input->{'locationRadiusInKm'});
        }
        $basicTimeToFirstByteMsMin = null;
        if (isset($input->{'basic:timeToFirstByteMs:min'})) {
            $basicTimeToFirstByteMsMin = str_contains((string)($input->{'basic:timeToFirstByteMs:min'}), '.') ? (float)($input->{'basic:timeToFirstByteMs:min'}) : (int)($input->{'basic:timeToFirstByteMs:min'});
        }
        $basicTimeToFirstByteMsMax = null;
        if (isset($input->{'basic:timeToFirstByteMs:max'})) {
            $basicTimeToFirstByteMsMax = str_contains((string)($input->{'basic:timeToFirstByteMs:max'}), '.') ? (float)($input->{'basic:timeToFirstByteMs:max'}) : (int)($input->{'basic:timeToFirstByteMs:max'});
        }
        $basicDesktopPerformanceMin = null;
        if (isset($input->{'basic:desktop:performance:min'})) {
            $basicDesktopPerformanceMin = str_contains((string)($input->{'basic:desktop:performance:min'}), '.') ? (float)($input->{'basic:desktop:performance:min'}) : (int)($input->{'basic:desktop:performance:min'});
        }
        $basicDesktopPerformanceMax = null;
        if (isset($input->{'basic:desktop:performance:max'})) {
            $basicDesktopPerformanceMax = str_contains((string)($input->{'basic:desktop:performance:max'}), '.') ? (float)($input->{'basic:desktop:performance:max'}) : (int)($input->{'basic:desktop:performance:max'});
        }
        $basicMobilePerformanceMin = null;
        if (isset($input->{'basic:mobile:performance:min'})) {
            $basicMobilePerformanceMin = str_contains((string)($input->{'basic:mobile:performance:min'}), '.') ? (float)($input->{'basic:mobile:performance:min'}) : (int)($input->{'basic:mobile:performance:min'});
        }
        $basicMobilePerformanceMax = null;
        if (isset($input->{'basic:mobile:performance:max'})) {
            $basicMobilePerformanceMax = str_contains((string)($input->{'basic:mobile:performance:max'}), '.') ? (float)($input->{'basic:mobile:performance:max'}) : (int)($input->{'basic:mobile:performance:max'});
        }
        $limit = 10;
        if (isset($input->{'limit'})) {
            $limit = (int)($input->{'limit'});
        }
        $skip = 0;
        if (isset($input->{'skip'})) {
            $skip = (int)($input->{'skip'});
        }
        $page = null;
        if (isset($input->{'page'})) {
            $page = (int)($input->{'page'});
        }
        $sort = ListLeadsRequestSort::relevance;
        if (isset($input->{'sort'})) {
            $sort = ListLeadsRequestSort::from($input->{'sort'});
        }
        $order = ListLeadsRequestOrder::desc;
        if (isset($input->{'order'})) {
            $order = ListLeadsRequestOrder::from($input->{'order'});
        }

        $obj = new self($customerId);
        $obj->potentialRangeMin = $potentialRangeMin;
        $obj->potentialRangeMax = $potentialRangeMax;
        $obj->employeeCountMin = $employeeCountMin;
        $obj->employeeCountMax = $employeeCountMax;
        $obj->salesVolumeMin = $salesVolumeMin;
        $obj->salesVolumeMax = $salesVolumeMax;
        $obj->technologies = $technologies;
        $obj->businessFields = $businessFields;
        $obj->locationCity = $locationCity;
        $obj->locationPostCode = $locationPostCode;
        $obj->locationRadiusInKm = $locationRadiusInKm;
        $obj->basicTimeToFirstByteMsMin = $basicTimeToFirstByteMsMin;
        $obj->basicTimeToFirstByteMsMax = $basicTimeToFirstByteMsMax;
        $obj->basicDesktopPerformanceMin = $basicDesktopPerformanceMin;
        $obj->basicDesktopPerformanceMax = $basicDesktopPerformanceMax;
        $obj->basicMobilePerformanceMin = $basicMobilePerformanceMin;
        $obj->basicMobilePerformanceMax = $basicMobilePerformanceMax;
        $obj->limit = $limit;
        $obj->skip = $skip;
        $obj->page = $page;
        $obj->sort = $sort;
        $obj->order = $order;
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
        $output['customerId'] = $this->customerId;
        if (isset($this->potentialRangeMin)) {
            $output['potentialRangeMin'] = $this->potentialRangeMin;
        }
        if (isset($this->potentialRangeMax)) {
            $output['potentialRangeMax'] = $this->potentialRangeMax;
        }
        if (isset($this->employeeCountMin)) {
            $output['employeeCountMin'] = $this->employeeCountMin;
        }
        if (isset($this->employeeCountMax)) {
            $output['employeeCountMax'] = $this->employeeCountMax;
        }
        if (isset($this->salesVolumeMin)) {
            $output['salesVolumeMin'] = $this->salesVolumeMin;
        }
        if (isset($this->salesVolumeMax)) {
            $output['salesVolumeMax'] = $this->salesVolumeMax;
        }
        if (isset($this->technologies)) {
            $output['technologies'] = $this->technologies;
        }
        if (isset($this->businessFields)) {
            $output['businessFields'] = $this->businessFields;
        }
        if (isset($this->locationCity)) {
            $output['locationCity'] = $this->locationCity;
        }
        if (isset($this->locationPostCode)) {
            $output['locationPostCode'] = $this->locationPostCode;
        }
        if (isset($this->locationRadiusInKm)) {
            $output['locationRadiusInKm'] = $this->locationRadiusInKm;
        }
        if (isset($this->basicTimeToFirstByteMsMin)) {
            $output['basic:timeToFirstByteMs:min'] = $this->basicTimeToFirstByteMsMin;
        }
        if (isset($this->basicTimeToFirstByteMsMax)) {
            $output['basic:timeToFirstByteMs:max'] = $this->basicTimeToFirstByteMsMax;
        }
        if (isset($this->basicDesktopPerformanceMin)) {
            $output['basic:desktop:performance:min'] = $this->basicDesktopPerformanceMin;
        }
        if (isset($this->basicDesktopPerformanceMax)) {
            $output['basic:desktop:performance:max'] = $this->basicDesktopPerformanceMax;
        }
        if (isset($this->basicMobilePerformanceMin)) {
            $output['basic:mobile:performance:min'] = $this->basicMobilePerformanceMin;
        }
        if (isset($this->basicMobilePerformanceMax)) {
            $output['basic:mobile:performance:max'] = $this->basicMobilePerformanceMax;
        }
        $output['limit'] = $this->limit;
        $output['skip'] = $this->skip;
        if (isset($this->page)) {
            $output['page'] = $this->page;
        }
        $output['sort'] = ($this->sort)->value;
        $output['order'] = ($this->order)->value;

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
        $validator->validate($input, self::$internalValidationSchema);

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

    /**
     * Builds the URL for this request
     *
     * This method is used internally by the client to build the URL for this request.
     * You should not need to call this method directly.
     *
     * @internal
     * @return string The URL for this request
     */
    public function buildUrl(): string
    {
        $mapped = $this->toJson();
        $customerId = urlencode($mapped['customerId']);
        return '/v2/customers/' . $customerId . '/leads';
    }

    /**
     * Builds the request options for this request
     *
     * This method is used internally by the client to build the Guzzle request options
     * for this request. You should not need to call this method directly.
     *
     * @internal
     * @return array The Guzzle request options for this request
     */
    public function buildRequestOptions(): array
    {
        $mapped = $this->toJson();
        $query = [];
        if (isset($mapped['potentialRangeMin'])) {
            $query['potentialRangeMin'] = $mapped['potentialRangeMin'];
        }
        if (isset($mapped['potentialRangeMax'])) {
            $query['potentialRangeMax'] = $mapped['potentialRangeMax'];
        }
        if (isset($mapped['employeeCountMin'])) {
            $query['employeeCountMin'] = $mapped['employeeCountMin'];
        }
        if (isset($mapped['employeeCountMax'])) {
            $query['employeeCountMax'] = $mapped['employeeCountMax'];
        }
        if (isset($mapped['salesVolumeMin'])) {
            $query['salesVolumeMin'] = $mapped['salesVolumeMin'];
        }
        if (isset($mapped['salesVolumeMax'])) {
            $query['salesVolumeMax'] = $mapped['salesVolumeMax'];
        }
        if (isset($mapped['technologies'])) {
            $query['technologies'] = $mapped['technologies'];
        }
        if (isset($mapped['businessFields'])) {
            $query['businessFields'] = $mapped['businessFields'];
        }
        if (isset($mapped['locationCity'])) {
            $query['locationCity'] = $mapped['locationCity'];
        }
        if (isset($mapped['locationPostCode'])) {
            $query['locationPostCode'] = $mapped['locationPostCode'];
        }
        if (isset($mapped['locationRadiusInKm'])) {
            $query['locationRadiusInKm'] = $mapped['locationRadiusInKm'];
        }
        if (isset($mapped['basic:timeToFirstByteMs:min'])) {
            $query['basic:timeToFirstByteMs:min'] = $mapped['basic:timeToFirstByteMs:min'];
        }
        if (isset($mapped['basic:timeToFirstByteMs:max'])) {
            $query['basic:timeToFirstByteMs:max'] = $mapped['basic:timeToFirstByteMs:max'];
        }
        if (isset($mapped['basic:desktop:performance:min'])) {
            $query['basic:desktop:performance:min'] = $mapped['basic:desktop:performance:min'];
        }
        if (isset($mapped['basic:desktop:performance:max'])) {
            $query['basic:desktop:performance:max'] = $mapped['basic:desktop:performance:max'];
        }
        if (isset($mapped['basic:mobile:performance:min'])) {
            $query['basic:mobile:performance:min'] = $mapped['basic:mobile:performance:min'];
        }
        if (isset($mapped['basic:mobile:performance:max'])) {
            $query['basic:mobile:performance:max'] = $mapped['basic:mobile:performance:max'];
        }
        if (isset($mapped['limit'])) {
            $query['limit'] = $mapped['limit'];
        }
        if (isset($mapped['skip'])) {
            $query['skip'] = $mapped['skip'];
        }
        if (isset($mapped['page'])) {
            $query['page'] = $mapped['page'];
        }
        if (isset($mapped['sort'])) {
            $query['sort'] = $mapped['sort'];
        }
        if (isset($mapped['order'])) {
            $query['order'] = $mapped['order'];
        }
        return [
            'query' => $query,
            'headers' => $this->headers,
        ];
    }

    /**
     * Adds a header to this request
     *
     * You can use this method to add custom HTTP headers to the request.
     *
     * @param string $name The name of the header to add
     * @param string|array $value The value of the header to add
     * @return self A clone of this request with the header added
     */
    public function withHeader(string $name, string|array $value): self
    {
        $clone = clone $this;
        $clone->headers[$name] = $value;
        return $clone;
    }
}
