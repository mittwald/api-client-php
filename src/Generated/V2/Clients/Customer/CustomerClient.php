<?php

namespace Mittwald\ApiClient\Generated\V2\Clients\Customer;

use GuzzleHttp\Psr7\Request;

class CustomerClient
{
    private \GuzzleHttp\Client $client;

    public function __construct(\GuzzleHttp\Client $client)
    {
        $this->client = $client;
    }

    public function acceptCustomerInvite(AcceptCustomerInvite\AcceptCustomerInviteRequest $request): \Mittwald\ApiClient\Client\EmptyResponse|AcceptCustomerInvite\AcceptCustomerInvite400Response|AcceptCustomerInvite\AcceptCustomerInvite403Response|AcceptCustomerInvite\AcceptCustomerInvite412Response|AcceptCustomerInvite\AcceptCustomerInviteDefaultResponse
    {
        $httpRequest = new Request(AcceptCustomerInvite\AcceptCustomerInviteRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
            400 => AcceptCustomerInvite\AcceptCustomerInvite400Response::fromResponse($httpResponse),
            403 => AcceptCustomerInvite\AcceptCustomerInvite403Response::fromResponse($httpResponse),
            412 => AcceptCustomerInvite\AcceptCustomerInvite412Response::fromResponse($httpResponse),
            default => AcceptCustomerInvite\AcceptCustomerInviteDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function createCategoryDeprecated(CreateCategoryDeprecated\CreateCategoryDeprecatedRequest $request): CreateCategoryDeprecated\CreateCategoryDeprecated201Response|CreateCategoryDeprecated\CreateCategoryDeprecated400Response|CreateCategoryDeprecated\CreateCategoryDeprecatedDefaultResponse
    {
        $httpRequest = new Request(CreateCategoryDeprecated\CreateCategoryDeprecatedRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            201 => CreateCategoryDeprecated\CreateCategoryDeprecated201Response::fromResponse($httpResponse),
            400 => CreateCategoryDeprecated\CreateCategoryDeprecated400Response::fromResponse($httpResponse),
            default => CreateCategoryDeprecated\CreateCategoryDeprecatedDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function listOfCustomerCategoriesDeprecated(ListOfCustomerCategoriesDeprecated\ListOfCustomerCategoriesDeprecatedRequest $request): ListOfCustomerCategoriesDeprecated\ListOfCustomerCategoriesDeprecated200Response|ListOfCustomerCategoriesDeprecated\ListOfCustomerCategoriesDeprecatedDefaultResponse
    {
        $httpRequest = new Request(ListOfCustomerCategoriesDeprecated\ListOfCustomerCategoriesDeprecatedRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => ListOfCustomerCategoriesDeprecated\ListOfCustomerCategoriesDeprecated200Response::fromResponse($httpResponse),
            default => ListOfCustomerCategoriesDeprecated\ListOfCustomerCategoriesDeprecatedDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function createCategory(CreateCategory\CreateCategoryRequest $request): CreateCategory\CreateCategory201Response|CreateCategory\CreateCategory400Response|CreateCategory\CreateCategoryDefaultResponse
    {
        $httpRequest = new Request(CreateCategory\CreateCategoryRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            201 => CreateCategory\CreateCategory201Response::fromResponse($httpResponse),
            400 => CreateCategory\CreateCategory400Response::fromResponse($httpResponse),
            default => CreateCategory\CreateCategoryDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function listOfCustomerCategories(ListOfCustomerCategories\ListOfCustomerCategoriesRequest $request): ListOfCustomerCategories\ListOfCustomerCategories200Response|ListOfCustomerCategories\ListOfCustomerCategoriesDefaultResponse
    {
        $httpRequest = new Request(ListOfCustomerCategories\ListOfCustomerCategoriesRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => ListOfCustomerCategories\ListOfCustomerCategories200Response::fromResponse($httpResponse),
            default => ListOfCustomerCategories\ListOfCustomerCategoriesDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function createCustomerInvite(CreateCustomerInvite\CreateCustomerInviteRequest $request): CreateCustomerInvite\CreateCustomerInvite201Response|CreateCustomerInvite\CreateCustomerInvite400Response|CreateCustomerInvite\CreateCustomerInvite409Response|CreateCustomerInvite\CreateCustomerInviteDefaultResponse
    {
        $httpRequest = new Request(CreateCustomerInvite\CreateCustomerInviteRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            201 => CreateCustomerInvite\CreateCustomerInvite201Response::fromResponse($httpResponse),
            400 => CreateCustomerInvite\CreateCustomerInvite400Response::fromResponse($httpResponse),
            409 => CreateCustomerInvite\CreateCustomerInvite409Response::fromResponse($httpResponse),
            default => CreateCustomerInvite\CreateCustomerInviteDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function createCustomer(CreateCustomer\CreateCustomerRequest $request): CreateCustomer\CreateCustomer201Response|CreateCustomer\CreateCustomer400Response|CreateCustomer\CreateCustomerDefaultResponse
    {
        $httpRequest = new Request(CreateCustomer\CreateCustomerRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            201 => CreateCustomer\CreateCustomer201Response::fromResponse($httpResponse),
            400 => CreateCustomer\CreateCustomer400Response::fromResponse($httpResponse),
            default => CreateCustomer\CreateCustomerDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function listCustomers(ListCustomers\ListCustomersRequest $request): ListCustomers\ListCustomers200Response|ListCustomers\ListCustomersDefaultResponse
    {
        $httpRequest = new Request(ListCustomers\ListCustomersRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => ListCustomers\ListCustomers200Response::fromResponse($httpResponse),
            default => ListCustomers\ListCustomersDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function declineCustomerInvite(DeclineCustomerInvite\DeclineCustomerInviteRequest $request): \Mittwald\ApiClient\Client\EmptyResponse|DeclineCustomerInvite\DeclineCustomerInviteDefaultResponse
    {
        $httpRequest = new Request(DeclineCustomerInvite\DeclineCustomerInviteRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
            default => DeclineCustomerInvite\DeclineCustomerInviteDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function deleteCategoryDeprecated(DeleteCategoryDeprecated\DeleteCategoryDeprecatedRequest $request): DeleteCategoryDeprecated\DeleteCategoryDeprecated200Response|DeleteCategoryDeprecated\DeleteCategoryDeprecatedDefaultResponse
    {
        $httpRequest = new Request(DeleteCategoryDeprecated\DeleteCategoryDeprecatedRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => DeleteCategoryDeprecated\DeleteCategoryDeprecated200Response::fromResponse($httpResponse),
            default => DeleteCategoryDeprecated\DeleteCategoryDeprecatedDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function detailOfCustomerCategoryDeprecated(DetailOfCustomerCategoryDeprecated\DetailOfCustomerCategoryDeprecatedRequest $request): DetailOfCustomerCategoryDeprecated\DetailOfCustomerCategoryDeprecated200Response|DetailOfCustomerCategoryDeprecated\DetailOfCustomerCategoryDeprecatedDefaultResponse
    {
        $httpRequest = new Request(DetailOfCustomerCategoryDeprecated\DetailOfCustomerCategoryDeprecatedRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => DetailOfCustomerCategoryDeprecated\DetailOfCustomerCategoryDeprecated200Response::fromResponse($httpResponse),
            default => DetailOfCustomerCategoryDeprecated\DetailOfCustomerCategoryDeprecatedDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function updateCategoryDeprecated(UpdateCategoryDeprecated\UpdateCategoryDeprecatedRequest $request): UpdateCategoryDeprecated\UpdateCategoryDeprecated200Response|UpdateCategoryDeprecated\UpdateCategoryDeprecated400Response|UpdateCategoryDeprecated\UpdateCategoryDeprecated404Response|UpdateCategoryDeprecated\UpdateCategoryDeprecatedDefaultResponse
    {
        $httpRequest = new Request(UpdateCategoryDeprecated\UpdateCategoryDeprecatedRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => UpdateCategoryDeprecated\UpdateCategoryDeprecated200Response::fromResponse($httpResponse),
            400 => UpdateCategoryDeprecated\UpdateCategoryDeprecated400Response::fromResponse($httpResponse),
            404 => UpdateCategoryDeprecated\UpdateCategoryDeprecated404Response::fromResponse($httpResponse),
            default => UpdateCategoryDeprecated\UpdateCategoryDeprecatedDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function deleteCategory(DeleteCategory\DeleteCategoryRequest $request): DeleteCategory\DeleteCategory200Response|DeleteCategory\DeleteCategoryDefaultResponse
    {
        $httpRequest = new Request(DeleteCategory\DeleteCategoryRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => DeleteCategory\DeleteCategory200Response::fromResponse($httpResponse),
            default => DeleteCategory\DeleteCategoryDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function getCustomerCategory(GetCustomerCategory\GetCustomerCategoryRequest $request): GetCustomerCategory\GetCustomerCategory200Response|GetCustomerCategory\GetCustomerCategoryDefaultResponse
    {
        $httpRequest = new Request(GetCustomerCategory\GetCustomerCategoryRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => GetCustomerCategory\GetCustomerCategory200Response::fromResponse($httpResponse),
            default => GetCustomerCategory\GetCustomerCategoryDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function updateCategory(UpdateCategory\UpdateCategoryRequest $request): UpdateCategory\UpdateCategory200Response|UpdateCategory\UpdateCategory400Response|UpdateCategory\UpdateCategory404Response|UpdateCategory\UpdateCategoryDefaultResponse
    {
        $httpRequest = new Request(UpdateCategory\UpdateCategoryRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => UpdateCategory\UpdateCategory200Response::fromResponse($httpResponse),
            400 => UpdateCategory\UpdateCategory400Response::fromResponse($httpResponse),
            404 => UpdateCategory\UpdateCategory404Response::fromResponse($httpResponse),
            default => UpdateCategory\UpdateCategoryDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function deleteCustomerInvite(DeleteCustomerInvite\DeleteCustomerInviteRequest $request): \Mittwald\ApiClient\Client\EmptyResponse|DeleteCustomerInvite\DeleteCustomerInviteDefaultResponse
    {
        $httpRequest = new Request(DeleteCustomerInvite\DeleteCustomerInviteRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
            default => DeleteCustomerInvite\DeleteCustomerInviteDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function getCustomerInvite(GetCustomerInvite\GetCustomerInviteRequest $request): GetCustomerInvite\GetCustomerInvite200Response|GetCustomerInvite\GetCustomerInvite404Response|GetCustomerInvite\GetCustomerInviteDefaultResponse
    {
        $httpRequest = new Request(GetCustomerInvite\GetCustomerInviteRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => GetCustomerInvite\GetCustomerInvite200Response::fromResponse($httpResponse),
            404 => GetCustomerInvite\GetCustomerInvite404Response::fromResponse($httpResponse),
            default => GetCustomerInvite\GetCustomerInviteDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function deleteCustomerMembership(DeleteCustomerMembership\DeleteCustomerMembershipRequest $request): \Mittwald\ApiClient\Client\EmptyResponse|DeleteCustomerMembership\DeleteCustomerMembershipDefaultResponse
    {
        $httpRequest = new Request(DeleteCustomerMembership\DeleteCustomerMembershipRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
            default => DeleteCustomerMembership\DeleteCustomerMembershipDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function getCustomerMembership(GetCustomerMembership\GetCustomerMembershipRequest $request): GetCustomerMembership\GetCustomerMembership200Response|GetCustomerMembership\GetCustomerMembership404Response|GetCustomerMembership\GetCustomerMembershipDefaultResponse
    {
        $httpRequest = new Request(GetCustomerMembership\GetCustomerMembershipRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => GetCustomerMembership\GetCustomerMembership200Response::fromResponse($httpResponse),
            404 => GetCustomerMembership\GetCustomerMembership404Response::fromResponse($httpResponse),
            default => GetCustomerMembership\GetCustomerMembershipDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function updateCustomerMembership(UpdateCustomerMembership\UpdateCustomerMembershipRequest $request): \Mittwald\ApiClient\Client\EmptyResponse|UpdateCustomerMembership\UpdateCustomerMembershipDefaultResponse
    {
        $httpRequest = new Request(UpdateCustomerMembership\UpdateCustomerMembershipRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
            default => UpdateCustomerMembership\UpdateCustomerMembershipDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function deleteCustomer(DeleteCustomer\DeleteCustomerRequest $request): DeleteCustomer\DeleteCustomer200Response|DeleteCustomer\DeleteCustomer404Response|DeleteCustomer\DeleteCustomerDefaultResponse
    {
        $httpRequest = new Request(DeleteCustomer\DeleteCustomerRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => DeleteCustomer\DeleteCustomer200Response::fromResponse($httpResponse),
            404 => DeleteCustomer\DeleteCustomer404Response::fromResponse($httpResponse),
            default => DeleteCustomer\DeleteCustomerDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function getCustomer(GetCustomer\GetCustomerRequest $request): GetCustomer\GetCustomer200Response|GetCustomer\GetCustomer404Response|GetCustomer\GetCustomerDefaultResponse
    {
        $httpRequest = new Request(GetCustomer\GetCustomerRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => GetCustomer\GetCustomer200Response::fromResponse($httpResponse),
            404 => GetCustomer\GetCustomer404Response::fromResponse($httpResponse),
            default => GetCustomer\GetCustomerDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function updateCustomer(UpdateCustomer\UpdateCustomerRequest $request): UpdateCustomer\UpdateCustomer200Response|UpdateCustomer\UpdateCustomer400Response|UpdateCustomer\UpdateCustomer404Response|UpdateCustomer\UpdateCustomerDefaultResponse
    {
        $httpRequest = new Request(UpdateCustomer\UpdateCustomerRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => UpdateCustomer\UpdateCustomer200Response::fromResponse($httpResponse),
            400 => UpdateCustomer\UpdateCustomer400Response::fromResponse($httpResponse),
            404 => UpdateCustomer\UpdateCustomer404Response::fromResponse($httpResponse),
            default => UpdateCustomer\UpdateCustomerDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function getCustomerTokenInvite(GetCustomerTokenInvite\GetCustomerTokenInviteRequest $request): GetCustomerTokenInvite\GetCustomerTokenInvite200Response|GetCustomerTokenInvite\GetCustomerTokenInvite404Response|GetCustomerTokenInvite\GetCustomerTokenInviteDefaultResponse
    {
        $httpRequest = new Request(GetCustomerTokenInvite\GetCustomerTokenInviteRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => GetCustomerTokenInvite\GetCustomerTokenInvite200Response::fromResponse($httpResponse),
            404 => GetCustomerTokenInvite\GetCustomerTokenInvite404Response::fromResponse($httpResponse),
            default => GetCustomerTokenInvite\GetCustomerTokenInviteDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function isCustomerLegallyCompetent(IsCustomerLegallyCompetent\IsCustomerLegallyCompetentRequest $request): IsCustomerLegallyCompetent\IsCustomerLegallyCompetent200Response|IsCustomerLegallyCompetent\IsCustomerLegallyCompetent400Response|IsCustomerLegallyCompetent\IsCustomerLegallyCompetent404Response|IsCustomerLegallyCompetent\IsCustomerLegallyCompetentDefaultResponse
    {
        $httpRequest = new Request(IsCustomerLegallyCompetent\IsCustomerLegallyCompetentRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => IsCustomerLegallyCompetent\IsCustomerLegallyCompetent200Response::fromResponse($httpResponse),
            400 => IsCustomerLegallyCompetent\IsCustomerLegallyCompetent400Response::fromResponse($httpResponse),
            404 => IsCustomerLegallyCompetent\IsCustomerLegallyCompetent404Response::fromResponse($httpResponse),
            default => IsCustomerLegallyCompetent\IsCustomerLegallyCompetentDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function leaveCustomer(LeaveCustomer\LeaveCustomerRequest $request): \Mittwald\ApiClient\Client\EmptyResponse|LeaveCustomer\LeaveCustomerDefaultResponse
    {
        $httpRequest = new Request(LeaveCustomer\LeaveCustomerRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
            default => LeaveCustomer\LeaveCustomerDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function listCustomerInvites(ListCustomerInvites\ListCustomerInvitesRequest $request): ListCustomerInvites\ListCustomerInvites200Response|ListCustomerInvites\ListCustomerInvites404Response|ListCustomerInvites\ListCustomerInvitesDefaultResponse
    {
        $httpRequest = new Request(ListCustomerInvites\ListCustomerInvitesRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => ListCustomerInvites\ListCustomerInvites200Response::fromResponse($httpResponse),
            404 => ListCustomerInvites\ListCustomerInvites404Response::fromResponse($httpResponse),
            default => ListCustomerInvites\ListCustomerInvitesDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function listCustomerMemberships(ListCustomerMemberships\ListCustomerMembershipsRequest $request): ListCustomerMemberships\ListCustomerMemberships200Response|ListCustomerMemberships\ListCustomerMemberships404Response|ListCustomerMemberships\ListCustomerMembershipsDefaultResponse
    {
        $httpRequest = new Request(ListCustomerMemberships\ListCustomerMembershipsRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => ListCustomerMemberships\ListCustomerMemberships200Response::fromResponse($httpResponse),
            404 => ListCustomerMemberships\ListCustomerMemberships404Response::fromResponse($httpResponse),
            default => ListCustomerMemberships\ListCustomerMembershipsDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function listInvitesForCustomer(ListInvitesForCustomer\ListInvitesForCustomerRequest $request): ListInvitesForCustomer\ListInvitesForCustomer200Response|ListInvitesForCustomer\ListInvitesForCustomer404Response|ListInvitesForCustomer\ListInvitesForCustomerDefaultResponse
    {
        $httpRequest = new Request(ListInvitesForCustomer\ListInvitesForCustomerRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => ListInvitesForCustomer\ListInvitesForCustomer200Response::fromResponse($httpResponse),
            404 => ListInvitesForCustomer\ListInvitesForCustomer404Response::fromResponse($httpResponse),
            default => ListInvitesForCustomer\ListInvitesForCustomerDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function listMembershipsForCustomer(ListMembershipsForCustomer\ListMembershipsForCustomerRequest $request): ListMembershipsForCustomer\ListMembershipsForCustomer200Response|ListMembershipsForCustomer\ListMembershipsForCustomer404Response|ListMembershipsForCustomer\ListMembershipsForCustomerDefaultResponse
    {
        $httpRequest = new Request(ListMembershipsForCustomer\ListMembershipsForCustomerRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => ListMembershipsForCustomer\ListMembershipsForCustomer200Response::fromResponse($httpResponse),
            404 => ListMembershipsForCustomer\ListMembershipsForCustomer404Response::fromResponse($httpResponse),
            default => ListMembershipsForCustomer\ListMembershipsForCustomerDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function removeAvatar(RemoveAvatar\RemoveAvatarRequest $request): \Mittwald\ApiClient\Client\EmptyResponse|RemoveAvatar\RemoveAvatar400Response|RemoveAvatar\RemoveAvatar401Response|RemoveAvatar\RemoveAvatar500Response
    {
        $httpRequest = new Request(RemoveAvatar\RemoveAvatarRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
            400 => RemoveAvatar\RemoveAvatar400Response::fromResponse($httpResponse),
            401 => RemoveAvatar\RemoveAvatar401Response::fromResponse($httpResponse),
            500 => RemoveAvatar\RemoveAvatar500Response::fromResponse($httpResponse),
        };
    }

    public function requestAvatarUpload(RequestAvatarUpload\RequestAvatarUploadRequest $request): RequestAvatarUpload\RequestAvatarUpload200Response|RequestAvatarUpload\RequestAvatarUpload400Response|RequestAvatarUpload\RequestAvatarUpload401Response|RequestAvatarUpload\RequestAvatarUpload500Response
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
            401 => RequestAvatarUpload\RequestAvatarUpload401Response::fromResponse($httpResponse),
            500 => RequestAvatarUpload\RequestAvatarUpload500Response::fromResponse($httpResponse),
        };
    }

    public function resendCustomerInviteMail(ResendCustomerInviteMail\ResendCustomerInviteMailRequest $request): \Mittwald\ApiClient\Client\EmptyResponse|ResendCustomerInviteMail\ResendCustomerInviteMail403Response|ResendCustomerInviteMail\ResendCustomerInviteMailDefaultResponse
    {
        $httpRequest = new Request(ResendCustomerInviteMail\ResendCustomerInviteMailRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new \Mittwald\ApiClient\Client\EmptyResponse($httpResponse),
            403 => ResendCustomerInviteMail\ResendCustomerInviteMail403Response::fromResponse($httpResponse),
            default => ResendCustomerInviteMail\ResendCustomerInviteMailDefaultResponse::fromResponse($httpResponse),
        };
    }
}
