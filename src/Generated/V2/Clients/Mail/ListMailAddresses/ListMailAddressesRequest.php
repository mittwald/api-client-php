<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Mail\ListMailAddresses;

use InvalidArgumentException;
use JsonSchema\Validator;

class ListMailAddressesRequest
{
    public const method = 'get';

    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'type' => 'object',
        'properties' => [
            'projectId' => [
                'type' => 'string',
            ],
            'search' => [
                'type' => 'string',
            ],
            'forwardAddress' => [
                'type' => 'boolean',
            ],
            'catchAll' => [
                'type' => 'boolean',
            ],
            'autoResponder' => [
                'type' => 'boolean',
            ],
            'mailArchive' => [
                'type' => 'boolean',
            ],
            'limit' => [
                'type' => 'integer',
                'default' => 10000,
                'minimum' => 0,
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
                'type' => 'array',
                'items' => [
                    'type' => 'string',
                    'enum' => [
                        'address.domain',
                        'address.local',
                        'updatedAt',
                        'projectId',
                        'mailbox.quota',
                        'mailbox.name',
                        'mailbox.storageInBytes.current',
                        'mailbox.storageInBytes.limit',
                    ],
                ],
                'default' => [
                    'address.domain',
                    'address.local',
                ],
            ],
            'order' => [
                'type' => 'array',
                'items' => [
                    'type' => 'string',
                    'enum' => [
                        'asc',
                        'desc',
                    ],
                ],
                'default' => [
                    'asc',
                    'asc',
                ],
            ],
        ],
        'required' => [
            'projectId',
        ],
    ];

    private string $projectId;

    private ?string $search = null;

    private ?bool $forwardAddress = null;

    private ?bool $catchAll = null;

    private ?bool $autoResponder = null;

    private ?bool $mailArchive = null;

    private int $limit = 10000;

    private int $skip = 0;

    private ?int $page = null;

    /**
     * @var string[]
     */
    private array $sort = [
        'address.domain',
        'address.local',
    ];

    /**
     * @var string[]
     */
    private array $order = [
        'asc',
        'asc',
    ];

    private array $headers = [

    ];

    public function __construct(string $projectId)
    {
        $this->projectId = $projectId;
    }

    public function getProjectId(): string
    {
        return $this->projectId;
    }

    public function getSearch(): ?string
    {
        return $this->search ?? null;
    }

    public function getForwardAddress(): ?bool
    {
        return $this->forwardAddress ?? null;
    }

    public function getCatchAll(): ?bool
    {
        return $this->catchAll ?? null;
    }

    public function getAutoResponder(): ?bool
    {
        return $this->autoResponder ?? null;
    }

    public function getMailArchive(): ?bool
    {
        return $this->mailArchive ?? null;
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

    /**
     * @return string[]
     */
    public function getSort(): array
    {
        return $this->sort;
    }

    /**
     * @return string[]
     */
    public function getOrder(): array
    {
        return $this->order;
    }

    public function withProjectId(string $projectId): self
    {
        $validator = new Validator();
        $validator->validate($projectId, self::$internalValidationSchema['properties']['projectId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->projectId = $projectId;

        return $clone;
    }

    public function withSearch(string $search): self
    {
        $validator = new Validator();
        $validator->validate($search, self::$internalValidationSchema['properties']['search']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->search = $search;

        return $clone;
    }

    public function withoutSearch(): self
    {
        $clone = clone $this;
        unset($clone->search);

        return $clone;
    }

    public function withForwardAddress(bool $forwardAddress): self
    {
        $validator = new Validator();
        $validator->validate($forwardAddress, self::$internalValidationSchema['properties']['forwardAddress']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->forwardAddress = $forwardAddress;

        return $clone;
    }

    public function withoutForwardAddress(): self
    {
        $clone = clone $this;
        unset($clone->forwardAddress);

        return $clone;
    }

    public function withCatchAll(bool $catchAll): self
    {
        $validator = new Validator();
        $validator->validate($catchAll, self::$internalValidationSchema['properties']['catchAll']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->catchAll = $catchAll;

        return $clone;
    }

    public function withoutCatchAll(): self
    {
        $clone = clone $this;
        unset($clone->catchAll);

        return $clone;
    }

    public function withAutoResponder(bool $autoResponder): self
    {
        $validator = new Validator();
        $validator->validate($autoResponder, self::$internalValidationSchema['properties']['autoResponder']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->autoResponder = $autoResponder;

        return $clone;
    }

    public function withoutAutoResponder(): self
    {
        $clone = clone $this;
        unset($clone->autoResponder);

        return $clone;
    }

    public function withMailArchive(bool $mailArchive): self
    {
        $validator = new Validator();
        $validator->validate($mailArchive, self::$internalValidationSchema['properties']['mailArchive']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->mailArchive = $mailArchive;

        return $clone;
    }

    public function withoutMailArchive(): self
    {
        $clone = clone $this;
        unset($clone->mailArchive);

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

    /**
     * @param string[] $sort
     */
    public function withSort(array $sort): self
    {
        $validator = new Validator();
        $validator->validate($sort, self::$internalValidationSchema['properties']['sort']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->sort = $sort;

        return $clone;
    }

    /**
     * @param string[] $order
     */
    public function withOrder(array $order): self
    {
        $validator = new Validator();
        $validator->validate($order, self::$internalValidationSchema['properties']['order']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->order = $order;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return ListMailAddressesRequest Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ListMailAddressesRequest
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $projectId = $input->{'projectId'};
        $search = null;
        if (isset($input->{'search'})) {
            $search = $input->{'search'};
        }
        $forwardAddress = null;
        if (isset($input->{'forwardAddress'})) {
            $forwardAddress = (bool)($input->{'forwardAddress'});
        }
        $catchAll = null;
        if (isset($input->{'catchAll'})) {
            $catchAll = (bool)($input->{'catchAll'});
        }
        $autoResponder = null;
        if (isset($input->{'autoResponder'})) {
            $autoResponder = (bool)($input->{'autoResponder'});
        }
        $mailArchive = null;
        if (isset($input->{'mailArchive'})) {
            $mailArchive = (bool)($input->{'mailArchive'});
        }
        $limit = 10000;
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
        $sort = [
                'address.domain',
                'address.local',
            ];
        if (isset($input->{'sort'})) {
            $sort = $input->{'sort'};
        }
        $order = [
                'asc',
                'asc',
            ];
        if (isset($input->{'order'})) {
            $order = $input->{'order'};
        }

        $obj = new self($projectId);
        $obj->search = $search;
        $obj->forwardAddress = $forwardAddress;
        $obj->catchAll = $catchAll;
        $obj->autoResponder = $autoResponder;
        $obj->mailArchive = $mailArchive;
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
        $output['projectId'] = $this->projectId;
        if (isset($this->search)) {
            $output['search'] = $this->search;
        }
        if (isset($this->forwardAddress)) {
            $output['forwardAddress'] = $this->forwardAddress;
        }
        if (isset($this->catchAll)) {
            $output['catchAll'] = $this->catchAll;
        }
        if (isset($this->autoResponder)) {
            $output['autoResponder'] = $this->autoResponder;
        }
        if (isset($this->mailArchive)) {
            $output['mailArchive'] = $this->mailArchive;
        }
        $output['limit'] = $this->limit;
        $output['skip'] = $this->skip;
        if (isset($this->page)) {
            $output['page'] = $this->page;
        }
        $output['sort'] = $this->sort;
        $output['order'] = $this->order;

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
        $projectId = urlencode($mapped['projectId']);
        return '/v2/projects/' . $projectId . '/mail-addresses';
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
        if (isset($mapped['search'])) {
            $query['search'] = $mapped['search'];
        }
        if (isset($mapped['forwardAddress'])) {
            $query['forwardAddress'] = $mapped['forwardAddress'];
        }
        if (isset($mapped['catchAll'])) {
            $query['catchAll'] = $mapped['catchAll'];
        }
        if (isset($mapped['autoResponder'])) {
            $query['autoResponder'] = $mapped['autoResponder'];
        }
        if (isset($mapped['mailArchive'])) {
            $query['mailArchive'] = $mapped['mailArchive'];
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
