<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Schemas\User;

enum UserFeedbackSpotlightDecision: string
{
    case keep = 'keep';
    case kill = 'kill';
    case ignore = 'ignore';
    case unknown = '__unknown__';
}
