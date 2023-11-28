<?php

namespace Mittwald\ApiClient\Generated\V2\Clients\Contract;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
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
use Mittwald\ApiClient\Generated\V2\Clients\Contract\InvoiceGetFileAccessToken\InvoiceGetFileAccessToken200Response;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\InvoiceGetFileAccessToken\InvoiceGetFileAccessToken400Response;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\InvoiceGetFileAccessToken\InvoiceGetFileAccessToken404Response;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\InvoiceGetFileAccessToken\InvoiceGetFileAccessTokenDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\InvoiceGetFileAccessToken\InvoiceGetFileAccessTokenRequest;
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

/**
 * Client for Contract API
 *
 * The contract API allows you to manage your contracts and orders
 *
 * DO NOT EDIT; this class was generated by the mittwald/api-client-builder package
 * (https://github.com/mittwald/api-client-php-builder). Please make any changes
 * there.
 *
 * @generated
 * @see https://github.com/mittwald/api-client-php-builder
 */
class ContractClient
{
    private Client $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * Cancel the Termination for the referred ContractItem.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Contract/operation/contract-cancel-contract-item-termination
     * @throws GuzzleException
     * @param CancelContractItemTermination\CancelContractItemTerminationRequest $request An object representing the request for this operation
     * @return CancelContractItemTermination\CancelContractItemTermination200Response|CancelContractItemTermination\CancelContractItemTermination400Response|CancelContractItemTermination\CancelContractItemTermination404Response|CancelContractItemTermination\CancelContractItemTerminationDefaultResponse Return the contractId and the contractItemId of the ContractItem where the Termination was cancelled.
     */
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

    /**
     * Schedule the Termination of a ContractItem.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Contract/operation/contract-terminate-contract-item
     * @throws GuzzleException
     * @param TerminateContractItem\TerminateContractItemRequest $request An object representing the request for this operation
     * @return TerminateContractItem\TerminateContractItem201Response|TerminateContractItem\TerminateContractItem400Response|TerminateContractItem\TerminateContractItem404Response|TerminateContractItem\TerminateContractItemDefaultResponse Return the contractId, the date on which the Termination will take place and the list of affected ContractItems.
     */
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

    /**
     * Cancel the TariffChange for the referred ContractItem.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Contract/operation/contract-cancel-contract-tariff-change
     * @throws GuzzleException
     * @param CancelContractTariffChange\CancelContractTariffChangeRequest $request An object representing the request for this operation
     * @return CancelContractTariffChange\CancelContractTariffChange200Response|CancelContractTariffChange\CancelContractTariffChange400Response|CancelContractTariffChange\CancelContractTariffChange404Response|CancelContractTariffChange\CancelContractTariffChangeDefaultResponse Returns the contractId of the Contract whose TariffChange was cancelled.
     */
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

    /**
     * Cancel the Termination for the referred Contract.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Contract/operation/contract-cancel-contract-termination
     * @throws GuzzleException
     * @param CancelContractTermination\CancelContractTerminationRequest $request An object representing the request for this operation
     * @return CancelContractTermination\CancelContractTermination200Response|CancelContractTermination\CancelContractTermination400Response|CancelContractTermination\CancelContractTermination404Response|CancelContractTermination\CancelContractTerminationDefaultResponse Return the contractId of the Contract whose Termination was cancelled.
     */
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

    /**
     * Schedule the Termination of a Contract.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Contract/operation/contract-terminate-contract
     * @throws GuzzleException
     * @param TerminateContract\TerminateContractRequest $request An object representing the request for this operation
     * @return TerminateContract\TerminateContract201Response|TerminateContract\TerminateContract400Response|TerminateContract\TerminateContract404Response|TerminateContract\TerminateContractDefaultResponse Returns the contractId, the date on which the Termination will take place and the list of affected ContractItems.
     */
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

    /**
     * Return the BaseItem of the Contract with the given ID.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Contract/operation/contract-get-base-item-of-contract
     * @throws GuzzleException
     * @param GetBaseItemOfContract\GetBaseItemOfContractRequest $request An object representing the request for this operation
     * @return GetBaseItemOfContract\GetBaseItemOfContract200Response|GetBaseItemOfContract\GetBaseItemOfContract400Response|GetBaseItemOfContract\GetBaseItemOfContract404Response|GetBaseItemOfContract\GetBaseItemOfContractDefaultResponse The BaseItem of the Contract.
     */
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

