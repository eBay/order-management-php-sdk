<?php

declare(strict_types=1);

namespace EBay\OrderManagement\Clients\GraphQL;

use EBay\OrderManagement\Configuration\RequestOptions;
use EBay\OrderManagement\GraphQL\Operations\CancellationOperations;
use EBay\OrderManagement\GraphQL\Operations\InquiryOperations;
use EBay\OrderManagement\GraphQL\Operations\ItemCommitmentOperations;
use EBay\OrderManagement\GraphQL\Operations\PurchaseQuoteOperations;
use EBay\OrderManagement\GraphQL\Operations\ReturnOperations;

// ── Cancellation input types ──────────────────────────────────────────────────
use EBay\OrderManagement\GraphQL\Types\CancellationOperations\ApproveContractCancellation\Input as ApproveContractCancellationInput;
use EBay\OrderManagement\GraphQL\Types\CancellationOperations\ContractCancellation\Input as ContractCancellationInput;
use EBay\OrderManagement\GraphQL\Types\CancellationOperations\CreateItemCommitmentCancellation\Input as CreateItemCommitmentCancellationInput;
use EBay\OrderManagement\GraphQL\Types\CancellationOperations\CreateOrderCancellation\Input as CreateOrderCancellationInput;
use EBay\OrderManagement\GraphQL\Types\CancellationOperations\CreatePurchaseQuoteCancellation\Input as CreatePurchaseQuoteCancellationInput;
use EBay\OrderManagement\GraphQL\Types\CancellationOperations\DeclineContractCancellation\Input as DeclineContractCancellationInput;
use EBay\OrderManagement\GraphQL\Types\CancellationOperations\SellerContractCancellations\Input as SellerContractCancellationsInput;

// ── Cancellation output types ─────────────────────────────────────────────────
use EBay\OrderManagement\GraphQL\Types\CancellationOperations\ApproveContractCancellation\Output as ApproveContractCancellationOutput;
use EBay\OrderManagement\GraphQL\Types\CancellationOperations\ContractCancellation\Output as ContractCancellationOutput;
use EBay\OrderManagement\GraphQL\Types\CancellationOperations\CreateItemCommitmentCancellation\Output as CreateItemCommitmentCancellationOutput;
use EBay\OrderManagement\GraphQL\Types\CancellationOperations\CreateOrderCancellation\Output as CreateOrderCancellationOutput;
use EBay\OrderManagement\GraphQL\Types\CancellationOperations\CreatePurchaseQuoteCancellation\Output as CreatePurchaseQuoteCancellationOutput;
use EBay\OrderManagement\GraphQL\Types\CancellationOperations\DeclineContractCancellation\Output as DeclineContractCancellationOutput;
use EBay\OrderManagement\GraphQL\Types\CancellationOperations\SellerContractCancellations\Output as SellerContractCancellationsOutput;

// ── Item commitment & order input types ───────────────────────────────────────
use EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\BulkUpdateItemCommitmentTags\Input as BulkUpdateItemCommitmentTagsInput;
use EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\ItemCommitments\Input as ItemCommitmentsInput;
use EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\ItemCommitmentsByIds\Input as ItemCommitmentsByIdsInput;
use EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\MarkItemCommitmentsPaid\Input as MarkItemCommitmentsPaidInput;
use EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\MarkOrdersPaid\Input as MarkOrdersPaidInput;
use EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\OrderLineItemsByIds\Input as OrderLineItemsByIdsInput;
use EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\Orders\Input as OrdersInput;
use EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\OrdersByIds\Input as OrdersByIdsInput;

// ── Item commitment & order output types ──────────────────────────────────────
use EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\BulkUpdateItemCommitmentTags\Output as BulkUpdateItemCommitmentTagsOutput;
use EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\ItemCommitments\Output as ItemCommitmentsOutput;
use EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\ItemCommitmentsByIds\Output as ItemCommitmentsByIdsOutput;
use EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\MarkItemCommitmentsPaid\Output as MarkItemCommitmentsPaidOutput;
use EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\MarkOrdersPaid\Output as MarkOrdersPaidOutput;
use EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\OrderLineItemsByIds\Output as OrderLineItemsByIdsOutput;
use EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\Orders\Output as OrdersOutput;
use EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\OrdersByIds\Output as OrdersByIdsOutput;

