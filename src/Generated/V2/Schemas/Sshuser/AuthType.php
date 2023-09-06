<?php

namespace Mittwald\ApiClient\Generated\V2\Schemas\Sshuser;

enum AuthType: string
{
    case password = 'password';
    case publicKey = 'publicKey';
}
