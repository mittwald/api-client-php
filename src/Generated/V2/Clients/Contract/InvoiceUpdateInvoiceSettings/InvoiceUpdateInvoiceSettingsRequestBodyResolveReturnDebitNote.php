<?php

namespace Mittwald\ApiClient\Generated\V2\Clients\Contract\InvoiceUpdateInvoiceSettings;

enum InvoiceUpdateInvoiceSettingsRequestBodyResolveReturnDebitNote: string
{
    case invoicePayment = 'invoicePayment';
    case retryDebit = 'retryDebit';
}