// ── Inquiry input types ───────────────────────────────────────────────────────
use EBay\OrderManagement\GraphQL\Types\InquiryOperations\OrderInquiry\Input as OrderInquiryInput;
use EBay\OrderManagement\GraphQL\Types\InquiryOperations\ProcessOrderInquiryRefund\Input as ProcessOrderInquiryRefundInput;
use EBay\OrderManagement\GraphQL\Types\InquiryOperations\ProvideShipmentInfoForItemNotReceivedInquiry\Input as ProvideShipmentInfoForItemNotReceivedInquiryInput;
use EBay\OrderManagement\GraphQL\Types\InquiryOperations\SellerOrderInquiries\Input as SellerOrderInquiriesInput;
use EBay\OrderManagement\GraphQL\Types\InquiryOperations\SendOrderInquiryMessage\Input as SendOrderInquiryMessageInput;
use EBay\OrderManagement\GraphQL\Types\InquiryOperations\SubmitOrderInquiryReferral\Input as SubmitOrderInquiryReferralInput;

// ── Inquiry output types ──────────────────────────────────────────────────────
use EBay\OrderManagement\GraphQL\Types\InquiryOperations\OrderInquiry\Output as OrderInquiryOutput;
use EBay\OrderManagement\GraphQL\Types\InquiryOperations\ProcessOrderInquiryRefund\Output as ProcessOrderInquiryRefundOutput;
use EBay\OrderManagement\GraphQL\Types\InquiryOperations\ProvideShipmentInfoForItemNotReceivedInquiry\Output as ProvideShipmentInfoForItemNotReceivedInquiryOutput;
use EBay\OrderManagement\GraphQL\Types\InquiryOperations\SellerOrderInquiries\Output as SellerOrderInquiriesOutput;
use EBay\OrderManagement\GraphQL\Types\InquiryOperations\SendOrderInquiryMessage\Output as SendOrderInquiryMessageOutput;
use EBay\OrderManagement\GraphQL\Types\InquiryOperations\SubmitOrderInquiryReferral\Output as SubmitOrderInquiryReferralOutput;

// ── Purchase quote input types ────────────────────────────────────────────────
use EBay\OrderManagement\GraphQL\Types\PurchaseQuoteOperations\BulkUpdatePurchaseQuotes\Input as BulkUpdatePurchaseQuotesInput;
use EBay\OrderManagement\GraphQL\Types\PurchaseQuoteOperations\CreatePurchaseQuote\Input as CreatePurchaseQuoteInput;
use EBay\OrderManagement\GraphQL\Types\PurchaseQuoteOperations\PurchaseQuoteLineItemsByIds\Input as PurchaseQuoteLineItemsByIdsInput;
use EBay\OrderManagement\GraphQL\Types\PurchaseQuoteOperations\PurchaseQuotesByIds\Input as PurchaseQuotesByIdsInput;

// ── Purchase quote output types ───────────────────────────────────────────────
use EBay\OrderManagement\GraphQL\Types\PurchaseQuoteOperations\BulkUpdatePurchaseQuotes\Output as BulkUpdatePurchaseQuotesOutput;
use EBay\OrderManagement\GraphQL\Types\PurchaseQuoteOperations\CreatePurchaseQuote\Output as CreatePurchaseQuoteOutput;
use EBay\OrderManagement\GraphQL\Types\PurchaseQuoteOperations\PurchaseQuoteLineItemsByIds\Output as PurchaseQuoteLineItemsByIdsOutput;
use EBay\OrderManagement\GraphQL\Types\PurchaseQuoteOperations\PurchaseQuotes\Output as PurchaseQuotesOutput;
use EBay\OrderManagement\GraphQL\Types\PurchaseQuoteOperations\PurchaseQuotesByIds\Output as PurchaseQuotesByIdsOutput;

