<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Domain;

enum ProcessState: string
{
    case UNSPECIFIED = 'UNSPECIFIED';
    case REQUESTED = 'REQUESTED';
    case FAILED = 'FAILED';
}
