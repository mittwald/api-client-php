<?php

declare(strict_types=1);

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
use Mittwald\ApiClient\Generated\V2\Clients\Mail\CreateDeliverybox\CreateDeliveryboxTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\CreateMailAddress\CreateMailAddressBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\CreateMailAddress\CreateMailAddressCreatedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\CreateMailAddress\CreateMailAddressDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\CreateMailAddress\CreateMailAddressForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\CreateMailAddress\CreateMailAddressInternalServerErrorResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\CreateMailAddress\CreateMailAddressNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\CreateMailAddress\CreateMailAddressRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\CreateMailAddress\CreateMailAddressServiceUnavailableResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\CreateMailAddress\CreateMailAddressTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeleteDeliveryBox\DeleteDeliveryBoxBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeleteDeliveryBox\DeleteDeliveryBoxDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeleteDeliveryBox\DeleteDeliveryBoxForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeleteDeliveryBox\DeleteDeliveryBoxInternalServerErrorResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeleteDeliveryBox\DeleteDeliveryBoxNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeleteDeliveryBox\DeleteDeliveryBoxRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeleteDeliveryBox\DeleteDeliveryBoxServiceUnavailableResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeleteDeliveryBox\DeleteDeliveryBoxTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeleteMailAddress\DeleteMailAddressBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeleteMailAddress\DeleteMailAddressDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeleteMailAddress\DeleteMailAddressForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeleteMailAddress\DeleteMailAddressInternalServerErrorResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeleteMailAddress\DeleteMailAddressNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeleteMailAddress\DeleteMailAddressRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeleteMailAddress\DeleteMailAddressServiceUnavailableResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeleteMailAddress\DeleteMailAddressTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeprecatedMailDeliveryboxUpdateDescription\DeprecatedMailDeliveryboxUpdateDescriptionRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeprecatedMailDeliveryboxUpdateDescription\DeprecatedMailDeliveryboxUpdateDescriptionTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeprecatedMailDeliveryboxUpdatePassword\DeprecatedMailDeliveryboxUpdatePasswordRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeprecatedMailDeliveryboxUpdatePassword\DeprecatedMailDeliveryboxUpdatePasswordTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeprecatedMailMailaddressUpdateAddress\DeprecatedMailMailaddressUpdateAddressRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeprecatedMailMailaddressUpdateAddress\DeprecatedMailMailaddressUpdateAddressTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeprecatedMailProjectsettingUpdateBlacklist\DeprecatedMailProjectsettingUpdateBlacklistRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeprecatedMailProjectsettingUpdateBlacklist\DeprecatedMailProjectsettingUpdateBlacklistTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeprecatedMailProjectsettingUpdateWhitelist\DeprecatedMailProjectsettingUpdateWhitelistRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeprecatedMailProjectsettingUpdateWhitelist\DeprecatedMailProjectsettingUpdateWhitelistTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeprecatedMailUpdateMailAddressAutoresponder\DeprecatedMailUpdateMailAddressAutoresponderBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeprecatedMailUpdateMailAddressAutoresponder\DeprecatedMailUpdateMailAddressAutoresponderDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeprecatedMailUpdateMailAddressAutoresponder\DeprecatedMailUpdateMailAddressAutoresponderForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeprecatedMailUpdateMailAddressAutoresponder\DeprecatedMailUpdateMailAddressAutoresponderInternalServerErrorResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeprecatedMailUpdateMailAddressAutoresponder\DeprecatedMailUpdateMailAddressAutoresponderNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeprecatedMailUpdateMailAddressAutoresponder\DeprecatedMailUpdateMailAddressAutoresponderRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeprecatedMailUpdateMailAddressAutoresponder\DeprecatedMailUpdateMailAddressAutoresponderServiceUnavailableResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeprecatedMailUpdateMailAddressAutoresponder\DeprecatedMailUpdateMailAddressAutoresponderTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeprecatedMailUpdateMailAddressCatchall\DeprecatedMailUpdateMailAddressCatchallBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeprecatedMailUpdateMailAddressCatchall\DeprecatedMailUpdateMailAddressCatchallDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeprecatedMailUpdateMailAddressCatchall\DeprecatedMailUpdateMailAddressCatchallForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeprecatedMailUpdateMailAddressCatchall\DeprecatedMailUpdateMailAddressCatchallInternalServerErrorResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeprecatedMailUpdateMailAddressCatchall\DeprecatedMailUpdateMailAddressCatchallNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeprecatedMailUpdateMailAddressCatchall\DeprecatedMailUpdateMailAddressCatchallRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeprecatedMailUpdateMailAddressCatchall\DeprecatedMailUpdateMailAddressCatchallServiceUnavailableResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeprecatedMailUpdateMailAddressCatchall\DeprecatedMailUpdateMailAddressCatchallTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeprecatedMailUpdateMailAddressForwardAddresses\DeprecatedMailUpdateMailAddressForwardAddressesBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeprecatedMailUpdateMailAddressForwardAddresses\DeprecatedMailUpdateMailAddressForwardAddressesDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeprecatedMailUpdateMailAddressForwardAddresses\DeprecatedMailUpdateMailAddressForwardAddressesForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeprecatedMailUpdateMailAddressForwardAddresses\DeprecatedMailUpdateMailAddressForwardAddressesInternalServerErrorResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeprecatedMailUpdateMailAddressForwardAddresses\DeprecatedMailUpdateMailAddressForwardAddressesNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeprecatedMailUpdateMailAddressForwardAddresses\DeprecatedMailUpdateMailAddressForwardAddressesRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeprecatedMailUpdateMailAddressForwardAddresses\DeprecatedMailUpdateMailAddressForwardAddressesServiceUnavailableResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeprecatedMailUpdateMailAddressForwardAddresses\DeprecatedMailUpdateMailAddressForwardAddressesTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeprecatedMailUpdateMailAddressPassword\DeprecatedMailUpdateMailAddressPasswordBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeprecatedMailUpdateMailAddressPassword\DeprecatedMailUpdateMailAddressPasswordDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeprecatedMailUpdateMailAddressPassword\DeprecatedMailUpdateMailAddressPasswordForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeprecatedMailUpdateMailAddressPassword\DeprecatedMailUpdateMailAddressPasswordInternalServerErrorResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeprecatedMailUpdateMailAddressPassword\DeprecatedMailUpdateMailAddressPasswordNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeprecatedMailUpdateMailAddressPassword\DeprecatedMailUpdateMailAddressPasswordRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeprecatedMailUpdateMailAddressPassword\DeprecatedMailUpdateMailAddressPasswordServiceUnavailableResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeprecatedMailUpdateMailAddressPassword\DeprecatedMailUpdateMailAddressPasswordTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeprecatedMailUpdateMailAddressQuota\DeprecatedMailUpdateMailAddressQuotaBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeprecatedMailUpdateMailAddressQuota\DeprecatedMailUpdateMailAddressQuotaDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeprecatedMailUpdateMailAddressQuota\DeprecatedMailUpdateMailAddressQuotaForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeprecatedMailUpdateMailAddressQuota\DeprecatedMailUpdateMailAddressQuotaInternalServerErrorResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeprecatedMailUpdateMailAddressQuota\DeprecatedMailUpdateMailAddressQuotaNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeprecatedMailUpdateMailAddressQuota\DeprecatedMailUpdateMailAddressQuotaRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeprecatedMailUpdateMailAddressQuota\DeprecatedMailUpdateMailAddressQuotaServiceUnavailableResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeprecatedMailUpdateMailAddressQuota\DeprecatedMailUpdateMailAddressQuotaTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeprecatedMailUpdateMailAddressSpamProtection\DeprecatedMailUpdateMailAddressSpamProtectionBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeprecatedMailUpdateMailAddressSpamProtection\DeprecatedMailUpdateMailAddressSpamProtectionDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeprecatedMailUpdateMailAddressSpamProtection\DeprecatedMailUpdateMailAddressSpamProtectionForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeprecatedMailUpdateMailAddressSpamProtection\DeprecatedMailUpdateMailAddressSpamProtectionInternalServerErrorResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeprecatedMailUpdateMailAddressSpamProtection\DeprecatedMailUpdateMailAddressSpamProtectionNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeprecatedMailUpdateMailAddressSpamProtection\DeprecatedMailUpdateMailAddressSpamProtectionRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeprecatedMailUpdateMailAddressSpamProtection\DeprecatedMailUpdateMailAddressSpamProtectionServiceUnavailableResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeprecatedMailUpdateMailAddressSpamProtection\DeprecatedMailUpdateMailAddressSpamProtectionTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeprecatedMailUpdateProjectMailSetting\DeprecatedMailUpdateProjectMailSettingBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeprecatedMailUpdateProjectMailSetting\DeprecatedMailUpdateProjectMailSettingDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeprecatedMailUpdateProjectMailSetting\DeprecatedMailUpdateProjectMailSettingForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeprecatedMailUpdateProjectMailSetting\DeprecatedMailUpdateProjectMailSettingInternalServerErrorResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeprecatedMailUpdateProjectMailSetting\DeprecatedMailUpdateProjectMailSettingNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeprecatedMailUpdateProjectMailSetting\DeprecatedMailUpdateProjectMailSettingRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeprecatedMailUpdateProjectMailSetting\DeprecatedMailUpdateProjectMailSettingServiceUnavailableResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\DeprecatedMailUpdateProjectMailSetting\DeprecatedMailUpdateProjectMailSettingTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\GetDeliveryBox\GetDeliveryBoxBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\GetDeliveryBox\GetDeliveryBoxDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\GetDeliveryBox\GetDeliveryBoxForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\GetDeliveryBox\GetDeliveryBoxInternalServerErrorResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\GetDeliveryBox\GetDeliveryBoxNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\GetDeliveryBox\GetDeliveryBoxOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\GetDeliveryBox\GetDeliveryBoxRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\GetDeliveryBox\GetDeliveryBoxServiceUnavailableResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\GetDeliveryBox\GetDeliveryBoxTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\GetMailAddress\GetMailAddressBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\GetMailAddress\GetMailAddressDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\GetMailAddress\GetMailAddressForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\GetMailAddress\GetMailAddressInternalServerErrorResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\GetMailAddress\GetMailAddressNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\GetMailAddress\GetMailAddressOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\GetMailAddress\GetMailAddressRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\GetMailAddress\GetMailAddressServiceUnavailableResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\GetMailAddress\GetMailAddressTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\ListBackupsForMailAddress\ListBackupsForMailAddressBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\ListBackupsForMailAddress\ListBackupsForMailAddressDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\ListBackupsForMailAddress\ListBackupsForMailAddressForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\ListBackupsForMailAddress\ListBackupsForMailAddressInternalServerErrorResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\ListBackupsForMailAddress\ListBackupsForMailAddressNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\ListBackupsForMailAddress\ListBackupsForMailAddressOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\ListBackupsForMailAddress\ListBackupsForMailAddressRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\ListBackupsForMailAddress\ListBackupsForMailAddressTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\ListDeliveryBoxes\ListDeliveryBoxesBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\ListDeliveryBoxes\ListDeliveryBoxesDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\ListDeliveryBoxes\ListDeliveryBoxesForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\ListDeliveryBoxes\ListDeliveryBoxesInternalServerErrorResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\ListDeliveryBoxes\ListDeliveryBoxesNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\ListDeliveryBoxes\ListDeliveryBoxesOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\ListDeliveryBoxes\ListDeliveryBoxesRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\ListDeliveryBoxes\ListDeliveryBoxesServiceUnavailableResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\ListDeliveryBoxes\ListDeliveryBoxesTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\ListMailAddresses\ListMailAddressesBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\ListMailAddresses\ListMailAddressesDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\ListMailAddresses\ListMailAddressesForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\ListMailAddresses\ListMailAddressesInternalServerErrorResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\ListMailAddresses\ListMailAddressesNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\ListMailAddresses\ListMailAddressesOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\ListMailAddresses\ListMailAddressesRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\ListMailAddresses\ListMailAddressesServiceUnavailableResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\ListMailAddresses\ListMailAddressesTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\ListProjectMailSettings\ListProjectMailSettingsBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\ListProjectMailSettings\ListProjectMailSettingsDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\ListProjectMailSettings\ListProjectMailSettingsForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\ListProjectMailSettings\ListProjectMailSettingsInternalServerErrorResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\ListProjectMailSettings\ListProjectMailSettingsNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\ListProjectMailSettings\ListProjectMailSettingsOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\ListProjectMailSettings\ListProjectMailSettingsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\ListProjectMailSettings\ListProjectMailSettingsServiceUnavailableResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\ListProjectMailSettings\ListProjectMailSettingsTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\MigrationCheckMigrationIsPossible\MigrationCheckMigrationIsPossibleBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\MigrationCheckMigrationIsPossible\MigrationCheckMigrationIsPossibleDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\MigrationCheckMigrationIsPossible\MigrationCheckMigrationIsPossibleOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\MigrationCheckMigrationIsPossible\MigrationCheckMigrationIsPossibleRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\MigrationCheckMigrationIsPossible\MigrationCheckMigrationIsPossibleTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\MigrationGetMigration\MigrationGetMigrationBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\MigrationGetMigration\MigrationGetMigrationDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\MigrationGetMigration\MigrationGetMigrationOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\MigrationGetMigration\MigrationGetMigrationRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\MigrationGetMigration\MigrationGetMigrationTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\MigrationListMigrations\MigrationListMigrationsBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\MigrationListMigrations\MigrationListMigrationsDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\MigrationListMigrations\MigrationListMigrationsOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\MigrationListMigrations\MigrationListMigrationsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\MigrationListMigrations\MigrationListMigrationsTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\MigrationRequestMailMigration\MigrationRequestMailMigrationBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\MigrationRequestMailMigration\MigrationRequestMailMigrationDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\MigrationRequestMailMigration\MigrationRequestMailMigrationPreconditionFailedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\MigrationRequestMailMigration\MigrationRequestMailMigrationRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\MigrationRequestMailMigration\MigrationRequestMailMigrationTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\RecoverMailAddressEmails\RecoverMailAddressEmailsBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\RecoverMailAddressEmails\RecoverMailAddressEmailsDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\RecoverMailAddressEmails\RecoverMailAddressEmailsNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\RecoverMailAddressEmails\RecoverMailAddressEmailsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\RecoverMailAddressEmails\RecoverMailAddressEmailsTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateDeliveryBoxDescription\UpdateDeliveryBoxDescriptionBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateDeliveryBoxDescription\UpdateDeliveryBoxDescriptionDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateDeliveryBoxDescription\UpdateDeliveryBoxDescriptionForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateDeliveryBoxDescription\UpdateDeliveryBoxDescriptionInternalServerErrorResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateDeliveryBoxDescription\UpdateDeliveryBoxDescriptionNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateDeliveryBoxDescription\UpdateDeliveryBoxDescriptionRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateDeliveryBoxDescription\UpdateDeliveryBoxDescriptionServiceUnavailableResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateDeliveryBoxDescription\UpdateDeliveryBoxDescriptionTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateDeliveryBoxPassword\UpdateDeliveryBoxPasswordBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateDeliveryBoxPassword\UpdateDeliveryBoxPasswordDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateDeliveryBoxPassword\UpdateDeliveryBoxPasswordForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateDeliveryBoxPassword\UpdateDeliveryBoxPasswordInternalServerErrorResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateDeliveryBoxPassword\UpdateDeliveryBoxPasswordNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateDeliveryBoxPassword\UpdateDeliveryBoxPasswordRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateDeliveryBoxPassword\UpdateDeliveryBoxPasswordServiceUnavailableResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateDeliveryBoxPassword\UpdateDeliveryBoxPasswordTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressAddress\UpdateMailAddressAddressBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressAddress\UpdateMailAddressAddressDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressAddress\UpdateMailAddressAddressForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressAddress\UpdateMailAddressAddressInternalServerErrorResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressAddress\UpdateMailAddressAddressNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressAddress\UpdateMailAddressAddressRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressAddress\UpdateMailAddressAddressServiceUnavailableResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressAddress\UpdateMailAddressAddressTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressAutoresponder\UpdateMailAddressAutoresponderBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressAutoresponder\UpdateMailAddressAutoresponderDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressAutoresponder\UpdateMailAddressAutoresponderForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressAutoresponder\UpdateMailAddressAutoresponderInternalServerErrorResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressAutoresponder\UpdateMailAddressAutoresponderNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressAutoresponder\UpdateMailAddressAutoresponderRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressAutoresponder\UpdateMailAddressAutoresponderServiceUnavailableResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressAutoresponder\UpdateMailAddressAutoresponderTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressCatchAll\UpdateMailAddressCatchAllBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressCatchAll\UpdateMailAddressCatchAllDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressCatchAll\UpdateMailAddressCatchAllForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressCatchAll\UpdateMailAddressCatchAllInternalServerErrorResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressCatchAll\UpdateMailAddressCatchAllNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressCatchAll\UpdateMailAddressCatchAllRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressCatchAll\UpdateMailAddressCatchAllServiceUnavailableResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressCatchAll\UpdateMailAddressCatchAllTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressForwardAddresses\UpdateMailAddressForwardAddressesBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressForwardAddresses\UpdateMailAddressForwardAddressesDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressForwardAddresses\UpdateMailAddressForwardAddressesForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressForwardAddresses\UpdateMailAddressForwardAddressesInternalServerErrorResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressForwardAddresses\UpdateMailAddressForwardAddressesNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressForwardAddresses\UpdateMailAddressForwardAddressesRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressForwardAddresses\UpdateMailAddressForwardAddressesServiceUnavailableResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressForwardAddresses\UpdateMailAddressForwardAddressesTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressPassword\UpdateMailAddressPasswordBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressPassword\UpdateMailAddressPasswordDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressPassword\UpdateMailAddressPasswordForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressPassword\UpdateMailAddressPasswordInternalServerErrorResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressPassword\UpdateMailAddressPasswordNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressPassword\UpdateMailAddressPasswordRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressPassword\UpdateMailAddressPasswordServiceUnavailableResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressPassword\UpdateMailAddressPasswordTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressQuota\UpdateMailAddressQuotaBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressQuota\UpdateMailAddressQuotaDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressQuota\UpdateMailAddressQuotaForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressQuota\UpdateMailAddressQuotaInternalServerErrorResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressQuota\UpdateMailAddressQuotaNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressQuota\UpdateMailAddressQuotaRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressQuota\UpdateMailAddressQuotaServiceUnavailableResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressQuota\UpdateMailAddressQuotaTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressSpamProtection\UpdateMailAddressSpamProtectionBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressSpamProtection\UpdateMailAddressSpamProtectionDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressSpamProtection\UpdateMailAddressSpamProtectionForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressSpamProtection\UpdateMailAddressSpamProtectionInternalServerErrorResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressSpamProtection\UpdateMailAddressSpamProtectionNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressSpamProtection\UpdateMailAddressSpamProtectionRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressSpamProtection\UpdateMailAddressSpamProtectionServiceUnavailableResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateMailAddressSpamProtection\UpdateMailAddressSpamProtectionTooManyRequestsResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateProjectMailSetting\UpdateProjectMailSettingBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateProjectMailSetting\UpdateProjectMailSettingDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateProjectMailSetting\UpdateProjectMailSettingForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateProjectMailSetting\UpdateProjectMailSettingInternalServerErrorResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateProjectMailSetting\UpdateProjectMailSettingNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateProjectMailSetting\UpdateProjectMailSettingRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateProjectMailSetting\UpdateProjectMailSettingServiceUnavailableResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Mail\UpdateProjectMailSetting\UpdateProjectMailSettingTooManyRequestsResponse;

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
    public function deprecatedMailDeliveryboxUpdateDescription(DeprecatedMailDeliveryboxUpdateDescriptionRequest $request): EmptyResponse
    {
        $httpRequest = new Request(DeprecatedMailDeliveryboxUpdateDescriptionRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            403, 404, 500, 503 => new EmptyResponse($httpResponse),
            429 => DeprecatedMailDeliveryboxUpdateDescriptionTooManyRequestsResponse::fromResponse($httpResponse),
        });
    }

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
    public function deprecatedMailDeliveryboxUpdatePassword(DeprecatedMailDeliveryboxUpdatePasswordRequest $request): EmptyResponse
    {
        $httpRequest = new Request(DeprecatedMailDeliveryboxUpdatePasswordRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            403, 404, 500, 503 => new EmptyResponse($httpResponse),
            429 => DeprecatedMailDeliveryboxUpdatePasswordTooManyRequestsResponse::fromResponse($httpResponse),
        });
    }

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
    public function deprecatedMailMailaddressUpdateAddress(DeprecatedMailMailaddressUpdateAddressRequest $request): EmptyResponse
    {
        $httpRequest = new Request(DeprecatedMailMailaddressUpdateAddressRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            403, 404, 500, 503 => new EmptyResponse($httpResponse),
            429 => DeprecatedMailMailaddressUpdateAddressTooManyRequestsResponse::fromResponse($httpResponse),
        });
    }

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
    public function deprecatedMailProjectsettingUpdateBlacklist(DeprecatedMailProjectsettingUpdateBlacklistRequest $request): EmptyResponse
    {
        $httpRequest = new Request(DeprecatedMailProjectsettingUpdateBlacklistRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            403, 404, 500, 503 => new EmptyResponse($httpResponse),
            429 => DeprecatedMailProjectsettingUpdateBlacklistTooManyRequestsResponse::fromResponse($httpResponse),
        });
    }

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
    public function deprecatedMailProjectsettingUpdateWhitelist(DeprecatedMailProjectsettingUpdateWhitelistRequest $request): EmptyResponse
    {
        $httpRequest = new Request(DeprecatedMailProjectsettingUpdateWhitelistRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            403, 404, 500, 503 => new EmptyResponse($httpResponse),
            429 => DeprecatedMailProjectsettingUpdateWhitelistTooManyRequestsResponse::fromResponse($httpResponse),
        });
    }

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
    public function deprecatedMailUpdateMailAddressAutoresponder(DeprecatedMailUpdateMailAddressAutoresponderRequest $request): EmptyResponse
    {
        $httpRequest = new Request(DeprecatedMailUpdateMailAddressAutoresponderRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => DeprecatedMailUpdateMailAddressAutoresponderBadRequestResponse::fromResponse($httpResponse),
            403 => DeprecatedMailUpdateMailAddressAutoresponderForbiddenResponse::fromResponse($httpResponse),
            404 => DeprecatedMailUpdateMailAddressAutoresponderNotFoundResponse::fromResponse($httpResponse),
            429 => DeprecatedMailUpdateMailAddressAutoresponderTooManyRequestsResponse::fromResponse($httpResponse),
            500 => DeprecatedMailUpdateMailAddressAutoresponderInternalServerErrorResponse::fromResponse($httpResponse),
            503 => DeprecatedMailUpdateMailAddressAutoresponderServiceUnavailableResponse::fromResponse($httpResponse),
            default => DeprecatedMailUpdateMailAddressAutoresponderDefaultResponse::fromResponse($httpResponse),
        });
    }

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
    public function deprecatedMailUpdateMailAddressCatchall(DeprecatedMailUpdateMailAddressCatchallRequest $request): EmptyResponse
    {
        $httpRequest = new Request(DeprecatedMailUpdateMailAddressCatchallRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => DeprecatedMailUpdateMailAddressCatchallBadRequestResponse::fromResponse($httpResponse),
            403 => DeprecatedMailUpdateMailAddressCatchallForbiddenResponse::fromResponse($httpResponse),
            404 => DeprecatedMailUpdateMailAddressCatchallNotFoundResponse::fromResponse($httpResponse),
            429 => DeprecatedMailUpdateMailAddressCatchallTooManyRequestsResponse::fromResponse($httpResponse),
            500 => DeprecatedMailUpdateMailAddressCatchallInternalServerErrorResponse::fromResponse($httpResponse),
            503 => DeprecatedMailUpdateMailAddressCatchallServiceUnavailableResponse::fromResponse($httpResponse),
            default => DeprecatedMailUpdateMailAddressCatchallDefaultResponse::fromResponse($httpResponse),
        });
    }

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
    public function deprecatedMailUpdateMailAddressForwardAddresses(DeprecatedMailUpdateMailAddressForwardAddressesRequest $request): EmptyResponse
    {
        $httpRequest = new Request(DeprecatedMailUpdateMailAddressForwardAddressesRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => DeprecatedMailUpdateMailAddressForwardAddressesBadRequestResponse::fromResponse($httpResponse),
            403 => DeprecatedMailUpdateMailAddressForwardAddressesForbiddenResponse::fromResponse($httpResponse),
            404 => DeprecatedMailUpdateMailAddressForwardAddressesNotFoundResponse::fromResponse($httpResponse),
            429 => DeprecatedMailUpdateMailAddressForwardAddressesTooManyRequestsResponse::fromResponse($httpResponse),
            500 => DeprecatedMailUpdateMailAddressForwardAddressesInternalServerErrorResponse::fromResponse($httpResponse),
            503 => DeprecatedMailUpdateMailAddressForwardAddressesServiceUnavailableResponse::fromResponse($httpResponse),
            default => DeprecatedMailUpdateMailAddressForwardAddressesDefaultResponse::fromResponse($httpResponse),
        });
    }

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
    public function deprecatedMailUpdateMailAddressPassword(DeprecatedMailUpdateMailAddressPasswordRequest $request): EmptyResponse
    {
        $httpRequest = new Request(DeprecatedMailUpdateMailAddressPasswordRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => DeprecatedMailUpdateMailAddressPasswordBadRequestResponse::fromResponse($httpResponse),
            403 => DeprecatedMailUpdateMailAddressPasswordForbiddenResponse::fromResponse($httpResponse),
            404 => DeprecatedMailUpdateMailAddressPasswordNotFoundResponse::fromResponse($httpResponse),
            429 => DeprecatedMailUpdateMailAddressPasswordTooManyRequestsResponse::fromResponse($httpResponse),
            500 => DeprecatedMailUpdateMailAddressPasswordInternalServerErrorResponse::fromResponse($httpResponse),
            503 => DeprecatedMailUpdateMailAddressPasswordServiceUnavailableResponse::fromResponse($httpResponse),
            default => DeprecatedMailUpdateMailAddressPasswordDefaultResponse::fromResponse($httpResponse),
        });
    }

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
    public function deprecatedMailUpdateMailAddressQuota(DeprecatedMailUpdateMailAddressQuotaRequest $request): EmptyResponse
    {
        $httpRequest = new Request(DeprecatedMailUpdateMailAddressQuotaRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => DeprecatedMailUpdateMailAddressQuotaBadRequestResponse::fromResponse($httpResponse),
            403 => DeprecatedMailUpdateMailAddressQuotaForbiddenResponse::fromResponse($httpResponse),
            404 => DeprecatedMailUpdateMailAddressQuotaNotFoundResponse::fromResponse($httpResponse),
            429 => DeprecatedMailUpdateMailAddressQuotaTooManyRequestsResponse::fromResponse($httpResponse),
            500 => DeprecatedMailUpdateMailAddressQuotaInternalServerErrorResponse::fromResponse($httpResponse),
            503 => DeprecatedMailUpdateMailAddressQuotaServiceUnavailableResponse::fromResponse($httpResponse),
            default => DeprecatedMailUpdateMailAddressQuotaDefaultResponse::fromResponse($httpResponse),
        });
    }

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
    public function deprecatedMailUpdateMailAddressSpamProtection(DeprecatedMailUpdateMailAddressSpamProtectionRequest $request): EmptyResponse
    {
        $httpRequest = new Request(DeprecatedMailUpdateMailAddressSpamProtectionRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => DeprecatedMailUpdateMailAddressSpamProtectionBadRequestResponse::fromResponse($httpResponse),
            403 => DeprecatedMailUpdateMailAddressSpamProtectionForbiddenResponse::fromResponse($httpResponse),
            404 => DeprecatedMailUpdateMailAddressSpamProtectionNotFoundResponse::fromResponse($httpResponse),
            429 => DeprecatedMailUpdateMailAddressSpamProtectionTooManyRequestsResponse::fromResponse($httpResponse),
            500 => DeprecatedMailUpdateMailAddressSpamProtectionInternalServerErrorResponse::fromResponse($httpResponse),
            503 => DeprecatedMailUpdateMailAddressSpamProtectionServiceUnavailableResponse::fromResponse($httpResponse),
            default => DeprecatedMailUpdateMailAddressSpamProtectionDefaultResponse::fromResponse($httpResponse),
        });
    }

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
    public function deprecatedMailUpdateProjectMailSetting(DeprecatedMailUpdateProjectMailSettingRequest $request): EmptyResponse
    {
        $httpRequest = new Request(DeprecatedMailUpdateProjectMailSettingRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => DeprecatedMailUpdateProjectMailSettingBadRequestResponse::fromResponse($httpResponse),
            403 => DeprecatedMailUpdateProjectMailSettingForbiddenResponse::fromResponse($httpResponse),
            404 => DeprecatedMailUpdateProjectMailSettingNotFoundResponse::fromResponse($httpResponse),
            429 => DeprecatedMailUpdateProjectMailSettingTooManyRequestsResponse::fromResponse($httpResponse),
            500 => DeprecatedMailUpdateProjectMailSettingInternalServerErrorResponse::fromResponse($httpResponse),
            503 => DeprecatedMailUpdateProjectMailSettingServiceUnavailableResponse::fromResponse($httpResponse),
            default => DeprecatedMailUpdateProjectMailSettingDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Create a DeliveryBox.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/mail-create-deliverybox
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param CreateDeliveryboxRequest $request An object representing the request for this operation
     * @return CreateDeliveryboxCreatedResponse OK
     */
    public function createDeliverybox(CreateDeliveryboxRequest $request): CreateDeliveryboxCreatedResponse
    {
        $httpRequest = new Request(CreateDeliveryboxRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 201) {
            return CreateDeliveryboxCreatedResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => CreateDeliveryboxBadRequestResponse::fromResponse($httpResponse),
            403 => CreateDeliveryboxForbiddenResponse::fromResponse($httpResponse),
            404 => CreateDeliveryboxNotFoundResponse::fromResponse($httpResponse),
            429 => CreateDeliveryboxTooManyRequestsResponse::fromResponse($httpResponse),
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
     * @param CreateMailAddressRequest $request An object representing the request for this operation
     * @return CreateMailAddressCreatedResponse OK
     */
    public function createMailAddress(CreateMailAddressRequest $request): CreateMailAddressCreatedResponse
    {
        $httpRequest = new Request(CreateMailAddressRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 201) {
            return CreateMailAddressCreatedResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => CreateMailAddressBadRequestResponse::fromResponse($httpResponse),
            403 => CreateMailAddressForbiddenResponse::fromResponse($httpResponse),
            404 => CreateMailAddressNotFoundResponse::fromResponse($httpResponse),
            429 => CreateMailAddressTooManyRequestsResponse::fromResponse($httpResponse),
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
     * @param DeleteDeliveryBoxRequest $request An object representing the request for this operation
     * @return EmptyResponse OK
     */
    public function deleteDeliveryBox(DeleteDeliveryBoxRequest $request): EmptyResponse
    {
        $httpRequest = new Request(DeleteDeliveryBoxRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => DeleteDeliveryBoxBadRequestResponse::fromResponse($httpResponse),
            403 => DeleteDeliveryBoxForbiddenResponse::fromResponse($httpResponse),
            404 => DeleteDeliveryBoxNotFoundResponse::fromResponse($httpResponse),
            429 => DeleteDeliveryBoxTooManyRequestsResponse::fromResponse($httpResponse),
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
     * @param DeleteMailAddressRequest $request An object representing the request for this operation
     * @return EmptyResponse OK
     */
    public function deleteMailAddress(DeleteMailAddressRequest $request): EmptyResponse
    {
        $httpRequest = new Request(DeleteMailAddressRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => DeleteMailAddressBadRequestResponse::fromResponse($httpResponse),
            403 => DeleteMailAddressForbiddenResponse::fromResponse($httpResponse),
            404 => DeleteMailAddressNotFoundResponse::fromResponse($httpResponse),
            429 => DeleteMailAddressTooManyRequestsResponse::fromResponse($httpResponse),
            500 => DeleteMailAddressInternalServerErrorResponse::fromResponse($httpResponse),
            503 => DeleteMailAddressServiceUnavailableResponse::fromResponse($httpResponse),
            default => DeleteMailAddressDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get a DeliveryBox.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/mail-get-delivery-box
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetDeliveryBoxRequest $request An object representing the request for this operation
     * @return GetDeliveryBoxOKResponse OK
     */
    public function getDeliveryBox(GetDeliveryBoxRequest $request): GetDeliveryBoxOKResponse
    {
        $httpRequest = new Request(GetDeliveryBoxRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return GetDeliveryBoxOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => GetDeliveryBoxBadRequestResponse::fromResponse($httpResponse),
            403 => GetDeliveryBoxForbiddenResponse::fromResponse($httpResponse),
            404 => GetDeliveryBoxNotFoundResponse::fromResponse($httpResponse),
            429 => GetDeliveryBoxTooManyRequestsResponse::fromResponse($httpResponse),
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
     * @param GetMailAddressRequest $request An object representing the request for this operation
     * @return GetMailAddressOKResponse OK
     */
    public function getMailAddress(GetMailAddressRequest $request): GetMailAddressOKResponse
    {
        $httpRequest = new Request(GetMailAddressRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return GetMailAddressOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => GetMailAddressBadRequestResponse::fromResponse($httpResponse),
            403 => GetMailAddressForbiddenResponse::fromResponse($httpResponse),
            404 => GetMailAddressNotFoundResponse::fromResponse($httpResponse),
            429 => GetMailAddressTooManyRequestsResponse::fromResponse($httpResponse),
            500 => GetMailAddressInternalServerErrorResponse::fromResponse($httpResponse),
            503 => GetMailAddressServiceUnavailableResponse::fromResponse($httpResponse),
            default => GetMailAddressDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * List backups belonging to a MailAddress.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/mail-list-backups-for-mail-address
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ListBackupsForMailAddressRequest $request An object representing the request for this operation
     * @return ListBackupsForMailAddressOKResponse OK
     */
    public function listBackupsForMailAddress(ListBackupsForMailAddressRequest $request): ListBackupsForMailAddressOKResponse
    {
        $httpRequest = new Request(ListBackupsForMailAddressRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return ListBackupsForMailAddressOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => ListBackupsForMailAddressBadRequestResponse::fromResponse($httpResponse),
            403 => ListBackupsForMailAddressForbiddenResponse::fromResponse($httpResponse),
            404 => ListBackupsForMailAddressNotFoundResponse::fromResponse($httpResponse),
            429 => ListBackupsForMailAddressTooManyRequestsResponse::fromResponse($httpResponse),
            500 => ListBackupsForMailAddressInternalServerErrorResponse::fromResponse($httpResponse),
            default => ListBackupsForMailAddressDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * List DeliveryBoxes belonging to a Project.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/mail-list-delivery-boxes
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ListDeliveryBoxesRequest $request An object representing the request for this operation
     * @return ListDeliveryBoxesOKResponse OK
     */
    public function listDeliveryBoxes(ListDeliveryBoxesRequest $request): ListDeliveryBoxesOKResponse
    {
        $httpRequest = new Request(ListDeliveryBoxesRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return ListDeliveryBoxesOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => ListDeliveryBoxesBadRequestResponse::fromResponse($httpResponse),
            403 => ListDeliveryBoxesForbiddenResponse::fromResponse($httpResponse),
            404 => ListDeliveryBoxesNotFoundResponse::fromResponse($httpResponse),
            429 => ListDeliveryBoxesTooManyRequestsResponse::fromResponse($httpResponse),
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
     * @param ListMailAddressesRequest $request An object representing the request for this operation
     * @return ListMailAddressesOKResponse OK
     */
    public function listMailAddresses(ListMailAddressesRequest $request): ListMailAddressesOKResponse
    {
        $httpRequest = new Request(ListMailAddressesRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return ListMailAddressesOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => ListMailAddressesBadRequestResponse::fromResponse($httpResponse),
            403 => ListMailAddressesForbiddenResponse::fromResponse($httpResponse),
            404 => ListMailAddressesNotFoundResponse::fromResponse($httpResponse),
            429 => ListMailAddressesTooManyRequestsResponse::fromResponse($httpResponse),
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
     * @param ListProjectMailSettingsRequest $request An object representing the request for this operation
     * @return ListProjectMailSettingsOKResponse OK
     */
    public function listProjectMailSettings(ListProjectMailSettingsRequest $request): ListProjectMailSettingsOKResponse
    {
        $httpRequest = new Request(ListProjectMailSettingsRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return ListProjectMailSettingsOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => ListProjectMailSettingsBadRequestResponse::fromResponse($httpResponse),
            403 => ListProjectMailSettingsForbiddenResponse::fromResponse($httpResponse),
            404 => ListProjectMailSettingsNotFoundResponse::fromResponse($httpResponse),
            429 => ListProjectMailSettingsTooManyRequestsResponse::fromResponse($httpResponse),
            500 => ListProjectMailSettingsInternalServerErrorResponse::fromResponse($httpResponse),
            503 => ListProjectMailSettingsServiceUnavailableResponse::fromResponse($httpResponse),
            default => ListProjectMailSettingsDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Check if a Migration between two projects is possible.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/mail-migration-check-migration-is-possible
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param MigrationCheckMigrationIsPossibleRequest $request An object representing the request for this operation
     * @return MigrationCheckMigrationIsPossibleOKResponse Ok
     */
    public function migrationCheckMigrationIsPossible(MigrationCheckMigrationIsPossibleRequest $request): MigrationCheckMigrationIsPossibleOKResponse
    {
        $httpRequest = new Request(MigrationCheckMigrationIsPossibleRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return MigrationCheckMigrationIsPossibleOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => MigrationCheckMigrationIsPossibleBadRequestResponse::fromResponse($httpResponse),
            429 => MigrationCheckMigrationIsPossibleTooManyRequestsResponse::fromResponse($httpResponse),
            default => MigrationCheckMigrationIsPossibleDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get a Migration.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/mail-migration-get-migration
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param MigrationGetMigrationRequest $request An object representing the request for this operation
     * @return MigrationGetMigrationOKResponse The requested Migration.
     */
    public function migrationGetMigration(MigrationGetMigrationRequest $request): MigrationGetMigrationOKResponse
    {
        $httpRequest = new Request(MigrationGetMigrationRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return MigrationGetMigrationOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => MigrationGetMigrationBadRequestResponse::fromResponse($httpResponse),
            429 => MigrationGetMigrationTooManyRequestsResponse::fromResponse($httpResponse),
            default => MigrationGetMigrationDefaultResponse::fromResponse($httpResponse),
        });
    }

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
    public function migrationListMigrations(MigrationListMigrationsRequest $request): MigrationListMigrationsOKResponse
    {
        $httpRequest = new Request(MigrationListMigrationsRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return MigrationListMigrationsOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => MigrationListMigrationsBadRequestResponse::fromResponse($httpResponse),
            429 => MigrationListMigrationsTooManyRequestsResponse::fromResponse($httpResponse),
            default => MigrationListMigrationsDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Request a Mail Migration between two projects.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/mail-migration-request-mail-migration
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param MigrationRequestMailMigrationRequest $request An object representing the request for this operation
     * @return EmptyResponse No Content
     */
    public function migrationRequestMailMigration(MigrationRequestMailMigrationRequest $request): EmptyResponse
    {
        $httpRequest = new Request(MigrationRequestMailMigrationRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => MigrationRequestMailMigrationBadRequestResponse::fromResponse($httpResponse),
            412 => MigrationRequestMailMigrationPreconditionFailedResponse::fromResponse($httpResponse),
            429 => MigrationRequestMailMigrationTooManyRequestsResponse::fromResponse($httpResponse),
            default => MigrationRequestMailMigrationDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Recover emails for a MailAddress from a backup.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/mail-recover-mail-address-emails
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param RecoverMailAddressEmailsRequest $request An object representing the request for this operation
     * @return EmptyResponse OK
     */
    public function recoverMailAddressEmails(RecoverMailAddressEmailsRequest $request): EmptyResponse
    {
        $httpRequest = new Request(RecoverMailAddressEmailsRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => RecoverMailAddressEmailsBadRequestResponse::fromResponse($httpResponse),
            404 => RecoverMailAddressEmailsNotFoundResponse::fromResponse($httpResponse),
            429 => RecoverMailAddressEmailsTooManyRequestsResponse::fromResponse($httpResponse),
            default => RecoverMailAddressEmailsDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Update the description of a DeliveryBox.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/mail-update-delivery-box-description
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param UpdateDeliveryBoxDescriptionRequest $request An object representing the request for this operation
     * @return EmptyResponse OK
     */
    public function updateDeliveryBoxDescription(UpdateDeliveryBoxDescriptionRequest $request): EmptyResponse
    {
        $httpRequest = new Request(UpdateDeliveryBoxDescriptionRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => UpdateDeliveryBoxDescriptionBadRequestResponse::fromResponse($httpResponse),
            403 => UpdateDeliveryBoxDescriptionForbiddenResponse::fromResponse($httpResponse),
            404 => UpdateDeliveryBoxDescriptionNotFoundResponse::fromResponse($httpResponse),
            429 => UpdateDeliveryBoxDescriptionTooManyRequestsResponse::fromResponse($httpResponse),
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
     * @param UpdateDeliveryBoxPasswordRequest $request An object representing the request for this operation
     * @return EmptyResponse OK
     */
    public function updateDeliveryBoxPassword(UpdateDeliveryBoxPasswordRequest $request): EmptyResponse
    {
        $httpRequest = new Request(UpdateDeliveryBoxPasswordRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => UpdateDeliveryBoxPasswordBadRequestResponse::fromResponse($httpResponse),
            403 => UpdateDeliveryBoxPasswordForbiddenResponse::fromResponse($httpResponse),
            404 => UpdateDeliveryBoxPasswordNotFoundResponse::fromResponse($httpResponse),
            429 => UpdateDeliveryBoxPasswordTooManyRequestsResponse::fromResponse($httpResponse),
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
     * @param UpdateMailAddressAddressRequest $request An object representing the request for this operation
     * @return EmptyResponse OK
     */
    public function updateMailAddressAddress(UpdateMailAddressAddressRequest $request): EmptyResponse
    {
        $httpRequest = new Request(UpdateMailAddressAddressRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => UpdateMailAddressAddressBadRequestResponse::fromResponse($httpResponse),
            403 => UpdateMailAddressAddressForbiddenResponse::fromResponse($httpResponse),
            404 => UpdateMailAddressAddressNotFoundResponse::fromResponse($httpResponse),
            429 => UpdateMailAddressAddressTooManyRequestsResponse::fromResponse($httpResponse),
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
     * @param UpdateMailAddressAutoresponderRequest $request An object representing the request for this operation
     * @return EmptyResponse OK
     */
    public function updateMailAddressAutoresponder(UpdateMailAddressAutoresponderRequest $request): EmptyResponse
    {
        $httpRequest = new Request(UpdateMailAddressAutoresponderRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => UpdateMailAddressAutoresponderBadRequestResponse::fromResponse($httpResponse),
            403 => UpdateMailAddressAutoresponderForbiddenResponse::fromResponse($httpResponse),
            404 => UpdateMailAddressAutoresponderNotFoundResponse::fromResponse($httpResponse),
            429 => UpdateMailAddressAutoresponderTooManyRequestsResponse::fromResponse($httpResponse),
            500 => UpdateMailAddressAutoresponderInternalServerErrorResponse::fromResponse($httpResponse),
            503 => UpdateMailAddressAutoresponderServiceUnavailableResponse::fromResponse($httpResponse),
            default => UpdateMailAddressAutoresponderDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Update the catch-all of a MailAddress.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/mail-update-mail-address-catch-all
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param UpdateMailAddressCatchAllRequest $request An object representing the request for this operation
     * @return EmptyResponse OK
     */
    public function updateMailAddressCatchAll(UpdateMailAddressCatchAllRequest $request): EmptyResponse
    {
        $httpRequest = new Request(UpdateMailAddressCatchAllRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => UpdateMailAddressCatchAllBadRequestResponse::fromResponse($httpResponse),
            403 => UpdateMailAddressCatchAllForbiddenResponse::fromResponse($httpResponse),
            404 => UpdateMailAddressCatchAllNotFoundResponse::fromResponse($httpResponse),
            429 => UpdateMailAddressCatchAllTooManyRequestsResponse::fromResponse($httpResponse),
            500 => UpdateMailAddressCatchAllInternalServerErrorResponse::fromResponse($httpResponse),
            503 => UpdateMailAddressCatchAllServiceUnavailableResponse::fromResponse($httpResponse),
            default => UpdateMailAddressCatchAllDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Update the forward addresses of a MailAddresses.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/mail-update-mail-address-forward-addresses
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param UpdateMailAddressForwardAddressesRequest $request An object representing the request for this operation
     * @return EmptyResponse OK
     */
    public function updateMailAddressForwardAddresses(UpdateMailAddressForwardAddressesRequest $request): EmptyResponse
    {
        $httpRequest = new Request(UpdateMailAddressForwardAddressesRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => UpdateMailAddressForwardAddressesBadRequestResponse::fromResponse($httpResponse),
            403 => UpdateMailAddressForwardAddressesForbiddenResponse::fromResponse($httpResponse),
            404 => UpdateMailAddressForwardAddressesNotFoundResponse::fromResponse($httpResponse),
            429 => UpdateMailAddressForwardAddressesTooManyRequestsResponse::fromResponse($httpResponse),
            500 => UpdateMailAddressForwardAddressesInternalServerErrorResponse::fromResponse($httpResponse),
            503 => UpdateMailAddressForwardAddressesServiceUnavailableResponse::fromResponse($httpResponse),
            default => UpdateMailAddressForwardAddressesDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Update the password for a MailAddress.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/mail-update-mail-address-password
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param UpdateMailAddressPasswordRequest $request An object representing the request for this operation
     * @return EmptyResponse OK
     */
    public function updateMailAddressPassword(UpdateMailAddressPasswordRequest $request): EmptyResponse
    {
        $httpRequest = new Request(UpdateMailAddressPasswordRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => UpdateMailAddressPasswordBadRequestResponse::fromResponse($httpResponse),
            403 => UpdateMailAddressPasswordForbiddenResponse::fromResponse($httpResponse),
            404 => UpdateMailAddressPasswordNotFoundResponse::fromResponse($httpResponse),
            429 => UpdateMailAddressPasswordTooManyRequestsResponse::fromResponse($httpResponse),
            500 => UpdateMailAddressPasswordInternalServerErrorResponse::fromResponse($httpResponse),
            503 => UpdateMailAddressPasswordServiceUnavailableResponse::fromResponse($httpResponse),
            default => UpdateMailAddressPasswordDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Update the quota of a MailAddress.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/mail-update-mail-address-quota
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param UpdateMailAddressQuotaRequest $request An object representing the request for this operation
     * @return EmptyResponse OK
     */
    public function updateMailAddressQuota(UpdateMailAddressQuotaRequest $request): EmptyResponse
    {
        $httpRequest = new Request(UpdateMailAddressQuotaRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => UpdateMailAddressQuotaBadRequestResponse::fromResponse($httpResponse),
            403 => UpdateMailAddressQuotaForbiddenResponse::fromResponse($httpResponse),
            404 => UpdateMailAddressQuotaNotFoundResponse::fromResponse($httpResponse),
            429 => UpdateMailAddressQuotaTooManyRequestsResponse::fromResponse($httpResponse),
            500 => UpdateMailAddressQuotaInternalServerErrorResponse::fromResponse($httpResponse),
            503 => UpdateMailAddressQuotaServiceUnavailableResponse::fromResponse($httpResponse),
            default => UpdateMailAddressQuotaDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Update the spam protection of a MailAddress.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/mail-update-mail-address-spam-protection
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param UpdateMailAddressSpamProtectionRequest $request An object representing the request for this operation
     * @return EmptyResponse OK
     */
    public function updateMailAddressSpamProtection(UpdateMailAddressSpamProtectionRequest $request): EmptyResponse
    {
        $httpRequest = new Request(UpdateMailAddressSpamProtectionRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => UpdateMailAddressSpamProtectionBadRequestResponse::fromResponse($httpResponse),
            403 => UpdateMailAddressSpamProtectionForbiddenResponse::fromResponse($httpResponse),
            404 => UpdateMailAddressSpamProtectionNotFoundResponse::fromResponse($httpResponse),
            429 => UpdateMailAddressSpamProtectionTooManyRequestsResponse::fromResponse($httpResponse),
            500 => UpdateMailAddressSpamProtectionInternalServerErrorResponse::fromResponse($httpResponse),
            503 => UpdateMailAddressSpamProtectionServiceUnavailableResponse::fromResponse($httpResponse),
            default => UpdateMailAddressSpamProtectionDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Update a mail setting of a Project.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Mail/operation/mail-update-project-mail-setting
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param UpdateProjectMailSettingRequest $request An object representing the request for this operation
     * @return EmptyResponse OK
     */
    public function updateProjectMailSetting(UpdateProjectMailSettingRequest $request): EmptyResponse
    {
        $httpRequest = new Request(UpdateProjectMailSettingRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => UpdateProjectMailSettingBadRequestResponse::fromResponse($httpResponse),
            403 => UpdateProjectMailSettingForbiddenResponse::fromResponse($httpResponse),
            404 => UpdateProjectMailSettingNotFoundResponse::fromResponse($httpResponse),
            429 => UpdateProjectMailSettingTooManyRequestsResponse::fromResponse($httpResponse),
            500 => UpdateProjectMailSettingInternalServerErrorResponse::fromResponse($httpResponse),
            503 => UpdateProjectMailSettingServiceUnavailableResponse::fromResponse($httpResponse),
            default => UpdateProjectMailSettingDefaultResponse::fromResponse($httpResponse),
        });
    }
}
