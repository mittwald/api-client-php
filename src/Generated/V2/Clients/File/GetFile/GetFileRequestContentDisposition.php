<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\File\GetFile;

enum GetFileRequestContentDisposition: string
{
    case inline = 'inline';
    case attachment = 'attachment';
}
