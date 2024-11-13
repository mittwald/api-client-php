<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\File\GetFileWithName;

enum GetFileWithNameRequestContentDisposition: string
{
    case inline = 'inline';
    case attachment = 'attachment';
}
