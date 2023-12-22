<?php

namespace Mittwald\ApiClient\Generated\V2\Clients\Contract;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Psr7\Request;
use Mittwald\ApiClient\Client\UntypedResponse;
use Mittwald\ApiClient\Error\UnexpectedResponseException;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\CancelContractItemTermination\CancelContractItemTerminationBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\CancelContractItemTermination\CancelContractItemTerminationDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\CancelContractItemTermination\CancelContractItemTerminationNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\CancelContractItemTermination\CancelContractItemTerminationOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\CancelContractItemTermination\CancelContractItemTerminationRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\CancelContractTariffChange\CancelContractTariffChangeBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\CancelContractTariffChange\CancelContractTariffChangeDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\CancelContractTariffChange\CancelContractTariffChangeNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\CancelContractTariffChange\CancelContractTariffChangeOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\CancelContractTariffChange\CancelContractTariffChangeRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\CancelContractTermination\CancelContractTerminationBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\CancelContractTermination\CancelContractTerminationDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\CancelContractTermination\CancelContractTerminationNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\CancelContractTermination\CancelContractTerminationOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\CancelContractTermination\CancelContractTerminationRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\GetBaseItemOfContract\GetBaseItemOfContractBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\GetBaseItemOfContract\GetBaseItemOfContractDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\GetBaseItemOfContract\GetBaseItemOfContractNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\GetBaseItemOfContract\GetBaseItemOfContractOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\GetBaseItemOfContract\GetBaseItemOfContractRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\GetDetailOfContract\GetDetailOfContractBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\GetDetailOfContract\GetDetailOfContractDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\GetDetailOfContract\GetDetailOfContractNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\GetDetailOfContract\GetDetailOfContractOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\GetDetailOfContract\GetDetailOfContractRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\GetDetailOfContractByDomain\GetDetailOfContractByDomainBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\GetDetailOfContractByDomain\GetDetailOfContractByDomainDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\GetDetailOfContractByDomain\GetDetailOfContractByDomainNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\GetDetailOfContractByDomain\GetDetailOfContractByDomainOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\GetDetailOfContractByDomain\GetDetailOfContractByDomainRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\GetDetailOfContractByProject\GetDetailOfContractByProjectBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\GetDetailOfContractByProject\GetDetailOfContractByProjectDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\GetDetailOfContractByProject\GetDetailOfContractByProjectNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\GetDetailOfContractByProject\GetDetailOfContractByProjectOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\GetDetailOfContractByProject\GetDetailOfContractByProjectRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\GetDetailOfContractByServer\GetDetailOfContractByServerBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\GetDetailOfContractByServer\GetDetailOfContractByServerDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\GetDetailOfContractByServer\GetDetailOfContractByServerNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\GetDetailOfContractByServer\GetDetailOfContractByServerOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\GetDetailOfContractByServer\GetDetailOfContractByServerRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\GetDetailOfContractItem\GetDetailOfContractItemBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\GetDetailOfContractItem\GetDetailOfContractItemDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\GetDetailOfContractItem\GetDetailOfContractItemNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\GetDetailOfContractItem\GetDetailOfContractItemOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\GetDetailOfContractItem\GetDetailOfContractItemRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\GetNextTerminationDateForItem\GetNextTerminationDateForItemBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\GetNextTerminationDateForItem\GetNextTerminationDateForItemDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\GetNextTerminationDateForItem\GetNextTerminationDateForItemNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\GetNextTerminationDateForItem\GetNextTerminationDateForItemOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\GetNextTerminationDateForItem\GetNextTerminationDateForItemRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\InvoiceDetailOfInvoice\InvoiceDetailOfInvoiceBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\InvoiceDetailOfInvoice\InvoiceDetailOfInvoiceDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\InvoiceDetailOfInvoice\InvoiceDetailOfInvoiceNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\InvoiceDetailOfInvoice\InvoiceDetailOfInvoiceOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\InvoiceDetailOfInvoice\InvoiceDetailOfInvoiceRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\InvoiceGetDetailOfInvoiceSettings\InvoiceGetDetailOfInvoiceSettingsBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\InvoiceGetDetailOfInvoiceSettings\InvoiceGetDetailOfInvoiceSettingsDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\InvoiceGetDetailOfInvoiceSettings\InvoiceGetDetailOfInvoiceSettingsNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\InvoiceGetDetailOfInvoiceSettings\InvoiceGetDetailOfInvoiceSettingsOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\InvoiceGetDetailOfInvoiceSettings\InvoiceGetDetailOfInvoiceSettingsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\InvoiceGetFileAccessToken\InvoiceGetFileAccessTokenBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\InvoiceGetFileAccessToken\InvoiceGetFileAccessTokenDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\InvoiceGetFileAccessToken\InvoiceGetFileAccessTokenNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\InvoiceGetFileAccessToken\InvoiceGetFileAccessTokenOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\InvoiceGetFileAccessToken\InvoiceGetFileAccessTokenRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\InvoiceListCustomerInvoices\InvoiceListCustomerInvoicesBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\InvoiceListCustomerInvoices\InvoiceListCustomerInvoicesDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\InvoiceListCustomerInvoices\InvoiceListCustomerInvoicesNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\InvoiceListCustomerInvoices\InvoiceListCustomerInvoicesOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\InvoiceListCustomerInvoices\InvoiceListCustomerInvoicesRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\InvoiceUpdateInvoiceSettings\InvoiceUpdateInvoiceSettingsBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\InvoiceUpdateInvoiceSettings\InvoiceUpdateInvoiceSettingsDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\InvoiceUpdateInvoiceSettings\InvoiceUpdateInvoiceSettingsNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\InvoiceUpdateInvoiceSettings\InvoiceUpdateInvoiceSettingsOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\InvoiceUpdateInvoiceSettings\InvoiceUpdateInvoiceSettingsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\ListContracts\ListContractsBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\ListContracts\ListContractsDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\ListContracts\ListContractsNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\ListContracts\ListContractsOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\ListContracts\ListContractsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\OrderCreateOrder\OrderCreateOrderBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\OrderCreateOrder\OrderCreateOrderCreatedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\OrderCreateOrder\OrderCreateOrderDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\OrderCreateOrder\OrderCreateOrderRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\OrderCreateTariffChange\OrderCreateTariffChangeBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\OrderCreateTariffChange\OrderCreateTariffChangeCreatedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\OrderCreateTariffChange\OrderCreateTariffChangeDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\OrderCreateTariffChange\OrderCreateTariffChangeRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\OrderGetOrder\OrderGetOrderDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\OrderGetOrder\OrderGetOrderOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\OrderGetOrder\OrderGetOrderRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\OrderListCustomerOrders\OrderListCustomerOrdersDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\OrderListCustomerOrders\OrderListCustomerOrdersOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\OrderListCustomerOrders\OrderListCustomerOrdersRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\OrderListProjectOrders\OrderListProjectOrdersDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\OrderListProjectOrders\OrderListProjectOrdersOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\OrderListProjectOrders\OrderListProjectOrdersRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\OrderPreviewOrder\OrderPreviewOrderBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\OrderPreviewOrder\OrderPreviewOrderDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\OrderPreviewOrder\OrderPreviewOrderRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\OrderPreviewTariffChange\OrderPreviewTariffChangeBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\OrderPreviewTariffChange\OrderPreviewTariffChangeDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\OrderPreviewTariffChange\OrderPreviewTariffChangeOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\OrderPreviewTariffChange\OrderPreviewTariffChangeRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\TerminateContract\TerminateContractBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\TerminateContract\TerminateContractCreatedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\TerminateContract\TerminateContractDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\TerminateContract\TerminateContractNotFoundResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\TerminateContract\TerminateContractRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\TerminateContractItem\TerminateContractItemBadRequestResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\TerminateContractItem\TerminateContractItemCreatedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\TerminateContractItem\TerminateContractItemDefaultResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\TerminateContractItem\TerminateContractItemNotFoundResponse;
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
class ContractClientImpl implements ContractClient
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
     * @throws UnexpectedResponseException
     * @param CancelContractItemTermination\CancelContractItemTerminationRequest $request An object representing the request for this operation
     * @return CancelContractItemTermination\CancelContractItemTerminationOKResponse Return the contractId and the contractItemId of the ContractItem where the Termination was cancelled.
     */
    public function cancelContractItemTermination(CancelContractItemTerminationRequest $request): CancelContractItemTerminationOKResponse
    {
        $httpRequest = new Request(CancelContractItemTerminationRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return CancelContractItemTerminationOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => CancelContractItemTerminationBadRequestResponse::fromResponse($httpResponse),
            404 => CancelContractItemTerminationNotFoundResponse::fromResponse($httpResponse),
            default => CancelContractItemTerminationDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Cancel the TariffChange for the referred ContractItem.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Contract/operation/contract-cancel-contract-tariff-change
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param CancelContractTariffChange\CancelContractTariffChangeRequest $request An object representing the request for this operation
     * @return CancelContractTariffChange\CancelContractTariffChangeOKResponse Returns the contractId of the Contract whose TariffChange was cancelled.
     */
    public function cancelContractTariffChange(CancelContractTariffChangeRequest $request): CancelContractTariffChangeOKResponse
    {
        $httpRequest = new Request(CancelContractTariffChangeRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return CancelContractTariffChangeOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => CancelContractTariffChangeBadRequestResponse::fromResponse($httpResponse),
            404 => CancelContractTariffChangeNotFoundResponse::fromResponse($httpResponse),
            default => CancelContractTariffChangeDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Cancel the Termination for the referred Contract.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Contract/operation/contract-cancel-contract-termination
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param CancelContractTermination\CancelContractTerminationRequest $request An object representing the request for this operation
     * @return CancelContractTermination\CancelContractTerminationOKResponse Return the contractId of the Contract whose Termination was cancelled.
     */
    public function cancelContractTermination(CancelContractTerminationRequest $request): CancelContractTerminationOKResponse
    {
        $httpRequest = new Request(CancelContractTerminationRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return CancelContractTerminationOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => CancelContractTerminationBadRequestResponse::fromResponse($httpResponse),
            404 => CancelContractTerminationNotFoundResponse::fromResponse($httpResponse),
            default => CancelContractTerminationDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Return the BaseItem of the Contract with the given ID.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Contract/operation/contract-get-base-item-of-contract
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetBaseItemOfContract\GetBaseItemOfContractRequest $request An object representing the request for this operation
     * @return GetBaseItemOfContract\GetBaseItemOfContractOKResponse The BaseItem of the Contract.
     */
    public function getBaseItemOfContract(GetBaseItemOfContractRequest $request): GetBaseItemOfContractOKResponse
    {
        $httpRequest = new Request(GetBaseItemOfContractRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return GetBaseItemOfContractOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => GetBaseItemOfContractBadRequestResponse::fromResponse($httpResponse),
            404 => GetBaseItemOfContractNotFoundResponse::fromResponse($httpResponse),
            default => GetBaseItemOfContractDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Returns the Contract with the given ID.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Contract/operation/contract-get-detail-of-contract
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetDetailOfContract\GetDetailOfContractRequest $request An object representing the request for this operation
     * @return GetDetailOfContract\GetDetailOfContractOKResponse
     */
    public function getDetailOfContract(GetDetailOfContractRequest $request): GetDetailOfContractOKResponse
    {
        $httpRequest = new Request(GetDetailOfContractRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return GetDetailOfContractOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => GetDetailOfContractBadRequestResponse::fromResponse($httpResponse),
            404 => GetDetailOfContractNotFoundResponse::fromResponse($httpResponse),
            default => GetDetailOfContractDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Return the Contract for the given Domain.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Contract/operation/contract-get-detail-of-contract-by-domain
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetDetailOfContractByDomain\GetDetailOfContractByDomainRequest $request An object representing the request for this operation
     * @return GetDetailOfContractByDomain\GetDetailOfContractByDomainOKResponse Returns an active Contract for the given Domain.
     */
    public function getDetailOfContractByDomain(GetDetailOfContractByDomainRequest $request): GetDetailOfContractByDomainOKResponse
    {
        $httpRequest = new Request(GetDetailOfContractByDomainRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return GetDetailOfContractByDomainOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => GetDetailOfContractByDomainBadRequestResponse::fromResponse($httpResponse),
            404 => GetDetailOfContractByDomainNotFoundResponse::fromResponse($httpResponse),
            default => GetDetailOfContractByDomainDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Return the Contract for the given Project.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Contract/operation/contract-get-detail-of-contract-by-project
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetDetailOfContractByProject\GetDetailOfContractByProjectRequest $request An object representing the request for this operation
     * @return GetDetailOfContractByProject\GetDetailOfContractByProjectOKResponse Returns an active Contract for the given Project.
     */
    public function getDetailOfContractByProject(GetDetailOfContractByProjectRequest $request): GetDetailOfContractByProjectOKResponse
    {
        $httpRequest = new Request(GetDetailOfContractByProjectRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return GetDetailOfContractByProjectOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => GetDetailOfContractByProjectBadRequestResponse::fromResponse($httpResponse),
            404 => GetDetailOfContractByProjectNotFoundResponse::fromResponse($httpResponse),
            default => GetDetailOfContractByProjectDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Return the Contract for the given Server.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Contract/operation/contract-get-detail-of-contract-by-server
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetDetailOfContractByServer\GetDetailOfContractByServerRequest $request An object representing the request for this operation
     * @return GetDetailOfContractByServer\GetDetailOfContractByServerOKResponse Returns an active Contract for the given Server.
     */
    public function getDetailOfContractByServer(GetDetailOfContractByServerRequest $request): GetDetailOfContractByServerOKResponse
    {
        $httpRequest = new Request(GetDetailOfContractByServerRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return GetDetailOfContractByServerOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => GetDetailOfContractByServerBadRequestResponse::fromResponse($httpResponse),
            404 => GetDetailOfContractByServerNotFoundResponse::fromResponse($httpResponse),
            default => GetDetailOfContractByServerDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get the ContractItem with the given ID.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Contract/operation/contract-get-detail-of-contract-item
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetDetailOfContractItem\GetDetailOfContractItemRequest $request An object representing the request for this operation
     * @return GetDetailOfContractItem\GetDetailOfContractItemOKResponse
     */
    public function getDetailOfContractItem(GetDetailOfContractItemRequest $request): GetDetailOfContractItemOKResponse
    {
        $httpRequest = new Request(GetDetailOfContractItemRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return GetDetailOfContractItemOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => GetDetailOfContractItemBadRequestResponse::fromResponse($httpResponse),
            404 => GetDetailOfContractItemNotFoundResponse::fromResponse($httpResponse),
            default => GetDetailOfContractItemDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Return the next TerminationDate for the ContractItem with the given ID.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Contract/operation/contract-get-next-termination-date-for-item
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetNextTerminationDateForItem\GetNextTerminationDateForItemRequest $request An object representing the request for this operation
     * @return GetNextTerminationDateForItem\GetNextTerminationDateForItemOKResponse Return the next possible TerminationDate for the ContractItem as date.
     */
    public function getNextTerminationDateForItem(GetNextTerminationDateForItemRequest $request): GetNextTerminationDateForItemOKResponse
    {
        $httpRequest = new Request(GetNextTerminationDateForItemRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return GetNextTerminationDateForItemOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => GetNextTerminationDateForItemBadRequestResponse::fromResponse($httpResponse),
            404 => GetNextTerminationDateForItemNotFoundResponse::fromResponse($httpResponse),
            default => GetNextTerminationDateForItemDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Return a list of Contracts for the given Customer.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Contract/operation/contract-list-contracts
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ListContracts\ListContractsRequest $request An object representing the request for this operation
     * @return ListContracts\ListContractsOKResponse Return the Contracts that belong to the Customer.
     */
    public function listContracts(ListContractsRequest $request): ListContractsOKResponse
    {
        $httpRequest = new Request(ListContractsRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return ListContractsOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => ListContractsBadRequestResponse::fromResponse($httpResponse),
            404 => ListContractsNotFoundResponse::fromResponse($httpResponse),
            default => ListContractsDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Schedule the Termination of a Contract.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Contract/operation/contract-terminate-contract
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param TerminateContract\TerminateContractRequest $request An object representing the request for this operation
     * @return TerminateContract\TerminateContractCreatedResponse Returns the contractId, the date on which the Termination will take place and the list of affected ContractItems.
     */
    public function terminateContract(TerminateContractRequest $request): TerminateContractCreatedResponse
    {
        $httpRequest = new Request(TerminateContractRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 201) {
            return TerminateContractCreatedResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => TerminateContractBadRequestResponse::fromResponse($httpResponse),
            404 => TerminateContractNotFoundResponse::fromResponse($httpResponse),
            default => TerminateContractDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Schedule the Termination of a ContractItem.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Contract/operation/contract-terminate-contract-item
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param TerminateContractItem\TerminateContractItemRequest $request An object representing the request for this operation
     * @return TerminateContractItem\TerminateContractItemCreatedResponse Return the contractId, the date on which the Termination will take place and the list of affected ContractItems.
     */
    public function terminateContractItem(TerminateContractItemRequest $request): TerminateContractItemCreatedResponse
    {
        $httpRequest = new Request(TerminateContractItemRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 201) {
            return TerminateContractItemCreatedResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => TerminateContractItemBadRequestResponse::fromResponse($httpResponse),
            404 => TerminateContractItemNotFoundResponse::fromResponse($httpResponse),
            default => TerminateContractItemDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get details of an Invoice.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Contract/operation/invoice-detail-of-invoice
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param InvoiceDetailOfInvoice\InvoiceDetailOfInvoiceRequest $request An object representing the request for this operation
     * @return InvoiceDetailOfInvoice\InvoiceDetailOfInvoiceOKResponse
     */
    public function invoiceDetailOfInvoice(InvoiceDetailOfInvoiceRequest $request): InvoiceDetailOfInvoiceOKResponse
    {
        $httpRequest = new Request(InvoiceDetailOfInvoiceRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return InvoiceDetailOfInvoiceOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => InvoiceDetailOfInvoiceBadRequestResponse::fromResponse($httpResponse),
            404 => InvoiceDetailOfInvoiceNotFoundResponse::fromResponse($httpResponse),
            default => InvoiceDetailOfInvoiceDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get InvoiceSettings of a Customer.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Contract/operation/invoice-get-detail-of-invoice-settings
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param InvoiceGetDetailOfInvoiceSettings\InvoiceGetDetailOfInvoiceSettingsRequest $request An object representing the request for this operation
     * @return InvoiceGetDetailOfInvoiceSettings\InvoiceGetDetailOfInvoiceSettingsOKResponse
     */
    public function invoiceGetDetailOfInvoiceSettings(InvoiceGetDetailOfInvoiceSettingsRequest $request): InvoiceGetDetailOfInvoiceSettingsOKResponse
    {
        $httpRequest = new Request(InvoiceGetDetailOfInvoiceSettingsRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return InvoiceGetDetailOfInvoiceSettingsOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => InvoiceGetDetailOfInvoiceSettingsBadRequestResponse::fromResponse($httpResponse),
            404 => InvoiceGetDetailOfInvoiceSettingsNotFoundResponse::fromResponse($httpResponse),
            default => InvoiceGetDetailOfInvoiceSettingsDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Request an Access Token for the Invoice file.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Contract/operation/invoice-get-file-access-token
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param InvoiceGetFileAccessToken\InvoiceGetFileAccessTokenRequest $request An object representing the request for this operation
     * @return InvoiceGetFileAccessToken\InvoiceGetFileAccessTokenOKResponse The File Access Token required to access the Invoice file.
     */
    public function invoiceGetFileAccessToken(InvoiceGetFileAccessTokenRequest $request): InvoiceGetFileAccessTokenOKResponse
    {
        $httpRequest = new Request(InvoiceGetFileAccessTokenRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return InvoiceGetFileAccessTokenOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => InvoiceGetFileAccessTokenBadRequestResponse::fromResponse($httpResponse),
            404 => InvoiceGetFileAccessTokenNotFoundResponse::fromResponse($httpResponse),
            default => InvoiceGetFileAccessTokenDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * List Invoices of a Customer.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Contract/operation/invoice-list-customer-invoices
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param InvoiceListCustomerInvoices\InvoiceListCustomerInvoicesRequest $request An object representing the request for this operation
     * @return InvoiceListCustomerInvoices\InvoiceListCustomerInvoicesOKResponse
     */
    public function invoiceListCustomerInvoices(InvoiceListCustomerInvoicesRequest $request): InvoiceListCustomerInvoicesOKResponse
    {
        $httpRequest = new Request(InvoiceListCustomerInvoicesRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return InvoiceListCustomerInvoicesOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => InvoiceListCustomerInvoicesBadRequestResponse::fromResponse($httpResponse),
            404 => InvoiceListCustomerInvoicesNotFoundResponse::fromResponse($httpResponse),
            default => InvoiceListCustomerInvoicesDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Update InvoiceSettings of a Customer.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Contract/operation/invoice-update-invoice-settings
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param InvoiceUpdateInvoiceSettings\InvoiceUpdateInvoiceSettingsRequest $request An object representing the request for this operation
     * @return InvoiceUpdateInvoiceSettings\InvoiceUpdateInvoiceSettingsOKResponse
     */
    public function invoiceUpdateInvoiceSettings(InvoiceUpdateInvoiceSettingsRequest $request): InvoiceUpdateInvoiceSettingsOKResponse
    {
        $httpRequest = new Request(InvoiceUpdateInvoiceSettingsRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return InvoiceUpdateInvoiceSettingsOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => InvoiceUpdateInvoiceSettingsBadRequestResponse::fromResponse($httpResponse),
            404 => InvoiceUpdateInvoiceSettingsNotFoundResponse::fromResponse($httpResponse),
            default => InvoiceUpdateInvoiceSettingsDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Create an Order.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Contract/operation/order-create-order
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param OrderCreateOrder\OrderCreateOrderRequest $request An object representing the request for this operation
     * @return OrderCreateOrder\OrderCreateOrderCreatedResponse
     */
    public function orderCreateOrder(OrderCreateOrderRequest $request): OrderCreateOrderCreatedResponse
    {
        $httpRequest = new Request(OrderCreateOrderRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 201) {
            return OrderCreateOrderCreatedResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => OrderCreateOrderBadRequestResponse::fromResponse($httpResponse),
            default => OrderCreateOrderDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Create TariffChange Order.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Contract/operation/order-create-tariff-change
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param OrderCreateTariffChange\OrderCreateTariffChangeRequest $request An object representing the request for this operation
     * @return OrderCreateTariffChange\OrderCreateTariffChangeCreatedResponse
     */
    public function orderCreateTariffChange(OrderCreateTariffChangeRequest $request): OrderCreateTariffChangeCreatedResponse
    {
        $httpRequest = new Request(OrderCreateTariffChangeRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 201) {
            return OrderCreateTariffChangeCreatedResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => OrderCreateTariffChangeBadRequestResponse::fromResponse($httpResponse),
            default => OrderCreateTariffChangeDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get Order for Customer.
     *
     * Get details of a single Order, User must have access to the Order/Customer.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Contract/operation/order-get-order
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param OrderGetOrder\OrderGetOrderRequest $request An object representing the request for this operation
     * @return OrderGetOrder\OrderGetOrderOKResponse
     */
    public function orderGetOrder(OrderGetOrderRequest $request): OrderGetOrderOKResponse
    {
        $httpRequest = new Request(OrderGetOrderRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return OrderGetOrderOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            default => OrderGetOrderDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get list of Orders of a Customer.
     *
     * The list of Orders of a Customer the User has access to, can be filtered by orderStatus, articleTemplate and count.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Contract/operation/order-list-customer-orders
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param OrderListCustomerOrders\OrderListCustomerOrdersRequest $request An object representing the request for this operation
     * @return OrderListCustomerOrders\OrderListCustomerOrdersOKResponse
     */
    public function orderListCustomerOrders(OrderListCustomerOrdersRequest $request): OrderListCustomerOrdersOKResponse
    {
        $httpRequest = new Request(OrderListCustomerOrdersRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return OrderListCustomerOrdersOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            default => OrderListCustomerOrdersDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Get list of Orders of a Project.
     *
     * The list of Order of a Project the User has access to, can be filtered by orderStatus, articleTemplate and count.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Contract/operation/order-list-project-orders
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param OrderListProjectOrders\OrderListProjectOrdersRequest $request An object representing the request for this operation
     * @return OrderListProjectOrders\OrderListProjectOrdersOKResponse
     */
    public function orderListProjectOrders(OrderListProjectOrdersRequest $request): OrderListProjectOrdersOKResponse
    {
        $httpRequest = new Request(OrderListProjectOrdersRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return OrderListProjectOrdersOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            default => OrderListProjectOrdersDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Preview Order.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Contract/operation/order-preview-order
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param OrderPreviewOrder\OrderPreviewOrderRequest $request An object representing the request for this operation
     * @return UntypedResponse
     */
    public function orderPreviewOrder(OrderPreviewOrderRequest $request): UntypedResponse
    {
        $httpRequest = new Request(OrderPreviewOrderRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return UntypedResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => OrderPreviewOrderBadRequestResponse::fromResponse($httpResponse),
            default => OrderPreviewOrderDefaultResponse::fromResponse($httpResponse),
        });
    }

    /**
     * Preview TariffChange.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Contract/operation/order-preview-tariff-change
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param OrderPreviewTariffChange\OrderPreviewTariffChangeRequest $request An object representing the request for this operation
     * @return OrderPreviewTariffChange\OrderPreviewTariffChangeOKResponse
     */
    public function orderPreviewTariffChange(OrderPreviewTariffChangeRequest $request): OrderPreviewTariffChangeOKResponse
    {
        $httpRequest = new Request(OrderPreviewTariffChangeRequest::method, $request->buildUrl());
        $httpResponse = $this->client->send($httpRequest, $request->buildRequestOptions());
        if ($httpResponse->getStatusCode() === 200) {
            return OrderPreviewTariffChangeOKResponse::fromResponse($httpResponse);
        }
        throw new UnexpectedResponseException(match ($httpResponse->getStatusCode()) {
            400 => OrderPreviewTariffChangeBadRequestResponse::fromResponse($httpResponse),
            default => OrderPreviewTariffChangeDefaultResponse::fromResponse($httpResponse),
        });
    }
}
