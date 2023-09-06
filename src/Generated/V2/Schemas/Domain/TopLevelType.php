<?php

namespace Mittwald\ApiClient\Generated\V2\Schemas\Domain;

enum TopLevelType: string
{
    case unknown = 'unknown';
    case countryCode = 'countryCode';
    case generic = 'generic';
    case newGeneric = 'newGeneric';
    case centralNic = 'centralNic';
    case other = 'other';
}
