<?php

namespace Mittwald\ApiClient\Generated\V2\Clients\Mail;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Psr7\Request;
use Mittwald\ApiClient\Client\EmptyResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\CreateDeliverybox\CreateDeliverybox201Response;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\CreateDeliverybox\CreateDeliverybox400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\CreateDeliverybox\CreateDeliverybox403Response;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\CreateDeliverybox\CreateDeliverybox404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\CreateDeliverybox\CreateDeliverybox500Response;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\CreateDeliverybox\CreateDeliverybox503Response;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\CreateDeliverybox\CreateDeliveryboxDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\CreateDeliverybox\CreateDeliveryboxRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeleteDeliveryBox\DeleteDeliveryBox400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeleteDeliveryBox\DeleteDeliveryBox403Response;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeleteDeliveryBox\DeleteDeliveryBox404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeleteDeliveryBox\DeleteDeliveryBox500Response;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeleteDeliveryBox\DeleteDeliveryBox503Response;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeleteDeliveryBox\DeleteDeliveryBoxDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeleteDeliveryBox\DeleteDeliveryBoxRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeliveryboxDelete\DeliveryboxDeleteRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeliveryboxGetSpecific\DeliveryboxGetSpecific200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeliveryboxGetSpecific\DeliveryboxGetSpecificRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeliveryboxUpdateDescriptionDeprecated\DeliveryboxUpdateDescriptionDeprecatedRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeliveryboxUpdatePasswordDeprecated\DeliveryboxUpdatePasswordDeprecatedRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\GetDeliveryBox\GetDeliveryBox200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\GetDeliveryBox\GetDeliveryBox400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\GetDeliveryBox\GetDeliveryBox403Response;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\GetDeliveryBox\GetDeliveryBox404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\GetDeliveryBox\GetDeliveryBox500Response;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\GetDeliveryBox\GetDeliveryBox503Response;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\GetDeliveryBox\GetDeliveryBoxDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\GetDeliveryBox\GetDeliveryBoxRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\ListDeliveryBoxes\ListDeliveryBoxes200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\ListDeliveryBoxes\ListDeliveryBoxes400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\ListDeliveryBoxes\ListDeliveryBoxes403Response;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\ListDeliveryBoxes\ListDeliveryBoxes404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\ListDeliveryBoxes\ListDeliveryBoxes500Response;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\ListDeliveryBoxes\ListDeliveryBoxes503Response;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\ListDeliveryBoxes\ListDeliveryBoxesDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\ListDeliveryBoxes\ListDeliveryBoxesRequest;
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
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateDeliveryBoxDescription\UpdateDeliveryBoxDescription400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateDeliveryBoxDescription\UpdateDeliveryBoxDescription403Response;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateDeliveryBoxDescription\UpdateDeliveryBoxDescription404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateDeliveryBoxDescription\UpdateDeliveryBoxDescription500Response;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateDeliveryBoxDescription\UpdateDeliveryBoxDescription503Response;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateDeliveryBoxDescription\UpdateDeliveryBoxDescriptionDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateDeliveryBoxDescription\UpdateDeliveryBoxDescriptionRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateDeliveryBoxPassword\UpdateDeliveryBoxPassword400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateDeliveryBoxPassword\UpdateDeliveryBoxPassword403Response;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateDeliveryBoxPassword\UpdateDeliveryBoxPassword404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateDeliveryBoxPassword\UpdateDeliveryBoxPassword500Response;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateDeliveryBoxPassword\UpdateDeliveryBoxPassword503Response;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateDeliveryBoxPassword\UpdateDeliveryBoxPasswordDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateDeliveryBoxPassword\UpdateDeliveryBoxPasswordRequest;

/**
 * Client for Mail API
 *
 * The mail API allows you to manage your mail accounts.
 *
 * DO NOT EDIT; this class was generated by the mittwald/api-client-builder package
 * (https://github.com/mittwald/api-client-php-builder). Please make any changes
 * there.
 *
 * @generated
 * @see https://github.com/mittwald/api-client-php-builder
 */
