<?php

declare(strict_types=1);

namespace EBay\OrderManagement\Clients\GraphQL;

use EBay\OrderManagement\Configuration\RequestOptions;
use EBay\OrderManagement\GraphQL\Operations\CancellationOperations;
use EBay\OrderManagement\GraphQL\Operations\InquiryOperations;
use EBay\OrderManagement\GraphQL\Operations\ItemCommitmentOperations;
use EBay\OrderManagement\GraphQL\Operations\PurchaseQuoteOperations;
use EBay\OrderManagement\GraphQL\Operations\ReturnOperations;

// ── Cancellation types ────────────────────────────────────────────────────────
use EBay\OrderManagement\GraphQL\Types\CancellationOperations\ApproveContractCancellation\Output as ApproveContractCancellationOutput;
use EBay\OrderManagement\GraphQL\Types\CancellationOperations\ContractCancellation\Output as ContractCancellationOutput;
use EBay\OrderManagement\GraphQL\Types\CancellationOperations\CreateItemCommitmentCancellation\Output as CreateItemCommitmentCancellationOutput;
use EBay\OrderManagement\GraphQL\Types\CancellationOperations\CreateOrderCancellation\Output as CreateOrderCancellationOutput;
use EBay\OrderManagement\GraphQL\Types\CancellationOperations\CreatePurchaseQuoteCancellation\Output as CreatePurchaseQuoteCancellationOutput;
use EBay\OrderManagement\GraphQL\Types\CancellationOperations\DeclineContractCancellation\Output as DeclineContractCancellationOutput;
use EBay\OrderManagement\GraphQL\Types\CancellationOperations\SellerContractCancellations\Output as SellerContractCancellationsOutput;

// ── Item commitment & order types ─────────────────────────────────────────────
use EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\BulkUpdateItemCommitmentTags\Output as BulkUpdateItemCommitmentTagsOutput;
use EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\ItemCommitments\Output as ItemCommitmentsOutput;
use EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\ItemCommitmentsByIds\Output as ItemCommitmentsByIdsOutput;
use EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\MarkItemCommitmentsPaid\Output as MarkItemCommitmentsPaidOutput;
use EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\MarkOrdersPaid\Output as MarkOrdersPaidOutput;
use EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\OrderLineItemsByIds\Output as OrderLineItemsByIdsOutput;
use EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\Orders\Output as OrdersOutput;
use EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\OrdersByIds\Output as OrdersByIdsOutput;

// ── Inquiry types ─────────────────────────────────────────────────────────────
use EBay\OrderManagement\GraphQL\Types\InquiryOperations\OrderInquiry\Output as OrderInquiryOutput;
use EBay\OrderManagement\GraphQL\Types\InquiryOperations\ProcessOrderInquiryRefund\Output as ProcessOrderInquiryRefundOutput;
use EBay\OrderManagement\GraphQL\Types\InquiryOperations\ProvideShipmentInfoForItemNotReceivedInquiry\Output as ProvideShipmentInfoForItemNotReceivedInquiryOutput;
use EBay\OrderManagement\GraphQL\Types\InquiryOperations\SellerOrderInquiries\Output as SellerOrderInquiriesOutput;
use EBay\OrderManagement\GraphQL\Types\InquiryOperations\SendOrderInquiryMessage\Output as SendOrderInquiryMessageOutput;
use EBay\OrderManagement\GraphQL\Types\InquiryOperations\SubmitOrderInquiryReferral\Output as SubmitOrderInquiryReferralOutput;

// ── Purchase quote types ──────────────────────────────────────────────────────
use EBay\OrderManagement\GraphQL\Types\PurchaseQuoteOperations\BulkUpdatePurchaseQuotes\Output as BulkUpdatePurchaseQuotesOutput;
use EBay\OrderManagement\GraphQL\Types\PurchaseQuoteOperations\CreatePurchaseQuote\Output as CreatePurchaseQuoteOutput;
use EBay\OrderManagement\GraphQL\Types\PurchaseQuoteOperations\PurchaseQuoteLineItemsByIds\Output as PurchaseQuoteLineItemsByIdsOutput;
use EBay\OrderManagement\GraphQL\Types\PurchaseQuoteOperations\PurchaseQuotes\Output as PurchaseQuotesOutput;
use EBay\OrderManagement\GraphQL\Types\PurchaseQuoteOperations\PurchaseQuotesByIds\Output as PurchaseQuotesByIdsOutput;

