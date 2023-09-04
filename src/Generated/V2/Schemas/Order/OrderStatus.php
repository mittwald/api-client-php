<?php

namespace Mittwald\ApiClient\Generated\V2\Schemas\Order;

enum OrderStatus: string {
    case NEW = 'NEW';
    case CONFIRMED = 'CONFIRMED';
    case REJECTED = 'REJECTED';
    case ABORTED = 'ABORTED';
    case EXECUTED = 'EXECUTED';
}