class MailClient
{
    private Client $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * Delete a specific deliverybox
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/mail-deliverybox-delete
     * @throws GuzzleException
     * @param DeliveryboxDelete\DeliveryboxDeleteRequest $request An object representing the request for this operation
     * @return EmptyResponse OK
     */
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

    /**
     * Get a specific deliverybox
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/mail-deliverybox-get-specific
     * @throws GuzzleException
     * @param DeliveryboxGetSpecific\DeliveryboxGetSpecificRequest $request An object representing the request for this operation
     * @return DeliveryboxGetSpecific\DeliveryboxGetSpecific200Response|EmptyResponse OK
     */
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

    /**
     * Update the description of an deliverybox
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/mail-deliverybox-update-description-deprecated
     * @throws GuzzleException
     * @param DeliveryboxUpdateDescriptionDeprecated\DeliveryboxUpdateDescriptionDeprecatedRequest $request An object representing the request for this operation
     * @return EmptyResponse OK
     */
    public function deliveryboxUpdateDescriptionDeprecated(DeliveryboxUpdateDescriptionDeprecatedRequest $request): EmptyResponse
    {
        $httpRequest = new Request(DeliveryboxUpdateDescriptionDeprecatedRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200, 403, 404, 500, 503 => new EmptyResponse($httpResponse),
        };
    }

    /**
     * Update the password for a specific deliverybox
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/mail-deliverybox-update-password-deprecated
     * @throws GuzzleException
     * @param DeliveryboxUpdatePasswordDeprecated\DeliveryboxUpdatePasswordDeprecatedRequest $request An object representing the request for this operation
     * @return EmptyResponse OK
     */
    public function deliveryboxUpdatePasswordDeprecated(DeliveryboxUpdatePasswordDeprecatedRequest $request): EmptyResponse
    {
        $httpRequest = new Request(DeliveryboxUpdatePasswordDeprecatedRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200, 403, 404, 500, 503 => new EmptyResponse($httpResponse),
        };
    }

    /**
     * Create a new mail address
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/mail-mailaddress-create
     * @throws GuzzleException
     * @param MailaddressCreate\MailaddressCreateRequest $request An object representing the request for this operation
     * @return MailaddressCreate\MailaddressCreate201Response|MailaddressCreate\MailaddressCreate400Response|EmptyResponse OK
     */
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

    /**
     * Get all mail addresses for a project ID
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/mail-mailaddress-list
     * @throws GuzzleException
     * @param MailaddressList\MailaddressListRequest $request An object representing the request for this operation
     * @return MailaddressList\MailaddressList200Response|EmptyResponse OK
     */
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

    /**
     * Delete a specific mail address
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/mail-mailaddress-delete
     * @throws GuzzleException
     * @param MailaddressDelete\MailaddressDeleteRequest $request An object representing the request for this operation
     * @return EmptyResponse OK
     */
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

    /**
     * Get a specific mail address
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/mail-mailaddress-get-specific
     * @throws GuzzleException
     * @param MailaddressGetSpecific\MailaddressGetSpecificRequest $request An object representing the request for this operation
     * @return MailaddressGetSpecific\MailaddressGetSpecific200Response|EmptyResponse OK
     */
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

    /**
     * Update mail-address
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/mail-mailaddress-update-address
     * @throws GuzzleException
     * @param MailaddressUpdateAddress\MailaddressUpdateAddressRequest $request An object representing the request for this operation
     * @return EmptyResponse OK
     */
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

    /**
     * Update the auto responder of a mail address
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/mail-mailaddress-update-autoresponder
     * @throws GuzzleException
     * @param MailaddressUpdateAutoresponder\MailaddressUpdateAutoresponderRequest $request An object representing the request for this operation
     * @return EmptyResponse OK
     */
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

    /**
     * Enable or disable the catchAll flag for a specific mail address
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/mail-mailaddress-update-catchall
     * @throws GuzzleException
     * @param MailaddressUpdateCatchall\MailaddressUpdateCatchallRequest $request An object representing the request for this operation
     * @return EmptyResponse|MailaddressUpdateCatchall\MailaddressUpdateCatchall400Response OK
     */
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

