<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Dns;

enum ImportRecordSetType: string
{
    case a = 'a';
    case mx = 'mx';
    case txt = 'txt';
    case cname = 'cname';
    case srv = 'srv';
    case caa = 'caa';
}
