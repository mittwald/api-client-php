<?php

namespace Mittwald\ApiClient\Generated\V2\Clients\User;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Psr7\Request;
use Mittwald\ApiClient\Client\EmptyResponse;
use Mittwald\ApiClient\Client\UntypedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\AddPhoneNumber\AddPhoneNumber400Response;
use Mittwald\ApiClient\Generated\V2\Clients\User\AddPhoneNumber\AddPhoneNumber403Response;
use Mittwald\ApiClient\Generated\V2\Clients\User\AddPhoneNumber\AddPhoneNumber409Response;
use Mittwald\ApiClient\Generated\V2\Clients\User\AddPhoneNumber\AddPhoneNumberDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\AddPhoneNumber\AddPhoneNumberRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\Authenticate\Authenticate200Response;
use Mittwald\ApiClient\Generated\V2\Clients\User\Authenticate\Authenticate202Response;
use Mittwald\ApiClient\Generated\V2\Clients\User\Authenticate\Authenticate400Response;
use Mittwald\ApiClient\Generated\V2\Clients\User\Authenticate\Authenticate401Response;
use Mittwald\ApiClient\Generated\V2\Clients\User\Authenticate\AuthenticateDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\Authenticate\AuthenticateRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\AuthenticateMfa\AuthenticateMfa200Response;
use Mittwald\ApiClient\Generated\V2\Clients\User\AuthenticateMfa\AuthenticateMfa400Response;
use Mittwald\ApiClient\Generated\V2\Clients\User\AuthenticateMfa\AuthenticateMfaDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\AuthenticateMfa\AuthenticateMfaRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\ChangeEmail\ChangeEmail400Response;
use Mittwald\ApiClient\Generated\V2\Clients\User\ChangeEmail\ChangeEmailDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\ChangeEmail\ChangeEmailRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\ChangePassword\ChangePassword200Response;
use Mittwald\ApiClient\Generated\V2\Clients\User\ChangePassword\ChangePassword400Response;
use Mittwald\ApiClient\Generated\V2\Clients\User\ChangePassword\ChangePasswordDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\ChangePassword\ChangePasswordRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\CheckToken\CheckToken200Response;
use Mittwald\ApiClient\Generated\V2\Clients\User\CheckToken\CheckTokenDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\CheckToken\CheckTokenRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\ConfirmMfa\ConfirmMfa200Response;
use Mittwald\ApiClient\Generated\V2\Clients\User\ConfirmMfa\ConfirmMfa400Response;
use Mittwald\ApiClient\Generated\V2\Clients\User\ConfirmMfa\ConfirmMfaDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\ConfirmMfa\ConfirmMfaRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\ConfirmPasswordReset\ConfirmPasswordReset400Response;
use Mittwald\ApiClient\Generated\V2\Clients\User\ConfirmPasswordReset\ConfirmPasswordResetDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\ConfirmPasswordReset\ConfirmPasswordResetRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\CreateApiToken\CreateApiToken201Response;
use Mittwald\ApiClient\Generated\V2\Clients\User\CreateApiToken\CreateApiToken400Response;
use Mittwald\ApiClient\Generated\V2\Clients\User\CreateApiToken\CreateApiTokenDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\CreateApiToken\CreateApiTokenRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\CreateFeedback\CreateFeedback201Response;
use Mittwald\ApiClient\Generated\V2\Clients\User\CreateFeedback\CreateFeedback401Response;
use Mittwald\ApiClient\Generated\V2\Clients\User\CreateFeedback\CreateFeedback404Response;
use Mittwald\ApiClient\Generated\V2\Clients\User\CreateFeedback\CreateFeedbackDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\CreateFeedback\CreateFeedbackRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\CreateSshKey\CreateSshKey400Response;
use Mittwald\ApiClient\Generated\V2\Clients\User\CreateSshKey\CreateSshKeyDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\CreateSshKey\CreateSshKeyRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeleteApiToken\DeleteApiToken400Response;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeleteApiToken\DeleteApiTokenDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeleteApiToken\DeleteApiTokenRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeleteSshKey\DeleteSshKeyDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeleteSshKey\DeleteSshKeyRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeleteUser\DeleteUser400Response;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeleteUser\DeleteUser409Response;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeleteUser\DeleteUserDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeleteUser\DeleteUserRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserChangeEmail\DeprecatedUserChangeEmail400Response;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserChangeEmail\DeprecatedUserChangeEmailDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserChangeEmail\DeprecatedUserChangeEmailRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserConfirmPasswordReset\DeprecatedUserConfirmPasswordReset400Response;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserConfirmPasswordReset\DeprecatedUserConfirmPasswordResetDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserConfirmPasswordReset\DeprecatedUserConfirmPasswordResetRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserCreateIssue\DeprecatedUserCreateIssue201Response;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserCreateIssue\DeprecatedUserCreateIssue401Response;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserCreateIssue\DeprecatedUserCreateIssue404Response;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserCreateIssue\DeprecatedUserCreateIssueDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserCreateIssue\DeprecatedUserCreateIssueRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserDeleteApiToken\DeprecatedUserDeleteApiToken400Response;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserDeleteApiToken\DeprecatedUserDeleteApiTokenDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserDeleteApiToken\DeprecatedUserDeleteApiTokenRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserDeleteSshKey\DeprecatedUserDeleteSshKeyDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserDeleteSshKey\DeprecatedUserDeleteSshKeyRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserDisableMfa\DeprecatedUserDisableMfa400Response;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserDisableMfa\DeprecatedUserDisableMfaDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserDisableMfa\DeprecatedUserDisableMfaRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserEditApiToken\DeprecatedUserEditApiToken400Response;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserEditApiToken\DeprecatedUserEditApiTokenDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserEditApiToken\DeprecatedUserEditApiTokenRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserEditSshKey\DeprecatedUserEditSshKey400Response;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserEditSshKey\DeprecatedUserEditSshKeyDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserEditSshKey\DeprecatedUserEditSshKeyRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserInitPasswordReset\DeprecatedUserInitPasswordReset400Response;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserInitPasswordReset\DeprecatedUserInitPasswordResetDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserInitPasswordReset\DeprecatedUserInitPasswordResetRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserLogout\DeprecatedUserLogout400Response;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserLogout\DeprecatedUserLogoutDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserLogout\DeprecatedUserLogoutRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserResendVerificationEmail\DeprecatedUserResendVerificationEmail400Response;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserResendVerificationEmail\DeprecatedUserResendVerificationEmail403Response;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserResendVerificationEmail\DeprecatedUserResendVerificationEmailDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserResendVerificationEmail\DeprecatedUserResendVerificationEmailRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserServiceAvatarRemove\DeprecatedUserServiceAvatarRemove400Response;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserServiceAvatarRemove\DeprecatedUserServiceAvatarRemoveDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserServiceAvatarRemove\DeprecatedUserServiceAvatarRemoveRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserServiceAvatarRequestUpload\DeprecatedUserServiceAvatarRequestUpload200Response;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserServiceAvatarRequestUpload\DeprecatedUserServiceAvatarRequestUpload400Response;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserServiceAvatarRequestUpload\DeprecatedUserServiceAvatarRequestUploadDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserServiceAvatarRequestUpload\DeprecatedUserServiceAvatarRequestUploadRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserServiceFeedbackCreate\DeprecatedUserServiceFeedbackCreate201Response;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserServiceFeedbackCreate\DeprecatedUserServiceFeedbackCreate401Response;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserServiceFeedbackCreate\DeprecatedUserServiceFeedbackCreate404Response;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserServiceFeedbackCreate\DeprecatedUserServiceFeedbackCreateDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserServiceFeedbackCreate\DeprecatedUserServiceFeedbackCreateRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserServiceFeedbackList\DeprecatedUserServiceFeedbackList200Response;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserServiceFeedbackList\DeprecatedUserServiceFeedbackListDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserServiceFeedbackList\DeprecatedUserServiceFeedbackListRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserServiceIssueNew\DeprecatedUserServiceIssueNewDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserServiceIssueNew\DeprecatedUserServiceIssueNewRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserServicePersonalInformationUpdate\DeprecatedUserServicePersonalInformationUpdate400Response;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserServicePersonalInformationUpdate\DeprecatedUserServicePersonalInformationUpdateDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserServicePersonalInformationUpdate\DeprecatedUserServicePersonalInformationUpdateRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserServicePersonalizedSettingsGet\DeprecatedUserServicePersonalizedSettingsGet200Response;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserServicePersonalizedSettingsGet\DeprecatedUserServicePersonalizedSettingsGetDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserServicePersonalizedSettingsGet\DeprecatedUserServicePersonalizedSettingsGetRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserServicePersonalizedSettingsUpdate\DeprecatedUserServicePersonalizedSettingsUpdate400Response;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserServicePersonalizedSettingsUpdate\DeprecatedUserServicePersonalizedSettingsUpdateDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserServicePersonalizedSettingsUpdate\DeprecatedUserServicePersonalizedSettingsUpdateRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserServicePhoneNumberAdd\DeprecatedUserServicePhoneNumberAdd400Response;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserServicePhoneNumberAdd\DeprecatedUserServicePhoneNumberAdd409Response;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserServicePhoneNumberAdd\DeprecatedUserServicePhoneNumberAddDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserServicePhoneNumberAdd\DeprecatedUserServicePhoneNumberAddRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserServicePhoneNumberRemove\DeprecatedUserServicePhoneNumberRemove400Response;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserServicePhoneNumberRemove\DeprecatedUserServicePhoneNumberRemoveDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserServicePhoneNumberRemove\DeprecatedUserServicePhoneNumberRemoveRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserServicePhoneNumberVerify\DeprecatedUserServicePhoneNumberVerify400Response;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserServicePhoneNumberVerify\DeprecatedUserServicePhoneNumberVerify404Response;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserServicePhoneNumberVerify\DeprecatedUserServicePhoneNumberVerify409Response;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserServicePhoneNumberVerify\DeprecatedUserServicePhoneNumberVerifyDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserServicePhoneNumberVerify\DeprecatedUserServicePhoneNumberVerifyRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserServiceUserGet\DeprecatedUserServiceUserGet200Response;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserServiceUserGet\DeprecatedUserServiceUserGet403Response;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserServiceUserGet\DeprecatedUserServiceUserGet404Response;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserServiceUserGet\DeprecatedUserServiceUserGet412Response;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserServiceUserGet\DeprecatedUserServiceUserGetDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserServiceUserGet\DeprecatedUserServiceUserGetRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserServiceUserGetOwn\DeprecatedUserServiceUserGetOwn200Response;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserServiceUserGetOwn\DeprecatedUserServiceUserGetOwnDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserServiceUserGetOwn\DeprecatedUserServiceUserGetOwnRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserTerminateAllSessions\DeprecatedUserTerminateAllSessionsDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserTerminateAllSessions\DeprecatedUserTerminateAllSessionsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserTerminateSession\DeprecatedUserTerminateSession404Response;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserTerminateSession\DeprecatedUserTerminateSessionDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserTerminateSession\DeprecatedUserTerminateSessionRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserUpdateAccount\DeprecatedUserUpdateAccount400Response;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserUpdateAccount\DeprecatedUserUpdateAccountDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserUpdateAccount\DeprecatedUserUpdateAccountRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserVerifyEmail\DeprecatedUserVerifyEmail400Response;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserVerifyEmail\DeprecatedUserVerifyEmail404Response;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserVerifyEmail\DeprecatedUserVerifyEmailDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserVerifyEmail\DeprecatedUserVerifyEmailRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\DisableMfa\DisableMfa400Response;
use Mittwald\ApiClient\Generated\V2\Clients\User\DisableMfa\DisableMfaDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\DisableMfa\DisableMfaRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\EditApiToken\EditApiToken400Response;
use Mittwald\ApiClient\Generated\V2\Clients\User\EditApiToken\EditApiTokenDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\EditApiToken\EditApiTokenRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\EditSshKey\EditSshKey400Response;
use Mittwald\ApiClient\Generated\V2\Clients\User\EditSshKey\EditSshKeyDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\EditSshKey\EditSshKeyRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\GetApiToken\GetApiToken200Response;
use Mittwald\ApiClient\Generated\V2\Clients\User\GetApiToken\GetApiToken404Response;
use Mittwald\ApiClient\Generated\V2\Clients\User\GetApiToken\GetApiTokenDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\GetApiToken\GetApiTokenRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\GetMfaStatus\GetMfaStatus200Response;
use Mittwald\ApiClient\Generated\V2\Clients\User\GetMfaStatus\GetMfaStatusDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\GetMfaStatus\GetMfaStatusRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\GetOwnAccount\GetOwnAccount200Response;
use Mittwald\ApiClient\Generated\V2\Clients\User\GetOwnAccount\GetOwnAccountDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\GetOwnAccount\GetOwnAccountRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\GetOwnEmail\GetOwnEmail200Response;
use Mittwald\ApiClient\Generated\V2\Clients\User\GetOwnEmail\GetOwnEmail404Response;
use Mittwald\ApiClient\Generated\V2\Clients\User\GetOwnEmail\GetOwnEmailDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\GetOwnEmail\GetOwnEmailRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\GetPasswordUpdatedAt\GetPasswordUpdatedAt200Response;
use Mittwald\ApiClient\Generated\V2\Clients\User\GetPasswordUpdatedAt\GetPasswordUpdatedAtDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\GetPasswordUpdatedAt\GetPasswordUpdatedAtRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\GetPersonalizedSettings\GetPersonalizedSettings200Response;
use Mittwald\ApiClient\Generated\V2\Clients\User\GetPersonalizedSettings\GetPersonalizedSettingsDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\GetPersonalizedSettings\GetPersonalizedSettingsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\GetSession\GetSession200Response;
use Mittwald\ApiClient\Generated\V2\Clients\User\GetSession\GetSession404Response;
use Mittwald\ApiClient\Generated\V2\Clients\User\GetSession\GetSessionDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\GetSession\GetSessionRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\GetSshKey\GetSshKey200Response;
use Mittwald\ApiClient\Generated\V2\Clients\User\GetSshKey\GetSshKey404Response;
use Mittwald\ApiClient\Generated\V2\Clients\User\GetSshKey\GetSshKeyDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\GetSshKey\GetSshKeyRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\GetUser\GetUser200Response;
use Mittwald\ApiClient\Generated\V2\Clients\User\GetUser\GetUser403Response;
use Mittwald\ApiClient\Generated\V2\Clients\User\GetUser\GetUser404Response;
use Mittwald\ApiClient\Generated\V2\Clients\User\GetUser\GetUser412Response;
use Mittwald\ApiClient\Generated\V2\Clients\User\GetUser\GetUserDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\GetUser\GetUserRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\InitMfa\InitMfa200Response;
use Mittwald\ApiClient\Generated\V2\Clients\User\InitMfa\InitMfa400Response;
use Mittwald\ApiClient\Generated\V2\Clients\User\InitMfa\InitMfaDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\InitMfa\InitMfaRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\InitPasswordReset\InitPasswordReset400Response;
use Mittwald\ApiClient\Generated\V2\Clients\User\InitPasswordReset\InitPasswordResetDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\InitPasswordReset\InitPasswordResetRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\ListApiTokens\ListApiTokens200Response;
use Mittwald\ApiClient\Generated\V2\Clients\User\ListApiTokens\ListApiTokensDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\ListApiTokens\ListApiTokensRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\ListFeedback\ListFeedback200Response;
use Mittwald\ApiClient\Generated\V2\Clients\User\ListFeedback\ListFeedbackDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\ListFeedback\ListFeedbackRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\ListSessions\ListSessions200Response;
use Mittwald\ApiClient\Generated\V2\Clients\User\ListSessions\ListSessionsDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\ListSessions\ListSessionsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\ListSshKeys\ListSshKeys200Response;
use Mittwald\ApiClient\Generated\V2\Clients\User\ListSshKeys\ListSshKeysDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\ListSshKeys\ListSshKeysRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\Logout\Logout400Response;
use Mittwald\ApiClient\Generated\V2\Clients\User\Logout\LogoutDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\Logout\LogoutRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\PasswordValidationGetPasswordPolicy\PasswordValidationGetPasswordPolicy200Response;
use Mittwald\ApiClient\Generated\V2\Clients\User\PasswordValidationGetPasswordPolicy\PasswordValidationGetPasswordPolicyDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\PasswordValidationGetPasswordPolicy\PasswordValidationGetPasswordPolicyRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\Register\Register201Response;
use Mittwald\ApiClient\Generated\V2\Clients\User\Register\Register400Response;
use Mittwald\ApiClient\Generated\V2\Clients\User\Register\RegisterDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\Register\RegisterRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\RemoveAvatar\RemoveAvatar400Response;
use Mittwald\ApiClient\Generated\V2\Clients\User\RemoveAvatar\RemoveAvatarDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\RemoveAvatar\RemoveAvatarRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\RemovePhoneNumber\RemovePhoneNumber400Response;
use Mittwald\ApiClient\Generated\V2\Clients\User\RemovePhoneNumber\RemovePhoneNumberDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\RemovePhoneNumber\RemovePhoneNumberRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\RequestAvatarUpload\RequestAvatarUpload200Response;
use Mittwald\ApiClient\Generated\V2\Clients\User\RequestAvatarUpload\RequestAvatarUpload400Response;
use Mittwald\ApiClient\Generated\V2\Clients\User\RequestAvatarUpload\RequestAvatarUploadDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\RequestAvatarUpload\RequestAvatarUploadRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\ResendVerificationEmail\ResendVerificationEmail400Response;
use Mittwald\ApiClient\Generated\V2\Clients\User\ResendVerificationEmail\ResendVerificationEmail403Response;
use Mittwald\ApiClient\Generated\V2\Clients\User\ResendVerificationEmail\ResendVerificationEmailDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\ResendVerificationEmail\ResendVerificationEmailRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\ResetRecoverycodes\ResetRecoverycodes200Response;
use Mittwald\ApiClient\Generated\V2\Clients\User\ResetRecoverycodes\ResetRecoverycodes400Response;
use Mittwald\ApiClient\Generated\V2\Clients\User\ResetRecoverycodes\ResetRecoverycodesDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\ResetRecoverycodes\ResetRecoverycodesRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\SupportCodeRequest\SupportCodeRequest200Response;
use Mittwald\ApiClient\Generated\V2\Clients\User\SupportCodeRequest\SupportCodeRequestDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\SupportCodeRequest\SupportCodeRequestRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\TerminateAllSessions\TerminateAllSessionsDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\TerminateAllSessions\TerminateAllSessionsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\TerminateSession\TerminateSession404Response;
use Mittwald\ApiClient\Generated\V2\Clients\User\TerminateSession\TerminateSessionDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\TerminateSession\TerminateSessionRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\UpdateAccount\UpdateAccount400Response;
use Mittwald\ApiClient\Generated\V2\Clients\User\UpdateAccount\UpdateAccountDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\UpdateAccount\UpdateAccountRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\UpdatePersonalInformation\UpdatePersonalInformation400Response;
use Mittwald\ApiClient\Generated\V2\Clients\User\UpdatePersonalInformation\UpdatePersonalInformationDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\UpdatePersonalInformation\UpdatePersonalInformationRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\UpdatePersonalizedSettings\UpdatePersonalizedSettings400Response;
use Mittwald\ApiClient\Generated\V2\Clients\User\UpdatePersonalizedSettings\UpdatePersonalizedSettingsDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\UpdatePersonalizedSettings\UpdatePersonalizedSettingsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\VerifyEmail\VerifyEmail400Response;
use Mittwald\ApiClient\Generated\V2\Clients\User\VerifyEmail\VerifyEmail404Response;
use Mittwald\ApiClient\Generated\V2\Clients\User\VerifyEmail\VerifyEmailDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\VerifyEmail\VerifyEmailRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\VerifyPhoneNumber\VerifyPhoneNumber400Response;
use Mittwald\ApiClient\Generated\V2\Clients\User\VerifyPhoneNumber\VerifyPhoneNumber404Response;
use Mittwald\ApiClient\Generated\V2\Clients\User\VerifyPhoneNumber\VerifyPhoneNumber409Response;
use Mittwald\ApiClient\Generated\V2\Clients\User\VerifyPhoneNumber\VerifyPhoneNumberDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\VerifyPhoneNumber\VerifyPhoneNumberRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\VerifyRegistration\VerifyRegistration400Response;
use Mittwald\ApiClient\Generated\V2\Clients\User\VerifyRegistration\VerifyRegistration404Response;
use Mittwald\ApiClient\Generated\V2\Clients\User\VerifyRegistration\VerifyRegistrationDefaultResponse;
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
class UserClient
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
     * @param DeprecatedUserChangeEmail\DeprecatedUserChangeEmailRequest $request An object representing the request for this operation
     * @return EmptyResponse|DeprecatedUserChangeEmail\DeprecatedUserChangeEmail400Response|DeprecatedUserChangeEmail\DeprecatedUserChangeEmailDefaultResponse Your email has been added, but needs to be verfied. Check your mails and
     * call /email/verify with the verification code sent with the mail.
     */
    public function deprecatedUserChangeEmail(DeprecatedUserChangeEmailRequest $request): EmptyResponse|DeprecatedUserChangeEmail400Response|DeprecatedUserChangeEmailDefaultResponse
    {
        $httpRequest = new Request(DeprecatedUserChangeEmailRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => new EmptyResponse($httpResponse),
            400 => DeprecatedUserChangeEmail400Response::fromResponse($httpResponse),
            default => DeprecatedUserChangeEmailDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Confirm password reset.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/deprecated-user-confirm-password-reset
     * @throws GuzzleException
     * @param DeprecatedUserConfirmPasswordReset\DeprecatedUserConfirmPasswordResetRequest $request An object representing the request for this operation
     * @return EmptyResponse|DeprecatedUserConfirmPasswordReset\DeprecatedUserConfirmPasswordReset400Response|DeprecatedUserConfirmPasswordReset\DeprecatedUserConfirmPasswordResetDefaultResponse Password reset was successful.
     */
    public function deprecatedUserConfirmPasswordReset(DeprecatedUserConfirmPasswordResetRequest $request): EmptyResponse|DeprecatedUserConfirmPasswordReset400Response|DeprecatedUserConfirmPasswordResetDefaultResponse
    {
        $httpRequest = new Request(DeprecatedUserConfirmPasswordResetRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => new EmptyResponse($httpResponse),
            400 => DeprecatedUserConfirmPasswordReset400Response::fromResponse($httpResponse),
            default => DeprecatedUserConfirmPasswordResetDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Create a new issue.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/deprecated-user-create-issue
     * @throws GuzzleException
     * @param DeprecatedUserCreateIssue\DeprecatedUserCreateIssueRequest $request An object representing the request for this operation
     * @return DeprecatedUserCreateIssue\DeprecatedUserCreateIssue201Response|DeprecatedUserCreateIssue\DeprecatedUserCreateIssue401Response|DeprecatedUserCreateIssue\DeprecatedUserCreateIssue404Response|DeprecatedUserCreateIssue\DeprecatedUserCreateIssueDefaultResponse Issue successfully submitted.
     */
    public function deprecatedUserCreateIssue(DeprecatedUserCreateIssueRequest $request): DeprecatedUserCreateIssue201Response|DeprecatedUserCreateIssue401Response|DeprecatedUserCreateIssue404Response|DeprecatedUserCreateIssueDefaultResponse
    {
        $httpRequest = new Request(DeprecatedUserCreateIssueRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            201 => DeprecatedUserCreateIssue201Response::fromResponse($httpResponse),
            401 => DeprecatedUserCreateIssue401Response::fromResponse($httpResponse),
            404 => DeprecatedUserCreateIssue404Response::fromResponse($httpResponse),
            default => DeprecatedUserCreateIssueDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Deletes an ApiToken.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/deprecated-user-delete-api-token
     * @throws GuzzleException
     * @param DeprecatedUserDeleteApiToken\DeprecatedUserDeleteApiTokenRequest $request An object representing the request for this operation
     * @return EmptyResponse|DeprecatedUserDeleteApiToken\DeprecatedUserDeleteApiToken400Response|DeprecatedUserDeleteApiToken\DeprecatedUserDeleteApiTokenDefaultResponse The `ApiToken` has been deleted.
     */
    public function deprecatedUserDeleteApiToken(DeprecatedUserDeleteApiTokenRequest $request): EmptyResponse|DeprecatedUserDeleteApiToken400Response|DeprecatedUserDeleteApiTokenDefaultResponse
    {
        $httpRequest = new Request(DeprecatedUserDeleteApiTokenRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => new EmptyResponse($httpResponse),
            400 => DeprecatedUserDeleteApiToken400Response::fromResponse($httpResponse),
            default => DeprecatedUserDeleteApiTokenDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Update an existing `ApiToken`.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/deprecated-user-edit-api-token
     * @throws GuzzleException
     * @param DeprecatedUserEditApiToken\DeprecatedUserEditApiTokenRequest $request An object representing the request for this operation
     * @return EmptyResponse|DeprecatedUserEditApiToken\DeprecatedUserEditApiToken400Response|DeprecatedUserEditApiToken\DeprecatedUserEditApiTokenDefaultResponse ApiToken was updated.
     */
    public function deprecatedUserEditApiToken(DeprecatedUserEditApiTokenRequest $request): EmptyResponse|DeprecatedUserEditApiToken400Response|DeprecatedUserEditApiTokenDefaultResponse
    {
        $httpRequest = new Request(DeprecatedUserEditApiTokenRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => new EmptyResponse($httpResponse),
            400 => DeprecatedUserEditApiToken400Response::fromResponse($httpResponse),
            default => DeprecatedUserEditApiTokenDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Remove a ssh-key.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/deprecated-user-delete-ssh-key
     * @throws GuzzleException
     * @param DeprecatedUserDeleteSshKey\DeprecatedUserDeleteSshKeyRequest $request An object representing the request for this operation
     * @return EmptyResponse|DeprecatedUserDeleteSshKey\DeprecatedUserDeleteSshKeyDefaultResponse The ssh-key was removed.
     */
    public function deprecatedUserDeleteSshKey(DeprecatedUserDeleteSshKeyRequest $request): EmptyResponse|DeprecatedUserDeleteSshKeyDefaultResponse
    {
        $httpRequest = new Request(DeprecatedUserDeleteSshKeyRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => new EmptyResponse($httpResponse),
            default => DeprecatedUserDeleteSshKeyDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Edit a stored ssh-key.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/deprecated-user-edit-ssh-key
     * @throws GuzzleException
     * @param DeprecatedUserEditSshKey\DeprecatedUserEditSshKeyRequest $request An object representing the request for this operation
     * @return EmptyResponse|DeprecatedUserEditSshKey\DeprecatedUserEditSshKey400Response|DeprecatedUserEditSshKey\DeprecatedUserEditSshKeyDefaultResponse The ssh-key has been edited.
     */
    public function deprecatedUserEditSshKey(DeprecatedUserEditSshKeyRequest $request): EmptyResponse|DeprecatedUserEditSshKey400Response|DeprecatedUserEditSshKeyDefaultResponse
    {
        $httpRequest = new Request(DeprecatedUserEditSshKeyRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => new EmptyResponse($httpResponse),
            400 => DeprecatedUserEditSshKey400Response::fromResponse($httpResponse),
            default => DeprecatedUserEditSshKeyDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Disable Multi Factor Authentication.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/deprecated-user-disable-mfa
     * @throws GuzzleException
     * @param DeprecatedUserDisableMfa\DeprecatedUserDisableMfaRequest $request An object representing the request for this operation
     * @return EmptyResponse|DeprecatedUserDisableMfa\DeprecatedUserDisableMfa400Response|DeprecatedUserDisableMfa\DeprecatedUserDisableMfaDefaultResponse Multi Factor Authentication was disabled.
     */
    public function deprecatedUserDisableMfa(DeprecatedUserDisableMfaRequest $request): EmptyResponse|DeprecatedUserDisableMfa400Response|DeprecatedUserDisableMfaDefaultResponse
    {
        $httpRequest = new Request(DeprecatedUserDisableMfaRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => new EmptyResponse($httpResponse),
            400 => DeprecatedUserDisableMfa400Response::fromResponse($httpResponse),
            default => DeprecatedUserDisableMfaDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Initialize password reset process.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/deprecated-user-init-password-reset
     * @throws GuzzleException
     * @param DeprecatedUserInitPasswordReset\DeprecatedUserInitPasswordResetRequest $request An object representing the request for this operation
     * @return EmptyResponse|DeprecatedUserInitPasswordReset\DeprecatedUserInitPasswordReset400Response|DeprecatedUserInitPasswordReset\DeprecatedUserInitPasswordResetDefaultResponse The password reset process has been initialized and an email with confirmation code has been sent.
     */
    public function deprecatedUserInitPasswordReset(DeprecatedUserInitPasswordResetRequest $request): EmptyResponse|DeprecatedUserInitPasswordReset400Response|DeprecatedUserInitPasswordResetDefaultResponse
    {
        $httpRequest = new Request(DeprecatedUserInitPasswordResetRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => new EmptyResponse($httpResponse),
            400 => DeprecatedUserInitPasswordReset400Response::fromResponse($httpResponse),
            default => DeprecatedUserInitPasswordResetDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Terminate session and invalidate access token.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/deprecated-user-logout
     * @throws GuzzleException
     * @param DeprecatedUserLogout\DeprecatedUserLogoutRequest $request An object representing the request for this operation
     * @return EmptyResponse|DeprecatedUserLogout\DeprecatedUserLogout400Response|DeprecatedUserLogout\DeprecatedUserLogoutDefaultResponse You've been logged out. The access token has been removed and invalidated.
     */
    public function deprecatedUserLogout(DeprecatedUserLogoutRequest $request): EmptyResponse|DeprecatedUserLogout400Response|DeprecatedUserLogoutDefaultResponse
    {
        $httpRequest = new Request(DeprecatedUserLogoutRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => new EmptyResponse($httpResponse),
            400 => DeprecatedUserLogout400Response::fromResponse($httpResponse),
            default => DeprecatedUserLogoutDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Resend the Email-Address verification email.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/deprecated-user-resend-verification-email
     * @throws GuzzleException
     * @param DeprecatedUserResendVerificationEmail\DeprecatedUserResendVerificationEmailRequest $request An object representing the request for this operation
     * @return EmptyResponse|DeprecatedUserResendVerificationEmail\DeprecatedUserResendVerificationEmail400Response|DeprecatedUserResendVerificationEmail\DeprecatedUserResendVerificationEmail403Response|DeprecatedUserResendVerificationEmail\DeprecatedUserResendVerificationEmailDefaultResponse New Email-Address verification mail was sent.
     */
    public function deprecatedUserResendVerificationEmail(DeprecatedUserResendVerificationEmailRequest $request): EmptyResponse|DeprecatedUserResendVerificationEmail400Response|DeprecatedUserResendVerificationEmail403Response|DeprecatedUserResendVerificationEmailDefaultResponse
    {
        $httpRequest = new Request(DeprecatedUserResendVerificationEmailRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new EmptyResponse($httpResponse),
            400 => DeprecatedUserResendVerificationEmail400Response::fromResponse($httpResponse),
            403 => DeprecatedUserResendVerificationEmail403Response::fromResponse($httpResponse),
            default => DeprecatedUserResendVerificationEmailDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Remove Avatar
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/deprecated-user-service-avatar-remove
     * @throws GuzzleException
     * @param DeprecatedUserServiceAvatarRemove\DeprecatedUserServiceAvatarRemoveRequest $request An object representing the request for this operation
     * @return EmptyResponse|DeprecatedUserServiceAvatarRemove\DeprecatedUserServiceAvatarRemove400Response|DeprecatedUserServiceAvatarRemove\DeprecatedUserServiceAvatarRemoveDefaultResponse Avatar removal was successful
     */
    public function deprecatedUserServiceAvatarRemove(DeprecatedUserServiceAvatarRemoveRequest $request): EmptyResponse|DeprecatedUserServiceAvatarRemove400Response|DeprecatedUserServiceAvatarRemoveDefaultResponse
    {
        $httpRequest = new Request(DeprecatedUserServiceAvatarRemoveRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new EmptyResponse($httpResponse),
            400 => DeprecatedUserServiceAvatarRemove400Response::fromResponse($httpResponse),
            default => DeprecatedUserServiceAvatarRemoveDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Request a new avatar upload
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/deprecated-user-service-avatar-request-upload
     * @throws GuzzleException
     * @param DeprecatedUserServiceAvatarRequestUpload\DeprecatedUserServiceAvatarRequestUploadRequest $request An object representing the request for this operation
     * @return DeprecatedUserServiceAvatarRequestUpload\DeprecatedUserServiceAvatarRequestUpload200Response|DeprecatedUserServiceAvatarRequestUpload\DeprecatedUserServiceAvatarRequestUpload400Response|DeprecatedUserServiceAvatarRequestUpload\DeprecatedUserServiceAvatarRequestUploadDefaultResponse Avatar upload request was successful. Use the `refId` to upload your avatar to the /v2/files/:refId
     */
    public function deprecatedUserServiceAvatarRequestUpload(DeprecatedUserServiceAvatarRequestUploadRequest $request): DeprecatedUserServiceAvatarRequestUpload200Response|DeprecatedUserServiceAvatarRequestUpload400Response|DeprecatedUserServiceAvatarRequestUploadDefaultResponse
    {
        $httpRequest = new Request(DeprecatedUserServiceAvatarRequestUploadRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => DeprecatedUserServiceAvatarRequestUpload200Response::fromResponse($httpResponse),
            400 => DeprecatedUserServiceAvatarRequestUpload400Response::fromResponse($httpResponse),
            default => DeprecatedUserServiceAvatarRequestUploadDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Submit user feedback
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/deprecated-user-service-feedback-create
     * @throws GuzzleException
     * @param DeprecatedUserServiceFeedbackCreate\DeprecatedUserServiceFeedbackCreateRequest $request An object representing the request for this operation
     * @return DeprecatedUserServiceFeedbackCreate\DeprecatedUserServiceFeedbackCreate201Response|DeprecatedUserServiceFeedbackCreate\DeprecatedUserServiceFeedbackCreate401Response|DeprecatedUserServiceFeedbackCreate\DeprecatedUserServiceFeedbackCreate404Response|DeprecatedUserServiceFeedbackCreate\DeprecatedUserServiceFeedbackCreateDefaultResponse
     */
    public function deprecatedUserServiceFeedbackCreate(DeprecatedUserServiceFeedbackCreateRequest $request): DeprecatedUserServiceFeedbackCreate201Response|DeprecatedUserServiceFeedbackCreate401Response|DeprecatedUserServiceFeedbackCreate404Response|DeprecatedUserServiceFeedbackCreateDefaultResponse
    {
        $httpRequest = new Request(DeprecatedUserServiceFeedbackCreateRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            201 => DeprecatedUserServiceFeedbackCreate201Response::fromResponse($httpResponse),
            401 => DeprecatedUserServiceFeedbackCreate401Response::fromResponse($httpResponse),
            404 => DeprecatedUserServiceFeedbackCreate404Response::fromResponse($httpResponse),
            default => DeprecatedUserServiceFeedbackCreateDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Returns your submitted feedback
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/deprecated-user-service-feedback-list
     * @throws GuzzleException
     * @param DeprecatedUserServiceFeedbackList\DeprecatedUserServiceFeedbackListRequest $request An object representing the request for this operation
     * @return DeprecatedUserServiceFeedbackList\DeprecatedUserServiceFeedbackList200Response|DeprecatedUserServiceFeedbackList\DeprecatedUserServiceFeedbackListDefaultResponse A list of feedback submitted by the user
     */
    public function deprecatedUserServiceFeedbackList(DeprecatedUserServiceFeedbackListRequest $request): DeprecatedUserServiceFeedbackList200Response|DeprecatedUserServiceFeedbackListDefaultResponse
    {
        $httpRequest = new Request(DeprecatedUserServiceFeedbackListRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => DeprecatedUserServiceFeedbackList200Response::fromResponse($httpResponse),
            default => DeprecatedUserServiceFeedbackListDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * create a new issue
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/deprecated-user-service-issue-new
     * @throws GuzzleException
     * @param DeprecatedUserServiceIssueNew\DeprecatedUserServiceIssueNewRequest $request An object representing the request for this operation
     * @return EmptyResponse|DeprecatedUserServiceIssueNew\DeprecatedUserServiceIssueNewDefaultResponse Issue created
     */
    public function deprecatedUserServiceIssueNew(DeprecatedUserServiceIssueNewRequest $request): EmptyResponse|DeprecatedUserServiceIssueNewDefaultResponse
    {
        $httpRequest = new Request(DeprecatedUserServiceIssueNewRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            201 => new EmptyResponse($httpResponse),
            default => DeprecatedUserServiceIssueNewDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Change your personal information
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/deprecated-user-service-personal-information-update
     * @throws GuzzleException
     * @param DeprecatedUserServicePersonalInformationUpdate\DeprecatedUserServicePersonalInformationUpdateRequest $request An object representing the request for this operation
     * @return EmptyResponse|DeprecatedUserServicePersonalInformationUpdate\DeprecatedUserServicePersonalInformationUpdate400Response|DeprecatedUserServicePersonalInformationUpdate\DeprecatedUserServicePersonalInformationUpdateDefaultResponse Your personal information has been changed
     */
    public function deprecatedUserServicePersonalInformationUpdate(DeprecatedUserServicePersonalInformationUpdateRequest $request): EmptyResponse|DeprecatedUserServicePersonalInformationUpdate400Response|DeprecatedUserServicePersonalInformationUpdateDefaultResponse
    {
        $httpRequest = new Request(DeprecatedUserServicePersonalInformationUpdateRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new EmptyResponse($httpResponse),
            400 => DeprecatedUserServicePersonalInformationUpdate400Response::fromResponse($httpResponse),
            default => DeprecatedUserServicePersonalInformationUpdateDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Get profile information for the specified user if the user is related to the executing user
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/deprecated-user-service-user-get
     * @throws GuzzleException
     * @param DeprecatedUserServiceUserGet\DeprecatedUserServiceUserGetRequest $request An object representing the request for this operation
     * @return DeprecatedUserServiceUserGet\DeprecatedUserServiceUserGet200Response|DeprecatedUserServiceUserGet\DeprecatedUserServiceUserGet403Response|DeprecatedUserServiceUserGet\DeprecatedUserServiceUserGet404Response|DeprecatedUserServiceUserGet\DeprecatedUserServiceUserGet412Response|DeprecatedUserServiceUserGet\DeprecatedUserServiceUserGetDefaultResponse The Profile
     */
    public function deprecatedUserServiceUserGet(DeprecatedUserServiceUserGetRequest $request): DeprecatedUserServiceUserGet200Response|DeprecatedUserServiceUserGet403Response|DeprecatedUserServiceUserGet404Response|DeprecatedUserServiceUserGet412Response|DeprecatedUserServiceUserGetDefaultResponse
    {
        $httpRequest = new Request(DeprecatedUserServiceUserGetRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => DeprecatedUserServiceUserGet200Response::fromResponse($httpResponse),
            403 => DeprecatedUserServiceUserGet403Response::fromResponse($httpResponse),
            404 => DeprecatedUserServiceUserGet404Response::fromResponse($httpResponse),
            412 => DeprecatedUserServiceUserGet412Response::fromResponse($httpResponse),
            default => DeprecatedUserServiceUserGetDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Get personalized settings for the user executing the request
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/deprecated-user-service-personalized-settings-get
     * @throws GuzzleException
     * @param DeprecatedUserServicePersonalizedSettingsGet\DeprecatedUserServicePersonalizedSettingsGetRequest $request An object representing the request for this operation
     * @return DeprecatedUserServicePersonalizedSettingsGet\DeprecatedUserServicePersonalizedSettingsGet200Response|DeprecatedUserServicePersonalizedSettingsGet\DeprecatedUserServicePersonalizedSettingsGetDefaultResponse The settingsString
     */
    public function deprecatedUserServicePersonalizedSettingsGet(DeprecatedUserServicePersonalizedSettingsGetRequest $request): DeprecatedUserServicePersonalizedSettingsGet200Response|DeprecatedUserServicePersonalizedSettingsGetDefaultResponse
    {
        $httpRequest = new Request(DeprecatedUserServicePersonalizedSettingsGetRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => DeprecatedUserServicePersonalizedSettingsGet200Response::fromResponse($httpResponse),
            default => DeprecatedUserServicePersonalizedSettingsGetDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * update personalized settings
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/deprecated-user-service-personalized-settings-update
     * @throws GuzzleException
     * @param DeprecatedUserServicePersonalizedSettingsUpdate\DeprecatedUserServicePersonalizedSettingsUpdateRequest $request An object representing the request for this operation
     * @return EmptyResponse|DeprecatedUserServicePersonalizedSettingsUpdate\DeprecatedUserServicePersonalizedSettingsUpdate400Response|DeprecatedUserServicePersonalizedSettingsUpdate\DeprecatedUserServicePersonalizedSettingsUpdateDefaultResponse PersonalSettings have been updated
     */
    public function deprecatedUserServicePersonalizedSettingsUpdate(DeprecatedUserServicePersonalizedSettingsUpdateRequest $request): EmptyResponse|DeprecatedUserServicePersonalizedSettingsUpdate400Response|DeprecatedUserServicePersonalizedSettingsUpdateDefaultResponse
    {
        $httpRequest = new Request(DeprecatedUserServicePersonalizedSettingsUpdateRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new EmptyResponse($httpResponse),
            400 => DeprecatedUserServicePersonalizedSettingsUpdate400Response::fromResponse($httpResponse),
            default => DeprecatedUserServicePersonalizedSettingsUpdateDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Add phone number and init verification process
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/deprecated-user-service-phone-number-add
     * @throws GuzzleException
     * @param DeprecatedUserServicePhoneNumberAdd\DeprecatedUserServicePhoneNumberAddRequest $request An object representing the request for this operation
     * @return EmptyResponse|DeprecatedUserServicePhoneNumberAdd\DeprecatedUserServicePhoneNumberAdd400Response|DeprecatedUserServicePhoneNumberAdd\DeprecatedUserServicePhoneNumberAdd409Response|DeprecatedUserServicePhoneNumberAdd\DeprecatedUserServicePhoneNumberAddDefaultResponse PhoneNumber was added successfully. Now, it can be verified under /v2/user/{userId}/phone/verify
     */
    public function deprecatedUserServicePhoneNumberAdd(DeprecatedUserServicePhoneNumberAddRequest $request): EmptyResponse|DeprecatedUserServicePhoneNumberAdd400Response|DeprecatedUserServicePhoneNumberAdd409Response|DeprecatedUserServicePhoneNumberAddDefaultResponse
    {
        $httpRequest = new Request(DeprecatedUserServicePhoneNumberAddRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new EmptyResponse($httpResponse),
            400 => DeprecatedUserServicePhoneNumberAdd400Response::fromResponse($httpResponse),
            409 => DeprecatedUserServicePhoneNumberAdd409Response::fromResponse($httpResponse),
            default => DeprecatedUserServicePhoneNumberAddDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * remove your PhoneNumber
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/deprecated-user-service-phone-number-remove
     * @throws GuzzleException
     * @param DeprecatedUserServicePhoneNumberRemove\DeprecatedUserServicePhoneNumberRemoveRequest $request An object representing the request for this operation
     * @return EmptyResponse|DeprecatedUserServicePhoneNumberRemove\DeprecatedUserServicePhoneNumberRemove400Response|DeprecatedUserServicePhoneNumberRemove\DeprecatedUserServicePhoneNumberRemoveDefaultResponse PhoneNumber removal was successful
     */
    public function deprecatedUserServicePhoneNumberRemove(DeprecatedUserServicePhoneNumberRemoveRequest $request): EmptyResponse|DeprecatedUserServicePhoneNumberRemove400Response|DeprecatedUserServicePhoneNumberRemoveDefaultResponse
    {
        $httpRequest = new Request(DeprecatedUserServicePhoneNumberRemoveRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new EmptyResponse($httpResponse),
            400 => DeprecatedUserServicePhoneNumberRemove400Response::fromResponse($httpResponse),
            default => DeprecatedUserServicePhoneNumberRemoveDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Verify phone number
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/deprecated-user-service-phone-number-verify
     * @throws GuzzleException
     * @param DeprecatedUserServicePhoneNumberVerify\DeprecatedUserServicePhoneNumberVerifyRequest $request An object representing the request for this operation
     * @return EmptyResponse|DeprecatedUserServicePhoneNumberVerify\DeprecatedUserServicePhoneNumberVerify400Response|DeprecatedUserServicePhoneNumberVerify\DeprecatedUserServicePhoneNumberVerify404Response|DeprecatedUserServicePhoneNumberVerify\DeprecatedUserServicePhoneNumberVerify409Response|DeprecatedUserServicePhoneNumberVerify\DeprecatedUserServicePhoneNumberVerifyDefaultResponse The PhoneNumber has been verified
     */
    public function deprecatedUserServicePhoneNumberVerify(DeprecatedUserServicePhoneNumberVerifyRequest $request): EmptyResponse|DeprecatedUserServicePhoneNumberVerify400Response|DeprecatedUserServicePhoneNumberVerify404Response|DeprecatedUserServicePhoneNumberVerify409Response|DeprecatedUserServicePhoneNumberVerifyDefaultResponse
    {
        $httpRequest = new Request(DeprecatedUserServicePhoneNumberVerifyRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new EmptyResponse($httpResponse),
            400 => DeprecatedUserServicePhoneNumberVerify400Response::fromResponse($httpResponse),
            404 => DeprecatedUserServicePhoneNumberVerify404Response::fromResponse($httpResponse),
            409 => DeprecatedUserServicePhoneNumberVerify409Response::fromResponse($httpResponse),
            default => DeprecatedUserServicePhoneNumberVerifyDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Get profile information for the executing user
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/deprecated-user-service-user-get-own
     * @throws GuzzleException
     * @param DeprecatedUserServiceUserGetOwn\DeprecatedUserServiceUserGetOwnRequest $request An object representing the request for this operation
     * @return DeprecatedUserServiceUserGetOwn\DeprecatedUserServiceUserGetOwn200Response|DeprecatedUserServiceUserGetOwn\DeprecatedUserServiceUserGetOwnDefaultResponse The Profile
     */
    public function deprecatedUserServiceUserGetOwn(DeprecatedUserServiceUserGetOwnRequest $request): DeprecatedUserServiceUserGetOwn200Response|DeprecatedUserServiceUserGetOwnDefaultResponse
    {
        $httpRequest = new Request(DeprecatedUserServiceUserGetOwnRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => DeprecatedUserServiceUserGetOwn200Response::fromResponse($httpResponse),
            default => DeprecatedUserServiceUserGetOwnDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Terminate all sessions, except the current session.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/deprecated-user-terminate-all-sessions
     * @throws GuzzleException
     * @param DeprecatedUserTerminateAllSessions\DeprecatedUserTerminateAllSessionsRequest $request An object representing the request for this operation
     * @return EmptyResponse|DeprecatedUserTerminateAllSessions\DeprecatedUserTerminateAllSessionsDefaultResponse All sessions terminated.
     */
    public function deprecatedUserTerminateAllSessions(DeprecatedUserTerminateAllSessionsRequest $request): EmptyResponse|DeprecatedUserTerminateAllSessionsDefaultResponse
    {
        $httpRequest = new Request(DeprecatedUserTerminateAllSessionsRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => new EmptyResponse($httpResponse),
            default => DeprecatedUserTerminateAllSessionsDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Terminate a specific Session.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/deprecated-user-terminate-session
     * @throws GuzzleException
     * @param DeprecatedUserTerminateSession\DeprecatedUserTerminateSessionRequest $request An object representing the request for this operation
     * @return EmptyResponse|DeprecatedUserTerminateSession\DeprecatedUserTerminateSession404Response|DeprecatedUserTerminateSession\DeprecatedUserTerminateSessionDefaultResponse Session terminated.
     */
    public function deprecatedUserTerminateSession(DeprecatedUserTerminateSessionRequest $request): EmptyResponse|DeprecatedUserTerminateSession404Response|DeprecatedUserTerminateSessionDefaultResponse
    {
        $httpRequest = new Request(DeprecatedUserTerminateSessionRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => new EmptyResponse($httpResponse),
            404 => DeprecatedUserTerminateSession404Response::fromResponse($httpResponse),
            default => DeprecatedUserTerminateSessionDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Update your account information.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/deprecated-user-update-account
     * @throws GuzzleException
     * @param DeprecatedUserUpdateAccount\DeprecatedUserUpdateAccountRequest $request An object representing the request for this operation
     * @return EmptyResponse|DeprecatedUserUpdateAccount\DeprecatedUserUpdateAccount400Response|DeprecatedUserUpdateAccount\DeprecatedUserUpdateAccountDefaultResponse Account has been updated.
     */
    public function deprecatedUserUpdateAccount(DeprecatedUserUpdateAccountRequest $request): EmptyResponse|DeprecatedUserUpdateAccount400Response|DeprecatedUserUpdateAccountDefaultResponse
    {
        $httpRequest = new Request(DeprecatedUserUpdateAccountRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => new EmptyResponse($httpResponse),
            400 => DeprecatedUserUpdateAccount400Response::fromResponse($httpResponse),
            default => DeprecatedUserUpdateAccountDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Verify an added Email-Address.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/deprecated-user-verify-email
     * @throws GuzzleException
     * @param DeprecatedUserVerifyEmail\DeprecatedUserVerifyEmailRequest $request An object representing the request for this operation
     * @return EmptyResponse|DeprecatedUserVerifyEmail\DeprecatedUserVerifyEmail400Response|DeprecatedUserVerifyEmail\DeprecatedUserVerifyEmail404Response|DeprecatedUserVerifyEmail\DeprecatedUserVerifyEmailDefaultResponse Email has been verified.
     */
    public function deprecatedUserVerifyEmail(DeprecatedUserVerifyEmailRequest $request): EmptyResponse|DeprecatedUserVerifyEmail400Response|DeprecatedUserVerifyEmail404Response|DeprecatedUserVerifyEmailDefaultResponse
    {
        $httpRequest = new Request(DeprecatedUserVerifyEmailRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => new EmptyResponse($httpResponse),
            400 => DeprecatedUserVerifyEmail400Response::fromResponse($httpResponse),
            404 => DeprecatedUserVerifyEmail404Response::fromResponse($httpResponse),
            default => DeprecatedUserVerifyEmailDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Get a password policy.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/password-validation-get-password-policy
     * @throws GuzzleException
     * @param PasswordValidationGetPasswordPolicy\PasswordValidationGetPasswordPolicyRequest $request An object representing the request for this operation
     * @return PasswordValidationGetPasswordPolicy\PasswordValidationGetPasswordPolicy200Response|PasswordValidationGetPasswordPolicy\PasswordValidationGetPasswordPolicyDefaultResponse The requested password policy
     */
    public function passwordValidationGetPasswordPolicy(PasswordValidationGetPasswordPolicyRequest $request): PasswordValidationGetPasswordPolicy200Response|PasswordValidationGetPasswordPolicyDefaultResponse
    {
        $httpRequest = new Request(PasswordValidationGetPasswordPolicyRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => PasswordValidationGetPasswordPolicy200Response::fromResponse($httpResponse),
            default => PasswordValidationGetPasswordPolicyDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Add phone number and start verification process.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-add-phone-number
     * @throws GuzzleException
     * @param AddPhoneNumber\AddPhoneNumberRequest $request An object representing the request for this operation
     * @return EmptyResponse|AddPhoneNumber\AddPhoneNumber400Response|AddPhoneNumber\AddPhoneNumber403Response|AddPhoneNumber\AddPhoneNumber409Response|AddPhoneNumber\AddPhoneNumberDefaultResponse Phone number was added successfully. Now, it can be verified via /v2/users/:userId/phone/verify.
     */
    public function addPhoneNumber(AddPhoneNumberRequest $request): EmptyResponse|AddPhoneNumber400Response|AddPhoneNumber403Response|AddPhoneNumber409Response|AddPhoneNumberDefaultResponse
    {
        $httpRequest = new Request(AddPhoneNumberRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new EmptyResponse($httpResponse),
            400 => AddPhoneNumber400Response::fromResponse($httpResponse),
            403 => AddPhoneNumber403Response::fromResponse($httpResponse),
            409 => AddPhoneNumber409Response::fromResponse($httpResponse),
            default => AddPhoneNumberDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Remove phone number.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-remove-phone-number
     * @throws GuzzleException
     * @param RemovePhoneNumber\RemovePhoneNumberRequest $request An object representing the request for this operation
     * @return EmptyResponse|RemovePhoneNumber\RemovePhoneNumber400Response|RemovePhoneNumber\RemovePhoneNumberDefaultResponse PhoneNumber removal was successful
     */
    public function removePhoneNumber(RemovePhoneNumberRequest $request): EmptyResponse|RemovePhoneNumber400Response|RemovePhoneNumberDefaultResponse
    {
        $httpRequest = new Request(RemovePhoneNumberRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new EmptyResponse($httpResponse),
            400 => RemovePhoneNumber400Response::fromResponse($httpResponse),
            default => RemovePhoneNumberDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Validate your second factor.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-authenticate-mfa
     * @throws GuzzleException
     * @param AuthenticateMfa\AuthenticateMfaRequest $request An object representing the request for this operation
     * @return AuthenticateMfa\AuthenticateMfa200Response|AuthenticateMfa\AuthenticateMfa400Response|UntypedResponse|AuthenticateMfa\AuthenticateMfaDefaultResponse Your authentication request was successful and you've got an access token.
     */
    public function authenticateMfa(AuthenticateMfaRequest $request): UntypedResponse|AuthenticateMfa200Response|AuthenticateMfa400Response|AuthenticateMfaDefaultResponse
    {
        $httpRequest = new Request(AuthenticateMfaRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => AuthenticateMfa200Response::fromResponse($httpResponse),
            400 => AuthenticateMfa400Response::fromResponse($httpResponse),
            408 => UntypedResponse::fromResponse($httpResponse),
            default => AuthenticateMfaDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Authenticate yourself to get an access token.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-authenticate
     * @throws GuzzleException
     * @param Authenticate\AuthenticateRequest $request An object representing the request for this operation
     * @return Authenticate\Authenticate200Response|Authenticate\Authenticate202Response|Authenticate\Authenticate400Response|Authenticate\Authenticate401Response|Authenticate\AuthenticateDefaultResponse Multi factor authentication is activated for this user. After calling this, you need to call '/authentication/mfa' with a valid multi factor code.
     */
    public function authenticate(AuthenticateRequest $request): Authenticate200Response|Authenticate202Response|Authenticate400Response|Authenticate401Response|AuthenticateDefaultResponse
    {
        $httpRequest = new Request(AuthenticateRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => Authenticate200Response::fromResponse($httpResponse),
            202 => Authenticate202Response::fromResponse($httpResponse),
            400 => Authenticate400Response::fromResponse($httpResponse),
            401 => Authenticate401Response::fromResponse($httpResponse),
            default => AuthenticateDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Change your Email-Address.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-change-email
     * @throws GuzzleException
     * @param ChangeEmail\ChangeEmailRequest $request An object representing the request for this operation
     * @return EmptyResponse|ChangeEmail\ChangeEmail400Response|ChangeEmail\ChangeEmailDefaultResponse Your email has been added, but needs to be verfied. Check your mails and
     * call /email/verify with the verification code sent with the mail.
     */
    public function changeEmail(ChangeEmailRequest $request): EmptyResponse|ChangeEmail400Response|ChangeEmailDefaultResponse
    {
        $httpRequest = new Request(ChangeEmailRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new EmptyResponse($httpResponse),
            400 => ChangeEmail400Response::fromResponse($httpResponse),
            default => ChangeEmailDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Get your verified Email-Address.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-get-own-email
     * @throws GuzzleException
     * @param GetOwnEmail\GetOwnEmailRequest $request An object representing the request for this operation
     * @return GetOwnEmail\GetOwnEmail200Response|GetOwnEmail\GetOwnEmail404Response|GetOwnEmail\GetOwnEmailDefaultResponse Your Email-Address.
     */
    public function getOwnEmail(GetOwnEmailRequest $request): GetOwnEmail200Response|GetOwnEmail404Response|GetOwnEmailDefaultResponse
    {
        $httpRequest = new Request(GetOwnEmailRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => GetOwnEmail200Response::fromResponse($httpResponse),
            404 => GetOwnEmail404Response::fromResponse($httpResponse),
            default => GetOwnEmailDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Change your password.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-change-password
     * @throws GuzzleException
     * @param ChangePassword\ChangePasswordRequest $request An object representing the request for this operation
     * @return ChangePassword\ChangePassword200Response|UntypedResponse|ChangePassword\ChangePassword400Response|ChangePassword\ChangePasswordDefaultResponse An additional second factor code is necessary to process the request.
     */
    public function changePassword(ChangePasswordRequest $request): UntypedResponse|ChangePassword200Response|ChangePassword400Response|ChangePasswordDefaultResponse
    {
        $httpRequest = new Request(ChangePasswordRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => ChangePassword200Response::fromResponse($httpResponse),
            202 => UntypedResponse::fromResponse($httpResponse),
            400 => ChangePassword400Response::fromResponse($httpResponse),
            default => ChangePasswordDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Check token for validity.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-check-token
     * @throws GuzzleException
     * @param CheckToken\CheckTokenRequest $request An object representing the request for this operation
     * @return CheckToken\CheckToken200Response|CheckToken\CheckTokenDefaultResponse Your token is valid.
     */
    public function checkToken(CheckTokenRequest $request): CheckToken200Response|CheckTokenDefaultResponse
    {
        $httpRequest = new Request(CheckTokenRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => CheckToken200Response::fromResponse($httpResponse),
            default => CheckTokenDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Confirm Multi Factor Authentication.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-confirm-mfa
     * @throws GuzzleException
     * @param ConfirmMfa\ConfirmMfaRequest $request An object representing the request for this operation
     * @return ConfirmMfa\ConfirmMfa200Response|ConfirmMfa\ConfirmMfa400Response|ConfirmMfa\ConfirmMfaDefaultResponse Mfa is now activated and recovery codes are in the response body.
     */
    public function confirmMfa(ConfirmMfaRequest $request): ConfirmMfa200Response|ConfirmMfa400Response|ConfirmMfaDefaultResponse
    {
        $httpRequest = new Request(ConfirmMfaRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => ConfirmMfa200Response::fromResponse($httpResponse),
            400 => ConfirmMfa400Response::fromResponse($httpResponse),
            default => ConfirmMfaDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Disable Multi Factor Authentication.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-disable-mfa
     * @throws GuzzleException
     * @param DisableMfa\DisableMfaRequest $request An object representing the request for this operation
     * @return EmptyResponse|DisableMfa\DisableMfa400Response|DisableMfa\DisableMfaDefaultResponse Multi Factor Authentication was disabled.
     */
    public function disableMfa(DisableMfaRequest $request): EmptyResponse|DisableMfa400Response|DisableMfaDefaultResponse
    {
        $httpRequest = new Request(DisableMfaRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new EmptyResponse($httpResponse),
            400 => DisableMfa400Response::fromResponse($httpResponse),
            default => DisableMfaDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Get your current multi factor auth status.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-get-mfa-status
     * @throws GuzzleException
     * @param GetMfaStatus\GetMfaStatusRequest $request An object representing the request for this operation
     * @return GetMfaStatus\GetMfaStatus200Response|GetMfaStatus\GetMfaStatusDefaultResponse Multi factor auth status
     */
    public function getMfaStatus(GetMfaStatusRequest $request): GetMfaStatus200Response|GetMfaStatusDefaultResponse
    {
        $httpRequest = new Request(GetMfaStatusRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => GetMfaStatus200Response::fromResponse($httpResponse),
            default => GetMfaStatusDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Reset RecoveryCodes for MFA.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-reset-recoverycodes
     * @throws GuzzleException
     * @param ResetRecoverycodes\ResetRecoverycodesRequest $request An object representing the request for this operation
     * @return ResetRecoverycodes\ResetRecoverycodes200Response|ResetRecoverycodes\ResetRecoverycodes400Response|ResetRecoverycodes\ResetRecoverycodesDefaultResponse Recovery-Codes are reset now. The new Recovery-Codes are in the response body.
     */
    public function resetRecoverycodes(ResetRecoverycodesRequest $request): ResetRecoverycodes200Response|ResetRecoverycodes400Response|ResetRecoverycodesDefaultResponse
    {
        $httpRequest = new Request(ResetRecoverycodesRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => ResetRecoverycodes200Response::fromResponse($httpResponse),
            400 => ResetRecoverycodes400Response::fromResponse($httpResponse),
            default => ResetRecoverycodesDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Confirm password reset.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-confirm-password-reset
     * @throws GuzzleException
     * @param ConfirmPasswordReset\ConfirmPasswordResetRequest $request An object representing the request for this operation
     * @return EmptyResponse|ConfirmPasswordReset\ConfirmPasswordReset400Response|ConfirmPasswordReset\ConfirmPasswordResetDefaultResponse Password reset was successful.
     */
    public function confirmPasswordReset(ConfirmPasswordResetRequest $request): EmptyResponse|ConfirmPasswordReset400Response|ConfirmPasswordResetDefaultResponse
    {
        $httpRequest = new Request(ConfirmPasswordResetRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new EmptyResponse($httpResponse),
            400 => ConfirmPasswordReset400Response::fromResponse($httpResponse),
            default => ConfirmPasswordResetDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Store a new ApiToken.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-create-api-token
     * @throws GuzzleException
     * @param CreateApiToken\CreateApiTokenRequest $request An object representing the request for this operation
     * @return CreateApiToken\CreateApiToken201Response|CreateApiToken\CreateApiToken400Response|CreateApiToken\CreateApiTokenDefaultResponse ApiToken was added.
     */
    public function createApiToken(CreateApiTokenRequest $request): CreateApiToken201Response|CreateApiToken400Response|CreateApiTokenDefaultResponse
    {
        $httpRequest = new Request(CreateApiTokenRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            201 => CreateApiToken201Response::fromResponse($httpResponse),
            400 => CreateApiToken400Response::fromResponse($httpResponse),
            default => CreateApiTokenDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * List all of your ApiTokens.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-list-api-tokens
     * @throws GuzzleException
     * @param ListApiTokens\ListApiTokensRequest $request An object representing the request for this operation
     * @return ListApiTokens\ListApiTokens200Response|ListApiTokens\ListApiTokensDefaultResponse A list of ApiTokens.
     */
    public function listApiTokens(ListApiTokensRequest $request): ListApiTokens200Response|ListApiTokensDefaultResponse
    {
        $httpRequest = new Request(ListApiTokensRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => ListApiTokens200Response::fromResponse($httpResponse),
            default => ListApiTokensDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Submit your user feedback.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-create-feedback
     * @throws GuzzleException
     * @param CreateFeedback\CreateFeedbackRequest $request An object representing the request for this operation
     * @return CreateFeedback\CreateFeedback201Response|CreateFeedback\CreateFeedback401Response|CreateFeedback\CreateFeedback404Response|CreateFeedback\CreateFeedbackDefaultResponse Feedback successfully submitted.
     */
    public function createFeedback(CreateFeedbackRequest $request): CreateFeedback201Response|CreateFeedback401Response|CreateFeedback404Response|CreateFeedbackDefaultResponse
    {
        $httpRequest = new Request(CreateFeedbackRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            201 => CreateFeedback201Response::fromResponse($httpResponse),
            401 => CreateFeedback401Response::fromResponse($httpResponse),
            404 => CreateFeedback404Response::fromResponse($httpResponse),
            default => CreateFeedbackDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Store a new ssh-key.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-create-ssh-key
     * @throws GuzzleException
     * @param CreateSshKey\CreateSshKeyRequest $request An object representing the request for this operation
     * @return EmptyResponse|CreateSshKey\CreateSshKey400Response|CreateSshKey\CreateSshKeyDefaultResponse The ssh-key was stored.
     */
    public function createSshKey(CreateSshKeyRequest $request): EmptyResponse|CreateSshKey400Response|CreateSshKeyDefaultResponse
    {
        $httpRequest = new Request(CreateSshKeyRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            201 => new EmptyResponse($httpResponse),
            400 => CreateSshKey400Response::fromResponse($httpResponse),
            default => CreateSshKeyDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Get your stored ssh-keys.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-list-ssh-keys
     * @throws GuzzleException
     * @param ListSshKeys\ListSshKeysRequest $request An object representing the request for this operation
     * @return ListSshKeys\ListSshKeys200Response|ListSshKeys\ListSshKeysDefaultResponse The list of stored ssh-keys.
     */
    public function listSshKeys(ListSshKeysRequest $request): ListSshKeys200Response|ListSshKeysDefaultResponse
    {
        $httpRequest = new Request(ListSshKeysRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => ListSshKeys200Response::fromResponse($httpResponse),
            default => ListSshKeysDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Deletes an ApiToken.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-delete-api-token
     * @throws GuzzleException
     * @param DeleteApiToken\DeleteApiTokenRequest $request An object representing the request for this operation
     * @return EmptyResponse|DeleteApiToken\DeleteApiToken400Response|DeleteApiToken\DeleteApiTokenDefaultResponse The `ApiToken` has been deleted.
     */
    public function deleteApiToken(DeleteApiTokenRequest $request): EmptyResponse|DeleteApiToken400Response|DeleteApiTokenDefaultResponse
    {
        $httpRequest = new Request(DeleteApiTokenRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new EmptyResponse($httpResponse),
            400 => DeleteApiToken400Response::fromResponse($httpResponse),
            default => DeleteApiTokenDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Update an existing `ApiToken`.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-edit-api-token
     * @throws GuzzleException
     * @param EditApiToken\EditApiTokenRequest $request An object representing the request for this operation
     * @return EmptyResponse|EditApiToken\EditApiToken400Response|EditApiToken\EditApiTokenDefaultResponse ApiToken was updated.
     */
    public function editApiToken(EditApiTokenRequest $request): EmptyResponse|EditApiToken400Response|EditApiTokenDefaultResponse
    {
        $httpRequest = new Request(EditApiTokenRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new EmptyResponse($httpResponse),
            400 => EditApiToken400Response::fromResponse($httpResponse),
            default => EditApiTokenDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Get a specific ApiToken.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-get-api-token
     * @throws GuzzleException
     * @param GetApiToken\GetApiTokenRequest $request An object representing the request for this operation
     * @return GetApiToken\GetApiToken200Response|GetApiToken\GetApiToken404Response|GetApiToken\GetApiTokenDefaultResponse The ApiToken.
     */
    public function getApiToken(GetApiTokenRequest $request): GetApiToken200Response|GetApiToken404Response|GetApiTokenDefaultResponse
    {
        $httpRequest = new Request(GetApiTokenRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => GetApiToken200Response::fromResponse($httpResponse),
            404 => GetApiToken404Response::fromResponse($httpResponse),
            default => GetApiTokenDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Remove a ssh-key.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-delete-ssh-key
     * @throws GuzzleException
     * @param DeleteSshKey\DeleteSshKeyRequest $request An object representing the request for this operation
     * @return EmptyResponse|DeleteSshKey\DeleteSshKeyDefaultResponse The ssh-key has been removed.
     */
    public function deleteSshKey(DeleteSshKeyRequest $request): EmptyResponse|DeleteSshKeyDefaultResponse
    {
        $httpRequest = new Request(DeleteSshKeyRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new EmptyResponse($httpResponse),
            default => DeleteSshKeyDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Edit a stored ssh-key.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-edit-ssh-key
     * @throws GuzzleException
     * @param EditSshKey\EditSshKeyRequest $request An object representing the request for this operation
     * @return EmptyResponse|EditSshKey\EditSshKey400Response|EditSshKey\EditSshKeyDefaultResponse The ssh-key has been edited.
     */
    public function editSshKey(EditSshKeyRequest $request): EmptyResponse|EditSshKey400Response|EditSshKeyDefaultResponse
    {
        $httpRequest = new Request(EditSshKeyRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new EmptyResponse($httpResponse),
            400 => EditSshKey400Response::fromResponse($httpResponse),
            default => EditSshKeyDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Get a specific stored ssh-key.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-get-ssh-key
     * @throws GuzzleException
     * @param GetSshKey\GetSshKeyRequest $request An object representing the request for this operation
     * @return GetSshKey\GetSshKey200Response|GetSshKey\GetSshKey404Response|GetSshKey\GetSshKeyDefaultResponse The requested ssh-key.
     */
    public function getSshKey(GetSshKeyRequest $request): GetSshKey200Response|GetSshKey404Response|GetSshKeyDefaultResponse
    {
        $httpRequest = new Request(GetSshKeyRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => GetSshKey200Response::fromResponse($httpResponse),
            404 => GetSshKey404Response::fromResponse($httpResponse),
            default => GetSshKeyDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Delete your account and all your personal data.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-delete-user
     * @throws GuzzleException
     * @param DeleteUser\DeleteUserRequest $request An object representing the request for this operation
     * @return EmptyResponse|UntypedResponse|DeleteUser\DeleteUser400Response|DeleteUser\DeleteUser409Response|DeleteUser\DeleteUserDefaultResponse An additional second factor code is necessary to process the request.
     */
    public function deleteUser(DeleteUserRequest $request): EmptyResponse|UntypedResponse|DeleteUser400Response|DeleteUser409Response|DeleteUserDefaultResponse
    {
        $httpRequest = new Request(DeleteUserRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => new EmptyResponse($httpResponse),
            202 => UntypedResponse::fromResponse($httpResponse),
            400 => DeleteUser400Response::fromResponse($httpResponse),
            409 => DeleteUser409Response::fromResponse($httpResponse),
            default => DeleteUserDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Get your account information.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-get-own-account
     * @throws GuzzleException
     * @param GetOwnAccount\GetOwnAccountRequest $request An object representing the request for this operation
     * @return GetOwnAccount\GetOwnAccount200Response|GetOwnAccount\GetOwnAccountDefaultResponse Account information.
     */
    public function getOwnAccount(GetOwnAccountRequest $request): GetOwnAccount200Response|GetOwnAccountDefaultResponse
    {
        $httpRequest = new Request(GetOwnAccountRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => GetOwnAccount200Response::fromResponse($httpResponse),
            default => GetOwnAccountDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Update your account information.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-update-account
     * @throws GuzzleException
     * @param UpdateAccount\UpdateAccountRequest $request An object representing the request for this operation
     * @return EmptyResponse|UpdateAccount\UpdateAccount400Response|UpdateAccount\UpdateAccountDefaultResponse Account has been updated.
     */
    public function updateAccount(UpdateAccountRequest $request): EmptyResponse|UpdateAccount400Response|UpdateAccountDefaultResponse
    {
        $httpRequest = new Request(UpdateAccountRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new EmptyResponse($httpResponse),
            400 => UpdateAccount400Response::fromResponse($httpResponse),
            default => UpdateAccountDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * The timestamp of your latest password change.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-get-password-updated-at
     * @throws GuzzleException
     * @param GetPasswordUpdatedAt\GetPasswordUpdatedAtRequest $request An object representing the request for this operation
     * @return GetPasswordUpdatedAt\GetPasswordUpdatedAt200Response|GetPasswordUpdatedAt\GetPasswordUpdatedAtDefaultResponse Timestamp of latest password change.
     */
    public function getPasswordUpdatedAt(GetPasswordUpdatedAtRequest $request): GetPasswordUpdatedAt200Response|GetPasswordUpdatedAtDefaultResponse
    {
        $httpRequest = new Request(GetPasswordUpdatedAtRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => GetPasswordUpdatedAt200Response::fromResponse($httpResponse),
            default => GetPasswordUpdatedAtDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Get personalized settings.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-get-personalized-settings
     * @throws GuzzleException
     * @param GetPersonalizedSettings\GetPersonalizedSettingsRequest $request An object representing the request for this operation
     * @return GetPersonalizedSettings\GetPersonalizedSettings200Response|GetPersonalizedSettings\GetPersonalizedSettingsDefaultResponse Personal settings of the user.
     */
    public function getPersonalizedSettings(GetPersonalizedSettingsRequest $request): GetPersonalizedSettings200Response|GetPersonalizedSettingsDefaultResponse
    {
        $httpRequest = new Request(GetPersonalizedSettingsRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => GetPersonalizedSettings200Response::fromResponse($httpResponse),
            default => GetPersonalizedSettingsDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Update personalized GUI settings.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-update-personalized-settings
     * @throws GuzzleException
     * @param UpdatePersonalizedSettings\UpdatePersonalizedSettingsRequest $request An object representing the request for this operation
     * @return EmptyResponse|UpdatePersonalizedSettings\UpdatePersonalizedSettings400Response|UpdatePersonalizedSettings\UpdatePersonalizedSettingsDefaultResponse PersonalSettings have been updated
     */
    public function updatePersonalizedSettings(UpdatePersonalizedSettingsRequest $request): EmptyResponse|UpdatePersonalizedSettings400Response|UpdatePersonalizedSettingsDefaultResponse
    {
        $httpRequest = new Request(UpdatePersonalizedSettingsRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new EmptyResponse($httpResponse),
            400 => UpdatePersonalizedSettings400Response::fromResponse($httpResponse),
            default => UpdatePersonalizedSettingsDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Get a specific session.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-get-session
     * @throws GuzzleException
     * @param GetSession\GetSessionRequest $request An object representing the request for this operation
     * @return GetSession\GetSession200Response|GetSession\GetSession404Response|GetSession\GetSessionDefaultResponse The session.
     */
    public function getSession(GetSessionRequest $request): GetSession200Response|GetSession404Response|GetSessionDefaultResponse
    {
        $httpRequest = new Request(GetSessionRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => GetSession200Response::fromResponse($httpResponse),
            404 => GetSession404Response::fromResponse($httpResponse),
            default => GetSessionDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Terminate a specific Session.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-terminate-session
     * @throws GuzzleException
     * @param TerminateSession\TerminateSessionRequest $request An object representing the request for this operation
     * @return EmptyResponse|TerminateSession\TerminateSession404Response|TerminateSession\TerminateSessionDefaultResponse Session terminated.
     */
    public function terminateSession(TerminateSessionRequest $request): EmptyResponse|TerminateSession404Response|TerminateSessionDefaultResponse
    {
        $httpRequest = new Request(TerminateSessionRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new EmptyResponse($httpResponse),
            404 => TerminateSession404Response::fromResponse($httpResponse),
            default => TerminateSessionDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Get profile information for a user.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-get-user
     * @throws GuzzleException
     * @param GetUser\GetUserRequest $request An object representing the request for this operation
     * @return GetUser\GetUser200Response|GetUser\GetUser403Response|GetUser\GetUser404Response|GetUser\GetUser412Response|GetUser\GetUserDefaultResponse The user profile.
     */
    public function getUser(GetUserRequest $request): GetUser200Response|GetUser403Response|GetUser404Response|GetUser412Response|GetUserDefaultResponse
    {
        $httpRequest = new Request(GetUserRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => GetUser200Response::fromResponse($httpResponse),
            403 => GetUser403Response::fromResponse($httpResponse),
            404 => GetUser404Response::fromResponse($httpResponse),
            412 => GetUser412Response::fromResponse($httpResponse),
            default => GetUserDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Change personal information.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-update-personal-information
     * @throws GuzzleException
     * @param UpdatePersonalInformation\UpdatePersonalInformationRequest $request An object representing the request for this operation
     * @return EmptyResponse|UpdatePersonalInformation\UpdatePersonalInformation400Response|UpdatePersonalInformation\UpdatePersonalInformationDefaultResponse Your personal information has been changed
     */
    public function updatePersonalInformation(UpdatePersonalInformationRequest $request): EmptyResponse|UpdatePersonalInformation400Response|UpdatePersonalInformationDefaultResponse
    {
        $httpRequest = new Request(UpdatePersonalInformationRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new EmptyResponse($httpResponse),
            400 => UpdatePersonalInformation400Response::fromResponse($httpResponse),
            default => UpdatePersonalInformationDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Initialize Multi Factor Authentication. If successful, it needs to be confirmed, before usage of mfa.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-init-mfa
     * @throws GuzzleException
     * @param InitMfa\InitMfaRequest $request An object representing the request for this operation
     * @return InitMfa\InitMfa200Response|InitMfa\InitMfa400Response|InitMfa\InitMfaDefaultResponse The process of activating Multi Factor Authentication is initialized.
     */
    public function initMfa(InitMfaRequest $request): InitMfa200Response|InitMfa400Response|InitMfaDefaultResponse
    {
        $httpRequest = new Request(InitMfaRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => InitMfa200Response::fromResponse($httpResponse),
            400 => InitMfa400Response::fromResponse($httpResponse),
            default => InitMfaDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Initialize password reset process.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-init-password-reset
     * @throws GuzzleException
     * @param InitPasswordReset\InitPasswordResetRequest $request An object representing the request for this operation
     * @return EmptyResponse|InitPasswordReset\InitPasswordReset400Response|InitPasswordReset\InitPasswordResetDefaultResponse The password reset process has been initialized and an email with confirmation code has been sent.
     */
    public function initPasswordReset(InitPasswordResetRequest $request): EmptyResponse|InitPasswordReset400Response|InitPasswordResetDefaultResponse
    {
        $httpRequest = new Request(InitPasswordResetRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            201 => new EmptyResponse($httpResponse),
            400 => InitPasswordReset400Response::fromResponse($httpResponse),
            default => InitPasswordResetDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Submitted feedback of the given user.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-list-feedback
     * @throws GuzzleException
     * @param ListFeedback\ListFeedbackRequest $request An object representing the request for this operation
     * @return ListFeedback\ListFeedback200Response|ListFeedback\ListFeedbackDefaultResponse Feedback submitted by the user.
     */
    public function listFeedback(ListFeedbackRequest $request): ListFeedback200Response|ListFeedbackDefaultResponse
    {
        $httpRequest = new Request(ListFeedbackRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => ListFeedback200Response::fromResponse($httpResponse),
            default => ListFeedbackDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * List all sessions.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-list-sessions
     * @throws GuzzleException
     * @param ListSessions\ListSessionsRequest $request An object representing the request for this operation
     * @return ListSessions\ListSessions200Response|ListSessions\ListSessionsDefaultResponse List of all sessions.
     */
    public function listSessions(ListSessionsRequest $request): ListSessions200Response|ListSessionsDefaultResponse
    {
        $httpRequest = new Request(ListSessionsRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => ListSessions200Response::fromResponse($httpResponse),
            default => ListSessionsDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Terminate all sessions, except the current session.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-terminate-all-sessions
     * @throws GuzzleException
     * @param TerminateAllSessions\TerminateAllSessionsRequest $request An object representing the request for this operation
     * @return EmptyResponse|TerminateAllSessions\TerminateAllSessionsDefaultResponse All sessions terminated.
     */
    public function terminateAllSessions(TerminateAllSessionsRequest $request): EmptyResponse|TerminateAllSessionsDefaultResponse
    {
        $httpRequest = new Request(TerminateAllSessionsRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new EmptyResponse($httpResponse),
            default => TerminateAllSessionsDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Terminate session and invalidate access token.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-logout
     * @throws GuzzleException
     * @param Logout\LogoutRequest $request An object representing the request for this operation
     * @return EmptyResponse|Logout\Logout400Response|Logout\LogoutDefaultResponse You've been logged out. The access token has been removed and invalidated.
     */
    public function logout(LogoutRequest $request): EmptyResponse|Logout400Response|LogoutDefaultResponse
    {
        $httpRequest = new Request(LogoutRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new EmptyResponse($httpResponse),
            400 => Logout400Response::fromResponse($httpResponse),
            default => LogoutDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Register with email and password.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-register
     * @throws GuzzleException
     * @param Register\RegisterRequest $request An object representing the request for this operation
     * @return Register\Register201Response|Register\Register400Response|Register\RegisterDefaultResponse Registration was successfull. A verification email will be sent to the specified email address.
     * The users can be used as soon as the verification link was opened
     */
    public function register(RegisterRequest $request): Register201Response|Register400Response|RegisterDefaultResponse
    {
        $httpRequest = new Request(RegisterRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            201 => Register201Response::fromResponse($httpResponse),
            400 => Register400Response::fromResponse($httpResponse),
            default => RegisterDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Remove Avatar.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-remove-avatar
     * @throws GuzzleException
     * @param RemoveAvatar\RemoveAvatarRequest $request An object representing the request for this operation
     * @return EmptyResponse|RemoveAvatar\RemoveAvatar400Response|RemoveAvatar\RemoveAvatarDefaultResponse Avatar removal was successful.
     */
    public function removeAvatar(RemoveAvatarRequest $request): EmptyResponse|RemoveAvatar400Response|RemoveAvatarDefaultResponse
    {
        $httpRequest = new Request(RemoveAvatarRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new EmptyResponse($httpResponse),
            400 => RemoveAvatar400Response::fromResponse($httpResponse),
            default => RemoveAvatarDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Request a new avatar image upload.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-request-avatar-upload
     * @throws GuzzleException
     * @param RequestAvatarUpload\RequestAvatarUploadRequest $request An object representing the request for this operation
     * @return RequestAvatarUpload\RequestAvatarUpload200Response|RequestAvatarUpload\RequestAvatarUpload400Response|RequestAvatarUpload\RequestAvatarUploadDefaultResponse Avatar upload request was successful.
     */
    public function requestAvatarUpload(RequestAvatarUploadRequest $request): RequestAvatarUpload200Response|RequestAvatarUpload400Response|RequestAvatarUploadDefaultResponse
    {
        $httpRequest = new Request(RequestAvatarUploadRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => RequestAvatarUpload200Response::fromResponse($httpResponse),
            400 => RequestAvatarUpload400Response::fromResponse($httpResponse),
            default => RequestAvatarUploadDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Resend the Email-Address verification email.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-resend-verification-email
     * @throws GuzzleException
     * @param ResendVerificationEmail\ResendVerificationEmailRequest $request An object representing the request for this operation
     * @return EmptyResponse|ResendVerificationEmail\ResendVerificationEmail400Response|ResendVerificationEmail\ResendVerificationEmail403Response|ResendVerificationEmail\ResendVerificationEmailDefaultResponse New Email-Address verification email was sent.
     */
    public function resendVerificationEmail(ResendVerificationEmailRequest $request): EmptyResponse|ResendVerificationEmail400Response|ResendVerificationEmail403Response|ResendVerificationEmailDefaultResponse
    {
        $httpRequest = new Request(ResendVerificationEmailRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new EmptyResponse($httpResponse),
            400 => ResendVerificationEmail400Response::fromResponse($httpResponse),
            403 => ResendVerificationEmail403Response::fromResponse($httpResponse),
            default => ResendVerificationEmailDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Request a support code.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-support-code-request
     * @throws GuzzleException
     * @param SupportCodeRequest\SupportCodeRequestRequest $request An object representing the request for this operation
     * @return SupportCodeRequest\SupportCodeRequest200Response|SupportCodeRequest\SupportCodeRequestDefaultResponse The requested support code and the expiry.
     */
    public function supportCodeRequest(SupportCodeRequestRequest $request): SupportCodeRequest200Response|SupportCodeRequestDefaultResponse
    {
        $httpRequest = new Request(SupportCodeRequestRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => SupportCodeRequest200Response::fromResponse($httpResponse),
            default => SupportCodeRequestDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Verify an added Email-Address.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-verify-email
     * @throws GuzzleException
     * @param VerifyEmail\VerifyEmailRequest $request An object representing the request for this operation
     * @return EmptyResponse|VerifyEmail\VerifyEmail400Response|VerifyEmail\VerifyEmail404Response|VerifyEmail\VerifyEmailDefaultResponse Email has been verified.
     */
    public function verifyEmail(VerifyEmailRequest $request): EmptyResponse|VerifyEmail400Response|VerifyEmail404Response|VerifyEmailDefaultResponse
    {
        $httpRequest = new Request(VerifyEmailRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new EmptyResponse($httpResponse),
            400 => VerifyEmail400Response::fromResponse($httpResponse),
            404 => VerifyEmail404Response::fromResponse($httpResponse),
            default => VerifyEmailDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Verify phone number.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-verify-phone-number
     * @throws GuzzleException
     * @param VerifyPhoneNumber\VerifyPhoneNumberRequest $request An object representing the request for this operation
     * @return EmptyResponse|VerifyPhoneNumber\VerifyPhoneNumber400Response|VerifyPhoneNumber\VerifyPhoneNumber404Response|VerifyPhoneNumber\VerifyPhoneNumber409Response|VerifyPhoneNumber\VerifyPhoneNumberDefaultResponse The phone number has been verified.
     */
    public function verifyPhoneNumber(VerifyPhoneNumberRequest $request): EmptyResponse|VerifyPhoneNumber400Response|VerifyPhoneNumber404Response|VerifyPhoneNumber409Response|VerifyPhoneNumberDefaultResponse
    {
        $httpRequest = new Request(VerifyPhoneNumberRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new EmptyResponse($httpResponse),
            400 => VerifyPhoneNumber400Response::fromResponse($httpResponse),
            404 => VerifyPhoneNumber404Response::fromResponse($httpResponse),
            409 => VerifyPhoneNumber409Response::fromResponse($httpResponse),
            default => VerifyPhoneNumberDefaultResponse::fromResponse($httpResponse),
        };
    }

    /**
     * Verify your registration.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-verify-registration
     * @throws GuzzleException
     * @param VerifyRegistration\VerifyRegistrationRequest $request An object representing the request for this operation
     * @return EmptyResponse|VerifyRegistration\VerifyRegistration400Response|VerifyRegistration\VerifyRegistration404Response|VerifyRegistration\VerifyRegistrationDefaultResponse User is verified and you can now login to your user account.
     */
    public function verifyRegistration(VerifyRegistrationRequest $request): EmptyResponse|VerifyRegistration400Response|VerifyRegistration404Response|VerifyRegistrationDefaultResponse
    {
        $httpRequest = new Request(VerifyRegistrationRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => new EmptyResponse($httpResponse),
            400 => VerifyRegistration400Response::fromResponse($httpResponse),
            404 => VerifyRegistration404Response::fromResponse($httpResponse),
            default => VerifyRegistrationDefaultResponse::fromResponse($httpResponse),
        };
    }
}
