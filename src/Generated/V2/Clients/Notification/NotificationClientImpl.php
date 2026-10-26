<?php

namespace Mittwald\ApiClient\Generated\V2\Clients\Notification;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Psr7\Request;
use Mittwald\ApiClient\Client\EmptyResponse;
use Mittwald\ApiClient\Error\UnexpectedResponseException;
use Mittwald\ApiClient\Generated\V2\Clients\Notification\NewsletterGetInfo\NewsletterGetInfoDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Notification\NewsletterGetInfo\NewsletterGetInfoOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Notification\NewsletterGetInfo\NewsletterGetInfoRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Notification\NewsletterGetInfo\NewsletterGetInfoTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Notification\NewsletterSubscribeUser\NewsletterSubscribeUserBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Notification\NewsletterSubscribeUser\NewsletterSubscribeUserDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Notification\NewsletterSubscribeUser\NewsletterSubscribeUserOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Notification\NewsletterSubscribeUser\NewsletterSubscribeUserRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Notification\NewsletterSubscribeUser\NewsletterSubscribeUserTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Notification\NewsletterUnsubscribeUser\NewsletterUnsubscribeUserDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Notification\NewsletterUnsubscribeUser\NewsletterUnsubscribeUserRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Notification\NewsletterUnsubscribeUser\NewsletterUnsubscribeUserTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Notification\NotificationsAdjustNotificationMessageTypeSettings\NotificationsAdjustNotificationMessageTypeSettingsBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Notification\NotificationsAdjustNotificationMessageTypeSettings\NotificationsAdjustNotificationMessageTypeSettingsDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Notification\NotificationsAdjustNotificationMessageTypeSettings\NotificationsAdjustNotificationMessageTypeSettingsNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Notification\NotificationsAdjustNotificationMessageTypeSettings\NotificationsAdjustNotificationMessageTypeSettingsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Notification\NotificationsAdjustNotificationMessageTypeSettings\NotificationsAdjustNotificationMessageTypeSettingsTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Notification\NotificationsCountUnreadNotifications\NotificationsCountUnreadNotificationsDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Notification\NotificationsCountUnreadNotifications\NotificationsCountUnreadNotificationsOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Notification\NotificationsCountUnreadNotifications\NotificationsCountUnreadNotificationsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Notification\NotificationsCountUnreadNotifications\NotificationsCountUnreadNotificationsTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Notification\NotificationsGetNotificationSettings\NotificationsGetNotificationSettingsDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Notification\NotificationsGetNotificationSettings\NotificationsGetNotificationSettingsForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Notification\NotificationsGetNotificationSettings\NotificationsGetNotificationSettingsOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Notification\NotificationsGetNotificationSettings\NotificationsGetNotificationSettingsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Notification\NotificationsGetNotificationSettings\NotificationsGetNotificationSettingsTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Notification\NotificationsListNotifications\NotificationsListNotificationsDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Notification\NotificationsListNotifications\NotificationsListNotificationsOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Notification\NotificationsListNotifications\NotificationsListNotificationsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Notification\NotificationsListNotifications\NotificationsListNotificationsTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Notification\NotificationsReadAllNotifications\NotificationsReadAllNotificationsDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Notification\NotificationsReadAllNotifications\NotificationsReadAllNotificationsForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Notification\NotificationsReadAllNotifications\NotificationsReadAllNotificationsOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Notification\NotificationsReadAllNotifications\NotificationsReadAllNotificationsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Notification\NotificationsReadAllNotifications\NotificationsReadAllNotificationsTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Notification\NotificationsUpdateNotificationStatus\NotificationsUpdateNotificationStatusDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Notification\NotificationsUpdateNotificationStatus\NotificationsUpdateNotificationStatusForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Notification\NotificationsUpdateNotificationStatus\NotificationsUpdateNotificationStatusNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Notification\NotificationsUpdateNotificationStatus\NotificationsUpdateNotificationStatusOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Notification\NotificationsUpdateNotificationStatus\NotificationsUpdateNotificationStatusRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Notification\NotificationsUpdateNotificationStatus\NotificationsUpdateNotificationStatusTooManyRequestsResponse;

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
class NotificationClientImpl implements NotificationClient
{
    private Client $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * Getting the subscription status of the subscription.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Notification/operation/newsletter-get-info
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param NewsletterGetInfoRequest $request An object representing the request for this operation
     * @return NewsletterGetInfoOKResponse Status information about the subscription.
     */
    public function newsletterGetInfo(NewsletterGetInfoRequest $request): NewsletterGetInfoOKResponse
    {
        $httpRequest = new Request(NewsletterGetInfoRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return NewsletterGetInfoOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            429 => NewsletterGetInfoTooManyRequestsResponse::fromResponse($httpResponse),
            default => NewsletterGetInfoDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Subscribe a user to the mStudio newsletter.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Notification/operation/newsletter-subscribe-user
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param NewsletterSubscribeUserRequest $request An object representing the request for this operation
     * @return NewsletterSubscribeUserOKResponse Subscription information email has been sent.
     */
    public function newsletterSubscribeUser(NewsletterSubscribeUserRequest $request): NewsletterSubscribeUserOKResponse
    {
        $httpRequest = new Request(NewsletterSubscribeUserRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return NewsletterSubscribeUserOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => NewsletterSubscribeUserBadRequestResponse::fromResponse($httpResponse),
            429 => NewsletterSubscribeUserTooManyRequestsResponse::fromResponse($httpResponse),
            default => NewsletterSubscribeUserDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Unsubscribe a user from the mStudio newsletter.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Notification/operation/newsletter-unsubscribe-user
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param NewsletterUnsubscribeUserRequest $request An object representing the request for this operation
     * @return EmptyResponse User has been unsubscribed.
     */
    public function newsletterUnsubscribeUser(NewsletterUnsubscribeUserRequest $request): EmptyResponse
    {
        $httpRequest = new Request(NewsletterUnsubscribeUserRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            429 => NewsletterUnsubscribeUserTooManyRequestsResponse::fromResponse($httpResponse),
            default => NewsletterUnsubscribeUserDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Adjust notification settings for message type.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Notification/operation/notifications-adjust-notification-message-type-settings
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param NotificationsAdjustNotificationMessageTypeSettingsRequest $request An object representing the request for this operation
     * @return EmptyResponse No content
     */
    public function notificationsAdjustNotificationMessageTypeSettings(NotificationsAdjustNotificationMessageTypeSettingsRequest $request): EmptyResponse
    {
        $httpRequest = new Request(NotificationsAdjustNotificationMessageTypeSettingsRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => NotificationsAdjustNotificationMessageTypeSettingsBadRequestResponse::fromResponse($httpResponse),
            404 => NotificationsAdjustNotificationMessageTypeSettingsNotFoundResponse::fromResponse($httpResponse),
            429 => NotificationsAdjustNotificationMessageTypeSettingsTooManyRequestsResponse::fromResponse($httpResponse),
            default => NotificationsAdjustNotificationMessageTypeSettingsDefaultResponse::fromResponse($httpResponse),
        });
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
     * @throws UnexpectedResponseException
     * @param NotificationsCountUnreadNotificationsRequest $request An object representing the request for this operation
     * @return NotificationsCountUnreadNotificationsOKResponse Counts of unread notifications
     */
    public function notificationsCountUnreadNotifications(NotificationsCountUnreadNotificationsRequest $request): NotificationsCountUnreadNotificationsOKResponse
    {
        $httpRequest = new Request(NotificationsCountUnreadNotificationsRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return NotificationsCountUnreadNotificationsOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            429 => NotificationsCountUnreadNotificationsTooManyRequestsResponse::fromResponse($httpResponse),
            default => NotificationsCountUnreadNotificationsDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get notification settings for a user.
     *
     * Settings are provided for each message type: Channels for each message type can be active and editable.
     *
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Notification/operation/notifications-get-notification-settings
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param NotificationsGetNotificationSettingsRequest $request An object representing the request for this operation
     * @return NotificationsGetNotificationSettingsOKResponse Channel settings per message type
     */
    public function notificationsGetNotificationSettings(NotificationsGetNotificationSettingsRequest $request): NotificationsGetNotificationSettingsOKResponse
    {
        $httpRequest = new Request(NotificationsGetNotificationSettingsRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return NotificationsGetNotificationSettingsOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            403 => NotificationsGetNotificationSettingsForbiddenResponse::fromResponse($httpResponse),
            429 => NotificationsGetNotificationSettingsTooManyRequestsResponse::fromResponse($httpResponse),
            default => NotificationsGetNotificationSettingsDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * List all unread notifications.
     *
     * Sorted by creation date, descending, unless a different sort is requested.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Notification/operation/notifications-list-notifications
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param NotificationsListNotificationsRequest $request An object representing the request for this operation
     * @return NotificationsListNotificationsOKResponse List of notifications
     */
    public function notificationsListNotifications(NotificationsListNotificationsRequest $request): NotificationsListNotificationsOKResponse
    {
        $httpRequest = new Request(NotificationsListNotificationsRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return NotificationsListNotificationsOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            429 => NotificationsListNotificationsTooManyRequestsResponse::fromResponse($httpResponse),
            default => NotificationsListNotificationsDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Mark all notifications as read.
     *
     * Mark all notifications for the authenticated user as read.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Notification/operation/notifications-read-all-notifications
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param NotificationsReadAllNotificationsRequest $request An object representing the request for this operation
     * @return NotificationsReadAllNotificationsOKResponse OK
     */
    public function notificationsReadAllNotifications(NotificationsReadAllNotificationsRequest $request): NotificationsReadAllNotificationsOKResponse
    {
        $httpRequest = new Request(NotificationsReadAllNotificationsRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return NotificationsReadAllNotificationsOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            403 => NotificationsReadAllNotificationsForbiddenResponse::fromResponse($httpResponse),
            429 => NotificationsReadAllNotificationsTooManyRequestsResponse::fromResponse($httpResponse),
            default => NotificationsReadAllNotificationsDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Update a notification's read status.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Notification/operation/notifications-update-notification-status
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param NotificationsUpdateNotificationStatusRequest $request An object representing the request for this operation
     * @return NotificationsUpdateNotificationStatusOKResponse OK
     */
    public function notificationsUpdateNotificationStatus(NotificationsUpdateNotificationStatusRequest $request): NotificationsUpdateNotificationStatusOKResponse
    {
        $httpRequest = new Request(NotificationsUpdateNotificationStatusRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return NotificationsUpdateNotificationStatusOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            403 => NotificationsUpdateNotificationStatusForbiddenResponse::fromResponse($httpResponse),
            404 => NotificationsUpdateNotificationStatusNotFoundResponse::fromResponse($httpResponse),
            429 => NotificationsUpdateNotificationStatusTooManyRequestsResponse::fromResponse($httpResponse),
            default => NotificationsUpdateNotificationStatusDefaultResponse::fromResponse($httpResponse),
        });
    }
}
