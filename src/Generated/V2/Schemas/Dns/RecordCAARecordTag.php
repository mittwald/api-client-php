<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Dns;

enum RecordCAARecordTag: string
{
    case issue = 'issue';
    case issuewild = 'issuewild';
    case iodef = 'iodef';
}
