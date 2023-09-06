<?php

namespace Mittwald\ApiClient\Generated\V2\Clients\Mail;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;
use Mittwald\ApiClient\Client\EmptyResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeliveryboxCreate\DeliveryboxCreate201Response;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeliveryboxCreate\DeliveryboxCreateRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeliveryboxDelete\DeliveryboxDeleteRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeliveryboxGetSpecific\DeliveryboxGetSpecific200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeliveryboxGetSpecific\DeliveryboxGetSpecificRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeliveryboxList\DeliveryboxList200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeliveryboxList\DeliveryboxListRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeliveryboxUpdateDescription\DeliveryboxUpdateDescriptionRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeliveryboxUpdatePassword\DeliveryboxUpdatePasswordRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\MailaddressCreate\MailaddressCreate201Response;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\MailaddressCreate\MailaddressCreate400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\MailaddressCreate\MailaddressCreateRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\MailaddressDelete\MailaddressDeleteRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\MailaddressGetSpecific\MailaddressGetSpecific200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\MailaddressGetSpecific\MailaddressGetSpecificRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\MailaddressList\MailaddressList200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\MailaddressList\MailaddressListRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\MailaddressUpdateAddress\MailaddressUpdateAddressRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\MailaddressUpdateAutoresponder\MailaddressUpdateAutoresponderRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\MailaddressUpdateCatchall\MailaddressUpdateCatchall400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\MailaddressUpdateCatchall\MailaddressUpdateCatchallRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\MailaddressUpdateForwardaddresses\MailaddressUpdateForwardaddressesRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\MailaddressUpdatePassword\MailaddressUpdatePasswordRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\MailaddressUpdateQuota\MailaddressUpdateQuotaRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\MailaddressUpdateSpamprotection\MailaddressUpdateSpamprotectionRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\ProjectsettingGetSpecific\ProjectsettingGetSpecific200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\ProjectsettingGetSpecific\ProjectsettingGetSpecificRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\ProjectsettingUpdateBlacklist\ProjectsettingUpdateBlacklistRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\ProjectsettingUpdateWhitelist\ProjectsettingUpdateWhitelistRequest;

class MailClient
{
    private Client $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function deliveryboxCreate(DeliveryboxCreateRequest $request): EmptyResponse|DeliveryboxCreate201Response
    {
        $httpRequest = new Request(DeliveryboxCreateRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            201 => DeliveryboxCreate201Response::fromResponse($httpResponse),
            403, 404, 500, 503 => new EmptyResponse($httpResponse),
        };
    }

    public function deliveryboxList(DeliveryboxListRequest $request): EmptyResponse|DeliveryboxList200Response
    {
        $httpRequest = new Request(DeliveryboxListRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => DeliveryboxList200Response::fromResponse($httpResponse),
            403, 404, 500, 503 => new EmptyResponse($httpResponse),
        };
    }

    public function deliveryboxDelete(DeliveryboxDeleteRequest $request): EmptyResponse
    {
        $httpRequest = new Request(DeliveryboxDeleteRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200, 403, 404, 500, 503 => new EmptyResponse($httpResponse),
        };
    }

    public function deliveryboxGetSpecific(DeliveryboxGetSpecificRequest $request): EmptyResponse|DeliveryboxGetSpecific200Response
    {
        $httpRequest = new Request(DeliveryboxGetSpecificRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => DeliveryboxGetSpecific200Response::fromResponse($httpResponse),
            403, 404, 500, 503 => new EmptyResponse($httpResponse),
        };
    }

    public function deliveryboxUpdateDescription(DeliveryboxUpdateDescriptionRequest $request): EmptyResponse
    {
        $httpRequest = new Request(DeliveryboxUpdateDescriptionRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200, 403, 404, 500, 503 => new EmptyResponse($httpResponse),
        };
    }

    public function deliveryboxUpdatePassword(DeliveryboxUpdatePasswordRequest $request): EmptyResponse
    {
        $httpRequest = new Request(DeliveryboxUpdatePasswordRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200, 403, 404, 500, 503 => new EmptyResponse($httpResponse),
        };
    }