    /**
     * Return the Contract for the given Domain.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Contract/operation/contract-get-detail-of-contract-by-domain
     * @throws GuzzleException
     * @param GetDetailOfContractByDomain\GetDetailOfContractByDomainRequest $request An object representing the request for this operation
     * @return GetDetailOfContractByDomain\GetDetailOfContractByDomain200Response|GetDetailOfContractByDomain\GetDetailOfContractByDomain400Response|GetDetailOfContractByDomain\GetDetailOfContractByDomain404Response|GetDetailOfContractByDomain\GetDetailOfContractByDomainDefaultResponse Returns an active Contract for the given Domain.
     */
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

    /**
     * Return the Contract for the given Project.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Contract/operation/contract-get-detail-of-contract-by-project
     * @throws GuzzleException
     * @param GetDetailOfContractByProject\GetDetailOfContractByProjectRequest $request An object representing the request for this operation
     * @return GetDetailOfContractByProject\GetDetailOfContractByProject200Response|GetDetailOfContractByProject\GetDetailOfContractByProject400Response|GetDetailOfContractByProject\GetDetailOfContractByProject404Response|GetDetailOfContractByProject\GetDetailOfContractByProjectDefaultResponse Returns an active Contract for the given Project.
     */
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

    /**
     * Return the Contract for the given Server.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Contract/operation/contract-get-detail-of-contract-by-server
     * @throws GuzzleException
     * @param GetDetailOfContractByServer\GetDetailOfContractByServerRequest $request An object representing the request for this operation
     * @return GetDetailOfContractByServer\GetDetailOfContractByServer200Response|GetDetailOfContractByServer\GetDetailOfContractByServer400Response|GetDetailOfContractByServer\GetDetailOfContractByServer404Response|GetDetailOfContractByServer\GetDetailOfContractByServerDefaultResponse Returns an active Contract for the given Server.
     */
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

    /**
     * Get the ContractItem with the given ID.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Contract/operation/contract-get-detail-of-contract-item
     * @throws GuzzleException
     * @param GetDetailOfContractItem\GetDetailOfContractItemRequest $request An object representing the request for this operation
     * @return GetDetailOfContractItem\GetDetailOfContractItem200Response|GetDetailOfContractItem\GetDetailOfContractItem400Response|GetDetailOfContractItem\GetDetailOfContractItem404Response|GetDetailOfContractItem\GetDetailOfContractItemDefaultResponse
     */
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

    /**
     * Returns the Contract with the given ID.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Contract/operation/contract-get-detail-of-contract
     * @throws GuzzleException
     * @param GetDetailOfContract\GetDetailOfContractRequest $request An object representing the request for this operation
     * @return GetDetailOfContract\GetDetailOfContract200Response|GetDetailOfContract\GetDetailOfContract400Response|GetDetailOfContract\GetDetailOfContract404Response|GetDetailOfContract\GetDetailOfContractDefaultResponse
     */
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

    /**
     * Return the next TerminationDate for the ContractItem with the given ID.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Contract/operation/contract-get-next-termination-date-for-item
     * @throws GuzzleException
     * @param GetNextTerminationDateForItem\GetNextTerminationDateForItemRequest $request An object representing the request for this operation
     * @return GetNextTerminationDateForItem\GetNextTerminationDateForItem200Response|GetNextTerminationDateForItem\GetNextTerminationDateForItem400Response|GetNextTerminationDateForItem\GetNextTerminationDateForItem404Response|GetNextTerminationDateForItem\GetNextTerminationDateForItemDefaultResponse Return the next possible TerminationDate for the ContractItem as date.
     */
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

    /**
     * Return a list of Contracts for the given Customer.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Contract/operation/contract-list-contracts
     * @throws GuzzleException
     * @param ListContracts\ListContractsRequest $request An object representing the request for this operation
     * @return ListContracts\ListContracts200Response|ListContracts\ListContracts400Response|ListContracts\ListContracts404Response|ListContracts\ListContractsDefaultResponse Return the Contracts that belong to the Customer.
     */
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

    /**
     * Return the Contract for the given Domain.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Contract/operation/deprecated-contract-get-detail-of-contract-by-domain
     * @throws GuzzleException
     * @param DeprecatedContractGetDetailOfContractByDomain\DeprecatedContractGetDetailOfContractByDomainRequest $request An object representing the request for this operation
     * @return DeprecatedContractGetDetailOfContractByDomain\DeprecatedContractGetDetailOfContractByDomain200Response|DeprecatedContractGetDetailOfContractByDomain\DeprecatedContractGetDetailOfContractByDomain400Response|DeprecatedContractGetDetailOfContractByDomain\DeprecatedContractGetDetailOfContractByDomain404Response|DeprecatedContractGetDetailOfContractByDomain\DeprecatedContractGetDetailOfContractByDomainDefaultResponse Returns an active Contract for the given Domain.
     */
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

