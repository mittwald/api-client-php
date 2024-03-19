<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\User\CreateFeedback;

enum CreateFeedbackRequestBodyType: string
{
    case feedback = 'feedback';
    case bug = 'bug';
}