// ── Return core input types ───────────────────────────────────────────────────
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\ApproveReturn\Input as ApproveReturnInput;
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\AttachReturnShipmentLabel\Input as AttachReturnShipmentLabelInput;
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\CreateInStoreReturn\Input as CreateInStoreReturnInput;
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\DeclineReturn\Input as DeclineReturnInput;
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\OrderReturn\Input as OrderReturnInput;
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\ProcessReturnRefund\Input as ProcessReturnRefundInput;
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\ProposeKeepItemWithPartialRefund\Input as ProposeKeepItemWithPartialRefundInput;
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\ProvideRmaNumber\Input as ProvideRmaNumberInput;
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\RecordReturnLabelSentOffline\Input as RecordReturnLabelSentOfflineInput;
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\RecordReturnReceived\Input as RecordReturnReceivedInput;
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\SellerOrderReturns\Input as SellerOrderReturnsInput;
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\SellerReturnPreference\Input as SellerReturnPreferenceInput;
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\SendReturnMessage\Input as SendReturnMessageInput;
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\SubmitReturnReferral\Input as SubmitReturnReferralInput;
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\UpdateSellerRmaPreference\Input as UpdateSellerRmaPreferenceInput;

// ── Return core output types ──────────────────────────────────────────────────
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

// ── Return rule input types ───────────────────────────────────────────────────
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\AddListingsToReturnRuleListingGroup\Input as AddListingsToReturnRuleListingGroupInput;
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\AppendSellerReturnResponseRule\Input as AppendSellerReturnResponseRuleInput;
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\AppendSellerReturnToAddressRule\Input as AppendSellerReturnToAddressRuleInput;
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\CreateReturnRuleListingGroup\Input as CreateReturnRuleListingGroupInput;
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\DeleteReturnRuleListingGroup\Input as DeleteReturnRuleListingGroupInput;
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\DeleteSellerReturnRule\Input as DeleteSellerReturnRuleInput;
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\ReturnRuleListingGroup\Input as ReturnRuleListingGroupInput;
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\UpdateSellerReturnResponseRuleCondition\Input as UpdateSellerReturnResponseRuleConditionInput;
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\UpdateSellerReturnResponseRulesPriorities\Input as UpdateSellerReturnResponseRulesPrioritiesInput;
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\UpdateSellerReturnRuleStatus\Input as UpdateSellerReturnRuleStatusInput;
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\UpdateSellerReturnToAddressRuleCondition\Input as UpdateSellerReturnToAddressRuleConditionInput;
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\UpdateSellerReturnToAddressRulesPriorities\Input as UpdateSellerReturnToAddressRulesPrioritiesInput;

