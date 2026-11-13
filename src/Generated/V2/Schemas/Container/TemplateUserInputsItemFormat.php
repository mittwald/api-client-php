<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Container;

enum TemplateUserInputsItemFormat: string
{
    case email = 'email';
    case password = 'password';
    case url = 'url';
    case textarea = 'textarea';
}
