<?php

namespace Mittwald\ApiClient\Generated\V2\Schemas\App;

enum AppInstallationStatusState: string {
    case running = 'running';
    case stopped = 'stopped';
    case exited = 'exited';
}
