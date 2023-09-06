<?php

namespace Mittwald\ApiClient\Generated\V2\Clients\Customer;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;
use Mittwald\ApiClient\Client\EmptyResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\AcceptCustomerInvite\AcceptCustomerInvite400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\AcceptCustomerInvite\AcceptCustomerInvite403Response;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\AcceptCustomerInvite\AcceptCustomerInvite412Response;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\AcceptCustomerInvite\AcceptCustomerInviteDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\AcceptCustomerInvite\AcceptCustomerInviteRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\CreateCategory\CreateCategory201Response;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\CreateCategory\CreateCategory400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\CreateCategory\CreateCategoryDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\CreateCategory\CreateCategoryRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\CreateCategoryDeprecated\CreateCategoryDeprecated201Response;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\CreateCategoryDeprecated\CreateCategoryDeprecated400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\CreateCategoryDeprecated\CreateCategoryDeprecatedDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\CreateCategoryDeprecated\CreateCategoryDeprecatedRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\CreateCustomer\CreateCustomer201Response;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\CreateCustomer\CreateCustomer400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\CreateCustomer\CreateCustomerDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\CreateCustomer\CreateCustomerRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\CreateCustomerInvite\CreateCustomerInvite201Response;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\CreateCustomerInvite\CreateCustomerInvite400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\CreateCustomerInvite\CreateCustomerInvite409Response;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\CreateCustomerInvite\CreateCustomerInviteDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\CreateCustomerInvite\CreateCustomerInviteRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\DeclineCustomerInvite\DeclineCustomerInviteDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\DeclineCustomerInvite\DeclineCustomerInviteRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\DeleteCategory\DeleteCategory200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\DeleteCategory\DeleteCategoryDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\DeleteCategory\DeleteCategoryRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\DeleteCategoryDeprecated\DeleteCategoryDeprecated200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\DeleteCategoryDeprecated\DeleteCategoryDeprecatedDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\DeleteCategoryDeprecated\DeleteCategoryDeprecatedRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\DeleteCustomer\DeleteCustomer200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\DeleteCustomer\DeleteCustomer404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\DeleteCustomer\DeleteCustomerDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\DeleteCustomer\DeleteCustomerRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\DeleteCustomerInvite\DeleteCustomerInviteDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\DeleteCustomerInvite\DeleteCustomerInviteRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\DeleteCustomerMembership\DeleteCustomerMembershipDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\DeleteCustomerMembership\DeleteCustomerMembershipRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\DetailOfCustomerCategoryDeprecated\DetailOfCustomerCategoryDeprecated200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\DetailOfCustomerCategoryDeprecated\DetailOfCustomerCategoryDeprecatedDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\DetailOfCustomerCategoryDeprecated\DetailOfCustomerCategoryDeprecatedRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\GetCustomer\GetCustomer200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\GetCustomer\GetCustomer404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\GetCustomer\GetCustomerDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\GetCustomer\GetCustomerRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\GetCustomerCategory\GetCustomerCategory200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\GetCustomerCategory\GetCustomerCategoryDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\GetCustomerCategory\GetCustomerCategoryRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\GetCustomerInvite\GetCustomerInvite200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\GetCustomerInvite\GetCustomerInvite404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\GetCustomerInvite\GetCustomerInviteDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\GetCustomerInvite\GetCustomerInviteRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\GetCustomerMembership\GetCustomerMembership200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\GetCustomerMembership\GetCustomerMembership404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\GetCustomerMembership\GetCustomerMembershipDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\GetCustomerMembership\GetCustomerMembershipRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\GetCustomerTokenInvite\GetCustomerTokenInvite200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\GetCustomerTokenInvite\GetCustomerTokenInvite404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\GetCustomerTokenInvite\GetCustomerTokenInviteDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\GetCustomerTokenInvite\GetCustomerTokenInviteRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\IsCustomerLegallyCompetent\IsCustomerLegallyCompetent200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\IsCustomerLegallyCompetent\IsCustomerLegallyCompetent400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\IsCustomerLegallyCompetent\IsCustomerLegallyCompetent404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\IsCustomerLegallyCompetent\IsCustomerLegallyCompetentDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\IsCustomerLegallyCompetent\IsCustomerLegallyCompetentRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\LeaveCustomer\LeaveCustomerDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\LeaveCustomer\LeaveCustomerRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\ListCustomerInvites\ListCustomerInvites200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\ListCustomerInvites\ListCustomerInvites404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\ListCustomerInvites\ListCustomerInvitesDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\ListCustomerInvites\ListCustomerInvitesRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\ListCustomerMemberships\ListCustomerMemberships200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\ListCustomerMemberships\ListCustomerMemberships404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\ListCustomerMemberships\ListCustomerMembershipsDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\ListCustomerMemberships\ListCustomerMembershipsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\ListCustomers\ListCustomers200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\ListCustomers\ListCustomersDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\ListCustomers\ListCustomersRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\ListInvitesForCustomer\ListInvitesForCustomer200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\ListInvitesForCustomer\ListInvitesForCustomer404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\ListInvitesForCustomer\ListInvitesForCustomerDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\ListInvitesForCustomer\ListInvitesForCustomerRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\ListMembershipsForCustomer\ListMembershipsForCustomer200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\ListMembershipsForCustomer\ListMembershipsForCustomer404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\ListMembershipsForCustomer\ListMembershipsForCustomerDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\ListMembershipsForCustomer\ListMembershipsForCustomerRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\ListOfCustomerCategories\ListOfCustomerCategories200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\ListOfCustomerCategories\ListOfCustomerCategoriesDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\ListOfCustomerCategories\ListOfCustomerCategoriesRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\ListOfCustomerCategoriesDeprecated\ListOfCustomerCategoriesDeprecated200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\ListOfCustomerCategoriesDeprecated\ListOfCustomerCategoriesDeprecatedDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\ListOfCustomerCategoriesDeprecated\ListOfCustomerCategoriesDeprecatedRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\RemoveAvatar\RemoveAvatar400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\RemoveAvatar\RemoveAvatar401Response;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\RemoveAvatar\RemoveAvatar500Response;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\RemoveAvatar\RemoveAvatarRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\RequestAvatarUpload\RequestAvatarUpload200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\RequestAvatarUpload\RequestAvatarUpload400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\RequestAvatarUpload\RequestAvatarUpload401Response;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\RequestAvatarUpload\RequestAvatarUpload500Response;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\RequestAvatarUpload\RequestAvatarUploadRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\ResendCustomerInviteMail\ResendCustomerInviteMail403Response;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\ResendCustomerInviteMail\ResendCustomerInviteMailDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\ResendCustomerInviteMail\ResendCustomerInviteMailRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\UpdateCategory\UpdateCategory200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\UpdateCategory\UpdateCategory400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\UpdateCategory\UpdateCategory404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\UpdateCategory\UpdateCategoryDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\UpdateCategory\UpdateCategoryRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\UpdateCategoryDeprecated\UpdateCategoryDeprecated200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\UpdateCategoryDeprecated\UpdateCategoryDeprecated400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\UpdateCategoryDeprecated\UpdateCategoryDeprecated404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\UpdateCategoryDeprecated\UpdateCategoryDeprecatedDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\UpdateCategoryDeprecated\UpdateCategoryDeprecatedRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\UpdateCustomer\UpdateCustomer200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\UpdateCustomer\UpdateCustomer400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\UpdateCustomer\UpdateCustomer404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\UpdateCustomer\UpdateCustomerDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\UpdateCustomer\UpdateCustomerRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\UpdateCustomerMembership\UpdateCustomerMembershipDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Customer\UpdateCustomerMembership\UpdateCustomerMembershipRequest;

