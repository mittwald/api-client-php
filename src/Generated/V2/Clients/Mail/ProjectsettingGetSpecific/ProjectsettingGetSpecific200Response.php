<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Mail\ProjectsettingGetSpecific;

class ProjectsettingGetSpecific200Response
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'type' => 'object',
        'required' => [
            'body',
        ],
        'properties' => [
            'body' => [
                'properties' => [
                    'blacklist' => [
                        'items' => [
                            'format' => 'email',
                            'type' => 'string',
                        ],
                        'type' => 'array',
                    ],
                    'projectId' => [
                        'type' => 'string',
                    ],
                    'whitelist' => [
                        'items' => [
                            'format' => 'email',
                            'type' => 'string',
                        ],
                        'type' => 'array',
                    ],
                ],
                'required' => [
                    'projectId',
                    'blacklist',
                    'whitelist',
                ],
                'type' => 'object',
            ],
        ],
    ];

    /**
     * @var ProjectsettingGetSpecific200ResponseBody
     */
    private ProjectsettingGetSpecific200ResponseBody $body;

    public \Psr\Http\Message\ResponseInterface|null $httpResponse = null;

    /**
     * @param ProjectsettingGetSpecific200ResponseBody $body
     */
    public function __construct(ProjectsettingGetSpecific200ResponseBody $body)
    {
        $this->body = $body;
    }

    /**
     * @return ProjectsettingGetSpecific200ResponseBody
     */
    public function getBody() : ProjectsettingGetSpecific200ResponseBody
    {
        return $this->body;
    }

    /**
     * @param ProjectsettingGetSpecific200ResponseBody $body
     * @return self
     */
    public function withBody(ProjectsettingGetSpecific200ResponseBody $body) : self
    {
        $clone = clone $this;
        $clone->body = $body;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return ProjectsettingGetSpecific200Response Created instance
     * @throws \InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true) : ProjectsettingGetSpecific200Response
    {
        $input = is_array($input) ? \JsonSchema\Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $body = ProjectsettingGetSpecific200ResponseBody::buildFromInput($input->{'body'}, validate: $validate);

        $obj = new self($body);

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
        $output['body'] = ($this->body)->toJson();

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
        $this->body = clone $this->body;
    }

    public static function fromResponse(\Psr\Http\Message\ResponseInterface $httpResponse) : self
    {
        $parsedBody = json_decode($httpResponse->getBody()->getContents(), associative: true);
        $response = static::buildFromInput(['body' => $parsedBody], validate: false);
        $response->httpResponse = $httpResponse;
        return $response;
    }
}

