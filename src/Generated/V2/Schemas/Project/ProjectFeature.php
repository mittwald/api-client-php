<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Project;

enum ProjectFeature: string
{
    case redis = 'redis';
    case node = 'node';
    case container = 'container';
}
