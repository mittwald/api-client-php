<?php

namespace Mittwald\ApiClient\Generated\V2\Schemas\Order;

enum OrderType: string {
    case NEW_ORDER = 'NEW_ORDER';
    case CONTRACT_CHANGE = 'CONTRACT_CHANGE';
}
