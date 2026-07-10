<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Domainmigration;

enum DomainMigrationWarningReason: string
{
    case subdomainInvalidIngressHostname = 'subdomainInvalidIngressHostname';
    case subdomainInvalidDnsName = 'subdomainInvalidDnsName';
    case subdomainNsRecordsOverridden = 'subdomainNsRecordsOverridden';
    case registrantPhoneNeedsEpp = 'registrantPhoneNeedsEpp';
}
