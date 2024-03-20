<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\App;

enum Action: string
{
    case start = 'start';
    case stop = 'stop';
    case restart = 'restart';
}
