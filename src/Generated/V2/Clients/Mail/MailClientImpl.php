<?php

namespace Mittwald\ApiClient\Generated\V2\Clients\Mail;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Psr7\Request;
use Mittwald\ApiClient\Client\EmptyResponse;
use Mittwald\ApiClient\Error\UnexpectedResponseException;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\CreateDeliverybox\CreateDeliveryboxBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\CreateDeliverybox\CreateDeliveryboxCreatedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\CreateDeliverybox\CreateDeliveryboxDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\CreateDeliverybox\CreateDeliveryboxForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\CreateDeliverybox\CreateDeliveryboxInternalServerErrorResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\CreateDeliverybox\CreateDeliveryboxNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\CreateDeliverybox\CreateDeliveryboxRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\CreateDeliverybox\CreateDeliveryboxServiceUnavailableResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\CreateMailAddress\CreateMailAddressBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\CreateMailAddress\CreateMailAddressCreatedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\CreateMailAddress\CreateMailAddressDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\CreateMailAddress\CreateMailAddressForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\CreateMailAddress\CreateMailAddressInternalServerErrorResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\CreateMailAddress\CreateMailAddressNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\CreateMailAddress\CreateMailAddressRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\CreateMailAddress\CreateMailAddressServiceUnavailableResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeleteDeliveryBox\DeleteDeliveryBoxBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeleteDeliveryBox\DeleteDeliveryBoxDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeleteDeliveryBox\DeleteDeliveryBoxForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeleteDeliveryBox\DeleteDeliveryBoxInternalServerErrorResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeleteDeliveryBox\DeleteDeliveryBoxNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeleteDeliveryBox\DeleteDeliveryBoxRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeleteDeliveryBox\DeleteDeliveryBoxServiceUnavailableResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeleteMailAddress\DeleteMailAddressBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeleteMailAddress\DeleteMailAddressDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeleteMailAddress\DeleteMailAddressForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeleteMailAddress\DeleteMailAddressInternalServerErrorResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeleteMailAddress\DeleteMailAddressNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeleteMailAddress\DeleteMailAddressRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeleteMailAddress\DeleteMailAddressServiceUnavailableResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeliveryboxUpdateDescriptionDeprecated\DeliveryboxUpdateDescriptionDeprecatedRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeliveryboxUpdatePasswordDeprecated\DeliveryboxUpdatePasswordDeprecatedRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\GetDeliveryBox\GetDeliveryBoxBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\GetDeliveryBox\GetDeliveryBoxDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\GetDeliveryBox\GetDeliveryBoxForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\GetDeliveryBox\GetDeliveryBoxInternalServerErrorResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\GetDeliveryBox\GetDeliveryBoxNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\GetDeliveryBox\GetDeliveryBoxOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\GetDeliveryBox\GetDeliveryBoxRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\GetDeliveryBox\GetDeliveryBoxServiceUnavailableResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\GetMailAddress\GetMailAddressBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\GetMailAddress\GetMailAddressDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\GetMailAddress\GetMailAddressForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\GetMailAddress\GetMailAddressInternalServerErrorResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\GetMailAddress\GetMailAddressNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\GetMailAddress\GetMailAddressOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\GetMailAddress\GetMailAddressRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\GetMailAddress\GetMailAddressServiceUnavailableResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\ListDeliveryBoxes\ListDeliveryBoxesBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\ListDeliveryBoxes\ListDeliveryBoxesDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\ListDeliveryBoxes\ListDeliveryBoxesForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\ListDeliveryBoxes\ListDeliveryBoxesInternalServerErrorResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\ListDeliveryBoxes\ListDeliveryBoxesNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\ListDeliveryBoxes\ListDeliveryBoxesOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\ListDeliveryBoxes\ListDeliveryBoxesRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\ListDeliveryBoxes\ListDeliveryBoxesServiceUnavailableResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\ListMailAddresses\ListMailAddressesBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\ListMailAddresses\ListMailAddressesDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\ListMailAddresses\ListMailAddressesForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\ListMailAddresses\ListMailAddressesInternalServerErrorResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\ListMailAddresses\ListMailAddressesNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\ListMailAddresses\ListMailAddressesOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\ListMailAddresses\ListMailAddressesRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\ListMailAddresses\ListMailAddressesServiceUnavailableResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\ListProjectMailSettings\ListProjectMailSettingsBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\ListProjectMailSettings\ListProjectMailSettingsDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\ListProjectMailSettings\ListProjectMailSettingsForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\ListProjectMailSettings\ListProjectMailSettingsInternalServerErrorResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\ListProjectMailSettings\ListProjectMailSettingsNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\ListProjectMailSettings\ListProjectMailSettingsOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\ListProjectMailSettings\ListProjectMailSettingsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\ListProjectMailSettings\ListProjectMailSettingsServiceUnavailableResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\MailaddressUpdateAddressDeprecated\MailaddressUpdateAddressDeprecatedRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\ProjectsettingUpdateBlacklistDeprecated\ProjectsettingUpdateBlacklistDeprecatedRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\ProjectsettingUpdateWhitelistDeprecated\ProjectsettingUpdateWhitelistDeprecatedRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateDeliveryBoxDescription\UpdateDeliveryBoxDescriptionBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateDeliveryBoxDescription\UpdateDeliveryBoxDescriptionDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateDeliveryBoxDescription\UpdateDeliveryBoxDescriptionForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateDeliveryBoxDescription\UpdateDeliveryBoxDescriptionInternalServerErrorResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateDeliveryBoxDescription\UpdateDeliveryBoxDescriptionNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateDeliveryBoxDescription\UpdateDeliveryBoxDescriptionRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateDeliveryBoxDescription\UpdateDeliveryBoxDescriptionServiceUnavailableResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateDeliveryBoxPassword\UpdateDeliveryBoxPasswordBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateDeliveryBoxPassword\UpdateDeliveryBoxPasswordDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateDeliveryBoxPassword\UpdateDeliveryBoxPasswordForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateDeliveryBoxPassword\UpdateDeliveryBoxPasswordInternalServerErrorResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateDeliveryBoxPassword\UpdateDeliveryBoxPasswordNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateDeliveryBoxPassword\UpdateDeliveryBoxPasswordRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateDeliveryBoxPassword\UpdateDeliveryBoxPasswordServiceUnavailableResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressAddress\UpdateMailAddressAddressBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressAddress\UpdateMailAddressAddressDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressAddress\UpdateMailAddressAddressForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressAddress\UpdateMailAddressAddressInternalServerErrorResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressAddress\UpdateMailAddressAddressNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressAddress\UpdateMailAddressAddressRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressAddress\UpdateMailAddressAddressServiceUnavailableResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressAutoresponder\UpdateMailAddressAutoresponderBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressAutoresponder\UpdateMailAddressAutoresponderDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressAutoresponder\UpdateMailAddressAutoresponderForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressAutoresponder\UpdateMailAddressAutoresponderInternalServerErrorResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressAutoresponder\UpdateMailAddressAutoresponderNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressAutoresponder\UpdateMailAddressAutoresponderRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressAutoresponder\UpdateMailAddressAutoresponderServiceUnavailableResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressAutoresponderV2Deprecated\UpdateMailAddressAutoresponderV2DeprecatedBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressAutoresponderV2Deprecated\UpdateMailAddressAutoresponderV2DeprecatedDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressAutoresponderV2Deprecated\UpdateMailAddressAutoresponderV2DeprecatedForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressAutoresponderV2Deprecated\UpdateMailAddressAutoresponderV2DeprecatedInternalServerErrorResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressAutoresponderV2Deprecated\UpdateMailAddressAutoresponderV2DeprecatedNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressAutoresponderV2Deprecated\UpdateMailAddressAutoresponderV2DeprecatedRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressAutoresponderV2Deprecated\UpdateMailAddressAutoresponderV2DeprecatedServiceUnavailableResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressCatchAll\UpdateMailAddressCatchAllBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressCatchAll\UpdateMailAddressCatchAllDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressCatchAll\UpdateMailAddressCatchAllForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressCatchAll\UpdateMailAddressCatchAllInternalServerErrorResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressCatchAll\UpdateMailAddressCatchAllNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressCatchAll\UpdateMailAddressCatchAllRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressCatchAll\UpdateMailAddressCatchAllServiceUnavailableResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressCatchallV2Deprecated\UpdateMailAddressCatchallV2DeprecatedBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressCatchallV2Deprecated\UpdateMailAddressCatchallV2DeprecatedDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressCatchallV2Deprecated\UpdateMailAddressCatchallV2DeprecatedForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressCatchallV2Deprecated\UpdateMailAddressCatchallV2DeprecatedInternalServerErrorResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressCatchallV2Deprecated\UpdateMailAddressCatchallV2DeprecatedNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressCatchallV2Deprecated\UpdateMailAddressCatchallV2DeprecatedRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressCatchallV2Deprecated\UpdateMailAddressCatchallV2DeprecatedServiceUnavailableResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressForwardAddresses\UpdateMailAddressForwardAddressesBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressForwardAddresses\UpdateMailAddressForwardAddressesDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressForwardAddresses\UpdateMailAddressForwardAddressesForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressForwardAddresses\UpdateMailAddressForwardAddressesInternalServerErrorResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressForwardAddresses\UpdateMailAddressForwardAddressesNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressForwardAddresses\UpdateMailAddressForwardAddressesRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressForwardAddresses\UpdateMailAddressForwardAddressesServiceUnavailableResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressForwardAddressesV2Deprecated\UpdateMailAddressForwardAddressesV2DeprecatedBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressForwardAddressesV2Deprecated\UpdateMailAddressForwardAddressesV2DeprecatedDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressForwardAddressesV2Deprecated\UpdateMailAddressForwardAddressesV2DeprecatedForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressForwardAddressesV2Deprecated\UpdateMailAddressForwardAddressesV2DeprecatedInternalServerErrorResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressForwardAddressesV2Deprecated\UpdateMailAddressForwardAddressesV2DeprecatedNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressForwardAddressesV2Deprecated\UpdateMailAddressForwardAddressesV2DeprecatedRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressForwardAddressesV2Deprecated\UpdateMailAddressForwardAddressesV2DeprecatedServiceUnavailableResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressPassword\UpdateMailAddressPasswordBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressPassword\UpdateMailAddressPasswordDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressPassword\UpdateMailAddressPasswordForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressPassword\UpdateMailAddressPasswordInternalServerErrorResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressPassword\UpdateMailAddressPasswordNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressPassword\UpdateMailAddressPasswordRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressPassword\UpdateMailAddressPasswordServiceUnavailableResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressPasswordV2Deprecated\UpdateMailAddressPasswordV2DeprecatedBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressPasswordV2Deprecated\UpdateMailAddressPasswordV2DeprecatedDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressPasswordV2Deprecated\UpdateMailAddressPasswordV2DeprecatedForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressPasswordV2Deprecated\UpdateMailAddressPasswordV2DeprecatedInternalServerErrorResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressPasswordV2Deprecated\UpdateMailAddressPasswordV2DeprecatedNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressPasswordV2Deprecated\UpdateMailAddressPasswordV2DeprecatedRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressPasswordV2Deprecated\UpdateMailAddressPasswordV2DeprecatedServiceUnavailableResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressQuota\UpdateMailAddressQuotaBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressQuota\UpdateMailAddressQuotaDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressQuota\UpdateMailAddressQuotaForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressQuota\UpdateMailAddressQuotaInternalServerErrorResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressQuota\UpdateMailAddressQuotaNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressQuota\UpdateMailAddressQuotaRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressQuota\UpdateMailAddressQuotaServiceUnavailableResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressQuotaV2Deprecated\UpdateMailAddressQuotaV2DeprecatedBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressQuotaV2Deprecated\UpdateMailAddressQuotaV2DeprecatedDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressQuotaV2Deprecated\UpdateMailAddressQuotaV2DeprecatedForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressQuotaV2Deprecated\UpdateMailAddressQuotaV2DeprecatedInternalServerErrorResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressQuotaV2Deprecated\UpdateMailAddressQuotaV2DeprecatedNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressQuotaV2Deprecated\UpdateMailAddressQuotaV2DeprecatedRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressQuotaV2Deprecated\UpdateMailAddressQuotaV2DeprecatedServiceUnavailableResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressSpamProtection\UpdateMailAddressSpamProtectionBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressSpamProtection\UpdateMailAddressSpamProtectionDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressSpamProtection\UpdateMailAddressSpamProtectionForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressSpamProtection\UpdateMailAddressSpamProtectionInternalServerErrorResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressSpamProtection\UpdateMailAddressSpamProtectionNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressSpamProtection\UpdateMailAddressSpamProtectionRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressSpamProtection\UpdateMailAddressSpamProtectionServiceUnavailableResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressSpamProtectionV2Deprecated\UpdateMailAddressSpamProtectionV2DeprecatedBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressSpamProtectionV2Deprecated\UpdateMailAddressSpamProtectionV2DeprecatedDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressSpamProtectionV2Deprecated\UpdateMailAddressSpamProtectionV2DeprecatedForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressSpamProtectionV2Deprecated\UpdateMailAddressSpamProtectionV2DeprecatedInternalServerErrorResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressSpamProtectionV2Deprecated\UpdateMailAddressSpamProtectionV2DeprecatedNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressSpamProtectionV2Deprecated\UpdateMailAddressSpamProtectionV2DeprecatedRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressSpamProtectionV2Deprecated\UpdateMailAddressSpamProtectionV2DeprecatedServiceUnavailableResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateProjectMailSetting\UpdateProjectMailSettingBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateProjectMailSetting\UpdateProjectMailSettingDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateProjectMailSetting\UpdateProjectMailSettingForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateProjectMailSetting\UpdateProjectMailSettingInternalServerErrorResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateProjectMailSetting\UpdateProjectMailSettingNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateProjectMailSetting\UpdateProjectMailSettingRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateProjectMailSetting\UpdateProjectMailSettingServiceUnavailableResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateProjectMailSettingV2Deprecated\UpdateProjectMailSettingV2DeprecatedBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateProjectMailSettingV2Deprecated\UpdateProjectMailSettingV2DeprecatedDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateProjectMailSettingV2Deprecated\UpdateProjectMailSettingV2DeprecatedForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateProjectMailSettingV2Deprecated\UpdateProjectMailSettingV2DeprecatedInternalServerErrorResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateProjectMailSettingV2Deprecated\UpdateProjectMailSettingV2DeprecatedNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateProjectMailSettingV2Deprecated\UpdateProjectMailSettingV2DeprecatedRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateProjectMailSettingV2Deprecated\UpdateProjectMailSettingV2DeprecatedServiceUnavailableResponse;

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
class MailClientImpl implements MailClient
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
     * @throws UnexpectedResponseException
     * @param CreateDeliverybox\CreateDeliveryboxRequest $request An object representing the request for this operation
     * @return CreateDeliverybox\CreateDeliveryboxCreatedResponse OK
     */
    public function createDeliverybox(CreateDeliveryboxRequest $request): CreateDeliveryboxCreatedResponse
    {
        $httpRequest = new Request(CreateDeliveryboxRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        if ($httpResponse->getStatusCode() === 201) {
            return CreateDeliveryboxCreatedResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => CreateDeliveryboxBadRequestResponse::fromResponse($httpResponse),
            403 => CreateDeliveryboxForbiddenResponse::fromResponse($httpResponse),
            404 => CreateDeliveryboxNotFoundResponse::fromResponse($httpResponse),
            500 => CreateDeliveryboxInternalServerErrorResponse::fromResponse($httpResponse),
            503 => CreateDeliveryboxServiceUnavailableResponse::fromResponse($httpResponse),
            default => CreateDeliveryboxDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Create a MailAddress.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/mail-create-mail-address
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param CreateMailAddress\CreateMailAddressRequest $request An object representing the request for this operation
     * @return CreateMailAddress\CreateMailAddressCreatedResponse OK
     */
    public function createMailAddress(CreateMailAddressRequest $request): CreateMailAddressCreatedResponse
    {
        $httpRequest = new Request(CreateMailAddressRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        if ($httpResponse->getStatusCode() === 201) {
            return CreateMailAddressCreatedResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => CreateMailAddressBadRequestResponse::fromResponse($httpResponse),
            403 => CreateMailAddressForbiddenResponse::fromResponse($httpResponse),
            404 => CreateMailAddressNotFoundResponse::fromResponse($httpResponse),
            500 => CreateMailAddressInternalServerErrorResponse::fromResponse($httpResponse),
            503 => CreateMailAddressServiceUnavailableResponse::fromResponse($httpResponse),
            default => CreateMailAddressDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Delete a DeliveryBox.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/mail-delete-delivery-box
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeleteDeliveryBox\DeleteDeliveryBoxRequest $request An object representing the request for this operation
     * @return EmptyResponse OK
     */
    public function deleteDeliveryBox(DeleteDeliveryBoxRequest $request): EmptyResponse
    {
        $httpRequest = new Request(DeleteDeliveryBoxRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        if ($httpResponse->getStatusCode() === 200) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => DeleteDeliveryBoxBadRequestResponse::fromResponse($httpResponse),
            403 => DeleteDeliveryBoxForbiddenResponse::fromResponse($httpResponse),
            404 => DeleteDeliveryBoxNotFoundResponse::fromResponse($httpResponse),
            500 => DeleteDeliveryBoxInternalServerErrorResponse::fromResponse($httpResponse),
            503 => DeleteDeliveryBoxServiceUnavailableResponse::fromResponse($httpResponse),
            default => DeleteDeliveryBoxDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Delete a MailAddress.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/mail-delete-mail-address
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeleteMailAddress\DeleteMailAddressRequest $request An object representing the request for this operation
     * @return EmptyResponse OK
     */
    public function deleteMailAddress(DeleteMailAddressRequest $request): EmptyResponse
    {
        $httpRequest = new Request(DeleteMailAddressRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        if ($httpResponse->getStatusCode() === 200) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => DeleteMailAddressBadRequestResponse::fromResponse($httpResponse),
            403 => DeleteMailAddressForbiddenResponse::fromResponse($httpResponse),
            404 => DeleteMailAddressNotFoundResponse::fromResponse($httpResponse),
            500 => DeleteMailAddressInternalServerErrorResponse::fromResponse($httpResponse),
            503 => DeleteMailAddressServiceUnavailableResponse::fromResponse($httpResponse),
            default => DeleteMailAddressDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Update the description of an deliverybox
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/mail-deliverybox-update-description-deprecated
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeliveryboxUpdateDescriptionDeprecated\DeliveryboxUpdateDescriptionDeprecatedRequest $request An object representing the request for this operation
     * @deprecated
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
        if ($httpResponse->getStatusCode() === 200) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            403, 404, 500, 503 => new EmptyResponse($httpResponse),
        });
    }

    /**
     * Update the password for a specific deliverybox
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/mail-deliverybox-update-password-deprecated
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeliveryboxUpdatePasswordDeprecated\DeliveryboxUpdatePasswordDeprecatedRequest $request An object representing the request for this operation
     * @deprecated
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
        if ($httpResponse->getStatusCode() === 200) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            403, 404, 500, 503 => new EmptyResponse($httpResponse),
        });
    }

    /**
     * Get a DeliveryBox.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/mail-get-delivery-box
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetDeliveryBox\GetDeliveryBoxRequest $request An object representing the request for this operation
     * @return GetDeliveryBox\GetDeliveryBoxOKResponse OK
     */
    public function getDeliveryBox(GetDeliveryBoxRequest $request): GetDeliveryBoxOKResponse
    {
        $httpRequest = new Request(GetDeliveryBoxRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        if ($httpResponse->getStatusCode() === 200) {
            return GetDeliveryBoxOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => GetDeliveryBoxBadRequestResponse::fromResponse($httpResponse),
            403 => GetDeliveryBoxForbiddenResponse::fromResponse($httpResponse),
            404 => GetDeliveryBoxNotFoundResponse::fromResponse($httpResponse),
            500 => GetDeliveryBoxInternalServerErrorResponse::fromResponse($httpResponse),
            503 => GetDeliveryBoxServiceUnavailableResponse::fromResponse($httpResponse),
            default => GetDeliveryBoxDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get a MailAddress.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/mail-get-mail-address
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetMailAddress\GetMailAddressRequest $request An object representing the request for this operation
     * @return GetMailAddress\GetMailAddressOKResponse OK
     */
    public function getMailAddress(GetMailAddressRequest $request): GetMailAddressOKResponse
    {
        $httpRequest = new Request(GetMailAddressRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        if ($httpResponse->getStatusCode() === 200) {
            return GetMailAddressOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => GetMailAddressBadRequestResponse::fromResponse($httpResponse),
            403 => GetMailAddressForbiddenResponse::fromResponse($httpResponse),
            404 => GetMailAddressNotFoundResponse::fromResponse($httpResponse),
            500 => GetMailAddressInternalServerErrorResponse::fromResponse($httpResponse),
            503 => GetMailAddressServiceUnavailableResponse::fromResponse($httpResponse),
            default => GetMailAddressDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * List DeliveryBoxes belonging to a Project.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/mail-list-delivery-boxes
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ListDeliveryBoxes\ListDeliveryBoxesRequest $request An object representing the request for this operation
     * @return ListDeliveryBoxes\ListDeliveryBoxesOKResponse OK
     */
    public function listDeliveryBoxes(ListDeliveryBoxesRequest $request): ListDeliveryBoxesOKResponse
    {
        $httpRequest = new Request(ListDeliveryBoxesRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        if ($httpResponse->getStatusCode() === 200) {
            return ListDeliveryBoxesOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => ListDeliveryBoxesBadRequestResponse::fromResponse($httpResponse),
            403 => ListDeliveryBoxesForbiddenResponse::fromResponse($httpResponse),
            404 => ListDeliveryBoxesNotFoundResponse::fromResponse($httpResponse),
            500 => ListDeliveryBoxesInternalServerErrorResponse::fromResponse($httpResponse),
            503 => ListDeliveryBoxesServiceUnavailableResponse::fromResponse($httpResponse),
            default => ListDeliveryBoxesDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * List MailAddresses belonging to a Project.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/mail-list-mail-addresses
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ListMailAddresses\ListMailAddressesRequest $request An object representing the request for this operation
     * @return ListMailAddresses\ListMailAddressesOKResponse OK
     */
    public function listMailAddresses(ListMailAddressesRequest $request): ListMailAddressesOKResponse
    {
        $httpRequest = new Request(ListMailAddressesRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        if ($httpResponse->getStatusCode() === 200) {
            return ListMailAddressesOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => ListMailAddressesBadRequestResponse::fromResponse($httpResponse),
            403 => ListMailAddressesForbiddenResponse::fromResponse($httpResponse),
            404 => ListMailAddressesNotFoundResponse::fromResponse($httpResponse),
            500 => ListMailAddressesInternalServerErrorResponse::fromResponse($httpResponse),
            503 => ListMailAddressesServiceUnavailableResponse::fromResponse($httpResponse),
            default => ListMailAddressesDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * List mail settings of a Project.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/mail-list-project-mail-settings
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ListProjectMailSettings\ListProjectMailSettingsRequest $request An object representing the request for this operation
     * @return ListProjectMailSettings\ListProjectMailSettingsOKResponse OK
     */
    public function listProjectMailSettings(ListProjectMailSettingsRequest $request): ListProjectMailSettingsOKResponse
    {
        $httpRequest = new Request(ListProjectMailSettingsRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        if ($httpResponse->getStatusCode() === 200) {
            return ListProjectMailSettingsOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => ListProjectMailSettingsBadRequestResponse::fromResponse($httpResponse),
            403 => ListProjectMailSettingsForbiddenResponse::fromResponse($httpResponse),
            404 => ListProjectMailSettingsNotFoundResponse::fromResponse($httpResponse),
            500 => ListProjectMailSettingsInternalServerErrorResponse::fromResponse($httpResponse),
            503 => ListProjectMailSettingsServiceUnavailableResponse::fromResponse($httpResponse),
            default => ListProjectMailSettingsDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Update mail-address
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/mail-mailaddress-update-address-deprecated
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param MailaddressUpdateAddressDeprecated\MailaddressUpdateAddressDeprecatedRequest $request An object representing the request for this operation
     * @deprecated
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
        if ($httpResponse->getStatusCode() === 200) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            403, 404, 500, 503 => new EmptyResponse($httpResponse),
        });
    }

    /**
     * Update blacklist for a given project ID
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/mail-projectsetting-update-blacklist-deprecated
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ProjectsettingUpdateBlacklistDeprecated\ProjectsettingUpdateBlacklistDeprecatedRequest $request An object representing the request for this operation
     * @deprecated
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
        if ($httpResponse->getStatusCode() === 200) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            403, 404, 500, 503 => new EmptyResponse($httpResponse),
        });
    }

    /**
     * Update whitelist for a given project ID
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/mail-projectsetting-update-whitelist-deprecated
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ProjectsettingUpdateWhitelistDeprecated\ProjectsettingUpdateWhitelistDeprecatedRequest $request An object representing the request for this operation
     * @deprecated
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
        if ($httpResponse->getStatusCode() === 200) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            403, 404, 500, 503 => new EmptyResponse($httpResponse),
        });
    }

    /**
     * Update the description of a DeliveryBox.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/mail-update-delivery-box-description
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param UpdateDeliveryBoxDescription\UpdateDeliveryBoxDescriptionRequest $request An object representing the request for this operation
     * @return EmptyResponse OK
     */
    public function updateDeliveryBoxDescription(UpdateDeliveryBoxDescriptionRequest $request): EmptyResponse
    {
        $httpRequest = new Request(UpdateDeliveryBoxDescriptionRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        if ($httpResponse->getStatusCode() === 200) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => UpdateDeliveryBoxDescriptionBadRequestResponse::fromResponse($httpResponse),
            403 => UpdateDeliveryBoxDescriptionForbiddenResponse::fromResponse($httpResponse),
            404 => UpdateDeliveryBoxDescriptionNotFoundResponse::fromResponse($httpResponse),
            500 => UpdateDeliveryBoxDescriptionInternalServerErrorResponse::fromResponse($httpResponse),
            503 => UpdateDeliveryBoxDescriptionServiceUnavailableResponse::fromResponse($httpResponse),
            default => UpdateDeliveryBoxDescriptionDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Update the password of a DeliveryBox.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/mail-update-delivery-box-password
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param UpdateDeliveryBoxPassword\UpdateDeliveryBoxPasswordRequest $request An object representing the request for this operation
     * @return EmptyResponse OK
     */
    public function updateDeliveryBoxPassword(UpdateDeliveryBoxPasswordRequest $request): EmptyResponse
    {
        $httpRequest = new Request(UpdateDeliveryBoxPasswordRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        if ($httpResponse->getStatusCode() === 200) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => UpdateDeliveryBoxPasswordBadRequestResponse::fromResponse($httpResponse),
            403 => UpdateDeliveryBoxPasswordForbiddenResponse::fromResponse($httpResponse),
            404 => UpdateDeliveryBoxPasswordNotFoundResponse::fromResponse($httpResponse),
            500 => UpdateDeliveryBoxPasswordInternalServerErrorResponse::fromResponse($httpResponse),
            503 => UpdateDeliveryBoxPasswordServiceUnavailableResponse::fromResponse($httpResponse),
            default => UpdateDeliveryBoxPasswordDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Update a MailAddress.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/mail-update-mail-address-address
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param UpdateMailAddressAddress\UpdateMailAddressAddressRequest $request An object representing the request for this operation
     * @return EmptyResponse OK
     */
    public function updateMailAddressAddress(UpdateMailAddressAddressRequest $request): EmptyResponse
    {
        $httpRequest = new Request(UpdateMailAddressAddressRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        if ($httpResponse->getStatusCode() === 200) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => UpdateMailAddressAddressBadRequestResponse::fromResponse($httpResponse),
            403 => UpdateMailAddressAddressForbiddenResponse::fromResponse($httpResponse),
            404 => UpdateMailAddressAddressNotFoundResponse::fromResponse($httpResponse),
            500 => UpdateMailAddressAddressInternalServerErrorResponse::fromResponse($httpResponse),
            503 => UpdateMailAddressAddressServiceUnavailableResponse::fromResponse($httpResponse),
            default => UpdateMailAddressAddressDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Update the autoresponder of a MailAddress.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/mail-update-mail-address-autoresponder
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param UpdateMailAddressAutoresponder\UpdateMailAddressAutoresponderRequest $request An object representing the request for this operation
     * @return EmptyResponse OK
     */
    public function updateMailAddressAutoresponder(UpdateMailAddressAutoresponderRequest $request): EmptyResponse
    {
        $httpRequest = new Request(UpdateMailAddressAutoresponderRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        if ($httpResponse->getStatusCode() === 200) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => UpdateMailAddressAutoresponderBadRequestResponse::fromResponse($httpResponse),
            403 => UpdateMailAddressAutoresponderForbiddenResponse::fromResponse($httpResponse),
            404 => UpdateMailAddressAutoresponderNotFoundResponse::fromResponse($httpResponse),
            500 => UpdateMailAddressAutoresponderInternalServerErrorResponse::fromResponse($httpResponse),
            503 => UpdateMailAddressAutoresponderServiceUnavailableResponse::fromResponse($httpResponse),
            default => UpdateMailAddressAutoresponderDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Update the autoresponder of a MailAddress.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/mail-update-mail-address-autoresponder-v2-deprecated
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param UpdateMailAddressAutoresponderV2Deprecated\UpdateMailAddressAutoresponderV2DeprecatedRequest $request An object representing the request for this operation
     * @deprecated
     * @return EmptyResponse OK
     */
    public function updateMailAddressAutoresponderV2Deprecated(UpdateMailAddressAutoresponderV2DeprecatedRequest $request): EmptyResponse
    {
        $httpRequest = new Request(UpdateMailAddressAutoresponderV2DeprecatedRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        if ($httpResponse->getStatusCode() === 200) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => UpdateMailAddressAutoresponderV2DeprecatedBadRequestResponse::fromResponse($httpResponse),
            403 => UpdateMailAddressAutoresponderV2DeprecatedForbiddenResponse::fromResponse($httpResponse),
            404 => UpdateMailAddressAutoresponderV2DeprecatedNotFoundResponse::fromResponse($httpResponse),
            500 => UpdateMailAddressAutoresponderV2DeprecatedInternalServerErrorResponse::fromResponse($httpResponse),
            503 => UpdateMailAddressAutoresponderV2DeprecatedServiceUnavailableResponse::fromResponse($httpResponse),
            default => UpdateMailAddressAutoresponderV2DeprecatedDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Update the catchall of a MailAddress.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/mail-update-mail-address-catch-all
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param UpdateMailAddressCatchAll\UpdateMailAddressCatchAllRequest $request An object representing the request for this operation
     * @return EmptyResponse OK
     */
    public function updateMailAddressCatchAll(UpdateMailAddressCatchAllRequest $request): EmptyResponse
    {
        $httpRequest = new Request(UpdateMailAddressCatchAllRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        if ($httpResponse->getStatusCode() === 200) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => UpdateMailAddressCatchAllBadRequestResponse::fromResponse($httpResponse),
            403 => UpdateMailAddressCatchAllForbiddenResponse::fromResponse($httpResponse),
            404 => UpdateMailAddressCatchAllNotFoundResponse::fromResponse($httpResponse),
            500 => UpdateMailAddressCatchAllInternalServerErrorResponse::fromResponse($httpResponse),
            503 => UpdateMailAddressCatchAllServiceUnavailableResponse::fromResponse($httpResponse),
            default => UpdateMailAddressCatchAllDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Update the catchall of a MailAddress.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/mail-update-mail-address-catchall-v2-deprecated
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param UpdateMailAddressCatchallV2Deprecated\UpdateMailAddressCatchallV2DeprecatedRequest $request An object representing the request for this operation
     * @deprecated
     * @return EmptyResponse OK
     */
    public function updateMailAddressCatchallV2Deprecated(UpdateMailAddressCatchallV2DeprecatedRequest $request): EmptyResponse
    {
        $httpRequest = new Request(UpdateMailAddressCatchallV2DeprecatedRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        if ($httpResponse->getStatusCode() === 200) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => UpdateMailAddressCatchallV2DeprecatedBadRequestResponse::fromResponse($httpResponse),
            403 => UpdateMailAddressCatchallV2DeprecatedForbiddenResponse::fromResponse($httpResponse),
            404 => UpdateMailAddressCatchallV2DeprecatedNotFoundResponse::fromResponse($httpResponse),
            500 => UpdateMailAddressCatchallV2DeprecatedInternalServerErrorResponse::fromResponse($httpResponse),
            503 => UpdateMailAddressCatchallV2DeprecatedServiceUnavailableResponse::fromResponse($httpResponse),
            default => UpdateMailAddressCatchallV2DeprecatedDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Update the forward addresses of a MailAddresses.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/mail-update-mail-address-forward-addresses
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param UpdateMailAddressForwardAddresses\UpdateMailAddressForwardAddressesRequest $request An object representing the request for this operation
     * @return EmptyResponse OK
     */
    public function updateMailAddressForwardAddresses(UpdateMailAddressForwardAddressesRequest $request): EmptyResponse
    {
        $httpRequest = new Request(UpdateMailAddressForwardAddressesRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        if ($httpResponse->getStatusCode() === 200) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => UpdateMailAddressForwardAddressesBadRequestResponse::fromResponse($httpResponse),
            403 => UpdateMailAddressForwardAddressesForbiddenResponse::fromResponse($httpResponse),
            404 => UpdateMailAddressForwardAddressesNotFoundResponse::fromResponse($httpResponse),
            500 => UpdateMailAddressForwardAddressesInternalServerErrorResponse::fromResponse($httpResponse),
            503 => UpdateMailAddressForwardAddressesServiceUnavailableResponse::fromResponse($httpResponse),
            default => UpdateMailAddressForwardAddressesDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Update the forward addresses of a MailAddresses.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/mail-update-mail-address-forward-addresses-v2-deprecated
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param UpdateMailAddressForwardAddressesV2Deprecated\UpdateMailAddressForwardAddressesV2DeprecatedRequest $request An object representing the request for this operation
     * @deprecated
     * @return EmptyResponse OK
     */
    public function updateMailAddressForwardAddressesV2Deprecated(UpdateMailAddressForwardAddressesV2DeprecatedRequest $request): EmptyResponse
    {
        $httpRequest = new Request(UpdateMailAddressForwardAddressesV2DeprecatedRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        if ($httpResponse->getStatusCode() === 200) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => UpdateMailAddressForwardAddressesV2DeprecatedBadRequestResponse::fromResponse($httpResponse),
            403 => UpdateMailAddressForwardAddressesV2DeprecatedForbiddenResponse::fromResponse($httpResponse),
            404 => UpdateMailAddressForwardAddressesV2DeprecatedNotFoundResponse::fromResponse($httpResponse),
            500 => UpdateMailAddressForwardAddressesV2DeprecatedInternalServerErrorResponse::fromResponse($httpResponse),
            503 => UpdateMailAddressForwardAddressesV2DeprecatedServiceUnavailableResponse::fromResponse($httpResponse),
            default => UpdateMailAddressForwardAddressesV2DeprecatedDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Update the password for a MailAddress.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/mail-update-mail-address-password
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param UpdateMailAddressPassword\UpdateMailAddressPasswordRequest $request An object representing the request for this operation
     * @return EmptyResponse OK
     */
    public function updateMailAddressPassword(UpdateMailAddressPasswordRequest $request): EmptyResponse
    {
        $httpRequest = new Request(UpdateMailAddressPasswordRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        if ($httpResponse->getStatusCode() === 200) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => UpdateMailAddressPasswordBadRequestResponse::fromResponse($httpResponse),
            403 => UpdateMailAddressPasswordForbiddenResponse::fromResponse($httpResponse),
            404 => UpdateMailAddressPasswordNotFoundResponse::fromResponse($httpResponse),
            500 => UpdateMailAddressPasswordInternalServerErrorResponse::fromResponse($httpResponse),
            503 => UpdateMailAddressPasswordServiceUnavailableResponse::fromResponse($httpResponse),
            default => UpdateMailAddressPasswordDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Update the password for a MailAddress.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/mail-update-mail-address-password-v2-deprecated
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param UpdateMailAddressPasswordV2Deprecated\UpdateMailAddressPasswordV2DeprecatedRequest $request An object representing the request for this operation
     * @deprecated
     * @return EmptyResponse OK
     */
    public function updateMailAddressPasswordV2Deprecated(UpdateMailAddressPasswordV2DeprecatedRequest $request): EmptyResponse
    {
        $httpRequest = new Request(UpdateMailAddressPasswordV2DeprecatedRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        if ($httpResponse->getStatusCode() === 200) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => UpdateMailAddressPasswordV2DeprecatedBadRequestResponse::fromResponse($httpResponse),
            403 => UpdateMailAddressPasswordV2DeprecatedForbiddenResponse::fromResponse($httpResponse),
            404 => UpdateMailAddressPasswordV2DeprecatedNotFoundResponse::fromResponse($httpResponse),
            500 => UpdateMailAddressPasswordV2DeprecatedInternalServerErrorResponse::fromResponse($httpResponse),
            503 => UpdateMailAddressPasswordV2DeprecatedServiceUnavailableResponse::fromResponse($httpResponse),
            default => UpdateMailAddressPasswordV2DeprecatedDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Update the quota of a MailAddress.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/mail-update-mail-address-quota
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param UpdateMailAddressQuota\UpdateMailAddressQuotaRequest $request An object representing the request for this operation
     * @return EmptyResponse OK
     */
    public function updateMailAddressQuota(UpdateMailAddressQuotaRequest $request): EmptyResponse
    {
        $httpRequest = new Request(UpdateMailAddressQuotaRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        if ($httpResponse->getStatusCode() === 200) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => UpdateMailAddressQuotaBadRequestResponse::fromResponse($httpResponse),
            403 => UpdateMailAddressQuotaForbiddenResponse::fromResponse($httpResponse),
            404 => UpdateMailAddressQuotaNotFoundResponse::fromResponse($httpResponse),
            500 => UpdateMailAddressQuotaInternalServerErrorResponse::fromResponse($httpResponse),
            503 => UpdateMailAddressQuotaServiceUnavailableResponse::fromResponse($httpResponse),
            default => UpdateMailAddressQuotaDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Update the quota of a MailAddress.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/mail-update-mail-address-quota-v2-deprecated
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param UpdateMailAddressQuotaV2Deprecated\UpdateMailAddressQuotaV2DeprecatedRequest $request An object representing the request for this operation
     * @deprecated
     * @return EmptyResponse OK
     */
    public function updateMailAddressQuotaV2Deprecated(UpdateMailAddressQuotaV2DeprecatedRequest $request): EmptyResponse
    {
        $httpRequest = new Request(UpdateMailAddressQuotaV2DeprecatedRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        if ($httpResponse->getStatusCode() === 200) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => UpdateMailAddressQuotaV2DeprecatedBadRequestResponse::fromResponse($httpResponse),
            403 => UpdateMailAddressQuotaV2DeprecatedForbiddenResponse::fromResponse($httpResponse),
            404 => UpdateMailAddressQuotaV2DeprecatedNotFoundResponse::fromResponse($httpResponse),
            500 => UpdateMailAddressQuotaV2DeprecatedInternalServerErrorResponse::fromResponse($httpResponse),
            503 => UpdateMailAddressQuotaV2DeprecatedServiceUnavailableResponse::fromResponse($httpResponse),
            default => UpdateMailAddressQuotaV2DeprecatedDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Update the spam protection of a MailAddress.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/mail-update-mail-address-spam-protection
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param UpdateMailAddressSpamProtection\UpdateMailAddressSpamProtectionRequest $request An object representing the request for this operation
     * @return EmptyResponse OK
     */
    public function updateMailAddressSpamProtection(UpdateMailAddressSpamProtectionRequest $request): EmptyResponse
    {
        $httpRequest = new Request(UpdateMailAddressSpamProtectionRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        if ($httpResponse->getStatusCode() === 200) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => UpdateMailAddressSpamProtectionBadRequestResponse::fromResponse($httpResponse),
            403 => UpdateMailAddressSpamProtectionForbiddenResponse::fromResponse($httpResponse),
            404 => UpdateMailAddressSpamProtectionNotFoundResponse::fromResponse($httpResponse),
            500 => UpdateMailAddressSpamProtectionInternalServerErrorResponse::fromResponse($httpResponse),
            503 => UpdateMailAddressSpamProtectionServiceUnavailableResponse::fromResponse($httpResponse),
            default => UpdateMailAddressSpamProtectionDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Update the spam protection of a MailAddress.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/mail-update-mail-address-spam-protection-v2-deprecated
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param UpdateMailAddressSpamProtectionV2Deprecated\UpdateMailAddressSpamProtectionV2DeprecatedRequest $request An object representing the request for this operation
     * @deprecated
     * @return EmptyResponse OK
     */
    public function updateMailAddressSpamProtectionV2Deprecated(UpdateMailAddressSpamProtectionV2DeprecatedRequest $request): EmptyResponse
    {
        $httpRequest = new Request(UpdateMailAddressSpamProtectionV2DeprecatedRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        if ($httpResponse->getStatusCode() === 200) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => UpdateMailAddressSpamProtectionV2DeprecatedBadRequestResponse::fromResponse($httpResponse),
            403 => UpdateMailAddressSpamProtectionV2DeprecatedForbiddenResponse::fromResponse($httpResponse),
            404 => UpdateMailAddressSpamProtectionV2DeprecatedNotFoundResponse::fromResponse($httpResponse),
            500 => UpdateMailAddressSpamProtectionV2DeprecatedInternalServerErrorResponse::fromResponse($httpResponse),
            503 => UpdateMailAddressSpamProtectionV2DeprecatedServiceUnavailableResponse::fromResponse($httpResponse),
            default => UpdateMailAddressSpamProtectionV2DeprecatedDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Update a mail setting of a Project.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/mail-update-project-mail-setting
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param UpdateProjectMailSetting\UpdateProjectMailSettingRequest $request An object representing the request for this operation
     * @return EmptyResponse OK
     */
    public function updateProjectMailSetting(UpdateProjectMailSettingRequest $request): EmptyResponse
    {
        $httpRequest = new Request(UpdateProjectMailSettingRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        if ($httpResponse->getStatusCode() === 200) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => UpdateProjectMailSettingBadRequestResponse::fromResponse($httpResponse),
            403 => UpdateProjectMailSettingForbiddenResponse::fromResponse($httpResponse),
            404 => UpdateProjectMailSettingNotFoundResponse::fromResponse($httpResponse),
            500 => UpdateProjectMailSettingInternalServerErrorResponse::fromResponse($httpResponse),
            503 => UpdateProjectMailSettingServiceUnavailableResponse::fromResponse($httpResponse),
            default => UpdateProjectMailSettingDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Update a mail setting of a Project.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/mail-update-project-mail-setting-v2-deprecated
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param UpdateProjectMailSettingV2Deprecated\UpdateProjectMailSettingV2DeprecatedRequest $request An object representing the request for this operation
     * @deprecated
     * @return EmptyResponse OK
     */
    public function updateProjectMailSettingV2Deprecated(UpdateProjectMailSettingV2DeprecatedRequest $request): EmptyResponse
    {
        $httpRequest = new Request(UpdateProjectMailSettingV2DeprecatedRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        if ($httpResponse->getStatusCode() === 200) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => UpdateProjectMailSettingV2DeprecatedBadRequestResponse::fromResponse($httpResponse),
            403 => UpdateProjectMailSettingV2DeprecatedForbiddenResponse::fromResponse($httpResponse),
            404 => UpdateProjectMailSettingV2DeprecatedNotFoundResponse::fromResponse($httpResponse),
            500 => UpdateProjectMailSettingV2DeprecatedInternalServerErrorResponse::fromResponse($httpResponse),
            503 => UpdateProjectMailSettingV2DeprecatedServiceUnavailableResponse::fromResponse($httpResponse),
            default => UpdateProjectMailSettingV2DeprecatedDefaultResponse::fromResponse($httpResponse),
        });
    }
}