    /**
     * Update the addresses an email is forwarded to
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/mail-mailaddress-update-forwardaddresses
     * @throws GuzzleException
     * @param MailaddressUpdateForwardaddresses\MailaddressUpdateForwardaddressesRequest $request An object representing the request for this operation
     * @return EmptyResponse OK
     */
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

    /**
     * Update the password for a specific mail address
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/mail-mailaddress-update-password
     * @throws GuzzleException
     * @param MailaddressUpdatePassword\MailaddressUpdatePasswordRequest $request An object representing the request for this operation
     * @return EmptyResponse OK
     */
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

    /**
     * Update the quota of a mailbox
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/mail-mailaddress-update-quota
     * @throws GuzzleException
     * @param MailaddressUpdateQuota\MailaddressUpdateQuotaRequest $request An object representing the request for this operation
     * @return EmptyResponse OK
     */
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

    /**
     * Update the spamprotection of a mailbox
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/mail-mailaddress-update-spamprotection
     * @throws GuzzleException
     * @param MailaddressUpdateSpamprotection\MailaddressUpdateSpamprotectionRequest $request An object representing the request for this operation
     * @return EmptyResponse OK
     */
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

    /**
     * Get settings for a given project ID
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/mail-projectsetting-get-specific
     * @throws GuzzleException
     * @param ProjectsettingGetSpecific\ProjectsettingGetSpecificRequest $request An object representing the request for this operation
     * @return ProjectsettingGetSpecific\ProjectsettingGetSpecific200Response|EmptyResponse OK
     */
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

    /**
     * Update blacklist for a given project ID
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/mail-projectsetting-update-blacklist
     * @throws GuzzleException
     * @param ProjectsettingUpdateBlacklist\ProjectsettingUpdateBlacklistRequest $request An object representing the request for this operation
     * @return EmptyResponse OK
     */
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

    /**
     * Update whitelist for a given project ID
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/mail-projectsetting-update-whitelist
     * @throws GuzzleException
     * @param ProjectsettingUpdateWhitelist\ProjectsettingUpdateWhitelistRequest $request An object representing the request for this operation
     * @return EmptyResponse OK
     */
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

