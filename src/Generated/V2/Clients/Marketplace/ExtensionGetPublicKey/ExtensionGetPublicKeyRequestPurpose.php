<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Marketplace\ExtensionGetPublicKey;

enum ExtensionGetPublicKeyRequestPurpose: string
{
    case webhook = 'webhook';
    case sessiontoken = 'session_token';
}
