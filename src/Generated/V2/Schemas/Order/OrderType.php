<?php

namespace Mittwald\ApiClient\Generated\V2\Schemas\Order;

enum OrderType: string
{
    case NEWORDER = 'NEW_ORDER';
    case CONTRACTCHANGE = 'CONTRACT_CHANGE';
}
