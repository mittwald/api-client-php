<?php

namespace Mittwald\ApiClient\Generated\V2\Schemas\Article;

enum ArticleTemplateType: string {
    case miscellaneous = 'miscellaneous';
    case base = 'base';
    case additional = 'additional';
    case modifier = 'modifier';
    case setup_fee = 'setup_fee';
}
