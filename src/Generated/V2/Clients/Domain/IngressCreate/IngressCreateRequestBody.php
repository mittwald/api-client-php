<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressCreate;

class IngressCreateRequestBody
{
    public const method = 'post';

    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'hostname' => [
                'format' => 'hostname',
                'type' => 'string',
            ],
            'paths' => [
                'description' => 'A list of paths. The default path `/` is always present and cannot be removed.',
                'items' => [
                    '$ref' => '#/components/schemas/de.mittwald.v1.ingress.Path',
                ],
                'type' => 'array',
            ],
            'projectId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
        ],
        'required' => [
            'hostname',
            'projectId',
            'paths',
        ],
        'type' => 'object',
    ];

    /**
     * @var string
     */
    private string $hostname;

    /**
     * A list of paths. The default path `/` is always present and cannot be removed.
     *
     * @var \Mittwald\ApiClient\Generated\V2\Schemas\Ingress\Path[]
     */
    private array $paths;

    /**
     * @var string
     */
    private string $projectId;

    private array $headers = [
        
    ];

    /**
     * @param string $hostname
     * @param \Mittwald\ApiClient\Generated\V2\Schemas\Ingress\Path[] $paths
     * @param string $projectId
     */
    public function __construct(string $hostname, array $paths, string $projectId)
    {
        $this->hostname = $hostname;
        $this->paths = $paths;
        $this->projectId = $projectId;
    }

    /**
     * @return string
     */
    public function getHostname() : string
    {
        return $this->hostname;
    }

    /**
     * @return \Mittwald\ApiClient\Generated\V2\Schemas\Ingress\Path[]
     */
    public function getPaths() : array
    {
        return $this->paths;
    }

    /**
     * @return string
     */
    public function getProjectId() : string
    {
        return $this->projectId;
    }

    /**
     * @param string $hostname
     * @return self
     */
    public function withHostname(string $hostname) : self
    {
        $validator = new \JsonSchema\Validator();
        $validator->validate($hostname, static::$schema['properties']['hostname']);
        if (!$validator->isValid()) {
            throw new \InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->hostname = $hostname;

        return $clone;
    }

    /**
     * @param \Mittwald\ApiClient\Generated\V2\Schemas\Ingress\Path[] $paths
     * @return self
     */
    public function withPaths(array $paths) : self
    {
        $clone = clone $this;
        $clone->paths = $paths;

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
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return IngressCreateRequestBody Created instance
     * @throws \InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true) : IngressCreateRequestBody
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $hostname = $input->{'hostname'};
        $paths = array_map(fn(array $i): \Mittwald\ApiClient\Generated\V2\Schemas\Ingress\Path => \Mittwald\ApiClient\Generated\V2\Schemas\Ingress\Path::buildFromInput($i, validate: $validate), $input->{'paths'});
        $projectId = $input->{'projectId'};

        $obj = new self($hostname, $paths, $projectId);

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
        $output['hostname'] = $this->hostname;
        $output['paths'] = array_map(fn(\Mittwald\ApiClient\Generated\V2\Schemas\Ingress\Path $i): array => $i->toJson(), $this->paths);
        $output['projectId'] = $this->projectId;

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

    public function getUrl() : string
    {
        $mapped = $this->toJson();
        return '/v2/ingresses/';
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

