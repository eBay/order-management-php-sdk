<?php

declare(strict_types=1);

namespace EBay\OrderManagement\Clients\GraphQL;

use EBay\OrderManagement\Configuration\RequestOptions;
use EBay\OrderManagement\GraphQL\Operations\CancellationOperations;
use EBay\OrderManagement\GraphQL\Operations\InquiryOperations;
use EBay\OrderManagement\GraphQL\Operations\ItemCommitmentOperations;
use EBay\OrderManagement\GraphQL\Operations\PurchaseQuoteOperations;
use EBay\OrderManagement\GraphQL\Operations\ReturnOperations;
use EBay\OrderManagement\GraphQL\Types\Results\ApproveContractCancellationOutput;
use EBay\OrderManagement\GraphQL\Types\Results\ApproveReturnOutput;
use EBay\OrderManagement\GraphQL\Types\Results\AttachReturnShipmentLabelOutput;
use EBay\OrderManagement\GraphQL\Types\Results\BulkUpdatePurchaseQuotesOutput;
use EBay\OrderManagement\GraphQL\Types\Results\ContractCancellationOutput;
use EBay\OrderManagement\GraphQL\Types\Results\CreateItemCommitmentCancellationOutput;
use EBay\OrderManagement\GraphQL\Types\Results\CreateOrderCancellationOutput;
use EBay\OrderManagement\GraphQL\Types\Results\CreatePurchaseQuoteCancellationOutput;
use EBay\OrderManagement\GraphQL\Types\Results\CreatePurchaseQuoteOutput;
use EBay\OrderManagement\GraphQL\Types\Results\DeclineContractCancellationOutput;
use EBay\OrderManagement\GraphQL\Types\Results\DeclineReturnOutput;
use EBay\OrderManagement\GraphQL\Types\Results\ItemCommitmentsByIdsOutput;
use EBay\OrderManagement\GraphQL\Types\Results\ItemCommitmentsOutput;
use EBay\OrderManagement\GraphQL\Types\Results\MarkOrdersPaidOutput;
use EBay\OrderManagement\GraphQL\Types\Results\OrderInquiryOutput;
use EBay\OrderManagement\GraphQL\Types\Results\OrderLineItemsByIdsOutput;
use EBay\OrderManagement\GraphQL\Types\Results\OrderReturnOutput;
use EBay\OrderManagement\GraphQL\Types\Results\OrdersByIdsOutput;
use EBay\OrderManagement\GraphQL\Types\Results\OrdersOutput;
use EBay\OrderManagement\GraphQL\Types\Results\ProcessOrderInquiryRefundOutput;
use EBay\OrderManagement\GraphQL\Types\Results\ProcessReturnRefundOutput;
use EBay\OrderManagement\GraphQL\Types\Results\ProposeKeepItemWithPartialRefundOutput;
use EBay\OrderManagement\GraphQL\Types\Results\ProvideRmaNumberOutput;
use EBay\OrderManagement\GraphQL\Types\Results\ProvideShipmentInfoForItemNotReceivedInquiryOutput;
use EBay\OrderManagement\GraphQL\Types\Results\RecordReturnLabelSentOfflineOutput;
use EBay\OrderManagement\GraphQL\Types\Results\RecordReturnReceivedOutput;
use EBay\OrderManagement\GraphQL\Types\Results\SellerContractCancellationsOutput;
use EBay\OrderManagement\GraphQL\Types\Results\SellerOrderInquiriesOutput;
use EBay\OrderManagement\GraphQL\Types\Results\SellerOrderReturnsOutput;
use EBay\OrderManagement\GraphQL\Types\Results\SellerReturnPreferenceOutput;
use EBay\OrderManagement\GraphQL\Types\Results\SendOrderInquiryMessageOutput;
use EBay\OrderManagement\GraphQL\Types\Results\SendReturnMessageOutput;
use EBay\OrderManagement\GraphQL\Types\Results\SubmitOrderInquiryReferralOutput;
use EBay\OrderManagement\GraphQL\Types\Results\SubmitReturnReferralOutput;
use EBay\OrderManagement\GraphQL\Types\Results\UpdateSellerRmaPreferenceOutput;

