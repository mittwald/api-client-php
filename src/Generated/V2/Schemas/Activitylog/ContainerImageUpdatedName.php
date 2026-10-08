<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Activitylog;

enum ContainerImageUpdatedName: string
{
    case containerimageupdated = 'container.image-updated';
    case containerimagepulled = 'container.image-pulled';
}
