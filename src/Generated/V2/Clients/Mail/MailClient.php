<?php

namespace Mittwald\ApiClient\Generated\V2\Clients\Mail;

use GuzzleHttp\Psr7\Request;

class MailClient
{
    private \GuzzleHttp\Client $client;

    public function __construct(\GuzzleHttp\Client $client)
    {
        $this->client = $client;
    }

    public function deliveryboxCreate(DeliveryboxCreate\DeliveryboxCreateRequest $request): \Mittwald\ApiClient\Client\EmptyResponse|DeliveryboxCreate\DeliveryboxCreate201Response
    {
        $httpRequest = new Request(DeliveryboxCreate\DeliveryboxCreateRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            201 => DeliveryboxCreate\DeliveryboxCreate201Response::fromResponse($httpResponse),
            403, 404, 500, 503 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
        };
    }

    public function deliveryboxList(DeliveryboxList\DeliveryboxListRequest $request): \Mittwald\ApiClient\Client\EmptyResponse|DeliveryboxList\DeliveryboxList200Response
    {
        $httpRequest = new Request(DeliveryboxList\DeliveryboxListRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => DeliveryboxList\DeliveryboxList200Response::fromResponse($httpResponse),
            403, 404, 500, 503 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
        };
    }

    public function deliveryboxDelete(DeliveryboxDelete\DeliveryboxDeleteRequest $request): \Mittwald\ApiClient\Client\EmptyResponse
    {
        $httpRequest = new Request(DeliveryboxDelete\DeliveryboxDeleteRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200, 403, 404, 500, 503 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
        };
    }

    public function deliveryboxGetSpecific(DeliveryboxGetSpecific\DeliveryboxGetSpecificRequest $request): \Mittwald\ApiClient\Client\EmptyResponse|DeliveryboxGetSpecific\DeliveryboxGetSpecific200Response
    {
        $httpRequest = new Request(DeliveryboxGetSpecific\DeliveryboxGetSpecificRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => DeliveryboxGetSpecific\DeliveryboxGetSpecific200Response::fromResponse($httpResponse),
            403, 404, 500, 503 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
        };
    }

    public function deliveryboxUpdateDescription(DeliveryboxUpdateDescription\DeliveryboxUpdateDescriptionRequest $request): \Mittwald\ApiClient\Client\EmptyResponse
    {
        $httpRequest = new Request(DeliveryboxUpdateDescription\DeliveryboxUpdateDescriptionRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200, 403, 404, 500, 503 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
        };
    }

    public function deliveryboxUpdatePassword(DeliveryboxUpdatePassword\DeliveryboxUpdatePasswordRequest $request): \Mittwald\ApiClient\Client\EmptyResponse
    {
        $httpRequest = new Request(DeliveryboxUpdatePassword\DeliveryboxUpdatePasswordRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200, 403, 404, 500, 503 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
        };
    }

    public function mailaddressCreate(MailaddressCreate\MailaddressCreateRequest $request): \Mittwald\ApiClient\Client\EmptyResponse|MailaddressCreate\MailaddressCreate201Response|MailaddressCreate\MailaddressCreate400Response
    {
        $httpRequest = new Request(MailaddressCreate\MailaddressCreateRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            201 => MailaddressCreate\MailaddressCreate201Response::fromResponse($httpResponse),
            400 => MailaddressCreate\MailaddressCreate400Response::fromResponse($httpResponse),
            403, 404, 500, 503 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
        };
    }

    public function mailaddressList(MailaddressList\MailaddressListRequest $request): \Mittwald\ApiClient\Client\EmptyResponse|MailaddressList\MailaddressList200Response
    {
        $httpRequest = new Request(MailaddressList\MailaddressListRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => MailaddressList\MailaddressList200Response::fromResponse($httpResponse),
            403, 404, 500, 503 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
        };
    }

    public function mailaddressDelete(MailaddressDelete\MailaddressDeleteRequest $request): \Mittwald\ApiClient\Client\EmptyResponse
    {
        $httpRequest = new Request(MailaddressDelete\MailaddressDeleteRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200, 403, 404, 500, 503 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
        };
    }

