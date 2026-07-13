<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\AIHosting\ProjectGetUsage;

use DateTime;
use InvalidArgumentException;
use JsonSchema\Validator;
use Mittwald\ApiClient\Generated\V2\Schemas\AIHosting\PlanUsage;

class ProjectGetUsageOKResponseBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $internalValidationSchema = [
        'properties' => [
            'keys' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.aihosting.PlanUsage',
            ],
            'modelTermsApprovalRequired' => [
                'type' => 'boolean',
            ],
            'name' => [
                'type' => 'string',
            ],
            'nextTokenReset' => [
                'format' => 'date-time',
                'type' => 'string',
            ],
            'projectId' => [
                'type' => 'string',
            ],
        ],
        'required' => [
            'keys',
            'projectId',
            'modelTermsApprovalRequired',
        ],
        'type' => 'object',
    ];

    private PlanUsage $keys;

    private bool $modelTermsApprovalRequired;

    private ?string $name = null;

    private ?DateTime $nextTokenReset = null;

    private string $projectId;

    public function __construct(PlanUsage $keys, bool $modelTermsApprovalRequired, string $projectId)
    {
        $this->keys = $keys;
        $this->modelTermsApprovalRequired = $modelTermsApprovalRequired;
        $this->projectId = $projectId;
    }

    public function getKeys(): PlanUsage
    {
        return $this->keys;
    }

    public function getModelTermsApprovalRequired(): bool
    {
        return $this->modelTermsApprovalRequired;
    }

    public function getName(): ?string
    {
        return $this->name ?? null;
    }

    public function getNextTokenReset(): ?DateTime
    {
        return $this->nextTokenReset ?? null;
    }

    public function getProjectId(): string
    {
        return $this->projectId;
    }

    public function withKeys(PlanUsage $keys): self
    {
        $clone = clone $this;
        $clone->keys = $keys;

        return $clone;
    }

    public function withModelTermsApprovalRequired(bool $modelTermsApprovalRequired): self
    {
        $validator = new Validator();
        $validator->validate($modelTermsApprovalRequired, self::$internalValidationSchema['properties']['modelTermsApprovalRequired']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->modelTermsApprovalRequired = $modelTermsApprovalRequired;

        return $clone;
    }

    public function withName(string $name): self
    {
        $validator = new Validator();
        $validator->validate($name, self::$internalValidationSchema['properties']['name']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->name = $name;

        return $clone;
    }

    public function withoutName(): self
    {
        $clone = clone $this;
        unset($clone->name);

        return $clone;
    }

    public function withNextTokenReset(DateTime $nextTokenReset): self
    {
        $clone = clone $this;
        $clone->nextTokenReset = $nextTokenReset;

        return $clone;
    }

    public function withoutNextTokenReset(): self
    {
        $clone = clone $this;
        unset($clone->nextTokenReset);

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
     * @return ProjectGetUsageOKResponseBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ProjectGetUsageOKResponseBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $keys = PlanUsage::buildFromInput($input->{'keys'}, validate: $validate);
        $modelTermsApprovalRequired = (bool)($input->{'modelTermsApprovalRequired'});
        $name = null;
        if (isset($input->{'name'})) {
            $name = $input->{'name'};
        }
        $nextTokenReset = null;
        if (isset($input->{'nextTokenReset'})) {
            $nextTokenReset = new DateTime($input->{'nextTokenReset'});
        }
        $projectId = $input->{'projectId'};

        $obj = new self($keys, $modelTermsApprovalRequired, $projectId);
        $obj->name = $name;
        $obj->nextTokenReset = $nextTokenReset;
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
        $output['keys'] = $this->keys->toJson();
        $output['modelTermsApprovalRequired'] = $this->modelTermsApprovalRequired;
        if (isset($this->name)) {
            $output['name'] = $this->name;
        }
        if (isset($this->nextTokenReset)) {
            $output['nextTokenReset'] = ($this->nextTokenReset)->format(DateTime::ATOM);
        }
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
        if (isset($this->nextTokenReset)) {
            $this->nextTokenReset = clone $this->nextTokenReset;
        }
    }
}