class CustomerClient
{
    private Client $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function acceptCustomerInvite(AcceptCustomerInviteRequest $request): EmptyResponse|AcceptCustomerInvite400Response|AcceptCustomerInvite403Response|AcceptCustomerInvite412Response|AcceptCustomerInviteDefaultResponse
    {
        $httpRequest = new Request(AcceptCustomerInviteRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new EmptyResponse($httpResponse),
            400 => AcceptCustomerInvite400Response::fromResponse($httpResponse),
            403 => AcceptCustomerInvite403Response::fromResponse($httpResponse),
            412 => AcceptCustomerInvite412Response::fromResponse($httpResponse),
            default => AcceptCustomerInviteDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function createCategoryDeprecated(CreateCategoryDeprecatedRequest $request): CreateCategoryDeprecated201Response|CreateCategoryDeprecated400Response|CreateCategoryDeprecatedDefaultResponse
    {
        $httpRequest = new Request(CreateCategoryDeprecatedRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            201 => CreateCategoryDeprecated201Response::fromResponse($httpResponse),
            400 => CreateCategoryDeprecated400Response::fromResponse($httpResponse),
            default => CreateCategoryDeprecatedDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function listOfCustomerCategoriesDeprecated(ListOfCustomerCategoriesDeprecatedRequest $request): ListOfCustomerCategoriesDeprecated200Response|ListOfCustomerCategoriesDeprecatedDefaultResponse
    {
        $httpRequest = new Request(ListOfCustomerCategoriesDeprecatedRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => ListOfCustomerCategoriesDeprecated200Response::fromResponse($httpResponse),
            default => ListOfCustomerCategoriesDeprecatedDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function createCategory(CreateCategoryRequest $request): CreateCategory201Response|CreateCategory400Response|CreateCategoryDefaultResponse
    {
        $httpRequest = new Request(CreateCategoryRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            201 => CreateCategory201Response::fromResponse($httpResponse),
            400 => CreateCategory400Response::fromResponse($httpResponse),
            default => CreateCategoryDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function listOfCustomerCategories(ListOfCustomerCategoriesRequest $request): ListOfCustomerCategories200Response|ListOfCustomerCategoriesDefaultResponse
    {
        $httpRequest = new Request(ListOfCustomerCategoriesRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => ListOfCustomerCategories200Response::fromResponse($httpResponse),
            default => ListOfCustomerCategoriesDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function createCustomerInvite(CreateCustomerInviteRequest $request): CreateCustomerInvite201Response|CreateCustomerInvite400Response|CreateCustomerInvite409Response|CreateCustomerInviteDefaultResponse
    {
        $httpRequest = new Request(CreateCustomerInviteRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            201 => CreateCustomerInvite201Response::fromResponse($httpResponse),
            400 => CreateCustomerInvite400Response::fromResponse($httpResponse),
            409 => CreateCustomerInvite409Response::fromResponse($httpResponse),
            default => CreateCustomerInviteDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function createCustomer(CreateCustomerRequest $request): CreateCustomer201Response|CreateCustomer400Response|CreateCustomerDefaultResponse
    {
        $httpRequest = new Request(CreateCustomerRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            201 => CreateCustomer201Response::fromResponse($httpResponse),
            400 => CreateCustomer400Response::fromResponse($httpResponse),
            default => CreateCustomerDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function listCustomers(ListCustomersRequest $request): ListCustomers200Response|ListCustomersDefaultResponse
    {
        $httpRequest = new Request(ListCustomersRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => ListCustomers200Response::fromResponse($httpResponse),
            default => ListCustomersDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function declineCustomerInvite(DeclineCustomerInviteRequest $request): EmptyResponse|DeclineCustomerInviteDefaultResponse
    {
        $httpRequest = new Request(DeclineCustomerInviteRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new EmptyResponse($httpResponse),
            default => DeclineCustomerInviteDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function deleteCategoryDeprecated(DeleteCategoryDeprecatedRequest $request): DeleteCategoryDeprecated200Response|DeleteCategoryDeprecatedDefaultResponse
    {
        $httpRequest = new Request(DeleteCategoryDeprecatedRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => DeleteCategoryDeprecated200Response::fromResponse($httpResponse),
            default => DeleteCategoryDeprecatedDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function detailOfCustomerCategoryDeprecated(DetailOfCustomerCategoryDeprecatedRequest $request): DetailOfCustomerCategoryDeprecated200Response|DetailOfCustomerCategoryDeprecatedDefaultResponse
    {
        $httpRequest = new Request(DetailOfCustomerCategoryDeprecatedRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => DetailOfCustomerCategoryDeprecated200Response::fromResponse($httpResponse),
            default => DetailOfCustomerCategoryDeprecatedDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function updateCategoryDeprecated(UpdateCategoryDeprecatedRequest $request): UpdateCategoryDeprecated200Response|UpdateCategoryDeprecated400Response|UpdateCategoryDeprecated404Response|UpdateCategoryDeprecatedDefaultResponse
    {
        $httpRequest = new Request(UpdateCategoryDeprecatedRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => UpdateCategoryDeprecated200Response::fromResponse($httpResponse),
            400 => UpdateCategoryDeprecated400Response::fromResponse($httpResponse),
            404 => UpdateCategoryDeprecated404Response::fromResponse($httpResponse),
            default => UpdateCategoryDeprecatedDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function deleteCategory(DeleteCategoryRequest $request): DeleteCategory200Response|DeleteCategoryDefaultResponse
    {
        $httpRequest = new Request(DeleteCategoryRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => DeleteCategory200Response::fromResponse($httpResponse),
            default => DeleteCategoryDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function getCustomerCategory(GetCustomerCategoryRequest $request): GetCustomerCategory200Response|GetCustomerCategoryDefaultResponse
    {
        $httpRequest = new Request(GetCustomerCategoryRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => GetCustomerCategory200Response::fromResponse($httpResponse),
            default => GetCustomerCategoryDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function updateCategory(UpdateCategoryRequest $request): UpdateCategory200Response|UpdateCategory400Response|UpdateCategory404Response|UpdateCategoryDefaultResponse
    {
        $httpRequest = new Request(UpdateCategoryRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => UpdateCategory200Response::fromResponse($httpResponse),
            400 => UpdateCategory400Response::fromResponse($httpResponse),
            404 => UpdateCategory404Response::fromResponse($httpResponse),
            default => UpdateCategoryDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function deleteCustomerInvite(DeleteCustomerInviteRequest $request): EmptyResponse|DeleteCustomerInviteDefaultResponse
    {
        $httpRequest = new Request(DeleteCustomerInviteRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new EmptyResponse($httpResponse),
            default => DeleteCustomerInviteDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function getCustomerInvite(GetCustomerInviteRequest $request): GetCustomerInvite200Response|GetCustomerInvite404Response|GetCustomerInviteDefaultResponse
    {
        $httpRequest = new Request(GetCustomerInviteRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => GetCustomerInvite200Response::fromResponse($httpResponse),
            404 => GetCustomerInvite404Response::fromResponse($httpResponse),
            default => GetCustomerInviteDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function deleteCustomerMembership(DeleteCustomerMembershipRequest $request): EmptyResponse|DeleteCustomerMembershipDefaultResponse
    {
        $httpRequest = new Request(DeleteCustomerMembershipRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new EmptyResponse($httpResponse),
            default => DeleteCustomerMembershipDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function getCustomerMembership(GetCustomerMembershipRequest $request): GetCustomerMembership200Response|GetCustomerMembership404Response|GetCustomerMembershipDefaultResponse
    {
        $httpRequest = new Request(GetCustomerMembershipRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => GetCustomerMembership200Response::fromResponse($httpResponse),
            404 => GetCustomerMembership404Response::fromResponse($httpResponse),
            default => GetCustomerMembershipDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function updateCustomerMembership(UpdateCustomerMembershipRequest $request): EmptyResponse|UpdateCustomerMembershipDefaultResponse
    {
        $httpRequest = new Request(UpdateCustomerMembershipRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new EmptyResponse($httpResponse),
            default => UpdateCustomerMembershipDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function deleteCustomer(DeleteCustomerRequest $request): DeleteCustomer200Response|DeleteCustomer404Response|DeleteCustomerDefaultResponse
    {
        $httpRequest = new Request(DeleteCustomerRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => DeleteCustomer200Response::fromResponse($httpResponse),
            404 => DeleteCustomer404Response::fromResponse($httpResponse),
            default => DeleteCustomerDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function getCustomer(GetCustomerRequest $request): GetCustomer200Response|GetCustomer404Response|GetCustomerDefaultResponse
    {
        $httpRequest = new Request(GetCustomerRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => GetCustomer200Response::fromResponse($httpResponse),
            404 => GetCustomer404Response::fromResponse($httpResponse),
            default => GetCustomerDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function updateCustomer(UpdateCustomerRequest $request): UpdateCustomer200Response|UpdateCustomer400Response|UpdateCustomer404Response|UpdateCustomerDefaultResponse
    {
        $httpRequest = new Request(UpdateCustomerRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => UpdateCustomer200Response::fromResponse($httpResponse),
            400 => UpdateCustomer400Response::fromResponse($httpResponse),
            404 => UpdateCustomer404Response::fromResponse($httpResponse),
            default => UpdateCustomerDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function getCustomerTokenInvite(GetCustomerTokenInviteRequest $request): GetCustomerTokenInvite200Response|GetCustomerTokenInvite404Response|GetCustomerTokenInviteDefaultResponse
    {
        $httpRequest = new Request(GetCustomerTokenInviteRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => GetCustomerTokenInvite200Response::fromResponse($httpResponse),
            404 => GetCustomerTokenInvite404Response::fromResponse($httpResponse),
            default => GetCustomerTokenInviteDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function isCustomerLegallyCompetent(IsCustomerLegallyCompetentRequest $request): IsCustomerLegallyCompetent200Response|IsCustomerLegallyCompetent400Response|IsCustomerLegallyCompetent404Response|IsCustomerLegallyCompetentDefaultResponse
    {
        $httpRequest = new Request(IsCustomerLegallyCompetentRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => IsCustomerLegallyCompetent200Response::fromResponse($httpResponse),
            400 => IsCustomerLegallyCompetent400Response::fromResponse($httpResponse),
            404 => IsCustomerLegallyCompetent404Response::fromResponse($httpResponse),
            default => IsCustomerLegallyCompetentDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function leaveCustomer(LeaveCustomerRequest $request): EmptyResponse|LeaveCustomerDefaultResponse
    {
        $httpRequest = new Request(LeaveCustomerRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new EmptyResponse($httpResponse),
            default => LeaveCustomerDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function listCustomerInvites(ListCustomerInvitesRequest $request): ListCustomerInvites200Response|ListCustomerInvites404Response|ListCustomerInvitesDefaultResponse
    {
        $httpRequest = new Request(ListCustomerInvitesRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => ListCustomerInvites200Response::fromResponse($httpResponse),
            404 => ListCustomerInvites404Response::fromResponse($httpResponse),
            default => ListCustomerInvitesDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function listCustomerMemberships(ListCustomerMembershipsRequest $request): ListCustomerMemberships200Response|ListCustomerMemberships404Response|ListCustomerMembershipsDefaultResponse
    {
        $httpRequest = new Request(ListCustomerMembershipsRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => ListCustomerMemberships200Response::fromResponse($httpResponse),
            404 => ListCustomerMemberships404Response::fromResponse($httpResponse),
            default => ListCustomerMembershipsDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function listInvitesForCustomer(ListInvitesForCustomerRequest $request): ListInvitesForCustomer200Response|ListInvitesForCustomer404Response|ListInvitesForCustomerDefaultResponse
    {
        $httpRequest = new Request(ListInvitesForCustomerRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => ListInvitesForCustomer200Response::fromResponse($httpResponse),
            404 => ListInvitesForCustomer404Response::fromResponse($httpResponse),
            default => ListInvitesForCustomerDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function listMembershipsForCustomer(ListMembershipsForCustomerRequest $request): ListMembershipsForCustomer200Response|ListMembershipsForCustomer404Response|ListMembershipsForCustomerDefaultResponse
    {
        $httpRequest = new Request(ListMembershipsForCustomerRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => ListMembershipsForCustomer200Response::fromResponse($httpResponse),
            404 => ListMembershipsForCustomer404Response::fromResponse($httpResponse),
            default => ListMembershipsForCustomerDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function removeAvatar(RemoveAvatarRequest $request): EmptyResponse|RemoveAvatar400Response|RemoveAvatar401Response|RemoveAvatar500Response
    {
        $httpRequest = new Request(RemoveAvatarRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new EmptyResponse($httpResponse),
            400 => RemoveAvatar400Response::fromResponse($httpResponse),
            401 => RemoveAvatar401Response::fromResponse($httpResponse),
            500 => RemoveAvatar500Response::fromResponse($httpResponse),
        };
    }

    public function requestAvatarUpload(RequestAvatarUploadRequest $request): RequestAvatarUpload200Response|RequestAvatarUpload400Response|RequestAvatarUpload401Response|RequestAvatarUpload500Response
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
            401 => RequestAvatarUpload401Response::fromResponse($httpResponse),
            500 => RequestAvatarUpload500Response::fromResponse($httpResponse),
        };
    }

    public function resendCustomerInviteMail(ResendCustomerInviteMailRequest $request): EmptyResponse|ResendCustomerInviteMail403Response|ResendCustomerInviteMailDefaultResponse
    {
        $httpRequest = new Request(ResendCustomerInviteMailRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            204 => new EmptyResponse($httpResponse),
            403 => ResendCustomerInviteMail403Response::fromResponse($httpResponse),
            default => ResendCustomerInviteMailDefaultResponse::fromResponse($httpResponse),
        };
    }
}