// ── Return core types ─────────────────────────────────────────────────────────
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\ApproveReturn\Output as ApproveReturnOutput;
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\AttachReturnShipmentLabel\Output as AttachReturnShipmentLabelOutput;
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\CreateInStoreReturn\Output as CreateInStoreReturnOutput;
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\DeclineReturn\Output as DeclineReturnOutput;
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\OrderReturn\Output as OrderReturnOutput;
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\ProcessReturnRefund\Output as ProcessReturnRefundOutput;
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\ProposeKeepItemWithPartialRefund\Output as ProposeKeepItemWithPartialRefundOutput;
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\ProvideRmaNumber\Output as ProvideRmaNumberOutput;
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\RecordReturnLabelSentOffline\Output as RecordReturnLabelSentOfflineOutput;
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\RecordReturnReceived\Output as RecordReturnReceivedOutput;
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\SellerOrderReturns\Output as SellerOrderReturnsOutput;
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\SellerReturnPreference\Output as SellerReturnPreferenceOutput;
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\SendReturnMessage\Output as SendReturnMessageOutput;
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\SubmitReturnReferral\Output as SubmitReturnReferralOutput;
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\UpdateSellerRmaPreference\Output as UpdateSellerRmaPreferenceOutput;

// ── Return rule types ─────────────────────────────────────────────────────────
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\AddListingsToReturnRuleListingGroup\Output as AddListingsToReturnRuleListingGroupOutput;
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\AppendSellerReturnResponseRule\Output as AppendSellerReturnResponseRuleOutput;
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\AppendSellerReturnToAddressRule\Output as AppendSellerReturnToAddressRuleOutput;
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\CreateReturnRuleListingGroup\Output as CreateReturnRuleListingGroupOutput;
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\DeleteReturnRuleListingGroup\Output as DeleteReturnRuleListingGroupOutput;
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\DeleteSellerReturnRule\Output as DeleteSellerReturnRuleOutput;
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\ReturnRuleListingGroup\Output as ReturnRuleListingGroupOutput;
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\UpdateSellerReturnResponseRuleCondition\Output as UpdateSellerReturnResponseRuleConditionOutput;
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\UpdateSellerReturnResponseRulesPriorities\Output as UpdateSellerReturnResponseRulesPrioritiesOutput;
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\UpdateSellerReturnRuleStatus\Output as UpdateSellerReturnRuleStatusOutput;
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\UpdateSellerReturnToAddressRuleCondition\Output as UpdateSellerReturnToAddressRuleConditionOutput;
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\UpdateSellerReturnToAddressRulesPriorities\Output as UpdateSellerReturnToAddressRulesPrioritiesOutput;

/**
 * Typed GraphQL client for Order Management operations.
 *
 * Each method corresponds to one of the pre-defined operations in the Operations classes.
 * All methods accept an optional $accessToken for per-call auth (overrides the
 * config-level fallback token) and an optional $requestOptions for per-call headers.
 *
 * Use executeRaw() for arbitrary queries or fields not covered here.
 */
final class OrderManagementGraphQLClient
{
    public function __construct(private readonly DynamicGraphQLClient $dynamic) {}

    // ── Cancellations ─────────────────────────────────────────────────────────

