<?php

declare(strict_types=1);

namespace Mittwald\ApiClient\Generated\V2\Clients\User;

use GuzzleHttp\Exception\GuzzleException;
use Mittwald\ApiClient\Client\EmptyResponse;
use Mittwald\ApiClient\Error\UnexpectedResponseException;
use Mittwald\ApiClient\Generated\V2\Clients\User\AddPhoneNumber\AddPhoneNumberRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\Authenticate\AuthenticateOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\Authenticate\AuthenticateRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\AuthenticateMfa\AuthenticateMfaOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\AuthenticateMfa\AuthenticateMfaRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\AuthenticateWithAccessTokenRetrievalKey\AuthenticateWithAccessTokenRetrievalKeyOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\AuthenticateWithAccessTokenRetrievalKey\AuthenticateWithAccessTokenRetrievalKeyRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\ChangeEmail\ChangeEmailRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\ChangePassword\ChangePasswordOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\ChangePassword\ChangePasswordRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\CheckToken\CheckTokenOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\CheckToken\CheckTokenRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\ConfirmMfa\ConfirmMfaOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\ConfirmMfa\ConfirmMfaRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\ConfirmPasswordReset\ConfirmPasswordResetRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\CreateApiToken\CreateApiTokenCreatedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\CreateApiToken\CreateApiTokenRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\CreateFeedback\CreateFeedbackCreatedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\CreateFeedback\CreateFeedbackRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\CreateSshKey\CreateSshKeyCreatedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\CreateSshKey\CreateSshKeyRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeleteApiToken\DeleteApiTokenRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeleteSshKey\DeleteSshKeyRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeleteUser\DeleteUserRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserChangeEmail\DeprecatedUserChangeEmailRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserConfirmPasswordReset\DeprecatedUserConfirmPasswordResetRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserCreateIssue\DeprecatedUserCreateIssueCreatedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserCreateIssue\DeprecatedUserCreateIssueRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserDeleteApiToken\DeprecatedUserDeleteApiTokenRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserDeleteSshKey\DeprecatedUserDeleteSshKeyRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserDisableMfa\DeprecatedUserDisableMfaOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserDisableMfa\DeprecatedUserDisableMfaRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserEditApiToken\DeprecatedUserEditApiTokenRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserEditSshKey\DeprecatedUserEditSshKeyRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserGetOwnAccount\DeprecatedUserGetOwnAccountOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserGetOwnAccount\DeprecatedUserGetOwnAccountRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserInitPasswordReset\DeprecatedUserInitPasswordResetRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserLogout\DeprecatedUserLogoutRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserResendVerificationEmail\DeprecatedUserResendVerificationEmailRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserServiceAvatarRemove\DeprecatedUserServiceAvatarRemoveRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserServiceAvatarRequestUpload\DeprecatedUserServiceAvatarRequestUploadOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserServiceAvatarRequestUpload\DeprecatedUserServiceAvatarRequestUploadRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserServiceFeedbackCreate\DeprecatedUserServiceFeedbackCreateCreatedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserServiceFeedbackCreate\DeprecatedUserServiceFeedbackCreateRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserServiceFeedbackList\DeprecatedUserServiceFeedbackListOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserServiceFeedbackList\DeprecatedUserServiceFeedbackListRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserServiceIssueNew\DeprecatedUserServiceIssueNewRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserServicePersonalInformationUpdate\DeprecatedUserServicePersonalInformationUpdateRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserServicePersonalizedSettingsGet\DeprecatedUserServicePersonalizedSettingsGetOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserServicePersonalizedSettingsGet\DeprecatedUserServicePersonalizedSettingsGetRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserServicePersonalizedSettingsUpdate\DeprecatedUserServicePersonalizedSettingsUpdateRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserServicePhoneNumberAdd\DeprecatedUserServicePhoneNumberAddRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserServicePhoneNumberRemove\DeprecatedUserServicePhoneNumberRemoveRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserServicePhoneNumberVerify\DeprecatedUserServicePhoneNumberVerifyRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserServiceUserGet\DeprecatedUserServiceUserGetOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserServiceUserGet\DeprecatedUserServiceUserGetRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserServiceUserGetOwn\DeprecatedUserServiceUserGetOwnOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserServiceUserGetOwn\DeprecatedUserServiceUserGetOwnRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserTerminateAllSessions\DeprecatedUserTerminateAllSessionsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserTerminateSession\DeprecatedUserTerminateSessionRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserUpdateAccount\DeprecatedUserUpdateAccountRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserVerifyEmail\DeprecatedUserVerifyEmailRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\DisableMfa\DisableMfaRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\EditApiToken\EditApiTokenRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\EditSshKey\EditSshKeyRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\GetApiToken\GetApiTokenOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\GetApiToken\GetApiTokenRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\GetMfaStatus\GetMfaStatusOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\GetMfaStatus\GetMfaStatusRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\GetOwnEmail\GetOwnEmailOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\GetOwnEmail\GetOwnEmailRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\GetPasswordUpdatedAt\GetPasswordUpdatedAtOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\GetPasswordUpdatedAt\GetPasswordUpdatedAtRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\GetPersonalizedSettings\GetPersonalizedSettingsOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\GetPersonalizedSettings\GetPersonalizedSettingsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\GetPollStatus\GetPollStatusOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\GetPollStatus\GetPollStatusRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\GetSession\GetSessionOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\GetSession\GetSessionRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\GetSshKey\GetSshKeyOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\GetSshKey\GetSshKeyRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\GetUser\GetUserOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\GetUser\GetUserRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\InitMfa\InitMfaOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\InitMfa\InitMfaRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\InitPasswordReset\InitPasswordResetCreatedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\InitPasswordReset\InitPasswordResetRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\ListApiTokens\ListApiTokensOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\ListApiTokens\ListApiTokensRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\ListFeedback\ListFeedbackOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\ListFeedback\ListFeedbackRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\ListSessions\ListSessionsOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\ListSessions\ListSessionsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\ListSshKeys\ListSshKeysOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\ListSshKeys\ListSshKeysRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\Logout\LogoutRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\OauthGetAuthorization\OauthGetAuthorizationDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\OauthGetAuthorization\OauthGetAuthorizationRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\OauthRetrieveAccessToken\OauthRetrieveAccessTokenOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\OauthRetrieveAccessToken\OauthRetrieveAccessTokenRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\PostPollStatus\PostPollStatusOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\PostPollStatus\PostPollStatusRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\RefreshSession\RefreshSessionOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\RefreshSession\RefreshSessionRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\Register\RegisterCreatedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\Register\RegisterRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\RemoveAvatar\RemoveAvatarRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\RemovePhoneNumber\RemovePhoneNumberRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\RequestAvatarUpload\RequestAvatarUploadOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\RequestAvatarUpload\RequestAvatarUploadRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\ResendVerificationEmail\ResendVerificationEmailRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\ResetRecoverycodes\ResetRecoverycodesOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\ResetRecoverycodes\ResetRecoverycodesRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\SupportCodeRequest\SupportCodeRequestOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\SupportCodeRequest\SupportCodeRequestRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\TerminateAllSessions\TerminateAllSessionsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\TerminateSession\TerminateSessionRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\UpdateAccount\UpdateAccountRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\UpdatePersonalInformation\UpdatePersonalInformationRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\UpdatePersonalizedSettings\UpdatePersonalizedSettingsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\VerifyEmail\VerifyEmailRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\VerifyPhoneNumber\VerifyPhoneNumberRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\VerifyRegistration\VerifyRegistrationOKResponse;
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
interface UserClient
{
    /**
     * Change your Email-Address. Replaced by `PUT` `/v2/users/self/credentials/email`.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/deprecated-user-change-email
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeprecatedUserChangeEmailRequest $request An object representing the request for this operation
     * @deprecated
     * @return EmptyResponse Your email has been added, but needs to be verfied. Check your mails and
     * call /email/verify with the verification code sent with the mail.
     */
    public function deprecatedUserChangeEmail(DeprecatedUserChangeEmailRequest $request): EmptyResponse;
    /**
     * Confirm password reset. Replaced by `POST` `/v2/users/self/credentials/password/confirm-reset`.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/deprecated-user-confirm-password-reset
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeprecatedUserConfirmPasswordResetRequest $request An object representing the request for this operation
     * @deprecated
     * @return EmptyResponse Password reset was successful.
     */
    public function deprecatedUserConfirmPasswordReset(DeprecatedUserConfirmPasswordResetRequest $request): EmptyResponse;
    /**
     * Create a new issue.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/deprecated-user-create-issue
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeprecatedUserCreateIssueRequest $request An object representing the request for this operation
     * @deprecated
     * @return DeprecatedUserCreateIssueCreatedResponse Issue successfully submitted.
     */
    public function deprecatedUserCreateIssue(DeprecatedUserCreateIssueRequest $request): DeprecatedUserCreateIssueCreatedResponse;
    /**
     * Deletes an ApiToken. Replaces by `DELETE` `/v2/user/{userid}/api-tokens/{apiTokenId}`.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/deprecated-user-delete-api-token
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeprecatedUserDeleteApiTokenRequest $request An object representing the request for this operation
     * @deprecated
     * @return EmptyResponse The `ApiToken` has been deleted.
     */
    public function deprecatedUserDeleteApiToken(DeprecatedUserDeleteApiTokenRequest $request): EmptyResponse;
    /**
     * Remove a ssh-key. Replaced by `DELETE` `/v2/users/self/ssh-keys/{sshKeyId}`.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/deprecated-user-delete-ssh-key
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeprecatedUserDeleteSshKeyRequest $request An object representing the request for this operation
     * @deprecated
     * @return EmptyResponse The ssh-key was removed.
     */
    public function deprecatedUserDeleteSshKey(DeprecatedUserDeleteSshKeyRequest $request): EmptyResponse;
    /**
     * Disable Multi Factor Authentication. Replaced by `DELETE` `/v2/users/self/credentials/mfa`.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/deprecated-user-disable-mfa
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeprecatedUserDisableMfaRequest $request An object representing the request for this operation
     * @deprecated
     * @return DeprecatedUserDisableMfaOKResponse Multi Factor Authentication was disabled.
     */
    public function deprecatedUserDisableMfa(DeprecatedUserDisableMfaRequest $request): DeprecatedUserDisableMfaOKResponse;
    /**
     * Update an existing `ApiToken`. Replaced by `PUT` `/v2/users/{userId}/api-tokens/{apiTokenId}`.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/deprecated-user-edit-api-token
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeprecatedUserEditApiTokenRequest $request An object representing the request for this operation
     * @deprecated
     * @return EmptyResponse ApiToken was updated.
     */
    public function deprecatedUserEditApiToken(DeprecatedUserEditApiTokenRequest $request): EmptyResponse;
    /**
     * Edit a stored ssh-key. Replaced by `PUT` `/v2/users/self/ssh-keys/{sshKeyId}`.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/deprecated-user-edit-ssh-key
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeprecatedUserEditSshKeyRequest $request An object representing the request for this operation
     * @deprecated
     * @return EmptyResponse The ssh-key has been edited.
     */
    public function deprecatedUserEditSshKey(DeprecatedUserEditSshKeyRequest $request): EmptyResponse;
    /**
     * Get your account information. Replaced by `GET` `/v2/users/self`.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/deprecated-user-get-own-account
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeprecatedUserGetOwnAccountRequest $request An object representing the request for this operation
     * @deprecated
     * @return DeprecatedUserGetOwnAccountOKResponse Account information.
     */
    public function deprecatedUserGetOwnAccount(DeprecatedUserGetOwnAccountRequest $request): DeprecatedUserGetOwnAccountOKResponse;
    /**
     * Initialize password reset process. Replaced by `POST` `/v2/users/self/credentials/actions/init-password-reset`.
     *
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/deprecated-user-init-password-reset
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeprecatedUserInitPasswordResetRequest $request An object representing the request for this operation
     * @deprecated
     * @return EmptyResponse The password reset process has been initialized and an email with confirmation code has been sent.
     */
    public function deprecatedUserInitPasswordReset(DeprecatedUserInitPasswordResetRequest $request): EmptyResponse;
    /**
     * Terminate session and invalidate access token. Replaced by `DELETE` `/v2/users/self/sessions/{current}`.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/deprecated-user-logout
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeprecatedUserLogoutRequest $request An object representing the request for this operation
     * @deprecated
     * @return EmptyResponse You've been logged out. The access token has been removed and invalidated.
     */
    public function deprecatedUserLogout(DeprecatedUserLogoutRequest $request): EmptyResponse;
    /**
     * Resend the Email-Address verification email. Replaced by `POST` `/v2/users/self/credentials/email/actions/resend-email`.
     *
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/deprecated-user-resend-verification-email
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeprecatedUserResendVerificationEmailRequest $request An object representing the request for this operation
     * @deprecated
     * @return EmptyResponse New Email-Address verification mail was sent.
     */
    public function deprecatedUserResendVerificationEmail(DeprecatedUserResendVerificationEmailRequest $request): EmptyResponse;
    /**
     * Remove Avatar
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/deprecated-user-service-avatar-remove
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeprecatedUserServiceAvatarRemoveRequest $request An object representing the request for this operation
     * @deprecated
     * @return EmptyResponse Avatar removal was successful
     */
    public function deprecatedUserServiceAvatarRemove(DeprecatedUserServiceAvatarRemoveRequest $request): EmptyResponse;
    /**
     * Request a new avatar upload
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/deprecated-user-service-avatar-request-upload
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeprecatedUserServiceAvatarRequestUploadRequest $request An object representing the request for this operation
     * @deprecated
     * @return DeprecatedUserServiceAvatarRequestUploadOKResponse Avatar upload request was successful. Use the `refId` to upload your avatar to the /v2/files/:refId
     */
    public function deprecatedUserServiceAvatarRequestUpload(DeprecatedUserServiceAvatarRequestUploadRequest $request): DeprecatedUserServiceAvatarRequestUploadOKResponse;
    /**
     * Submit user feedback
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/deprecated-user-service-feedback-create
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeprecatedUserServiceFeedbackCreateRequest $request An object representing the request for this operation
     * @deprecated
     */
    public function deprecatedUserServiceFeedbackCreate(DeprecatedUserServiceFeedbackCreateRequest $request): DeprecatedUserServiceFeedbackCreateCreatedResponse;
    /**
     * Returns your submitted feedback
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/deprecated-user-service-feedback-list
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeprecatedUserServiceFeedbackListRequest $request An object representing the request for this operation
     * @deprecated
     * @return DeprecatedUserServiceFeedbackListOKResponse A list of feedback submitted by the user
     */
    public function deprecatedUserServiceFeedbackList(DeprecatedUserServiceFeedbackListRequest $request): DeprecatedUserServiceFeedbackListOKResponse;
    /**
     * create a new issue
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/deprecated-user-service-issue-new
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeprecatedUserServiceIssueNewRequest $request An object representing the request for this operation
     * @deprecated
     * @return EmptyResponse Issue created
     */
    public function deprecatedUserServiceIssueNew(DeprecatedUserServiceIssueNewRequest $request): EmptyResponse;
    /**
     * Change your personal information
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/deprecated-user-service-personal-information-update
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeprecatedUserServicePersonalInformationUpdateRequest $request An object representing the request for this operation
     * @deprecated
     * @return EmptyResponse Your personal information has been changed
     */
    public function deprecatedUserServicePersonalInformationUpdate(DeprecatedUserServicePersonalInformationUpdateRequest $request): EmptyResponse;
    /**
     * Get personalized settings for the user executing the request
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/deprecated-user-service-personalized-settings-get
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeprecatedUserServicePersonalizedSettingsGetRequest $request An object representing the request for this operation
     * @deprecated
     * @return DeprecatedUserServicePersonalizedSettingsGetOKResponse The settingsString
     */
    public function deprecatedUserServicePersonalizedSettingsGet(DeprecatedUserServicePersonalizedSettingsGetRequest $request): DeprecatedUserServicePersonalizedSettingsGetOKResponse;
    /**
     * update personalized settings
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/deprecated-user-service-personalized-settings-update
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeprecatedUserServicePersonalizedSettingsUpdateRequest $request An object representing the request for this operation
     * @deprecated
     * @return EmptyResponse PersonalSettings have been updated
     */
    public function deprecatedUserServicePersonalizedSettingsUpdate(DeprecatedUserServicePersonalizedSettingsUpdateRequest $request): EmptyResponse;
    /**
     * Add phone number and init verification process
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/deprecated-user-service-phone-number-add
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeprecatedUserServicePhoneNumberAddRequest $request An object representing the request for this operation
     * @deprecated
     * @return EmptyResponse PhoneNumber was added successfully. Now, it can be verified under /v2/user/{userId}/phone/verify
     */
    public function deprecatedUserServicePhoneNumberAdd(DeprecatedUserServicePhoneNumberAddRequest $request): EmptyResponse;
    /**
     * remove your PhoneNumber
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/deprecated-user-service-phone-number-remove
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeprecatedUserServicePhoneNumberRemoveRequest $request An object representing the request for this operation
     * @deprecated
     * @return EmptyResponse PhoneNumber removal was successful
     */
    public function deprecatedUserServicePhoneNumberRemove(DeprecatedUserServicePhoneNumberRemoveRequest $request): EmptyResponse;
    /**
     * Verify phone number
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/deprecated-user-service-phone-number-verify
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeprecatedUserServicePhoneNumberVerifyRequest $request An object representing the request for this operation
     * @deprecated
     * @return EmptyResponse The PhoneNumber has been verified
     */
    public function deprecatedUserServicePhoneNumberVerify(DeprecatedUserServicePhoneNumberVerifyRequest $request): EmptyResponse;
    /**
     * Get profile information for the specified user if the user is related to the executing user
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/deprecated-user-service-user-get
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeprecatedUserServiceUserGetRequest $request An object representing the request for this operation
     * @deprecated
     * @return DeprecatedUserServiceUserGetOKResponse The Profile
     */
    public function deprecatedUserServiceUserGet(DeprecatedUserServiceUserGetRequest $request): DeprecatedUserServiceUserGetOKResponse;
    /**
     * Get profile information for the executing user
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/deprecated-user-service-user-get-own
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeprecatedUserServiceUserGetOwnRequest $request An object representing the request for this operation
     * @deprecated
     * @return DeprecatedUserServiceUserGetOwnOKResponse The Profile
     */
    public function deprecatedUserServiceUserGetOwn(DeprecatedUserServiceUserGetOwnRequest $request): DeprecatedUserServiceUserGetOwnOKResponse;
    /**
     * Terminate all sessions, except the current session. Replaced by `DELETE` `/v2/users/self/sessions`.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/deprecated-user-terminate-all-sessions
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeprecatedUserTerminateAllSessionsRequest $request An object representing the request for this operation
     * @deprecated
     * @return EmptyResponse All sessions terminated.
     */
    public function deprecatedUserTerminateAllSessions(DeprecatedUserTerminateAllSessionsRequest $request): EmptyResponse;
    /**
     * Terminate a specific Session. Replaced by `DELETE` `/v2/users/self/sessions/{tokenId}`.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/deprecated-user-terminate-session
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeprecatedUserTerminateSessionRequest $request An object representing the request for this operation
     * @deprecated
     * @return EmptyResponse Session terminated.
     */
    public function deprecatedUserTerminateSession(DeprecatedUserTerminateSessionRequest $request): EmptyResponse;
    /**
     * Update your account information.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/deprecated-user-update-account
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeprecatedUserUpdateAccountRequest $request An object representing the request for this operation
     * @deprecated
     * @return EmptyResponse Account has been updated.
     */
    public function deprecatedUserUpdateAccount(DeprecatedUserUpdateAccountRequest $request): EmptyResponse;
    /**
     * Verify an added Email-Address. Replaced by `POST` `/v2/users/self/credentials/email/actions/verify-email`.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/deprecated-user-verify-email
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeprecatedUserVerifyEmailRequest $request An object representing the request for this operation
     * @deprecated
     * @return EmptyResponse Email has been verified.
     */
    public function deprecatedUserVerifyEmail(DeprecatedUserVerifyEmailRequest $request): EmptyResponse;
    /**
     * Add phone number and start verification process.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-add-phone-number
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param AddPhoneNumberRequest $request An object representing the request for this operation
     * @return EmptyResponse Phone number was added successfully. Now, it can be verified via /v2/users/:userId/actions/verify-phone.
     */
    public function addPhoneNumber(AddPhoneNumberRequest $request): EmptyResponse;
    /**
     * Authenticate yourself to get an access token.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-authenticate
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param AuthenticateRequest $request An object representing the request for this operation
     * @return AuthenticateOKResponse Your authentication request was successfull and you've got an access token.
     */
    public function authenticate(AuthenticateRequest $request): AuthenticateOKResponse;
    /**
     * Validate your second factor.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-authenticate-mfa
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param AuthenticateMfaRequest $request An object representing the request for this operation
     * @return AuthenticateMfaOKResponse Your authentication request was successful and you've got an access token.
     */
    public function authenticateMfa(AuthenticateMfaRequest $request): AuthenticateMfaOKResponse;
    /**
     * Authenticate an user with an access token retrieval key.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-authenticate-with-access-token-retrieval-key
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param AuthenticateWithAccessTokenRetrievalKeyRequest $request An object representing the request for this operation
     * @return AuthenticateWithAccessTokenRetrievalKeyOKResponse Your authentication request was successful and you've got an access token.
     */
    public function authenticateWithAccessTokenRetrievalKey(AuthenticateWithAccessTokenRetrievalKeyRequest $request): AuthenticateWithAccessTokenRetrievalKeyOKResponse;
    /**
     * Change your Email-Address.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-change-email
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ChangeEmailRequest $request An object representing the request for this operation
     * @return EmptyResponse Your email has been added, but needs to be verfied. Check your mails and
     * call /email/verify with the verification code sent with the mail.
     */
    public function changeEmail(ChangeEmailRequest $request): EmptyResponse;
    /**
     * Change your password.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-change-password
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ChangePasswordRequest $request An object representing the request for this operation
     * @return ChangePasswordOKResponse Your password has been changed.
     */
    public function changePassword(ChangePasswordRequest $request): ChangePasswordOKResponse;
    /**
     * Check token for validity.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-check-token
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param CheckTokenRequest $request An object representing the request for this operation
     * @return CheckTokenOKResponse Your token is valid.
     */
    public function checkToken(CheckTokenRequest $request): CheckTokenOKResponse;
    /**
     * Confirm Multi Factor Authentication.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-confirm-mfa
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ConfirmMfaRequest $request An object representing the request for this operation
     * @return ConfirmMfaOKResponse Mfa is now activated and recovery codes are in the response body.
     */
    public function confirmMfa(ConfirmMfaRequest $request): ConfirmMfaOKResponse;
    /**
     * Confirm password reset.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-confirm-password-reset
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ConfirmPasswordResetRequest $request An object representing the request for this operation
     * @return EmptyResponse Password reset was successful.
     */
    public function confirmPasswordReset(ConfirmPasswordResetRequest $request): EmptyResponse;
    /**
     * Store a new ApiToken.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-create-api-token
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param CreateApiTokenRequest $request An object representing the request for this operation
     * @return CreateApiTokenCreatedResponse ApiToken was added.
     */
    public function createApiToken(CreateApiTokenRequest $request): CreateApiTokenCreatedResponse;
    /**
     * Submit your user feedback.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-create-feedback
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param CreateFeedbackRequest $request An object representing the request for this operation
     * @return CreateFeedbackCreatedResponse Feedback successfully submitted.
     */
    public function createFeedback(CreateFeedbackRequest $request): CreateFeedbackCreatedResponse;
    /**
     * Store a new ssh-key.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-create-ssh-key
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param CreateSshKeyRequest $request An object representing the request for this operation
     * @return CreateSshKeyCreatedResponse The ssh-key was stored.
     */
    public function createSshKey(CreateSshKeyRequest $request): CreateSshKeyCreatedResponse;
    /**
     * Deletes an ApiToken.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-delete-api-token
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeleteApiTokenRequest $request An object representing the request for this operation
     * @return EmptyResponse The `ApiToken` has been deleted.
     */
    public function deleteApiToken(DeleteApiTokenRequest $request): EmptyResponse;
    /**
     * Remove a ssh-key.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-delete-ssh-key
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeleteSshKeyRequest $request An object representing the request for this operation
     * @return EmptyResponse The ssh-key has been removed.
     */
    public function deleteSshKey(DeleteSshKeyRequest $request): EmptyResponse;
    /**
     * Delete your account and all your personal data.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-delete-user
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeleteUserRequest $request An object representing the request for this operation
     * @return EmptyResponse Your user has been deleted.
     */
    public function deleteUser(DeleteUserRequest $request): EmptyResponse;
    /**
     * Disable Multi Factor Authentication.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-disable-mfa
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DisableMfaRequest $request An object representing the request for this operation
     * @return EmptyResponse Multi Factor Authentication was disabled.
     */
    public function disableMfa(DisableMfaRequest $request): EmptyResponse;
    /**
     * Update an existing `ApiToken`.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-edit-api-token
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param EditApiTokenRequest $request An object representing the request for this operation
     * @return EmptyResponse ApiToken was updated.
     */
    public function editApiToken(EditApiTokenRequest $request): EmptyResponse;
    /**
     * Edit a stored ssh-key.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-edit-ssh-key
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param EditSshKeyRequest $request An object representing the request for this operation
     * @return EmptyResponse The ssh-key has been edited.
     */
    public function editSshKey(EditSshKeyRequest $request): EmptyResponse;
    /**
     * Get a specific ApiToken.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-get-api-token
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetApiTokenRequest $request An object representing the request for this operation
     * @return GetApiTokenOKResponse The ApiToken.
     */
    public function getApiToken(GetApiTokenRequest $request): GetApiTokenOKResponse;
    /**
     * Get your current multi factor auth status.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-get-mfa-status
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetMfaStatusRequest $request An object representing the request for this operation
     * @return GetMfaStatusOKResponse Multi factor auth status
     */
    public function getMfaStatus(GetMfaStatusRequest $request): GetMfaStatusOKResponse;
    /**
     * Get your verified Email-Address.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-get-own-email
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetOwnEmailRequest $request An object representing the request for this operation
     * @return GetOwnEmailOKResponse Your Email-Address.
     */
    public function getOwnEmail(GetOwnEmailRequest $request): GetOwnEmailOKResponse;
    /**
     * The timestamp of your latest password change.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-get-password-updated-at
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetPasswordUpdatedAtRequest $request An object representing the request for this operation
     * @return GetPasswordUpdatedAtOKResponse Timestamp of latest password change.
     */
    public function getPasswordUpdatedAt(GetPasswordUpdatedAtRequest $request): GetPasswordUpdatedAtOKResponse;
    /**
     * Get personalized settings.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-get-personalized-settings
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetPersonalizedSettingsRequest $request An object representing the request for this operation
     * @return GetPersonalizedSettingsOKResponse Personal settings of the user.
     */
    public function getPersonalizedSettings(GetPersonalizedSettingsRequest $request): GetPersonalizedSettingsOKResponse;
    /**
     * Get poll settings for the specified user.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-get-poll-status
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetPollStatusRequest $request An object representing the request for this operation
     */
    public function getPollStatus(GetPollStatusRequest $request): GetPollStatusOKResponse;
    /**
     * Get a specific session.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-get-session
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetSessionRequest $request An object representing the request for this operation
     * @return GetSessionOKResponse The session.
     */
    public function getSession(GetSessionRequest $request): GetSessionOKResponse;
    /**
     * Get a specific stored ssh-key.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-get-ssh-key
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetSshKeyRequest $request An object representing the request for this operation
     * @return GetSshKeyOKResponse The requested ssh-key.
     */
    public function getSshKey(GetSshKeyRequest $request): GetSshKeyOKResponse;
    /**
     * Get profile information for a user.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-get-user
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetUserRequest $request An object representing the request for this operation
     * @return GetUserOKResponse The user profile.
     */
    public function getUser(GetUserRequest $request): GetUserOKResponse;
    /**
     * Initialize Multi Factor Authentication. If successful, it needs to be confirmed, before usage of mfa.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-init-mfa
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param InitMfaRequest $request An object representing the request for this operation
     * @return InitMfaOKResponse The process of activating Multi Factor Authentication is initialized.
     */
    public function initMfa(InitMfaRequest $request): InitMfaOKResponse;
    /**
     * Initialize password reset process.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-init-password-reset
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param InitPasswordResetRequest $request An object representing the request for this operation
     * @return InitPasswordResetCreatedResponse The password reset process has been initialized and an email with confirmation code has been sent.
     */
    public function initPasswordReset(InitPasswordResetRequest $request): InitPasswordResetCreatedResponse;
    /**
     * List all of your ApiTokens.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-list-api-tokens
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ListApiTokensRequest $request An object representing the request for this operation
     * @return ListApiTokensOKResponse A list of ApiTokens.
     */
    public function listApiTokens(ListApiTokensRequest $request): ListApiTokensOKResponse;
    /**
     * Submitted feedback of the given user.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-list-feedback
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ListFeedbackRequest $request An object representing the request for this operation
     * @return ListFeedbackOKResponse Feedback submitted by the user.
     */
    public function listFeedback(ListFeedbackRequest $request): ListFeedbackOKResponse;
    /**
     * List all sessions.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-list-sessions
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ListSessionsRequest $request An object representing the request for this operation
     * @return ListSessionsOKResponse List of all sessions.
     */
    public function listSessions(ListSessionsRequest $request): ListSessionsOKResponse;
    /**
     * Get your stored ssh-keys.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-list-ssh-keys
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ListSshKeysRequest $request An object representing the request for this operation
     * @return ListSshKeysOKResponse The list of stored ssh-keys.
     */
    public function listSshKeys(ListSshKeysRequest $request): ListSshKeysOKResponse;
    /**
     * Terminate session and invalidate access token.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-logout
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param LogoutRequest $request An object representing the request for this operation
     * @return EmptyResponse You've been logged out. The access token has been removed and invalidated.
     */
    public function logout(LogoutRequest $request): EmptyResponse;
    /**
     * Obtain authorization from the resource owner.
     *
     * The OAuth 2.0 client requests authorization from the resource owner according to
     * [RFC6749](https://datatracker.ietf.org/doc/html/rfc6749). The
     * authorization request is made indirectly via the authorization
     * server as an intermediary.
     *
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-oauth-get-authorization
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param OauthGetAuthorizationRequest $request An object representing the request for this operation
     * @return OauthGetAuthorizationDefaultResponse An unexpected Error that occurred while handling the request
     */
    public function oauthGetAuthorization(OauthGetAuthorizationRequest $request): OauthGetAuthorizationDefaultResponse;
    /**
     * Retrieve Access Token from Authorization Code.
     *
     * The OAuth 2.0 client retrieves an Access Token from an existing authorization code according to
     * [RFC6749](https://datatracker.ietf.org/doc/html/rfc6749).
     *
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-oauth-retrieve-access-token
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param OauthRetrieveAccessTokenRequest $request An object representing the request for this operation
     * @return OauthRetrieveAccessTokenOKResponse The authorization server issues an access token as described in
     * [RFC6749](https://datatracker.ietf.org/doc/html/rfc6749#section-5.1).
     */
    public function oauthRetrieveAccessToken(OauthRetrieveAccessTokenRequest $request): OauthRetrieveAccessTokenOKResponse;
    /**
     * Store new or update poll settings.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-post-poll-status
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param PostPollStatusRequest $request An object representing the request for this operation
     * @return PostPollStatusOKResponse The updated poll settings.
     */
    public function postPollStatus(PostPollStatusRequest $request): PostPollStatusOKResponse;
    /**
     * Refresh a session.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-refresh-session
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param RefreshSessionRequest $request An object representing the request for this operation
     * @return RefreshSessionOKResponse Your token refresh was successful and you've got new a new access token. The used one in this call is no longer valid.
     */
    public function refreshSession(RefreshSessionRequest $request): RefreshSessionOKResponse;
    /**
     * Register with email and password.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-register
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param RegisterRequest $request An object representing the request for this operation
     * @return RegisterCreatedResponse Registration was successfull. A verification email will be sent to the specified email address.
     * The users can be used as soon as the verification link was opened
     */
    public function register(RegisterRequest $request): RegisterCreatedResponse;
    /**
     * Remove Avatar.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-remove-avatar
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param RemoveAvatarRequest $request An object representing the request for this operation
     * @return EmptyResponse Avatar removal was successful.
     */
    public function removeAvatar(RemoveAvatarRequest $request): EmptyResponse;
    /**
     * Remove phone number.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-remove-phone-number
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param RemovePhoneNumberRequest $request An object representing the request for this operation
     * @return EmptyResponse PhoneNumber removal was successful
     */
    public function removePhoneNumber(RemovePhoneNumberRequest $request): EmptyResponse;
    /**
     * Request a new avatar image upload.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-request-avatar-upload
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param RequestAvatarUploadRequest $request An object representing the request for this operation
     * @return RequestAvatarUploadOKResponse Avatar upload request was successful.
     */
    public function requestAvatarUpload(RequestAvatarUploadRequest $request): RequestAvatarUploadOKResponse;
    /**
     * Resend the Email-Address verification email.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-resend-verification-email
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ResendVerificationEmailRequest $request An object representing the request for this operation
     * @return EmptyResponse New Email-Address verification email was sent.
     */
    public function resendVerificationEmail(ResendVerificationEmailRequest $request): EmptyResponse;
    /**
     * Reset RecoveryCodes for MFA.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-reset-recoverycodes
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ResetRecoverycodesRequest $request An object representing the request for this operation
     * @return ResetRecoverycodesOKResponse Recovery-Codes are reset now. The new Recovery-Codes are in the response body.
     */
    public function resetRecoverycodes(ResetRecoverycodesRequest $request): ResetRecoverycodesOKResponse;
    /**
     * Request a support code.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-support-code-request
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param SupportCodeRequestRequest $request An object representing the request for this operation
     * @return SupportCodeRequestOKResponse The requested support code and the expiry.
     */
    public function supportCodeRequest(SupportCodeRequestRequest $request): SupportCodeRequestOKResponse;
    /**
     * Terminate all sessions, except the current session.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-terminate-all-sessions
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param TerminateAllSessionsRequest $request An object representing the request for this operation
     * @return EmptyResponse All sessions terminated.
     */
    public function terminateAllSessions(TerminateAllSessionsRequest $request): EmptyResponse;
    /**
     * Terminate a specific Session.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-terminate-session
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param TerminateSessionRequest $request An object representing the request for this operation
     * @return EmptyResponse Session terminated.
     */
    public function terminateSession(TerminateSessionRequest $request): EmptyResponse;
    /**
     * Update your account information.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-update-account
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param UpdateAccountRequest $request An object representing the request for this operation
     * @return EmptyResponse Account has been updated.
     */
    public function updateAccount(UpdateAccountRequest $request): EmptyResponse;
    /**
     * Change personal information.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-update-personal-information
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param UpdatePersonalInformationRequest $request An object representing the request for this operation
     * @return EmptyResponse Your personal information has been changed
     */
    public function updatePersonalInformation(UpdatePersonalInformationRequest $request): EmptyResponse;
    /**
     * Update personalized GUI settings.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-update-personalized-settings
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param UpdatePersonalizedSettingsRequest $request An object representing the request for this operation
     * @return EmptyResponse PersonalSettings have been updated
     */
    public function updatePersonalizedSettings(UpdatePersonalizedSettingsRequest $request): EmptyResponse;
    /**
     * Verify an added Email-Address.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-verify-email
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param VerifyEmailRequest $request An object representing the request for this operation
     * @return EmptyResponse Email has been verified.
     */
    public function verifyEmail(VerifyEmailRequest $request): EmptyResponse;
    /**
     * Verify phone number.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-verify-phone-number
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param VerifyPhoneNumberRequest $request An object representing the request for this operation
     * @return EmptyResponse The phone number has been verified.
     */
    public function verifyPhoneNumber(VerifyPhoneNumberRequest $request): EmptyResponse;
    /**
     * Verify your registration.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-verify-registration
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param VerifyRegistrationRequest $request An object representing the request for this operation
     * @return VerifyRegistrationOKResponse User is verified and you can now login to your user account.
     */
    public function verifyRegistration(VerifyRegistrationRequest $request): VerifyRegistrationOKResponse;
}
