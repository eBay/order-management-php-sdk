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
use EBay\OrderManagement\GraphQL\Types\Results\BulkUpdateItemCommitmentTagsOutput;
use EBay\OrderManagement\GraphQL\Types\Results\BulkUpdatePurchaseQuotesOutput;
use EBay\OrderManagement\GraphQL\Types\Results\ContractCancellationOutput;
use EBay\OrderManagement\GraphQL\Types\Results\CreateInStoreReturnOutput;
use EBay\OrderManagement\GraphQL\Types\Results\DeleteReturnRuleListingGroupOutput;
use EBay\OrderManagement\GraphQL\Types\Results\DeleteSellerReturnRuleOutput;
use EBay\OrderManagement\GraphQL\Types\Results\CreateItemCommitmentCancellationOutput;
use EBay\OrderManagement\GraphQL\Types\Results\CreateOrderCancellationOutput;
use EBay\OrderManagement\GraphQL\Types\Results\CreatePurchaseQuoteCancellationOutput;
use EBay\OrderManagement\GraphQL\Types\Results\CreatePurchaseQuoteOutput;
use EBay\OrderManagement\GraphQL\Types\Results\DeclineContractCancellationOutput;
use EBay\OrderManagement\GraphQL\Types\Results\DeclineReturnOutput;
use EBay\OrderManagement\GraphQL\Types\Results\ItemCommitmentsByIdsOutput;
use EBay\OrderManagement\GraphQL\Types\Results\ItemCommitmentsOutput;
use EBay\OrderManagement\GraphQL\Types\Results\MarkItemCommitmentsPaidOutput;
use EBay\OrderManagement\GraphQL\Types\Results\MarkOrdersPaidOutput;
use EBay\OrderManagement\GraphQL\Types\Results\OrderInquiryOutput;
use EBay\OrderManagement\GraphQL\Types\Results\OrderLineItemsByIdsOutput;
use EBay\OrderManagement\GraphQL\Types\Results\OrderReturnOutput;
use EBay\OrderManagement\GraphQL\Types\Results\OrdersByIdsOutput;
use EBay\OrderManagement\GraphQL\Types\Results\OrdersOutput;
use EBay\OrderManagement\GraphQL\Types\Results\ProcessOrderInquiryRefundOutput;
use EBay\OrderManagement\GraphQL\Types\Results\ProcessReturnRefundOutput;
use EBay\OrderManagement\GraphQL\Types\Results\ProposeKeepItemWithPartialRefundOutput;
use EBay\OrderManagement\GraphQL\Types\Results\PurchaseQuoteLineItemsByIdsOutput;
use EBay\OrderManagement\GraphQL\Types\Results\PurchaseQuotesByIdsOutput;
use EBay\OrderManagement\GraphQL\Types\Results\PurchaseQuotesOutput;
use EBay\OrderManagement\GraphQL\Types\Results\ReturnResponseRuleOutput;
use EBay\OrderManagement\GraphQL\Types\Results\ReturnRuleListingGroupOutput;
use EBay\OrderManagement\GraphQL\Types\Results\ReturnToAddressRuleOutput;
use EBay\OrderManagement\GraphQL\Types\Results\UpdateSellerReturnResponseRulesPrioritiesOutput;
use EBay\OrderManagement\GraphQL\Types\Results\UpdateSellerReturnRuleStatusOutput;
use EBay\OrderManagement\GraphQL\Types\Results\UpdateSellerReturnToAddressRulesPrioritiesOutput;
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

    /** Mark up to 100 item commitments as payment received. */
    public function markItemCommitmentsPaid(array $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): MarkItemCommitmentsPaidOutput
    {
        $data = $this->dynamic->execute(ItemCommitmentOperations::MARK_ITEM_COMMITMENTS_PAID, ['input' => $input], $accessToken, $requestOptions);
        return MarkItemCommitmentsPaidOutput::fromArray($data['markItemCommitmentsPaid'] ?? []);
    }

    /** Bulk add/remove tags on item commitments. */
    public function bulkUpdateItemCommitmentTags(array $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): BulkUpdateItemCommitmentTagsOutput
    {
        $data = $this->dynamic->execute(ItemCommitmentOperations::BULK_UPDATE_ITEM_COMMITMENT_TAGS, ['input' => $input], $accessToken, $requestOptions);
        return BulkUpdateItemCommitmentTagsOutput::fromArray($data['bulkUpdateItemCommitmentTags'] ?? []);
    }

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
    public function orders(array $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): OrdersOutput
    {
        $data = $this->dynamic->execute(ItemCommitmentOperations::ORDERS, ['input' => $input], $accessToken, $requestOptions);
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

    /** Retrieve purchase quotes for the authenticated user. */
    public function purchaseQuotes(?string $accessToken = null, ?RequestOptions $requestOptions = null): PurchaseQuotesOutput
    {
        $data = $this->dynamic->execute(PurchaseQuoteOperations::PURCHASE_QUOTES, [], $accessToken, $requestOptions);
        return PurchaseQuotesOutput::fromArray($data['purchaseQuotes'] ?? []);
    }

    /** Retrieve up to 100 purchase quotes by their IDs. */
    public function purchaseQuotesByIds(array $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): PurchaseQuotesByIdsOutput
    {
        $data = $this->dynamic->execute(PurchaseQuoteOperations::PURCHASE_QUOTES_BY_IDS, ['input' => $input], $accessToken, $requestOptions);
        return PurchaseQuotesByIdsOutput::fromArray($data['purchaseQuotesByIds'] ?? []);
    }

    /** Retrieve purchase quote line items by their IDs. */
    public function purchaseQuoteLineItemsByIds(array $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): PurchaseQuoteLineItemsByIdsOutput
    {
        $data = $this->dynamic->execute(PurchaseQuoteOperations::PURCHASE_QUOTE_LINE_ITEMS_BY_IDS, ['input' => $input], $accessToken, $requestOptions);
        return PurchaseQuoteLineItemsByIdsOutput::fromArray($data['purchaseQuoteLineItemsByIds'] ?? []);
    }

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

    /** Create an in-store return. */
    public function createInStoreReturn(array $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): CreateInStoreReturnOutput
    {
        $data = $this->dynamic->execute(ReturnOperations::CREATE_IN_STORE_RETURN, ['input' => $input], $accessToken, $requestOptions);
        return CreateInStoreReturnOutput::fromArray($data['createInStoreReturn'] ?? []);
    }

    /** Retrieve a return rule listing group by ID. */
    public function returnRuleListingGroup(array $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ReturnRuleListingGroupOutput
    {
        $data = $this->dynamic->execute(ReturnOperations::RETURN_RULE_LISTING_GROUP, ['input' => $input], $accessToken, $requestOptions);
        return ReturnRuleListingGroupOutput::fromArray($data['returnRuleListingGroup'] ?? []);
    }

    /** Create a return rule listing group. */
    public function createReturnRuleListingGroup(array $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ReturnRuleListingGroupOutput
    {
        $data = $this->dynamic->execute(ReturnOperations::CREATE_RETURN_RULE_LISTING_GROUP, ['input' => $input], $accessToken, $requestOptions);
        return ReturnRuleListingGroupOutput::fromArray($data['createReturnRuleListingGroup'] ?? []);
    }

    /** Add listings to a return rule listing group. */
    public function addListingsToReturnRuleListingGroup(array $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ReturnRuleListingGroupOutput
    {
        $data = $this->dynamic->execute(ReturnOperations::ADD_LISTINGS_TO_RETURN_RULE_LISTING_GROUP, ['input' => $input], $accessToken, $requestOptions);
        return ReturnRuleListingGroupOutput::fromArray($data['addListingsToReturnRuleListingGroup'] ?? []);
    }

    /** Delete a return rule listing group. */
    public function deleteReturnRuleListingGroup(array $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): DeleteReturnRuleListingGroupOutput
    {
        $data = $this->dynamic->execute(ReturnOperations::DELETE_RETURN_RULE_LISTING_GROUP, ['input' => $input], $accessToken, $requestOptions);
        return DeleteReturnRuleListingGroupOutput::fromArray($data['deleteReturnRuleListingGroup'] ?? []);
    }

    /** Delete a seller return rule. */
    public function deleteSellerReturnRule(array $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): DeleteSellerReturnRuleOutput
    {
        $data = $this->dynamic->execute(ReturnOperations::DELETE_SELLER_RETURN_RULE, ['input' => $input], $accessToken, $requestOptions);
        return DeleteSellerReturnRuleOutput::fromArray($data['deleteSellerReturnRule'] ?? []);
    }

    /** Append a seller return response rule. */
    public function appendSellerReturnResponseRule(array $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ReturnResponseRuleOutput
    {
        $data = $this->dynamic->execute(ReturnOperations::APPEND_SELLER_RETURN_RESPONSE_RULE, ['input' => $input], $accessToken, $requestOptions);
        return ReturnResponseRuleOutput::fromArray($data['appendSellerReturnResponseRule'] ?? []);
    }

    /** Append a seller return-to-address rule. */
    public function appendSellerReturnToAddressRule(array $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ReturnToAddressRuleOutput
    {
        $data = $this->dynamic->execute(ReturnOperations::APPEND_SELLER_RETURN_TO_ADDRESS_RULE, ['input' => $input], $accessToken, $requestOptions);
        return ReturnToAddressRuleOutput::fromArray($data['appendSellerReturnToAddressRule'] ?? []);
    }

    /** Update conditions on a seller return response rule. */
    public function updateSellerReturnResponseRuleCondition(array $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ReturnResponseRuleOutput
    {
        $data = $this->dynamic->execute(ReturnOperations::UPDATE_SELLER_RETURN_RESPONSE_RULE_CONDITION, ['input' => $input], $accessToken, $requestOptions);
        return ReturnResponseRuleOutput::fromArray($data['updateSellerReturnResponseRuleCondition'] ?? []);
    }

    /** Update priorities of seller return response rules. */
    public function updateSellerReturnResponseRulesPriorities(array $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): UpdateSellerReturnResponseRulesPrioritiesOutput
    {
        $data = $this->dynamic->execute(ReturnOperations::UPDATE_SELLER_RETURN_RESPONSE_RULES_PRIORITIES, ['input' => $input], $accessToken, $requestOptions);
        return UpdateSellerReturnResponseRulesPrioritiesOutput::fromArray($data['updateSellerReturnResponseRulesPriorities'] ?? []);
    }

    /** Enable or disable a seller return rule. */
    public function updateSellerReturnRuleStatus(array $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): UpdateSellerReturnRuleStatusOutput
    {
        $data = $this->dynamic->execute(ReturnOperations::UPDATE_SELLER_RETURN_RULE_STATUS, ['input' => $input], $accessToken, $requestOptions);
        return UpdateSellerReturnRuleStatusOutput::fromArray($data['updateSellerReturnRuleStatus'] ?? []);
    }

    /** Update conditions on a seller return-to-address rule. */
    public function updateSellerReturnToAddressRuleCondition(array $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ReturnToAddressRuleOutput
    {
        $data = $this->dynamic->execute(ReturnOperations::UPDATE_SELLER_RETURN_TO_ADDRESS_RULE_CONDITION, ['input' => $input], $accessToken, $requestOptions);
        return ReturnToAddressRuleOutput::fromArray($data['updateSellerReturnToAddressRuleCondition'] ?? []);
    }

    /** Update priorities of seller return-to-address rules. */
    public function updateSellerReturnToAddressRulesPriorities(array $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): UpdateSellerReturnToAddressRulesPrioritiesOutput
    {
        $data = $this->dynamic->execute(ReturnOperations::UPDATE_SELLER_RETURN_TO_ADDRESS_RULES_PRIORITIES, ['input' => $input], $accessToken, $requestOptions);
        return UpdateSellerReturnToAddressRulesPrioritiesOutput::fromArray($data['updateSellerReturnToAddressRulesPriorities'] ?? []);
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
