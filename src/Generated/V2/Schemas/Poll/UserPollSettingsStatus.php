<?php

namespace Mittwald\ApiClient\Generated\V2\Schemas\Poll;

enum UserPollSettingsStatus: string
{
    case completed = 'completed';
    case muted = 'muted';
    case ignored = 'ignored';
    case new = 'new';
}
