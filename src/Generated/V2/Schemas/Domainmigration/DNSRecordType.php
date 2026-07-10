<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Domainmigration;

enum DNSRecordType: string
{
    case A = 'A';
    case AAAA = 'AAAA';
    case TXT = 'TXT';
    case MX = 'MX';
    case CNAME = 'CNAME';
    case SRV = 'SRV';
    case CAA = 'CAA';
    case NS = 'NS';
}