    /**
     * Return the Contract for the given Project.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Contract/operation/deprecated-contract-get-detail-of-contract-by-project
     * @throws GuzzleException
     * @param DeprecatedContractGetDetailOfContractByProject\DeprecatedContractGetDetailOfContractByProjectRequest $request An object representing the request for this operation
     * @return DeprecatedContractGetDetailOfContractByProject\DeprecatedContractGetDetailOfContractByProject200Response|DeprecatedContractGetDetailOfContractByProject\DeprecatedContractGetDetailOfContractByProject400Response|DeprecatedContractGetDetailOfContractByProject\DeprecatedContractGetDetailOfContractByProject404Response|DeprecatedContractGetDetailOfContractByProject\DeprecatedContractGetDetailOfContractByProjectDefaultResponse Returns an active Contract for the given Project.
     */
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

    /**
     * Return the Contract for the given Server.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Contract/operation/deprecated-contract-get-detail-of-contract-by-server
     * @throws GuzzleException
     * @param DeprecatedContractGetDetailOfContractByServer\DeprecatedContractGetDetailOfContractByServerRequest $request An object representing the request for this operation
     * @return DeprecatedContractGetDetailOfContractByServer\DeprecatedContractGetDetailOfContractByServer200Response|DeprecatedContractGetDetailOfContractByServer\DeprecatedContractGetDetailOfContractByServer400Response|DeprecatedContractGetDetailOfContractByServer\DeprecatedContractGetDetailOfContractByServer404Response|DeprecatedContractGetDetailOfContractByServer\DeprecatedContractGetDetailOfContractByServerDefaultResponse Returns an active Contract for the given Server.
     */
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

    /**
     * Get details of an Invoice.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Contract/operation/invoice-detail-of-invoice
     * @throws GuzzleException
     * @param InvoiceDetailOfInvoice\InvoiceDetailOfInvoiceRequest $request An object representing the request for this operation
     * @return InvoiceDetailOfInvoice\InvoiceDetailOfInvoice200Response|InvoiceDetailOfInvoice\InvoiceDetailOfInvoice400Response|InvoiceDetailOfInvoice\InvoiceDetailOfInvoice404Response|InvoiceDetailOfInvoice\InvoiceDetailOfInvoiceDefaultResponse
     */
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

    /**
     * Get InvoiceSettings of a Customer.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Contract/operation/invoice-get-detail-of-invoice-settings
     * @throws GuzzleException
     * @param InvoiceGetDetailOfInvoiceSettings\InvoiceGetDetailOfInvoiceSettingsRequest $request An object representing the request for this operation
     * @return InvoiceGetDetailOfInvoiceSettings\InvoiceGetDetailOfInvoiceSettings200Response|InvoiceGetDetailOfInvoiceSettings\InvoiceGetDetailOfInvoiceSettings400Response|InvoiceGetDetailOfInvoiceSettings\InvoiceGetDetailOfInvoiceSettings404Response|InvoiceGetDetailOfInvoiceSettings\InvoiceGetDetailOfInvoiceSettingsDefaultResponse
     */
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

    /**
     * Update InvoiceSettings of a Customer.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Contract/operation/invoice-update-invoice-settings
     * @throws GuzzleException
     * @param InvoiceUpdateInvoiceSettings\InvoiceUpdateInvoiceSettingsRequest $request An object representing the request for this operation
     * @return InvoiceUpdateInvoiceSettings\InvoiceUpdateInvoiceSettings200Response|InvoiceUpdateInvoiceSettings\InvoiceUpdateInvoiceSettings400Response|InvoiceUpdateInvoiceSettings\InvoiceUpdateInvoiceSettings404Response|InvoiceUpdateInvoiceSettings\InvoiceUpdateInvoiceSettingsDefaultResponse
     */
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

    /**
     * List Invoices of a Customer.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Contract/operation/invoice-list-customer-invoices
     * @throws GuzzleException
     * @param InvoiceListCustomerInvoices\InvoiceListCustomerInvoicesRequest $request An object representing the request for this operation
     * @return InvoiceListCustomerInvoices\InvoiceListCustomerInvoices200Response|InvoiceListCustomerInvoices\InvoiceListCustomerInvoices400Response|InvoiceListCustomerInvoices\InvoiceListCustomerInvoices404Response|InvoiceListCustomerInvoices\InvoiceListCustomerInvoicesDefaultResponse
     */
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