    /**
     * Delete a DeliveryBox.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/mail-delete-delivery-box
     * @throws GuzzleException
     * @param DeleteDeliveryBox\DeleteDeliveryBoxRequest $request An object representing the request for this operation
     * @return EmptyResponse|DeleteDeliveryBox\DeleteDeliveryBox400Response|DeleteDeliveryBox\DeleteDeliveryBox403Response|DeleteDeliveryBox\DeleteDeliveryBox404Response|DeleteDeliveryBox\DeleteDeliveryBox500Response|DeleteDeliveryBox\DeleteDeliveryBox503Response|DeleteDeliveryBox\DeleteDeliveryBoxDefaultResponse OK
     */
    public function deleteDeliveryBox(DeleteDeliveryBoxRequest $request): EmptyResponse|DeleteDeliveryBox400Response|DeleteDeliveryBox403Response|DeleteDeliveryBox404Response|DeleteDeliveryBox500Response|DeleteDeliveryBox503Response|DeleteDeliveryBoxDefaultResponse
    {
        $httpRequest = new Request(DeleteDeliveryBoxRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => new EmptyResponse($httpResponse),
            400 => DeleteDeliveryBox400Response::fromResponse($httpResponse),
            403 => DeleteDeliveryBox403Response::fromResponse($httpResponse),
            404 => DeleteDeliveryBox404Response::fromResponse($httpResponse),
            500 => DeleteDeliveryBox500Response::fromResponse($httpResponse),
            503 => DeleteDeliveryBox503Response::fromResponse($httpResponse),
            default => DeleteDeliveryBoxDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Get a DeliveryBox.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/mail-get-delivery-box
     * @throws GuzzleException
     * @param GetDeliveryBox\GetDeliveryBoxRequest $request An object representing the request for this operation
     * @return GetDeliveryBox\GetDeliveryBox200Response|GetDeliveryBox\GetDeliveryBox400Response|GetDeliveryBox\GetDeliveryBox403Response|GetDeliveryBox\GetDeliveryBox404Response|GetDeliveryBox\GetDeliveryBox500Response|GetDeliveryBox\GetDeliveryBox503Response|GetDeliveryBox\GetDeliveryBoxDefaultResponse OK
     */
    public function getDeliveryBox(GetDeliveryBoxRequest $request): GetDeliveryBox200Response|GetDeliveryBox400Response|GetDeliveryBox403Response|GetDeliveryBox404Response|GetDeliveryBox500Response|GetDeliveryBox503Response|GetDeliveryBoxDefaultResponse
    {
        $httpRequest = new Request(GetDeliveryBoxRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => GetDeliveryBox200Response::fromResponse($httpResponse),
            400 => GetDeliveryBox400Response::fromResponse($httpResponse),
            403 => GetDeliveryBox403Response::fromResponse($httpResponse),
            404 => GetDeliveryBox404Response::fromResponse($httpResponse),
            500 => GetDeliveryBox500Response::fromResponse($httpResponse),
            503 => GetDeliveryBox503Response::fromResponse($httpResponse),
            default => GetDeliveryBoxDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * List DeliveryBoxes belonging to a Project.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/mail-list-delivery-boxes
     * @throws GuzzleException
     * @param ListDeliveryBoxes\ListDeliveryBoxesRequest $request An object representing the request for this operation
     * @return ListDeliveryBoxes\ListDeliveryBoxes200Response|ListDeliveryBoxes\ListDeliveryBoxes400Response|ListDeliveryBoxes\ListDeliveryBoxes403Response|ListDeliveryBoxes\ListDeliveryBoxes404Response|ListDeliveryBoxes\ListDeliveryBoxes500Response|ListDeliveryBoxes\ListDeliveryBoxes503Response|ListDeliveryBoxes\ListDeliveryBoxesDefaultResponse OK
     */
    public function listDeliveryBoxes(ListDeliveryBoxesRequest $request): ListDeliveryBoxes200Response|ListDeliveryBoxes400Response|ListDeliveryBoxes403Response|ListDeliveryBoxes404Response|ListDeliveryBoxes500Response|ListDeliveryBoxes503Response|ListDeliveryBoxesDefaultResponse
    {
        $httpRequest = new Request(ListDeliveryBoxesRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => ListDeliveryBoxes200Response::fromResponse($httpResponse),
            400 => ListDeliveryBoxes400Response::fromResponse($httpResponse),
            403 => ListDeliveryBoxes403Response::fromResponse($httpResponse),
            404 => ListDeliveryBoxes404Response::fromResponse($httpResponse),
            500 => ListDeliveryBoxes500Response::fromResponse($httpResponse),
            503 => ListDeliveryBoxes503Response::fromResponse($httpResponse),
            default => ListDeliveryBoxesDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Create a DeliveryBox.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/mail-create-deliverybox
     * @throws GuzzleException
     * @param CreateDeliverybox\CreateDeliveryboxRequest $request An object representing the request for this operation
     * @return CreateDeliverybox\CreateDeliverybox201Response|CreateDeliverybox\CreateDeliverybox400Response|CreateDeliverybox\CreateDeliverybox403Response|CreateDeliverybox\CreateDeliverybox404Response|CreateDeliverybox\CreateDeliverybox500Response|CreateDeliverybox\CreateDeliverybox503Response|CreateDeliverybox\CreateDeliveryboxDefaultResponse OK
     */
    public function createDeliverybox(CreateDeliveryboxRequest $request): CreateDeliverybox201Response|CreateDeliverybox400Response|CreateDeliverybox403Response|CreateDeliverybox404Response|CreateDeliverybox500Response|CreateDeliverybox503Response|CreateDeliveryboxDefaultResponse
    {
        $httpRequest = new Request(CreateDeliveryboxRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            201 => CreateDeliverybox201Response::fromResponse($httpResponse),
            400 => CreateDeliverybox400Response::fromResponse($httpResponse),
            403 => CreateDeliverybox403Response::fromResponse($httpResponse),
            404 => CreateDeliverybox404Response::fromResponse($httpResponse),
            500 => CreateDeliverybox500Response::fromResponse($httpResponse),
            503 => CreateDeliverybox503Response::fromResponse($httpResponse),
            default => CreateDeliveryboxDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Update the description of a DeliveryBox.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/mail-update-delivery-box-description
     * @throws GuzzleException
     * @param UpdateDeliveryBoxDescription\UpdateDeliveryBoxDescriptionRequest $request An object representing the request for this operation
     * @return EmptyResponse|UpdateDeliveryBoxDescription\UpdateDeliveryBoxDescription400Response|UpdateDeliveryBoxDescription\UpdateDeliveryBoxDescription403Response|UpdateDeliveryBoxDescription\UpdateDeliveryBoxDescription404Response|UpdateDeliveryBoxDescription\UpdateDeliveryBoxDescription500Response|UpdateDeliveryBoxDescription\UpdateDeliveryBoxDescription503Response|UpdateDeliveryBoxDescription\UpdateDeliveryBoxDescriptionDefaultResponse OK
     */
    public function updateDeliveryBoxDescription(UpdateDeliveryBoxDescriptionRequest $request): EmptyResponse|UpdateDeliveryBoxDescription400Response|UpdateDeliveryBoxDescription403Response|UpdateDeliveryBoxDescription404Response|UpdateDeliveryBoxDescription500Response|UpdateDeliveryBoxDescription503Response|UpdateDeliveryBoxDescriptionDefaultResponse
    {
        $httpRequest = new Request(UpdateDeliveryBoxDescriptionRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => new EmptyResponse($httpResponse),
            400 => UpdateDeliveryBoxDescription400Response::fromResponse($httpResponse),
            403 => UpdateDeliveryBoxDescription403Response::fromResponse($httpResponse),
            404 => UpdateDeliveryBoxDescription404Response::fromResponse($httpResponse),
            500 => UpdateDeliveryBoxDescription500Response::fromResponse($httpResponse),
            503 => UpdateDeliveryBoxDescription503Response::fromResponse($httpResponse),
            default => UpdateDeliveryBoxDescriptionDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Update the password of a DeliveryBox.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/mail-update-delivery-box-password
     * @throws GuzzleException
     * @param UpdateDeliveryBoxPassword\UpdateDeliveryBoxPasswordRequest $request An object representing the request for this operation
     * @return EmptyResponse|UpdateDeliveryBoxPassword\UpdateDeliveryBoxPassword400Response|UpdateDeliveryBoxPassword\UpdateDeliveryBoxPassword403Response|UpdateDeliveryBoxPassword\UpdateDeliveryBoxPassword404Response|UpdateDeliveryBoxPassword\UpdateDeliveryBoxPassword500Response|UpdateDeliveryBoxPassword\UpdateDeliveryBoxPassword503Response|UpdateDeliveryBoxPassword\UpdateDeliveryBoxPasswordDefaultResponse OK
     */
    public function updateDeliveryBoxPassword(UpdateDeliveryBoxPasswordRequest $request): EmptyResponse|UpdateDeliveryBoxPassword400Response|UpdateDeliveryBoxPassword403Response|UpdateDeliveryBoxPassword404Response|UpdateDeliveryBoxPassword500Response|UpdateDeliveryBoxPassword503Response|UpdateDeliveryBoxPasswordDefaultResponse
    {
        $httpRequest = new Request(UpdateDeliveryBoxPasswordRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => new EmptyResponse($httpResponse),
            400 => UpdateDeliveryBoxPassword400Response::fromResponse($httpResponse),
            403 => UpdateDeliveryBoxPassword403Response::fromResponse($httpResponse),
            404 => UpdateDeliveryBoxPassword404Response::fromResponse($httpResponse),
            500 => UpdateDeliveryBoxPassword500Response::fromResponse($httpResponse),
            503 => UpdateDeliveryBoxPassword503Response::fromResponse($httpResponse),
            default => UpdateDeliveryBoxPasswordDefaultResponse::fromResponse($httpResponse),
        };
    }
}
