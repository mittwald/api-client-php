<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\LeadFyndr\ListUnlockedLeads;

enum ListUnlockedLeadsRequestSort: string
{
    case potential = 'potential';
    case relevance = 'relevance';
    case company = 'company';
}
