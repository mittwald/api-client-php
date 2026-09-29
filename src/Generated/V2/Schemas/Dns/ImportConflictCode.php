<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Dns;

enum ImportConflictCode: string
{
    case parseError = 'parseError';
    case invalidRecord = 'invalidRecord';
    case invalidZoneName = 'invalidZoneName';
    case unsupportedRecordType = 'unsupportedRecordType';
    case cnameConflict = 'cnameConflict';
    case foreignCustomerIngress = 'foreignCustomerIngress';
    case rootZoneUnavailable = 'rootZoneUnavailable';
}
