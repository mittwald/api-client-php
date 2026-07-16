<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Domainmigration;

enum DomainNotMigratableReason: string
{
    case needEpp = 'needEpp';
    case tldNotSupported = 'tldNotSupported';
    case tldNotMigratable = 'tldNotMigratable';
    case premiumDomain = 'premiumDomain';
    case registrarNotSupported = 'registrarNotSupported';
    case notOrderable = 'notOrderable';
    case insufficientState = 'insufficientState';
    case contractDateOutOfRange = 'contractDateOutOfRange';
    case invalidDomainName = 'invalidDomainName';
    case ownerContactInvalid = 'ownerContactInvalid';
}
