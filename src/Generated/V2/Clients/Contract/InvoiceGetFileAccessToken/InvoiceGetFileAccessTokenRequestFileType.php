<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Contract\InvoiceGetFileAccessToken;

enum InvoiceGetFileAccessTokenRequestFileType: string
{
    case PDF = 'PDF';
    case XRECHNUNG = 'XRECHNUNG';
}
