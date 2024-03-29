<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\App;

enum UserInputDataType: string
{
    case text = 'text';
    case number = 'number';
    case boolean = 'boolean';
    case select = 'select';
}
