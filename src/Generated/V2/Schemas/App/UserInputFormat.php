<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\App;

enum UserInputFormat: string
{
    case email = 'email';
    case password = 'password';
    case url = 'url';
    case uri = 'uri';
}
