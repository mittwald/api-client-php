<?php

namespace Mittwald\ApiClient\Generated\V2\Clients\User;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Psr7\Request;
use Mittwald\ApiClient\Client\EmptyResponse;
use Mittwald\ApiClient\Client\UntypedResponse;
use Mittwald\ApiClient\Error\UnexpectedResponseException;
use Mittwald\ApiClient\Generated\V2\Clients\User\AddPhoneNumber\AddPhoneNumberBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\AddPhoneNumber\AddPhoneNumberConflictResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\AddPhoneNumber\AddPhoneNumberDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\AddPhoneNumber\AddPhoneNumberForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\AddPhoneNumber\AddPhoneNumberRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\Authenticate\AuthenticateAcceptedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\Authenticate\AuthenticateBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\Authenticate\AuthenticateDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\Authenticate\AuthenticateOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\Authenticate\AuthenticateRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\Authenticate\AuthenticateUnauthorizedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\AuthenticateMfa\AuthenticateMfaBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\AuthenticateMfa\AuthenticateMfaDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\AuthenticateMfa\AuthenticateMfaOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\AuthenticateMfa\AuthenticateMfaRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\ChangeEmail\ChangeEmailBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\ChangeEmail\ChangeEmailDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\ChangeEmail\ChangeEmailRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\ChangePassword\ChangePasswordBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\ChangePassword\ChangePasswordDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\ChangePassword\ChangePasswordOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\ChangePassword\ChangePasswordRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\CheckToken\CheckTokenDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\CheckToken\CheckTokenOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\CheckToken\CheckTokenRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\ConfirmMfa\ConfirmMfaBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\ConfirmMfa\ConfirmMfaDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\ConfirmMfa\ConfirmMfaOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\ConfirmMfa\ConfirmMfaRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\ConfirmPasswordReset\ConfirmPasswordResetBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\ConfirmPasswordReset\ConfirmPasswordResetDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\ConfirmPasswordReset\ConfirmPasswordResetRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\CreateApiToken\CreateApiTokenBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\CreateApiToken\CreateApiTokenCreatedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\CreateApiToken\CreateApiTokenDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\CreateApiToken\CreateApiTokenRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\CreateFeedback\CreateFeedbackCreatedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\CreateFeedback\CreateFeedbackDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\CreateFeedback\CreateFeedbackNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\CreateFeedback\CreateFeedbackRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\CreateFeedback\CreateFeedbackUnauthorizedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\CreateSshKey\CreateSshKeyBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\CreateSshKey\CreateSshKeyDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\CreateSshKey\CreateSshKeyRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeleteApiToken\DeleteApiTokenBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeleteApiToken\DeleteApiTokenDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeleteApiToken\DeleteApiTokenRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeleteSshKey\DeleteSshKeyDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeleteSshKey\DeleteSshKeyRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeleteUser\DeleteUserBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeleteUser\DeleteUserConflictResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeleteUser\DeleteUserDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeleteUser\DeleteUserRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserChangeEmail\DeprecatedUserChangeEmailBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserChangeEmail\DeprecatedUserChangeEmailDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserChangeEmail\DeprecatedUserChangeEmailRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserConfirmPasswordReset\DeprecatedUserConfirmPasswordResetBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserConfirmPasswordReset\DeprecatedUserConfirmPasswordResetDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserConfirmPasswordReset\DeprecatedUserConfirmPasswordResetRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserCreateIssue\DeprecatedUserCreateIssueCreatedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserCreateIssue\DeprecatedUserCreateIssueDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserCreateIssue\DeprecatedUserCreateIssueNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserCreateIssue\DeprecatedUserCreateIssueRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserCreateIssue\DeprecatedUserCreateIssueUnauthorizedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserDeleteApiToken\DeprecatedUserDeleteApiTokenBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserDeleteApiToken\DeprecatedUserDeleteApiTokenDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserDeleteApiToken\DeprecatedUserDeleteApiTokenRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserDeleteSshKey\DeprecatedUserDeleteSshKeyDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserDeleteSshKey\DeprecatedUserDeleteSshKeyRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserDisableMfa\DeprecatedUserDisableMfaBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserDisableMfa\DeprecatedUserDisableMfaDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserDisableMfa\DeprecatedUserDisableMfaRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserEditApiToken\DeprecatedUserEditApiTokenBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserEditApiToken\DeprecatedUserEditApiTokenDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserEditApiToken\DeprecatedUserEditApiTokenRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserEditSshKey\DeprecatedUserEditSshKeyBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserEditSshKey\DeprecatedUserEditSshKeyDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserEditSshKey\DeprecatedUserEditSshKeyRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserInitPasswordReset\DeprecatedUserInitPasswordResetBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserInitPasswordReset\DeprecatedUserInitPasswordResetDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserInitPasswordReset\DeprecatedUserInitPasswordResetRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserLogout\DeprecatedUserLogoutBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserLogout\DeprecatedUserLogoutDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserLogout\DeprecatedUserLogoutRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserResendVerificationEmail\DeprecatedUserResendVerificationEmailBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserResendVerificationEmail\DeprecatedUserResendVerificationEmailDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserResendVerificationEmail\DeprecatedUserResendVerificationEmailForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserResendVerificationEmail\DeprecatedUserResendVerificationEmailRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserServiceAvatarRemove\DeprecatedUserServiceAvatarRemoveBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserServiceAvatarRemove\DeprecatedUserServiceAvatarRemoveDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserServiceAvatarRemove\DeprecatedUserServiceAvatarRemoveRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserServiceAvatarRequestUpload\DeprecatedUserServiceAvatarRequestUploadBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserServiceAvatarRequestUpload\DeprecatedUserServiceAvatarRequestUploadDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserServiceAvatarRequestUpload\DeprecatedUserServiceAvatarRequestUploadOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserServiceAvatarRequestUpload\DeprecatedUserServiceAvatarRequestUploadRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserServiceFeedbackCreate\DeprecatedUserServiceFeedbackCreateCreatedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserServiceFeedbackCreate\DeprecatedUserServiceFeedbackCreateDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserServiceFeedbackCreate\DeprecatedUserServiceFeedbackCreateNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserServiceFeedbackCreate\DeprecatedUserServiceFeedbackCreateRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserServiceFeedbackCreate\DeprecatedUserServiceFeedbackCreateUnauthorizedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserServiceFeedbackList\DeprecatedUserServiceFeedbackListDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserServiceFeedbackList\DeprecatedUserServiceFeedbackListOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserServiceFeedbackList\DeprecatedUserServiceFeedbackListRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserServiceIssueNew\DeprecatedUserServiceIssueNewDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserServiceIssueNew\DeprecatedUserServiceIssueNewRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserServicePersonalInformationUpdate\DeprecatedUserServicePersonalInformationUpdateBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserServicePersonalInformationUpdate\DeprecatedUserServicePersonalInformationUpdateDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserServicePersonalInformationUpdate\DeprecatedUserServicePersonalInformationUpdateRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserServicePersonalizedSettingsGet\DeprecatedUserServicePersonalizedSettingsGetDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserServicePersonalizedSettingsGet\DeprecatedUserServicePersonalizedSettingsGetOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserServicePersonalizedSettingsGet\DeprecatedUserServicePersonalizedSettingsGetRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserServicePersonalizedSettingsUpdate\DeprecatedUserServicePersonalizedSettingsUpdateBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserServicePersonalizedSettingsUpdate\DeprecatedUserServicePersonalizedSettingsUpdateDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserServicePersonalizedSettingsUpdate\DeprecatedUserServicePersonalizedSettingsUpdateRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserServicePhoneNumberAdd\DeprecatedUserServicePhoneNumberAddBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserServicePhoneNumberAdd\DeprecatedUserServicePhoneNumberAddConflictResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserServicePhoneNumberAdd\DeprecatedUserServicePhoneNumberAddDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserServicePhoneNumberAdd\DeprecatedUserServicePhoneNumberAddRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserServicePhoneNumberRemove\DeprecatedUserServicePhoneNumberRemoveBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserServicePhoneNumberRemove\DeprecatedUserServicePhoneNumberRemoveDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserServicePhoneNumberRemove\DeprecatedUserServicePhoneNumberRemoveRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserServicePhoneNumberVerify\DeprecatedUserServicePhoneNumberVerifyBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserServicePhoneNumberVerify\DeprecatedUserServicePhoneNumberVerifyConflictResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserServicePhoneNumberVerify\DeprecatedUserServicePhoneNumberVerifyDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserServicePhoneNumberVerify\DeprecatedUserServicePhoneNumberVerifyNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserServicePhoneNumberVerify\DeprecatedUserServicePhoneNumberVerifyRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserServiceUserGet\DeprecatedUserServiceUserGetDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserServiceUserGet\DeprecatedUserServiceUserGetForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserServiceUserGet\DeprecatedUserServiceUserGetNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserServiceUserGet\DeprecatedUserServiceUserGetOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserServiceUserGet\DeprecatedUserServiceUserGetPreconditionFailedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserServiceUserGet\DeprecatedUserServiceUserGetRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserServiceUserGetOwn\DeprecatedUserServiceUserGetOwnDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserServiceUserGetOwn\DeprecatedUserServiceUserGetOwnOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserServiceUserGetOwn\DeprecatedUserServiceUserGetOwnRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserTerminateAllSessions\DeprecatedUserTerminateAllSessionsDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserTerminateAllSessions\DeprecatedUserTerminateAllSessionsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserTerminateSession\DeprecatedUserTerminateSessionDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserTerminateSession\DeprecatedUserTerminateSessionNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserTerminateSession\DeprecatedUserTerminateSessionRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserUpdateAccount\DeprecatedUserUpdateAccountBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserUpdateAccount\DeprecatedUserUpdateAccountDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserUpdateAccount\DeprecatedUserUpdateAccountRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserVerifyEmail\DeprecatedUserVerifyEmailBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserVerifyEmail\DeprecatedUserVerifyEmailDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserVerifyEmail\DeprecatedUserVerifyEmailNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserVerifyEmail\DeprecatedUserVerifyEmailRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\DisableMfa\DisableMfaBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\DisableMfa\DisableMfaDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\DisableMfa\DisableMfaRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\EditApiToken\EditApiTokenBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\EditApiToken\EditApiTokenDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\EditApiToken\EditApiTokenRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\EditSshKey\EditSshKeyBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\EditSshKey\EditSshKeyDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\EditSshKey\EditSshKeyRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\GetApiToken\GetApiTokenDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\GetApiToken\GetApiTokenNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\GetApiToken\GetApiTokenOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\GetApiToken\GetApiTokenRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\GetMfaStatus\GetMfaStatusDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\GetMfaStatus\GetMfaStatusOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\GetMfaStatus\GetMfaStatusRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\GetOwnAccount\GetOwnAccountDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\GetOwnAccount\GetOwnAccountOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\GetOwnAccount\GetOwnAccountRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\GetOwnEmail\GetOwnEmailDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\GetOwnEmail\GetOwnEmailNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\GetOwnEmail\GetOwnEmailOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\GetOwnEmail\GetOwnEmailRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\GetPasswordUpdatedAt\GetPasswordUpdatedAtDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\GetPasswordUpdatedAt\GetPasswordUpdatedAtOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\GetPasswordUpdatedAt\GetPasswordUpdatedAtRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\GetPersonalizedSettings\GetPersonalizedSettingsDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\GetPersonalizedSettings\GetPersonalizedSettingsOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\GetPersonalizedSettings\GetPersonalizedSettingsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\GetPollStatus\GetPollStatusBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\GetPollStatus\GetPollStatusDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\GetPollStatus\GetPollStatusNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\GetPollStatus\GetPollStatusRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\GetSession\GetSessionDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\GetSession\GetSessionNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\GetSession\GetSessionOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\GetSession\GetSessionRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\GetSshKey\GetSshKeyDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\GetSshKey\GetSshKeyNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\GetSshKey\GetSshKeyOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\GetSshKey\GetSshKeyRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\GetUser\GetUserDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\GetUser\GetUserForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\GetUser\GetUserNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\GetUser\GetUserOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\GetUser\GetUserPreconditionFailedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\GetUser\GetUserRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\InitMfa\InitMfaBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\InitMfa\InitMfaDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\InitMfa\InitMfaOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\InitMfa\InitMfaRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\InitPasswordReset\InitPasswordResetBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\InitPasswordReset\InitPasswordResetDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\InitPasswordReset\InitPasswordResetRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\ListApiTokens\ListApiTokensDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\ListApiTokens\ListApiTokensOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\ListApiTokens\ListApiTokensRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\ListFeedback\ListFeedbackDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\ListFeedback\ListFeedbackOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\ListFeedback\ListFeedbackRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\ListSessions\ListSessionsDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\ListSessions\ListSessionsOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\ListSessions\ListSessionsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\ListSshKeys\ListSshKeysDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\ListSshKeys\ListSshKeysOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\ListSshKeys\ListSshKeysRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\Logout\LogoutBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\Logout\LogoutDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\Logout\LogoutRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\PasswordValidationGetPasswordPolicy\PasswordValidationGetPasswordPolicyDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\PasswordValidationGetPasswordPolicy\PasswordValidationGetPasswordPolicyOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\PasswordValidationGetPasswordPolicy\PasswordValidationGetPasswordPolicyRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\PasswordValidationGetPasswordPolicyV2Deprecated\PasswordValidationGetPasswordPolicyV2DeprecatedDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\PasswordValidationGetPasswordPolicyV2Deprecated\PasswordValidationGetPasswordPolicyV2DeprecatedOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\PasswordValidationGetPasswordPolicyV2Deprecated\PasswordValidationGetPasswordPolicyV2DeprecatedRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\PostPollStatus\PostPollStatusBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\PostPollStatus\PostPollStatusDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\PostPollStatus\PostPollStatusForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\PostPollStatus\PostPollStatusRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\Register\RegisterBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\Register\RegisterCreatedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\Register\RegisterDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\Register\RegisterRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\RemoveAvatar\RemoveAvatarBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\RemoveAvatar\RemoveAvatarDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\RemoveAvatar\RemoveAvatarRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\RemovePhoneNumber\RemovePhoneNumberBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\RemovePhoneNumber\RemovePhoneNumberDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\RemovePhoneNumber\RemovePhoneNumberRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\RequestAvatarUpload\RequestAvatarUploadBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\RequestAvatarUpload\RequestAvatarUploadDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\RequestAvatarUpload\RequestAvatarUploadOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\RequestAvatarUpload\RequestAvatarUploadRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\ResendVerificationEmail\ResendVerificationEmailBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\ResendVerificationEmail\ResendVerificationEmailDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\ResendVerificationEmail\ResendVerificationEmailForbiddenResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\ResendVerificationEmail\ResendVerificationEmailRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\ResetRecoverycodes\ResetRecoverycodesBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\ResetRecoverycodes\ResetRecoverycodesDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\ResetRecoverycodes\ResetRecoverycodesOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\ResetRecoverycodes\ResetRecoverycodesRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\SupportCodeRequest\SupportCodeRequestDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\SupportCodeRequest\SupportCodeRequestOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\SupportCodeRequest\SupportCodeRequestRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\TerminateAllSessions\TerminateAllSessionsDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\TerminateAllSessions\TerminateAllSessionsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\TerminateSession\TerminateSessionDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\TerminateSession\TerminateSessionNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\TerminateSession\TerminateSessionRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\UpdateAccount\UpdateAccountBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\UpdateAccount\UpdateAccountDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\UpdateAccount\UpdateAccountRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\UpdatePersonalInformation\UpdatePersonalInformationBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\UpdatePersonalInformation\UpdatePersonalInformationDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\UpdatePersonalInformation\UpdatePersonalInformationRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\UpdatePersonalizedSettings\UpdatePersonalizedSettingsBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\UpdatePersonalizedSettings\UpdatePersonalizedSettingsDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\UpdatePersonalizedSettings\UpdatePersonalizedSettingsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\VerifyEmail\VerifyEmailBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\VerifyEmail\VerifyEmailDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\VerifyEmail\VerifyEmailNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\VerifyEmail\VerifyEmailRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\VerifyPhoneNumber\VerifyPhoneNumberBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\VerifyPhoneNumber\VerifyPhoneNumberConflictResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\VerifyPhoneNumber\VerifyPhoneNumberDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\VerifyPhoneNumber\VerifyPhoneNumberNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\VerifyPhoneNumber\VerifyPhoneNumberRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\VerifyRegistration\VerifyRegistrationBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\VerifyRegistration\VerifyRegistrationDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\VerifyRegistration\VerifyRegistrationNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\VerifyRegistration\VerifyRegistrationRequest;