    public function approveContractCancellation(array $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ApproveContractCancellationOutput
    {
        $data = $this->dynamic->execute(CancellationOperations::APPROVE_CONTRACT_CANCELLATION, ['input' => $input], $accessToken, $requestOptions);
        return ApproveContractCancellationOutput::fromArray($data['approveContractCancellation'] ?? []);
    }

    public function contractCancellation(array $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ContractCancellationOutput
    {
        $data = $this->dynamic->execute(CancellationOperations::CONTRACT_CANCELLATION, ['input' => $input], $accessToken, $requestOptions);
        return ContractCancellationOutput::fromArray($data['contractCancellation'] ?? []);
    }

    public function createItemCommitmentCancellation(array $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): CreateItemCommitmentCancellationOutput
    {
        $data = $this->dynamic->execute(CancellationOperations::CREATE_ITEM_COMMITMENT_CANCELLATION, ['input' => $input], $accessToken, $requestOptions);
        return CreateItemCommitmentCancellationOutput::fromArray($data['createItemCommitmentCancellation'] ?? []);
    }

    public function createOrderCancellation(array $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): CreateOrderCancellationOutput
    {
        $data = $this->dynamic->execute(CancellationOperations::CREATE_ORDER_CANCELLATION, ['input' => $input], $accessToken, $requestOptions);
        return CreateOrderCancellationOutput::fromArray($data['createOrderCancellation'] ?? []);
    }

    public function createPurchaseQuoteCancellation(array $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): CreatePurchaseQuoteCancellationOutput
    {
        $data = $this->dynamic->execute(CancellationOperations::CREATE_PURCHASE_QUOTE_CANCELLATION, ['input' => $input], $accessToken, $requestOptions);
        return CreatePurchaseQuoteCancellationOutput::fromArray($data['createPurchaseQuoteCancellation'] ?? []);
    }

    public function declineContractCancellation(array $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): DeclineContractCancellationOutput
    {
        $data = $this->dynamic->execute(CancellationOperations::DECLINE_CONTRACT_CANCELLATION, ['input' => $input], $accessToken, $requestOptions);
        return DeclineContractCancellationOutput::fromArray($data['declineContractCancellation'] ?? []);
    }

    public function sellerContractCancellations(array $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): SellerContractCancellationsOutput
    {
        $data = $this->dynamic->execute(CancellationOperations::SELLER_CONTRACT_CANCELLATIONS, ['input' => $input], $accessToken, $requestOptions);
        return SellerContractCancellationsOutput::fromArray($data['sellerContractCancellations'] ?? []);
    }

    // ── Item Commitments & Orders ─────────────────────────────────────────────

    public function markItemCommitmentsPaid(array $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): MarkItemCommitmentsPaidOutput
    {
        $data = $this->dynamic->execute(ItemCommitmentOperations::MARK_ITEM_COMMITMENTS_PAID, ['input' => $input], $accessToken, $requestOptions);
        return MarkItemCommitmentsPaidOutput::fromArray($data['markItemCommitmentsPaid'] ?? []);
    }

    public function bulkUpdateItemCommitmentTags(array $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): BulkUpdateItemCommitmentTagsOutput
    {
        $data = $this->dynamic->execute(ItemCommitmentOperations::BULK_UPDATE_ITEM_COMMITMENT_TAGS, ['input' => $input], $accessToken, $requestOptions);
        return BulkUpdateItemCommitmentTagsOutput::fromArray($data['bulkUpdateItemCommitmentTags'] ?? []);
    }

    public function itemCommitments(array $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ItemCommitmentsOutput
    {
        $data = $this->dynamic->execute(ItemCommitmentOperations::ITEM_COMMITMENTS, ['input' => $input], $accessToken, $requestOptions);
        return ItemCommitmentsOutput::fromArray($data['itemCommitments'] ?? []);
    }

    public function itemCommitmentsByIds(array $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ItemCommitmentsByIdsOutput
    {
        $data = $this->dynamic->execute(ItemCommitmentOperations::ITEM_COMMITMENTS_BY_IDS, ['input' => $input], $accessToken, $requestOptions);
        return ItemCommitmentsByIdsOutput::fromArray($data['itemCommitmentsByIds'] ?? []);
    }

    public function markOrdersPaid(array $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): MarkOrdersPaidOutput
    {
        $data = $this->dynamic->execute(ItemCommitmentOperations::MARK_ORDERS_PAID, ['input' => $input], $accessToken, $requestOptions);
        return MarkOrdersPaidOutput::fromArray($data['markOrdersPaid'] ?? []);
    }

    public function orderLineItemsByIds(array $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): OrderLineItemsByIdsOutput
    {
        $data = $this->dynamic->execute(ItemCommitmentOperations::ORDER_LINE_ITEMS_BY_IDS, ['input' => $input], $accessToken, $requestOptions);
        return OrderLineItemsByIdsOutput::fromArray($data['orderLineItemsByIds'] ?? []);
    }

    public function orders(array $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): OrdersOutput
    {
        $data = $this->dynamic->execute(ItemCommitmentOperations::ORDERS, ['input' => $input], $accessToken, $requestOptions);
        return OrdersOutput::fromArray($data['orders'] ?? []);
    }

    public function ordersByIds(array $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): OrdersByIdsOutput
    {
        $data = $this->dynamic->execute(ItemCommitmentOperations::ORDERS_BY_IDS, ['input' => $input], $accessToken, $requestOptions);
        return OrdersByIdsOutput::fromArray($data['ordersByIds'] ?? []);
    }

    // ── Inquiries ─────────────────────────────────────────────────────────────

    public function orderInquiry(array $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): OrderInquiryOutput
    {
        $data = $this->dynamic->execute(InquiryOperations::ORDER_INQUIRY, ['input' => $input], $accessToken, $requestOptions);
        return OrderInquiryOutput::fromArray($data['orderInquiry'] ?? []);
    }

    public function processOrderInquiryRefund(array $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ProcessOrderInquiryRefundOutput
    {
        $data = $this->dynamic->execute(InquiryOperations::PROCESS_ORDER_INQUIRY_REFUND, ['input' => $input], $accessToken, $requestOptions);
        return ProcessOrderInquiryRefundOutput::fromArray($data['processOrderInquiryRefund'] ?? []);
    }

    public function provideShipmentInfoForItemNotReceivedInquiry(array $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ProvideShipmentInfoForItemNotReceivedInquiryOutput
    {
        $data = $this->dynamic->execute(InquiryOperations::PROVIDE_SHIPMENT_INFO_FOR_ITEM_NOT_RECEIVED_INQUIRY, ['input' => $input], $accessToken, $requestOptions);
        return ProvideShipmentInfoForItemNotReceivedInquiryOutput::fromArray($data['provideShipmentInfoForItemNotReceivedInquiry'] ?? []);
    }

    public function sellerOrderInquiries(array $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): SellerOrderInquiriesOutput
    {
        $data = $this->dynamic->execute(InquiryOperations::SELLER_ORDER_INQUIRIES, ['input' => $input], $accessToken, $requestOptions);
        return SellerOrderInquiriesOutput::fromArray($data['sellerOrderInquiries'] ?? []);
    }

    public function sendOrderInquiryMessage(array $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): SendOrderInquiryMessageOutput
    {
        $data = $this->dynamic->execute(InquiryOperations::SEND_ORDER_INQUIRY_MESSAGE, ['input' => $input], $accessToken, $requestOptions);
        return SendOrderInquiryMessageOutput::fromArray($data['sendOrderInquiryMessage'] ?? []);
    }

    public function submitOrderInquiryReferral(array $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): SubmitOrderInquiryReferralOutput
    {
        $data = $this->dynamic->execute(InquiryOperations::SUBMIT_ORDER_INQUIRY_REFERRAL, ['input' => $input], $accessToken, $requestOptions);
        return SubmitOrderInquiryReferralOutput::fromArray($data['submitOrderInquiryReferral'] ?? []);
    }

    // ── Purchase Quotes ───────────────────────────────────────────────────────

    public function purchaseQuotes(?string $accessToken = null, ?RequestOptions $requestOptions = null): PurchaseQuotesOutput
    {
        $data = $this->dynamic->execute(PurchaseQuoteOperations::PURCHASE_QUOTES, [], $accessToken, $requestOptions);
        return PurchaseQuotesOutput::fromArray($data['purchaseQuotes'] ?? []);
    }

    public function purchaseQuotesByIds(array $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): PurchaseQuotesByIdsOutput
    {
        $data = $this->dynamic->execute(PurchaseQuoteOperations::PURCHASE_QUOTES_BY_IDS, ['input' => $input], $accessToken, $requestOptions);
        return PurchaseQuotesByIdsOutput::fromArray($data['purchaseQuotesByIds'] ?? []);
    }

    public function purchaseQuoteLineItemsByIds(array $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): PurchaseQuoteLineItemsByIdsOutput
    {
        $data = $this->dynamic->execute(PurchaseQuoteOperations::PURCHASE_QUOTE_LINE_ITEMS_BY_IDS, ['input' => $input], $accessToken, $requestOptions);
        return PurchaseQuoteLineItemsByIdsOutput::fromArray($data['purchaseQuoteLineItemsByIds'] ?? []);
    }

    public function bulkUpdatePurchaseQuotes(array $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): BulkUpdatePurchaseQuotesOutput
    {
        $data = $this->dynamic->execute(PurchaseQuoteOperations::BULK_UPDATE_PURCHASE_QUOTES, ['input' => $input], $accessToken, $requestOptions);
        return BulkUpdatePurchaseQuotesOutput::fromArray($data['bulkUpdatePurchaseQuotes'] ?? []);
    }

    public function createPurchaseQuote(array $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): CreatePurchaseQuoteOutput
    {
        $data = $this->dynamic->execute(PurchaseQuoteOperations::CREATE_PURCHASE_QUOTE, ['input' => $input], $accessToken, $requestOptions);
        return CreatePurchaseQuoteOutput::fromArray($data['createPurchaseQuote'] ?? []);
    }

    // ── Returns ───────────────────────────────────────────────────────────────

    public function approveReturn(array $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ApproveReturnOutput
    {
        $data = $this->dynamic->execute(ReturnOperations::APPROVE_RETURN, ['input' => $input], $accessToken, $requestOptions);
        return ApproveReturnOutput::fromArray($data['approveReturn'] ?? []);
    }

    public function attachReturnShipmentLabel(array $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): AttachReturnShipmentLabelOutput
    {
        $data = $this->dynamic->execute(ReturnOperations::ATTACH_RETURN_SHIPMENT_LABEL, ['input' => $input], $accessToken, $requestOptions);
        return AttachReturnShipmentLabelOutput::fromArray($data['attachReturnShipmentLabel'] ?? []);
    }

    public function declineReturn(array $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): DeclineReturnOutput
    {
        $data = $this->dynamic->execute(ReturnOperations::DECLINE_RETURN, ['input' => $input], $accessToken, $requestOptions);
        return DeclineReturnOutput::fromArray($data['declineReturn'] ?? []);
    }

    public function orderReturn(array $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): OrderReturnOutput
    {
        $data = $this->dynamic->execute(ReturnOperations::ORDER_RETURN, ['input' => $input], $accessToken, $requestOptions);
        return OrderReturnOutput::fromArray($data['orderReturn'] ?? []);
    }

    public function processReturnRefund(array $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ProcessReturnRefundOutput
    {
        $data = $this->dynamic->execute(ReturnOperations::PROCESS_RETURN_REFUND, ['input' => $input], $accessToken, $requestOptions);
        return ProcessReturnRefundOutput::fromArray($data['processReturnRefund'] ?? []);
    }

    public function proposeKeepItemWithPartialRefund(array $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ProposeKeepItemWithPartialRefundOutput
    {
        $data = $this->dynamic->execute(ReturnOperations::PROPOSE_KEEP_ITEM_WITH_PARTIAL_REFUND, ['input' => $input], $accessToken, $requestOptions);
        return ProposeKeepItemWithPartialRefundOutput::fromArray($data['proposeKeepItemWithPartialRefund'] ?? []);
    }

    public function provideRmaNumber(array $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ProvideRmaNumberOutput
    {
        $data = $this->dynamic->execute(ReturnOperations::PROVIDE_RMA_NUMBER, ['input' => $input], $accessToken, $requestOptions);
        return ProvideRmaNumberOutput::fromArray($data['provideRmaNumber'] ?? []);
    }

    public function recordReturnLabelSentOffline(array $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): RecordReturnLabelSentOfflineOutput
    {
        $data = $this->dynamic->execute(ReturnOperations::RECORD_RETURN_LABEL_SENT_OFFLINE, ['input' => $input], $accessToken, $requestOptions);
        return RecordReturnLabelSentOfflineOutput::fromArray($data['recordReturnLabelSentOffline'] ?? []);
    }

    public function recordReturnReceived(array $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): RecordReturnReceivedOutput
    {
        $data = $this->dynamic->execute(ReturnOperations::RECORD_RETURN_RECEIVED, ['input' => $input], $accessToken, $requestOptions);
        return RecordReturnReceivedOutput::fromArray($data['recordReturnReceived'] ?? []);
    }

    public function sellerOrderReturns(array $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): SellerOrderReturnsOutput
    {
        $data = $this->dynamic->execute(ReturnOperations::SELLER_ORDER_RETURNS, ['input' => $input], $accessToken, $requestOptions);
        return SellerOrderReturnsOutput::fromArray($data['sellerOrderReturns'] ?? []);
    }

    public function sellerReturnPreference(array $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): SellerReturnPreferenceOutput
    {
        $data = $this->dynamic->execute(ReturnOperations::SELLER_RETURN_PREFERENCE, ['input' => $input], $accessToken, $requestOptions);
        return SellerReturnPreferenceOutput::fromArray($data['sellerReturnPreference'] ?? []);
    }

    public function sendReturnMessage(array $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): SendReturnMessageOutput
    {
        $data = $this->dynamic->execute(ReturnOperations::SEND_RETURN_MESSAGE, ['input' => $input], $accessToken, $requestOptions);
        return SendReturnMessageOutput::fromArray($data['sendReturnMessage'] ?? []);
    }

    public function submitReturnReferral(array $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): SubmitReturnReferralOutput
    {
        $data = $this->dynamic->execute(ReturnOperations::SUBMIT_RETURN_REFERRAL, ['input' => $input], $accessToken, $requestOptions);
        return SubmitReturnReferralOutput::fromArray($data['submitReturnReferral'] ?? []);
    }

    public function updateSellerRmaPreference(array $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): UpdateSellerRmaPreferenceOutput
    {
        $data = $this->dynamic->execute(ReturnOperations::UPDATE_SELLER_RMA_PREFERENCE, ['input' => $input], $accessToken, $requestOptions);
        return UpdateSellerRmaPreferenceOutput::fromArray($data['updateSellerRmaPreference'] ?? []);
    }

    public function createInStoreReturn(array $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): CreateInStoreReturnOutput
    {
        $data = $this->dynamic->execute(ReturnOperations::CREATE_IN_STORE_RETURN, ['input' => $input], $accessToken, $requestOptions);
        return CreateInStoreReturnOutput::fromArray($data['createInStoreReturn'] ?? []);
    }

    // ── Return Rules ──────────────────────────────────────────────────────────

    public function returnRuleListingGroup(array $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ReturnRuleListingGroupOutput
    {
        $data = $this->dynamic->execute(ReturnOperations::RETURN_RULE_LISTING_GROUP, ['input' => $input], $accessToken, $requestOptions);
        return ReturnRuleListingGroupOutput::fromArray($data['returnRuleListingGroup'] ?? []);
    }

    public function createReturnRuleListingGroup(array $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): CreateReturnRuleListingGroupOutput
    {
        $data = $this->dynamic->execute(ReturnOperations::CREATE_RETURN_RULE_LISTING_GROUP, ['input' => $input], $accessToken, $requestOptions);
        return CreateReturnRuleListingGroupOutput::fromArray($data['createReturnRuleListingGroup'] ?? []);
    }

    public function addListingsToReturnRuleListingGroup(array $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): AddListingsToReturnRuleListingGroupOutput
    {
        $data = $this->dynamic->execute(ReturnOperations::ADD_LISTINGS_TO_RETURN_RULE_LISTING_GROUP, ['input' => $input], $accessToken, $requestOptions);
        return AddListingsToReturnRuleListingGroupOutput::fromArray($data['addListingsToReturnRuleListingGroup'] ?? []);
    }

    public function deleteReturnRuleListingGroup(array $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): DeleteReturnRuleListingGroupOutput
    {
        $data = $this->dynamic->execute(ReturnOperations::DELETE_RETURN_RULE_LISTING_GROUP, ['input' => $input], $accessToken, $requestOptions);
        return DeleteReturnRuleListingGroupOutput::fromArray($data['deleteReturnRuleListingGroup'] ?? []);
    }

    public function deleteSellerReturnRule(array $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): DeleteSellerReturnRuleOutput
    {
        $data = $this->dynamic->execute(ReturnOperations::DELETE_SELLER_RETURN_RULE, ['input' => $input], $accessToken, $requestOptions);
        return DeleteSellerReturnRuleOutput::fromArray($data['deleteSellerReturnRule'] ?? []);
    }

    public function appendSellerReturnResponseRule(array $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): AppendSellerReturnResponseRuleOutput
    {
        $data = $this->dynamic->execute(ReturnOperations::APPEND_SELLER_RETURN_RESPONSE_RULE, ['input' => $input], $accessToken, $requestOptions);
        return AppendSellerReturnResponseRuleOutput::fromArray($data['appendSellerReturnResponseRule'] ?? []);
    }

    public function appendSellerReturnToAddressRule(array $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): AppendSellerReturnToAddressRuleOutput
    {
        $data = $this->dynamic->execute(ReturnOperations::APPEND_SELLER_RETURN_TO_ADDRESS_RULE, ['input' => $input], $accessToken, $requestOptions);
        return AppendSellerReturnToAddressRuleOutput::fromArray($data['appendSellerReturnToAddressRule'] ?? []);
    }

    public function updateSellerReturnResponseRuleCondition(array $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): UpdateSellerReturnResponseRuleConditionOutput
    {
        $data = $this->dynamic->execute(ReturnOperations::UPDATE_SELLER_RETURN_RESPONSE_RULE_CONDITION, ['input' => $input], $accessToken, $requestOptions);
        return UpdateSellerReturnResponseRuleConditionOutput::fromArray($data['updateSellerReturnResponseRuleCondition'] ?? []);
    }

    public function updateSellerReturnResponseRulesPriorities(array $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): UpdateSellerReturnResponseRulesPrioritiesOutput
    {
        $data = $this->dynamic->execute(ReturnOperations::UPDATE_SELLER_RETURN_RESPONSE_RULES_PRIORITIES, ['input' => $input], $accessToken, $requestOptions);
        return UpdateSellerReturnResponseRulesPrioritiesOutput::fromArray($data['updateSellerReturnResponseRulesPriorities'] ?? []);
    }

    public function updateSellerReturnRuleStatus(array $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): UpdateSellerReturnRuleStatusOutput
    {
        $data = $this->dynamic->execute(ReturnOperations::UPDATE_SELLER_RETURN_RULE_STATUS, ['input' => $input], $accessToken, $requestOptions);
        return UpdateSellerReturnRuleStatusOutput::fromArray($data['updateSellerReturnRuleStatus'] ?? []);
    }

    public function updateSellerReturnToAddressRuleCondition(array $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): UpdateSellerReturnToAddressRuleConditionOutput
    {
        $data = $this->dynamic->execute(ReturnOperations::UPDATE_SELLER_RETURN_TO_ADDRESS_RULE_CONDITION, ['input' => $input], $accessToken, $requestOptions);
        return UpdateSellerReturnToAddressRuleConditionOutput::fromArray($data['updateSellerReturnToAddressRuleCondition'] ?? []);
    }

    public function updateSellerReturnToAddressRulesPriorities(array $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): UpdateSellerReturnToAddressRulesPrioritiesOutput
    {
        $data = $this->dynamic->execute(ReturnOperations::UPDATE_SELLER_RETURN_TO_ADDRESS_RULES_PRIORITIES, ['input' => $input], $accessToken, $requestOptions);
        return UpdateSellerReturnToAddressRulesPrioritiesOutput::fromArray($data['updateSellerReturnToAddressRulesPriorities'] ?? []);
    }

    // ── Escape Hatch ──────────────────────────────────────────────────────────

    /**
     * @param array<string, mixed> $variables
     * @return array<string, mixed>
     */
    public function executeRaw(string $query, array $variables = [], ?string $accessToken = null, ?RequestOptions $requestOptions = null): array
    {
        return $this->dynamic->execute($query, $variables, $accessToken, $requestOptions);
    }
}