// ── Return rule output types ──────────────────────────────────────────────────
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

    public function approveContractCancellation(ApproveContractCancellationInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ApproveContractCancellationOutput
    {
        $data = $this->dynamic->execute(CancellationOperations::APPROVE_CONTRACT_CANCELLATION(), ['input' => (object)$input->toArray()], $accessToken, $requestOptions);
        return ApproveContractCancellationOutput::fromArray($data['approveContractCancellation'] ?? []);
    }

    public function contractCancellation(ContractCancellationInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ContractCancellationOutput
    {
        $data = $this->dynamic->execute(CancellationOperations::CONTRACT_CANCELLATION(), ['input' => (object)$input->toArray()], $accessToken, $requestOptions);
        return ContractCancellationOutput::fromArray($data['contractCancellation'] ?? []);
    }

    public function createItemCommitmentCancellation(CreateItemCommitmentCancellationInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): CreateItemCommitmentCancellationOutput
    {
        $data = $this->dynamic->execute(CancellationOperations::CREATE_ITEM_COMMITMENT_CANCELLATION(), ['input' => (object)$input->toArray()], $accessToken, $requestOptions);
        return CreateItemCommitmentCancellationOutput::fromArray($data['createItemCommitmentCancellation'] ?? []);
    }

    public function createOrderCancellation(CreateOrderCancellationInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): CreateOrderCancellationOutput
    {
        $data = $this->dynamic->execute(CancellationOperations::CREATE_ORDER_CANCELLATION(), ['input' => (object)$input->toArray()], $accessToken, $requestOptions);
        return CreateOrderCancellationOutput::fromArray($data['createOrderCancellation'] ?? []);
    }

    public function createPurchaseQuoteCancellation(CreatePurchaseQuoteCancellationInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): CreatePurchaseQuoteCancellationOutput
    {
        $data = $this->dynamic->execute(CancellationOperations::CREATE_PURCHASE_QUOTE_CANCELLATION(), ['input' => (object)$input->toArray()], $accessToken, $requestOptions);
        return CreatePurchaseQuoteCancellationOutput::fromArray($data['createPurchaseQuoteCancellation'] ?? []);
    }

    public function declineContractCancellation(DeclineContractCancellationInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): DeclineContractCancellationOutput
    {
        $data = $this->dynamic->execute(CancellationOperations::DECLINE_CONTRACT_CANCELLATION(), ['input' => (object)$input->toArray()], $accessToken, $requestOptions);
        return DeclineContractCancellationOutput::fromArray($data['declineContractCancellation'] ?? []);
    }

    public function sellerContractCancellations(SellerContractCancellationsInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): SellerContractCancellationsOutput
    {
        $data = $this->dynamic->execute(CancellationOperations::SELLER_CONTRACT_CANCELLATIONS(), ['input' => (object)$input->toArray()], $accessToken, $requestOptions);
        return SellerContractCancellationsOutput::fromArray($data['sellerContractCancellations'] ?? []);
    }

    // ── Item Commitments & Orders ─────────────────────────────────────────────

    public function markItemCommitmentsPaid(MarkItemCommitmentsPaidInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): MarkItemCommitmentsPaidOutput
    {
        $data = $this->dynamic->execute(ItemCommitmentOperations::MARK_ITEM_COMMITMENTS_PAID(), ['input' => (object)$input->toArray()], $accessToken, $requestOptions);
        return MarkItemCommitmentsPaidOutput::fromArray($data['markItemCommitmentsPaid'] ?? []);
    }

    public function bulkUpdateItemCommitmentTags(BulkUpdateItemCommitmentTagsInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): BulkUpdateItemCommitmentTagsOutput
    {
        $data = $this->dynamic->execute(ItemCommitmentOperations::BULK_UPDATE_ITEM_COMMITMENT_TAGS(), ['input' => (object)$input->toArray()], $accessToken, $requestOptions);
        return BulkUpdateItemCommitmentTagsOutput::fromArray($data['bulkUpdateItemCommitmentTags'] ?? []);
    }

    public function itemCommitments(ItemCommitmentsInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ItemCommitmentsOutput
    {
        $data = $this->dynamic->execute(ItemCommitmentOperations::ITEM_COMMITMENTS(), ['input' => (object)$input->toArray()], $accessToken, $requestOptions);
        return ItemCommitmentsOutput::fromArray($data['itemCommitments'] ?? []);
    }

    public function itemCommitmentsByIds(ItemCommitmentsByIdsInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ItemCommitmentsByIdsOutput
    {
        $data = $this->dynamic->execute(ItemCommitmentOperations::ITEM_COMMITMENTS_BY_IDS(), ['input' => (object)$input->toArray()], $accessToken, $requestOptions);
        return ItemCommitmentsByIdsOutput::fromArray($data['itemCommitmentsByIds'] ?? []);
    }

    public function markOrdersPaid(MarkOrdersPaidInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): MarkOrdersPaidOutput
    {
        $data = $this->dynamic->execute(ItemCommitmentOperations::MARK_ORDERS_PAID(), ['input' => (object)$input->toArray()], $accessToken, $requestOptions);
        return MarkOrdersPaidOutput::fromArray($data['markOrdersPaid'] ?? []);
    }

    public function orderLineItemsByIds(OrderLineItemsByIdsInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): OrderLineItemsByIdsOutput
    {
        $data = $this->dynamic->execute(ItemCommitmentOperations::ORDER_LINE_ITEMS_BY_IDS(), ['input' => (object)$input->toArray()], $accessToken, $requestOptions);
        return OrderLineItemsByIdsOutput::fromArray($data['orderLineItemsByIds'] ?? []);
    }

    public function orders(OrdersInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): OrdersOutput
    {
        $data = $this->dynamic->execute(ItemCommitmentOperations::ORDERS(), ['input' => (object)$input->toArray()], $accessToken, $requestOptions);
        return OrdersOutput::fromArray($data['orders'] ?? []);
    }

    public function ordersByIds(OrdersByIdsInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): OrdersByIdsOutput
    {
        $data = $this->dynamic->execute(ItemCommitmentOperations::ORDERS_BY_IDS(), ['input' => (object)$input->toArray()], $accessToken, $requestOptions);
        return OrdersByIdsOutput::fromArray($data['ordersByIds'] ?? []);
    }

    // ── Inquiries ─────────────────────────────────────────────────────────────

    public function orderInquiry(OrderInquiryInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): OrderInquiryOutput
    {
        $data = $this->dynamic->execute(InquiryOperations::ORDER_INQUIRY(), ['input' => (object)$input->toArray()], $accessToken, $requestOptions);
        return OrderInquiryOutput::fromArray($data['orderInquiry'] ?? []);
    }

    public function processOrderInquiryRefund(ProcessOrderInquiryRefundInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ProcessOrderInquiryRefundOutput
    {
        $data = $this->dynamic->execute(InquiryOperations::PROCESS_ORDER_INQUIRY_REFUND(), ['input' => (object)$input->toArray()], $accessToken, $requestOptions);
        return ProcessOrderInquiryRefundOutput::fromArray($data['processOrderInquiryRefund'] ?? []);
    }

    public function provideShipmentInfoForItemNotReceivedInquiry(ProvideShipmentInfoForItemNotReceivedInquiryInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ProvideShipmentInfoForItemNotReceivedInquiryOutput
    {
        $data = $this->dynamic->execute(InquiryOperations::PROVIDE_SHIPMENT_INFO_FOR_ITEM_NOT_RECEIVED_INQUIRY(), ['input' => (object)$input->toArray()], $accessToken, $requestOptions);
        return ProvideShipmentInfoForItemNotReceivedInquiryOutput::fromArray($data['provideShipmentInfoForItemNotReceivedInquiry'] ?? []);
    }

    public function sellerOrderInquiries(SellerOrderInquiriesInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): SellerOrderInquiriesOutput
    {
        $data = $this->dynamic->execute(InquiryOperations::SELLER_ORDER_INQUIRIES(), ['input' => (object)$input->toArray()], $accessToken, $requestOptions);
        return SellerOrderInquiriesOutput::fromArray($data['sellerOrderInquiries'] ?? []);
    }

    public function sendOrderInquiryMessage(SendOrderInquiryMessageInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): SendOrderInquiryMessageOutput
    {
        $data = $this->dynamic->execute(InquiryOperations::SEND_ORDER_INQUIRY_MESSAGE(), ['input' => (object)$input->toArray()], $accessToken, $requestOptions);
        return SendOrderInquiryMessageOutput::fromArray($data['sendOrderInquiryMessage'] ?? []);
    }

    public function submitOrderInquiryReferral(SubmitOrderInquiryReferralInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): SubmitOrderInquiryReferralOutput
    {
        $data = $this->dynamic->execute(InquiryOperations::SUBMIT_ORDER_INQUIRY_REFERRAL(), ['input' => (object)$input->toArray()], $accessToken, $requestOptions);
        return SubmitOrderInquiryReferralOutput::fromArray($data['submitOrderInquiryReferral'] ?? []);
    }

    // ── Purchase Quotes ───────────────────────────────────────────────────────

    public function purchaseQuotes(?string $accessToken = null, ?RequestOptions $requestOptions = null): PurchaseQuotesOutput
    {
        $data = $this->dynamic->execute(PurchaseQuoteOperations::PURCHASE_QUOTES(), [], $accessToken, $requestOptions);
        return PurchaseQuotesOutput::fromArray($data['purchaseQuotes'] ?? []);
    }

    public function purchaseQuotesByIds(PurchaseQuotesByIdsInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): PurchaseQuotesByIdsOutput
    {
        $data = $this->dynamic->execute(PurchaseQuoteOperations::PURCHASE_QUOTES_BY_IDS(), ['input' => (object)$input->toArray()], $accessToken, $requestOptions);
        return PurchaseQuotesByIdsOutput::fromArray($data['purchaseQuotesByIds'] ?? []);
    }

    public function purchaseQuoteLineItemsByIds(PurchaseQuoteLineItemsByIdsInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): PurchaseQuoteLineItemsByIdsOutput
    {
        $data = $this->dynamic->execute(PurchaseQuoteOperations::PURCHASE_QUOTE_LINE_ITEMS_BY_IDS(), ['input' => (object)$input->toArray()], $accessToken, $requestOptions);
        return PurchaseQuoteLineItemsByIdsOutput::fromArray($data['purchaseQuoteLineItemsByIds'] ?? []);
    }

    public function bulkUpdatePurchaseQuotes(BulkUpdatePurchaseQuotesInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): BulkUpdatePurchaseQuotesOutput
    {
        $data = $this->dynamic->execute(PurchaseQuoteOperations::BULK_UPDATE_PURCHASE_QUOTES(), ['input' => (object)$input->toArray()], $accessToken, $requestOptions);
        return BulkUpdatePurchaseQuotesOutput::fromArray($data['bulkUpdatePurchaseQuotes'] ?? []);
    }

    public function createPurchaseQuote(CreatePurchaseQuoteInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): CreatePurchaseQuoteOutput
    {
        $data = $this->dynamic->execute(PurchaseQuoteOperations::CREATE_PURCHASE_QUOTE(), ['input' => (object)$input->toArray()], $accessToken, $requestOptions);
        return CreatePurchaseQuoteOutput::fromArray($data['createPurchaseQuote'] ?? []);
    }

    // ── Returns ───────────────────────────────────────────────────────────────

    public function approveReturn(ApproveReturnInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ApproveReturnOutput
    {
        $data = $this->dynamic->execute(ReturnOperations::APPROVE_RETURN(), ['input' => (object)$input->toArray()], $accessToken, $requestOptions);
        return ApproveReturnOutput::fromArray($data['approveReturn'] ?? []);
    }

    public function attachReturnShipmentLabel(AttachReturnShipmentLabelInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): AttachReturnShipmentLabelOutput
    {
        $data = $this->dynamic->execute(ReturnOperations::ATTACH_RETURN_SHIPMENT_LABEL(), ['input' => (object)$input->toArray()], $accessToken, $requestOptions);
        return AttachReturnShipmentLabelOutput::fromArray($data['attachReturnShipmentLabel'] ?? []);
    }

    public function declineReturn(DeclineReturnInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): DeclineReturnOutput
    {
        $data = $this->dynamic->execute(ReturnOperations::DECLINE_RETURN(), ['input' => (object)$input->toArray()], $accessToken, $requestOptions);
        return DeclineReturnOutput::fromArray($data['declineReturn'] ?? []);
    }

    public function orderReturn(OrderReturnInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): OrderReturnOutput
    {
        $data = $this->dynamic->execute(ReturnOperations::ORDER_RETURN(), ['input' => (object)$input->toArray()], $accessToken, $requestOptions);
        return OrderReturnOutput::fromArray($data['orderReturn'] ?? []);
    }

    public function processReturnRefund(ProcessReturnRefundInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ProcessReturnRefundOutput
    {
        $data = $this->dynamic->execute(ReturnOperations::PROCESS_RETURN_REFUND(), ['input' => (object)$input->toArray()], $accessToken, $requestOptions);
        return ProcessReturnRefundOutput::fromArray($data['processReturnRefund'] ?? []);
    }

    public function proposeKeepItemWithPartialRefund(ProposeKeepItemWithPartialRefundInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ProposeKeepItemWithPartialRefundOutput
    {
        $data = $this->dynamic->execute(ReturnOperations::PROPOSE_KEEP_ITEM_WITH_PARTIAL_REFUND(), ['input' => (object)$input->toArray()], $accessToken, $requestOptions);
        return ProposeKeepItemWithPartialRefundOutput::fromArray($data['proposeKeepItemWithPartialRefund'] ?? []);
    }

    public function provideRmaNumber(ProvideRmaNumberInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ProvideRmaNumberOutput
    {
        $data = $this->dynamic->execute(ReturnOperations::PROVIDE_RMA_NUMBER(), ['input' => (object)$input->toArray()], $accessToken, $requestOptions);
        return ProvideRmaNumberOutput::fromArray($data['provideRmaNumber'] ?? []);
    }

    public function recordReturnLabelSentOffline(RecordReturnLabelSentOfflineInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): RecordReturnLabelSentOfflineOutput
    {
        $data = $this->dynamic->execute(ReturnOperations::RECORD_RETURN_LABEL_SENT_OFFLINE(), ['input' => (object)$input->toArray()], $accessToken, $requestOptions);
        return RecordReturnLabelSentOfflineOutput::fromArray($data['recordReturnLabelSentOffline'] ?? []);
    }

    public function recordReturnReceived(RecordReturnReceivedInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): RecordReturnReceivedOutput
    {
        $data = $this->dynamic->execute(ReturnOperations::RECORD_RETURN_RECEIVED(), ['input' => (object)$input->toArray()], $accessToken, $requestOptions);
        return RecordReturnReceivedOutput::fromArray($data['recordReturnReceived'] ?? []);
    }

    public function sellerOrderReturns(SellerOrderReturnsInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): SellerOrderReturnsOutput
    {
        $data = $this->dynamic->execute(ReturnOperations::SELLER_ORDER_RETURNS(), ['input' => (object)$input->toArray()], $accessToken, $requestOptions);
        return SellerOrderReturnsOutput::fromArray($data['sellerOrderReturns'] ?? []);
    }

    public function sellerReturnPreference(SellerReturnPreferenceInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): SellerReturnPreferenceOutput
    {
        $data = $this->dynamic->execute(ReturnOperations::SELLER_RETURN_PREFERENCE(), ['input' => (object)$input->toArray()], $accessToken, $requestOptions);
        return SellerReturnPreferenceOutput::fromArray($data['sellerReturnPreference'] ?? []);
    }

    public function sendReturnMessage(SendReturnMessageInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): SendReturnMessageOutput
    {
        $data = $this->dynamic->execute(ReturnOperations::SEND_RETURN_MESSAGE(), ['input' => (object)$input->toArray()], $accessToken, $requestOptions);
        return SendReturnMessageOutput::fromArray($data['sendReturnMessage'] ?? []);
    }

    public function submitReturnReferral(SubmitReturnReferralInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): SubmitReturnReferralOutput
    {
        $data = $this->dynamic->execute(ReturnOperations::SUBMIT_RETURN_REFERRAL(), ['input' => (object)$input->toArray()], $accessToken, $requestOptions);
        return SubmitReturnReferralOutput::fromArray($data['submitReturnReferral'] ?? []);
    }

    public function updateSellerRmaPreference(UpdateSellerRmaPreferenceInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): UpdateSellerRmaPreferenceOutput
    {
        $data = $this->dynamic->execute(ReturnOperations::UPDATE_SELLER_RMA_PREFERENCE(), ['input' => (object)$input->toArray()], $accessToken, $requestOptions);
        return UpdateSellerRmaPreferenceOutput::fromArray($data['updateSellerRmaPreference'] ?? []);
    }

    public function createInStoreReturn(CreateInStoreReturnInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): CreateInStoreReturnOutput
    {
        $data = $this->dynamic->execute(ReturnOperations::CREATE_IN_STORE_RETURN(), ['input' => (object)$input->toArray()], $accessToken, $requestOptions);
        return CreateInStoreReturnOutput::fromArray($data['createInStoreReturn'] ?? []);
    }

    // ── Return Rules ──────────────────────────────────────────────────────────

    public function returnRuleListingGroup(ReturnRuleListingGroupInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ReturnRuleListingGroupOutput
    {
        $data = $this->dynamic->execute(ReturnOperations::RETURN_RULE_LISTING_GROUP(), ['input' => (object)$input->toArray()], $accessToken, $requestOptions);
        return ReturnRuleListingGroupOutput::fromArray($data['returnRuleListingGroup'] ?? []);
    }

    public function createReturnRuleListingGroup(CreateReturnRuleListingGroupInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): CreateReturnRuleListingGroupOutput
    {
        $data = $this->dynamic->execute(ReturnOperations::CREATE_RETURN_RULE_LISTING_GROUP(), ['input' => (object)$input->toArray()], $accessToken, $requestOptions);
        return CreateReturnRuleListingGroupOutput::fromArray($data['createReturnRuleListingGroup'] ?? []);
    }

    public function addListingsToReturnRuleListingGroup(AddListingsToReturnRuleListingGroupInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): AddListingsToReturnRuleListingGroupOutput
    {
        $data = $this->dynamic->execute(ReturnOperations::ADD_LISTINGS_TO_RETURN_RULE_LISTING_GROUP(), ['input' => (object)$input->toArray()], $accessToken, $requestOptions);
        return AddListingsToReturnRuleListingGroupOutput::fromArray($data['addListingsToReturnRuleListingGroup'] ?? []);
    }

    public function deleteReturnRuleListingGroup(DeleteReturnRuleListingGroupInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): DeleteReturnRuleListingGroupOutput
    {
        $data = $this->dynamic->execute(ReturnOperations::DELETE_RETURN_RULE_LISTING_GROUP(), ['input' => (object)$input->toArray()], $accessToken, $requestOptions);
        return DeleteReturnRuleListingGroupOutput::fromArray($data['deleteReturnRuleListingGroup'] ?? []);
    }

    public function deleteSellerReturnRule(DeleteSellerReturnRuleInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): DeleteSellerReturnRuleOutput
    {
        $data = $this->dynamic->execute(ReturnOperations::DELETE_SELLER_RETURN_RULE(), ['input' => (object)$input->toArray()], $accessToken, $requestOptions);
        return DeleteSellerReturnRuleOutput::fromArray($data['deleteSellerReturnRule'] ?? []);
    }

    public function appendSellerReturnResponseRule(AppendSellerReturnResponseRuleInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): AppendSellerReturnResponseRuleOutput
    {
        $data = $this->dynamic->execute(ReturnOperations::APPEND_SELLER_RETURN_RESPONSE_RULE(), ['input' => (object)$input->toArray()], $accessToken, $requestOptions);
        return AppendSellerReturnResponseRuleOutput::fromArray($data['appendSellerReturnResponseRule'] ?? []);
    }

    public function appendSellerReturnToAddressRule(AppendSellerReturnToAddressRuleInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): AppendSellerReturnToAddressRuleOutput
    {
        $data = $this->dynamic->execute(ReturnOperations::APPEND_SELLER_RETURN_TO_ADDRESS_RULE(), ['input' => (object)$input->toArray()], $accessToken, $requestOptions);
        return AppendSellerReturnToAddressRuleOutput::fromArray($data['appendSellerReturnToAddressRule'] ?? []);
    }

    public function updateSellerReturnResponseRuleCondition(UpdateSellerReturnResponseRuleConditionInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): UpdateSellerReturnResponseRuleConditionOutput
    {
        $data = $this->dynamic->execute(ReturnOperations::UPDATE_SELLER_RETURN_RESPONSE_RULE_CONDITION(), ['input' => (object)$input->toArray()], $accessToken, $requestOptions);
        return UpdateSellerReturnResponseRuleConditionOutput::fromArray($data['updateSellerReturnResponseRuleCondition'] ?? []);
    }

    public function updateSellerReturnResponseRulesPriorities(UpdateSellerReturnResponseRulesPrioritiesInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): UpdateSellerReturnResponseRulesPrioritiesOutput
    {
        $data = $this->dynamic->execute(ReturnOperations::UPDATE_SELLER_RETURN_RESPONSE_RULES_PRIORITIES(), ['input' => (object)$input->toArray()], $accessToken, $requestOptions);
        return UpdateSellerReturnResponseRulesPrioritiesOutput::fromArray($data['updateSellerReturnResponseRulesPriorities'] ?? []);
    }

    public function updateSellerReturnRuleStatus(UpdateSellerReturnRuleStatusInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): UpdateSellerReturnRuleStatusOutput
    {
        $data = $this->dynamic->execute(ReturnOperations::UPDATE_SELLER_RETURN_RULE_STATUS(), ['input' => (object)$input->toArray()], $accessToken, $requestOptions);
        return UpdateSellerReturnRuleStatusOutput::fromArray($data['updateSellerReturnRuleStatus'] ?? []);
    }

    public function updateSellerReturnToAddressRuleCondition(UpdateSellerReturnToAddressRuleConditionInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): UpdateSellerReturnToAddressRuleConditionOutput
    {
        $data = $this->dynamic->execute(ReturnOperations::UPDATE_SELLER_RETURN_TO_ADDRESS_RULE_CONDITION(), ['input' => (object)$input->toArray()], $accessToken, $requestOptions);
        return UpdateSellerReturnToAddressRuleConditionOutput::fromArray($data['updateSellerReturnToAddressRuleCondition'] ?? []);
    }

    public function updateSellerReturnToAddressRulesPriorities(UpdateSellerReturnToAddressRulesPrioritiesInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): UpdateSellerReturnToAddressRulesPrioritiesOutput
    {
        $data = $this->dynamic->execute(ReturnOperations::UPDATE_SELLER_RETURN_TO_ADDRESS_RULES_PRIORITIES(), ['input' => (object)$input->toArray()], $accessToken, $requestOptions);
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
