<?php

namespace Mittwald\ApiClient\Generated\V2\Clients\User;

use GuzzleHttp\Psr7\Request;

class UserClient
{
    private \GuzzleHttp\Client $client;

    public function __construct(\GuzzleHttp\Client $client)
    {
        $this->client = $client;
    }

    public function deprecatedUserChangeEmail(DeprecatedUserChangeEmail\DeprecatedUserChangeEmailRequest $request) : \Mittwald\ApiClient\Client\EmptyResponse|DeprecatedUserChangeEmail\DeprecatedUserChangeEmail400Response|DeprecatedUserChangeEmail\DeprecatedUserChangeEmailDefaultResponse
    {
        $httpRequest = new Request(DeprecatedUserChangeEmail\DeprecatedUserChangeEmailRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
            400 => DeprecatedUserChangeEmail\DeprecatedUserChangeEmail400Response::fromResponse($httpResponse),
            default => DeprecatedUserChangeEmail\DeprecatedUserChangeEmailDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function deprecatedUserConfirmPasswordReset(DeprecatedUserConfirmPasswordReset\DeprecatedUserConfirmPasswordResetRequest $request) : \Mittwald\ApiClient\Client\EmptyResponse|DeprecatedUserConfirmPasswordReset\DeprecatedUserConfirmPasswordReset400Response|DeprecatedUserConfirmPasswordReset\DeprecatedUserConfirmPasswordResetDefaultResponse
    {
        $httpRequest = new Request(DeprecatedUserConfirmPasswordReset\DeprecatedUserConfirmPasswordResetRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
            400 => DeprecatedUserConfirmPasswordReset\DeprecatedUserConfirmPasswordReset400Response::fromResponse($httpResponse),
            default => DeprecatedUserConfirmPasswordReset\DeprecatedUserConfirmPasswordResetDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function deprecatedUserCreateIssue(DeprecatedUserCreateIssue\DeprecatedUserCreateIssueRequest $request) : DeprecatedUserCreateIssue\DeprecatedUserCreateIssue201Response|DeprecatedUserCreateIssue\DeprecatedUserCreateIssue401Response|DeprecatedUserCreateIssue\DeprecatedUserCreateIssue404Response|DeprecatedUserCreateIssue\DeprecatedUserCreateIssueDefaultResponse
    {
        $httpRequest = new Request(DeprecatedUserCreateIssue\DeprecatedUserCreateIssueRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            201 => DeprecatedUserCreateIssue\DeprecatedUserCreateIssue201Response::fromResponse($httpResponse),
            401 => DeprecatedUserCreateIssue\DeprecatedUserCreateIssue401Response::fromResponse($httpResponse),
            404 => DeprecatedUserCreateIssue\DeprecatedUserCreateIssue404Response::fromResponse($httpResponse),
            default => DeprecatedUserCreateIssue\DeprecatedUserCreateIssueDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function deprecatedUserDeleteApiToken(DeprecatedUserDeleteApiToken\DeprecatedUserDeleteApiTokenRequest $request) : \Mittwald\ApiClient\Client\EmptyResponse|DeprecatedUserDeleteApiToken\DeprecatedUserDeleteApiToken400Response|DeprecatedUserDeleteApiToken\DeprecatedUserDeleteApiTokenDefaultResponse
    {
        $httpRequest = new Request(DeprecatedUserDeleteApiToken\DeprecatedUserDeleteApiTokenRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
            400 => DeprecatedUserDeleteApiToken\DeprecatedUserDeleteApiToken400Response::fromResponse($httpResponse),
            default => DeprecatedUserDeleteApiToken\DeprecatedUserDeleteApiTokenDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function deprecatedUserEditApiToken(DeprecatedUserEditApiToken\DeprecatedUserEditApiTokenRequest $request) : \Mittwald\ApiClient\Client\EmptyResponse|DeprecatedUserEditApiToken\DeprecatedUserEditApiToken400Response|DeprecatedUserEditApiToken\DeprecatedUserEditApiTokenDefaultResponse
    {
        $httpRequest = new Request(DeprecatedUserEditApiToken\DeprecatedUserEditApiTokenRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
            400 => DeprecatedUserEditApiToken\DeprecatedUserEditApiToken400Response::fromResponse($httpResponse),
            default => DeprecatedUserEditApiToken\DeprecatedUserEditApiTokenDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function deprecatedUserDeleteSshKey(DeprecatedUserDeleteSshKey\DeprecatedUserDeleteSshKeyRequest $request) : \Mittwald\ApiClient\Client\EmptyResponse|DeprecatedUserDeleteSshKey\DeprecatedUserDeleteSshKeyDefaultResponse
    {
        $httpRequest = new Request(DeprecatedUserDeleteSshKey\DeprecatedUserDeleteSshKeyRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
            default => DeprecatedUserDeleteSshKey\DeprecatedUserDeleteSshKeyDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function deprecatedUserEditSshKey(DeprecatedUserEditSshKey\DeprecatedUserEditSshKeyRequest $request) : \Mittwald\ApiClient\Client\EmptyResponse|DeprecatedUserEditSshKey\DeprecatedUserEditSshKey400Response|DeprecatedUserEditSshKey\DeprecatedUserEditSshKeyDefaultResponse
    {
        $httpRequest = new Request(DeprecatedUserEditSshKey\DeprecatedUserEditSshKeyRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
            400 => DeprecatedUserEditSshKey\DeprecatedUserEditSshKey400Response::fromResponse($httpResponse),
            default => DeprecatedUserEditSshKey\DeprecatedUserEditSshKeyDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function deprecatedUserDisableMfa(DeprecatedUserDisableMfa\DeprecatedUserDisableMfaRequest $request) : \Mittwald\ApiClient\Client\EmptyResponse|DeprecatedUserDisableMfa\DeprecatedUserDisableMfa400Response|DeprecatedUserDisableMfa\DeprecatedUserDisableMfaDefaultResponse
    {
        $httpRequest = new Request(DeprecatedUserDisableMfa\DeprecatedUserDisableMfaRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
            400 => DeprecatedUserDisableMfa\DeprecatedUserDisableMfa400Response::fromResponse($httpResponse),
            default => DeprecatedUserDisableMfa\DeprecatedUserDisableMfaDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function deprecatedUserInitPasswordReset(DeprecatedUserInitPasswordReset\DeprecatedUserInitPasswordResetRequest $request) : \Mittwald\ApiClient\Client\EmptyResponse|DeprecatedUserInitPasswordReset\DeprecatedUserInitPasswordReset400Response|DeprecatedUserInitPasswordReset\DeprecatedUserInitPasswordResetDefaultResponse
    {
        $httpRequest = new Request(DeprecatedUserInitPasswordReset\DeprecatedUserInitPasswordResetRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
            400 => DeprecatedUserInitPasswordReset\DeprecatedUserInitPasswordReset400Response::fromResponse($httpResponse),
            default => DeprecatedUserInitPasswordReset\DeprecatedUserInitPasswordResetDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function deprecatedUserLogout(DeprecatedUserLogout\DeprecatedUserLogoutRequest $request) : \Mittwald\ApiClient\Client\EmptyResponse|DeprecatedUserLogout\DeprecatedUserLogout400Response|DeprecatedUserLogout\DeprecatedUserLogoutDefaultResponse
    {
        $httpRequest = new Request(DeprecatedUserLogout\DeprecatedUserLogoutRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
            400 => DeprecatedUserLogout\DeprecatedUserLogout400Response::fromResponse($httpResponse),
            default => DeprecatedUserLogout\DeprecatedUserLogoutDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function deprecatedUserResendVerificationEmail(DeprecatedUserResendVerificationEmail\DeprecatedUserResendVerificationEmailRequest $request) : \Mittwald\ApiClient\Client\EmptyResponse|DeprecatedUserResendVerificationEmail\DeprecatedUserResendVerificationEmail400Response|DeprecatedUserResendVerificationEmail\DeprecatedUserResendVerificationEmail403Response|DeprecatedUserResendVerificationEmail\DeprecatedUserResendVerificationEmailDefaultResponse
    {
        $httpRequest = new Request(DeprecatedUserResendVerificationEmail\DeprecatedUserResendVerificationEmailRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
            400 => DeprecatedUserResendVerificationEmail\DeprecatedUserResendVerificationEmail400Response::fromResponse($httpResponse),
            403 => DeprecatedUserResendVerificationEmail\DeprecatedUserResendVerificationEmail403Response::fromResponse($httpResponse),
            default => DeprecatedUserResendVerificationEmail\DeprecatedUserResendVerificationEmailDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function deprecatedUserServiceAvatarRemove(DeprecatedUserServiceAvatarRemove\DeprecatedUserServiceAvatarRemoveRequest $request) : \Mittwald\ApiClient\Client\EmptyResponse|DeprecatedUserServiceAvatarRemove\DeprecatedUserServiceAvatarRemove400Response|DeprecatedUserServiceAvatarRemove\DeprecatedUserServiceAvatarRemoveDefaultResponse
    {
        $httpRequest = new Request(DeprecatedUserServiceAvatarRemove\DeprecatedUserServiceAvatarRemoveRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
            400 => DeprecatedUserServiceAvatarRemove\DeprecatedUserServiceAvatarRemove400Response::fromResponse($httpResponse),
            default => DeprecatedUserServiceAvatarRemove\DeprecatedUserServiceAvatarRemoveDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function deprecatedUserServiceAvatarRequestUpload(DeprecatedUserServiceAvatarRequestUpload\DeprecatedUserServiceAvatarRequestUploadRequest $request) : DeprecatedUserServiceAvatarRequestUpload\DeprecatedUserServiceAvatarRequestUpload200Response|DeprecatedUserServiceAvatarRequestUpload\DeprecatedUserServiceAvatarRequestUpload400Response|DeprecatedUserServiceAvatarRequestUpload\DeprecatedUserServiceAvatarRequestUploadDefaultResponse
    {
        $httpRequest = new Request(DeprecatedUserServiceAvatarRequestUpload\DeprecatedUserServiceAvatarRequestUploadRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => DeprecatedUserServiceAvatarRequestUpload\DeprecatedUserServiceAvatarRequestUpload200Response::fromResponse($httpResponse),
            400 => DeprecatedUserServiceAvatarRequestUpload\DeprecatedUserServiceAvatarRequestUpload400Response::fromResponse($httpResponse),
            default => DeprecatedUserServiceAvatarRequestUpload\DeprecatedUserServiceAvatarRequestUploadDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function deprecatedUserServiceFeedbackCreate(DeprecatedUserServiceFeedbackCreate\DeprecatedUserServiceFeedbackCreateRequest $request) : DeprecatedUserServiceFeedbackCreate\DeprecatedUserServiceFeedbackCreate201Response|DeprecatedUserServiceFeedbackCreate\DeprecatedUserServiceFeedbackCreate401Response|DeprecatedUserServiceFeedbackCreate\DeprecatedUserServiceFeedbackCreate404Response|DeprecatedUserServiceFeedbackCreate\DeprecatedUserServiceFeedbackCreateDefaultResponse
    {
        $httpRequest = new Request(DeprecatedUserServiceFeedbackCreate\DeprecatedUserServiceFeedbackCreateRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            201 => DeprecatedUserServiceFeedbackCreate\DeprecatedUserServiceFeedbackCreate201Response::fromResponse($httpResponse),
            401 => DeprecatedUserServiceFeedbackCreate\DeprecatedUserServiceFeedbackCreate401Response::fromResponse($httpResponse),
            404 => DeprecatedUserServiceFeedbackCreate\DeprecatedUserServiceFeedbackCreate404Response::fromResponse($httpResponse),
            default => DeprecatedUserServiceFeedbackCreate\DeprecatedUserServiceFeedbackCreateDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function deprecatedUserServiceFeedbackList(DeprecatedUserServiceFeedbackList\DeprecatedUserServiceFeedbackListRequest $request) : DeprecatedUserServiceFeedbackList\DeprecatedUserServiceFeedbackList200Response|DeprecatedUserServiceFeedbackList\DeprecatedUserServiceFeedbackListDefaultResponse
    {
        $httpRequest = new Request(DeprecatedUserServiceFeedbackList\DeprecatedUserServiceFeedbackListRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => DeprecatedUserServiceFeedbackList\DeprecatedUserServiceFeedbackList200Response::fromResponse($httpResponse),
            default => DeprecatedUserServiceFeedbackList\DeprecatedUserServiceFeedbackListDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function deprecatedUserServiceIssueNew(DeprecatedUserServiceIssueNew\DeprecatedUserServiceIssueNewRequest $request) : \Mittwald\ApiClient\Client\EmptyResponse|DeprecatedUserServiceIssueNew\DeprecatedUserServiceIssueNewDefaultResponse
    {
        $httpRequest = new Request(DeprecatedUserServiceIssueNew\DeprecatedUserServiceIssueNewRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            201 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
            default => DeprecatedUserServiceIssueNew\DeprecatedUserServiceIssueNewDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function deprecatedUserServicePersonalInformationUpdate(DeprecatedUserServicePersonalInformationUpdate\DeprecatedUserServicePersonalInformationUpdateRequest $request) : \Mittwald\ApiClient\Client\EmptyResponse|DeprecatedUserServicePersonalInformationUpdate\DeprecatedUserServicePersonalInformationUpdate400Response|DeprecatedUserServicePersonalInformationUpdate\DeprecatedUserServicePersonalInformationUpdateDefaultResponse
    {
        $httpRequest = new Request(DeprecatedUserServicePersonalInformationUpdate\DeprecatedUserServicePersonalInformationUpdateRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
            400 => DeprecatedUserServicePersonalInformationUpdate\DeprecatedUserServicePersonalInformationUpdate400Response::fromResponse($httpResponse),
            default => DeprecatedUserServicePersonalInformationUpdate\DeprecatedUserServicePersonalInformationUpdateDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function deprecatedUserServiceUserGet(DeprecatedUserServiceUserGet\DeprecatedUserServiceUserGetRequest $request) : DeprecatedUserServiceUserGet\DeprecatedUserServiceUserGet200Response|DeprecatedUserServiceUserGet\DeprecatedUserServiceUserGet403Response|DeprecatedUserServiceUserGet\DeprecatedUserServiceUserGet404Response|DeprecatedUserServiceUserGet\DeprecatedUserServiceUserGet412Response|DeprecatedUserServiceUserGet\DeprecatedUserServiceUserGetDefaultResponse
    {
        $httpRequest = new Request(DeprecatedUserServiceUserGet\DeprecatedUserServiceUserGetRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => DeprecatedUserServiceUserGet\DeprecatedUserServiceUserGet200Response::fromResponse($httpResponse),
            403 => DeprecatedUserServiceUserGet\DeprecatedUserServiceUserGet403Response::fromResponse($httpResponse),
            404 => DeprecatedUserServiceUserGet\DeprecatedUserServiceUserGet404Response::fromResponse($httpResponse),
            412 => DeprecatedUserServiceUserGet\DeprecatedUserServiceUserGet412Response::fromResponse($httpResponse),
            default => DeprecatedUserServiceUserGet\DeprecatedUserServiceUserGetDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function deprecatedUserServicePersonalizedSettingsGet(DeprecatedUserServicePersonalizedSettingsGet\DeprecatedUserServicePersonalizedSettingsGetRequest $request) : DeprecatedUserServicePersonalizedSettingsGet\DeprecatedUserServicePersonalizedSettingsGet200Response|DeprecatedUserServicePersonalizedSettingsGet\DeprecatedUserServicePersonalizedSettingsGetDefaultResponse
    {
        $httpRequest = new Request(DeprecatedUserServicePersonalizedSettingsGet\DeprecatedUserServicePersonalizedSettingsGetRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => DeprecatedUserServicePersonalizedSettingsGet\DeprecatedUserServicePersonalizedSettingsGet200Response::fromResponse($httpResponse),
            default => DeprecatedUserServicePersonalizedSettingsGet\DeprecatedUserServicePersonalizedSettingsGetDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function deprecatedUserServicePersonalizedSettingsUpdate(DeprecatedUserServicePersonalizedSettingsUpdate\DeprecatedUserServicePersonalizedSettingsUpdateRequest $request) : \Mittwald\ApiClient\Client\EmptyResponse|DeprecatedUserServicePersonalizedSettingsUpdate\DeprecatedUserServicePersonalizedSettingsUpdate400Response|DeprecatedUserServicePersonalizedSettingsUpdate\DeprecatedUserServicePersonalizedSettingsUpdateDefaultResponse
    {
        $httpRequest = new Request(DeprecatedUserServicePersonalizedSettingsUpdate\DeprecatedUserServicePersonalizedSettingsUpdateRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
            400 => DeprecatedUserServicePersonalizedSettingsUpdate\DeprecatedUserServicePersonalizedSettingsUpdate400Response::fromResponse($httpResponse),
            default => DeprecatedUserServicePersonalizedSettingsUpdate\DeprecatedUserServicePersonalizedSettingsUpdateDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function deprecatedUserServicePhoneNumberAdd(DeprecatedUserServicePhoneNumberAdd\DeprecatedUserServicePhoneNumberAddRequest $request) : \Mittwald\ApiClient\Client\EmptyResponse|DeprecatedUserServicePhoneNumberAdd\DeprecatedUserServicePhoneNumberAdd400Response|DeprecatedUserServicePhoneNumberAdd\DeprecatedUserServicePhoneNumberAdd409Response|DeprecatedUserServicePhoneNumberAdd\DeprecatedUserServicePhoneNumberAddDefaultResponse
    {
        $httpRequest = new Request(DeprecatedUserServicePhoneNumberAdd\DeprecatedUserServicePhoneNumberAddRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
            400 => DeprecatedUserServicePhoneNumberAdd\DeprecatedUserServicePhoneNumberAdd400Response::fromResponse($httpResponse),
            409 => DeprecatedUserServicePhoneNumberAdd\DeprecatedUserServicePhoneNumberAdd409Response::fromResponse($httpResponse),
            default => DeprecatedUserServicePhoneNumberAdd\DeprecatedUserServicePhoneNumberAddDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function deprecatedUserServicePhoneNumberRemove(DeprecatedUserServicePhoneNumberRemove\DeprecatedUserServicePhoneNumberRemoveRequest $request) : \Mittwald\ApiClient\Client\EmptyResponse|DeprecatedUserServicePhoneNumberRemove\DeprecatedUserServicePhoneNumberRemove400Response|DeprecatedUserServicePhoneNumberRemove\DeprecatedUserServicePhoneNumberRemoveDefaultResponse
    {
        $httpRequest = new Request(DeprecatedUserServicePhoneNumberRemove\DeprecatedUserServicePhoneNumberRemoveRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
            400 => DeprecatedUserServicePhoneNumberRemove\DeprecatedUserServicePhoneNumberRemove400Response::fromResponse($httpResponse),
            default => DeprecatedUserServicePhoneNumberRemove\DeprecatedUserServicePhoneNumberRemoveDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function deprecatedUserServicePhoneNumberVerify(DeprecatedUserServicePhoneNumberVerify\DeprecatedUserServicePhoneNumberVerifyRequest $request) : \Mittwald\ApiClient\Client\EmptyResponse|DeprecatedUserServicePhoneNumberVerify\DeprecatedUserServicePhoneNumberVerify400Response|DeprecatedUserServicePhoneNumberVerify\DeprecatedUserServicePhoneNumberVerify404Response|DeprecatedUserServicePhoneNumberVerify\DeprecatedUserServicePhoneNumberVerify409Response|DeprecatedUserServicePhoneNumberVerify\DeprecatedUserServicePhoneNumberVerifyDefaultResponse
    {
        $httpRequest = new Request(DeprecatedUserServicePhoneNumberVerify\DeprecatedUserServicePhoneNumberVerifyRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
            400 => DeprecatedUserServicePhoneNumberVerify\DeprecatedUserServicePhoneNumberVerify400Response::fromResponse($httpResponse),
            404 => DeprecatedUserServicePhoneNumberVerify\DeprecatedUserServicePhoneNumberVerify404Response::fromResponse($httpResponse),
            409 => DeprecatedUserServicePhoneNumberVerify\DeprecatedUserServicePhoneNumberVerify409Response::fromResponse($httpResponse),
            default => DeprecatedUserServicePhoneNumberVerify\DeprecatedUserServicePhoneNumberVerifyDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function deprecatedUserServiceUserGetOwn(DeprecatedUserServiceUserGetOwn\DeprecatedUserServiceUserGetOwnRequest $request) : DeprecatedUserServiceUserGetOwn\DeprecatedUserServiceUserGetOwn200Response|DeprecatedUserServiceUserGetOwn\DeprecatedUserServiceUserGetOwnDefaultResponse
    {
        $httpRequest = new Request(DeprecatedUserServiceUserGetOwn\DeprecatedUserServiceUserGetOwnRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => DeprecatedUserServiceUserGetOwn\DeprecatedUserServiceUserGetOwn200Response::fromResponse($httpResponse),
            default => DeprecatedUserServiceUserGetOwn\DeprecatedUserServiceUserGetOwnDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function deprecatedUserTerminateAllSessions(DeprecatedUserTerminateAllSessions\DeprecatedUserTerminateAllSessionsRequest $request) : \Mittwald\ApiClient\Client\EmptyResponse|DeprecatedUserTerminateAllSessions\DeprecatedUserTerminateAllSessionsDefaultResponse
    {
        $httpRequest = new Request(DeprecatedUserTerminateAllSessions\DeprecatedUserTerminateAllSessionsRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
            default => DeprecatedUserTerminateAllSessions\DeprecatedUserTerminateAllSessionsDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function deprecatedUserTerminateSession(DeprecatedUserTerminateSession\DeprecatedUserTerminateSessionRequest $request) : \Mittwald\ApiClient\Client\EmptyResponse|DeprecatedUserTerminateSession\DeprecatedUserTerminateSession404Response|DeprecatedUserTerminateSession\DeprecatedUserTerminateSessionDefaultResponse
    {
        $httpRequest = new Request(DeprecatedUserTerminateSession\DeprecatedUserTerminateSessionRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
            404 => DeprecatedUserTerminateSession\DeprecatedUserTerminateSession404Response::fromResponse($httpResponse),
            default => DeprecatedUserTerminateSession\DeprecatedUserTerminateSessionDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function deprecatedUserUpdateAccount(DeprecatedUserUpdateAccount\DeprecatedUserUpdateAccountRequest $request) : \Mittwald\ApiClient\Client\EmptyResponse|DeprecatedUserUpdateAccount\DeprecatedUserUpdateAccount400Response|DeprecatedUserUpdateAccount\DeprecatedUserUpdateAccountDefaultResponse
    {
        $httpRequest = new Request(DeprecatedUserUpdateAccount\DeprecatedUserUpdateAccountRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
            400 => DeprecatedUserUpdateAccount\DeprecatedUserUpdateAccount400Response::fromResponse($httpResponse),
            default => DeprecatedUserUpdateAccount\DeprecatedUserUpdateAccountDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function deprecatedUserVerifyEmail(DeprecatedUserVerifyEmail\DeprecatedUserVerifyEmailRequest $request) : \Mittwald\ApiClient\Client\EmptyResponse|DeprecatedUserVerifyEmail\DeprecatedUserVerifyEmail400Response|DeprecatedUserVerifyEmail\DeprecatedUserVerifyEmail404Response|DeprecatedUserVerifyEmail\DeprecatedUserVerifyEmailDefaultResponse
    {
        $httpRequest = new Request(DeprecatedUserVerifyEmail\DeprecatedUserVerifyEmailRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
            400 => DeprecatedUserVerifyEmail\DeprecatedUserVerifyEmail400Response::fromResponse($httpResponse),
            404 => DeprecatedUserVerifyEmail\DeprecatedUserVerifyEmail404Response::fromResponse($httpResponse),
            default => DeprecatedUserVerifyEmail\DeprecatedUserVerifyEmailDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function addPhoneNumber(AddPhoneNumber\AddPhoneNumberRequest $request) : \Mittwald\ApiClient\Client\EmptyResponse|AddPhoneNumber\AddPhoneNumber400Response|AddPhoneNumber\AddPhoneNumber403Response|AddPhoneNumber\AddPhoneNumber409Response|AddPhoneNumber\AddPhoneNumberDefaultResponse
    {
        $httpRequest = new Request(AddPhoneNumber\AddPhoneNumberRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
            400 => AddPhoneNumber\AddPhoneNumber400Response::fromResponse($httpResponse),
            403 => AddPhoneNumber\AddPhoneNumber403Response::fromResponse($httpResponse),
            409 => AddPhoneNumber\AddPhoneNumber409Response::fromResponse($httpResponse),
            default => AddPhoneNumber\AddPhoneNumberDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function removePhoneNumber(RemovePhoneNumber\RemovePhoneNumberRequest $request) : \Mittwald\ApiClient\Client\EmptyResponse|RemovePhoneNumber\RemovePhoneNumber400Response|RemovePhoneNumber\RemovePhoneNumberDefaultResponse
    {
        $httpRequest = new Request(RemovePhoneNumber\RemovePhoneNumberRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
            400 => RemovePhoneNumber\RemovePhoneNumber400Response::fromResponse($httpResponse),
            default => RemovePhoneNumber\RemovePhoneNumberDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function authenticateMfa(AuthenticateMfa\AuthenticateMfaRequest $request) : \Mittwald\ApiClient\Client\UntypedResponse|AuthenticateMfa\AuthenticateMfa200Response|AuthenticateMfa\AuthenticateMfa400Response|AuthenticateMfa\AuthenticateMfaDefaultResponse
    {
        $httpRequest = new Request(AuthenticateMfa\AuthenticateMfaRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => AuthenticateMfa\AuthenticateMfa200Response::fromResponse($httpResponse),
            400 => AuthenticateMfa\AuthenticateMfa400Response::fromResponse($httpResponse),
            408 => \Mittwald\ApiClient\Client\UntypedResponse::fromResponse($httpResponse),
            default => AuthenticateMfa\AuthenticateMfaDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function authenticate(Authenticate\AuthenticateRequest $request) : Authenticate\Authenticate200Response|Authenticate\Authenticate202Response|Authenticate\Authenticate400Response|Authenticate\Authenticate401Response|Authenticate\AuthenticateDefaultResponse
    {
        $httpRequest = new Request(Authenticate\AuthenticateRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => Authenticate\Authenticate200Response::fromResponse($httpResponse),
            202 => Authenticate\Authenticate202Response::fromResponse($httpResponse),
            400 => Authenticate\Authenticate400Response::fromResponse($httpResponse),
            401 => Authenticate\Authenticate401Response::fromResponse($httpResponse),
            default => Authenticate\AuthenticateDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function changeEmail(ChangeEmail\ChangeEmailRequest $request) : \Mittwald\ApiClient\Client\EmptyResponse|ChangeEmail\ChangeEmail400Response|ChangeEmail\ChangeEmailDefaultResponse
    {
        $httpRequest = new Request(ChangeEmail\ChangeEmailRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
            400 => ChangeEmail\ChangeEmail400Response::fromResponse($httpResponse),
            default => ChangeEmail\ChangeEmailDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function getOwnEmail(GetOwnEmail\GetOwnEmailRequest $request) : GetOwnEmail\GetOwnEmail200Response|GetOwnEmail\GetOwnEmail404Response|GetOwnEmail\GetOwnEmailDefaultResponse
    {
        $httpRequest = new Request(GetOwnEmail\GetOwnEmailRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => GetOwnEmail\GetOwnEmail200Response::fromResponse($httpResponse),
            404 => GetOwnEmail\GetOwnEmail404Response::fromResponse($httpResponse),
            default => GetOwnEmail\GetOwnEmailDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function changePassword(ChangePassword\ChangePasswordRequest $request) : \Mittwald\ApiClient\Client\UntypedResponse|ChangePassword\ChangePassword200Response|ChangePassword\ChangePassword400Response|ChangePassword\ChangePasswordDefaultResponse
    {
        $httpRequest = new Request(ChangePassword\ChangePasswordRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => ChangePassword\ChangePassword200Response::fromResponse($httpResponse),
            202 => \Mittwald\ApiClient\Client\UntypedResponse::fromResponse($httpResponse),
            400 => ChangePassword\ChangePassword400Response::fromResponse($httpResponse),
            default => ChangePassword\ChangePasswordDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function checkToken(CheckToken\CheckTokenRequest $request) : CheckToken\CheckToken200Response|CheckToken\CheckTokenDefaultResponse
    {
        $httpRequest = new Request(CheckToken\CheckTokenRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => CheckToken\CheckToken200Response::fromResponse($httpResponse),
            default => CheckToken\CheckTokenDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function confirmMfa(ConfirmMfa\ConfirmMfaRequest $request) : ConfirmMfa\ConfirmMfa200Response|ConfirmMfa\ConfirmMfa400Response|ConfirmMfa\ConfirmMfaDefaultResponse
    {
        $httpRequest = new Request(ConfirmMfa\ConfirmMfaRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => ConfirmMfa\ConfirmMfa200Response::fromResponse($httpResponse),
            400 => ConfirmMfa\ConfirmMfa400Response::fromResponse($httpResponse),
            default => ConfirmMfa\ConfirmMfaDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function disableMfa(DisableMfa\DisableMfaRequest $request) : \Mittwald\ApiClient\Client\EmptyResponse|DisableMfa\DisableMfa400Response|DisableMfa\DisableMfaDefaultResponse
    {
        $httpRequest = new Request(DisableMfa\DisableMfaRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
            400 => DisableMfa\DisableMfa400Response::fromResponse($httpResponse),
            default => DisableMfa\DisableMfaDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function getMfaStatus(GetMfaStatus\GetMfaStatusRequest $request) : GetMfaStatus\GetMfaStatus200Response|GetMfaStatus\GetMfaStatusDefaultResponse
    {
        $httpRequest = new Request(GetMfaStatus\GetMfaStatusRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => GetMfaStatus\GetMfaStatus200Response::fromResponse($httpResponse),
            default => GetMfaStatus\GetMfaStatusDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function resetRecoverycodes(ResetRecoverycodes\ResetRecoverycodesRequest $request) : ResetRecoverycodes\ResetRecoverycodes200Response|ResetRecoverycodes\ResetRecoverycodes400Response|ResetRecoverycodes\ResetRecoverycodesDefaultResponse
    {
        $httpRequest = new Request(ResetRecoverycodes\ResetRecoverycodesRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => ResetRecoverycodes\ResetRecoverycodes200Response::fromResponse($httpResponse),
            400 => ResetRecoverycodes\ResetRecoverycodes400Response::fromResponse($httpResponse),
            default => ResetRecoverycodes\ResetRecoverycodesDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function confirmPasswordReset(ConfirmPasswordReset\ConfirmPasswordResetRequest $request) : \Mittwald\ApiClient\Client\EmptyResponse|ConfirmPasswordReset\ConfirmPasswordReset400Response|ConfirmPasswordReset\ConfirmPasswordResetDefaultResponse
    {
        $httpRequest = new Request(ConfirmPasswordReset\ConfirmPasswordResetRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
            400 => ConfirmPasswordReset\ConfirmPasswordReset400Response::fromResponse($httpResponse),
            default => ConfirmPasswordReset\ConfirmPasswordResetDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function createApiToken(CreateApiToken\CreateApiTokenRequest $request) : CreateApiToken\CreateApiToken201Response|CreateApiToken\CreateApiToken400Response|CreateApiToken\CreateApiTokenDefaultResponse
    {
        $httpRequest = new Request(CreateApiToken\CreateApiTokenRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            201 => CreateApiToken\CreateApiToken201Response::fromResponse($httpResponse),
            400 => CreateApiToken\CreateApiToken400Response::fromResponse($httpResponse),
            default => CreateApiToken\CreateApiTokenDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function listApiTokens(ListApiTokens\ListApiTokensRequest $request) : ListApiTokens\ListApiTokens200Response|ListApiTokens\ListApiTokensDefaultResponse
    {
        $httpRequest = new Request(ListApiTokens\ListApiTokensRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => ListApiTokens\ListApiTokens200Response::fromResponse($httpResponse),
            default => ListApiTokens\ListApiTokensDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function createFeedback(CreateFeedback\CreateFeedbackRequest $request) : CreateFeedback\CreateFeedback201Response|CreateFeedback\CreateFeedback401Response|CreateFeedback\CreateFeedback404Response|CreateFeedback\CreateFeedbackDefaultResponse
    {
        $httpRequest = new Request(CreateFeedback\CreateFeedbackRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            201 => CreateFeedback\CreateFeedback201Response::fromResponse($httpResponse),
            401 => CreateFeedback\CreateFeedback401Response::fromResponse($httpResponse),
            404 => CreateFeedback\CreateFeedback404Response::fromResponse($httpResponse),
            default => CreateFeedback\CreateFeedbackDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function createSshKey(CreateSshKey\CreateSshKeyRequest $request) : \Mittwald\ApiClient\Client\EmptyResponse|CreateSshKey\CreateSshKey400Response|CreateSshKey\CreateSshKeyDefaultResponse
    {
        $httpRequest = new Request(CreateSshKey\CreateSshKeyRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            201 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
            400 => CreateSshKey\CreateSshKey400Response::fromResponse($httpResponse),
            default => CreateSshKey\CreateSshKeyDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function listSshKeys(ListSshKeys\ListSshKeysRequest $request) : ListSshKeys\ListSshKeys200Response|ListSshKeys\ListSshKeysDefaultResponse
    {
        $httpRequest = new Request(ListSshKeys\ListSshKeysRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => ListSshKeys\ListSshKeys200Response::fromResponse($httpResponse),
            default => ListSshKeys\ListSshKeysDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function deleteApiToken(DeleteApiToken\DeleteApiTokenRequest $request) : \Mittwald\ApiClient\Client\EmptyResponse|DeleteApiToken\DeleteApiToken400Response|DeleteApiToken\DeleteApiTokenDefaultResponse
    {
        $httpRequest = new Request(DeleteApiToken\DeleteApiTokenRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
            400 => DeleteApiToken\DeleteApiToken400Response::fromResponse($httpResponse),
            default => DeleteApiToken\DeleteApiTokenDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function editApiToken(EditApiToken\EditApiTokenRequest $request) : \Mittwald\ApiClient\Client\EmptyResponse|EditApiToken\EditApiToken400Response|EditApiToken\EditApiTokenDefaultResponse
    {
        $httpRequest = new Request(EditApiToken\EditApiTokenRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
            400 => EditApiToken\EditApiToken400Response::fromResponse($httpResponse),
            default => EditApiToken\EditApiTokenDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function getApiToken(GetApiToken\GetApiTokenRequest $request) : GetApiToken\GetApiToken200Response|GetApiToken\GetApiToken404Response|GetApiToken\GetApiTokenDefaultResponse
    {
        $httpRequest = new Request(GetApiToken\GetApiTokenRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => GetApiToken\GetApiToken200Response::fromResponse($httpResponse),
            404 => GetApiToken\GetApiToken404Response::fromResponse($httpResponse),
            default => GetApiToken\GetApiTokenDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function deleteSshKey(DeleteSshKey\DeleteSshKeyRequest $request) : \Mittwald\ApiClient\Client\EmptyResponse|DeleteSshKey\DeleteSshKeyDefaultResponse
    {
        $httpRequest = new Request(DeleteSshKey\DeleteSshKeyRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
            default => DeleteSshKey\DeleteSshKeyDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function editSshKey(EditSshKey\EditSshKeyRequest $request) : \Mittwald\ApiClient\Client\EmptyResponse|EditSshKey\EditSshKey400Response|EditSshKey\EditSshKeyDefaultResponse
    {
        $httpRequest = new Request(EditSshKey\EditSshKeyRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
            400 => EditSshKey\EditSshKey400Response::fromResponse($httpResponse),
            default => EditSshKey\EditSshKeyDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function getSshKey(GetSshKey\GetSshKeyRequest $request) : GetSshKey\GetSshKey200Response|GetSshKey\GetSshKey404Response|GetSshKey\GetSshKeyDefaultResponse
    {
        $httpRequest = new Request(GetSshKey\GetSshKeyRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => GetSshKey\GetSshKey200Response::fromResponse($httpResponse),
            404 => GetSshKey\GetSshKey404Response::fromResponse($httpResponse),
            default => GetSshKey\GetSshKeyDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function deleteUser(DeleteUser\DeleteUserRequest $request) : \Mittwald\ApiClient\Client\EmptyResponse|\Mittwald\ApiClient\Client\UntypedResponse|DeleteUser\DeleteUser400Response|DeleteUser\DeleteUser409Response|DeleteUser\DeleteUserDefaultResponse
    {
        $httpRequest = new Request(DeleteUser\DeleteUserRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
            202 => \Mittwald\ApiClient\Client\UntypedResponse::fromResponse($httpResponse),
            400 => DeleteUser\DeleteUser400Response::fromResponse($httpResponse),
            409 => DeleteUser\DeleteUser409Response::fromResponse($httpResponse),
            default => DeleteUser\DeleteUserDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function getOwnAccount(GetOwnAccount\GetOwnAccountRequest $request) : GetOwnAccount\GetOwnAccount200Response|GetOwnAccount\GetOwnAccountDefaultResponse
    {
        $httpRequest = new Request(GetOwnAccount\GetOwnAccountRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => GetOwnAccount\GetOwnAccount200Response::fromResponse($httpResponse),
            default => GetOwnAccount\GetOwnAccountDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function updateAccount(UpdateAccount\UpdateAccountRequest $request) : \Mittwald\ApiClient\Client\EmptyResponse|UpdateAccount\UpdateAccount400Response|UpdateAccount\UpdateAccountDefaultResponse
    {
        $httpRequest = new Request(UpdateAccount\UpdateAccountRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
            400 => UpdateAccount\UpdateAccount400Response::fromResponse($httpResponse),
            default => UpdateAccount\UpdateAccountDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function getPasswordUpdatedAt(GetPasswordUpdatedAt\GetPasswordUpdatedAtRequest $request) : GetPasswordUpdatedAt\GetPasswordUpdatedAt200Response|GetPasswordUpdatedAt\GetPasswordUpdatedAtDefaultResponse
    {
        $httpRequest = new Request(GetPasswordUpdatedAt\GetPasswordUpdatedAtRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => GetPasswordUpdatedAt\GetPasswordUpdatedAt200Response::fromResponse($httpResponse),
            default => GetPasswordUpdatedAt\GetPasswordUpdatedAtDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function getPersonalizedSettings(GetPersonalizedSettings\GetPersonalizedSettingsRequest $request) : GetPersonalizedSettings\GetPersonalizedSettings200Response|GetPersonalizedSettings\GetPersonalizedSettingsDefaultResponse
    {
        $httpRequest = new Request(GetPersonalizedSettings\GetPersonalizedSettingsRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => GetPersonalizedSettings\GetPersonalizedSettings200Response::fromResponse($httpResponse),
            default => GetPersonalizedSettings\GetPersonalizedSettingsDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function updatePersonalizedSettings(UpdatePersonalizedSettings\UpdatePersonalizedSettingsRequest $request) : \Mittwald\ApiClient\Client\EmptyResponse|UpdatePersonalizedSettings\UpdatePersonalizedSettings400Response|UpdatePersonalizedSettings\UpdatePersonalizedSettingsDefaultResponse
    {
        $httpRequest = new Request(UpdatePersonalizedSettings\UpdatePersonalizedSettingsRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
            400 => UpdatePersonalizedSettings\UpdatePersonalizedSettings400Response::fromResponse($httpResponse),
            default => UpdatePersonalizedSettings\UpdatePersonalizedSettingsDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function getSession(GetSession\GetSessionRequest $request) : GetSession\GetSession200Response|GetSession\GetSession404Response|GetSession\GetSessionDefaultResponse
    {
        $httpRequest = new Request(GetSession\GetSessionRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => GetSession\GetSession200Response::fromResponse($httpResponse),
            404 => GetSession\GetSession404Response::fromResponse($httpResponse),
            default => GetSession\GetSessionDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function terminateSession(TerminateSession\TerminateSessionRequest $request) : \Mittwald\ApiClient\Client\EmptyResponse|TerminateSession\TerminateSession404Response|TerminateSession\TerminateSessionDefaultResponse
    {
        $httpRequest = new Request(TerminateSession\TerminateSessionRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
            404 => TerminateSession\TerminateSession404Response::fromResponse($httpResponse),
            default => TerminateSession\TerminateSessionDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function getUser(GetUser\GetUserRequest $request) : GetUser\GetUser200Response|GetUser\GetUser403Response|GetUser\GetUser404Response|GetUser\GetUser412Response|GetUser\GetUserDefaultResponse
    {
        $httpRequest = new Request(GetUser\GetUserRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => GetUser\GetUser200Response::fromResponse($httpResponse),
            403 => GetUser\GetUser403Response::fromResponse($httpResponse),
            404 => GetUser\GetUser404Response::fromResponse($httpResponse),
            412 => GetUser\GetUser412Response::fromResponse($httpResponse),
            default => GetUser\GetUserDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function updatePersonalInformation(UpdatePersonalInformation\UpdatePersonalInformationRequest $request) : \Mittwald\ApiClient\Client\EmptyResponse|UpdatePersonalInformation\UpdatePersonalInformation400Response|UpdatePersonalInformation\UpdatePersonalInformationDefaultResponse
    {
        $httpRequest = new Request(UpdatePersonalInformation\UpdatePersonalInformationRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
            400 => UpdatePersonalInformation\UpdatePersonalInformation400Response::fromResponse($httpResponse),
            default => UpdatePersonalInformation\UpdatePersonalInformationDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function initMfa(InitMfa\InitMfaRequest $request) : InitMfa\InitMfa200Response|InitMfa\InitMfa400Response|InitMfa\InitMfaDefaultResponse
    {
        $httpRequest = new Request(InitMfa\InitMfaRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => InitMfa\InitMfa200Response::fromResponse($httpResponse),
            400 => InitMfa\InitMfa400Response::fromResponse($httpResponse),
            default => InitMfa\InitMfaDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function initPasswordReset(InitPasswordReset\InitPasswordResetRequest $request) : \Mittwald\ApiClient\Client\EmptyResponse|InitPasswordReset\InitPasswordReset400Response|InitPasswordReset\InitPasswordResetDefaultResponse
    {
        $httpRequest = new Request(InitPasswordReset\InitPasswordResetRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            201 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
            400 => InitPasswordReset\InitPasswordReset400Response::fromResponse($httpResponse),
            default => InitPasswordReset\InitPasswordResetDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function listFeedback(ListFeedback\ListFeedbackRequest $request) : ListFeedback\ListFeedback200Response|ListFeedback\ListFeedbackDefaultResponse
    {
        $httpRequest = new Request(ListFeedback\ListFeedbackRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => ListFeedback\ListFeedback200Response::fromResponse($httpResponse),
            default => ListFeedback\ListFeedbackDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function listSessions(ListSessions\ListSessionsRequest $request) : ListSessions\ListSessions200Response|ListSessions\ListSessionsDefaultResponse
    {
        $httpRequest = new Request(ListSessions\ListSessionsRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => ListSessions\ListSessions200Response::fromResponse($httpResponse),
            default => ListSessions\ListSessionsDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function terminateAllSessions(TerminateAllSessions\TerminateAllSessionsRequest $request) : \Mittwald\ApiClient\Client\EmptyResponse|TerminateAllSessions\TerminateAllSessionsDefaultResponse
    {
        $httpRequest = new Request(TerminateAllSessions\TerminateAllSessionsRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
            default => TerminateAllSessions\TerminateAllSessionsDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function logout(Logout\LogoutRequest $request) : \Mittwald\ApiClient\Client\EmptyResponse|Logout\Logout400Response|Logout\LogoutDefaultResponse
    {
        $httpRequest = new Request(Logout\LogoutRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
            400 => Logout\Logout400Response::fromResponse($httpResponse),
            default => Logout\LogoutDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function register(Register\RegisterRequest $request) : Register\Register201Response|Register\Register400Response|Register\RegisterDefaultResponse
    {
        $httpRequest = new Request(Register\RegisterRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            201 => Register\Register201Response::fromResponse($httpResponse),
            400 => Register\Register400Response::fromResponse($httpResponse),
            default => Register\RegisterDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function removeAvatar(RemoveAvatar\RemoveAvatarRequest $request) : \Mittwald\ApiClient\Client\EmptyResponse|RemoveAvatar\RemoveAvatar400Response|RemoveAvatar\RemoveAvatarDefaultResponse
    {
        $httpRequest = new Request(RemoveAvatar\RemoveAvatarRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
            400 => RemoveAvatar\RemoveAvatar400Response::fromResponse($httpResponse),
            default => RemoveAvatar\RemoveAvatarDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function requestAvatarUpload(RequestAvatarUpload\RequestAvatarUploadRequest $request) : RequestAvatarUpload\RequestAvatarUpload200Response|RequestAvatarUpload\RequestAvatarUpload400Response|RequestAvatarUpload\RequestAvatarUploadDefaultResponse
    {
        $httpRequest = new Request(RequestAvatarUpload\RequestAvatarUploadRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => RequestAvatarUpload\RequestAvatarUpload200Response::fromResponse($httpResponse),
            400 => RequestAvatarUpload\RequestAvatarUpload400Response::fromResponse($httpResponse),
            default => RequestAvatarUpload\RequestAvatarUploadDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function resendVerificationEmail(ResendVerificationEmail\ResendVerificationEmailRequest $request) : \Mittwald\ApiClient\Client\EmptyResponse|ResendVerificationEmail\ResendVerificationEmail400Response|ResendVerificationEmail\ResendVerificationEmail403Response|ResendVerificationEmail\ResendVerificationEmailDefaultResponse
    {
        $httpRequest = new Request(ResendVerificationEmail\ResendVerificationEmailRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
            400 => ResendVerificationEmail\ResendVerificationEmail400Response::fromResponse($httpResponse),
            403 => ResendVerificationEmail\ResendVerificationEmail403Response::fromResponse($httpResponse),
            default => ResendVerificationEmail\ResendVerificationEmailDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function supportCodeRequest(SupportCodeRequest\SupportCodeRequestRequest $request) : SupportCodeRequest\SupportCodeRequest200Response|SupportCodeRequest\SupportCodeRequestDefaultResponse
    {
        $httpRequest = new Request(SupportCodeRequest\SupportCodeRequestRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => SupportCodeRequest\SupportCodeRequest200Response::fromResponse($httpResponse),
            default => SupportCodeRequest\SupportCodeRequestDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function verifyEmail(VerifyEmail\VerifyEmailRequest $request) : \Mittwald\ApiClient\Client\EmptyResponse|VerifyEmail\VerifyEmail400Response|VerifyEmail\VerifyEmail404Response|VerifyEmail\VerifyEmailDefaultResponse
    {
        $httpRequest = new Request(VerifyEmail\VerifyEmailRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
            400 => VerifyEmail\VerifyEmail400Response::fromResponse($httpResponse),
            404 => VerifyEmail\VerifyEmail404Response::fromResponse($httpResponse),
            default => VerifyEmail\VerifyEmailDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function verifyPhoneNumber(VerifyPhoneNumber\VerifyPhoneNumberRequest $request) : \Mittwald\ApiClient\Client\EmptyResponse|VerifyPhoneNumber\VerifyPhoneNumber400Response|VerifyPhoneNumber\VerifyPhoneNumber404Response|VerifyPhoneNumber\VerifyPhoneNumber409Response|VerifyPhoneNumber\VerifyPhoneNumberDefaultResponse
    {
        $httpRequest = new Request(VerifyPhoneNumber\VerifyPhoneNumberRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
            400 => VerifyPhoneNumber\VerifyPhoneNumber400Response::fromResponse($httpResponse),
            404 => VerifyPhoneNumber\VerifyPhoneNumber404Response::fromResponse($httpResponse),
            409 => VerifyPhoneNumber\VerifyPhoneNumber409Response::fromResponse($httpResponse),
            default => VerifyPhoneNumber\VerifyPhoneNumberDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function verifyRegistration(VerifyRegistration\VerifyRegistrationRequest $request) : \Mittwald\ApiClient\Client\EmptyResponse|VerifyRegistration\VerifyRegistration400Response|VerifyRegistration\VerifyRegistration404Response|VerifyRegistration\VerifyRegistrationDefaultResponse
    {
        $httpRequest = new Request(VerifyRegistration\VerifyRegistrationRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
            400 => VerifyRegistration\VerifyRegistration400Response::fromResponse($httpResponse),
            404 => VerifyRegistration\VerifyRegistration404Response::fromResponse($httpResponse),
            default => VerifyRegistration\VerifyRegistrationDefaultResponse::fromResponse($httpResponse),
        };
    }
}

