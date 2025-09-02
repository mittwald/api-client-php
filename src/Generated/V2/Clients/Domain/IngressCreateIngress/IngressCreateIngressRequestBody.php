<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Domain\IngressCreateIngress;

use InvalidArgumentException;
use JsonSchema\Validator;
use Mittwald\ApiClient\Generated\V2\Schemas\Ingress\Path;

class IngressCreateIngressRequestBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'properties' => [
            'hostname' => [
                'format' => 'idn-hostname',
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

    private string $hostname;

    /**
     * A list of paths. The default path `/` is always present and cannot be removed.
     *
     * @var Path[]
     */
    private array $paths;

    private string $projectId;

    /**
     * @param Path[] $paths
     */
    public function __construct(string $hostname, array $paths, string $projectId)
    {
        $this->hostname = $hostname;
        $this->paths = $paths;
        $this->projectId = $projectId;
    }

    public function getHostname(): string
    {
        return $this->hostname;
    }

    /**
     * @return Path[]
     */
    public function getPaths(): array
    {
        return $this->paths;
    }

    public function getProjectId(): string
    {
        return $this->projectId;
    }

    public function withHostname(string $hostname): self
    {
        $validator = new Validator();
        $validator->validate($hostname, self::$internalValidationSchema['properties']['hostname']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->hostname = $hostname;

        return $clone;
    }

    /**
     * @param Path[] $paths
     */
    public function withPaths(array $paths): self
    {
        $clone = clone $this;
        $clone->paths = $paths;

        return $clone;
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

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return IngressCreateIngressRequestBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): IngressCreateIngressRequestBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $hostname = $input->{'hostname'};
        $paths = array_map(fn (array|object $i): Path => Path::buildFromInput($i, validate: $validate), $input->{'paths'});
        $projectId = $input->{'projectId'};

        $obj = new self($hostname, $paths, $projectId);

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
        $output['hostname'] = $this->hostname;
        $output['paths'] = array_map(fn (Path $i): array => $i->toJson(), $this->paths);
        $output['projectId'] = $this->projectId;

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
}
