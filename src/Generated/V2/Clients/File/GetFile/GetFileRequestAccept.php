<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\File\GetFile;

enum GetFileRequestAccept: string
{
    case applicationoctetstream = 'application/octet-stream';
    case textplainbase64 = 'text/plain;base64';
}
