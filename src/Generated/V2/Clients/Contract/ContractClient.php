<?php

namespace Mittwald\ApiClient\Generated\V2\Clients\Contract;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;
use Mittwald\ApiClient\Client\UntypedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\CancelContractItemTermination\CancelContractItemTermination200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\CancelContractItemTermination\CancelContractItemTermination400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\CancelContractItemTermination\CancelContractItemTermination404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\CancelContractItemTermination\CancelContractItemTerminationDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\CancelContractItemTermination\CancelContractItemTerminationRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\CancelContractTariffChange\CancelContractTariffChange200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\CancelContractTariffChange\CancelContractTariffChange400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\CancelContractTariffChange\CancelContractTariffChange404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\CancelContractTariffChange\CancelContractTariffChangeDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\CancelContractTariffChange\CancelContractTariffChangeRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\CancelContractTermination\CancelContractTermination200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\CancelContractTermination\CancelContractTermination400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\CancelContractTermination\CancelContractTermination404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\CancelContractTermination\CancelContractTerminationDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\CancelContractTermination\CancelContractTerminationRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\DeprecatedContractGetDetailOfContractByDomain\DeprecatedContractGetDetailOfContractByDomain200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\DeprecatedContractGetDetailOfContractByDomain\DeprecatedContractGetDetailOfContractByDomain400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\DeprecatedContractGetDetailOfContractByDomain\DeprecatedContractGetDetailOfContractByDomain404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\DeprecatedContractGetDetailOfContractByDomain\DeprecatedContractGetDetailOfContractByDomainDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\DeprecatedContractGetDetailOfContractByDomain\DeprecatedContractGetDetailOfContractByDomainRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\DeprecatedContractGetDetailOfContractByProject\DeprecatedContractGetDetailOfContractByProject200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\DeprecatedContractGetDetailOfContractByProject\DeprecatedContractGetDetailOfContractByProject400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\DeprecatedContractGetDetailOfContractByProject\DeprecatedContractGetDetailOfContractByProject404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\DeprecatedContractGetDetailOfContractByProject\DeprecatedContractGetDetailOfContractByProjectDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\DeprecatedContractGetDetailOfContractByProject\DeprecatedContractGetDetailOfContractByProjectRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\DeprecatedContractGetDetailOfContractByServer\DeprecatedContractGetDetailOfContractByServer200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\DeprecatedContractGetDetailOfContractByServer\DeprecatedContractGetDetailOfContractByServer400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\DeprecatedContractGetDetailOfContractByServer\DeprecatedContractGetDetailOfContractByServer404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\DeprecatedContractGetDetailOfContractByServer\DeprecatedContractGetDetailOfContractByServerDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\DeprecatedContractGetDetailOfContractByServer\DeprecatedContractGetDetailOfContractByServerRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\GetBaseItemOfContract\GetBaseItemOfContract200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\GetBaseItemOfContract\GetBaseItemOfContract400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\GetBaseItemOfContract\GetBaseItemOfContract404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\GetBaseItemOfContract\GetBaseItemOfContractDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\GetBaseItemOfContract\GetBaseItemOfContractRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\GetDetailOfContract\GetDetailOfContract200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\GetDetailOfContract\GetDetailOfContract400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\GetDetailOfContract\GetDetailOfContract404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\GetDetailOfContract\GetDetailOfContractDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\GetDetailOfContract\GetDetailOfContractRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\GetDetailOfContractByDomain\GetDetailOfContractByDomain200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\GetDetailOfContractByDomain\GetDetailOfContractByDomain400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\GetDetailOfContractByDomain\GetDetailOfContractByDomain404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\GetDetailOfContractByDomain\GetDetailOfContractByDomainDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\GetDetailOfContractByDomain\GetDetailOfContractByDomainRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\GetDetailOfContractByProject\GetDetailOfContractByProject200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\GetDetailOfContractByProject\GetDetailOfContractByProject400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\GetDetailOfContractByProject\GetDetailOfContractByProject404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\GetDetailOfContractByProject\GetDetailOfContractByProjectDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\GetDetailOfContractByProject\GetDetailOfContractByProjectRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\GetDetailOfContractByServer\GetDetailOfContractByServer200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\GetDetailOfContractByServer\GetDetailOfContractByServer400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\GetDetailOfContractByServer\GetDetailOfContractByServer404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\GetDetailOfContractByServer\GetDetailOfContractByServerDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\GetDetailOfContractByServer\GetDetailOfContractByServerRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\GetDetailOfContractItem\GetDetailOfContractItem200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\GetDetailOfContractItem\GetDetailOfContractItem400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\GetDetailOfContractItem\GetDetailOfContractItem404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\GetDetailOfContractItem\GetDetailOfContractItemDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\GetDetailOfContractItem\GetDetailOfContractItemRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\GetNextTerminationDateForItem\GetNextTerminationDateForItem200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\GetNextTerminationDateForItem\GetNextTerminationDateForItem400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\GetNextTerminationDateForItem\GetNextTerminationDateForItem404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\GetNextTerminationDateForItem\GetNextTerminationDateForItemDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\GetNextTerminationDateForItem\GetNextTerminationDateForItemRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\InvoiceDetailOfInvoice\InvoiceDetailOfInvoice200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\InvoiceDetailOfInvoice\InvoiceDetailOfInvoice400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\InvoiceDetailOfInvoice\InvoiceDetailOfInvoice404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\InvoiceDetailOfInvoice\InvoiceDetailOfInvoiceDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\InvoiceDetailOfInvoice\InvoiceDetailOfInvoiceRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\InvoiceGetDetailOfInvoiceSettings\InvoiceGetDetailOfInvoiceSettings200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\InvoiceGetDetailOfInvoiceSettings\InvoiceGetDetailOfInvoiceSettings400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\InvoiceGetDetailOfInvoiceSettings\InvoiceGetDetailOfInvoiceSettings404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\InvoiceGetDetailOfInvoiceSettings\InvoiceGetDetailOfInvoiceSettingsDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\InvoiceGetDetailOfInvoiceSettings\InvoiceGetDetailOfInvoiceSettingsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\InvoiceListCustomerInvoices\InvoiceListCustomerInvoices200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\InvoiceListCustomerInvoices\InvoiceListCustomerInvoices400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\InvoiceListCustomerInvoices\InvoiceListCustomerInvoices404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\InvoiceListCustomerInvoices\InvoiceListCustomerInvoicesDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\InvoiceListCustomerInvoices\InvoiceListCustomerInvoicesRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\InvoiceUpdateInvoiceSettings\InvoiceUpdateInvoiceSettings200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\InvoiceUpdateInvoiceSettings\InvoiceUpdateInvoiceSettings400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\InvoiceUpdateInvoiceSettings\InvoiceUpdateInvoiceSettings404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\InvoiceUpdateInvoiceSettings\InvoiceUpdateInvoiceSettingsDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\InvoiceUpdateInvoiceSettings\InvoiceUpdateInvoiceSettingsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\ListContracts\ListContracts200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\ListContracts\ListContracts400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\ListContracts\ListContracts404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\ListContracts\ListContractsDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\ListContracts\ListContractsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\OrderCreateOrder\OrderCreateOrder201Response;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\OrderCreateOrder\OrderCreateOrder400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\OrderCreateOrder\OrderCreateOrderDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\OrderCreateOrder\OrderCreateOrderRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\OrderCreateTariffChange\OrderCreateTariffChange201Response;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\OrderCreateTariffChange\OrderCreateTariffChange400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\OrderCreateTariffChange\OrderCreateTariffChangeDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\OrderCreateTariffChange\OrderCreateTariffChangeRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\OrderGetOrder\OrderGetOrder200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\OrderGetOrder\OrderGetOrderDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\OrderGetOrder\OrderGetOrderRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\OrderListCustomerOrders\OrderListCustomerOrders200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\OrderListCustomerOrders\OrderListCustomerOrdersDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\OrderListCustomerOrders\OrderListCustomerOrdersRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\OrderListProjectOrders\OrderListProjectOrders200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\OrderListProjectOrders\OrderListProjectOrdersDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\OrderListProjectOrders\OrderListProjectOrdersRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\OrderPreviewOrder\OrderPreviewOrder400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\OrderPreviewOrder\OrderPreviewOrderDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\OrderPreviewOrder\OrderPreviewOrderRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\OrderPreviewTariffChange\OrderPreviewTariffChange200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\OrderPreviewTariffChange\OrderPreviewTariffChange400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\OrderPreviewTariffChange\OrderPreviewTariffChangeDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\OrderPreviewTariffChange\OrderPreviewTariffChangeRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\TerminateContract\TerminateContract201Response;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\TerminateContract\TerminateContract400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\TerminateContract\TerminateContract404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\TerminateContract\TerminateContractDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\TerminateContract\TerminateContractRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\TerminateContractItem\TerminateContractItem201Response;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\TerminateContractItem\TerminateContractItem400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\TerminateContractItem\TerminateContractItem404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\TerminateContractItem\TerminateContractItemDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\TerminateContractItem\TerminateContractItemRequest;

