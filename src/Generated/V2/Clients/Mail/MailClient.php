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
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeprecatedMailDeliveryboxUpdateDescription\DeprecatedMailDeliveryboxUpdateDescriptionRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeprecatedMailDeliveryboxUpdatePassword\DeprecatedMailDeliveryboxUpdatePasswordRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeprecatedMailMailaddressUpdateAddress\DeprecatedMailMailaddressUpdateAddressRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeprecatedMailProjectsettingUpdateBlacklist\DeprecatedMailProjectsettingUpdateBlacklistRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeprecatedMailProjectsettingUpdateWhitelist\DeprecatedMailProjectsettingUpdateWhitelistRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeprecatedMailUpdateMailAddressAutoresponder\DeprecatedMailUpdateMailAddressAutoresponderRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeprecatedMailUpdateMailAddressCatchall\DeprecatedMailUpdateMailAddressCatchallRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeprecatedMailUpdateMailAddressForwardAddresses\DeprecatedMailUpdateMailAddressForwardAddressesRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeprecatedMailUpdateMailAddressPassword\DeprecatedMailUpdateMailAddressPasswordRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeprecatedMailUpdateMailAddressQuota\DeprecatedMailUpdateMailAddressQuotaRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeprecatedMailUpdateMailAddressSpamProtection\DeprecatedMailUpdateMailAddressSpamProtectionRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeprecatedMailUpdateProjectMailSetting\DeprecatedMailUpdateProjectMailSettingRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DisableMailArchive\DisableMailArchiveRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\GetDeliveryBox\GetDeliveryBoxOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\GetDeliveryBox\GetDeliveryBoxRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\GetMailAddress\GetMailAddressOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\GetMailAddress\GetMailAddressRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\ListBackupsForMailAddress\ListBackupsForMailAddressOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\ListBackupsForMailAddress\ListBackupsForMailAddressRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\ListDeliveryBoxes\ListDeliveryBoxesOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\ListDeliveryBoxes\ListDeliveryBoxesRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\ListMailAddresses\ListMailAddressesOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\ListMailAddresses\ListMailAddressesRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\ListProjectMailSettings\ListProjectMailSettingsOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\ListProjectMailSettings\ListProjectMailSettingsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\MigrationCheckMigrationIsPossible\MigrationCheckMigrationIsPossibleOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\MigrationCheckMigrationIsPossible\MigrationCheckMigrationIsPossibleRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\MigrationGetMigration\MigrationGetMigrationOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\MigrationGetMigration\MigrationGetMigrationRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\MigrationListMigrations\MigrationListMigrationsOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\MigrationListMigrations\MigrationListMigrationsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\MigrationRequestMailMigration\MigrationRequestMailMigrationRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\RecoverMailAddressEmails\RecoverMailAddressEmailsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateDeliveryBoxDescription\UpdateDeliveryBoxDescriptionRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateDeliveryBoxPassword\UpdateDeliveryBoxPasswordRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressAddress\UpdateMailAddressAddressRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressAutoresponder\UpdateMailAddressAutoresponderRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressCatchAll\UpdateMailAddressCatchAllRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressForwardAddresses\UpdateMailAddressForwardAddressesRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressPassword\UpdateMailAddressPasswordRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressQuota\UpdateMailAddressQuotaRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressSpamProtection\UpdateMailAddressSpamProtectionRequest;
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
interface MailClient
{
    /**
     * Update the description of an deliverybox
     *
     * This operation is deprecated. Use the PATCH v2/delivery-boxes/{deliveryBoxId}/description endpoint instead.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/deprecated-mail-deliverybox-update-description
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeprecatedMailDeliveryboxUpdateDescriptionRequest $request An object representing the request for this operation
     * @deprecated
     * @return EmptyResponse OK
     */
    public function deprecatedMailDeliveryboxUpdateDescription(DeprecatedMailDeliveryboxUpdateDescriptionRequest $request): EmptyResponse;
    /**
     * Update the password for a specific deliverybox
     *
     * This operation is deprecated. Use the PATCH v2/delivery-boxes/{deliveryBoxId}/password endpoint instead.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/deprecated-mail-deliverybox-update-password
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeprecatedMailDeliveryboxUpdatePasswordRequest $request An object representing the request for this operation
     * @deprecated
     * @return EmptyResponse OK
     */
    public function deprecatedMailDeliveryboxUpdatePassword(DeprecatedMailDeliveryboxUpdatePasswordRequest $request): EmptyResponse;
    /**
     * Update mail-address
     *
     * This operation is deprecated. Use the PATCH v2/mail-addresses/{mailAddressId}/address endpoint instead.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/deprecated-mail-mailaddress-update-address
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeprecatedMailMailaddressUpdateAddressRequest $request An object representing the request for this operation
     * @deprecated
     * @return EmptyResponse OK
     */
    public function deprecatedMailMailaddressUpdateAddress(DeprecatedMailMailaddressUpdateAddressRequest $request): EmptyResponse;
    /**
     * Update blacklist for a given project ID
     *
     * This operation is deprecated. Use the PATCH v2/{projectId}/mail-settings/{mailSetting} endpoint instead.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/deprecated-mail-projectsetting-update-blacklist
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeprecatedMailProjectsettingUpdateBlacklistRequest $request An object representing the request for this operation
     * @deprecated
     * @return EmptyResponse OK
     */
    public function deprecatedMailProjectsettingUpdateBlacklist(DeprecatedMailProjectsettingUpdateBlacklistRequest $request): EmptyResponse;
    /**
     * Update whitelist for a given project ID
     *
     * This operation is deprecated. Use the PATCH v2/{projectId}/mail-settings/{mailSetting} endpoint instead.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/deprecated-mail-projectsetting-update-whitelist
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeprecatedMailProjectsettingUpdateWhitelistRequest $request An object representing the request for this operation
     * @deprecated
     * @return EmptyResponse OK
     */
    public function deprecatedMailProjectsettingUpdateWhitelist(DeprecatedMailProjectsettingUpdateWhitelistRequest $request): EmptyResponse;
    /**
     * Update the autoresponder of a MailAddress.
     *
     * This operation is deprecated. Use the PATCH v2/mail-addresses/{mailAddressId}/autoresponder endpoint instead.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/deprecated-mail-update-mail-address-autoresponder
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeprecatedMailUpdateMailAddressAutoresponderRequest $request An object representing the request for this operation
     * @deprecated
     * @return EmptyResponse OK
     */
    public function deprecatedMailUpdateMailAddressAutoresponder(DeprecatedMailUpdateMailAddressAutoresponderRequest $request): EmptyResponse;
    /**
     * Update the catchall of a MailAddress.
     *
     * This operation is deprecated. Use the PATCH v2/mail-addresses/{mailAddressId}/catch-all endpoint instead.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/deprecated-mail-update-mail-address-catchall
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeprecatedMailUpdateMailAddressCatchallRequest $request An object representing the request for this operation
     * @deprecated
     * @return EmptyResponse OK
     */
    public function deprecatedMailUpdateMailAddressCatchall(DeprecatedMailUpdateMailAddressCatchallRequest $request): EmptyResponse;
    /**
     * Update the forward addresses of a MailAddresses.
     *
     * This operation is deprecated. Use the PATCH v2/mail-addresses/{mailAddressId}/forward-addresses endpoint instead.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/deprecated-mail-update-mail-address-forward-addresses
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeprecatedMailUpdateMailAddressForwardAddressesRequest $request An object representing the request for this operation
     * @deprecated
     * @return EmptyResponse OK
     */
    public function deprecatedMailUpdateMailAddressForwardAddresses(DeprecatedMailUpdateMailAddressForwardAddressesRequest $request): EmptyResponse;
    /**
     * Update the password for a MailAddress.
     *
     * This operation is deprecated. Use the PATCH v2/mail-addresses/{mailAddressId}/password endpoint instead.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/deprecated-mail-update-mail-address-password
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeprecatedMailUpdateMailAddressPasswordRequest $request An object representing the request for this operation
     * @deprecated
     * @return EmptyResponse OK
     */
    public function deprecatedMailUpdateMailAddressPassword(DeprecatedMailUpdateMailAddressPasswordRequest $request): EmptyResponse;
    /**
     * Update the quota of a MailAddress.
     *
     * This operation is deprecated. Use the PATCH v2/mail-addresses/{mailAddressId}/quota endpoint instead.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/deprecated-mail-update-mail-address-quota
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeprecatedMailUpdateMailAddressQuotaRequest $request An object representing the request for this operation
     * @deprecated
     * @return EmptyResponse OK
     */
    public function deprecatedMailUpdateMailAddressQuota(DeprecatedMailUpdateMailAddressQuotaRequest $request): EmptyResponse;
    /**
     * Update the spam protection of a MailAddress.
     *
     * This operation is deprecated. Use the PATCH v2/mail-addresses/{mailAddressId}/spam-protection endpoint instead.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/deprecated-mail-update-mail-address-spam-protection
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeprecatedMailUpdateMailAddressSpamProtectionRequest $request An object representing the request for this operation
     * @deprecated
     * @return EmptyResponse OK
     */
    public function deprecatedMailUpdateMailAddressSpamProtection(DeprecatedMailUpdateMailAddressSpamProtectionRequest $request): EmptyResponse;
    /**
     * Update a mail setting of a Project.
     *
     * This operation is deprecated. Use the PATCH v2/{projectId}/mail-settings/{mailSetting} endpoint instead.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/deprecated-mail-update-project-mail-setting
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeprecatedMailUpdateProjectMailSettingRequest $request An object representing the request for this operation
     * @deprecated
     * @return EmptyResponse OK
     */
    public function deprecatedMailUpdateProjectMailSetting(DeprecatedMailUpdateProjectMailSettingRequest $request): EmptyResponse;
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
     * Disable a MailAddress Archive.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/mail-disable-mail-archive
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DisableMailArchiveRequest $request An object representing the request for this operation
     * @return EmptyResponse OK
     */
    public function disableMailArchive(DisableMailArchiveRequest $request): EmptyResponse;
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
     * List backups belonging to a MailAddress.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/mail-list-backups-for-mail-address
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ListBackupsForMailAddressRequest $request An object representing the request for this operation
     * @return ListBackupsForMailAddressOKResponse OK
     */
    public function listBackupsForMailAddress(ListBackupsForMailAddressRequest $request): ListBackupsForMailAddressOKResponse;
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
     * Recover emails for a MailAddress from a backup.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/mail-recover-mail-address-emails
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param RecoverMailAddressEmailsRequest $request An object representing the request for this operation
     * @return EmptyResponse OK
     */
    public function recoverMailAddressEmails(RecoverMailAddressEmailsRequest $request): EmptyResponse;
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
     * Update the catch-all of a MailAddress.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/mail-update-mail-address-catch-all
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param UpdateMailAddressCatchAllRequest $request An object representing the request for this operation
     * @return EmptyResponse OK
     */
    public function updateMailAddressCatchAll(UpdateMailAddressCatchAllRequest $request): EmptyResponse;
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
     * Update a mail setting of a Project.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/mail-update-project-mail-setting
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param UpdateProjectMailSettingRequest $request An object representing the request for this operation
     * @return EmptyResponse OK
     */
    public function updateProjectMailSetting(UpdateProjectMailSettingRequest $request): EmptyResponse;
}