    public function mailaddressGetSpecific(MailaddressGetSpecific\MailaddressGetSpecificRequest $request): \Mittwald\ApiClient\Client\EmptyResponse|MailaddressGetSpecific\MailaddressGetSpecific200Response
    {
        $httpRequest = new Request(MailaddressGetSpecific\MailaddressGetSpecificRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => MailaddressGetSpecific\MailaddressGetSpecific200Response::fromResponse($httpResponse),
            403, 404, 500, 503 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
        };
    }

    public function mailaddressUpdateAddress(MailaddressUpdateAddress\MailaddressUpdateAddressRequest $request): \Mittwald\ApiClient\Client\EmptyResponse
    {
        $httpRequest = new Request(MailaddressUpdateAddress\MailaddressUpdateAddressRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200, 403, 404, 500, 503 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
        };
    }

    public function mailaddressUpdateAutoresponder(MailaddressUpdateAutoresponder\MailaddressUpdateAutoresponderRequest $request): \Mittwald\ApiClient\Client\EmptyResponse
    {
        $httpRequest = new Request(MailaddressUpdateAutoresponder\MailaddressUpdateAutoresponderRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200, 403, 404, 500, 503 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
        };
    }

    public function mailaddressUpdateCatchall(MailaddressUpdateCatchall\MailaddressUpdateCatchallRequest $request): \Mittwald\ApiClient\Client\EmptyResponse|MailaddressUpdateCatchall\MailaddressUpdateCatchall400Response
    {
        $httpRequest = new Request(MailaddressUpdateCatchall\MailaddressUpdateCatchallRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200, 403, 404, 500, 503 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
            400 => MailaddressUpdateCatchall\MailaddressUpdateCatchall400Response::fromResponse($httpResponse),
        };
    }

    public function mailaddressUpdateForwardaddresses(MailaddressUpdateForwardaddresses\MailaddressUpdateForwardaddressesRequest $request): \Mittwald\ApiClient\Client\EmptyResponse
    {
        $httpRequest = new Request(MailaddressUpdateForwardaddresses\MailaddressUpdateForwardaddressesRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200, 403, 404, 500, 503 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
        };
    }

    public function mailaddressUpdatePassword(MailaddressUpdatePassword\MailaddressUpdatePasswordRequest $request): \Mittwald\ApiClient\Client\EmptyResponse
    {
        $httpRequest = new Request(MailaddressUpdatePassword\MailaddressUpdatePasswordRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200, 403, 404, 500, 503 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
        };
    }

    public function mailaddressUpdateQuota(MailaddressUpdateQuota\MailaddressUpdateQuotaRequest $request): \Mittwald\ApiClient\Client\EmptyResponse
    {
        $httpRequest = new Request(MailaddressUpdateQuota\MailaddressUpdateQuotaRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200, 403, 404, 500, 503 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
        };
    }

    public function mailaddressUpdateSpamprotection(MailaddressUpdateSpamprotection\MailaddressUpdateSpamprotectionRequest $request): \Mittwald\ApiClient\Client\EmptyResponse
    {
        $httpRequest = new Request(MailaddressUpdateSpamprotection\MailaddressUpdateSpamprotectionRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200, 403, 404, 500, 503 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
        };
    }

    public function projectsettingGetSpecific(ProjectsettingGetSpecific\ProjectsettingGetSpecificRequest $request): \Mittwald\ApiClient\Client\EmptyResponse|ProjectsettingGetSpecific\ProjectsettingGetSpecific200Response
    {
        $httpRequest = new Request(ProjectsettingGetSpecific\ProjectsettingGetSpecificRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => ProjectsettingGetSpecific\ProjectsettingGetSpecific200Response::fromResponse($httpResponse),
            403, 404, 500, 503 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
        };
    }

    public function projectsettingUpdateBlacklist(ProjectsettingUpdateBlacklist\ProjectsettingUpdateBlacklistRequest $request): \Mittwald\ApiClient\Client\EmptyResponse
    {
        $httpRequest = new Request(ProjectsettingUpdateBlacklist\ProjectsettingUpdateBlacklistRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200, 403, 404, 500, 503 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
        };
    }

    public function projectsettingUpdateWhitelist(ProjectsettingUpdateWhitelist\ProjectsettingUpdateWhitelistRequest $request): \Mittwald\ApiClient\Client\EmptyResponse
    {
        $httpRequest = new Request(ProjectsettingUpdateWhitelist\ProjectsettingUpdateWhitelistRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200, 403, 404, 500, 503 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
        };
    }
}
