<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Container;

enum ServiceResponseRestartPolicy: string
{
    case no = 'no';
    case always = 'always';
    case onfailure = 'on-failure';
    case unlessstopped = 'unless-stopped';
}
