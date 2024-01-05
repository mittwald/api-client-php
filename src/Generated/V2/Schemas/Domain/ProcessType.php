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
    case TRANSFEROUT = 'TRANSFER_OUT';
    case OWNERCHANGE = 'OWNER_CHANGE';
    case DECLAREREQUESTED = 'DECLARE_REQUESTED';
}