    public function mailaddressCreate(MailaddressCreateRequest $request): EmptyResponse|MailaddressCreate201Response|MailaddressCreate400Response
    {
        $httpRequest = new Request(MailaddressCreateRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            201 => MailaddressCreate201Response::fromResponse($httpResponse),
            400 => MailaddressCreate400Response::fromResponse($httpResponse),
            403, 404, 500, 503 => new EmptyResponse($httpResponse),
        };
    }

    public function mailaddressList(MailaddressListRequest $request): EmptyResponse|MailaddressList200Response
    {
        $httpRequest = new Request(MailaddressListRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => MailaddressList200Response::fromResponse($httpResponse),
            403, 404, 500, 503 => new EmptyResponse($httpResponse),
        };
    }

    public function mailaddressDelete(MailaddressDeleteRequest $request): EmptyResponse
    {
        $httpRequest = new Request(MailaddressDeleteRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200, 403, 404, 500, 503 => new EmptyResponse($httpResponse),
        };
    }

    public function mailaddressGetSpecific(MailaddressGetSpecificRequest $request): EmptyResponse|MailaddressGetSpecific200Response
    {
        $httpRequest = new Request(MailaddressGetSpecificRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => MailaddressGetSpecific200Response::fromResponse($httpResponse),
            403, 404, 500, 503 => new EmptyResponse($httpResponse),
        };
    }

    public function mailaddressUpdateAddress(MailaddressUpdateAddressRequest $request): EmptyResponse
    {
        $httpRequest = new Request(MailaddressUpdateAddressRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200, 403, 404, 500, 503 => new EmptyResponse($httpResponse),
        };
    }

    public function mailaddressUpdateAutoresponder(MailaddressUpdateAutoresponderRequest $request): EmptyResponse
    {
        $httpRequest = new Request(MailaddressUpdateAutoresponderRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200, 403, 404, 500, 503 => new EmptyResponse($httpResponse),
        };
    }

    public function mailaddressUpdateCatchall(MailaddressUpdateCatchallRequest $request): EmptyResponse|MailaddressUpdateCatchall400Response
    {
        $httpRequest = new Request(MailaddressUpdateCatchallRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200, 403, 404, 500, 503 => new EmptyResponse($httpResponse),
            400 => MailaddressUpdateCatchall400Response::fromResponse($httpResponse),
        };
    }

    public function mailaddressUpdateForwardaddresses(MailaddressUpdateForwardaddressesRequest $request): EmptyResponse
    {
        $httpRequest = new Request(MailaddressUpdateForwardaddressesRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200, 403, 404, 500, 503 => new EmptyResponse($httpResponse),
        };
    }

    public function mailaddressUpdatePassword(MailaddressUpdatePasswordRequest $request): EmptyResponse
    {
        $httpRequest = new Request(MailaddressUpdatePasswordRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200, 403, 404, 500, 503 => new EmptyResponse($httpResponse),
        };
    }

    public function mailaddressUpdateQuota(MailaddressUpdateQuotaRequest $request): EmptyResponse
    {
        $httpRequest = new Request(MailaddressUpdateQuotaRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200, 403, 404, 500, 503 => new EmptyResponse($httpResponse),
        };
    }

    public function mailaddressUpdateSpamprotection(MailaddressUpdateSpamprotectionRequest $request): EmptyResponse
    {
        $httpRequest = new Request(MailaddressUpdateSpamprotectionRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200, 403, 404, 500, 503 => new EmptyResponse($httpResponse),
        };
    }

    public function projectsettingGetSpecific(ProjectsettingGetSpecificRequest $request): EmptyResponse|ProjectsettingGetSpecific200Response
    {
        $httpRequest = new Request(ProjectsettingGetSpecificRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => ProjectsettingGetSpecific200Response::fromResponse($httpResponse),
            403, 404, 500, 503 => new EmptyResponse($httpResponse),
        };
    }

    public function projectsettingUpdateBlacklist(ProjectsettingUpdateBlacklistRequest $request): EmptyResponse
    {
        $httpRequest = new Request(ProjectsettingUpdateBlacklistRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200, 403, 404, 500, 503 => new EmptyResponse($httpResponse),
        };
    }

    public function projectsettingUpdateWhitelist(ProjectsettingUpdateWhitelistRequest $request): EmptyResponse
    {
        $httpRequest = new Request(ProjectsettingUpdateWhitelistRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200, 403, 404, 500, 503 => new EmptyResponse($httpResponse),
        };
    }
}
