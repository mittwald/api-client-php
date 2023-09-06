<?php

namespace Mittwald\ApiClient\Generated\V2\Clients\Notification;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;
use Mittwald\ApiClient\Client\EmptyResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Notification\DeprecatedNewsletterGetInfo\DeprecatedNewsletterGetInfo200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Notification\DeprecatedNewsletterGetInfo\DeprecatedNewsletterGetInfoDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Notification\DeprecatedNewsletterGetInfo\DeprecatedNewsletterGetInfoRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Notification\DeprecatedNewsletterSubscribeUser\DeprecatedNewsletterSubscribeUser200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Notification\DeprecatedNewsletterSubscribeUser\DeprecatedNewsletterSubscribeUser400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Notification\DeprecatedNewsletterSubscribeUser\DeprecatedNewsletterSubscribeUserDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Notification\DeprecatedNewsletterSubscribeUser\DeprecatedNewsletterSubscribeUserRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Notification\DeprecatedNewsletterUnsubscribeUser\DeprecatedNewsletterUnsubscribeUserDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Notification\DeprecatedNewsletterUnsubscribeUser\DeprecatedNewsletterUnsubscribeUserRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Notification\NewsletterGetInfo\NewsletterGetInfo200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Notification\NewsletterGetInfo\NewsletterGetInfoDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Notification\NewsletterGetInfo\NewsletterGetInfoRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Notification\NewsletterSubscribeUser\NewsletterSubscribeUser200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Notification\NewsletterSubscribeUser\NewsletterSubscribeUser400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Notification\NewsletterSubscribeUser\NewsletterSubscribeUserDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Notification\NewsletterSubscribeUser\NewsletterSubscribeUserRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Notification\NewsletterUnsubscribeUser\NewsletterUnsubscribeUserDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Notification\NewsletterUnsubscribeUser\NewsletterUnsubscribeUserRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Notification\NotificationsCountUnreadNotifications\NotificationsCountUnreadNotifications200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Notification\NotificationsCountUnreadNotifications\NotificationsCountUnreadNotificationsDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Notification\NotificationsCountUnreadNotifications\NotificationsCountUnreadNotificationsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Notification\NotificationsListNotifications\NotificationsListNotifications200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Notification\NotificationsListNotifications\NotificationsListNotificationsDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Notification\NotificationsListNotifications\NotificationsListNotificationsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Notification\NotificationsReadAllNotifications\NotificationsReadAllNotifications200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Notification\NotificationsReadAllNotifications\NotificationsReadAllNotifications403Response;
use Mittwald\ApiClient\Generated\V2\Clients\Notification\NotificationsReadAllNotifications\NotificationsReadAllNotificationsDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Notification\NotificationsReadAllNotifications\NotificationsReadAllNotificationsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Notification\NotificationsReadNotification\NotificationsReadNotification200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Notification\NotificationsReadNotification\NotificationsReadNotification404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Notification\NotificationsReadNotification\NotificationsReadNotificationDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Notification\NotificationsReadNotification\NotificationsReadNotificationRequest;

class NotificationClient
{
    private Client $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function deprecatedNewsletterGetInfo(DeprecatedNewsletterGetInfoRequest $request): DeprecatedNewsletterGetInfo200Response|DeprecatedNewsletterGetInfoDefaultResponse
    {
        $httpRequest = new Request(DeprecatedNewsletterGetInfoRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => DeprecatedNewsletterGetInfo200Response::fromResponse($httpResponse),
            default => DeprecatedNewsletterGetInfoDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function deprecatedNewsletterUnsubscribeUser(DeprecatedNewsletterUnsubscribeUserRequest $request): EmptyResponse|DeprecatedNewsletterUnsubscribeUserDefaultResponse
    {
        $httpRequest = new Request(DeprecatedNewsletterUnsubscribeUserRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new EmptyResponse($httpResponse),
            default => DeprecatedNewsletterUnsubscribeUserDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function deprecatedNewsletterSubscribeUser(DeprecatedNewsletterSubscribeUserRequest $request): DeprecatedNewsletterSubscribeUser200Response|DeprecatedNewsletterSubscribeUser400Response|DeprecatedNewsletterSubscribeUserDefaultResponse
    {
        $httpRequest = new Request(DeprecatedNewsletterSubscribeUserRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => DeprecatedNewsletterSubscribeUser200Response::fromResponse($httpResponse),
            400 => DeprecatedNewsletterSubscribeUser400Response::fromResponse($httpResponse),
            default => DeprecatedNewsletterSubscribeUserDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function newsletterGetInfo(NewsletterGetInfoRequest $request): NewsletterGetInfo200Response|NewsletterGetInfoDefaultResponse
    {
        $httpRequest = new Request(NewsletterGetInfoRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => NewsletterGetInfo200Response::fromResponse($httpResponse),
            default => NewsletterGetInfoDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function newsletterUnsubscribeUser(NewsletterUnsubscribeUserRequest $request): EmptyResponse|NewsletterUnsubscribeUserDefaultResponse
    {
        $httpRequest = new Request(NewsletterUnsubscribeUserRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new EmptyResponse($httpResponse),
            default => NewsletterUnsubscribeUserDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function newsletterSubscribeUser(NewsletterSubscribeUserRequest $request): NewsletterSubscribeUser200Response|NewsletterSubscribeUser400Response|NewsletterSubscribeUserDefaultResponse
    {
        $httpRequest = new Request(NewsletterSubscribeUserRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => NewsletterSubscribeUser200Response::fromResponse($httpResponse),
            400 => NewsletterSubscribeUser400Response::fromResponse($httpResponse),
            default => NewsletterSubscribeUserDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function notificationsCountUnreadNotifications(NotificationsCountUnreadNotificationsRequest $request): NotificationsCountUnreadNotifications200Response|NotificationsCountUnreadNotificationsDefaultResponse
    {
        $httpRequest = new Request(NotificationsCountUnreadNotificationsRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => NotificationsCountUnreadNotifications200Response::fromResponse($httpResponse),
            default => NotificationsCountUnreadNotificationsDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function notificationsListNotifications(NotificationsListNotificationsRequest $request): NotificationsListNotifications200Response|NotificationsListNotificationsDefaultResponse
    {
        $httpRequest = new Request(NotificationsListNotificationsRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => NotificationsListNotifications200Response::fromResponse($httpResponse),
            default => NotificationsListNotificationsDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function notificationsReadAllNotifications(NotificationsReadAllNotificationsRequest $request): NotificationsReadAllNotifications200Response|NotificationsReadAllNotifications403Response|NotificationsReadAllNotificationsDefaultResponse
    {
        $httpRequest = new Request(NotificationsReadAllNotificationsRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => NotificationsReadAllNotifications200Response::fromResponse($httpResponse),
            403 => NotificationsReadAllNotifications403Response::fromResponse($httpResponse),
            default => NotificationsReadAllNotificationsDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function notificationsReadNotification(NotificationsReadNotificationRequest $request): NotificationsReadNotification200Response|NotificationsReadNotification404Response|NotificationsReadNotificationDefaultResponse
    {
        $httpRequest = new Request(NotificationsReadNotificationRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => NotificationsReadNotification200Response::fromResponse($httpResponse),
            404 => NotificationsReadNotification404Response::fromResponse($httpResponse),
            default => NotificationsReadNotificationDefaultResponse::fromResponse($httpResponse),
        };
    }
}
