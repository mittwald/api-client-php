<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateProjectMailSetting;

enum UpdateProjectMailSettingRequestMailSetting: string
{
    case blacklist = 'blacklist';
    case whitelist = 'whitelist';
}
