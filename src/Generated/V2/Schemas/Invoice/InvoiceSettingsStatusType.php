<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Invoice;

enum InvoiceSettingsStatusType: string
{
    case returnDebitNote = 'returnDebitNote';
    case returnDebitNoteWaitingForPayment = 'returnDebitNoteWaitingForPayment';
    case debtWrittenOff = 'debtWrittenOff';
    case bankrupt = 'bankrupt';
}
