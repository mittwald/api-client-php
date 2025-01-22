<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionCreateContributorOnboardingProcess;

use InvalidArgumentException;
use JsonSchema\Validator;

class ExtensionCreateContributorOnboardingProcessCreatedResponseBody
{
    /**
     * Schema used to validate input for creating instances of this class
     */
    private static array $schema = [
        'properties' => [
            'contributorId' => [
                'format' => 'uuid',
                'type' => 'string',
            ],
            'onboardingLink' => [
                'type' => 'string',
            ],
        ],
        'type' => 'object',
    ];

    private ?string $contributorId = null;

    private ?string $onboardingLink = null;

    /**
     *
     */
    public function __construct()
    {
    }

    public function getContributorId(): ?string
    {
        return $this->contributorId ?? null;
    }

    public function getOnboardingLink(): ?string
    {
        return $this->onboardingLink ?? null;
    }

    public function withContributorId(string $contributorId): self
    {
        $validator = new Validator();
        $validator->validate($contributorId, self::$schema['properties']['contributorId']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->contributorId = $contributorId;

        return $clone;
    }

    public function withoutContributorId(): self
    {
        $clone = clone $this;
        unset($clone->contributorId);

        return $clone;
    }

    public function withOnboardingLink(string $onboardingLink): self
    {
        $validator = new Validator();
        $validator->validate($onboardingLink, self::$schema['properties']['onboardingLink']);
        if (!$validator->isValid()) {
            throw new InvalidArgumentException($validator->getErrors()[0]['message']);
        }

        $clone = clone $this;
        $clone->onboardingLink = $onboardingLink;

        return $clone;
    }

    public function withoutOnboardingLink(): self
    {
        $clone = clone $this;
        unset($clone->onboardingLink);

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return ExtensionCreateContributorOnboardingProcessCreatedResponseBody Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): ExtensionCreateContributorOnboardingProcessCreatedResponseBody
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $contributorId = null;
        if (isset($input->{'contributorId'})) {
            $contributorId = $input->{'contributorId'};
        }
        $onboardingLink = null;
        if (isset($input->{'onboardingLink'})) {
            $onboardingLink = $input->{'onboardingLink'};
        }

        $obj = new self();
        $obj->contributorId = $contributorId;
        $obj->onboardingLink = $onboardingLink;
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
        if (isset($this->contributorId)) {
            $output['contributorId'] = $this->contributorId;
        }
        if (isset($this->onboardingLink)) {
            $output['onboardingLink'] = $this->onboardingLink;
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
    }
}
