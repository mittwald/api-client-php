<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Ssl;

enum ProjectCertificateStatus: string
{
    case issuing = 'issuing';
    case ready = 'ready';
    case cnameerror = 'cname_error';
    case error = 'error';
    case undefined = 'undefined';
}