    /**
     * Create an Order.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Contract/operation/order-create-order
     * @throws GuzzleException
     * @param OrderCreateOrder\OrderCreateOrderRequest $request An object representing the request for this operation
     * @return OrderCreateOrder\OrderCreateOrder201Response|OrderCreateOrder\OrderCreateOrder400Response|OrderCreateOrder\OrderCreateOrderDefaultResponse
     */
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

    /**
     * Create TariffChange Order.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Contract/operation/order-create-tariff-change
     * @throws GuzzleException
     * @param OrderCreateTariffChange\OrderCreateTariffChangeRequest $request An object representing the request for this operation
     * @return OrderCreateTariffChange\OrderCreateTariffChange201Response|OrderCreateTariffChange\OrderCreateTariffChange400Response|OrderCreateTariffChange\OrderCreateTariffChangeDefaultResponse
     */
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

    /**
     * Get Order for Customer.
     *
     * Get details of a single Order, User must have access to the Order/Customer.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Contract/operation/order-get-order
     * @throws GuzzleException
     * @param OrderGetOrder\OrderGetOrderRequest $request An object representing the request for this operation
     * @return OrderGetOrder\OrderGetOrder200Response|OrderGetOrder\OrderGetOrderDefaultResponse
     */
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

    /**
     * Get list of Orders of a Customer.
     *
     * The list of Orders of a Customer the User has access to, can be filtered by orderStatus, articleTemplate and count.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Contract/operation/order-list-customer-orders
     * @throws GuzzleException
     * @param OrderListCustomerOrders\OrderListCustomerOrdersRequest $request An object representing the request for this operation
     * @return OrderListCustomerOrders\OrderListCustomerOrders200Response|OrderListCustomerOrders\OrderListCustomerOrdersDefaultResponse
     */
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

    /**
     * Get list of Orders of a Project.
     *
     * The list of Order of a Project the User has access to, can be filtered by orderStatus, articleTemplate and count.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Contract/operation/order-list-project-orders
     * @throws GuzzleException
     * @param OrderListProjectOrders\OrderListProjectOrdersRequest $request An object representing the request for this operation
     * @return OrderListProjectOrders\OrderListProjectOrders200Response|OrderListProjectOrders\OrderListProjectOrdersDefaultResponse
     */
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

    /**
     * Preview Order.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Contract/operation/order-preview-order
     * @throws GuzzleException
     * @param OrderPreviewOrder\OrderPreviewOrderRequest $request An object representing the request for this operation
     * @return UntypedResponse|OrderPreviewOrder\OrderPreviewOrder400Response|OrderPreviewOrder\OrderPreviewOrderDefaultResponse
     */
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

    /**
     * Preview TariffChange.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Contract/operation/order-preview-tariff-change
     * @throws GuzzleException
     * @param OrderPreviewTariffChange\OrderPreviewTariffChangeRequest $request An object representing the request for this operation
     * @return OrderPreviewTariffChange\OrderPreviewTariffChange200Response|OrderPreviewTariffChange\OrderPreviewTariffChange400Response|OrderPreviewTariffChange\OrderPreviewTariffChangeDefaultResponse
     */
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

    /**
     * Request an Access Token for the Invoice file.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Contract/operation/invoice-get-file-access-token
     * @throws GuzzleException
     * @param InvoiceGetFileAccessToken\InvoiceGetFileAccessTokenRequest $request An object representing the request for this operation
     * @return InvoiceGetFileAccessToken\InvoiceGetFileAccessToken200Response|InvoiceGetFileAccessToken\InvoiceGetFileAccessToken400Response|InvoiceGetFileAccessToken\InvoiceGetFileAccessToken404Response|InvoiceGetFileAccessToken\InvoiceGetFileAccessTokenDefaultResponse The File Access Token required to access the Invoice file.
     */
    public function invoiceGetFileAccessToken(InvoiceGetFileAccessTokenRequest $request): InvoiceGetFileAccessToken200Response|InvoiceGetFileAccessToken400Response|InvoiceGetFileAccessToken404Response|InvoiceGetFileAccessTokenDefaultResponse
    {
        $httpRequest = new Request(InvoiceGetFileAccessTokenRequest::method, $request->getUrl());
        $httpResponse = $this->client->send($httpRequest, [
            'query' => $request->getQuery(),
            'headers' => $request->getHeaders(),
        ]);
        return match ($httpResponse->getStatusCode()) {
            200 => InvoiceGetFileAccessToken200Response::fromResponse($httpResponse),
            400 => InvoiceGetFileAccessToken400Response::fromResponse($httpResponse),
            404 => InvoiceGetFileAccessToken404Response::fromResponse($httpResponse),
            default => InvoiceGetFileAccessTokenDefaultResponse::fromResponse($httpResponse),
        };
    }
}
