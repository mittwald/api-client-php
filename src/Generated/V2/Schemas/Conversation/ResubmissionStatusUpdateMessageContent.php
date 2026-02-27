<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\Conversation;

enum ResubmissionStatusUpdateMessageContent: string
{
    case RESUBMISSIONCREATED = 'RESUBMISSION_CREATED';
    case RESUBMISSIONRESUBMITATCHANGED = 'RESUBMISSION_RESUBMIT_AT_CHANGED';
}
