<?php

namespace Mittwald\ApiClient\Generated\V2\Schemas\App;

enum AppInstallationLifecycle: string
{
    case installation = 'installation';
    case update = 'update';
    case reconfigure = 'reconfigure';
}
