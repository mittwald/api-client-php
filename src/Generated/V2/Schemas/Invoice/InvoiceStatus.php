<?php

namespace Mittwald\ApiClient\Generated\V2\Schemas\Invoice;

enum InvoiceStatus: string
{
    case NEW = 'NEW';
    case CONFIRMED = 'CONFIRMED';
    case DENIED = 'DENIED';
    case PAID = 'PAID';
    case PARTIALLY_PAID = 'PARTIALLY_PAID';
    case OVERPAID = 'OVERPAID';
}
