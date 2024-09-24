<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\Mail;

use GuzzleHttp\Exception\GuzzleException;
use Mittwald\ApiClient\Client\EmptyResponse;
use Mittwald\ApiClient\Error\UnexpectedResponseException;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\CreateDeliverybox\CreateDeliveryboxCreatedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\CreateDeliverybox\CreateDeliveryboxRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\CreateMailAddress\CreateMailAddressCreatedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\CreateMailAddress\CreateMailAddressRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeleteDeliveryBox\DeleteDeliveryBoxRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeleteMailAddress\DeleteMailAddressRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeliveryboxUpdateDescriptionDeprecated\DeliveryboxUpdateDescriptionDeprecatedRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeliveryboxUpdatePasswordDeprecated\DeliveryboxUpdatePasswordDeprecatedRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\GetDeliveryBox\GetDeliveryBoxOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\GetDeliveryBox\GetDeliveryBoxRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\GetMailAddress\GetMailAddressOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\GetMailAddress\GetMailAddressRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\ListDeliveryBoxes\ListDeliveryBoxesOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\ListDeliveryBoxes\ListDeliveryBoxesRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\ListMailAddresses\ListMailAddressesOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\ListMailAddresses\ListMailAddressesRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\ListProjectMailSettings\ListProjectMailSettingsOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\ListProjectMailSettings\ListProjectMailSettingsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\MailaddressUpdateAddressDeprecated\MailaddressUpdateAddressDeprecatedRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\MigrationCheckMigrationIsPossible\MigrationCheckMigrationIsPossibleOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\MigrationCheckMigrationIsPossible\MigrationCheckMigrationIsPossibleRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\MigrationGetMigration\MigrationGetMigrationOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\MigrationGetMigration\MigrationGetMigrationRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\MigrationListMigrations\MigrationListMigrationsOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\MigrationListMigrations\MigrationListMigrationsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\MigrationRequestMailMigration\MigrationRequestMailMigrationRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\ProjectsettingUpdateBlacklistDeprecated\ProjectsettingUpdateBlacklistDeprecatedRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\ProjectsettingUpdateWhitelistDeprecated\ProjectsettingUpdateWhitelistDeprecatedRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateDeliveryBoxDescription\UpdateDeliveryBoxDescriptionRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateDeliveryBoxPassword\UpdateDeliveryBoxPasswordRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressAddress\UpdateMailAddressAddressRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressAutoresponder\UpdateMailAddressAutoresponderRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressAutoresponderV2Deprecated\UpdateMailAddressAutoresponderV2DeprecatedRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressCatchAll\UpdateMailAddressCatchAllRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressCatchallV2Deprecated\UpdateMailAddressCatchallV2DeprecatedRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressForwardAddresses\UpdateMailAddressForwardAddressesRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressForwardAddressesV2Deprecated\UpdateMailAddressForwardAddressesV2DeprecatedRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressPassword\UpdateMailAddressPasswordRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressPasswordV2Deprecated\UpdateMailAddressPasswordV2DeprecatedRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressQuota\UpdateMailAddressQuotaRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressQuotaV2Deprecated\UpdateMailAddressQuotaV2DeprecatedRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressSpamProtection\UpdateMailAddressSpamProtectionRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressSpamProtectionV2Deprecated\UpdateMailAddressSpamProtectionV2DeprecatedRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateProjectMailSetting\UpdateProjectMailSettingRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateProjectMailSettingV2Deprecated\UpdateProjectMailSettingV2DeprecatedRequest;

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
interface MailClient
{
    /**
     * Create a DeliveryBox.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/mail-create-deliverybox
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param CreateDeliveryboxRequest $request An object representing the request for this operation
     * @return CreateDeliveryboxCreatedResponse OK
     */
    public function createDeliverybox(CreateDeliveryboxRequest $request): CreateDeliveryboxCreatedResponse;
    /**
     * Create a MailAddress.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/mail-create-mail-address
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param CreateMailAddressRequest $request An object representing the request for this operation
     * @return CreateMailAddressCreatedResponse OK
     */
    public function createMailAddress(CreateMailAddressRequest $request): CreateMailAddressCreatedResponse;
    /**
     * Delete a DeliveryBox.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/mail-delete-delivery-box
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeleteDeliveryBoxRequest $request An object representing the request for this operation
     * @return EmptyResponse OK
     */
    public function deleteDeliveryBox(DeleteDeliveryBoxRequest $request): EmptyResponse;
    /**
     * Delete a MailAddress.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/mail-delete-mail-address
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeleteMailAddressRequest $request An object representing the request for this operation
     * @return EmptyResponse OK
     */
    public function deleteMailAddress(DeleteMailAddressRequest $request): EmptyResponse;
    /**
     * Update the description of an deliverybox
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/mail-deliverybox-update-description-deprecated
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeliveryboxUpdateDescriptionDeprecatedRequest $request An object representing the request for this operation
     * @deprecated
     * @return EmptyResponse OK
     */
    public function deliveryboxUpdateDescriptionDeprecated(DeliveryboxUpdateDescriptionDeprecatedRequest $request): EmptyResponse;
    /**
     * Update the password for a specific deliverybox
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/mail-deliverybox-update-password-deprecated
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeliveryboxUpdatePasswordDeprecatedRequest $request An object representing the request for this operation
     * @deprecated
     * @return EmptyResponse OK
     */
    public function deliveryboxUpdatePasswordDeprecated(DeliveryboxUpdatePasswordDeprecatedRequest $request): EmptyResponse;
    /**
     * Get a DeliveryBox.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/mail-get-delivery-box
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetDeliveryBoxRequest $request An object representing the request for this operation
     * @return GetDeliveryBoxOKResponse OK
     */
    public function getDeliveryBox(GetDeliveryBoxRequest $request): GetDeliveryBoxOKResponse;
    /**
     * Get a MailAddress.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/mail-get-mail-address
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetMailAddressRequest $request An object representing the request for this operation
     * @return GetMailAddressOKResponse OK
     */
    public function getMailAddress(GetMailAddressRequest $request): GetMailAddressOKResponse;
    /**
     * List DeliveryBoxes belonging to a Project.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/mail-list-delivery-boxes
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ListDeliveryBoxesRequest $request An object representing the request for this operation
     * @return ListDeliveryBoxesOKResponse OK
     */
    public function listDeliveryBoxes(ListDeliveryBoxesRequest $request): ListDeliveryBoxesOKResponse;
    /**
     * List MailAddresses belonging to a Project.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/mail-list-mail-addresses
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ListMailAddressesRequest $request An object representing the request for this operation
     * @return ListMailAddressesOKResponse OK
     */
    public function listMailAddresses(ListMailAddressesRequest $request): ListMailAddressesOKResponse;
    /**
     * List mail settings of a Project.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/mail-list-project-mail-settings
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ListProjectMailSettingsRequest $request An object representing the request for this operation
     * @return ListProjectMailSettingsOKResponse OK
     */
    public function listProjectMailSettings(ListProjectMailSettingsRequest $request): ListProjectMailSettingsOKResponse;
    /**
     * Update mail-address
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/mail-mailaddress-update-address-deprecated
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param MailaddressUpdateAddressDeprecatedRequest $request An object representing the request for this operation
     * @deprecated
     * @return EmptyResponse OK
     */
    public function mailaddressUpdateAddressDeprecated(MailaddressUpdateAddressDeprecatedRequest $request): EmptyResponse;
    /**
     * Check if a Migration between two projects is possible.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/mail-migration-check-migration-is-possible
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param MigrationCheckMigrationIsPossibleRequest $request An object representing the request for this operation
     * @return MigrationCheckMigrationIsPossibleOKResponse Ok
     */
    public function migrationCheckMigrationIsPossible(MigrationCheckMigrationIsPossibleRequest $request): MigrationCheckMigrationIsPossibleOKResponse;
    /**
     * Get a Migration.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/mail-migration-get-migration
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param MigrationGetMigrationRequest $request An object representing the request for this operation
     * @return MigrationGetMigrationOKResponse The requested Migration.
     */
    public function migrationGetMigration(MigrationGetMigrationRequest $request): MigrationGetMigrationOKResponse;
    /**
     * List Migrations belonging to a Project in customer center or mStudio.
     *
     * In case you want to list the Migrations for a p-Account you will have to use `commons.LegacyBearerAuthentication` and `commons.AccessToken` for authentication.
     * If you want to list the Migrations for a mStudio-project you will have to use `commons.AccessToken` for authentication.
     *
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/mail-migration-list-migrations
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param MigrationListMigrationsRequest $request An object representing the request for this operation
     * @return MigrationListMigrationsOKResponse An array of Migration objects.
     */
    public function migrationListMigrations(MigrationListMigrationsRequest $request): MigrationListMigrationsOKResponse;
    /**
     * Request a Mail Migration between two projects.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/mail-migration-request-mail-migration
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param MigrationRequestMailMigrationRequest $request An object representing the request for this operation
     * @return EmptyResponse No Content
     */
    public function migrationRequestMailMigration(MigrationRequestMailMigrationRequest $request): EmptyResponse;
    /**
     * Update blacklist for a given project ID
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/mail-projectsetting-update-blacklist-deprecated
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ProjectsettingUpdateBlacklistDeprecatedRequest $request An object representing the request for this operation
     * @deprecated
     * @return EmptyResponse OK
     */
    public function projectsettingUpdateBlacklistDeprecated(ProjectsettingUpdateBlacklistDeprecatedRequest $request): EmptyResponse;
    /**
     * Update whitelist for a given project ID
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/mail-projectsetting-update-whitelist-deprecated
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ProjectsettingUpdateWhitelistDeprecatedRequest $request An object representing the request for this operation
     * @deprecated
     * @return EmptyResponse OK
     */
    public function projectsettingUpdateWhitelistDeprecated(ProjectsettingUpdateWhitelistDeprecatedRequest $request): EmptyResponse;
    /**
     * Update the description of a DeliveryBox.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/mail-update-delivery-box-description
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param UpdateDeliveryBoxDescriptionRequest $request An object representing the request for this operation
     * @return EmptyResponse OK
     */
    public function updateDeliveryBoxDescription(UpdateDeliveryBoxDescriptionRequest $request): EmptyResponse;
    /**
     * Update the password of a DeliveryBox.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/mail-update-delivery-box-password
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param UpdateDeliveryBoxPasswordRequest $request An object representing the request for this operation
     * @return EmptyResponse OK
     */
    public function updateDeliveryBoxPassword(UpdateDeliveryBoxPasswordRequest $request): EmptyResponse;
    /**
     * Update a MailAddress.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/mail-update-mail-address-address
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param UpdateMailAddressAddressRequest $request An object representing the request for this operation
     * @return EmptyResponse OK
     */
    public function updateMailAddressAddress(UpdateMailAddressAddressRequest $request): EmptyResponse;
    /**
     * Update the autoresponder of a MailAddress.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/mail-update-mail-address-autoresponder
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param UpdateMailAddressAutoresponderRequest $request An object representing the request for this operation
     * @return EmptyResponse OK
     */
    public function updateMailAddressAutoresponder(UpdateMailAddressAutoresponderRequest $request): EmptyResponse;
    /**
     * Update the autoresponder of a MailAddress.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/mail-update-mail-address-autoresponder-v2-deprecated
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param UpdateMailAddressAutoresponderV2DeprecatedRequest $request An object representing the request for this operation
     * @deprecated
     * @return EmptyResponse OK
     */
    public function updateMailAddressAutoresponderV2Deprecated(UpdateMailAddressAutoresponderV2DeprecatedRequest $request): EmptyResponse;
    /**
     * Update the catchall of a MailAddress.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/mail-update-mail-address-catch-all
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param UpdateMailAddressCatchAllRequest $request An object representing the request for this operation
     * @return EmptyResponse OK
     */
    public function updateMailAddressCatchAll(UpdateMailAddressCatchAllRequest $request): EmptyResponse;
    /**
     * Update the catchall of a MailAddress.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/mail-update-mail-address-catchall-v2-deprecated
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param UpdateMailAddressCatchallV2DeprecatedRequest $request An object representing the request for this operation
     * @deprecated
     * @return EmptyResponse OK
     */
    public function updateMailAddressCatchallV2Deprecated(UpdateMailAddressCatchallV2DeprecatedRequest $request): EmptyResponse;
    /**
     * Update the forward addresses of a MailAddresses.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/mail-update-mail-address-forward-addresses
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param UpdateMailAddressForwardAddressesRequest $request An object representing the request for this operation
     * @return EmptyResponse OK
     */
    public function updateMailAddressForwardAddresses(UpdateMailAddressForwardAddressesRequest $request): EmptyResponse;
    /**
     * Update the forward addresses of a MailAddresses.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/mail-update-mail-address-forward-addresses-v2-deprecated
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param UpdateMailAddressForwardAddressesV2DeprecatedRequest $request An object representing the request for this operation
     * @deprecated
     * @return EmptyResponse OK
     */
    public function updateMailAddressForwardAddressesV2Deprecated(UpdateMailAddressForwardAddressesV2DeprecatedRequest $request): EmptyResponse;
    /**
     * Update the password for a MailAddress.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/mail-update-mail-address-password
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param UpdateMailAddressPasswordRequest $request An object representing the request for this operation
     * @return EmptyResponse OK
     */
    public function updateMailAddressPassword(UpdateMailAddressPasswordRequest $request): EmptyResponse;
    /**
     * Update the password for a MailAddress.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/mail-update-mail-address-password-v2-deprecated
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param UpdateMailAddressPasswordV2DeprecatedRequest $request An object representing the request for this operation
     * @deprecated
     * @return EmptyResponse OK
     */
    public function updateMailAddressPasswordV2Deprecated(UpdateMailAddressPasswordV2DeprecatedRequest $request): EmptyResponse;
    /**
     * Update the quota of a MailAddress.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/mail-update-mail-address-quota
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param UpdateMailAddressQuotaRequest $request An object representing the request for this operation
     * @return EmptyResponse OK
     */
    public function updateMailAddressQuota(UpdateMailAddressQuotaRequest $request): EmptyResponse;
    /**
     * Update the quota of a MailAddress.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/mail-update-mail-address-quota-v2-deprecated
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param UpdateMailAddressQuotaV2DeprecatedRequest $request An object representing the request for this operation
     * @deprecated
     * @return EmptyResponse OK
     */
    public function updateMailAddressQuotaV2Deprecated(UpdateMailAddressQuotaV2DeprecatedRequest $request): EmptyResponse;
    /**
     * Update the spam protection of a MailAddress.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/mail-update-mail-address-spam-protection
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param UpdateMailAddressSpamProtectionRequest $request An object representing the request for this operation
     * @return EmptyResponse OK
     */
    public function updateMailAddressSpamProtection(UpdateMailAddressSpamProtectionRequest $request): EmptyResponse;
    /**
     * Update the spam protection of a MailAddress.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/mail-update-mail-address-spam-protection-v2-deprecated
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param UpdateMailAddressSpamProtectionV2DeprecatedRequest $request An object representing the request for this operation
     * @deprecated
     * @return EmptyResponse OK
     */
    public function updateMailAddressSpamProtectionV2Deprecated(UpdateMailAddressSpamProtectionV2DeprecatedRequest $request): EmptyResponse;
    /**
     * Update a mail setting of a Project.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/mail-update-project-mail-setting
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param UpdateProjectMailSettingRequest $request An object representing the request for this operation
     * @return EmptyResponse OK
     */
    public function updateProjectMailSetting(UpdateProjectMailSettingRequest $request): EmptyResponse;
    /**
     * Update a mail setting of a Project.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/mail-update-project-mail-setting-v2-deprecated
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param UpdateProjectMailSettingV2DeprecatedRequest $request An object representing the request for this operation
     * @deprecated
     * @return EmptyResponse OK
     */
    public function updateProjectMailSettingV2Deprecated(UpdateProjectMailSettingV2DeprecatedRequest $request): EmptyResponse;
}
