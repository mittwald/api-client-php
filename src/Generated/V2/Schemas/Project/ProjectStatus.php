<?php

namespace Mittwald\ApiClient\Generated\V2\Schemas\Project;

enum ProjectStatus: string
{
    case pending = 'pending';
    case ready = 'ready';
    case preparingForVolumeMigration = 'preparingForVolumeMigration';
    case migratingVolume = 'migratingVolume';
    case error = 'error';
    case disabled = 'disabled';
}
