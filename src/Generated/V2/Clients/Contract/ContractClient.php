<?php

namespace Mittwald\ApiClient\Generated\V2\Clients\Contract;

use GuzzleHttp\Exception\GuzzleException;
use Mittwald\ApiClient\Client\UntypedResponse;
use Mittwald\ApiClient\Error\UnexpectedResponseException;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\CancelContractItemTermination\CancelContractItemTerminationOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\CancelContractItemTermination\CancelContractItemTerminationRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\CancelContractTariffChange\CancelContractTariffChangeOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\CancelContractTariffChange\CancelContractTariffChangeRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\CancelContractTermination\CancelContractTerminationOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\CancelContractTermination\CancelContractTerminationRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\GetBaseItemOfContract\GetBaseItemOfContractOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\GetBaseItemOfContract\GetBaseItemOfContractRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\GetDetailOfContract\GetDetailOfContractOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\GetDetailOfContract\GetDetailOfContractRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\GetDetailOfContractByDomain\GetDetailOfContractByDomainOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\GetDetailOfContractByDomain\GetDetailOfContractByDomainRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\GetDetailOfContractByProject\GetDetailOfContractByProjectOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\GetDetailOfContractByProject\GetDetailOfContractByProjectRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\GetDetailOfContractByServer\GetDetailOfContractByServerOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\GetDetailOfContractByServer\GetDetailOfContractByServerRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\GetDetailOfContractItem\GetDetailOfContractItemOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\GetDetailOfContractItem\GetDetailOfContractItemRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\GetNextTerminationDateForItem\GetNextTerminationDateForItemOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\GetNextTerminationDateForItem\GetNextTerminationDateForItemRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\InvoiceDetailOfInvoice\InvoiceDetailOfInvoiceOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\InvoiceDetailOfInvoice\InvoiceDetailOfInvoiceRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\InvoiceGetDetailOfInvoiceSettings\InvoiceGetDetailOfInvoiceSettingsOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\InvoiceGetDetailOfInvoiceSettings\InvoiceGetDetailOfInvoiceSettingsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\InvoiceGetFileAccessToken\InvoiceGetFileAccessTokenOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\InvoiceGetFileAccessToken\InvoiceGetFileAccessTokenRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\InvoiceListCustomerInvoices\InvoiceListCustomerInvoicesOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\InvoiceListCustomerInvoices\InvoiceListCustomerInvoicesRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\InvoiceUpdateInvoiceSettings\InvoiceUpdateInvoiceSettingsOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\InvoiceUpdateInvoiceSettings\InvoiceUpdateInvoiceSettingsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\ListContracts\ListContractsOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\ListContracts\ListContractsRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\OrderCreateOrder\OrderCreateOrderCreatedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\OrderCreateOrder\OrderCreateOrderRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\OrderCreateTariffChange\OrderCreateTariffChangeCreatedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\OrderCreateTariffChange\OrderCreateTariffChangeRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\OrderGetOrder\OrderGetOrderOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\OrderGetOrder\OrderGetOrderRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\OrderListCustomerOrders\OrderListCustomerOrdersOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\OrderListCustomerOrders\OrderListCustomerOrdersRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\OrderListProjectOrders\OrderListProjectOrdersOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\OrderListProjectOrders\OrderListProjectOrdersRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\OrderPreviewOrder\OrderPreviewOrderRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\OrderPreviewTariffChange\OrderPreviewTariffChangeOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\OrderPreviewTariffChange\OrderPreviewTariffChangeRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\TerminateContract\TerminateContractCreatedResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\TerminateContract\TerminateContractRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\TerminateContractItem\TerminateContractItemCreatedResponse;
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
interface ContractClient
{
    /**
     * Cancel the Termination for the referred ContractItem.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Contract/operation/contract-cancel-contract-item-termination
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param CancelContractItemTermination\CancelContractItemTerminationRequest $request An object representing the request for this operation
     * @return CancelContractItemTermination\CancelContractItemTerminationOKResponse Return the contractId and the contractItemId of the ContractItem where the Termination was cancelled.
     */
    public function cancelContractItemTermination(CancelContractItemTerminationRequest $request): CancelContractItemTerminationOKResponse;
    /**
     * Schedule the Termination of a ContractItem.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Contract/operation/contract-terminate-contract-item
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param TerminateContractItem\TerminateContractItemRequest $request An object representing the request for this operation
     * @return TerminateContractItem\TerminateContractItemCreatedResponse Return the contractId, the date on which the Termination will take place and the list of affected ContractItems.
     */
    public function terminateContractItem(TerminateContractItemRequest $request): TerminateContractItemCreatedResponse;
    /**
     * Cancel the TariffChange for the referred ContractItem.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Contract/operation/contract-cancel-contract-tariff-change
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param CancelContractTariffChange\CancelContractTariffChangeRequest $request An object representing the request for this operation
     * @return CancelContractTariffChange\CancelContractTariffChangeOKResponse Returns the contractId of the Contract whose TariffChange was cancelled.
     */
    public function cancelContractTariffChange(CancelContractTariffChangeRequest $request): CancelContractTariffChangeOKResponse;
    /**
     * Cancel the Termination for the referred Contract.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Contract/operation/contract-cancel-contract-termination
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param CancelContractTermination\CancelContractTerminationRequest $request An object representing the request for this operation
     * @return CancelContractTermination\CancelContractTerminationOKResponse Return the contractId of the Contract whose Termination was cancelled.
     */
    public function cancelContractTermination(CancelContractTerminationRequest $request): CancelContractTerminationOKResponse;
    /**
     * Schedule the Termination of a Contract.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Contract/operation/contract-terminate-contract
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param TerminateContract\TerminateContractRequest $request An object representing the request for this operation
     * @return TerminateContract\TerminateContractCreatedResponse Returns the contractId, the date on which the Termination will take place and the list of affected ContractItems.
     */
    public function terminateContract(TerminateContractRequest $request): TerminateContractCreatedResponse;
    /**
     * Return the BaseItem of the Contract with the given ID.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Contract/operation/contract-get-base-item-of-contract
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetBaseItemOfContract\GetBaseItemOfContractRequest $request An object representing the request for this operation
     * @return GetBaseItemOfContract\GetBaseItemOfContractOKResponse The BaseItem of the Contract.
     */
    public function getBaseItemOfContract(GetBaseItemOfContractRequest $request): GetBaseItemOfContractOKResponse;
    /**
     * Return the Contract for the given Domain.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Contract/operation/contract-get-detail-of-contract-by-domain
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetDetailOfContractByDomain\GetDetailOfContractByDomainRequest $request An object representing the request for this operation
     * @return GetDetailOfContractByDomain\GetDetailOfContractByDomainOKResponse Returns an active Contract for the given Domain.
     */
    public function getDetailOfContractByDomain(GetDetailOfContractByDomainRequest $request): GetDetailOfContractByDomainOKResponse;
    /**
     * Return the Contract for the given Project.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Contract/operation/contract-get-detail-of-contract-by-project
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetDetailOfContractByProject\GetDetailOfContractByProjectRequest $request An object representing the request for this operation
     * @return GetDetailOfContractByProject\GetDetailOfContractByProjectOKResponse Returns an active Contract for the given Project.
     */
    public function getDetailOfContractByProject(GetDetailOfContractByProjectRequest $request): GetDetailOfContractByProjectOKResponse;
    /**
     * Return the Contract for the given Server.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Contract/operation/contract-get-detail-of-contract-by-server
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetDetailOfContractByServer\GetDetailOfContractByServerRequest $request An object representing the request for this operation
     * @return GetDetailOfContractByServer\GetDetailOfContractByServerOKResponse Returns an active Contract for the given Server.
     */
    public function getDetailOfContractByServer(GetDetailOfContractByServerRequest $request): GetDetailOfContractByServerOKResponse;
    /**
     * Get the ContractItem with the given ID.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Contract/operation/contract-get-detail-of-contract-item
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetDetailOfContractItem\GetDetailOfContractItemRequest $request An object representing the request for this operation
     * @return GetDetailOfContractItem\GetDetailOfContractItemOKResponse
     */
    public function getDetailOfContractItem(GetDetailOfContractItemRequest $request): GetDetailOfContractItemOKResponse;
    /**
     * Returns the Contract with the given ID.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Contract/operation/contract-get-detail-of-contract
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetDetailOfContract\GetDetailOfContractRequest $request An object representing the request for this operation
     * @return GetDetailOfContract\GetDetailOfContractOKResponse
     */
    public function getDetailOfContract(GetDetailOfContractRequest $request): GetDetailOfContractOKResponse;
    /**
     * Return the next TerminationDate for the ContractItem with the given ID.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Contract/operation/contract-get-next-termination-date-for-item
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetNextTerminationDateForItem\GetNextTerminationDateForItemRequest $request An object representing the request for this operation
     * @return GetNextTerminationDateForItem\GetNextTerminationDateForItemOKResponse Return the next possible TerminationDate for the ContractItem as date.
     */
    public function getNextTerminationDateForItem(GetNextTerminationDateForItemRequest $request): GetNextTerminationDateForItemOKResponse;
    /**
     * Return a list of Contracts for the given Customer.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Contract/operation/contract-list-contracts
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ListContracts\ListContractsRequest $request An object representing the request for this operation
     * @return ListContracts\ListContractsOKResponse Return the Contracts that belong to the Customer.
     */
    public function listContracts(ListContractsRequest $request): ListContractsOKResponse;
    /**
     * Get details of an Invoice.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Contract/operation/invoice-detail-of-invoice
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param InvoiceDetailOfInvoice\InvoiceDetailOfInvoiceRequest $request An object representing the request for this operation
     * @return InvoiceDetailOfInvoice\InvoiceDetailOfInvoiceOKResponse
     */
    public function invoiceDetailOfInvoice(InvoiceDetailOfInvoiceRequest $request): InvoiceDetailOfInvoiceOKResponse;
    /**
     * Get InvoiceSettings of a Customer.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Contract/operation/invoice-get-detail-of-invoice-settings
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param InvoiceGetDetailOfInvoiceSettings\InvoiceGetDetailOfInvoiceSettingsRequest $request An object representing the request for this operation
     * @return InvoiceGetDetailOfInvoiceSettings\InvoiceGetDetailOfInvoiceSettingsOKResponse
     */
    public function invoiceGetDetailOfInvoiceSettings(InvoiceGetDetailOfInvoiceSettingsRequest $request): InvoiceGetDetailOfInvoiceSettingsOKResponse;
    /**
     * Update InvoiceSettings of a Customer.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Contract/operation/invoice-update-invoice-settings
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param InvoiceUpdateInvoiceSettings\InvoiceUpdateInvoiceSettingsRequest $request An object representing the request for this operation
     * @return InvoiceUpdateInvoiceSettings\InvoiceUpdateInvoiceSettingsOKResponse
     */
    public function invoiceUpdateInvoiceSettings(InvoiceUpdateInvoiceSettingsRequest $request): InvoiceUpdateInvoiceSettingsOKResponse;
    /**
     * Request an Access Token for the Invoice file.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Contract/operation/invoice-get-file-access-token
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param InvoiceGetFileAccessToken\InvoiceGetFileAccessTokenRequest $request An object representing the request for this operation
     * @return InvoiceGetFileAccessToken\InvoiceGetFileAccessTokenOKResponse The File Access Token required to access the Invoice file.
     */
    public function invoiceGetFileAccessToken(InvoiceGetFileAccessTokenRequest $request): InvoiceGetFileAccessTokenOKResponse;
    /**
     * List Invoices of a Customer.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Contract/operation/invoice-list-customer-invoices
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param InvoiceListCustomerInvoices\InvoiceListCustomerInvoicesRequest $request An object representing the request for this operation
     * @return InvoiceListCustomerInvoices\InvoiceListCustomerInvoicesOKResponse
     */
    public function invoiceListCustomerInvoices(InvoiceListCustomerInvoicesRequest $request): InvoiceListCustomerInvoicesOKResponse;
    /**
     * Create an Order.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Contract/operation/order-create-order
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param OrderCreateOrder\OrderCreateOrderRequest $request An object representing the request for this operation
     * @return OrderCreateOrder\OrderCreateOrderCreatedResponse
     */
    public function orderCreateOrder(OrderCreateOrderRequest $request): OrderCreateOrderCreatedResponse;
    /**
     * Create TariffChange Order.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Contract/operation/order-create-tariff-change
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param OrderCreateTariffChange\OrderCreateTariffChangeRequest $request An object representing the request for this operation
     * @return OrderCreateTariffChange\OrderCreateTariffChangeCreatedResponse
     */
    public function orderCreateTariffChange(OrderCreateTariffChangeRequest $request): OrderCreateTariffChangeCreatedResponse;
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
    public function orderGetOrder(OrderGetOrderRequest $request): OrderGetOrderOKResponse;
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
    public function orderListCustomerOrders(OrderListCustomerOrdersRequest $request): OrderListCustomerOrdersOKResponse;
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
    public function orderListProjectOrders(OrderListProjectOrdersRequest $request): OrderListProjectOrdersOKResponse;
    /**
     * Preview Order.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Contract/operation/order-preview-order
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param OrderPreviewOrder\OrderPreviewOrderRequest $request An object representing the request for this operation
     * @return UntypedResponse
     */
    public function orderPreviewOrder(OrderPreviewOrderRequest $request): UntypedResponse;
    /**
     * Preview TariffChange.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Contract/operation/order-preview-tariff-change
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param OrderPreviewTariffChange\OrderPreviewTariffChangeRequest $request An object representing the request for this operation
     * @return OrderPreviewTariffChange\OrderPreviewTariffChangeOKResponse
     */
    public function orderPreviewTariffChange(OrderPreviewTariffChangeRequest $request): OrderPreviewTariffChangeOKResponse;
}
