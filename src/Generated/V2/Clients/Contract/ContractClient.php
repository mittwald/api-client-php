<?php

namespace Mittwald\ApiClient\Generated\V2\Clients\Contract;

use GuzzleHttp\Psr7\Request;

class ContractClient
{
    private \GuzzleHttp\Client $client;

    public function __construct(\GuzzleHttp\Client $client)
    {
        $this->client = $client;
    }

    public function cancelContractItemTermination(CancelContractItemTermination\CancelContractItemTerminationRequest $request): CancelContractItemTermination\CancelContractItemTermination200Response|CancelContractItemTermination\CancelContractItemTermination400Response|CancelContractItemTermination\CancelContractItemTermination404Response|CancelContractItemTermination\CancelContractItemTerminationDefaultResponse
    {
        $httpRequest = new Request(CancelContractItemTermination\CancelContractItemTerminationRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => CancelContractItemTermination\CancelContractItemTermination200Response::fromResponse($httpResponse),
            400 => CancelContractItemTermination\CancelContractItemTermination400Response::fromResponse($httpResponse),
            404 => CancelContractItemTermination\CancelContractItemTermination404Response::fromResponse($httpResponse),
            default => CancelContractItemTermination\CancelContractItemTerminationDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function terminateContractItem(TerminateContractItem\TerminateContractItemRequest $request): TerminateContractItem\TerminateContractItem201Response|TerminateContractItem\TerminateContractItem400Response|TerminateContractItem\TerminateContractItem404Response|TerminateContractItem\TerminateContractItemDefaultResponse
    {
        $httpRequest = new Request(TerminateContractItem\TerminateContractItemRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            201 => TerminateContractItem\TerminateContractItem201Response::fromResponse($httpResponse),
            400 => TerminateContractItem\TerminateContractItem400Response::fromResponse($httpResponse),
            404 => TerminateContractItem\TerminateContractItem404Response::fromResponse($httpResponse),
            default => TerminateContractItem\TerminateContractItemDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function cancelContractTariffChange(CancelContractTariffChange\CancelContractTariffChangeRequest $request): CancelContractTariffChange\CancelContractTariffChange200Response|CancelContractTariffChange\CancelContractTariffChange400Response|CancelContractTariffChange\CancelContractTariffChange404Response|CancelContractTariffChange\CancelContractTariffChangeDefaultResponse
    {
        $httpRequest = new Request(CancelContractTariffChange\CancelContractTariffChangeRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => CancelContractTariffChange\CancelContractTariffChange200Response::fromResponse($httpResponse),
            400 => CancelContractTariffChange\CancelContractTariffChange400Response::fromResponse($httpResponse),
            404 => CancelContractTariffChange\CancelContractTariffChange404Response::fromResponse($httpResponse),
            default => CancelContractTariffChange\CancelContractTariffChangeDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function cancelContractTermination(CancelContractTermination\CancelContractTerminationRequest $request): CancelContractTermination\CancelContractTermination200Response|CancelContractTermination\CancelContractTermination400Response|CancelContractTermination\CancelContractTermination404Response|CancelContractTermination\CancelContractTerminationDefaultResponse
    {
        $httpRequest = new Request(CancelContractTermination\CancelContractTerminationRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => CancelContractTermination\CancelContractTermination200Response::fromResponse($httpResponse),
            400 => CancelContractTermination\CancelContractTermination400Response::fromResponse($httpResponse),
            404 => CancelContractTermination\CancelContractTermination404Response::fromResponse($httpResponse),
            default => CancelContractTermination\CancelContractTerminationDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function terminateContract(TerminateContract\TerminateContractRequest $request): TerminateContract\TerminateContract201Response|TerminateContract\TerminateContract400Response|TerminateContract\TerminateContract404Response|TerminateContract\TerminateContractDefaultResponse
    {
        $httpRequest = new Request(TerminateContract\TerminateContractRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            201 => TerminateContract\TerminateContract201Response::fromResponse($httpResponse),
            400 => TerminateContract\TerminateContract400Response::fromResponse($httpResponse),
            404 => TerminateContract\TerminateContract404Response::fromResponse($httpResponse),
            default => TerminateContract\TerminateContractDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function getBaseItemOfContract(GetBaseItemOfContract\GetBaseItemOfContractRequest $request): GetBaseItemOfContract\GetBaseItemOfContract200Response|GetBaseItemOfContract\GetBaseItemOfContract400Response|GetBaseItemOfContract\GetBaseItemOfContract404Response|GetBaseItemOfContract\GetBaseItemOfContractDefaultResponse
    {
        $httpRequest = new Request(GetBaseItemOfContract\GetBaseItemOfContractRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => GetBaseItemOfContract\GetBaseItemOfContract200Response::fromResponse($httpResponse),
            400 => GetBaseItemOfContract\GetBaseItemOfContract400Response::fromResponse($httpResponse),
            404 => GetBaseItemOfContract\GetBaseItemOfContract404Response::fromResponse($httpResponse),
            default => GetBaseItemOfContract\GetBaseItemOfContractDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function getDetailOfContractByDomain(GetDetailOfContractByDomain\GetDetailOfContractByDomainRequest $request): GetDetailOfContractByDomain\GetDetailOfContractByDomain200Response|GetDetailOfContractByDomain\GetDetailOfContractByDomain400Response|GetDetailOfContractByDomain\GetDetailOfContractByDomain404Response|GetDetailOfContractByDomain\GetDetailOfContractByDomainDefaultResponse
    {
        $httpRequest = new Request(GetDetailOfContractByDomain\GetDetailOfContractByDomainRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => GetDetailOfContractByDomain\GetDetailOfContractByDomain200Response::fromResponse($httpResponse),
            400 => GetDetailOfContractByDomain\GetDetailOfContractByDomain400Response::fromResponse($httpResponse),
            404 => GetDetailOfContractByDomain\GetDetailOfContractByDomain404Response::fromResponse($httpResponse),
            default => GetDetailOfContractByDomain\GetDetailOfContractByDomainDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function getDetailOfContractByProject(GetDetailOfContractByProject\GetDetailOfContractByProjectRequest $request): GetDetailOfContractByProject\GetDetailOfContractByProject200Response|GetDetailOfContractByProject\GetDetailOfContractByProject400Response|GetDetailOfContractByProject\GetDetailOfContractByProject404Response|GetDetailOfContractByProject\GetDetailOfContractByProjectDefaultResponse
    {
        $httpRequest = new Request(GetDetailOfContractByProject\GetDetailOfContractByProjectRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => GetDetailOfContractByProject\GetDetailOfContractByProject200Response::fromResponse($httpResponse),
            400 => GetDetailOfContractByProject\GetDetailOfContractByProject400Response::fromResponse($httpResponse),
            404 => GetDetailOfContractByProject\GetDetailOfContractByProject404Response::fromResponse($httpResponse),
            default => GetDetailOfContractByProject\GetDetailOfContractByProjectDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function getDetailOfContractByServer(GetDetailOfContractByServer\GetDetailOfContractByServerRequest $request): GetDetailOfContractByServer\GetDetailOfContractByServer200Response|GetDetailOfContractByServer\GetDetailOfContractByServer400Response|GetDetailOfContractByServer\GetDetailOfContractByServer404Response|GetDetailOfContractByServer\GetDetailOfContractByServerDefaultResponse
    {
        $httpRequest = new Request(GetDetailOfContractByServer\GetDetailOfContractByServerRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => GetDetailOfContractByServer\GetDetailOfContractByServer200Response::fromResponse($httpResponse),
            400 => GetDetailOfContractByServer\GetDetailOfContractByServer400Response::fromResponse($httpResponse),
            404 => GetDetailOfContractByServer\GetDetailOfContractByServer404Response::fromResponse($httpResponse),
            default => GetDetailOfContractByServer\GetDetailOfContractByServerDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function getDetailOfContractItem(GetDetailOfContractItem\GetDetailOfContractItemRequest $request): GetDetailOfContractItem\GetDetailOfContractItem200Response|GetDetailOfContractItem\GetDetailOfContractItem400Response|GetDetailOfContractItem\GetDetailOfContractItem404Response|GetDetailOfContractItem\GetDetailOfContractItemDefaultResponse
    {
        $httpRequest = new Request(GetDetailOfContractItem\GetDetailOfContractItemRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => GetDetailOfContractItem\GetDetailOfContractItem200Response::fromResponse($httpResponse),
            400 => GetDetailOfContractItem\GetDetailOfContractItem400Response::fromResponse($httpResponse),
            404 => GetDetailOfContractItem\GetDetailOfContractItem404Response::fromResponse($httpResponse),
            default => GetDetailOfContractItem\GetDetailOfContractItemDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function getDetailOfContract(GetDetailOfContract\GetDetailOfContractRequest $request): GetDetailOfContract\GetDetailOfContract200Response|GetDetailOfContract\GetDetailOfContract400Response|GetDetailOfContract\GetDetailOfContract404Response|GetDetailOfContract\GetDetailOfContractDefaultResponse
    {
        $httpRequest = new Request(GetDetailOfContract\GetDetailOfContractRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => GetDetailOfContract\GetDetailOfContract200Response::fromResponse($httpResponse),
            400 => GetDetailOfContract\GetDetailOfContract400Response::fromResponse($httpResponse),
            404 => GetDetailOfContract\GetDetailOfContract404Response::fromResponse($httpResponse),
            default => GetDetailOfContract\GetDetailOfContractDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function getNextTerminationDateForItem(GetNextTerminationDateForItem\GetNextTerminationDateForItemRequest $request): GetNextTerminationDateForItem\GetNextTerminationDateForItem200Response|GetNextTerminationDateForItem\GetNextTerminationDateForItem400Response|GetNextTerminationDateForItem\GetNextTerminationDateForItem404Response|GetNextTerminationDateForItem\GetNextTerminationDateForItemDefaultResponse
    {
        $httpRequest = new Request(GetNextTerminationDateForItem\GetNextTerminationDateForItemRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => GetNextTerminationDateForItem\GetNextTerminationDateForItem200Response::fromResponse($httpResponse),
            400 => GetNextTerminationDateForItem\GetNextTerminationDateForItem400Response::fromResponse($httpResponse),
            404 => GetNextTerminationDateForItem\GetNextTerminationDateForItem404Response::fromResponse($httpResponse),
            default => GetNextTerminationDateForItem\GetNextTerminationDateForItemDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function listContracts(ListContracts\ListContractsRequest $request): ListContracts\ListContracts200Response|ListContracts\ListContracts400Response|ListContracts\ListContracts404Response|ListContracts\ListContractsDefaultResponse
    {
        $httpRequest = new Request(ListContracts\ListContractsRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => ListContracts\ListContracts200Response::fromResponse($httpResponse),
            400 => ListContracts\ListContracts400Response::fromResponse($httpResponse),
            404 => ListContracts\ListContracts404Response::fromResponse($httpResponse),
            default => ListContracts\ListContractsDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function deprecatedContractGetDetailOfContractByDomain(DeprecatedContractGetDetailOfContractByDomain\DeprecatedContractGetDetailOfContractByDomainRequest $request): DeprecatedContractGetDetailOfContractByDomain\DeprecatedContractGetDetailOfContractByDomain200Response|DeprecatedContractGetDetailOfContractByDomain\DeprecatedContractGetDetailOfContractByDomain400Response|DeprecatedContractGetDetailOfContractByDomain\DeprecatedContractGetDetailOfContractByDomain404Response|DeprecatedContractGetDetailOfContractByDomain\DeprecatedContractGetDetailOfContractByDomainDefaultResponse
    {
        $httpRequest = new Request(DeprecatedContractGetDetailOfContractByDomain\DeprecatedContractGetDetailOfContractByDomainRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => DeprecatedContractGetDetailOfContractByDomain\DeprecatedContractGetDetailOfContractByDomain200Response::fromResponse($httpResponse),
            400 => DeprecatedContractGetDetailOfContractByDomain\DeprecatedContractGetDetailOfContractByDomain400Response::fromResponse($httpResponse),
            404 => DeprecatedContractGetDetailOfContractByDomain\DeprecatedContractGetDetailOfContractByDomain404Response::fromResponse($httpResponse),
            default => DeprecatedContractGetDetailOfContractByDomain\DeprecatedContractGetDetailOfContractByDomainDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function deprecatedContractGetDetailOfContractByProject(DeprecatedContractGetDetailOfContractByProject\DeprecatedContractGetDetailOfContractByProjectRequest $request): DeprecatedContractGetDetailOfContractByProject\DeprecatedContractGetDetailOfContractByProject200Response|DeprecatedContractGetDetailOfContractByProject\DeprecatedContractGetDetailOfContractByProject400Response|DeprecatedContractGetDetailOfContractByProject\DeprecatedContractGetDetailOfContractByProject404Response|DeprecatedContractGetDetailOfContractByProject\DeprecatedContractGetDetailOfContractByProjectDefaultResponse
    {
        $httpRequest = new Request(DeprecatedContractGetDetailOfContractByProject\DeprecatedContractGetDetailOfContractByProjectRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => DeprecatedContractGetDetailOfContractByProject\DeprecatedContractGetDetailOfContractByProject200Response::fromResponse($httpResponse),
            400 => DeprecatedContractGetDetailOfContractByProject\DeprecatedContractGetDetailOfContractByProject400Response::fromResponse($httpResponse),
            404 => DeprecatedContractGetDetailOfContractByProject\DeprecatedContractGetDetailOfContractByProject404Response::fromResponse($httpResponse),
            default => DeprecatedContractGetDetailOfContractByProject\DeprecatedContractGetDetailOfContractByProjectDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function deprecatedContractGetDetailOfContractByServer(DeprecatedContractGetDetailOfContractByServer\DeprecatedContractGetDetailOfContractByServerRequest $request): DeprecatedContractGetDetailOfContractByServer\DeprecatedContractGetDetailOfContractByServer200Response|DeprecatedContractGetDetailOfContractByServer\DeprecatedContractGetDetailOfContractByServer400Response|DeprecatedContractGetDetailOfContractByServer\DeprecatedContractGetDetailOfContractByServer404Response|DeprecatedContractGetDetailOfContractByServer\DeprecatedContractGetDetailOfContractByServerDefaultResponse
    {
        $httpRequest = new Request(DeprecatedContractGetDetailOfContractByServer\DeprecatedContractGetDetailOfContractByServerRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => DeprecatedContractGetDetailOfContractByServer\DeprecatedContractGetDetailOfContractByServer200Response::fromResponse($httpResponse),
            400 => DeprecatedContractGetDetailOfContractByServer\DeprecatedContractGetDetailOfContractByServer400Response::fromResponse($httpResponse),
            404 => DeprecatedContractGetDetailOfContractByServer\DeprecatedContractGetDetailOfContractByServer404Response::fromResponse($httpResponse),
            default => DeprecatedContractGetDetailOfContractByServer\DeprecatedContractGetDetailOfContractByServerDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function invoiceDetailOfInvoice(InvoiceDetailOfInvoice\InvoiceDetailOfInvoiceRequest $request): InvoiceDetailOfInvoice\InvoiceDetailOfInvoice200Response|InvoiceDetailOfInvoice\InvoiceDetailOfInvoice400Response|InvoiceDetailOfInvoice\InvoiceDetailOfInvoice404Response|InvoiceDetailOfInvoice\InvoiceDetailOfInvoiceDefaultResponse
    {
        $httpRequest = new Request(InvoiceDetailOfInvoice\InvoiceDetailOfInvoiceRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => InvoiceDetailOfInvoice\InvoiceDetailOfInvoice200Response::fromResponse($httpResponse),
            400 => InvoiceDetailOfInvoice\InvoiceDetailOfInvoice400Response::fromResponse($httpResponse),
            404 => InvoiceDetailOfInvoice\InvoiceDetailOfInvoice404Response::fromResponse($httpResponse),
            default => InvoiceDetailOfInvoice\InvoiceDetailOfInvoiceDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function invoiceGetDetailOfInvoiceSettings(InvoiceGetDetailOfInvoiceSettings\InvoiceGetDetailOfInvoiceSettingsRequest $request): InvoiceGetDetailOfInvoiceSettings\InvoiceGetDetailOfInvoiceSettings200Response|InvoiceGetDetailOfInvoiceSettings\InvoiceGetDetailOfInvoiceSettings400Response|InvoiceGetDetailOfInvoiceSettings\InvoiceGetDetailOfInvoiceSettings404Response|InvoiceGetDetailOfInvoiceSettings\InvoiceGetDetailOfInvoiceSettingsDefaultResponse
    {
        $httpRequest = new Request(InvoiceGetDetailOfInvoiceSettings\InvoiceGetDetailOfInvoiceSettingsRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => InvoiceGetDetailOfInvoiceSettings\InvoiceGetDetailOfInvoiceSettings200Response::fromResponse($httpResponse),
            400 => InvoiceGetDetailOfInvoiceSettings\InvoiceGetDetailOfInvoiceSettings400Response::fromResponse($httpResponse),
            404 => InvoiceGetDetailOfInvoiceSettings\InvoiceGetDetailOfInvoiceSettings404Response::fromResponse($httpResponse),
            default => InvoiceGetDetailOfInvoiceSettings\InvoiceGetDetailOfInvoiceSettingsDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function invoiceUpdateInvoiceSettings(InvoiceUpdateInvoiceSettings\InvoiceUpdateInvoiceSettingsRequest $request): InvoiceUpdateInvoiceSettings\InvoiceUpdateInvoiceSettings200Response|InvoiceUpdateInvoiceSettings\InvoiceUpdateInvoiceSettings400Response|InvoiceUpdateInvoiceSettings\InvoiceUpdateInvoiceSettings404Response|InvoiceUpdateInvoiceSettings\InvoiceUpdateInvoiceSettingsDefaultResponse
    {
        $httpRequest = new Request(InvoiceUpdateInvoiceSettings\InvoiceUpdateInvoiceSettingsRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => InvoiceUpdateInvoiceSettings\InvoiceUpdateInvoiceSettings200Response::fromResponse($httpResponse),
            400 => InvoiceUpdateInvoiceSettings\InvoiceUpdateInvoiceSettings400Response::fromResponse($httpResponse),
            404 => InvoiceUpdateInvoiceSettings\InvoiceUpdateInvoiceSettings404Response::fromResponse($httpResponse),
            default => InvoiceUpdateInvoiceSettings\InvoiceUpdateInvoiceSettingsDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function invoiceListCustomerInvoices(InvoiceListCustomerInvoices\InvoiceListCustomerInvoicesRequest $request): InvoiceListCustomerInvoices\InvoiceListCustomerInvoices200Response|InvoiceListCustomerInvoices\InvoiceListCustomerInvoices400Response|InvoiceListCustomerInvoices\InvoiceListCustomerInvoices404Response|InvoiceListCustomerInvoices\InvoiceListCustomerInvoicesDefaultResponse
    {
        $httpRequest = new Request(InvoiceListCustomerInvoices\InvoiceListCustomerInvoicesRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => InvoiceListCustomerInvoices\InvoiceListCustomerInvoices200Response::fromResponse($httpResponse),
            400 => InvoiceListCustomerInvoices\InvoiceListCustomerInvoices400Response::fromResponse($httpResponse),
            404 => InvoiceListCustomerInvoices\InvoiceListCustomerInvoices404Response::fromResponse($httpResponse),
            default => InvoiceListCustomerInvoices\InvoiceListCustomerInvoicesDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function orderCreateOrder(OrderCreateOrder\OrderCreateOrderRequest $request): OrderCreateOrder\OrderCreateOrder201Response|OrderCreateOrder\OrderCreateOrder400Response|OrderCreateOrder\OrderCreateOrderDefaultResponse
    {
        $httpRequest = new Request(OrderCreateOrder\OrderCreateOrderRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            201 => OrderCreateOrder\OrderCreateOrder201Response::fromResponse($httpResponse),
            400 => OrderCreateOrder\OrderCreateOrder400Response::fromResponse($httpResponse),
            default => OrderCreateOrder\OrderCreateOrderDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function orderCreateTariffChange(OrderCreateTariffChange\OrderCreateTariffChangeRequest $request): OrderCreateTariffChange\OrderCreateTariffChange201Response|OrderCreateTariffChange\OrderCreateTariffChange400Response|OrderCreateTariffChange\OrderCreateTariffChangeDefaultResponse
    {
        $httpRequest = new Request(OrderCreateTariffChange\OrderCreateTariffChangeRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            201 => OrderCreateTariffChange\OrderCreateTariffChange201Response::fromResponse($httpResponse),
            400 => OrderCreateTariffChange\OrderCreateTariffChange400Response::fromResponse($httpResponse),
            default => OrderCreateTariffChange\OrderCreateTariffChangeDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function orderGetOrder(OrderGetOrder\OrderGetOrderRequest $request): OrderGetOrder\OrderGetOrder200Response|OrderGetOrder\OrderGetOrderDefaultResponse
    {
        $httpRequest = new Request(OrderGetOrder\OrderGetOrderRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => OrderGetOrder\OrderGetOrder200Response::fromResponse($httpResponse),
            default => OrderGetOrder\OrderGetOrderDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function orderListCustomerOrders(OrderListCustomerOrders\OrderListCustomerOrdersRequest $request): OrderListCustomerOrders\OrderListCustomerOrders200Response|OrderListCustomerOrders\OrderListCustomerOrdersDefaultResponse
    {
        $httpRequest = new Request(OrderListCustomerOrders\OrderListCustomerOrdersRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => OrderListCustomerOrders\OrderListCustomerOrders200Response::fromResponse($httpResponse),
            default => OrderListCustomerOrders\OrderListCustomerOrdersDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function orderListProjectOrders(OrderListProjectOrders\OrderListProjectOrdersRequest $request): OrderListProjectOrders\OrderListProjectOrders200Response|OrderListProjectOrders\OrderListProjectOrdersDefaultResponse
    {
        $httpRequest = new Request(OrderListProjectOrders\OrderListProjectOrdersRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => OrderListProjectOrders\OrderListProjectOrders200Response::fromResponse($httpResponse),
            default => OrderListProjectOrders\OrderListProjectOrdersDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function orderPreviewOrder(OrderPreviewOrder\OrderPreviewOrderRequest $request): \Mittwald\ApiClient\Client\UntypedResponse|OrderPreviewOrder\OrderPreviewOrder400Response|OrderPreviewOrder\OrderPreviewOrderDefaultResponse
    {
        $httpRequest = new Request(OrderPreviewOrder\OrderPreviewOrderRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => \Mittwald\ApiClient\Client\UntypedResponse::fromResponse($httpResponse),
            400 => OrderPreviewOrder\OrderPreviewOrder400Response::fromResponse($httpResponse),
            default => OrderPreviewOrder\OrderPreviewOrderDefaultResponse::fromResponse($httpResponse),
        };
    }

    public function orderPreviewTariffChange(OrderPreviewTariffChange\OrderPreviewTariffChangeRequest $request): OrderPreviewTariffChange\OrderPreviewTariffChange200Response|OrderPreviewTariffChange\OrderPreviewTariffChange400Response|OrderPreviewTariffChange\OrderPreviewTariffChangeDefaultResponse
    {
        $httpRequest = new Request(OrderPreviewTariffChange\OrderPreviewTariffChangeRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
            'json' => $request->getBody()->toJson(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => OrderPreviewTariffChange\OrderPreviewTariffChange200Response::fromResponse($httpResponse),
            400 => OrderPreviewTariffChange\OrderPreviewTariffChange400Response::fromResponse($httpResponse),
            default => OrderPreviewTariffChange\OrderPreviewTariffChangeDefaultResponse::fromResponse($httpResponse),
        };
    }
}
