<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Domain\DnsUpdateRecordSet;

enum DnsUpdateRecordSetRequestRecordSet: string
{
    case a = 'a';
    case mx = 'mx';
    case txt = 'txt';
    case srv = 'srv';
    case cname = 'cname';
}
