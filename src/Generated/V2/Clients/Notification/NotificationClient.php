<?php

namespace Mittwald\ApiClient\Generated\V2\Clients\Notification;

use GuzzleHttp\Psr7\Request;

class NotificationClient
{
    private \GuzzleHttp\Client $client;

    public function __construct(\GuzzleHttp\Client $client)
    {
        $this->client = $client;
    }

    public function deprecatedNewsletterGetInfo(DeprecatedNewsletterGetInfo\DeprecatedNewsletterGetInfoRequest $request): DeprecatedNewsletterGetInfo\DeprecatedNewsletterGetInfo200Response|DeprecatedNewsletterGetInfo\DeprecatedNewsletterGetInfoDefaultResponse
    {
        $httpRequest = new Request(DeprecatedNewsletterGetInfo\DeprecatedNewsletterGetInfoRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => DeprecatedNewsletterGetInfo\DeprecatedNewsletterGetInfo200Response::fromResponse($httpResponse),
            default => DeprecatedNewsletterGetInfo\DeprecatedNewsletterGetInfoDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function deprecatedNewsletterUnsubscribeUser(DeprecatedNewsletterUnsubscribeUser\DeprecatedNewsletterUnsubscribeUserRequest $request): \Mittwald\ApiClient\Client\EmptyResponse|DeprecatedNewsletterUnsubscribeUser\DeprecatedNewsletterUnsubscribeUserDefaultResponse
    {
        $httpRequest = new Request(DeprecatedNewsletterUnsubscribeUser\DeprecatedNewsletterUnsubscribeUserRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
            default => DeprecatedNewsletterUnsubscribeUser\DeprecatedNewsletterUnsubscribeUserDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function deprecatedNewsletterSubscribeUser(DeprecatedNewsletterSubscribeUser\DeprecatedNewsletterSubscribeUserRequest $request): DeprecatedNewsletterSubscribeUser\DeprecatedNewsletterSubscribeUser200Response|DeprecatedNewsletterSubscribeUser\DeprecatedNewsletterSubscribeUser400Response|DeprecatedNewsletterSubscribeUser\DeprecatedNewsletterSubscribeUserDefaultResponse
    {
        $httpRequest = new Request(DeprecatedNewsletterSubscribeUser\DeprecatedNewsletterSubscribeUserRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => DeprecatedNewsletterSubscribeUser\DeprecatedNewsletterSubscribeUser200Response::fromResponse($httpResponse),
            400 => DeprecatedNewsletterSubscribeUser\DeprecatedNewsletterSubscribeUser400Response::fromResponse($httpResponse),
            default => DeprecatedNewsletterSubscribeUser\DeprecatedNewsletterSubscribeUserDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function newsletterGetInfo(NewsletterGetInfo\NewsletterGetInfoRequest $request): NewsletterGetInfo\NewsletterGetInfo200Response|NewsletterGetInfo\NewsletterGetInfoDefaultResponse
    {
        $httpRequest = new Request(NewsletterGetInfo\NewsletterGetInfoRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => NewsletterGetInfo\NewsletterGetInfo200Response::fromResponse($httpResponse),
            default => NewsletterGetInfo\NewsletterGetInfoDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function newsletterUnsubscribeUser(NewsletterUnsubscribeUser\NewsletterUnsubscribeUserRequest $request): \Mittwald\ApiClient\Client\EmptyResponse|NewsletterUnsubscribeUser\NewsletterUnsubscribeUserDefaultResponse
    {
        $httpRequest = new Request(NewsletterUnsubscribeUser\NewsletterUnsubscribeUserRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
            default => NewsletterUnsubscribeUser\NewsletterUnsubscribeUserDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function newsletterSubscribeUser(NewsletterSubscribeUser\NewsletterSubscribeUserRequest $request): NewsletterSubscribeUser\NewsletterSubscribeUser200Response|NewsletterSubscribeUser\NewsletterSubscribeUser400Response|NewsletterSubscribeUser\NewsletterSubscribeUserDefaultResponse
    {
        $httpRequest = new Request(NewsletterSubscribeUser\NewsletterSubscribeUserRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => NewsletterSubscribeUser\NewsletterSubscribeUser200Response::fromResponse($httpResponse),
            400 => NewsletterSubscribeUser\NewsletterSubscribeUser400Response::fromResponse($httpResponse),
            default => NewsletterSubscribeUser\NewsletterSubscribeUserDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function notificationsCountUnreadNotifications(NotificationsCountUnreadNotifications\NotificationsCountUnreadNotificationsRequest $request): NotificationsCountUnreadNotifications\NotificationsCountUnreadNotifications200Response|NotificationsCountUnreadNotifications\NotificationsCountUnreadNotificationsDefaultResponse
    {
        $httpRequest = new Request(NotificationsCountUnreadNotifications\NotificationsCountUnreadNotificationsRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => NotificationsCountUnreadNotifications\NotificationsCountUnreadNotifications200Response::fromResponse($httpResponse),
            default => NotificationsCountUnreadNotifications\NotificationsCountUnreadNotificationsDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function notificationsListNotifications(NotificationsListNotifications\NotificationsListNotificationsRequest $request): NotificationsListNotifications\NotificationsListNotifications200Response|NotificationsListNotifications\NotificationsListNotificationsDefaultResponse
    {
        $httpRequest = new Request(NotificationsListNotifications\NotificationsListNotificationsRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => NotificationsListNotifications\NotificationsListNotifications200Response::fromResponse($httpResponse),
            default => NotificationsListNotifications\NotificationsListNotificationsDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function notificationsReadAllNotifications(NotificationsReadAllNotifications\NotificationsReadAllNotificationsRequest $request): NotificationsReadAllNotifications\NotificationsReadAllNotifications200Response|NotificationsReadAllNotifications\NotificationsReadAllNotifications403Response|NotificationsReadAllNotifications\NotificationsReadAllNotificationsDefaultResponse
    {
        $httpRequest = new Request(NotificationsReadAllNotifications\NotificationsReadAllNotificationsRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => NotificationsReadAllNotifications\NotificationsReadAllNotifications200Response::fromResponse($httpResponse),
            403 => NotificationsReadAllNotifications\NotificationsReadAllNotifications403Response::fromResponse($httpResponse),
            default => NotificationsReadAllNotifications\NotificationsReadAllNotificationsDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function notificationsReadNotification(NotificationsReadNotification\NotificationsReadNotificationRequest $request): NotificationsReadNotification\NotificationsReadNotification200Response|NotificationsReadNotification\NotificationsReadNotification404Response|NotificationsReadNotification\NotificationsReadNotificationDefaultResponse
    {
        $httpRequest = new Request(NotificationsReadNotification\NotificationsReadNotificationRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => NotificationsReadNotification\NotificationsReadNotification200Response::fromResponse($httpResponse),
            404 => NotificationsReadNotification\NotificationsReadNotification404Response::fromResponse($httpResponse),
            default => NotificationsReadNotification\NotificationsReadNotificationDefaultResponse::fromResponse($httpResponse),
        };
    }
}
