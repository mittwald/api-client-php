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
use Mittwald\ApiClient\Generated\V2\Clients\Mail\CreateMailAddress\CreateMailAddress201Response;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\CreateMailAddress\CreateMailAddress400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\CreateMailAddress\CreateMailAddress403Response;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\CreateMailAddress\CreateMailAddress404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\CreateMailAddress\CreateMailAddress500Response;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\CreateMailAddress\CreateMailAddress503Response;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\CreateMailAddress\CreateMailAddressDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\CreateMailAddress\CreateMailAddressRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeleteDeliveryBox\DeleteDeliveryBox400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeleteDeliveryBox\DeleteDeliveryBox403Response;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeleteDeliveryBox\DeleteDeliveryBox404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeleteDeliveryBox\DeleteDeliveryBox500Response;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeleteDeliveryBox\DeleteDeliveryBox503Response;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeleteDeliveryBox\DeleteDeliveryBoxDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeleteDeliveryBox\DeleteDeliveryBoxRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeleteMailAddress\DeleteMailAddress400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeleteMailAddress\DeleteMailAddress403Response;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeleteMailAddress\DeleteMailAddress404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeleteMailAddress\DeleteMailAddress500Response;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeleteMailAddress\DeleteMailAddress503Response;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeleteMailAddress\DeleteMailAddressDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeleteMailAddress\DeleteMailAddressRequest;
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
use Mittwald\ApiClient\Generated\V2\Clients\Mail\GetMailAddress\GetMailAddress200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\GetMailAddress\GetMailAddress400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\GetMailAddress\GetMailAddress403Response;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\GetMailAddress\GetMailAddress404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\GetMailAddress\GetMailAddress500Response;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\GetMailAddress\GetMailAddress503Response;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\GetMailAddress\GetMailAddressDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\GetMailAddress\GetMailAddressRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\ListDeliveryBoxes\ListDeliveryBoxes200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\ListDeliveryBoxes\ListDeliveryBoxes400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\ListDeliveryBoxes\ListDeliveryBoxes403Response;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\ListDeliveryBoxes\ListDeliveryBoxes404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\ListDeliveryBoxes\ListDeliveryBoxes500Response;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\ListDeliveryBoxes\ListDeliveryBoxes503Response;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\ListDeliveryBoxes\ListDeliveryBoxesDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\ListDeliveryBoxes\ListDeliveryBoxesRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\ListMailAddresses\ListMailAddresses200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\ListMailAddresses\ListMailAddresses400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\ListMailAddresses\ListMailAddresses403Response;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\ListMailAddresses\ListMailAddresses404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\ListMailAddresses\ListMailAddresses500Response;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\ListMailAddresses\ListMailAddresses503Response;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\ListMailAddresses\ListMailAddressesDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\ListMailAddresses\ListMailAddressesRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\ListProjectMailSettings\ListProjectMailSettings200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\ListProjectMailSettings\ListProjectMailSettings400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\ListProjectMailSettings\ListProjectMailSettings403Response;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\ListProjectMailSettings\ListProjectMailSettings404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\ListProjectMailSettings\ListProjectMailSettings500Response;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\ListProjectMailSettings\ListProjectMailSettings503Response;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\ListProjectMailSettings\ListProjectMailSettingsDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\ListProjectMailSettings\ListProjectMailSettingsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\MailaddressUpdateAddressDeprecated\MailaddressUpdateAddressDeprecatedRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\ProjectsettingUpdateBlacklistDeprecated\ProjectsettingUpdateBlacklistDeprecatedRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\ProjectsettingUpdateWhitelistDeprecated\ProjectsettingUpdateWhitelistDeprecatedRequest;
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
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressAddress\UpdateMailAddressAddress400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressAddress\UpdateMailAddressAddress403Response;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressAddress\UpdateMailAddressAddress404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressAddress\UpdateMailAddressAddress500Response;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressAddress\UpdateMailAddressAddress503Response;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressAddress\UpdateMailAddressAddressDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressAddress\UpdateMailAddressAddressRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressAutoresponder\UpdateMailAddressAutoresponder400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressAutoresponder\UpdateMailAddressAutoresponder403Response;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressAutoresponder\UpdateMailAddressAutoresponder404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressAutoresponder\UpdateMailAddressAutoresponder500Response;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressAutoresponder\UpdateMailAddressAutoresponder503Response;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressAutoresponder\UpdateMailAddressAutoresponderDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressAutoresponder\UpdateMailAddressAutoresponderRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressCatchall\UpdateMailAddressCatchall400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressCatchall\UpdateMailAddressCatchall403Response;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressCatchall\UpdateMailAddressCatchall404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressCatchall\UpdateMailAddressCatchall500Response;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressCatchall\UpdateMailAddressCatchall503Response;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressCatchall\UpdateMailAddressCatchallDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressCatchall\UpdateMailAddressCatchallRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressForwardAddresses\UpdateMailAddressForwardAddresses400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressForwardAddresses\UpdateMailAddressForwardAddresses403Response;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressForwardAddresses\UpdateMailAddressForwardAddresses404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressForwardAddresses\UpdateMailAddressForwardAddresses500Response;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressForwardAddresses\UpdateMailAddressForwardAddresses503Response;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressForwardAddresses\UpdateMailAddressForwardAddressesDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressForwardAddresses\UpdateMailAddressForwardAddressesRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressPassword\UpdateMailAddressPassword400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressPassword\UpdateMailAddressPassword403Response;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressPassword\UpdateMailAddressPassword404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressPassword\UpdateMailAddressPassword500Response;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressPassword\UpdateMailAddressPassword503Response;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressPassword\UpdateMailAddressPasswordDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressPassword\UpdateMailAddressPasswordRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressQuota\UpdateMailAddressQuota400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressQuota\UpdateMailAddressQuota403Response;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressQuota\UpdateMailAddressQuota404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressQuota\UpdateMailAddressQuota500Response;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressQuota\UpdateMailAddressQuota503Response;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressQuota\UpdateMailAddressQuotaDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressQuota\UpdateMailAddressQuotaRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressSpamProtection\UpdateMailAddressSpamProtection400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressSpamProtection\UpdateMailAddressSpamProtection403Response;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressSpamProtection\UpdateMailAddressSpamProtection404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressSpamProtection\UpdateMailAddressSpamProtection500Response;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressSpamProtection\UpdateMailAddressSpamProtection503Response;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressSpamProtection\UpdateMailAddressSpamProtectionDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressSpamProtection\UpdateMailAddressSpamProtectionRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateProjectMailSetting\UpdateProjectMailSetting400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateProjectMailSetting\UpdateProjectMailSetting403Response;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateProjectMailSetting\UpdateProjectMailSetting404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateProjectMailSetting\UpdateProjectMailSetting500Response;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateProjectMailSetting\UpdateProjectMailSetting503Response;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateProjectMailSetting\UpdateProjectMailSettingDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateProjectMailSetting\UpdateProjectMailSettingRequest;

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
     * Create a MailAddress.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/mail-create-mail-address
     * @throws GuzzleException
     * @param CreateMailAddress\CreateMailAddressRequest $request An object representing the request for this operation
     * @return CreateMailAddress\CreateMailAddress201Response|CreateMailAddress\CreateMailAddress400Response|CreateMailAddress\CreateMailAddress403Response|CreateMailAddress\CreateMailAddress404Response|CreateMailAddress\CreateMailAddress500Response|CreateMailAddress\CreateMailAddress503Response|CreateMailAddress\CreateMailAddressDefaultResponse OK
     */
    public function createMailAddress(CreateMailAddressRequest $request): CreateMailAddress201Response|CreateMailAddress400Response|CreateMailAddress403Response|CreateMailAddress404Response|CreateMailAddress500Response|CreateMailAddress503Response|CreateMailAddressDefaultResponse
    {
        $httpRequest = new Request(CreateMailAddressRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            201 => CreateMailAddress201Response::fromResponse($httpResponse),
            400 => CreateMailAddress400Response::fromResponse($httpResponse),
            403 => CreateMailAddress403Response::fromResponse($httpResponse),
            404 => CreateMailAddress404Response::fromResponse($httpResponse),
            500 => CreateMailAddress500Response::fromResponse($httpResponse),
            503 => CreateMailAddress503Response::fromResponse($httpResponse),
            default => CreateMailAddressDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * List MailAddresses belonging to a Project.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/mail-list-mail-addresses
     * @throws GuzzleException
     * @param ListMailAddresses\ListMailAddressesRequest $request An object representing the request for this operation
     * @return ListMailAddresses\ListMailAddresses200Response|ListMailAddresses\ListMailAddresses400Response|ListMailAddresses\ListMailAddresses403Response|ListMailAddresses\ListMailAddresses404Response|ListMailAddresses\ListMailAddresses500Response|ListMailAddresses\ListMailAddresses503Response|ListMailAddresses\ListMailAddressesDefaultResponse OK
     */
    public function listMailAddresses(ListMailAddressesRequest $request): ListMailAddresses200Response|ListMailAddresses400Response|ListMailAddresses403Response|ListMailAddresses404Response|ListMailAddresses500Response|ListMailAddresses503Response|ListMailAddressesDefaultResponse
    {
        $httpRequest = new Request(ListMailAddressesRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => ListMailAddresses200Response::fromResponse($httpResponse),
            400 => ListMailAddresses400Response::fromResponse($httpResponse),
            403 => ListMailAddresses403Response::fromResponse($httpResponse),
            404 => ListMailAddresses404Response::fromResponse($httpResponse),
            500 => ListMailAddresses500Response::fromResponse($httpResponse),
            503 => ListMailAddresses503Response::fromResponse($httpResponse),
            default => ListMailAddressesDefaultResponse::fromResponse($httpResponse),
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
     * Delete a MailAddress.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/mail-delete-mail-address
     * @throws GuzzleException
     * @param DeleteMailAddress\DeleteMailAddressRequest $request An object representing the request for this operation
     * @return EmptyResponse|DeleteMailAddress\DeleteMailAddress400Response|DeleteMailAddress\DeleteMailAddress403Response|DeleteMailAddress\DeleteMailAddress404Response|DeleteMailAddress\DeleteMailAddress500Response|DeleteMailAddress\DeleteMailAddress503Response|DeleteMailAddress\DeleteMailAddressDefaultResponse OK
     */
    public function deleteMailAddress(DeleteMailAddressRequest $request): EmptyResponse|DeleteMailAddress400Response|DeleteMailAddress403Response|DeleteMailAddress404Response|DeleteMailAddress500Response|DeleteMailAddress503Response|DeleteMailAddressDefaultResponse
    {
        $httpRequest = new Request(DeleteMailAddressRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => new EmptyResponse($httpResponse),
            400 => DeleteMailAddress400Response::fromResponse($httpResponse),
            403 => DeleteMailAddress403Response::fromResponse($httpResponse),
            404 => DeleteMailAddress404Response::fromResponse($httpResponse),
            500 => DeleteMailAddress500Response::fromResponse($httpResponse),
            503 => DeleteMailAddress503Response::fromResponse($httpResponse),
            default => DeleteMailAddressDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Get a MailAddress.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/mail-get-mail-address
     * @throws GuzzleException
     * @param GetMailAddress\GetMailAddressRequest $request An object representing the request for this operation
     * @return GetMailAddress\GetMailAddress200Response|GetMailAddress\GetMailAddress400Response|GetMailAddress\GetMailAddress403Response|GetMailAddress\GetMailAddress404Response|GetMailAddress\GetMailAddress500Response|GetMailAddress\GetMailAddress503Response|GetMailAddress\GetMailAddressDefaultResponse OK
     */
    public function getMailAddress(GetMailAddressRequest $request): GetMailAddress200Response|GetMailAddress400Response|GetMailAddress403Response|GetMailAddress404Response|GetMailAddress500Response|GetMailAddress503Response|GetMailAddressDefaultResponse
    {
        $httpRequest = new Request(GetMailAddressRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => GetMailAddress200Response::fromResponse($httpResponse),
            400 => GetMailAddress400Response::fromResponse($httpResponse),
            403 => GetMailAddress403Response::fromResponse($httpResponse),
            404 => GetMailAddress404Response::fromResponse($httpResponse),
            500 => GetMailAddress500Response::fromResponse($httpResponse),
            503 => GetMailAddress503Response::fromResponse($httpResponse),
            default => GetMailAddressDefaultResponse::fromResponse($httpResponse),
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
     * List mail settings of a Project.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/mail-list-project-mail-settings
     * @throws GuzzleException
     * @param ListProjectMailSettings\ListProjectMailSettingsRequest $request An object representing the request for this operation
     * @return ListProjectMailSettings\ListProjectMailSettings200Response|ListProjectMailSettings\ListProjectMailSettings400Response|ListProjectMailSettings\ListProjectMailSettings403Response|ListProjectMailSettings\ListProjectMailSettings404Response|ListProjectMailSettings\ListProjectMailSettings500Response|ListProjectMailSettings\ListProjectMailSettings503Response|ListProjectMailSettings\ListProjectMailSettingsDefaultResponse OK
     */
    public function listProjectMailSettings(ListProjectMailSettingsRequest $request): ListProjectMailSettings200Response|ListProjectMailSettings400Response|ListProjectMailSettings403Response|ListProjectMailSettings404Response|ListProjectMailSettings500Response|ListProjectMailSettings503Response|ListProjectMailSettingsDefaultResponse
    {
        $httpRequest = new Request(ListProjectMailSettingsRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => ListProjectMailSettings200Response::fromResponse($httpResponse),
            400 => ListProjectMailSettings400Response::fromResponse($httpResponse),
            403 => ListProjectMailSettings403Response::fromResponse($httpResponse),
            404 => ListProjectMailSettings404Response::fromResponse($httpResponse),
            500 => ListProjectMailSettings500Response::fromResponse($httpResponse),
            503 => ListProjectMailSettings503Response::fromResponse($httpResponse),
            default => ListProjectMailSettingsDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Update mail-address
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/mail-mailaddress-update-address-deprecated
     * @throws GuzzleException
     * @param MailaddressUpdateAddressDeprecated\MailaddressUpdateAddressDeprecatedRequest $request An object representing the request for this operation
     * @return EmptyResponse OK
     */
    public function mailaddressUpdateAddressDeprecated(MailaddressUpdateAddressDeprecatedRequest $request): EmptyResponse
    {
        $httpRequest = new Request(MailaddressUpdateAddressDeprecatedRequest::method, $request->getUrl());
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
     * Update blacklist for a given project ID
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/mail-projectsetting-update-blacklist-deprecated
     * @throws GuzzleException
     * @param ProjectsettingUpdateBlacklistDeprecated\ProjectsettingUpdateBlacklistDeprecatedRequest $request An object representing the request for this operation
     * @return EmptyResponse OK
     */
    public function projectsettingUpdateBlacklistDeprecated(ProjectsettingUpdateBlacklistDeprecatedRequest $request): EmptyResponse
    {
        $httpRequest = new Request(ProjectsettingUpdateBlacklistDeprecatedRequest::method, $request->getUrl());
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
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/mail-projectsetting-update-whitelist-deprecated
     * @throws GuzzleException
     * @param ProjectsettingUpdateWhitelistDeprecated\ProjectsettingUpdateWhitelistDeprecatedRequest $request An object representing the request for this operation
     * @return EmptyResponse OK
     */
    public function projectsettingUpdateWhitelistDeprecated(ProjectsettingUpdateWhitelistDeprecatedRequest $request): EmptyResponse
    {
        $httpRequest = new Request(ProjectsettingUpdateWhitelistDeprecatedRequest::method, $request->getUrl());
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

    /**
     * Update a MailAddress.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/mail-update-mail-address-address
     * @throws GuzzleException
     * @param UpdateMailAddressAddress\UpdateMailAddressAddressRequest $request An object representing the request for this operation
     * @return EmptyResponse|UpdateMailAddressAddress\UpdateMailAddressAddress400Response|UpdateMailAddressAddress\UpdateMailAddressAddress403Response|UpdateMailAddressAddress\UpdateMailAddressAddress404Response|UpdateMailAddressAddress\UpdateMailAddressAddress500Response|UpdateMailAddressAddress\UpdateMailAddressAddress503Response|UpdateMailAddressAddress\UpdateMailAddressAddressDefaultResponse OK
     */
    public function updateMailAddressAddress(UpdateMailAddressAddressRequest $request): EmptyResponse|UpdateMailAddressAddress400Response|UpdateMailAddressAddress403Response|UpdateMailAddressAddress404Response|UpdateMailAddressAddress500Response|UpdateMailAddressAddress503Response|UpdateMailAddressAddressDefaultResponse
    {
        $httpRequest = new Request(UpdateMailAddressAddressRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => new EmptyResponse($httpResponse),
            400 => UpdateMailAddressAddress400Response::fromResponse($httpResponse),
            403 => UpdateMailAddressAddress403Response::fromResponse($httpResponse),
            404 => UpdateMailAddressAddress404Response::fromResponse($httpResponse),
            500 => UpdateMailAddressAddress500Response::fromResponse($httpResponse),
            503 => UpdateMailAddressAddress503Response::fromResponse($httpResponse),
            default => UpdateMailAddressAddressDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Update the autoresponder of a MailAddress.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/mail-update-mail-address-autoresponder
     * @throws GuzzleException
     * @param UpdateMailAddressAutoresponder\UpdateMailAddressAutoresponderRequest $request An object representing the request for this operation
     * @return EmptyResponse|UpdateMailAddressAutoresponder\UpdateMailAddressAutoresponder400Response|UpdateMailAddressAutoresponder\UpdateMailAddressAutoresponder403Response|UpdateMailAddressAutoresponder\UpdateMailAddressAutoresponder404Response|UpdateMailAddressAutoresponder\UpdateMailAddressAutoresponder500Response|UpdateMailAddressAutoresponder\UpdateMailAddressAutoresponder503Response|UpdateMailAddressAutoresponder\UpdateMailAddressAutoresponderDefaultResponse OK
     */
    public function updateMailAddressAutoresponder(UpdateMailAddressAutoresponderRequest $request): EmptyResponse|UpdateMailAddressAutoresponder400Response|UpdateMailAddressAutoresponder403Response|UpdateMailAddressAutoresponder404Response|UpdateMailAddressAutoresponder500Response|UpdateMailAddressAutoresponder503Response|UpdateMailAddressAutoresponderDefaultResponse
    {
        $httpRequest = new Request(UpdateMailAddressAutoresponderRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => new EmptyResponse($httpResponse),
            400 => UpdateMailAddressAutoresponder400Response::fromResponse($httpResponse),
            403 => UpdateMailAddressAutoresponder403Response::fromResponse($httpResponse),
            404 => UpdateMailAddressAutoresponder404Response::fromResponse($httpResponse),
            500 => UpdateMailAddressAutoresponder500Response::fromResponse($httpResponse),
            503 => UpdateMailAddressAutoresponder503Response::fromResponse($httpResponse),
            default => UpdateMailAddressAutoresponderDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Update the catchall of a MailAddress.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/mail-update-mail-address-catchall
     * @throws GuzzleException
     * @param UpdateMailAddressCatchall\UpdateMailAddressCatchallRequest $request An object representing the request for this operation
     * @return EmptyResponse|UpdateMailAddressCatchall\UpdateMailAddressCatchall400Response|UpdateMailAddressCatchall\UpdateMailAddressCatchall403Response|UpdateMailAddressCatchall\UpdateMailAddressCatchall404Response|UpdateMailAddressCatchall\UpdateMailAddressCatchall500Response|UpdateMailAddressCatchall\UpdateMailAddressCatchall503Response|UpdateMailAddressCatchall\UpdateMailAddressCatchallDefaultResponse OK
     */
    public function updateMailAddressCatchall(UpdateMailAddressCatchallRequest $request): EmptyResponse|UpdateMailAddressCatchall400Response|UpdateMailAddressCatchall403Response|UpdateMailAddressCatchall404Response|UpdateMailAddressCatchall500Response|UpdateMailAddressCatchall503Response|UpdateMailAddressCatchallDefaultResponse
    {
        $httpRequest = new Request(UpdateMailAddressCatchallRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => new EmptyResponse($httpResponse),
            400 => UpdateMailAddressCatchall400Response::fromResponse($httpResponse),
            403 => UpdateMailAddressCatchall403Response::fromResponse($httpResponse),
            404 => UpdateMailAddressCatchall404Response::fromResponse($httpResponse),
            500 => UpdateMailAddressCatchall500Response::fromResponse($httpResponse),
            503 => UpdateMailAddressCatchall503Response::fromResponse($httpResponse),
            default => UpdateMailAddressCatchallDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Update the forward addresses of a MailAddresses.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/mail-update-mail-address-forward-addresses
     * @throws GuzzleException
     * @param UpdateMailAddressForwardAddresses\UpdateMailAddressForwardAddressesRequest $request An object representing the request for this operation
     * @return EmptyResponse|UpdateMailAddressForwardAddresses\UpdateMailAddressForwardAddresses400Response|UpdateMailAddressForwardAddresses\UpdateMailAddressForwardAddresses403Response|UpdateMailAddressForwardAddresses\UpdateMailAddressForwardAddresses404Response|UpdateMailAddressForwardAddresses\UpdateMailAddressForwardAddresses500Response|UpdateMailAddressForwardAddresses\UpdateMailAddressForwardAddresses503Response|UpdateMailAddressForwardAddresses\UpdateMailAddressForwardAddressesDefaultResponse OK
     */
    public function updateMailAddressForwardAddresses(UpdateMailAddressForwardAddressesRequest $request): EmptyResponse|UpdateMailAddressForwardAddresses400Response|UpdateMailAddressForwardAddresses403Response|UpdateMailAddressForwardAddresses404Response|UpdateMailAddressForwardAddresses500Response|UpdateMailAddressForwardAddresses503Response|UpdateMailAddressForwardAddressesDefaultResponse
    {
        $httpRequest = new Request(UpdateMailAddressForwardAddressesRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => new EmptyResponse($httpResponse),
            400 => UpdateMailAddressForwardAddresses400Response::fromResponse($httpResponse),
            403 => UpdateMailAddressForwardAddresses403Response::fromResponse($httpResponse),
            404 => UpdateMailAddressForwardAddresses404Response::fromResponse($httpResponse),
            500 => UpdateMailAddressForwardAddresses500Response::fromResponse($httpResponse),
            503 => UpdateMailAddressForwardAddresses503Response::fromResponse($httpResponse),
            default => UpdateMailAddressForwardAddressesDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Update the password for a MailAddress.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/mail-update-mail-address-password
     * @throws GuzzleException
     * @param UpdateMailAddressPassword\UpdateMailAddressPasswordRequest $request An object representing the request for this operation
     * @return EmptyResponse|UpdateMailAddressPassword\UpdateMailAddressPassword400Response|UpdateMailAddressPassword\UpdateMailAddressPassword403Response|UpdateMailAddressPassword\UpdateMailAddressPassword404Response|UpdateMailAddressPassword\UpdateMailAddressPassword500Response|UpdateMailAddressPassword\UpdateMailAddressPassword503Response|UpdateMailAddressPassword\UpdateMailAddressPasswordDefaultResponse OK
     */
    public function updateMailAddressPassword(UpdateMailAddressPasswordRequest $request): EmptyResponse|UpdateMailAddressPassword400Response|UpdateMailAddressPassword403Response|UpdateMailAddressPassword404Response|UpdateMailAddressPassword500Response|UpdateMailAddressPassword503Response|UpdateMailAddressPasswordDefaultResponse
    {
        $httpRequest = new Request(UpdateMailAddressPasswordRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => new EmptyResponse($httpResponse),
            400 => UpdateMailAddressPassword400Response::fromResponse($httpResponse),
            403 => UpdateMailAddressPassword403Response::fromResponse($httpResponse),
            404 => UpdateMailAddressPassword404Response::fromResponse($httpResponse),
            500 => UpdateMailAddressPassword500Response::fromResponse($httpResponse),
            503 => UpdateMailAddressPassword503Response::fromResponse($httpResponse),
            default => UpdateMailAddressPasswordDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Update the quota of a MailAddress.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/mail-update-mail-address-quota
     * @throws GuzzleException
     * @param UpdateMailAddressQuota\UpdateMailAddressQuotaRequest $request An object representing the request for this operation
     * @return EmptyResponse|UpdateMailAddressQuota\UpdateMailAddressQuota400Response|UpdateMailAddressQuota\UpdateMailAddressQuota403Response|UpdateMailAddressQuota\UpdateMailAddressQuota404Response|UpdateMailAddressQuota\UpdateMailAddressQuota500Response|UpdateMailAddressQuota\UpdateMailAddressQuota503Response|UpdateMailAddressQuota\UpdateMailAddressQuotaDefaultResponse OK
     */
    public function updateMailAddressQuota(UpdateMailAddressQuotaRequest $request): EmptyResponse|UpdateMailAddressQuota400Response|UpdateMailAddressQuota403Response|UpdateMailAddressQuota404Response|UpdateMailAddressQuota500Response|UpdateMailAddressQuota503Response|UpdateMailAddressQuotaDefaultResponse
    {
        $httpRequest = new Request(UpdateMailAddressQuotaRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => new EmptyResponse($httpResponse),
            400 => UpdateMailAddressQuota400Response::fromResponse($httpResponse),
            403 => UpdateMailAddressQuota403Response::fromResponse($httpResponse),
            404 => UpdateMailAddressQuota404Response::fromResponse($httpResponse),
            500 => UpdateMailAddressQuota500Response::fromResponse($httpResponse),
            503 => UpdateMailAddressQuota503Response::fromResponse($httpResponse),
            default => UpdateMailAddressQuotaDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Update the spam protection of a MailAddress.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/mail-update-mail-address-spam-protection
     * @throws GuzzleException
     * @param UpdateMailAddressSpamProtection\UpdateMailAddressSpamProtectionRequest $request An object representing the request for this operation
     * @return EmptyResponse|UpdateMailAddressSpamProtection\UpdateMailAddressSpamProtection400Response|UpdateMailAddressSpamProtection\UpdateMailAddressSpamProtection403Response|UpdateMailAddressSpamProtection\UpdateMailAddressSpamProtection404Response|UpdateMailAddressSpamProtection\UpdateMailAddressSpamProtection500Response|UpdateMailAddressSpamProtection\UpdateMailAddressSpamProtection503Response|UpdateMailAddressSpamProtection\UpdateMailAddressSpamProtectionDefaultResponse OK
     */
    public function updateMailAddressSpamProtection(UpdateMailAddressSpamProtectionRequest $request): EmptyResponse|UpdateMailAddressSpamProtection400Response|UpdateMailAddressSpamProtection403Response|UpdateMailAddressSpamProtection404Response|UpdateMailAddressSpamProtection500Response|UpdateMailAddressSpamProtection503Response|UpdateMailAddressSpamProtectionDefaultResponse
    {
        $httpRequest = new Request(UpdateMailAddressSpamProtectionRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => new EmptyResponse($httpResponse),
            400 => UpdateMailAddressSpamProtection400Response::fromResponse($httpResponse),
            403 => UpdateMailAddressSpamProtection403Response::fromResponse($httpResponse),
            404 => UpdateMailAddressSpamProtection404Response::fromResponse($httpResponse),
            500 => UpdateMailAddressSpamProtection500Response::fromResponse($httpResponse),
            503 => UpdateMailAddressSpamProtection503Response::fromResponse($httpResponse),
            default => UpdateMailAddressSpamProtectionDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Update a mail setting of a Project.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/mail-update-project-mail-setting
     * @throws GuzzleException
     * @param UpdateProjectMailSetting\UpdateProjectMailSettingRequest $request An object representing the request for this operation
     * @return EmptyResponse|UpdateProjectMailSetting\UpdateProjectMailSetting400Response|UpdateProjectMailSetting\UpdateProjectMailSetting403Response|UpdateProjectMailSetting\UpdateProjectMailSetting404Response|UpdateProjectMailSetting\UpdateProjectMailSetting500Response|UpdateProjectMailSetting\UpdateProjectMailSetting503Response|UpdateProjectMailSetting\UpdateProjectMailSettingDefaultResponse OK
     */
    public function updateProjectMailSetting(UpdateProjectMailSettingRequest $request): EmptyResponse|UpdateProjectMailSetting400Response|UpdateProjectMailSetting403Response|UpdateProjectMailSetting404Response|UpdateProjectMailSetting500Response|UpdateProjectMailSetting503Response|UpdateProjectMailSettingDefaultResponse
    {
        $httpRequest = new Request(UpdateProjectMailSettingRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => new EmptyResponse($httpResponse),
            400 => UpdateProjectMailSetting400Response::fromResponse($httpResponse),
            403 => UpdateProjectMailSetting403Response::fromResponse($httpResponse),
            404 => UpdateProjectMailSetting404Response::fromResponse($httpResponse),
            500 => UpdateProjectMailSetting500Response::fromResponse($httpResponse),
            503 => UpdateProjectMailSetting503Response::fromResponse($httpResponse),
            default => UpdateProjectMailSettingDefaultResponse::fromResponse($httpResponse),
        };
    }
}
