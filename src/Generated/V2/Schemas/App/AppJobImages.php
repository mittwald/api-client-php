<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\App;

use InvalidArgumentException;
use JsonSchema\Validator;

class AppJobImages
{
    /**
     * Schema used to validate input for creating instances of this class
     *
     * @var array
     */
    private static array $schema = [
        'properties' => [
            'reconfigureImage' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.app.AppJobImage',
            ],
            'setupImage' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.app.AppJobImage',
            ],
            'uninstallImage' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.app.AppJobImage',
            ],
            'upgradeImage' => [
                '$ref' => '#/components/schemas/de.mittwald.v1.app.AppJobImage',
            ],
        ],
        'required' => [
            'setupImage',
            'upgradeImage',
            'uninstallImage',
            'reconfigureImage',
        ],
        'type' => 'object',
    ];

    /**
     * @var AppJobImage
     */
    private AppJobImage $reconfigureImage;

    /**
     * @var AppJobImage
     */
    private AppJobImage $setupImage;

    /**
     * @var AppJobImage
     */
    private AppJobImage $uninstallImage;

    /**
     * @var AppJobImage
     */
    private AppJobImage $upgradeImage;

    /**
     * @param AppJobImage $reconfigureImage
     * @param AppJobImage $setupImage
     * @param AppJobImage $uninstallImage
     * @param AppJobImage $upgradeImage
     */
    public function __construct(AppJobImage $reconfigureImage, AppJobImage $setupImage, AppJobImage $uninstallImage, AppJobImage $upgradeImage)
    {
        $this->reconfigureImage = $reconfigureImage;
        $this->setupImage = $setupImage;
        $this->uninstallImage = $uninstallImage;
        $this->upgradeImage = $upgradeImage;
    }

    /**
     * @return AppJobImage
     */
    public function getReconfigureImage(): AppJobImage
    {
        return $this->reconfigureImage;
    }

    /**
     * @return AppJobImage
     */
    public function getSetupImage(): AppJobImage
    {
        return $this->setupImage;
    }

    /**
     * @return AppJobImage
     */
    public function getUninstallImage(): AppJobImage
    {
        return $this->uninstallImage;
    }

    /**
     * @return AppJobImage
     */
    public function getUpgradeImage(): AppJobImage
    {
        return $this->upgradeImage;
    }

    /**
     * @param AppJobImage $reconfigureImage
     * @return self
     */
    public function withReconfigureImage(AppJobImage $reconfigureImage): self
    {
        $clone = clone $this;
        $clone->reconfigureImage = $reconfigureImage;

        return $clone;
    }

    /**
     * @param AppJobImage $setupImage
     * @return self
     */
    public function withSetupImage(AppJobImage $setupImage): self
    {
        $clone = clone $this;
        $clone->setupImage = $setupImage;

        return $clone;
    }

    /**
     * @param AppJobImage $uninstallImage
     * @return self
     */
    public function withUninstallImage(AppJobImage $uninstallImage): self
    {
        $clone = clone $this;
        $clone->uninstallImage = $uninstallImage;

        return $clone;
    }

    /**
     * @param AppJobImage $upgradeImage
     * @return self
     */
    public function withUpgradeImage(AppJobImage $upgradeImage): self
    {
        $clone = clone $this;
        $clone->upgradeImage = $upgradeImage;

        return $clone;
    }

    /**
     * Builds a new instance from an input array
     *
     * @param array|object $input Input data
     * @param bool $validate Set this to false to skip validation; use at own risk
     * @return AppJobImages Created instance
     * @throws InvalidArgumentException
     */
    public static function buildFromInput(array|object $input, bool $validate = true): AppJobImages
    {
        $input = is_array($input) ? Validator::arrayToObjectRecursive($input) : $input;
        if ($validate) {
            static::validateInput($input);
        }

        $reconfigureImage = AppJobImage::buildFromInput($input->{'reconfigureImage'}, validate: $validate);
        $setupImage = AppJobImage::buildFromInput($input->{'setupImage'}, validate: $validate);
        $uninstallImage = AppJobImage::buildFromInput($input->{'uninstallImage'}, validate: $validate);
        $upgradeImage = AppJobImage::buildFromInput($input->{'upgradeImage'}, validate: $validate);

        $obj = new self($reconfigureImage, $setupImage, $uninstallImage, $upgradeImage);

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
        $output['reconfigureImage'] = $this->reconfigureImage->toJson();
        $output['setupImage'] = $this->setupImage->toJson();
        $output['uninstallImage'] = $this->uninstallImage->toJson();
        $output['upgradeImage'] = $this->upgradeImage->toJson();

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
    }
}
