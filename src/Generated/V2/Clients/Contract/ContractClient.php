<?php

declare(strict_types=1);

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
use Mittwald\ApiClient\Generated\V2\Clients\Contract\DeprecatedContractGetNextTerminationDateForItem\DeprecatedContractGetNextTerminationDateForItemOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\DeprecatedContractGetNextTerminationDateForItem\DeprecatedContractGetNextTerminationDateForItemRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\DeprecatedInvoiceDetailOfInvoice\DeprecatedInvoiceDetailOfInvoiceOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\DeprecatedInvoiceDetailOfInvoice\DeprecatedInvoiceDetailOfInvoiceRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\GetBaseItemOfContract\GetBaseItemOfContractOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\GetBaseItemOfContract\GetBaseItemOfContractRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\GetDetailOfContract\GetDetailOfContractOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\GetDetailOfContract\GetDetailOfContractRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\GetDetailOfContractByAiHosting\GetDetailOfContractByAiHostingOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\GetDetailOfContractByAiHosting\GetDetailOfContractByAiHostingRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\GetDetailOfContractByCertificate\GetDetailOfContractByCertificateOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\GetDetailOfContractByCertificate\GetDetailOfContractByCertificateRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\GetDetailOfContractByDomain\GetDetailOfContractByDomainOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\GetDetailOfContractByDomain\GetDetailOfContractByDomainRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\GetDetailOfContractByLeadFyndr\GetDetailOfContractByLeadFyndrOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\GetDetailOfContractByLeadFyndr\GetDetailOfContractByLeadFyndrRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\GetDetailOfContractByLicense\GetDetailOfContractByLicenseOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\GetDetailOfContractByLicense\GetDetailOfContractByLicenseRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\GetDetailOfContractByMailAddress\GetDetailOfContractByMailAddressOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\GetDetailOfContractByMailAddress\GetDetailOfContractByMailAddressRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\GetDetailOfContractByProject\GetDetailOfContractByProjectOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\GetDetailOfContractByProject\GetDetailOfContractByProjectRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\GetDetailOfContractByServer\GetDetailOfContractByServerOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\GetDetailOfContractByServer\GetDetailOfContractByServerRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\GetDetailOfContractItem\GetDetailOfContractItemOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\GetDetailOfContractItem\GetDetailOfContractItemRequest;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\InvoiceDetail\InvoiceDetailOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\InvoiceDetail\InvoiceDetailRequest;
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
use Mittwald\ApiClient\Generated\V2\Clients\Contract\OrderListOrders\OrderListOrdersOKResponse;
use Mittwald\ApiClient\Generated\V2\Clients\Contract\OrderListOrders\OrderListOrdersRequest;
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
     * @param CancelContractItemTerminationRequest $request An object representing the request for this operation
     * @return CancelContractItemTerminationOKResponse Return the contractId and the contractItemId of the ContractItem where the Termination was cancelled.
     */
    public function cancelContractItemTermination(CancelContractItemTerminationRequest $request): CancelContractItemTerminationOKResponse;
    /**
     * Cancel the TariffChange for the referred ContractItem.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Contract/operation/contract-cancel-contract-tariff-change
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param CancelContractTariffChangeRequest $request An object representing the request for this operation
     * @return CancelContractTariffChangeOKResponse Returns the contractId of the Contract whose TariffChange was cancelled.
     */
    public function cancelContractTariffChange(CancelContractTariffChangeRequest $request): CancelContractTariffChangeOKResponse;
    /**
     * Cancel the Termination for the referred Contract.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Contract/operation/contract-cancel-contract-termination
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param CancelContractTerminationRequest $request An object representing the request for this operation
     * @return CancelContractTerminationOKResponse Return the contractId of the Contract whose Termination was cancelled.
     */
    public function cancelContractTermination(CancelContractTerminationRequest $request): CancelContractTerminationOKResponse;
    /**
     * Return the BaseItem of the Contract with the given ID.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Contract/operation/contract-get-base-item-of-contract
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetBaseItemOfContractRequest $request An object representing the request for this operation
     * @return GetBaseItemOfContractOKResponse The BaseItem of the Contract.
     */
    public function getBaseItemOfContract(GetBaseItemOfContractRequest $request): GetBaseItemOfContractOKResponse;
    /**
     * Returns the Contract with the given ID.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Contract/operation/contract-get-detail-of-contract
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetDetailOfContractRequest $request An object representing the request for this operation
     */
    public function getDetailOfContract(GetDetailOfContractRequest $request): GetDetailOfContractOKResponse;
    /**
     * Return the AI Hosting Contract for the given Customer.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Contract/operation/contract-get-detail-of-contract-by-ai-hosting
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetDetailOfContractByAiHostingRequest $request An object representing the request for this operation
     * @return GetDetailOfContractByAiHostingOKResponse Return the AI Hosting Contract for the given Customer.
     */
    public function getDetailOfContractByAiHosting(GetDetailOfContractByAiHostingRequest $request): GetDetailOfContractByAiHostingOKResponse;
    /**
     * Return the Contract for the given Certificate.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Contract/operation/contract-get-detail-of-contract-by-certificate
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetDetailOfContractByCertificateRequest $request An object representing the request for this operation
     * @return GetDetailOfContractByCertificateOKResponse Returns an active Contract for the given Certificate.
     */
    public function getDetailOfContractByCertificate(GetDetailOfContractByCertificateRequest $request): GetDetailOfContractByCertificateOKResponse;
    /**
     * Return the Contract for the given Domain.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Contract/operation/contract-get-detail-of-contract-by-domain
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetDetailOfContractByDomainRequest $request An object representing the request for this operation
     * @return GetDetailOfContractByDomainOKResponse Returns an active Contract for the given Domain.
     */
    public function getDetailOfContractByDomain(GetDetailOfContractByDomainRequest $request): GetDetailOfContractByDomainOKResponse;
    /**
     * Return the Contract for the given LeadFyndrProfile.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Contract/operation/contract-get-detail-of-contract-by-lead-fyndr
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetDetailOfContractByLeadFyndrRequest $request An object representing the request for this operation
     * @return GetDetailOfContractByLeadFyndrOKResponse Returns an active Contract for the given LeadFyndrProfile.
     */
    public function getDetailOfContractByLeadFyndr(GetDetailOfContractByLeadFyndrRequest $request): GetDetailOfContractByLeadFyndrOKResponse;
    /**
     * Return the Contract for the given License.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Contract/operation/contract-get-detail-of-contract-by-license
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetDetailOfContractByLicenseRequest $request An object representing the request for this operation
     * @return GetDetailOfContractByLicenseOKResponse Returns an active Contract for the given License.
     */
    public function getDetailOfContractByLicense(GetDetailOfContractByLicenseRequest $request): GetDetailOfContractByLicenseOKResponse;
    /**
     * Return the Contract for the given Mail Address.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Contract/operation/contract-get-detail-of-contract-by-mail-address
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetDetailOfContractByMailAddressRequest $request An object representing the request for this operation
     * @return GetDetailOfContractByMailAddressOKResponse Returns an active Contract for the given Mail Address.
     */
    public function getDetailOfContractByMailAddress(GetDetailOfContractByMailAddressRequest $request): GetDetailOfContractByMailAddressOKResponse;
    /**
     * Return the Contract for the given Project.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Contract/operation/contract-get-detail-of-contract-by-project
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetDetailOfContractByProjectRequest $request An object representing the request for this operation
     * @return GetDetailOfContractByProjectOKResponse Returns an active Contract for the given Project.
     */
    public function getDetailOfContractByProject(GetDetailOfContractByProjectRequest $request): GetDetailOfContractByProjectOKResponse;
    /**
     * Return the Contract for the given Server.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Contract/operation/contract-get-detail-of-contract-by-server
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetDetailOfContractByServerRequest $request An object representing the request for this operation
     * @return GetDetailOfContractByServerOKResponse Returns an active Contract for the given Server.
     */
    public function getDetailOfContractByServer(GetDetailOfContractByServerRequest $request): GetDetailOfContractByServerOKResponse;
    /**
     * Get the ContractItem with the given ID.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Contract/operation/contract-get-detail-of-contract-item
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param GetDetailOfContractItemRequest $request An object representing the request for this operation
     */
    public function getDetailOfContractItem(GetDetailOfContractItemRequest $request): GetDetailOfContractItemOKResponse;
    /**
     * Return a list of Contracts for the given Customer.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Contract/operation/contract-list-contracts
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param ListContractsRequest $request An object representing the request for this operation
     * @return ListContractsOKResponse Return the Contracts that belong to the Customer.
     */
    public function listContracts(ListContractsRequest $request): ListContractsOKResponse;
    /**
     * Schedule the Termination of a Contract.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Contract/operation/contract-terminate-contract
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param TerminateContractRequest $request An object representing the request for this operation
     * @return TerminateContractCreatedResponse Returns the contractId, the date on which the Termination will take place and the list of affected ContractItems.
     */
    public function terminateContract(TerminateContractRequest $request): TerminateContractCreatedResponse;
    /**
     * Schedule the Termination of a ContractItem.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Contract/operation/contract-terminate-contract-item
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param TerminateContractItemRequest $request An object representing the request for this operation
     * @return TerminateContractItemCreatedResponse Return the contractId, the date on which the Termination will take place and the list of affected ContractItems.
     */
    public function terminateContractItem(TerminateContractItemRequest $request): TerminateContractItemCreatedResponse;
    /**
     * Return the next TerminationDate for the ContractItem with the given ID.
     *
     * This route is deprecated. Use GET /v2/contracts/{contractId}/items/{contractItemId} instead.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Contract/operation/deprecated-contract-get-next-termination-date-for-item
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeprecatedContractGetNextTerminationDateForItemRequest $request An object representing the request for this operation
     * @deprecated
     * @return DeprecatedContractGetNextTerminationDateForItemOKResponse Return the next possible TerminationDate for the ContractItem as date.
     */
    public function deprecatedContractGetNextTerminationDateForItem(DeprecatedContractGetNextTerminationDateForItemRequest $request): DeprecatedContractGetNextTerminationDateForItemOKResponse;
    /**
     * Get details of an Invoice.
     *
     * This route is deprecated. Use /v2/invoices/{invoiceId} instead.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Contract/operation/deprecated-invoice-detail-of-invoice
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param DeprecatedInvoiceDetailOfInvoiceRequest $request An object representing the request for this operation
     * @deprecated
     */
    public function deprecatedInvoiceDetailOfInvoice(DeprecatedInvoiceDetailOfInvoiceRequest $request): DeprecatedInvoiceDetailOfInvoiceOKResponse;
    /**
     * Get details of an Invoice.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Contract/operation/invoice-detail
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param InvoiceDetailRequest $request An object representing the request for this operation
     */
    public function invoiceDetail(InvoiceDetailRequest $request): InvoiceDetailOKResponse;
    /**
     * Get InvoiceSettings of a Customer.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Contract/operation/invoice-get-detail-of-invoice-settings
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param InvoiceGetDetailOfInvoiceSettingsRequest $request An object representing the request for this operation
     */
    public function invoiceGetDetailOfInvoiceSettings(InvoiceGetDetailOfInvoiceSettingsRequest $request): InvoiceGetDetailOfInvoiceSettingsOKResponse;
    /**
     * Request an Access Token for the Invoice file.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Contract/operation/invoice-get-file-access-token
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param InvoiceGetFileAccessTokenRequest $request An object representing the request for this operation
     * @return InvoiceGetFileAccessTokenOKResponse The File Access Token required to access the Invoice file.
     */
    public function invoiceGetFileAccessToken(InvoiceGetFileAccessTokenRequest $request): InvoiceGetFileAccessTokenOKResponse;
    /**
     * List Invoices of a Customer.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Contract/operation/invoice-list-customer-invoices
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param InvoiceListCustomerInvoicesRequest $request An object representing the request for this operation
     */
    public function invoiceListCustomerInvoices(InvoiceListCustomerInvoicesRequest $request): InvoiceListCustomerInvoicesOKResponse;
    /**
     * Update InvoiceSettings of a Customer.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Contract/operation/invoice-update-invoice-settings
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param InvoiceUpdateInvoiceSettingsRequest $request An object representing the request for this operation
     */
    public function invoiceUpdateInvoiceSettings(InvoiceUpdateInvoiceSettingsRequest $request): InvoiceUpdateInvoiceSettingsOKResponse;
    /**
     * Create an Order.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Contract/operation/order-create-order
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param OrderCreateOrderRequest $request An object representing the request for this operation
     */
    public function orderCreateOrder(OrderCreateOrderRequest $request): OrderCreateOrderCreatedResponse;
    /**
     * Create TariffChange Order.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Contract/operation/order-create-tariff-change
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param OrderCreateTariffChangeRequest $request An object representing the request for this operation
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
     * @param OrderGetOrderRequest $request An object representing the request for this operation
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
     * @param OrderListCustomerOrdersRequest $request An object representing the request for this operation
     */
    public function orderListCustomerOrders(OrderListCustomerOrdersRequest $request): OrderListCustomerOrdersOKResponse;
    /**
     * Get list of Orders.
     *
     * The list of Orders the User has access to.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Contract/operation/order-list-orders
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param OrderListOrdersRequest $request An object representing the request for this operation
     */
    public function orderListOrders(OrderListOrdersRequest $request): OrderListOrdersOKResponse;
    /**
     * Get list of Orders of a Project.
     *
     * The list of Order of a Project the User has access to, can be filtered by orderStatus, articleTemplate and count.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Contract/operation/order-list-project-orders
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param OrderListProjectOrdersRequest $request An object representing the request for this operation
     */
    public function orderListProjectOrders(OrderListProjectOrdersRequest $request): OrderListProjectOrdersOKResponse;
    /**
     * Preview Order.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Contract/operation/order-preview-order
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param OrderPreviewOrderRequest $request An object representing the request for this operation
     */
    public function orderPreviewOrder(OrderPreviewOrderRequest $request): UntypedResponse;
    /**
     * Preview TariffChange.
     *
     * @see https://developer.mittwald.de/reference/v2/#tag/Contract/operation/order-preview-tariff-change
     * @throws GuzzleException
     * @throws UnexpectedResponseException
     * @param OrderPreviewTariffChangeRequest $request An object representing the request for this operation
     */
    public function orderPreviewTariffChange(OrderPreviewTariffChangeRequest $request): OrderPreviewTariffChangeOKResponse;
}
