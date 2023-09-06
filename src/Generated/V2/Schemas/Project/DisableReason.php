<?php

namespace Mittwald\ApiClient\Generated\V2\Schemas\Project;

enum DisableReason: string
{
    case maliciousCode = 'maliciousCode';
    case illegalContent = 'illegalContent';
    case maliciousConduct = 'maliciousConduct';
    case suspended = 'suspended';
}
