<?php

namespace Mittwald\ApiClient\Generated\V2\Schemas\App;

enum SystemSoftwareUpdatePolicy: string {
    case none = 'none';
    case inheritedFromApp = 'inheritedFromApp';
    case patchLevel = 'patchLevel';
    case all = 'all';
}