class ContractClient
{
    private Client $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function cancelContractItemTermination(CancelContractItemTerminationRequest $request): CancelContractItemTermination200Response|CancelContractItemTermination400Response|CancelContractItemTermination404Response|CancelContractItemTerminationDefaultResponse
    {
        $httpRequest = new Request(CancelContractItemTerminationRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => CancelContractItemTermination200Response::fromResponse($httpResponse),
            400 => CancelContractItemTermination400Response::fromResponse($httpResponse),
            404 => CancelContractItemTermination404Response::fromResponse($httpResponse),
            default => CancelContractItemTerminationDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function terminateContractItem(TerminateContractItemRequest $request): TerminateContractItem201Response|TerminateContractItem400Response|TerminateContractItem404Response|TerminateContractItemDefaultResponse
    {
        $httpRequest = new Request(TerminateContractItemRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            201 => TerminateContractItem201Response::fromResponse($httpResponse),
            400 => TerminateContractItem400Response::fromResponse($httpResponse),
            404 => TerminateContractItem404Response::fromResponse($httpResponse),
            default => TerminateContractItemDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function cancelContractTariffChange(CancelContractTariffChangeRequest $request): CancelContractTariffChange200Response|CancelContractTariffChange400Response|CancelContractTariffChange404Response|CancelContractTariffChangeDefaultResponse
    {
        $httpRequest = new Request(CancelContractTariffChangeRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => CancelContractTariffChange200Response::fromResponse($httpResponse),
            400 => CancelContractTariffChange400Response::fromResponse($httpResponse),
            404 => CancelContractTariffChange404Response::fromResponse($httpResponse),
            default => CancelContractTariffChangeDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function cancelContractTermination(CancelContractTerminationRequest $request): CancelContractTermination200Response|CancelContractTermination400Response|CancelContractTermination404Response|CancelContractTerminationDefaultResponse
    {
        $httpRequest = new Request(CancelContractTerminationRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => CancelContractTermination200Response::fromResponse($httpResponse),
            400 => CancelContractTermination400Response::fromResponse($httpResponse),
            404 => CancelContractTermination404Response::fromResponse($httpResponse),
            default => CancelContractTerminationDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function terminateContract(TerminateContractRequest $request): TerminateContract201Response|TerminateContract400Response|TerminateContract404Response|TerminateContractDefaultResponse
    {
        $httpRequest = new Request(TerminateContractRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            201 => TerminateContract201Response::fromResponse($httpResponse),
            400 => TerminateContract400Response::fromResponse($httpResponse),
            404 => TerminateContract404Response::fromResponse($httpResponse),
            default => TerminateContractDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function getBaseItemOfContract(GetBaseItemOfContractRequest $request): GetBaseItemOfContract200Response|GetBaseItemOfContract400Response|GetBaseItemOfContract404Response|GetBaseItemOfContractDefaultResponse
    {
        $httpRequest = new Request(GetBaseItemOfContractRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => GetBaseItemOfContract200Response::fromResponse($httpResponse),
            400 => GetBaseItemOfContract400Response::fromResponse($httpResponse),
            404 => GetBaseItemOfContract404Response::fromResponse($httpResponse),
            default => GetBaseItemOfContractDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function getDetailOfContractByDomain(GetDetailOfContractByDomainRequest $request): GetDetailOfContractByDomain200Response|GetDetailOfContractByDomain400Response|GetDetailOfContractByDomain404Response|GetDetailOfContractByDomainDefaultResponse
    {
        $httpRequest = new Request(GetDetailOfContractByDomainRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => GetDetailOfContractByDomain200Response::fromResponse($httpResponse),
            400 => GetDetailOfContractByDomain400Response::fromResponse($httpResponse),
            404 => GetDetailOfContractByDomain404Response::fromResponse($httpResponse),
            default => GetDetailOfContractByDomainDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function getDetailOfContractByProject(GetDetailOfContractByProjectRequest $request): GetDetailOfContractByProject200Response|GetDetailOfContractByProject400Response|GetDetailOfContractByProject404Response|GetDetailOfContractByProjectDefaultResponse
    {
        $httpRequest = new Request(GetDetailOfContractByProjectRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => GetDetailOfContractByProject200Response::fromResponse($httpResponse),
            400 => GetDetailOfContractByProject400Response::fromResponse($httpResponse),
            404 => GetDetailOfContractByProject404Response::fromResponse($httpResponse),
            default => GetDetailOfContractByProjectDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function getDetailOfContractByServer(GetDetailOfContractByServerRequest $request): GetDetailOfContractByServer200Response|GetDetailOfContractByServer400Response|GetDetailOfContractByServer404Response|GetDetailOfContractByServerDefaultResponse
    {
        $httpRequest = new Request(GetDetailOfContractByServerRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => GetDetailOfContractByServer200Response::fromResponse($httpResponse),
            400 => GetDetailOfContractByServer400Response::fromResponse($httpResponse),
            404 => GetDetailOfContractByServer404Response::fromResponse($httpResponse),
            default => GetDetailOfContractByServerDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function getDetailOfContractItem(GetDetailOfContractItemRequest $request): GetDetailOfContractItem200Response|GetDetailOfContractItem400Response|GetDetailOfContractItem404Response|GetDetailOfContractItemDefaultResponse
    {
        $httpRequest = new Request(GetDetailOfContractItemRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => GetDetailOfContractItem200Response::fromResponse($httpResponse),
            400 => GetDetailOfContractItem400Response::fromResponse($httpResponse),
            404 => GetDetailOfContractItem404Response::fromResponse($httpResponse),
            default => GetDetailOfContractItemDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function getDetailOfContract(GetDetailOfContractRequest $request): GetDetailOfContract200Response|GetDetailOfContract400Response|GetDetailOfContract404Response|GetDetailOfContractDefaultResponse
    {
        $httpRequest = new Request(GetDetailOfContractRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => GetDetailOfContract200Response::fromResponse($httpResponse),
            400 => GetDetailOfContract400Response::fromResponse($httpResponse),
            404 => GetDetailOfContract404Response::fromResponse($httpResponse),
            default => GetDetailOfContractDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function getNextTerminationDateForItem(GetNextTerminationDateForItemRequest $request): GetNextTerminationDateForItem200Response|GetNextTerminationDateForItem400Response|GetNextTerminationDateForItem404Response|GetNextTerminationDateForItemDefaultResponse
    {
        $httpRequest = new Request(GetNextTerminationDateForItemRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => GetNextTerminationDateForItem200Response::fromResponse($httpResponse),
            400 => GetNextTerminationDateForItem400Response::fromResponse($httpResponse),
            404 => GetNextTerminationDateForItem404Response::fromResponse($httpResponse),
            default => GetNextTerminationDateForItemDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function listContracts(ListContractsRequest $request): ListContracts200Response|ListContracts400Response|ListContracts404Response|ListContractsDefaultResponse
    {
        $httpRequest = new Request(ListContractsRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => ListContracts200Response::fromResponse($httpResponse),
            400 => ListContracts400Response::fromResponse($httpResponse),
            404 => ListContracts404Response::fromResponse($httpResponse),
            default => ListContractsDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function deprecatedContractGetDetailOfContractByDomain(DeprecatedContractGetDetailOfContractByDomainRequest $request): DeprecatedContractGetDetailOfContractByDomain200Response|DeprecatedContractGetDetailOfContractByDomain400Response|DeprecatedContractGetDetailOfContractByDomain404Response|DeprecatedContractGetDetailOfContractByDomainDefaultResponse
    {
        $httpRequest = new Request(DeprecatedContractGetDetailOfContractByDomainRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => DeprecatedContractGetDetailOfContractByDomain200Response::fromResponse($httpResponse),
            400 => DeprecatedContractGetDetailOfContractByDomain400Response::fromResponse($httpResponse),
            404 => DeprecatedContractGetDetailOfContractByDomain404Response::fromResponse($httpResponse),
            default => DeprecatedContractGetDetailOfContractByDomainDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function deprecatedContractGetDetailOfContractByProject(DeprecatedContractGetDetailOfContractByProjectRequest $request): DeprecatedContractGetDetailOfContractByProject200Response|DeprecatedContractGetDetailOfContractByProject400Response|DeprecatedContractGetDetailOfContractByProject404Response|DeprecatedContractGetDetailOfContractByProjectDefaultResponse
    {
        $httpRequest = new Request(DeprecatedContractGetDetailOfContractByProjectRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => DeprecatedContractGetDetailOfContractByProject200Response::fromResponse($httpResponse),
            400 => DeprecatedContractGetDetailOfContractByProject400Response::fromResponse($httpResponse),
            404 => DeprecatedContractGetDetailOfContractByProject404Response::fromResponse($httpResponse),
            default => DeprecatedContractGetDetailOfContractByProjectDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function deprecatedContractGetDetailOfContractByServer(DeprecatedContractGetDetailOfContractByServerRequest $request): DeprecatedContractGetDetailOfContractByServer200Response|DeprecatedContractGetDetailOfContractByServer400Response|DeprecatedContractGetDetailOfContractByServer404Response|DeprecatedContractGetDetailOfContractByServerDefaultResponse
    {
        $httpRequest = new Request(DeprecatedContractGetDetailOfContractByServerRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => DeprecatedContractGetDetailOfContractByServer200Response::fromResponse($httpResponse),
            400 => DeprecatedContractGetDetailOfContractByServer400Response::fromResponse($httpResponse),
            404 => DeprecatedContractGetDetailOfContractByServer404Response::fromResponse($httpResponse),
            default => DeprecatedContractGetDetailOfContractByServerDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function invoiceDetailOfInvoice(InvoiceDetailOfInvoiceRequest $request): InvoiceDetailOfInvoice200Response|InvoiceDetailOfInvoice400Response|InvoiceDetailOfInvoice404Response|InvoiceDetailOfInvoiceDefaultResponse
    {
        $httpRequest = new Request(InvoiceDetailOfInvoiceRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => InvoiceDetailOfInvoice200Response::fromResponse($httpResponse),
            400 => InvoiceDetailOfInvoice400Response::fromResponse($httpResponse),
            404 => InvoiceDetailOfInvoice404Response::fromResponse($httpResponse),
            default => InvoiceDetailOfInvoiceDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function invoiceGetDetailOfInvoiceSettings(InvoiceGetDetailOfInvoiceSettingsRequest $request): InvoiceGetDetailOfInvoiceSettings200Response|InvoiceGetDetailOfInvoiceSettings400Response|InvoiceGetDetailOfInvoiceSettings404Response|InvoiceGetDetailOfInvoiceSettingsDefaultResponse
    {
        $httpRequest = new Request(InvoiceGetDetailOfInvoiceSettingsRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => InvoiceGetDetailOfInvoiceSettings200Response::fromResponse($httpResponse),
            400 => InvoiceGetDetailOfInvoiceSettings400Response::fromResponse($httpResponse),
            404 => InvoiceGetDetailOfInvoiceSettings404Response::fromResponse($httpResponse),
            default => InvoiceGetDetailOfInvoiceSettingsDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function invoiceUpdateInvoiceSettings(InvoiceUpdateInvoiceSettingsRequest $request): InvoiceUpdateInvoiceSettings200Response|InvoiceUpdateInvoiceSettings400Response|InvoiceUpdateInvoiceSettings404Response|InvoiceUpdateInvoiceSettingsDefaultResponse
    {
        $httpRequest = new Request(InvoiceUpdateInvoiceSettingsRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => InvoiceUpdateInvoiceSettings200Response::fromResponse($httpResponse),
            400 => InvoiceUpdateInvoiceSettings400Response::fromResponse($httpResponse),
            404 => InvoiceUpdateInvoiceSettings404Response::fromResponse($httpResponse),
            default => InvoiceUpdateInvoiceSettingsDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function invoiceListCustomerInvoices(InvoiceListCustomerInvoicesRequest $request): InvoiceListCustomerInvoices200Response|InvoiceListCustomerInvoices400Response|InvoiceListCustomerInvoices404Response|InvoiceListCustomerInvoicesDefaultResponse
    {
        $httpRequest = new Request(InvoiceListCustomerInvoicesRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => InvoiceListCustomerInvoices200Response::fromResponse($httpResponse),
            400 => InvoiceListCustomerInvoices400Response::fromResponse($httpResponse),
            404 => InvoiceListCustomerInvoices404Response::fromResponse($httpResponse),
            default => InvoiceListCustomerInvoicesDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function orderCreateOrder(OrderCreateOrderRequest $request): OrderCreateOrder201Response|OrderCreateOrder400Response|OrderCreateOrderDefaultResponse
    {
        $httpRequest = new Request(OrderCreateOrderRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            201 => OrderCreateOrder201Response::fromResponse($httpResponse),
            400 => OrderCreateOrder400Response::fromResponse($httpResponse),
            default => OrderCreateOrderDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function orderCreateTariffChange(OrderCreateTariffChangeRequest $request): OrderCreateTariffChange201Response|OrderCreateTariffChange400Response|OrderCreateTariffChangeDefaultResponse
    {
        $httpRequest = new Request(OrderCreateTariffChangeRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            201 => OrderCreateTariffChange201Response::fromResponse($httpResponse),
            400 => OrderCreateTariffChange400Response::fromResponse($httpResponse),
            default => OrderCreateTariffChangeDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function orderGetOrder(OrderGetOrderRequest $request): OrderGetOrder200Response|OrderGetOrderDefaultResponse
    {
        $httpRequest = new Request(OrderGetOrderRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => OrderGetOrder200Response::fromResponse($httpResponse),
            default => OrderGetOrderDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function orderListCustomerOrders(OrderListCustomerOrdersRequest $request): OrderListCustomerOrders200Response|OrderListCustomerOrdersDefaultResponse
    {
        $httpRequest = new Request(OrderListCustomerOrdersRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => OrderListCustomerOrders200Response::fromResponse($httpResponse),
            default => OrderListCustomerOrdersDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function orderListProjectOrders(OrderListProjectOrdersRequest $request): OrderListProjectOrders200Response|OrderListProjectOrdersDefaultResponse
    {
        $httpRequest = new Request(OrderListProjectOrdersRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => OrderListProjectOrders200Response::fromResponse($httpResponse),
            default => OrderListProjectOrdersDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function orderPreviewOrder(OrderPreviewOrderRequest $request): UntypedResponse|OrderPreviewOrder400Response|OrderPreviewOrderDefaultResponse
    {
        $httpRequest = new Request(OrderPreviewOrderRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => UntypedResponse::fromResponse($httpResponse),
            400 => OrderPreviewOrder400Response::fromResponse($httpResponse),
            default => OrderPreviewOrderDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function orderPreviewTariffChange(OrderPreviewTariffChangeRequest $request): OrderPreviewTariffChange200Response|OrderPreviewTariffChange400Response|OrderPreviewTariffChangeDefaultResponse
    {
        $httpRequest = new Request(OrderPreviewTariffChangeRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => OrderPreviewTariffChange200Response::fromResponse($httpResponse),
            400 => OrderPreviewTariffChange400Response::fromResponse($httpResponse),
            default => OrderPreviewTariffChangeDefaultResponse::fromResponse($httpResponse),
        };
    }
}
