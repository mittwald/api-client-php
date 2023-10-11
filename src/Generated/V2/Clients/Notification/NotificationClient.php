<?php

namespace Mittwald\ApiClient\Generated\V2\Clients\Notification;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Psr7\Request;
use Mittwald\ApiClient\Client\EmptyResponse;
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
use Mittwald\ApiClient\Generated\V2\Clients\Notification\NotificationsReadAllNotificationsDeprecated\NotificationsReadAllNotificationsDeprecated200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Notification\NotificationsReadAllNotificationsDeprecated\NotificationsReadAllNotificationsDeprecated403Response;
use Mittwald\ApiClient\Generated\V2\Clients\Notification\NotificationsReadAllNotificationsDeprecated\NotificationsReadAllNotificationsDeprecatedDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Notification\NotificationsReadAllNotificationsDeprecated\NotificationsReadAllNotificationsDeprecatedRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Notification\NotificationsReadNotification\NotificationsReadNotification200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Notification\NotificationsReadNotification\NotificationsReadNotification404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Notification\NotificationsReadNotification\NotificationsReadNotificationDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Notification\NotificationsReadNotification\NotificationsReadNotificationRequest;

/**
 * Client for Notification API
 *
 * The notification API allows you to manage your notifications.
 *
 * DO NOT EDIT; this class was generated by the mittwald/api-client-builder package
 * (https://github.com/mittwald/api-client-php-builder). Please make any changes
 * there.
 *
 * @generated
 * @see https://github.com/mittwald/api-client-php-builder
 */
class NotificationClient
{
    private Client $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * Subscribe a user to the mStudio newsletter.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Notification/operation/newsletter-subscribe-user
     * @throws GuzzleException
     * @param NewsletterSubscribeUser\NewsletterSubscribeUserRequest $request An object representing the request for this operation
     * @return NewsletterSubscribeUser\NewsletterSubscribeUser200Response|NewsletterSubscribeUser\NewsletterSubscribeUser400Response|NewsletterSubscribeUser\NewsletterSubscribeUserDefaultResponse Subscription information email has been sent.
     */
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

    /**
     * Getting the subscription status of the subscription.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Notification/operation/newsletter-get-info
     * @throws GuzzleException
     * @param NewsletterGetInfo\NewsletterGetInfoRequest $request An object representing the request for this operation
     * @return NewsletterGetInfo\NewsletterGetInfo200Response|NewsletterGetInfo\NewsletterGetInfoDefaultResponse Status information about the subscription.
     */
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

    /**
     * Unsubscribe a user from the mStudio newsletter.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Notification/operation/newsletter-unsubscribe-user
     * @throws GuzzleException
     * @param NewsletterUnsubscribeUser\NewsletterUnsubscribeUserRequest $request An object representing the request for this operation
     * @return EmptyResponse|NewsletterUnsubscribeUser\NewsletterUnsubscribeUserDefaultResponse User has been unsubscribed.
     */
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

    /**
     * Get the counts for unread notifications of the user.
     *
     * The user is determined by the access token used.
     * Lighter weight route instead of getting all unread notifications and count yourself.
     *
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Notification/operation/notifications-count-unread-notifications
     * @throws GuzzleException
     * @param NotificationsCountUnreadNotifications\NotificationsCountUnreadNotificationsRequest $request An object representing the request for this operation
     * @return NotificationsCountUnreadNotifications\NotificationsCountUnreadNotifications200Response|NotificationsCountUnreadNotifications\NotificationsCountUnreadNotificationsDefaultResponse Counts of unread notifications
     */
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

    /**
     * List all unread notifications.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Notification/operation/notifications-list-notifications
     * @throws GuzzleException
     * @param NotificationsListNotifications\NotificationsListNotificationsRequest $request An object representing the request for this operation
     * @return NotificationsListNotifications\NotificationsListNotifications200Response|NotificationsListNotifications\NotificationsListNotificationsDefaultResponse List of notifications
     */
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

    /**
     * Mark all notifications as read (deprecated).
     *
     * Deprecated route. Please use /v2/notifications/actions/read-all instead.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Notification/operation/notifications-read-all-notifications-deprecated
     * @throws GuzzleException
     * @param NotificationsReadAllNotificationsDeprecated\NotificationsReadAllNotificationsDeprecatedRequest $request An object representing the request for this operation
     * @return NotificationsReadAllNotificationsDeprecated\NotificationsReadAllNotificationsDeprecated200Response|NotificationsReadAllNotificationsDeprecated\NotificationsReadAllNotificationsDeprecated403Response|NotificationsReadAllNotificationsDeprecated\NotificationsReadAllNotificationsDeprecatedDefaultResponse OK
     */
    public function notificationsReadAllNotificationsDeprecated(NotificationsReadAllNotificationsDeprecatedRequest $request): NotificationsReadAllNotificationsDeprecated200Response|NotificationsReadAllNotificationsDeprecated403Response|NotificationsReadAllNotificationsDeprecatedDefaultResponse
    {
        $httpRequest = new Request(NotificationsReadAllNotificationsDeprecatedRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => NotificationsReadAllNotificationsDeprecated200Response::fromResponse($httpResponse),
            403 => NotificationsReadAllNotificationsDeprecated403Response::fromResponse($httpResponse),
            default => NotificationsReadAllNotificationsDeprecatedDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Mark all notifications as read.
     *
     * Mark all notifications for the authenticated user as read.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Notification/operation/notifications-read-all-notifications
     * @throws GuzzleException
     * @param NotificationsReadAllNotifications\NotificationsReadAllNotificationsRequest $request An object representing the request for this operation
     * @return NotificationsReadAllNotifications\NotificationsReadAllNotifications200Response|NotificationsReadAllNotifications\NotificationsReadAllNotifications403Response|NotificationsReadAllNotifications\NotificationsReadAllNotificationsDefaultResponse OK
     */
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

    /**
     * Mark notification as read.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Notification/operation/notifications-read-notification
     * @throws GuzzleException
     * @param NotificationsReadNotification\NotificationsReadNotificationRequest $request An object representing the request for this operation
     * @return NotificationsReadNotification\NotificationsReadNotification200Response|NotificationsReadNotification\NotificationsReadNotification404Response|NotificationsReadNotification\NotificationsReadNotificationDefaultResponse OK
     */
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
