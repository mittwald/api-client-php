<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Activitylog;

enum ContainerLifecycleName: string
{
    case containerstarted = 'container.started';
    case containerstopped = 'container.stopped';
    case containerrestarted = 'container.restarted';
    case containerrecreated = 'container.recreated';
}
