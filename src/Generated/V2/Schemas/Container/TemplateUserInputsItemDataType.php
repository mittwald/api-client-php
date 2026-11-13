<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Container;

enum TemplateUserInputsItemDataType: string
{
    case text = 'text';
    case boolean = 'boolean';
    case consent = 'consent';
    case select = 'select';
}
