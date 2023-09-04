<?php

namespace Mittwald\ApiClient\Generated\V2\Schemas\Cronjob;

enum CronjobExecutionStatus: string {
    case Complete = 'Complete';
    case Failed = 'Failed';
    case AbortedBySystem = 'AbortedBySystem';
    case Pending = 'Pending';
    case Running = 'Running';
    case AbortedByUser = 'AbortedByUser';
}