/**
 * Typed GraphQL client for Order Management operations.
 *
 * Each method corresponds to one of the pre-defined operations in operations.json.
 * All methods accept an optional $accessToken for per-call auth (overrides the
 * config-level fallback token) and an optional $requestOptions for per-call headers.
 *
 * Use executeRaw() for arbitrary queries or fields not covered here.
 */
final class OrderManagementGraphQLClient
{
    public function __construct(private readonly DynamicGraphQLClient $dynamic) {}

    // ── Cancellations ─────────────────────────────────────────────────────────

    /** Approve an existing contract cancellation. */
    public function approveContractCancellation(array $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ApproveContractCancellationOutput
    {
        $data = $this->dynamic->execute(CancellationOperations::APPROVE_CONTRACT_CANCELLATION, ['input' => $input], $accessToken, $requestOptions);
        return ApproveContractCancellationOutput::fromArray($data['approveContractCancellation'] ?? []);
    }

    /** Retrieve a contract cancellation by ID. */
    public function contractCancellation(array $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ContractCancellationOutput
    {
        $data = $this->dynamic->execute(CancellationOperations::CONTRACT_CANCELLATION, ['input' => $input], $accessToken, $requestOptions);
        return ContractCancellationOutput::fromArray($data['contractCancellation'] ?? []);
    }

    /** Create a cancellation on an item commitment. */
    public function createItemCommitmentCancellation(array $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): CreateItemCommitmentCancellationOutput
    {
        $data = $this->dynamic->execute(CancellationOperations::CREATE_ITEM_COMMITMENT_CANCELLATION, ['input' => $input], $accessToken, $requestOptions);
        return CreateItemCommitmentCancellationOutput::fromArray($data['createItemCommitmentCancellation'] ?? []);
    }

    /** Create a cancellation on an order. */
    public function createOrderCancellation(array $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): CreateOrderCancellationOutput
    {
        $data = $this->dynamic->execute(CancellationOperations::CREATE_ORDER_CANCELLATION, ['input' => $input], $accessToken, $requestOptions);
        return CreateOrderCancellationOutput::fromArray($data['createOrderCancellation'] ?? []);
    }

    /** Create a cancellation on a purchase quote. */
    public function createPurchaseQuoteCancellation(array $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): CreatePurchaseQuoteCancellationOutput
    {
        $data = $this->dynamic->execute(CancellationOperations::CREATE_PURCHASE_QUOTE_CANCELLATION, ['input' => $input], $accessToken, $requestOptions);
        return CreatePurchaseQuoteCancellationOutput::fromArray($data['createPurchaseQuoteCancellation'] ?? []);
    }

    /** Decline a contract cancellation. */
    public function declineContractCancellation(array $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): DeclineContractCancellationOutput
    {
        $data = $this->dynamic->execute(CancellationOperations::DECLINE_CONTRACT_CANCELLATION, ['input' => $input], $accessToken, $requestOptions);
        return DeclineContractCancellationOutput::fromArray($data['declineContractCancellation'] ?? []);
    }

    /** Retrieve seller's contract cancellations. */
    public function sellerContractCancellations(array $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): SellerContractCancellationsOutput
    {
        $data = $this->dynamic->execute(CancellationOperations::SELLER_CONTRACT_CANCELLATIONS, ['input' => $input], $accessToken, $requestOptions);
        return SellerContractCancellationsOutput::fromArray($data['sellerContractCancellations'] ?? []);
    }

    // ── Item Commitments & Orders ─────────────────────────────────────────────

    /** Retrieve item commitments for the authenticated user. */
    public function itemCommitments(?string $accessToken = null, ?RequestOptions $requestOptions = null): ItemCommitmentsOutput
    {
        $data = $this->dynamic->execute(ItemCommitmentOperations::ITEM_COMMITMENTS, [], $accessToken, $requestOptions);
        return ItemCommitmentsOutput::fromArray($data['itemCommitments'] ?? []);
    }

    /** Retrieve up to 100 item commitments by their IDs. */
    public function itemCommitmentsByIds(array $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ItemCommitmentsByIdsOutput
    {
        $data = $this->dynamic->execute(ItemCommitmentOperations::ITEM_COMMITMENTS_BY_IDS, ['input' => $input], $accessToken, $requestOptions);
        return ItemCommitmentsByIdsOutput::fromArray($data['itemCommitmentsByIds'] ?? []);
    }

    /** Mark up to 100 orders as payment received. */
    public function markOrdersPaid(array $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): MarkOrdersPaidOutput
    {
        $data = $this->dynamic->execute(ItemCommitmentOperations::MARK_ORDERS_PAID, ['input' => $input], $accessToken, $requestOptions);
        return MarkOrdersPaidOutput::fromArray($data['markOrdersPaid'] ?? []);
    }

    /** Retrieve order line items by their IDs. */
    public function orderLineItemsByIds(array $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): OrderLineItemsByIdsOutput
    {
        $data = $this->dynamic->execute(ItemCommitmentOperations::ORDER_LINE_ITEMS_BY_IDS, ['input' => $input], $accessToken, $requestOptions);
        return OrderLineItemsByIdsOutput::fromArray($data['orderLineItemsByIds'] ?? []);
    }

    /** Retrieve orders for the authenticated user. */
    public function orders(?string $accessToken = null, ?RequestOptions $requestOptions = null): OrdersOutput
    {
        $data = $this->dynamic->execute(ItemCommitmentOperations::ORDERS, [], $accessToken, $requestOptions);
        return OrdersOutput::fromArray($data['orders'] ?? []);
    }

    /** Retrieve orders by their IDs. */
    public function ordersByIds(array $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): OrdersByIdsOutput
    {
        $data = $this->dynamic->execute(ItemCommitmentOperations::ORDERS_BY_IDS, ['input' => $input], $accessToken, $requestOptions);
        return OrdersByIdsOutput::fromArray($data['ordersByIds'] ?? []);
    }

    // ── Inquiries ─────────────────────────────────────────────────────────────

    /** Retrieve full details of an order inquiry by ID. */
    public function orderInquiry(array $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): OrderInquiryOutput
    {
        $data = $this->dynamic->execute(InquiryOperations::ORDER_INQUIRY, ['input' => $input], $accessToken, $requestOptions);
        return OrderInquiryOutput::fromArray($data['orderInquiry'] ?? []);
    }

    /** Issue a full refund for an order inquiry. */
    public function processOrderInquiryRefund(array $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ProcessOrderInquiryRefundOutput
    {
        $data = $this->dynamic->execute(InquiryOperations::PROCESS_ORDER_INQUIRY_REFUND, ['input' => $input], $accessToken, $requestOptions);
        return ProcessOrderInquiryRefundOutput::fromArray($data['processOrderInquiryRefund'] ?? []);
    }

    /** Provide shipment info for an Item Not Received inquiry. */
    public function provideShipmentInfoForItemNotReceivedInquiry(array $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ProvideShipmentInfoForItemNotReceivedInquiryOutput
    {
        $data = $this->dynamic->execute(InquiryOperations::PROVIDE_SHIPMENT_INFO_FOR_ITEM_NOT_RECEIVED_INQUIRY, ['input' => $input], $accessToken, $requestOptions);
        return ProvideShipmentInfoForItemNotReceivedInquiryOutput::fromArray($data['provideShipmentInfoForItemNotReceivedInquiry'] ?? []);
    }

    /** Retrieve a paginated list of seller order inquiries. */
    public function sellerOrderInquiries(array $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): SellerOrderInquiriesOutput
    {
        $data = $this->dynamic->execute(InquiryOperations::SELLER_ORDER_INQUIRIES, ['input' => $input], $accessToken, $requestOptions);
        return SellerOrderInquiriesOutput::fromArray($data['sellerOrderInquiries'] ?? []);
    }

    /** Send a message within an order inquiry. */
    public function sendOrderInquiryMessage(array $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): SendOrderInquiryMessageOutput
    {
        $data = $this->dynamic->execute(InquiryOperations::SEND_ORDER_INQUIRY_MESSAGE, ['input' => $input], $accessToken, $requestOptions);
        return SendOrderInquiryMessageOutput::fromArray($data['sendOrderInquiryMessage'] ?? []);
    }

    /** Submit an order inquiry to eBay as a referral. */
    public function submitOrderInquiryReferral(array $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): SubmitOrderInquiryReferralOutput
    {
        $data = $this->dynamic->execute(InquiryOperations::SUBMIT_ORDER_INQUIRY_REFERRAL, ['input' => $input], $accessToken, $requestOptions);
        return SubmitOrderInquiryReferralOutput::fromArray($data['submitOrderInquiryReferral'] ?? []);
    }

    // ── Purchase Quotes ───────────────────────────────────────────────────────

    /** Bulk update up to 100 purchase quotes. */
    public function bulkUpdatePurchaseQuotes(array $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): BulkUpdatePurchaseQuotesOutput
    {
        $data = $this->dynamic->execute(PurchaseQuoteOperations::BULK_UPDATE_PURCHASE_QUOTES, ['input' => $input], $accessToken, $requestOptions);
        return BulkUpdatePurchaseQuotesOutput::fromArray($data['bulkUpdatePurchaseQuotes'] ?? []);
    }

    /** Create a new purchase quote. */
    public function createPurchaseQuote(array $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): CreatePurchaseQuoteOutput
    {
        $data = $this->dynamic->execute(PurchaseQuoteOperations::CREATE_PURCHASE_QUOTE, ['input' => $input], $accessToken, $requestOptions);
        return CreatePurchaseQuoteOutput::fromArray($data['createPurchaseQuote'] ?? []);
    }

    // ── Returns ───────────────────────────────────────────────────────────────

    /** Approve a return request. */
    public function approveReturn(array $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ApproveReturnOutput
    {
        $data = $this->dynamic->execute(ReturnOperations::APPROVE_RETURN, ['input' => $input], $accessToken, $requestOptions);
        return ApproveReturnOutput::fromArray($data['approveReturn'] ?? []);
    }

    /** Attach a return shipment label to a return. */
    public function attachReturnShipmentLabel(array $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): AttachReturnShipmentLabelOutput
    {
        $data = $this->dynamic->execute(ReturnOperations::ATTACH_RETURN_SHIPMENT_LABEL, ['input' => $input], $accessToken, $requestOptions);
        return AttachReturnShipmentLabelOutput::fromArray($data['attachReturnShipmentLabel'] ?? []);
    }

    /** Decline a return request. */
    public function declineReturn(array $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): DeclineReturnOutput
    {
        $data = $this->dynamic->execute(ReturnOperations::DECLINE_RETURN, ['input' => $input], $accessToken, $requestOptions);
        return DeclineReturnOutput::fromArray($data['declineReturn'] ?? []);
    }

    /** Retrieve a return by ID. */
    public function orderReturn(array $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): OrderReturnOutput
    {
        $data = $this->dynamic->execute(ReturnOperations::ORDER_RETURN, ['input' => $input], $accessToken, $requestOptions);
        return OrderReturnOutput::fromArray($data['orderReturn'] ?? []);
    }

    /** Process a refund for a return. */
    public function processReturnRefund(array $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ProcessReturnRefundOutput
    {
        $data = $this->dynamic->execute(ReturnOperations::PROCESS_RETURN_REFUND, ['input' => $input], $accessToken, $requestOptions);
        return ProcessReturnRefundOutput::fromArray($data['processReturnRefund'] ?? []);
    }

    /** Propose a keep-item-with-partial-refund offer. */
    public function proposeKeepItemWithPartialRefund(array $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ProposeKeepItemWithPartialRefundOutput
    {
        $data = $this->dynamic->execute(ReturnOperations::PROPOSE_KEEP_ITEM_WITH_PARTIAL_REFUND, ['input' => $input], $accessToken, $requestOptions);
        return ProposeKeepItemWithPartialRefundOutput::fromArray($data['proposeKeepItemWithPartialRefund'] ?? []);
    }

    /** Provide an RMA number for a return. */
    public function provideRmaNumber(array $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ProvideRmaNumberOutput
    {
        $data = $this->dynamic->execute(ReturnOperations::PROVIDE_RMA_NUMBER, ['input' => $input], $accessToken, $requestOptions);
        return ProvideRmaNumberOutput::fromArray($data['provideRmaNumber'] ?? []);
    }

    /** Record that a return label has been sent offline. */
    public function recordReturnLabelSentOffline(array $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): RecordReturnLabelSentOfflineOutput
    {
        $data = $this->dynamic->execute(ReturnOperations::RECORD_RETURN_LABEL_SENT_OFFLINE, ['input' => $input], $accessToken, $requestOptions);
        return RecordReturnLabelSentOfflineOutput::fromArray($data['recordReturnLabelSentOffline'] ?? []);
    }

    /** Record that a returned item has been received. */
    public function recordReturnReceived(array $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): RecordReturnReceivedOutput
    {
        $data = $this->dynamic->execute(ReturnOperations::RECORD_RETURN_RECEIVED, ['input' => $input], $accessToken, $requestOptions);
        return RecordReturnReceivedOutput::fromArray($data['recordReturnReceived'] ?? []);
    }

    /** Retrieve a list of returns visible to the seller. */
    public function sellerOrderReturns(array $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): SellerOrderReturnsOutput
    {
        $data = $this->dynamic->execute(ReturnOperations::SELLER_ORDER_RETURNS, ['input' => $input], $accessToken, $requestOptions);
        return SellerOrderReturnsOutput::fromArray($data['sellerOrderReturns'] ?? []);
    }

    /** Retrieve seller return preference for a marketplace. */
    public function sellerReturnPreference(array $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): SellerReturnPreferenceOutput
    {
        $data = $this->dynamic->execute(ReturnOperations::SELLER_RETURN_PREFERENCE, ['input' => $input], $accessToken, $requestOptions);
        return SellerReturnPreferenceOutput::fromArray($data['sellerReturnPreference'] ?? []);
    }

    /** Send a message on a return conversation. */
    public function sendReturnMessage(array $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): SendReturnMessageOutput
    {
        $data = $this->dynamic->execute(ReturnOperations::SEND_RETURN_MESSAGE, ['input' => $input], $accessToken, $requestOptions);
        return SendReturnMessageOutput::fromArray($data['sendReturnMessage'] ?? []);
    }

    /** Submit a return to eBay as a referral. */
    public function submitReturnReferral(array $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): SubmitReturnReferralOutput
    {
        $data = $this->dynamic->execute(ReturnOperations::SUBMIT_RETURN_REFERRAL, ['input' => $input], $accessToken, $requestOptions);
        return SubmitReturnReferralOutput::fromArray($data['submitReturnReferral'] ?? []);
    }

    /** Update seller's RMA preference. */
    public function updateSellerRmaPreference(array $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): UpdateSellerRmaPreferenceOutput
    {
        $data = $this->dynamic->execute(ReturnOperations::UPDATE_SELLER_RMA_PREFERENCE, ['input' => $input], $accessToken, $requestOptions);
        return UpdateSellerRmaPreferenceOutput::fromArray($data['updateSellerRmaPreference'] ?? []);
    }

    // ── Escape Hatch ──────────────────────────────────────────────────────────

    /**
     * Execute an arbitrary GraphQL query/mutation and return the raw response data.
     *
     * @param array<string, mixed> $variables
     * @return array<string, mixed>
     */
    public function executeRaw(string $query, array $variables = [], ?string $accessToken = null, ?RequestOptions $requestOptions = null): array
    {
        return $this->dynamic->execute($query, $variables, $accessToken, $requestOptions);
    }
}
