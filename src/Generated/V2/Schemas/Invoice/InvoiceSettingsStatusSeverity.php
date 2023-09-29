<?php

namespace Mittwald\ApiClient\Generated\V2\Schemas\Invoice;

enum InvoiceSettingsStatusSeverity: string
{
    case success = 'success';
    case info = 'info';
    case warning = 'warning';
    case error = 'error';
}
