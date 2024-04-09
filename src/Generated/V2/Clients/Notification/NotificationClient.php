<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Notification;

use GuzzleHttp\Exception\GuzzleException;
use Mittwald\ApiClient\Client\EmptyResponse;
use Mittwald\ApiClient\Error\UnexpectedResponseException;
use Mittwald\ApiClient\Generated\V2\Clients\Notification\NewsletterGetInfo\NewsletterGetInfoOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Notification\NewsletterGetInfo\NewsletterGetInfoRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Notification\NewsletterSubscribeUser\NewsletterSubscribeUserOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Notification\NewsletterSubscribeUser\NewsletterSubscribeUserRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Notification\NewsletterUnsubscribeUser\NewsletterUnsubscribeUserRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Notification\NotificationsCountUnreadNotifications\NotificationsCountUnreadNotificationsOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Notification\NotificationsCountUnreadNotifications\NotificationsCountUnreadNotificationsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Notification\NotificationsListNotifications\NotificationsListNotificationsOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Notification\NotificationsListNotifications\NotificationsListNotificationsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Notification\NotificationsReadAllNotifications\NotificationsReadAllNotificationsOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Notification\NotificationsReadAllNotifications\NotificationsReadAllNotificationsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Notification\NotificationsReadAllNotificationsDeprecated\NotificationsReadAllNotificationsDeprecatedOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Notification\NotificationsReadAllNotificationsDeprecated\NotificationsReadAllNotificationsDeprecatedRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Notification\NotificationsReadNotification\NotificationsReadNotificationOKResponse;
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
interface NotificationClient
{
    /**
     * Getting the subscription status of the subscription.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Notification/operation/newsletter-get-info
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param NewsletterGetInfoRequest $request An object representing the request for this operation
     * @return NewsletterGetInfoOKResponse Status information about the subscription.
     */
    public function newsletterGetInfo(NewsletterGetInfoRequest $request): NewsletterGetInfoOKResponse;
    /**
     * Subscribe a user to the mStudio newsletter.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Notification/operation/newsletter-subscribe-user
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param NewsletterSubscribeUserRequest $request An object representing the request for this operation
     * @return NewsletterSubscribeUserOKResponse Subscription information email has been sent.
     */
    public function newsletterSubscribeUser(NewsletterSubscribeUserRequest $request): NewsletterSubscribeUserOKResponse;
    /**
     * Unsubscribe a user from the mStudio newsletter.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Notification/operation/newsletter-unsubscribe-user
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param NewsletterUnsubscribeUserRequest $request An object representing the request for this operation
     * @return EmptyResponse User has been unsubscribed.
     */
    public function newsletterUnsubscribeUser(NewsletterUnsubscribeUserRequest $request): EmptyResponse;
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
    public function notificationsCountUnreadNotifications(NotificationsCountUnreadNotificationsRequest $request): NotificationsCountUnreadNotificationsOKResponse;
    /**
     * List all unread notifications.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Notification/operation/notifications-list-notifications
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param NotificationsListNotificationsRequest $request An object representing the request for this operation
     * @return NotificationsListNotificationsOKResponse List of notifications
     */
    public function notificationsListNotifications(NotificationsListNotificationsRequest $request): NotificationsListNotificationsOKResponse;
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
    public function notificationsReadAllNotifications(NotificationsReadAllNotificationsRequest $request): NotificationsReadAllNotificationsOKResponse;
    /**
     * Mark all notifications as read (deprecated).
     *
     * Deprecated route. Please use /v2/notifications/actions/read-all instead.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Notification/operation/notifications-read-all-notifications-deprecated
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param NotificationsReadAllNotificationsDeprecatedRequest $request An object representing the request for this operation
     * @deprecated
     * @return NotificationsReadAllNotificationsDeprecatedOKResponse OK
     */
    public function notificationsReadAllNotificationsDeprecated(NotificationsReadAllNotificationsDeprecatedRequest $request): NotificationsReadAllNotificationsDeprecatedOKResponse;
    /**
     * Mark notification as read.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Notification/operation/notifications-read-notification
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param NotificationsReadNotificationRequest $request An object representing the request for this operation
     * @return NotificationsReadNotificationOKResponse OK
     */
    public function notificationsReadNotification(NotificationsReadNotificationRequest $request): NotificationsReadNotificationOKResponse;
}
