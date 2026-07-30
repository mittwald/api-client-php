<?php

namespace Mittwald\ApiClient\Tests\Generated\V2\Clients\App\PatchAppinstallation;

use Mittwald\ApiClient\Generated\V2\Clients\App\PatchAppinstallation\PatchAppinstallationRequestBody;
use Mittwald\ApiClient\Generated\V2\Schemas\App\DesiredSystemSoftware;
use Mittwald\ApiClient\Generated\V2\Schemas\App\SystemSoftwareUpdatePolicy;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;
use function PHPUnit\Framework\assertThat;
use function PHPUnit\Framework\equalTo;

/**
 * Regression tests for https://github.com/mittwald/api-client-php/issues/20
 *
 * withSystemSoftware() was throwing UnresolvableJsonPointerException when
 * passed a non-empty map, because the property's validation schema slice
 * contained a $ref that could not be resolved without the full OpenAPI document.
 */
#[CoversClass(PatchAppinstallationRequestBody::class)]
class PatchAppinstallationRequestBodyTest extends TestCase
{
    public function testWithSystemSoftwareDoesNotThrowForNonEmptyMap(): void
    {
        $softwareVersionId = 'a1b2c3d4-e5f6-7890-abcd-ef1234567890';

        $desiredSoftware = (new DesiredSystemSoftware())
            ->withSystemSoftwareVersion($softwareVersionId)
            ->withUpdatePolicy(SystemSoftwareUpdatePolicy::patchLevel);

        $body = (new PatchAppinstallationRequestBody())
            ->withSystemSoftware([$softwareVersionId => $desiredSoftware]);

        assertThat(
            array_keys($body->getSystemSoftware()),
            equalTo([$softwareVersionId]),
        );
    }

    public function testWithSystemSoftwareAcceptsEmptyMap(): void
    {
        $body = (new PatchAppinstallationRequestBody())
            ->withSystemSoftware([]);

        assertThat($body->getSystemSoftware(), equalTo([]));
    }
}
