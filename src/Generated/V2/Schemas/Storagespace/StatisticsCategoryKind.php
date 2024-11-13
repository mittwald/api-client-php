<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Storagespace;

enum StatisticsCategoryKind: string
{
    case webspace = 'webspace';
    case projectBackup = 'projectBackup';
    case mailAddress = 'mailAddress';
    case mysqlDatabase = 'mysqlDatabase';
    case redisDatabase = 'redisDatabase';
    case containerVolume = 'containerVolume';
}
