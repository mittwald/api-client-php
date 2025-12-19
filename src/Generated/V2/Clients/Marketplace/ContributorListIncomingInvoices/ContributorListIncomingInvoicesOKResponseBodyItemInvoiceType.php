<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ContributorListIncomingInvoices;

enum ContributorListIncomingInvoicesOKResponseBodyItemInvoiceType: string
{
    case REGULAR = 'REGULAR';
    case CORRECTION = 'CORRECTION';
    case REISSUE = 'REISSUE';
    case CANCELLATION = 'CANCELLATION';
}
