<?php

namespace Mittwald\ApiClient\Generated\V2\Clients\User\PostPollStatus;

enum PostPollStatusRequestBodyStatus: string
{
    case completed = 'completed';
    case muted = 'muted';
    case ignored = 'ignored';
}
