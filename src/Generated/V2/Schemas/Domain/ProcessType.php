<?php

namespace Mittwald\ApiClient\Generated\V2\Schemas\Domain;

enum ProcessType: string
{
    case UNSPECIFIED = 'UNSPECIFIED';
    case REGISTER = 'REGISTER';
    case TRANSFER = 'TRANSFER';
    case DELETE = 'DELETE';
    case TRANSIT = 'TRANSIT';
    case RESTORE = 'RESTORE';
    case UPDATE = 'UPDATE';
    case TRANSFER_OUT = 'TRANSFER_OUT';
    case OWNER_CHANGE = 'OWNER_CHANGE';
    case DECLARE_REQUESTED = 'DECLARE_REQUESTED';
}
