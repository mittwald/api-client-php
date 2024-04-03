<?php

namespace Mittwald\ApiClient\Tests\Generated\V2\Clients\App\RequestAppinstallation;

use Mittwald\ApiClient\Generated\V2\Clients\App\RequestAppinstallation\RequestAppinstallationRequestBody;
use Mittwald\ApiClient\Generated\V2\Schemas\App\AppUpdatePolicy;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use function PHPUnit\Framework\assertThat;
use function PHPUnit\Framework\countOf;
use function PHPUnit\Framework\equalTo;

#[CoversClass(RequestAppinstallationRequestBody::class)]
class RequestAppinstallationRequestBodyTest extends TestCase
{
    public function testCanConstructFromInput(): void
    {
        $input       = [
            'appVersionId' => '223669ff-a9ef-4ee3-86ca-9b1957984c90',
            'description'  => 'Test',
            'updatePolicy' => AppUpdatePolicy::none->value,
            'userInputs'   => [[
                'name'  => 'testname',
                'value' => 'testvalue',
            ]],
        ];
        $requestBody = RequestAppinstallationRequestBody::buildFromInput($input);

        assertThat($requestBody->getAppVersionId(), equalTo('223669ff-a9ef-4ee3-86ca-9b1957984c90'));
        assertThat($requestBody->getDescription(), equalTo('Test'));
        assertThat($requestBody->getUpdatePolicy(), equalTo(AppUpdatePolicy::none));
        assertThat($requestBody->getUserInputs(), countOf(1));
        assertThat($requestBody->getUserInputs()[0]->getName(), equalTo('testname'));
        assertThat($requestBody->getUserInputs()[0]->getValue(), equalTo('testvalue'));
    }

    public static function invalidInput(): array
    {
        return [
            "missing app version id" => [[
                'description'  => 'Test',
                'updatePolicy' => 'none',
                'userInputs'   => [],
            ]],
            "invalid update policy" => [[
                'appVersionId' => '223669ff-a9ef-4ee3-86ca-9b1957984c90',
                'description'  => 'Test',
                'updatePolicy' => 'invalid',
                'userInputs'   => [],
            ]],
        ];
    }

    #[DataProvider('invalidInput')]
    public function testCanNotConstructFromInputWithInvalidUpdatePolicy(array $input): void
    {
        $this->expectException(\Throwable::class);
        RequestAppinstallationRequestBody::buildFromInput($input);
    }
}