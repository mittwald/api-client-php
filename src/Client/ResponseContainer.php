<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Client;

use Psr\Http\Message\ResponseInterface;

interface ResponseContainer
{
    public function getResponse(): ?ResponseInterface;
}
