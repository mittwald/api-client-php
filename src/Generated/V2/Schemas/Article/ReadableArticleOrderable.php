<?php

namespace Mittwald\ApiClient\Generated\V2\Schemas\Article;

enum ReadableArticleOrderable: string {
    case forbidden = 'forbidden';
    case internal = 'internal';
    case beta_testing = 'beta_testing';
    case full = 'full';
    case deprecated = 'deprecated';
}
