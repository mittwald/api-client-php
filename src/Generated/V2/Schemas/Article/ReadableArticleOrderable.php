<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Article;

enum ReadableArticleOrderable: string
{
    case forbidden = 'forbidden';
    case internal = 'internal';
    case betatesting = 'beta_testing';
    case full = 'full';
    case deprecated = 'deprecated';
}