/**
 * Client for User API
 *
 * The user API allows you to manage your own user and access information of other
 * users that might be visible to you.
 *
 * DO NOT EDIT; this class was generated by the mittwald/api-client-builder package
 * (https://github.com/mittwald/api-client-php-builder). Please make any changes
 * there.
 *
 * @generated
 * @see https://github.com/mittwald/api-client-php-builder
 */
class UserClientImpl implements UserClient
{
    private Client $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * Change your Email-Address.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/deprecated-user-change-email
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeprecatedUserChangeEmail\DeprecatedUserChangeEmailRequest $request An object representing the request for this operation
     * @deprecated
     * @return EmptyResponse Your email has been added, but needs to be verfied. Check your mails and
     * call /email/verify with the verification code sent with the mail.
     */
    public function deprecatedUserChangeEmail(DeprecatedUserChangeEmailRequest $request): EmptyResponse
    {
        $httpRequest = new Request(DeprecatedUserChangeEmailRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => DeprecatedUserChangeEmailBadRequestResponse::fromResponse($httpResponse),
            default => DeprecatedUserChangeEmailDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Confirm password reset.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/deprecated-user-confirm-password-reset
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeprecatedUserConfirmPasswordReset\DeprecatedUserConfirmPasswordResetRequest $request An object representing the request for this operation
     * @deprecated
     * @return EmptyResponse Password reset was successful.
     */
    public function deprecatedUserConfirmPasswordReset(DeprecatedUserConfirmPasswordResetRequest $request): EmptyResponse
    {
        $httpRequest = new Request(DeprecatedUserConfirmPasswordResetRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => DeprecatedUserConfirmPasswordResetBadRequestResponse::fromResponse($httpResponse),
            default => DeprecatedUserConfirmPasswordResetDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Create a new issue.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/deprecated-user-create-issue
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeprecatedUserCreateIssue\DeprecatedUserCreateIssueRequest $request An object representing the request for this operation
     * @deprecated
     * @return DeprecatedUserCreateIssue\DeprecatedUserCreateIssueCreatedResponse Issue successfully submitted.
     */
    public function deprecatedUserCreateIssue(DeprecatedUserCreateIssueRequest $request): DeprecatedUserCreateIssueCreatedResponse
    {
        $httpRequest = new Request(DeprecatedUserCreateIssueRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 201) {
            return DeprecatedUserCreateIssueCreatedResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            401 => DeprecatedUserCreateIssueUnauthorizedResponse::fromResponse($httpResponse),
            404 => DeprecatedUserCreateIssueNotFoundResponse::fromResponse($httpResponse),
            default => DeprecatedUserCreateIssueDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Deletes an ApiToken.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/deprecated-user-delete-api-token
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeprecatedUserDeleteApiToken\DeprecatedUserDeleteApiTokenRequest $request An object representing the request for this operation
     * @deprecated
     * @return EmptyResponse The `ApiToken` has been deleted.
     */
    public function deprecatedUserDeleteApiToken(DeprecatedUserDeleteApiTokenRequest $request): EmptyResponse
    {
        $httpRequest = new Request(DeprecatedUserDeleteApiTokenRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => DeprecatedUserDeleteApiTokenBadRequestResponse::fromResponse($httpResponse),
            default => DeprecatedUserDeleteApiTokenDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Remove a ssh-key.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/deprecated-user-delete-ssh-key
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeprecatedUserDeleteSshKey\DeprecatedUserDeleteSshKeyRequest $request An object representing the request for this operation
     * @deprecated
     * @return EmptyResponse The ssh-key was removed.
     */
    public function deprecatedUserDeleteSshKey(DeprecatedUserDeleteSshKeyRequest $request): EmptyResponse
    {
        $httpRequest = new Request(DeprecatedUserDeleteSshKeyRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            default => DeprecatedUserDeleteSshKeyDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Disable Multi Factor Authentication.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/deprecated-user-disable-mfa
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeprecatedUserDisableMfa\DeprecatedUserDisableMfaRequest $request An object representing the request for this operation
     * @deprecated
     * @return EmptyResponse Multi Factor Authentication was disabled.
     */
    public function deprecatedUserDisableMfa(DeprecatedUserDisableMfaRequest $request): EmptyResponse
    {
        $httpRequest = new Request(DeprecatedUserDisableMfaRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => DeprecatedUserDisableMfaBadRequestResponse::fromResponse($httpResponse),
            default => DeprecatedUserDisableMfaDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Update an existing `ApiToken`.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/deprecated-user-edit-api-token
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeprecatedUserEditApiToken\DeprecatedUserEditApiTokenRequest $request An object representing the request for this operation
     * @deprecated
     * @return EmptyResponse ApiToken was updated.
     */
    public function deprecatedUserEditApiToken(DeprecatedUserEditApiTokenRequest $request): EmptyResponse
    {
        $httpRequest = new Request(DeprecatedUserEditApiTokenRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => DeprecatedUserEditApiTokenBadRequestResponse::fromResponse($httpResponse),
            default => DeprecatedUserEditApiTokenDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Edit a stored ssh-key.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/deprecated-user-edit-ssh-key
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeprecatedUserEditSshKey\DeprecatedUserEditSshKeyRequest $request An object representing the request for this operation
     * @deprecated
     * @return EmptyResponse The ssh-key has been edited.
     */
    public function deprecatedUserEditSshKey(DeprecatedUserEditSshKeyRequest $request): EmptyResponse
    {
        $httpRequest = new Request(DeprecatedUserEditSshKeyRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => DeprecatedUserEditSshKeyBadRequestResponse::fromResponse($httpResponse),
            default => DeprecatedUserEditSshKeyDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Initialize password reset process.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/deprecated-user-init-password-reset
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeprecatedUserInitPasswordReset\DeprecatedUserInitPasswordResetRequest $request An object representing the request for this operation
     * @deprecated
     * @return EmptyResponse The password reset process has been initialized and an email with confirmation code has been sent.
     */
    public function deprecatedUserInitPasswordReset(DeprecatedUserInitPasswordResetRequest $request): EmptyResponse
    {
        $httpRequest = new Request(DeprecatedUserInitPasswordResetRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => DeprecatedUserInitPasswordResetBadRequestResponse::fromResponse($httpResponse),
            default => DeprecatedUserInitPasswordResetDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Terminate session and invalidate access token.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/deprecated-user-logout
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeprecatedUserLogout\DeprecatedUserLogoutRequest $request An object representing the request for this operation
     * @deprecated
     * @return EmptyResponse You've been logged out. The access token has been removed and invalidated.
     */
    public function deprecatedUserLogout(DeprecatedUserLogoutRequest $request): EmptyResponse
    {
        $httpRequest = new Request(DeprecatedUserLogoutRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => DeprecatedUserLogoutBadRequestResponse::fromResponse($httpResponse),
            default => DeprecatedUserLogoutDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Resend the Email-Address verification email.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/deprecated-user-resend-verification-email
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeprecatedUserResendVerificationEmail\DeprecatedUserResendVerificationEmailRequest $request An object representing the request for this operation
     * @deprecated
     * @return EmptyResponse New Email-Address verification mail was sent.
     */
    public function deprecatedUserResendVerificationEmail(DeprecatedUserResendVerificationEmailRequest $request): EmptyResponse
    {
        $httpRequest = new Request(DeprecatedUserResendVerificationEmailRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => DeprecatedUserResendVerificationEmailBadRequestResponse::fromResponse($httpResponse),
            403 => DeprecatedUserResendVerificationEmailForbiddenResponse::fromResponse($httpResponse),
            default => DeprecatedUserResendVerificationEmailDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Remove Avatar
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/deprecated-user-service-avatar-remove
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeprecatedUserServiceAvatarRemove\DeprecatedUserServiceAvatarRemoveRequest $request An object representing the request for this operation
     * @deprecated
     * @return EmptyResponse Avatar removal was successful
     */
    public function deprecatedUserServiceAvatarRemove(DeprecatedUserServiceAvatarRemoveRequest $request): EmptyResponse
    {
        $httpRequest = new Request(DeprecatedUserServiceAvatarRemoveRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => DeprecatedUserServiceAvatarRemoveBadRequestResponse::fromResponse($httpResponse),
            default => DeprecatedUserServiceAvatarRemoveDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Request a new avatar upload
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/deprecated-user-service-avatar-request-upload
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeprecatedUserServiceAvatarRequestUpload\DeprecatedUserServiceAvatarRequestUploadRequest $request An object representing the request for this operation
     * @deprecated
     * @return DeprecatedUserServiceAvatarRequestUpload\DeprecatedUserServiceAvatarRequestUploadOKResponse Avatar upload request was successful. Use the `refId` to upload your avatar to the /v2/files/:refId
     */
    public function deprecatedUserServiceAvatarRequestUpload(DeprecatedUserServiceAvatarRequestUploadRequest $request): DeprecatedUserServiceAvatarRequestUploadOKResponse
    {
        $httpRequest = new Request(DeprecatedUserServiceAvatarRequestUploadRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return DeprecatedUserServiceAvatarRequestUploadOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => DeprecatedUserServiceAvatarRequestUploadBadRequestResponse::fromResponse($httpResponse),
            default => DeprecatedUserServiceAvatarRequestUploadDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Submit user feedback
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/deprecated-user-service-feedback-create
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeprecatedUserServiceFeedbackCreate\DeprecatedUserServiceFeedbackCreateRequest $request An object representing the request for this operation
     * @deprecated
     * @return DeprecatedUserServiceFeedbackCreate\DeprecatedUserServiceFeedbackCreateCreatedResponse
     */
    public function deprecatedUserServiceFeedbackCreate(DeprecatedUserServiceFeedbackCreateRequest $request): DeprecatedUserServiceFeedbackCreateCreatedResponse
    {
        $httpRequest = new Request(DeprecatedUserServiceFeedbackCreateRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 201) {
            return DeprecatedUserServiceFeedbackCreateCreatedResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            401 => DeprecatedUserServiceFeedbackCreateUnauthorizedResponse::fromResponse($httpResponse),
            404 => DeprecatedUserServiceFeedbackCreateNotFoundResponse::fromResponse($httpResponse),
            default => DeprecatedUserServiceFeedbackCreateDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Returns your submitted feedback
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/deprecated-user-service-feedback-list
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeprecatedUserServiceFeedbackList\DeprecatedUserServiceFeedbackListRequest $request An object representing the request for this operation
     * @deprecated
     * @return DeprecatedUserServiceFeedbackList\DeprecatedUserServiceFeedbackListOKResponse A list of feedback submitted by the user
     */
    public function deprecatedUserServiceFeedbackList(DeprecatedUserServiceFeedbackListRequest $request): DeprecatedUserServiceFeedbackListOKResponse
    {
        $httpRequest = new Request(DeprecatedUserServiceFeedbackListRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return DeprecatedUserServiceFeedbackListOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            default => DeprecatedUserServiceFeedbackListDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * create a new issue
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/deprecated-user-service-issue-new
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeprecatedUserServiceIssueNew\DeprecatedUserServiceIssueNewRequest $request An object representing the request for this operation
     * @deprecated
     * @return EmptyResponse Issue created
     */
    public function deprecatedUserServiceIssueNew(DeprecatedUserServiceIssueNewRequest $request): EmptyResponse
    {
        $httpRequest = new Request(DeprecatedUserServiceIssueNewRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 201) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            default => DeprecatedUserServiceIssueNewDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Change your personal information
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/deprecated-user-service-personal-information-update
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeprecatedUserServicePersonalInformationUpdate\DeprecatedUserServicePersonalInformationUpdateRequest $request An object representing the request for this operation
     * @deprecated
     * @return EmptyResponse Your personal information has been changed
     */
    public function deprecatedUserServicePersonalInformationUpdate(DeprecatedUserServicePersonalInformationUpdateRequest $request): EmptyResponse
    {
        $httpRequest = new Request(DeprecatedUserServicePersonalInformationUpdateRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => DeprecatedUserServicePersonalInformationUpdateBadRequestResponse::fromResponse($httpResponse),
            default => DeprecatedUserServicePersonalInformationUpdateDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get personalized settings for the user executing the request
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/deprecated-user-service-personalized-settings-get
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeprecatedUserServicePersonalizedSettingsGet\DeprecatedUserServicePersonalizedSettingsGetRequest $request An object representing the request for this operation
     * @deprecated
     * @return DeprecatedUserServicePersonalizedSettingsGet\DeprecatedUserServicePersonalizedSettingsGetOKResponse The settingsString
     */
    public function deprecatedUserServicePersonalizedSettingsGet(DeprecatedUserServicePersonalizedSettingsGetRequest $request): DeprecatedUserServicePersonalizedSettingsGetOKResponse
    {
        $httpRequest = new Request(DeprecatedUserServicePersonalizedSettingsGetRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return DeprecatedUserServicePersonalizedSettingsGetOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            default => DeprecatedUserServicePersonalizedSettingsGetDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * update personalized settings
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/deprecated-user-service-personalized-settings-update
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeprecatedUserServicePersonalizedSettingsUpdate\DeprecatedUserServicePersonalizedSettingsUpdateRequest $request An object representing the request for this operation
     * @deprecated
     * @return EmptyResponse PersonalSettings have been updated
     */
    public function deprecatedUserServicePersonalizedSettingsUpdate(DeprecatedUserServicePersonalizedSettingsUpdateRequest $request): EmptyResponse
    {
        $httpRequest = new Request(DeprecatedUserServicePersonalizedSettingsUpdateRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => DeprecatedUserServicePersonalizedSettingsUpdateBadRequestResponse::fromResponse($httpResponse),
            default => DeprecatedUserServicePersonalizedSettingsUpdateDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Add phone number and init verification process
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/deprecated-user-service-phone-number-add
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeprecatedUserServicePhoneNumberAdd\DeprecatedUserServicePhoneNumberAddRequest $request An object representing the request for this operation
     * @deprecated
     * @return EmptyResponse PhoneNumber was added successfully. Now, it can be verified under /v2/user/{userId}/phone/verify
     */
    public function deprecatedUserServicePhoneNumberAdd(DeprecatedUserServicePhoneNumberAddRequest $request): EmptyResponse
    {
        $httpRequest = new Request(DeprecatedUserServicePhoneNumberAddRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => DeprecatedUserServicePhoneNumberAddBadRequestResponse::fromResponse($httpResponse),
            409 => DeprecatedUserServicePhoneNumberAddConflictResponse::fromResponse($httpResponse),
            default => DeprecatedUserServicePhoneNumberAddDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * remove your PhoneNumber
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/deprecated-user-service-phone-number-remove
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeprecatedUserServicePhoneNumberRemove\DeprecatedUserServicePhoneNumberRemoveRequest $request An object representing the request for this operation
     * @deprecated
     * @return EmptyResponse PhoneNumber removal was successful
     */
    public function deprecatedUserServicePhoneNumberRemove(DeprecatedUserServicePhoneNumberRemoveRequest $request): EmptyResponse
    {
        $httpRequest = new Request(DeprecatedUserServicePhoneNumberRemoveRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => DeprecatedUserServicePhoneNumberRemoveBadRequestResponse::fromResponse($httpResponse),
            default => DeprecatedUserServicePhoneNumberRemoveDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Verify phone number
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/deprecated-user-service-phone-number-verify
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeprecatedUserServicePhoneNumberVerify\DeprecatedUserServicePhoneNumberVerifyRequest $request An object representing the request for this operation
     * @deprecated
     * @return EmptyResponse The PhoneNumber has been verified
     */
    public function deprecatedUserServicePhoneNumberVerify(DeprecatedUserServicePhoneNumberVerifyRequest $request): EmptyResponse
    {
        $httpRequest = new Request(DeprecatedUserServicePhoneNumberVerifyRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => DeprecatedUserServicePhoneNumberVerifyBadRequestResponse::fromResponse($httpResponse),
            404 => DeprecatedUserServicePhoneNumberVerifyNotFoundResponse::fromResponse($httpResponse),
            409 => DeprecatedUserServicePhoneNumberVerifyConflictResponse::fromResponse($httpResponse),
            default => DeprecatedUserServicePhoneNumberVerifyDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get profile information for the specified user if the user is related to the executing user
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/deprecated-user-service-user-get
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeprecatedUserServiceUserGet\DeprecatedUserServiceUserGetRequest $request An object representing the request for this operation
     * @deprecated
     * @return DeprecatedUserServiceUserGet\DeprecatedUserServiceUserGetOKResponse The Profile
     */
    public function deprecatedUserServiceUserGet(DeprecatedUserServiceUserGetRequest $request): DeprecatedUserServiceUserGetOKResponse
    {
        $httpRequest = new Request(DeprecatedUserServiceUserGetRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return DeprecatedUserServiceUserGetOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            403 => DeprecatedUserServiceUserGetForbiddenResponse::fromResponse($httpResponse),
            404 => DeprecatedUserServiceUserGetNotFoundResponse::fromResponse($httpResponse),
            412 => DeprecatedUserServiceUserGetPreconditionFailedResponse::fromResponse($httpResponse),
            default => DeprecatedUserServiceUserGetDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get profile information for the executing user
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/deprecated-user-service-user-get-own
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeprecatedUserServiceUserGetOwn\DeprecatedUserServiceUserGetOwnRequest $request An object representing the request for this operation
     * @deprecated
     * @return DeprecatedUserServiceUserGetOwn\DeprecatedUserServiceUserGetOwnOKResponse The Profile
     */
    public function deprecatedUserServiceUserGetOwn(DeprecatedUserServiceUserGetOwnRequest $request): DeprecatedUserServiceUserGetOwnOKResponse
    {
        $httpRequest = new Request(DeprecatedUserServiceUserGetOwnRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return DeprecatedUserServiceUserGetOwnOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            default => DeprecatedUserServiceUserGetOwnDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Terminate all sessions, except the current session.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/deprecated-user-terminate-all-sessions
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeprecatedUserTerminateAllSessions\DeprecatedUserTerminateAllSessionsRequest $request An object representing the request for this operation
     * @deprecated
     * @return EmptyResponse All sessions terminated.
     */
    public function deprecatedUserTerminateAllSessions(DeprecatedUserTerminateAllSessionsRequest $request): EmptyResponse
    {
        $httpRequest = new Request(DeprecatedUserTerminateAllSessionsRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            default => DeprecatedUserTerminateAllSessionsDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Terminate a specific Session.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/deprecated-user-terminate-session
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeprecatedUserTerminateSession\DeprecatedUserTerminateSessionRequest $request An object representing the request for this operation
     * @deprecated
     * @return EmptyResponse Session terminated.
     */
    public function deprecatedUserTerminateSession(DeprecatedUserTerminateSessionRequest $request): EmptyResponse
    {
        $httpRequest = new Request(DeprecatedUserTerminateSessionRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            404 => DeprecatedUserTerminateSessionNotFoundResponse::fromResponse($httpResponse),
            default => DeprecatedUserTerminateSessionDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Update your account information.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/deprecated-user-update-account
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeprecatedUserUpdateAccount\DeprecatedUserUpdateAccountRequest $request An object representing the request for this operation
     * @deprecated
     * @return EmptyResponse Account has been updated.
     */
    public function deprecatedUserUpdateAccount(DeprecatedUserUpdateAccountRequest $request): EmptyResponse
    {
        $httpRequest = new Request(DeprecatedUserUpdateAccountRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => DeprecatedUserUpdateAccountBadRequestResponse::fromResponse($httpResponse),
            default => DeprecatedUserUpdateAccountDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Verify an added Email-Address.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/deprecated-user-verify-email
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeprecatedUserVerifyEmail\DeprecatedUserVerifyEmailRequest $request An object representing the request for this operation
     * @deprecated
     * @return EmptyResponse Email has been verified.
     */
    public function deprecatedUserVerifyEmail(DeprecatedUserVerifyEmailRequest $request): EmptyResponse
    {
        $httpRequest = new Request(DeprecatedUserVerifyEmailRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => DeprecatedUserVerifyEmailBadRequestResponse::fromResponse($httpResponse),
            404 => DeprecatedUserVerifyEmailNotFoundResponse::fromResponse($httpResponse),
            default => DeprecatedUserVerifyEmailDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get a PasswordPolicy.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/password-validation-get-password-policy
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param PasswordValidationGetPasswordPolicy\PasswordValidationGetPasswordPolicyRequest $request An object representing the request for this operation
     * @return PasswordValidationGetPasswordPolicy\PasswordValidationGetPasswordPolicyOKResponse The PasswordPolicy to be retrieved.
     */
    public function passwordValidationGetPasswordPolicy(PasswordValidationGetPasswordPolicyRequest $request): PasswordValidationGetPasswordPolicyOKResponse
    {
        $httpRequest = new Request(PasswordValidationGetPasswordPolicyRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return PasswordValidationGetPasswordPolicyOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            default => PasswordValidationGetPasswordPolicyDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get a password policy.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/password-validation-get-password-policy-v2-deprecated
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param PasswordValidationGetPasswordPolicyV2Deprecated\PasswordValidationGetPasswordPolicyV2DeprecatedRequest $request An object representing the request for this operation
     * @deprecated
     * @return PasswordValidationGetPasswordPolicyV2Deprecated\PasswordValidationGetPasswordPolicyV2DeprecatedOKResponse The requested password policy
     */
    public function passwordValidationGetPasswordPolicyV2Deprecated(PasswordValidationGetPasswordPolicyV2DeprecatedRequest $request): PasswordValidationGetPasswordPolicyV2DeprecatedOKResponse
    {
        $httpRequest = new Request(PasswordValidationGetPasswordPolicyV2DeprecatedRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return PasswordValidationGetPasswordPolicyV2DeprecatedOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            default => PasswordValidationGetPasswordPolicyV2DeprecatedDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Add phone number and start verification process.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-add-phone-number
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param AddPhoneNumber\AddPhoneNumberRequest $request An object representing the request for this operation
     * @return EmptyResponse Phone number was added successfully. Now, it can be verified via /v2/users/:userId/phone/verify.
     */
    public function addPhoneNumber(AddPhoneNumberRequest $request): EmptyResponse
    {
        $httpRequest = new Request(AddPhoneNumberRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => AddPhoneNumberBadRequestResponse::fromResponse($httpResponse),
            403 => AddPhoneNumberForbiddenResponse::fromResponse($httpResponse),
            409 => AddPhoneNumberConflictResponse::fromResponse($httpResponse),
            default => AddPhoneNumberDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Authenticate yourself to get an access token.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-authenticate
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param Authenticate\AuthenticateRequest $request An object representing the request for this operation
     * @return Authenticate\AuthenticateOKResponse Your authentication request was successfull and you've got an access token.
     */
    public function authenticate(AuthenticateRequest $request): AuthenticateOKResponse
    {
        $httpRequest = new Request(AuthenticateRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return AuthenticateOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            202 => AuthenticateAcceptedResponse::fromResponse($httpResponse),
            400 => AuthenticateBadRequestResponse::fromResponse($httpResponse),
            401 => AuthenticateUnauthorizedResponse::fromResponse($httpResponse),
            default => AuthenticateDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Validate your second factor.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-authenticate-mfa
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param AuthenticateMfa\AuthenticateMfaRequest $request An object representing the request for this operation
     * @return AuthenticateMfa\AuthenticateMfaOKResponse Your authentication request was successful and you've got an access token.
     */
    public function authenticateMfa(AuthenticateMfaRequest $request): AuthenticateMfaOKResponse
    {
        $httpRequest = new Request(AuthenticateMfaRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return AuthenticateMfaOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => AuthenticateMfaBadRequestResponse::fromResponse($httpResponse),
            408 => UntypedResponse::fromResponse($httpResponse),
            default => AuthenticateMfaDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Change your Email-Address.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-change-email
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ChangeEmail\ChangeEmailRequest $request An object representing the request for this operation
     * @return EmptyResponse Your email has been added, but needs to be verfied. Check your mails and
     * call /email/verify with the verification code sent with the mail.
     */
    public function changeEmail(ChangeEmailRequest $request): EmptyResponse
    {
        $httpRequest = new Request(ChangeEmailRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => ChangeEmailBadRequestResponse::fromResponse($httpResponse),
            default => ChangeEmailDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Change your password.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-change-password
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ChangePassword\ChangePasswordRequest $request An object representing the request for this operation
     * @return ChangePassword\ChangePasswordOKResponse Your password has been changed.
     */
    public function changePassword(ChangePasswordRequest $request): ChangePasswordOKResponse
    {
        $httpRequest = new Request(ChangePasswordRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return ChangePasswordOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            202 => UntypedResponse::fromResponse($httpResponse),
            400 => ChangePasswordBadRequestResponse::fromResponse($httpResponse),
            default => ChangePasswordDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Check token for validity.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-check-token
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param CheckToken\CheckTokenRequest $request An object representing the request for this operation
     * @return CheckToken\CheckTokenOKResponse Your token is valid.
     */
    public function checkToken(CheckTokenRequest $request): CheckTokenOKResponse
    {
        $httpRequest = new Request(CheckTokenRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return CheckTokenOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            default => CheckTokenDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Confirm Multi Factor Authentication.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-confirm-mfa
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ConfirmMfa\ConfirmMfaRequest $request An object representing the request for this operation
     * @return ConfirmMfa\ConfirmMfaOKResponse Mfa is now activated and recovery codes are in the response body.
     */
    public function confirmMfa(ConfirmMfaRequest $request): ConfirmMfaOKResponse
    {
        $httpRequest = new Request(ConfirmMfaRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return ConfirmMfaOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => ConfirmMfaBadRequestResponse::fromResponse($httpResponse),
            default => ConfirmMfaDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Confirm password reset.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-confirm-password-reset
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ConfirmPasswordReset\ConfirmPasswordResetRequest $request An object representing the request for this operation
     * @return EmptyResponse Password reset was successful.
     */
    public function confirmPasswordReset(ConfirmPasswordResetRequest $request): EmptyResponse
    {
        $httpRequest = new Request(ConfirmPasswordResetRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => ConfirmPasswordResetBadRequestResponse::fromResponse($httpResponse),
            default => ConfirmPasswordResetDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Store a new ApiToken.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-create-api-token
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param CreateApiToken\CreateApiTokenRequest $request An object representing the request for this operation
     * @return CreateApiToken\CreateApiTokenCreatedResponse ApiToken was added.
     */
    public function createApiToken(CreateApiTokenRequest $request): CreateApiTokenCreatedResponse
    {
        $httpRequest = new Request(CreateApiTokenRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 201) {
            return CreateApiTokenCreatedResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => CreateApiTokenBadRequestResponse::fromResponse($httpResponse),
            default => CreateApiTokenDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Submit your user feedback.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-create-feedback
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param CreateFeedback\CreateFeedbackRequest $request An object representing the request for this operation
     * @return CreateFeedback\CreateFeedbackCreatedResponse Feedback successfully submitted.
     */
    public function createFeedback(CreateFeedbackRequest $request): CreateFeedbackCreatedResponse
    {
        $httpRequest = new Request(CreateFeedbackRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 201) {
            return CreateFeedbackCreatedResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            401 => CreateFeedbackUnauthorizedResponse::fromResponse($httpResponse),
            404 => CreateFeedbackNotFoundResponse::fromResponse($httpResponse),
            default => CreateFeedbackDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Store a new ssh-key.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-create-ssh-key
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param CreateSshKey\CreateSshKeyRequest $request An object representing the request for this operation
     * @return EmptyResponse The ssh-key was stored.
     */
    public function createSshKey(CreateSshKeyRequest $request): EmptyResponse
    {
        $httpRequest = new Request(CreateSshKeyRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 201) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => CreateSshKeyBadRequestResponse::fromResponse($httpResponse),
            default => CreateSshKeyDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Deletes an ApiToken.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-delete-api-token
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeleteApiToken\DeleteApiTokenRequest $request An object representing the request for this operation
     * @return EmptyResponse The `ApiToken` has been deleted.
     */
    public function deleteApiToken(DeleteApiTokenRequest $request): EmptyResponse
    {
        $httpRequest = new Request(DeleteApiTokenRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => DeleteApiTokenBadRequestResponse::fromResponse($httpResponse),
            default => DeleteApiTokenDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Remove a ssh-key.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-delete-ssh-key
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeleteSshKey\DeleteSshKeyRequest $request An object representing the request for this operation
     * @return EmptyResponse The ssh-key has been removed.
     */
    public function deleteSshKey(DeleteSshKeyRequest $request): EmptyResponse
    {
        $httpRequest = new Request(DeleteSshKeyRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            default => DeleteSshKeyDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Delete your account and all your personal data.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-delete-user
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeleteUser\DeleteUserRequest $request An object representing the request for this operation
     * @return EmptyResponse Your user has been deleted.
     */
    public function deleteUser(DeleteUserRequest $request): EmptyResponse
    {
        $httpRequest = new Request(DeleteUserRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            202 => UntypedResponse::fromResponse($httpResponse),
            400 => DeleteUserBadRequestResponse::fromResponse($httpResponse),
            409 => DeleteUserConflictResponse::fromResponse($httpResponse),
            default => DeleteUserDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Disable Multi Factor Authentication.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-disable-mfa
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DisableMfa\DisableMfaRequest $request An object representing the request for this operation
     * @return EmptyResponse Multi Factor Authentication was disabled.
     */
    public function disableMfa(DisableMfaRequest $request): EmptyResponse
    {
        $httpRequest = new Request(DisableMfaRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => DisableMfaBadRequestResponse::fromResponse($httpResponse),
            default => DisableMfaDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Update an existing `ApiToken`.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-edit-api-token
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param EditApiToken\EditApiTokenRequest $request An object representing the request for this operation
     * @return EmptyResponse ApiToken was updated.
     */
    public function editApiToken(EditApiTokenRequest $request): EmptyResponse
    {
        $httpRequest = new Request(EditApiTokenRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => EditApiTokenBadRequestResponse::fromResponse($httpResponse),
            default => EditApiTokenDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Edit a stored ssh-key.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-edit-ssh-key
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param EditSshKey\EditSshKeyRequest $request An object representing the request for this operation
     * @return EmptyResponse The ssh-key has been edited.
     */
    public function editSshKey(EditSshKeyRequest $request): EmptyResponse
    {
        $httpRequest = new Request(EditSshKeyRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => EditSshKeyBadRequestResponse::fromResponse($httpResponse),
            default => EditSshKeyDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get a specific ApiToken.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-get-api-token
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetApiToken\GetApiTokenRequest $request An object representing the request for this operation
     * @return GetApiToken\GetApiTokenOKResponse The ApiToken.
     */
    public function getApiToken(GetApiTokenRequest $request): GetApiTokenOKResponse
    {
        $httpRequest = new Request(GetApiTokenRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return GetApiTokenOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            404 => GetApiTokenNotFoundResponse::fromResponse($httpResponse),
            default => GetApiTokenDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get your current multi factor auth status.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-get-mfa-status
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetMfaStatus\GetMfaStatusRequest $request An object representing the request for this operation
     * @return GetMfaStatus\GetMfaStatusOKResponse Multi factor auth status
     */
    public function getMfaStatus(GetMfaStatusRequest $request): GetMfaStatusOKResponse
    {
        $httpRequest = new Request(GetMfaStatusRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return GetMfaStatusOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            default => GetMfaStatusDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get your account information.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-get-own-account
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetOwnAccount\GetOwnAccountRequest $request An object representing the request for this operation
     * @return GetOwnAccount\GetOwnAccountOKResponse Account information.
     */
    public function getOwnAccount(GetOwnAccountRequest $request): GetOwnAccountOKResponse
    {
        $httpRequest = new Request(GetOwnAccountRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return GetOwnAccountOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            default => GetOwnAccountDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get your verified Email-Address.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-get-own-email
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetOwnEmail\GetOwnEmailRequest $request An object representing the request for this operation
     * @return GetOwnEmail\GetOwnEmailOKResponse Your Email-Address.
     */
    public function getOwnEmail(GetOwnEmailRequest $request): GetOwnEmailOKResponse
    {
        $httpRequest = new Request(GetOwnEmailRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return GetOwnEmailOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            404 => GetOwnEmailNotFoundResponse::fromResponse($httpResponse),
            default => GetOwnEmailDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * The timestamp of your latest password change.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-get-password-updated-at
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetPasswordUpdatedAt\GetPasswordUpdatedAtRequest $request An object representing the request for this operation
     * @return GetPasswordUpdatedAt\GetPasswordUpdatedAtOKResponse Timestamp of latest password change.
     */
    public function getPasswordUpdatedAt(GetPasswordUpdatedAtRequest $request): GetPasswordUpdatedAtOKResponse
    {
        $httpRequest = new Request(GetPasswordUpdatedAtRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return GetPasswordUpdatedAtOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            default => GetPasswordUpdatedAtDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get personalized settings.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-get-personalized-settings
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetPersonalizedSettings\GetPersonalizedSettingsRequest $request An object representing the request for this operation
     * @return GetPersonalizedSettings\GetPersonalizedSettingsOKResponse Personal settings of the user.
     */
    public function getPersonalizedSettings(GetPersonalizedSettingsRequest $request): GetPersonalizedSettingsOKResponse
    {
        $httpRequest = new Request(GetPersonalizedSettingsRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return GetPersonalizedSettingsOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            default => GetPersonalizedSettingsDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get poll settings for the specified user.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-get-poll-status
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetPollStatus\GetPollStatusRequest $request An object representing the request for this operation
     * @return UntypedResponse
     */
    public function getPollStatus(GetPollStatusRequest $request): UntypedResponse
    {
        $httpRequest = new Request(GetPollStatusRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return UntypedResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => GetPollStatusBadRequestResponse::fromResponse($httpResponse),
            404 => GetPollStatusNotFoundResponse::fromResponse($httpResponse),
            default => GetPollStatusDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get a specific session.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-get-session
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetSession\GetSessionRequest $request An object representing the request for this operation
     * @return GetSession\GetSessionOKResponse The session.
     */
    public function getSession(GetSessionRequest $request): GetSessionOKResponse
    {
        $httpRequest = new Request(GetSessionRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return GetSessionOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            404 => GetSessionNotFoundResponse::fromResponse($httpResponse),
            default => GetSessionDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get a specific stored ssh-key.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-get-ssh-key
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetSshKey\GetSshKeyRequest $request An object representing the request for this operation
     * @return GetSshKey\GetSshKeyOKResponse The requested ssh-key.
     */
    public function getSshKey(GetSshKeyRequest $request): GetSshKeyOKResponse
    {
        $httpRequest = new Request(GetSshKeyRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return GetSshKeyOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            404 => GetSshKeyNotFoundResponse::fromResponse($httpResponse),
            default => GetSshKeyDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get profile information for a user.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-get-user
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetUser\GetUserRequest $request An object representing the request for this operation
     * @return GetUser\GetUserOKResponse The user profile.
     */
    public function getUser(GetUserRequest $request): GetUserOKResponse
    {
        $httpRequest = new Request(GetUserRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return GetUserOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            403 => GetUserForbiddenResponse::fromResponse($httpResponse),
            404 => GetUserNotFoundResponse::fromResponse($httpResponse),
            412 => GetUserPreconditionFailedResponse::fromResponse($httpResponse),
            default => GetUserDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Initialize Multi Factor Authentication. If successful, it needs to be confirmed, before usage of mfa.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-init-mfa
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param InitMfa\InitMfaRequest $request An object representing the request for this operation
     * @return InitMfa\InitMfaOKResponse The process of activating Multi Factor Authentication is initialized.
     */
    public function initMfa(InitMfaRequest $request): InitMfaOKResponse
    {
        $httpRequest = new Request(InitMfaRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return InitMfaOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => InitMfaBadRequestResponse::fromResponse($httpResponse),
            default => InitMfaDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Initialize password reset process.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-init-password-reset
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param InitPasswordReset\InitPasswordResetRequest $request An object representing the request for this operation
     * @return EmptyResponse The password reset process has been initialized and an email with confirmation code has been sent.
     */
    public function initPasswordReset(InitPasswordResetRequest $request): EmptyResponse
    {
        $httpRequest = new Request(InitPasswordResetRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 201) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => InitPasswordResetBadRequestResponse::fromResponse($httpResponse),
            default => InitPasswordResetDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * List all of your ApiTokens.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-list-api-tokens
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ListApiTokens\ListApiTokensRequest $request An object representing the request for this operation
     * @return ListApiTokens\ListApiTokensOKResponse A list of ApiTokens.
     */
    public function listApiTokens(ListApiTokensRequest $request): ListApiTokensOKResponse
    {
        $httpRequest = new Request(ListApiTokensRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return ListApiTokensOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            default => ListApiTokensDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Submitted feedback of the given user.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-list-feedback
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ListFeedback\ListFeedbackRequest $request An object representing the request for this operation
     * @return ListFeedback\ListFeedbackOKResponse Feedback submitted by the user.
     */
    public function listFeedback(ListFeedbackRequest $request): ListFeedbackOKResponse
    {
        $httpRequest = new Request(ListFeedbackRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return ListFeedbackOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            default => ListFeedbackDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * List all sessions.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-list-sessions
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ListSessions\ListSessionsRequest $request An object representing the request for this operation
     * @return ListSessions\ListSessionsOKResponse List of all sessions.
     */
    public function listSessions(ListSessionsRequest $request): ListSessionsOKResponse
    {
        $httpRequest = new Request(ListSessionsRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return ListSessionsOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            default => ListSessionsDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get your stored ssh-keys.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-list-ssh-keys
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ListSshKeys\ListSshKeysRequest $request An object representing the request for this operation
     * @return ListSshKeys\ListSshKeysOKResponse The list of stored ssh-keys.
     */
    public function listSshKeys(ListSshKeysRequest $request): ListSshKeysOKResponse
    {
        $httpRequest = new Request(ListSshKeysRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return ListSshKeysOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            default => ListSshKeysDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Terminate session and invalidate access token.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-logout
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param Logout\LogoutRequest $request An object representing the request for this operation
     * @return EmptyResponse You've been logged out. The access token has been removed and invalidated.
     */
    public function logout(LogoutRequest $request): EmptyResponse
    {
        $httpRequest = new Request(LogoutRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => LogoutBadRequestResponse::fromResponse($httpResponse),
            default => LogoutDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Store new or update poll settings.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-post-poll-status
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param PostPollStatus\PostPollStatusRequest $request An object representing the request for this operation
     * @return UntypedResponse The updated poll settings.
     */
    public function postPollStatus(PostPollStatusRequest $request): UntypedResponse
    {
        $httpRequest = new Request(PostPollStatusRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return UntypedResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => PostPollStatusBadRequestResponse::fromResponse($httpResponse),
            403 => PostPollStatusForbiddenResponse::fromResponse($httpResponse),
            default => PostPollStatusDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Register with email and password.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-register
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param Register\RegisterRequest $request An object representing the request for this operation
     * @return Register\RegisterCreatedResponse Registration was successfull. A verification email will be sent to the specified email address.
     * The users can be used as soon as the verification link was opened
     */
    public function register(RegisterRequest $request): RegisterCreatedResponse
    {
        $httpRequest = new Request(RegisterRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 201) {
            return RegisterCreatedResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => RegisterBadRequestResponse::fromResponse($httpResponse),
            default => RegisterDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Remove Avatar.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-remove-avatar
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param RemoveAvatar\RemoveAvatarRequest $request An object representing the request for this operation
     * @return EmptyResponse Avatar removal was successful.
     */
    public function removeAvatar(RemoveAvatarRequest $request): EmptyResponse
    {
        $httpRequest = new Request(RemoveAvatarRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => RemoveAvatarBadRequestResponse::fromResponse($httpResponse),
            default => RemoveAvatarDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Remove phone number.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-remove-phone-number
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param RemovePhoneNumber\RemovePhoneNumberRequest $request An object representing the request for this operation
     * @return EmptyResponse PhoneNumber removal was successful
     */
    public function removePhoneNumber(RemovePhoneNumberRequest $request): EmptyResponse
    {
        $httpRequest = new Request(RemovePhoneNumberRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => RemovePhoneNumberBadRequestResponse::fromResponse($httpResponse),
            default => RemovePhoneNumberDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Request a new avatar image upload.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-request-avatar-upload
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param RequestAvatarUpload\RequestAvatarUploadRequest $request An object representing the request for this operation
     * @return RequestAvatarUpload\RequestAvatarUploadOKResponse Avatar upload request was successful.
     */
    public function requestAvatarUpload(RequestAvatarUploadRequest $request): RequestAvatarUploadOKResponse
    {
        $httpRequest = new Request(RequestAvatarUploadRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return RequestAvatarUploadOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => RequestAvatarUploadBadRequestResponse::fromResponse($httpResponse),
            default => RequestAvatarUploadDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Resend the Email-Address verification email.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-resend-verification-email
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ResendVerificationEmail\ResendVerificationEmailRequest $request An object representing the request for this operation
     * @return EmptyResponse New Email-Address verification email was sent.
     */
    public function resendVerificationEmail(ResendVerificationEmailRequest $request): EmptyResponse
    {
        $httpRequest = new Request(ResendVerificationEmailRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => ResendVerificationEmailBadRequestResponse::fromResponse($httpResponse),
            403 => ResendVerificationEmailForbiddenResponse::fromResponse($httpResponse),
            default => ResendVerificationEmailDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Reset RecoveryCodes for MFA.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-reset-recoverycodes
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ResetRecoverycodes\ResetRecoverycodesRequest $request An object representing the request for this operation
     * @return ResetRecoverycodes\ResetRecoverycodesOKResponse Recovery-Codes are reset now. The new Recovery-Codes are in the response body.
     */
    public function resetRecoverycodes(ResetRecoverycodesRequest $request): ResetRecoverycodesOKResponse
    {
        $httpRequest = new Request(ResetRecoverycodesRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return ResetRecoverycodesOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => ResetRecoverycodesBadRequestResponse::fromResponse($httpResponse),
            default => ResetRecoverycodesDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Request a support code.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-support-code-request
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param SupportCodeRequest\SupportCodeRequestRequest $request An object representing the request for this operation
     * @return SupportCodeRequest\SupportCodeRequestOKResponse The requested support code and the expiry.
     */
    public function supportCodeRequest(SupportCodeRequestRequest $request): SupportCodeRequestOKResponse
    {
        $httpRequest = new Request(SupportCodeRequestRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return SupportCodeRequestOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            default => SupportCodeRequestDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Terminate all sessions, except the current session.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-terminate-all-sessions
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param TerminateAllSessions\TerminateAllSessionsRequest $request An object representing the request for this operation
     * @return EmptyResponse All sessions terminated.
     */
    public function terminateAllSessions(TerminateAllSessionsRequest $request): EmptyResponse
    {
        $httpRequest = new Request(TerminateAllSessionsRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            default => TerminateAllSessionsDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Terminate a specific Session.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-terminate-session
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param TerminateSession\TerminateSessionRequest $request An object representing the request for this operation
     * @return EmptyResponse Session terminated.
     */
    public function terminateSession(TerminateSessionRequest $request): EmptyResponse
    {
        $httpRequest = new Request(TerminateSessionRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            404 => TerminateSessionNotFoundResponse::fromResponse($httpResponse),
            default => TerminateSessionDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Update your account information.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-update-account
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param UpdateAccount\UpdateAccountRequest $request An object representing the request for this operation
     * @return EmptyResponse Account has been updated.
     */
    public function updateAccount(UpdateAccountRequest $request): EmptyResponse
    {
        $httpRequest = new Request(UpdateAccountRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => UpdateAccountBadRequestResponse::fromResponse($httpResponse),
            default => UpdateAccountDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Change personal information.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-update-personal-information
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param UpdatePersonalInformation\UpdatePersonalInformationRequest $request An object representing the request for this operation
     * @return EmptyResponse Your personal information has been changed
     */
    public function updatePersonalInformation(UpdatePersonalInformationRequest $request): EmptyResponse
    {
        $httpRequest = new Request(UpdatePersonalInformationRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => UpdatePersonalInformationBadRequestResponse::fromResponse($httpResponse),
            default => UpdatePersonalInformationDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Update personalized GUI settings.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-update-personalized-settings
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param UpdatePersonalizedSettings\UpdatePersonalizedSettingsRequest $request An object representing the request for this operation
     * @return EmptyResponse PersonalSettings have been updated
     */
    public function updatePersonalizedSettings(UpdatePersonalizedSettingsRequest $request): EmptyResponse
    {
        $httpRequest = new Request(UpdatePersonalizedSettingsRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => UpdatePersonalizedSettingsBadRequestResponse::fromResponse($httpResponse),
            default => UpdatePersonalizedSettingsDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Verify an added Email-Address.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-verify-email
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param VerifyEmail\VerifyEmailRequest $request An object representing the request for this operation
     * @return EmptyResponse Email has been verified.
     */
    public function verifyEmail(VerifyEmailRequest $request): EmptyResponse
    {
        $httpRequest = new Request(VerifyEmailRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => VerifyEmailBadRequestResponse::fromResponse($httpResponse),
            404 => VerifyEmailNotFoundResponse::fromResponse($httpResponse),
            default => VerifyEmailDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Verify phone number.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-verify-phone-number
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param VerifyPhoneNumber\VerifyPhoneNumberRequest $request An object representing the request for this operation
     * @return EmptyResponse The phone number has been verified.
     */
    public function verifyPhoneNumber(VerifyPhoneNumberRequest $request): EmptyResponse
    {
        $httpRequest = new Request(VerifyPhoneNumberRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 204) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => VerifyPhoneNumberBadRequestResponse::fromResponse($httpResponse),
            404 => VerifyPhoneNumberNotFoundResponse::fromResponse($httpResponse),
            409 => VerifyPhoneNumberConflictResponse::fromResponse($httpResponse),
            default => VerifyPhoneNumberDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Verify your registration.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-verify-registration
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param VerifyRegistration\VerifyRegistrationRequest $request An object representing the request for this operation
     * @return EmptyResponse User is verified and you can now login to your user account.
     */
    public function verifyRegistration(VerifyRegistrationRequest $request): EmptyResponse
    {
        $httpRequest = new Request(VerifyRegistrationRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return new EmptyResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => VerifyRegistrationBadRequestResponse::fromResponse($httpResponse),
            404 => VerifyRegistrationNotFoundResponse::fromResponse($httpResponse),
            default => VerifyRegistrationDefaultResponse::fromResponse($httpResponse),
        });
    }
}
