<?php

namespace Mittwald\ApiClient\Generated\V2\Clients\User;

use GuzzleHttp\Exception\GuzzleException;
use Mittwald\ApiClient\Client\EmptyResponse;
use Mittwald\ApiClient\Error\UnexpectedResponseException;
use Mittwald\ApiClient\Generated\V2\Clients\User\AddPhoneNumber\AddPhoneNumberRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\Authenticate\AuthenticateOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\Authenticate\AuthenticateRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\AuthenticateMfa\AuthenticateMfaOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\AuthenticateMfa\AuthenticateMfaRequest;
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
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserDisableMfa\DeprecatedUserDisableMfaRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserEditApiToken\DeprecatedUserEditApiTokenRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\DeprecatedUserEditSshKey\DeprecatedUserEditSshKeyRequest;
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
use Mittwald\ApiClient\Generated\V2\Clients\User\GetOwnAccount\GetOwnAccountOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\GetOwnAccount\GetOwnAccountRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\GetOwnEmail\GetOwnEmailOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\GetOwnEmail\GetOwnEmailRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\GetPasswordUpdatedAt\GetPasswordUpdatedAtOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\GetPasswordUpdatedAt\GetPasswordUpdatedAtRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\GetPersonalizedSettings\GetPersonalizedSettingsOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\GetPersonalizedSettings\GetPersonalizedSettingsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\GetSession\GetSessionOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\GetSession\GetSessionRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\GetSshKey\GetSshKeyOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\GetSshKey\GetSshKeyRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\GetUser\GetUserOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\GetUser\GetUserRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\InitMfa\InitMfaOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\InitMfa\InitMfaRequest;
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
use Mittwald\ApiClient\Generated\V2\Clients\User\PasswordValidationGetPasswordPolicy\PasswordValidationGetPasswordPolicyOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\PasswordValidationGetPasswordPolicy\PasswordValidationGetPasswordPolicyRequest;
use Mittwald\ApiClient\Generated\V2\Clients\User\PasswordValidationGetPasswordPolicyV2Deprecated\PasswordValidationGetPasswordPolicyV2DeprecatedOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\User\PasswordValidationGetPasswordPolicyV2Deprecated\PasswordValidationGetPasswordPolicyV2DeprecatedRequest;
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
    public function deprecatedUserChangeEmail(DeprecatedUserChangeEmailRequest $request): EmptyResponse;
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
    public function deprecatedUserConfirmPasswordReset(DeprecatedUserConfirmPasswordResetRequest $request): EmptyResponse;
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
    public function deprecatedUserCreateIssue(DeprecatedUserCreateIssueRequest $request): DeprecatedUserCreateIssueCreatedResponse;
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
    public function deprecatedUserDeleteApiToken(DeprecatedUserDeleteApiTokenRequest $request): EmptyResponse;
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
    public function deprecatedUserDeleteSshKey(DeprecatedUserDeleteSshKeyRequest $request): EmptyResponse;
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
    public function deprecatedUserDisableMfa(DeprecatedUserDisableMfaRequest $request): EmptyResponse;
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
    public function deprecatedUserEditApiToken(DeprecatedUserEditApiTokenRequest $request): EmptyResponse;
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
    public function deprecatedUserEditSshKey(DeprecatedUserEditSshKeyRequest $request): EmptyResponse;
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
    public function deprecatedUserInitPasswordReset(DeprecatedUserInitPasswordResetRequest $request): EmptyResponse;
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
    public function deprecatedUserLogout(DeprecatedUserLogoutRequest $request): EmptyResponse;
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
    public function deprecatedUserResendVerificationEmail(DeprecatedUserResendVerificationEmailRequest $request): EmptyResponse;
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
    public function deprecatedUserServiceAvatarRemove(DeprecatedUserServiceAvatarRemoveRequest $request): EmptyResponse;
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
    public function deprecatedUserServiceAvatarRequestUpload(DeprecatedUserServiceAvatarRequestUploadRequest $request): DeprecatedUserServiceAvatarRequestUploadOKResponse;
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
    public function deprecatedUserServiceFeedbackCreate(DeprecatedUserServiceFeedbackCreateRequest $request): DeprecatedUserServiceFeedbackCreateCreatedResponse;
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
    public function deprecatedUserServiceFeedbackList(DeprecatedUserServiceFeedbackListRequest $request): DeprecatedUserServiceFeedbackListOKResponse;
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
    public function deprecatedUserServiceIssueNew(DeprecatedUserServiceIssueNewRequest $request): EmptyResponse;
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
    public function deprecatedUserServicePersonalInformationUpdate(DeprecatedUserServicePersonalInformationUpdateRequest $request): EmptyResponse;
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
    public function deprecatedUserServicePersonalizedSettingsGet(DeprecatedUserServicePersonalizedSettingsGetRequest $request): DeprecatedUserServicePersonalizedSettingsGetOKResponse;
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
    public function deprecatedUserServicePersonalizedSettingsUpdate(DeprecatedUserServicePersonalizedSettingsUpdateRequest $request): EmptyResponse;
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
    public function deprecatedUserServicePhoneNumberAdd(DeprecatedUserServicePhoneNumberAddRequest $request): EmptyResponse;
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
    public function deprecatedUserServicePhoneNumberRemove(DeprecatedUserServicePhoneNumberRemoveRequest $request): EmptyResponse;
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
    public function deprecatedUserServicePhoneNumberVerify(DeprecatedUserServicePhoneNumberVerifyRequest $request): EmptyResponse;
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
    public function deprecatedUserServiceUserGet(DeprecatedUserServiceUserGetRequest $request): DeprecatedUserServiceUserGetOKResponse;
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
    public function deprecatedUserServiceUserGetOwn(DeprecatedUserServiceUserGetOwnRequest $request): DeprecatedUserServiceUserGetOwnOKResponse;
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
    public function deprecatedUserTerminateAllSessions(DeprecatedUserTerminateAllSessionsRequest $request): EmptyResponse;
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
    public function deprecatedUserTerminateSession(DeprecatedUserTerminateSessionRequest $request): EmptyResponse;
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
    public function deprecatedUserUpdateAccount(DeprecatedUserUpdateAccountRequest $request): EmptyResponse;
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
    public function deprecatedUserVerifyEmail(DeprecatedUserVerifyEmailRequest $request): EmptyResponse;
    /**
     * Get a PasswordPolicy.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/password-validation-get-password-policy
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param PasswordValidationGetPasswordPolicy\PasswordValidationGetPasswordPolicyRequest $request An object representing the request for this operation
     * @return PasswordValidationGetPasswordPolicy\PasswordValidationGetPasswordPolicyOKResponse The PasswordPolicy to be retrieved.
     */
    public function passwordValidationGetPasswordPolicy(PasswordValidationGetPasswordPolicyRequest $request): PasswordValidationGetPasswordPolicyOKResponse;
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
    public function passwordValidationGetPasswordPolicyV2Deprecated(PasswordValidationGetPasswordPolicyV2DeprecatedRequest $request): PasswordValidationGetPasswordPolicyV2DeprecatedOKResponse;
    /**
     * Add phone number and start verification process.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-add-phone-number
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param AddPhoneNumber\AddPhoneNumberRequest $request An object representing the request for this operation
     * @return EmptyResponse Phone number was added successfully. Now, it can be verified via /v2/users/:userId/phone/verify.
     */
    public function addPhoneNumber(AddPhoneNumberRequest $request): EmptyResponse;
    /**
     * Authenticate yourself to get an access token.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-authenticate
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param Authenticate\AuthenticateRequest $request An object representing the request for this operation
     * @return Authenticate\AuthenticateOKResponse Your authentication request was successfull and you've got an access token.
     */
    public function authenticate(AuthenticateRequest $request): AuthenticateOKResponse;
    /**
     * Validate your second factor.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-authenticate-mfa
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param AuthenticateMfa\AuthenticateMfaRequest $request An object representing the request for this operation
     * @return AuthenticateMfa\AuthenticateMfaOKResponse Your authentication request was successful and you've got an access token.
     */
    public function authenticateMfa(AuthenticateMfaRequest $request): AuthenticateMfaOKResponse;
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
    public function changeEmail(ChangeEmailRequest $request): EmptyResponse;
    /**
     * Change your password.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-change-password
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ChangePassword\ChangePasswordRequest $request An object representing the request for this operation
     * @return ChangePassword\ChangePasswordOKResponse Your password has been changed.
     */
    public function changePassword(ChangePasswordRequest $request): ChangePasswordOKResponse;
    /**
     * Check token for validity.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-check-token
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param CheckToken\CheckTokenRequest $request An object representing the request for this operation
     * @return CheckToken\CheckTokenOKResponse Your token is valid.
     */
    public function checkToken(CheckTokenRequest $request): CheckTokenOKResponse;
    /**
     * Confirm Multi Factor Authentication.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-confirm-mfa
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ConfirmMfa\ConfirmMfaRequest $request An object representing the request for this operation
     * @return ConfirmMfa\ConfirmMfaOKResponse Mfa is now activated and recovery codes are in the response body.
     */
    public function confirmMfa(ConfirmMfaRequest $request): ConfirmMfaOKResponse;
    /**
     * Confirm password reset.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-confirm-password-reset
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ConfirmPasswordReset\ConfirmPasswordResetRequest $request An object representing the request for this operation
     * @return EmptyResponse Password reset was successful.
     */
    public function confirmPasswordReset(ConfirmPasswordResetRequest $request): EmptyResponse;
    /**
     * Store a new ApiToken.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-create-api-token
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param CreateApiToken\CreateApiTokenRequest $request An object representing the request for this operation
     * @return CreateApiToken\CreateApiTokenCreatedResponse ApiToken was added.
     */
    public function createApiToken(CreateApiTokenRequest $request): CreateApiTokenCreatedResponse;
    /**
     * Submit your user feedback.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-create-feedback
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param CreateFeedback\CreateFeedbackRequest $request An object representing the request for this operation
     * @return CreateFeedback\CreateFeedbackCreatedResponse Feedback successfully submitted.
     */
    public function createFeedback(CreateFeedbackRequest $request): CreateFeedbackCreatedResponse;
    /**
     * Store a new ssh-key.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-create-ssh-key
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param CreateSshKey\CreateSshKeyRequest $request An object representing the request for this operation
     * @return EmptyResponse The ssh-key was stored.
     */
    public function createSshKey(CreateSshKeyRequest $request): EmptyResponse;
    /**
     * Deletes an ApiToken.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-delete-api-token
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeleteApiToken\DeleteApiTokenRequest $request An object representing the request for this operation
     * @return EmptyResponse The `ApiToken` has been deleted.
     */
    public function deleteApiToken(DeleteApiTokenRequest $request): EmptyResponse;
    /**
     * Remove a ssh-key.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-delete-ssh-key
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeleteSshKey\DeleteSshKeyRequest $request An object representing the request for this operation
     * @return EmptyResponse The ssh-key has been removed.
     */
    public function deleteSshKey(DeleteSshKeyRequest $request): EmptyResponse;
    /**
     * Delete your account and all your personal data.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-delete-user
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeleteUser\DeleteUserRequest $request An object representing the request for this operation
     * @return EmptyResponse Your user has been deleted.
     */
    public function deleteUser(DeleteUserRequest $request): EmptyResponse;
    /**
     * Disable Multi Factor Authentication.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-disable-mfa
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DisableMfa\DisableMfaRequest $request An object representing the request for this operation
     * @return EmptyResponse Multi Factor Authentication was disabled.
     */
    public function disableMfa(DisableMfaRequest $request): EmptyResponse;
    /**
     * Update an existing `ApiToken`.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-edit-api-token
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param EditApiToken\EditApiTokenRequest $request An object representing the request for this operation
     * @return EmptyResponse ApiToken was updated.
     */
    public function editApiToken(EditApiTokenRequest $request): EmptyResponse;
    /**
     * Edit a stored ssh-key.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-edit-ssh-key
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param EditSshKey\EditSshKeyRequest $request An object representing the request for this operation
     * @return EmptyResponse The ssh-key has been edited.
     */
    public function editSshKey(EditSshKeyRequest $request): EmptyResponse;
    /**
     * Get a specific ApiToken.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-get-api-token
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetApiToken\GetApiTokenRequest $request An object representing the request for this operation
     * @return GetApiToken\GetApiTokenOKResponse The ApiToken.
     */
    public function getApiToken(GetApiTokenRequest $request): GetApiTokenOKResponse;
    /**
     * Get your current multi factor auth status.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-get-mfa-status
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetMfaStatus\GetMfaStatusRequest $request An object representing the request for this operation
     * @return GetMfaStatus\GetMfaStatusOKResponse Multi factor auth status
     */
    public function getMfaStatus(GetMfaStatusRequest $request): GetMfaStatusOKResponse;
    /**
     * Get your account information.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-get-own-account
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetOwnAccount\GetOwnAccountRequest $request An object representing the request for this operation
     * @return GetOwnAccount\GetOwnAccountOKResponse Account information.
     */
    public function getOwnAccount(GetOwnAccountRequest $request): GetOwnAccountOKResponse;
    /**
     * Get your verified Email-Address.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-get-own-email
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetOwnEmail\GetOwnEmailRequest $request An object representing the request for this operation
     * @return GetOwnEmail\GetOwnEmailOKResponse Your Email-Address.
     */
    public function getOwnEmail(GetOwnEmailRequest $request): GetOwnEmailOKResponse;
    /**
     * The timestamp of your latest password change.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-get-password-updated-at
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetPasswordUpdatedAt\GetPasswordUpdatedAtRequest $request An object representing the request for this operation
     * @return GetPasswordUpdatedAt\GetPasswordUpdatedAtOKResponse Timestamp of latest password change.
     */
    public function getPasswordUpdatedAt(GetPasswordUpdatedAtRequest $request): GetPasswordUpdatedAtOKResponse;
    /**
     * Get personalized settings.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-get-personalized-settings
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetPersonalizedSettings\GetPersonalizedSettingsRequest $request An object representing the request for this operation
     * @return GetPersonalizedSettings\GetPersonalizedSettingsOKResponse Personal settings of the user.
     */
    public function getPersonalizedSettings(GetPersonalizedSettingsRequest $request): GetPersonalizedSettingsOKResponse;
    /**
     * Get a specific session.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-get-session
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetSession\GetSessionRequest $request An object representing the request for this operation
     * @return GetSession\GetSessionOKResponse The session.
     */
    public function getSession(GetSessionRequest $request): GetSessionOKResponse;
    /**
     * Get a specific stored ssh-key.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-get-ssh-key
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetSshKey\GetSshKeyRequest $request An object representing the request for this operation
     * @return GetSshKey\GetSshKeyOKResponse The requested ssh-key.
     */
    public function getSshKey(GetSshKeyRequest $request): GetSshKeyOKResponse;
    /**
     * Get profile information for a user.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-get-user
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetUser\GetUserRequest $request An object representing the request for this operation
     * @return GetUser\GetUserOKResponse The user profile.
     */
    public function getUser(GetUserRequest $request): GetUserOKResponse;
    /**
     * Initialize Multi Factor Authentication. If successful, it needs to be confirmed, before usage of mfa.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-init-mfa
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param InitMfa\InitMfaRequest $request An object representing the request for this operation
     * @return InitMfa\InitMfaOKResponse The process of activating Multi Factor Authentication is initialized.
     */
    public function initMfa(InitMfaRequest $request): InitMfaOKResponse;
    /**
     * Initialize password reset process.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-init-password-reset
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param InitPasswordReset\InitPasswordResetRequest $request An object representing the request for this operation
     * @return EmptyResponse The password reset process has been initialized and an email with confirmation code has been sent.
     */
    public function initPasswordReset(InitPasswordResetRequest $request): EmptyResponse;
    /**
     * List all of your ApiTokens.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-list-api-tokens
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ListApiTokens\ListApiTokensRequest $request An object representing the request for this operation
     * @return ListApiTokens\ListApiTokensOKResponse A list of ApiTokens.
     */
    public function listApiTokens(ListApiTokensRequest $request): ListApiTokensOKResponse;
    /**
     * Submitted feedback of the given user.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-list-feedback
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ListFeedback\ListFeedbackRequest $request An object representing the request for this operation
     * @return ListFeedback\ListFeedbackOKResponse Feedback submitted by the user.
     */
    public function listFeedback(ListFeedbackRequest $request): ListFeedbackOKResponse;
    /**
     * List all sessions.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-list-sessions
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ListSessions\ListSessionsRequest $request An object representing the request for this operation
     * @return ListSessions\ListSessionsOKResponse List of all sessions.
     */
    public function listSessions(ListSessionsRequest $request): ListSessionsOKResponse;
    /**
     * Get your stored ssh-keys.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-list-ssh-keys
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ListSshKeys\ListSshKeysRequest $request An object representing the request for this operation
     * @return ListSshKeys\ListSshKeysOKResponse The list of stored ssh-keys.
     */
    public function listSshKeys(ListSshKeysRequest $request): ListSshKeysOKResponse;
    /**
     * Terminate session and invalidate access token.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-logout
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param Logout\LogoutRequest $request An object representing the request for this operation
     * @return EmptyResponse You've been logged out. The access token has been removed and invalidated.
     */
    public function logout(LogoutRequest $request): EmptyResponse;
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
    public function register(RegisterRequest $request): RegisterCreatedResponse;
    /**
     * Remove Avatar.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-remove-avatar
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param RemoveAvatar\RemoveAvatarRequest $request An object representing the request for this operation
     * @return EmptyResponse Avatar removal was successful.
     */
    public function removeAvatar(RemoveAvatarRequest $request): EmptyResponse;
    /**
     * Remove phone number.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-remove-phone-number
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param RemovePhoneNumber\RemovePhoneNumberRequest $request An object representing the request for this operation
     * @return EmptyResponse PhoneNumber removal was successful
     */
    public function removePhoneNumber(RemovePhoneNumberRequest $request): EmptyResponse;
    /**
     * Request a new avatar image upload.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-request-avatar-upload
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param RequestAvatarUpload\RequestAvatarUploadRequest $request An object representing the request for this operation
     * @return RequestAvatarUpload\RequestAvatarUploadOKResponse Avatar upload request was successful.
     */
    public function requestAvatarUpload(RequestAvatarUploadRequest $request): RequestAvatarUploadOKResponse;
    /**
     * Resend the Email-Address verification email.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-resend-verification-email
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ResendVerificationEmail\ResendVerificationEmailRequest $request An object representing the request for this operation
     * @return EmptyResponse New Email-Address verification email was sent.
     */
    public function resendVerificationEmail(ResendVerificationEmailRequest $request): EmptyResponse;
    /**
     * Reset RecoveryCodes for MFA.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-reset-recoverycodes
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ResetRecoverycodes\ResetRecoverycodesRequest $request An object representing the request for this operation
     * @return ResetRecoverycodes\ResetRecoverycodesOKResponse Recovery-Codes are reset now. The new Recovery-Codes are in the response body.
     */
    public function resetRecoverycodes(ResetRecoverycodesRequest $request): ResetRecoverycodesOKResponse;
    /**
     * Request a support code.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-support-code-request
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param SupportCodeRequest\SupportCodeRequestRequest $request An object representing the request for this operation
     * @return SupportCodeRequest\SupportCodeRequestOKResponse The requested support code and the expiry.
     */
    public function supportCodeRequest(SupportCodeRequestRequest $request): SupportCodeRequestOKResponse;
    /**
     * Terminate all sessions, except the current session.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-terminate-all-sessions
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param TerminateAllSessions\TerminateAllSessionsRequest $request An object representing the request for this operation
     * @return EmptyResponse All sessions terminated.
     */
    public function terminateAllSessions(TerminateAllSessionsRequest $request): EmptyResponse;
    /**
     * Terminate a specific Session.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-terminate-session
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param TerminateSession\TerminateSessionRequest $request An object representing the request for this operation
     * @return EmptyResponse Session terminated.
     */
    public function terminateSession(TerminateSessionRequest $request): EmptyResponse;
    /**
     * Update your account information.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-update-account
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param UpdateAccount\UpdateAccountRequest $request An object representing the request for this operation
     * @return EmptyResponse Account has been updated.
     */
    public function updateAccount(UpdateAccountRequest $request): EmptyResponse;
    /**
     * Change personal information.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-update-personal-information
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param UpdatePersonalInformation\UpdatePersonalInformationRequest $request An object representing the request for this operation
     * @return EmptyResponse Your personal information has been changed
     */
    public function updatePersonalInformation(UpdatePersonalInformationRequest $request): EmptyResponse;
    /**
     * Update personalized GUI settings.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-update-personalized-settings
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param UpdatePersonalizedSettings\UpdatePersonalizedSettingsRequest $request An object representing the request for this operation
     * @return EmptyResponse PersonalSettings have been updated
     */
    public function updatePersonalizedSettings(UpdatePersonalizedSettingsRequest $request): EmptyResponse;
    /**
     * Verify an added Email-Address.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-verify-email
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param VerifyEmail\VerifyEmailRequest $request An object representing the request for this operation
     * @return EmptyResponse Email has been verified.
     */
    public function verifyEmail(VerifyEmailRequest $request): EmptyResponse;
    /**
     * Verify phone number.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-verify-phone-number
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param VerifyPhoneNumber\VerifyPhoneNumberRequest $request An object representing the request for this operation
     * @return EmptyResponse The phone number has been verified.
     */
    public function verifyPhoneNumber(VerifyPhoneNumberRequest $request): EmptyResponse;
    /**
     * Verify your registration.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/User/operation/user-verify-registration
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param VerifyRegistration\VerifyRegistrationRequest $request An object representing the request for this operation
     * @return EmptyResponse User is verified and you can now login to your user account.
     */
    public function verifyRegistration(VerifyRegistrationRequest $request): EmptyResponse;
}
