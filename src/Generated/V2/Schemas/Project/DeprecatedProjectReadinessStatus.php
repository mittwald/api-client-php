<?php

namespace Mittwald\ApiClient\Generated\V2\Schemas\Project;

enum DeprecatedProjectReadinessStatus: string
{
    case creating = 'creating';
    case ready = 'ready';
    case unready = 'unready';
}
