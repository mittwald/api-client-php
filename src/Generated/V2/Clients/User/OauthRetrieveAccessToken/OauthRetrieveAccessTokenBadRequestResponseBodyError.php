<?php

namespace Mittwald\ApiClient\Generated\V2\Clients\User\OauthRetrieveAccessToken;

enum OauthRetrieveAccessTokenBadRequestResponseBodyError: string
{
    case invalidrequest = 'invalid_request';
    case invalidclient = 'invalid_client';
    case invalidgrant = 'invalid_grant';
    case unauthorizedclient = 'unauthorized_client';
    case unsupportedgranttype = 'unsupported_grant_type';
    case invalidscope = 'invalid_scope';
}
