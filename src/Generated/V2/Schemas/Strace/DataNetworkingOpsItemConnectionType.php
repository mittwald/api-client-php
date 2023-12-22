<?php

namespace Mittwald\ApiClient\Generated\V2\Schemas\Strace;

enum DataNetworkingOpsItemConnectionType: string
{
    case UNKNOWN = 'UNKNOWN';
    case PRIVATE = 'PRIVATE';
    case INTERNAL = 'INTERNAL';
    case EXTERNAL = 'EXTERNAL';
}
