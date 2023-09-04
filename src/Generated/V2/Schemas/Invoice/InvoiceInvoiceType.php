<?php

namespace Mittwald\ApiClient\Generated\V2\Schemas\Invoice;

enum InvoiceInvoiceType: string {
    case REGULAR = 'REGULAR';
    case REISSUE = 'REISSUE';
    case CORRECTION = 'CORRECTION';
    case CANCELLATION = 'CANCELLATION';
}
