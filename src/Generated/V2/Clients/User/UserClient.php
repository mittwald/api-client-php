<?php

namespace Mittwald\ApiClient\Generated\V2\Clients\User;

use GuzzleHttp\Client;
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

class UserClient
{
    private Client $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

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
