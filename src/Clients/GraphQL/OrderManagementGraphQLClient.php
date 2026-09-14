<?php

// Copyright 2026 eBay Inc.
//
// Licensed under the Apache License, Version 2.0 (the "License");
// you may not use this file except in compliance with the License.
// You may obtain a copy of the License at
//
//     http://www.apache.org/licenses/LICENSE-2.0
//
// Unless required by applicable law or agreed to in writing, software
// distributed under the License is distributed on an "AS IS" BASIS,
// WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
// See the License for the specific language governing permissions and
// limitations under the License.

declare(strict_types=1);

namespace EBay\OrderManagement\Clients\GraphQL;

use EBay\OrderManagement\Configuration\RequestOptions;
use EBay\OrderManagement\GraphQL\Operations\CancellationOperations;
use EBay\OrderManagement\GraphQL\Operations\InquiryOperations;
use EBay\OrderManagement\GraphQL\Operations\ItemCommitmentOperations;
use EBay\OrderManagement\GraphQL\Operations\PurchaseQuoteOperations;
use EBay\OrderManagement\GraphQL\Operations\ReturnOperations;
use EBay\OrderManagement\GraphQL\Types\CancellationOperations\ApproveContractCancellation\Input\ApproveContractCancellationInput;
use EBay\OrderManagement\GraphQL\Types\CancellationOperations\ApproveContractCancellation\Output\ApproveContractCancellationOutput;
use EBay\OrderManagement\GraphQL\Types\CancellationOperations\ContractCancellation\Input\ContractCancellationInput;
use EBay\OrderManagement\GraphQL\Types\CancellationOperations\ContractCancellation\Output\ContractCancellationOutput;
use EBay\OrderManagement\GraphQL\Types\CancellationOperations\CreateItemCommitmentCancellation\Input\CreateItemCommitmentCancellationInput;
use EBay\OrderManagement\GraphQL\Types\CancellationOperations\CreateItemCommitmentCancellation\Output\CreateItemCommitmentCancellationOutput;
use EBay\OrderManagement\GraphQL\Types\CancellationOperations\CreateOrderCancellation\Input as CreateOrderCancellationInput;
use EBay\OrderManagement\GraphQL\Types\CancellationOperations\CreateOrderCancellation\Output as CreateOrderCancellationOutput;
use EBay\OrderManagement\GraphQL\Types\CancellationOperations\CreatePurchaseQuoteCancellation\Input as CreatePurchaseQuoteCancellationInput;
use EBay\OrderManagement\GraphQL\Types\CancellationOperations\CreatePurchaseQuoteCancellation\Output as CreatePurchaseQuoteCancellationOutput;
use EBay\OrderManagement\GraphQL\Types\CancellationOperations\DeclineContractCancellation\Input\DeclineContractCancellationInput;
use EBay\OrderManagement\GraphQL\Types\CancellationOperations\DeclineContractCancellation\Output\DeclineContractCancellationOutput;
use EBay\OrderManagement\GraphQL\Types\CancellationOperations\SellerContractCancellations\Input\SellerContractCancellationsInput;
use EBay\OrderManagement\GraphQL\Types\CancellationOperations\SellerContractCancellations\Output\SellerContractCancellationsOutput;
use EBay\OrderManagement\GraphQL\Types\InquiryOperations\OrderInquiry\Input as OrderInquiryInput;
use EBay\OrderManagement\GraphQL\Types\InquiryOperations\OrderInquiry\Output as OrderInquiryOutput;
use EBay\OrderManagement\GraphQL\Types\InquiryOperations\ProcessOrderInquiryRefund\Input as ProcessOrderInquiryRefundInput;
use EBay\OrderManagement\GraphQL\Types\InquiryOperations\ProcessOrderInquiryRefund\Output as ProcessOrderInquiryRefundOutput;
use EBay\OrderManagement\GraphQL\Types\InquiryOperations\ProvideShipmentInfoForItemNotReceivedInquiry\Input as ProvideShipmentInfoForItemNotReceivedInquiryInput;
use EBay\OrderManagement\GraphQL\Types\InquiryOperations\ProvideShipmentInfoForItemNotReceivedInquiry\Output as ProvideShipmentInfoForItemNotReceivedInquiryOutput;
use EBay\OrderManagement\GraphQL\Types\InquiryOperations\SellerOrderInquiries\Input as SellerOrderInquiriesInput;
use EBay\OrderManagement\GraphQL\Types\InquiryOperations\SellerOrderInquiries\Output as SellerOrderInquiriesOutput;
use EBay\OrderManagement\GraphQL\Types\InquiryOperations\SendOrderInquiryMessage\Input as SendOrderInquiryMessageInput;
use EBay\OrderManagement\GraphQL\Types\InquiryOperations\SendOrderInquiryMessage\Output as SendOrderInquiryMessageOutput;
use EBay\OrderManagement\GraphQL\Types\InquiryOperations\SubmitOrderInquiryReferral\Input as SubmitOrderInquiryReferralInput;
use EBay\OrderManagement\GraphQL\Types\InquiryOperations\SubmitOrderInquiryReferral\Output as SubmitOrderInquiryReferralOutput;
use EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\BulkUpdateItemCommitmentTags\Input as BulkUpdateItemCommitmentTagsInput;
use EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\BulkUpdateItemCommitmentTags\Output as BulkUpdateItemCommitmentTagsOutput;
use EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\BulkUpdateOrderTags\Input as BulkUpdateOrderTagsInput;
use EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\BulkUpdateOrderTags\Output as BulkUpdateOrderTagsOutput;
use EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\ItemCommitments\Input\ItemCommitmentsInput;
use EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\ItemCommitments\Output\ItemCommitmentsOutput;
use EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\ItemCommitmentsByIds\Input as ItemCommitmentsByIdsInput;
use EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\ItemCommitmentsByIds\Output as ItemCommitmentsByIdsOutput;
use EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\MarkItemCommitmentsPaid\Input as MarkItemCommitmentsPaidInput;
use EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\MarkItemCommitmentsPaid\Output as MarkItemCommitmentsPaidOutput;
use EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\MarkOrdersPaid\Input as MarkOrdersPaidInput;
use EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\MarkOrdersPaid\Output as MarkOrdersPaidOutput;
use EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\OrderLineItemsByIds\Input as OrderLineItemsByIdsInput;
use EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\OrderLineItemsByIds\Output as OrderLineItemsByIdsOutput;
use EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\Orders\Input as OrdersInput;
use EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\Orders\Output as OrdersOutput;
use EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\OrdersByIds\Input as OrdersByIdsInput;
use EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\OrdersByIds\Output as OrdersByIdsOutput;
use EBay\OrderManagement\GraphQL\Types\PurchaseQuoteOperations\BulkUpdatePurchaseQuotes\Input as BulkUpdatePurchaseQuotesInput;
use EBay\OrderManagement\GraphQL\Types\PurchaseQuoteOperations\BulkUpdatePurchaseQuotes\Output as BulkUpdatePurchaseQuotesOutput;
use EBay\OrderManagement\GraphQL\Types\PurchaseQuoteOperations\CommitToPurchase\Input as CommitToPurchaseInput;
use EBay\OrderManagement\GraphQL\Types\PurchaseQuoteOperations\CommitToPurchase\Output as CommitToPurchaseOutput;
use EBay\OrderManagement\GraphQL\Types\PurchaseQuoteOperations\CreatePurchaseQuote\Input as CreatePurchaseQuoteInput;
use EBay\OrderManagement\GraphQL\Types\PurchaseQuoteOperations\CreatePurchaseQuote\Output as CreatePurchaseQuoteOutput;
use EBay\OrderManagement\GraphQL\Types\PurchaseQuoteOperations\PurchaseQuoteLineItemsByIds\Input as PurchaseQuoteLineItemsByIdsInput;
use EBay\OrderManagement\GraphQL\Types\PurchaseQuoteOperations\PurchaseQuoteLineItemsByIds\Output as PurchaseQuoteLineItemsByIdsOutput;
use EBay\OrderManagement\GraphQL\Types\PurchaseQuoteOperations\PurchaseQuotes\Input as PurchaseQuotesInput;
use EBay\OrderManagement\GraphQL\Types\PurchaseQuoteOperations\PurchaseQuotes\Output as PurchaseQuotesOutput;
use EBay\OrderManagement\GraphQL\Types\PurchaseQuoteOperations\PurchaseQuotesByIds\Input as PurchaseQuotesByIdsInput;
use EBay\OrderManagement\GraphQL\Types\PurchaseQuoteOperations\PurchaseQuotesByIds\Output as PurchaseQuotesByIdsOutput;
use EBay\OrderManagement\GraphQL\Types\PurchaseQuoteOperations\RequestPurchaseQuote\Input as RequestPurchaseQuoteInput;
use EBay\OrderManagement\GraphQL\Types\PurchaseQuoteOperations\RequestPurchaseQuote\Output as RequestPurchaseQuoteOutput;
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\AddListingsToReturnRuleListingGroup\Input as AddListingsToReturnRuleListingGroupInput;
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\AddListingsToReturnRuleListingGroup\Output as AddListingsToReturnRuleListingGroupOutput;
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\AppendSellerReturnResponseRule\Input as AppendSellerReturnResponseRuleInput;
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\AppendSellerReturnResponseRule\Output as AppendSellerReturnResponseRuleOutput;
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\AppendSellerReturnToAddressRule\Input as AppendSellerReturnToAddressRuleInput;
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\AppendSellerReturnToAddressRule\Output as AppendSellerReturnToAddressRuleOutput;
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\ApproveReturn\Input as ApproveReturnInput;
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\ApproveReturn\Output as ApproveReturnOutput;
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\AttachReturnShipmentLabel\Input as AttachReturnShipmentLabelInput;
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\AttachReturnShipmentLabel\Output as AttachReturnShipmentLabelOutput;
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\CreateInStoreReturn\Input as CreateInStoreReturnInput;
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\CreateInStoreReturn\Output as CreateInStoreReturnOutput;
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\CreateReturnRuleListingGroup\Input as CreateReturnRuleListingGroupInput;
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\CreateReturnRuleListingGroup\Output as CreateReturnRuleListingGroupOutput;
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\DeclineReturn\Input as DeclineReturnInput;
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\DeclineReturn\Output as DeclineReturnOutput;
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\DeleteReturnRuleListingGroup\Input as DeleteReturnRuleListingGroupInput;
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\DeleteReturnRuleListingGroup\Output as DeleteReturnRuleListingGroupOutput;
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\DeleteSellerReturnRule\Input as DeleteSellerReturnRuleInput;
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\DeleteSellerReturnRule\Output as DeleteSellerReturnRuleOutput;
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\OrderReturn\Input as OrderReturnInput;
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\OrderReturn\Output as OrderReturnOutput;
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\ProcessReturnRefund\Input as ProcessReturnRefundInput;
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\ProcessReturnRefund\Output as ProcessReturnRefundOutput;
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\ProposeKeepItemWithPartialRefund\Input as ProposeKeepItemWithPartialRefundInput;
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\ProposeKeepItemWithPartialRefund\Output as ProposeKeepItemWithPartialRefundOutput;
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\ProvideRmaNumber\Input as ProvideRmaNumberInput;
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\ProvideRmaNumber\Output as ProvideRmaNumberOutput;
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\RecordReturnLabelSentOffline\Input as RecordReturnLabelSentOfflineInput;
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\RecordReturnLabelSentOffline\Output as RecordReturnLabelSentOfflineOutput;
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\RecordReturnReceived\Input as RecordReturnReceivedInput;
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\RecordReturnReceived\Output as RecordReturnReceivedOutput;
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\ReturnRuleListingGroup\Input as ReturnRuleListingGroupInput;
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\ReturnRuleListingGroup\Output as ReturnRuleListingGroupOutput;
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\SellerOrderReturns\Input as SellerOrderReturnsInput;
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\SellerOrderReturns\Output as SellerOrderReturnsOutput;
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\SellerReturnPreference\Input as SellerReturnPreferenceInput;
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\SellerReturnPreference\Output as SellerReturnPreferenceOutput;
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\SendReturnMessage\Input as SendReturnMessageInput;
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\SendReturnMessage\Output as SendReturnMessageOutput;
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\SubmitReturnReferral\Input as SubmitReturnReferralInput;
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\SubmitReturnReferral\Output as SubmitReturnReferralOutput;
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\UpdateSellerReturnResponseRuleCondition\Input as UpdateSellerReturnResponseRuleConditionInput;
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\UpdateSellerReturnResponseRuleCondition\Output as UpdateSellerReturnResponseRuleConditionOutput;
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\UpdateSellerReturnResponseRulesPriorities\Input as UpdateSellerReturnResponseRulesPrioritiesInput;
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\UpdateSellerReturnResponseRulesPriorities\Output as UpdateSellerReturnResponseRulesPrioritiesOutput;
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\UpdateSellerReturnRuleStatus\Input as UpdateSellerReturnRuleStatusInput;
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\UpdateSellerReturnRuleStatus\Output as UpdateSellerReturnRuleStatusOutput;
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\UpdateSellerReturnToAddressRuleCondition\Input as UpdateSellerReturnToAddressRuleConditionInput;
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\UpdateSellerReturnToAddressRuleCondition\Output as UpdateSellerReturnToAddressRuleConditionOutput;
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\UpdateSellerReturnToAddressRulesPriorities\Input as UpdateSellerReturnToAddressRulesPrioritiesInput;
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\UpdateSellerReturnToAddressRulesPriorities\Output as UpdateSellerReturnToAddressRulesPrioritiesOutput;
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\UpdateSellerRmaPreference\Input as UpdateSellerRmaPreferenceInput;
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\UpdateSellerRmaPreference\Output as UpdateSellerRmaPreferenceOutput;

final class OrderManagementGraphQLClient
{
    public function __construct(private readonly DynamicGraphQLClient $dynamic) {}

    public function addListingsToReturnRuleListingGroup(AddListingsToReturnRuleListingGroupInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): \EBay\OrderManagement\GraphQL\Types\ReturnOperations\AddListingsToReturnRuleListingGroup\ReturnRuleFeatureNotEnabledError|\EBay\OrderManagement\GraphQL\Types\ReturnOperations\AddListingsToReturnRuleListingGroup\ReturnRuleListingGroup|\EBay\OrderManagement\GraphQL\Types\ReturnOperations\AddListingsToReturnRuleListingGroup\ReturnRuleListingGroupDuplicateListingError|\EBay\OrderManagement\GraphQL\Types\ReturnOperations\AddListingsToReturnRuleListingGroup\ReturnRuleListingGroupMaxSizeExceededError|\EBay\OrderManagement\GraphQL\Types\ReturnOperations\AddListingsToReturnRuleListingGroup\ReturnRuleListingGroupNotFoundError|\EBay\OrderManagement\GraphQL\Types\ReturnOperations\AddListingsToReturnRuleListingGroup\ReturnRuleListingIdsPerRequestLimitExceededError
    {
        $data = $this->dynamic->execute(
            ReturnOperations::ADD_LISTINGS_TO_RETURN_RULE_LISTING_GROUP(),
            ['input' => (object)$input->toArray()],
            $accessToken,
            $requestOptions
        );
        return AddListingsToReturnRuleListingGroupOutput::fromArray($data['addListingsToReturnRuleListingGroup'] ?? []);
    }

    public function appendSellerReturnResponseRule(AppendSellerReturnResponseRuleInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): \EBay\OrderManagement\GraphQL\Types\ReturnOperations\AppendSellerReturnResponseRule\ReturnResponseRule|\EBay\OrderManagement\GraphQL\Types\ReturnOperations\AppendSellerReturnResponseRule\ReturnRuleFeatureNotEnabledError|\EBay\OrderManagement\GraphQL\Types\ReturnOperations\AppendSellerReturnResponseRule\ReturnRuleInvalidConditionsError|\EBay\OrderManagement\GraphQL\Types\ReturnOperations\AppendSellerReturnResponseRule\ReturnRuleLimitExceededError|\EBay\OrderManagement\GraphQL\Types\ReturnOperations\AppendSellerReturnResponseRule\ReturnRuleMissingConditionError|\EBay\OrderManagement\GraphQL\Types\ReturnOperations\AppendSellerReturnResponseRule\ReturnRuleNameError
    {
        $data = $this->dynamic->execute(
            ReturnOperations::APPEND_SELLER_RETURN_RESPONSE_RULE(),
            ['input' => (object)$input->toArray()],
            $accessToken,
            $requestOptions
        );
        return AppendSellerReturnResponseRuleOutput::fromArray($data['appendSellerReturnResponseRule'] ?? []);
    }

    public function appendSellerReturnToAddressRule(AppendSellerReturnToAddressRuleInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): \EBay\OrderManagement\GraphQL\Types\ReturnOperations\AppendSellerReturnToAddressRule\ReturnRuleFeatureNotEnabledError|\EBay\OrderManagement\GraphQL\Types\ReturnOperations\AppendSellerReturnToAddressRule\ReturnRuleInvalidConditionsError|\EBay\OrderManagement\GraphQL\Types\ReturnOperations\AppendSellerReturnToAddressRule\ReturnRuleLimitExceededError|\EBay\OrderManagement\GraphQL\Types\ReturnOperations\AppendSellerReturnToAddressRule\ReturnRuleMissingConditionError|\EBay\OrderManagement\GraphQL\Types\ReturnOperations\AppendSellerReturnToAddressRule\ReturnRuleNameError|\EBay\OrderManagement\GraphQL\Types\ReturnOperations\AppendSellerReturnToAddressRule\ReturnToAddressRequiredError|\EBay\OrderManagement\GraphQL\Types\ReturnOperations\AppendSellerReturnToAddressRule\ReturnToAddressRule|\EBay\OrderManagement\GraphQL\Types\ReturnOperations\AppendSellerReturnToAddressRule\ReturnToAddressValidationError
    {
        $data = $this->dynamic->execute(
            ReturnOperations::APPEND_SELLER_RETURN_TO_ADDRESS_RULE(),
            ['input' => (object)$input->toArray()],
            $accessToken,
            $requestOptions
        );
        return AppendSellerReturnToAddressRuleOutput::fromArray($data['appendSellerReturnToAddressRule'] ?? []);
    }

    public function approveContractCancellation(ApproveContractCancellationInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): \EBay\OrderManagement\GraphQL\Types\CancellationOperations\ApproveContractCancellation\Output\ApproveContractCancellationSuccess|\EBay\OrderManagement\GraphQL\Types\CancellationOperations\ApproveContractCancellation\Output\ContractCancellationActionNotPermittedError|\EBay\OrderManagement\GraphQL\Types\CancellationOperations\ApproveContractCancellation\Output\ContractCancellationNotFoundError|\EBay\OrderManagement\GraphQL\Types\CancellationOperations\ApproveContractCancellation\Output\RefundAuthorizationFailedError|\EBay\OrderManagement\GraphQL\Types\CancellationOperations\ApproveContractCancellation\Output\RefundBlockedByPaymentDisputeError|\EBay\OrderManagement\GraphQL\Types\CancellationOperations\ApproveContractCancellation\Output\RefundInstrumentDeclinedError|\EBay\OrderManagement\GraphQL\Types\CancellationOperations\ApproveContractCancellation\Output\RefundInstrumentInsufficientFundsError|\EBay\OrderManagement\GraphQL\Types\CancellationOperations\ApproveContractCancellation\Output\RefundInstrumentInvalidError|\EBay\OrderManagement\GraphQL\Types\CancellationOperations\ApproveContractCancellation\Output\RefundProcessingError
    {
        $data = $this->dynamic->execute(
            CancellationOperations::APPROVE_CONTRACT_CANCELLATION(),
            ['input' => (object)$input->toArray()],
            $accessToken,
            $requestOptions
        );
        return ApproveContractCancellationOutput::fromArray($data['approveContractCancellation'] ?? []);
    }

    public function approveReturn(ApproveReturnInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): \EBay\OrderManagement\GraphQL\Types\ReturnOperations\ApproveReturn\ApproveReturnInputValidationError|\EBay\OrderManagement\GraphQL\Types\ReturnOperations\ApproveReturn\OrderReturn|\EBay\OrderManagement\GraphQL\Types\ReturnOperations\ApproveReturn\ReturnActionNotPermittedError|\EBay\OrderManagement\GraphQL\Types\ReturnOperations\ApproveReturn\ReturnNotFoundError
    {
        $data = $this->dynamic->execute(
            ReturnOperations::APPROVE_RETURN(),
            ['input' => (object)$input->toArray()],
            $accessToken,
            $requestOptions
        );
        return ApproveReturnOutput::fromArray($data['approveReturn'] ?? []);
    }

    public function attachReturnShipmentLabel(AttachReturnShipmentLabelInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): \EBay\OrderManagement\GraphQL\Types\ReturnOperations\AttachReturnShipmentLabel\AttachReturnShipmentLabelInputValidationError|\EBay\OrderManagement\GraphQL\Types\ReturnOperations\AttachReturnShipmentLabel\MultipleReturnLabelsNotSupportedError|\EBay\OrderManagement\GraphQL\Types\ReturnOperations\AttachReturnShipmentLabel\OrderReturn|\EBay\OrderManagement\GraphQL\Types\ReturnOperations\AttachReturnShipmentLabel\ReturnActionNotPermittedError|\EBay\OrderManagement\GraphQL\Types\ReturnOperations\AttachReturnShipmentLabel\ReturnNotFoundError|\EBay\OrderManagement\GraphQL\Types\ReturnOperations\AttachReturnShipmentLabel\ReturnShipmentLabelNotFoundError|\EBay\OrderManagement\GraphQL\Types\ReturnOperations\AttachReturnShipmentLabel\ReturnShippingLabelRequiredError
    {
        $data = $this->dynamic->execute(
            ReturnOperations::ATTACH_RETURN_SHIPMENT_LABEL(),
            ['input' => (object)$input->toArray()],
            $accessToken,
            $requestOptions
        );
        return AttachReturnShipmentLabelOutput::fromArray($data['attachReturnShipmentLabel'] ?? []);
    }

    public function bulkUpdateItemCommitmentTags(BulkUpdateItemCommitmentTagsInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): \EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\BulkUpdateItemCommitmentTags\BulkUpdateItemCommitmentTagsCompleteFailure|\EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\BulkUpdateItemCommitmentTags\BulkUpdateItemCommitmentTagsPartialFailure|\EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\BulkUpdateItemCommitmentTags\BulkUpdateItemCommitmentTagsSuccess
    {
        $data = $this->dynamic->execute(
            ItemCommitmentOperations::BULK_UPDATE_ITEM_COMMITMENT_TAGS(),
            ['input' => (object)$input->toArray()],
            $accessToken,
            $requestOptions
        );
        return BulkUpdateItemCommitmentTagsOutput::fromArray($data['bulkUpdateItemCommitmentTags'] ?? []);
    }

    public function bulkUpdateOrderTags(BulkUpdateOrderTagsInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): \EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\BulkUpdateOrderTags\BulkUpdateOrderTagsCompleteFailure|\EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\BulkUpdateOrderTags\BulkUpdateOrderTagsPartialFailure|\EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\BulkUpdateOrderTags\BulkUpdateOrderTagsSuccess
    {
        $data = $this->dynamic->execute(
            ItemCommitmentOperations::BULK_UPDATE_ORDER_TAGS(),
            ['input' => (object)$input->toArray()],
            $accessToken,
            $requestOptions
        );
        return BulkUpdateOrderTagsOutput::fromArray($data['bulkUpdateOrderTags'] ?? []);
    }

    public function bulkUpdatePurchaseQuotes(BulkUpdatePurchaseQuotesInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): \EBay\OrderManagement\GraphQL\Types\PurchaseQuoteOperations\BulkUpdatePurchaseQuotes\BulkUpdatePurchaseQuotesCompleteFailure|\EBay\OrderManagement\GraphQL\Types\PurchaseQuoteOperations\BulkUpdatePurchaseQuotes\BulkUpdatePurchaseQuotesPartialFailure|\EBay\OrderManagement\GraphQL\Types\PurchaseQuoteOperations\BulkUpdatePurchaseQuotes\BulkUpdatePurchaseQuotesSuccess
    {
        $data = $this->dynamic->execute(
            PurchaseQuoteOperations::BULK_UPDATE_PURCHASE_QUOTES(),
            ['input' => (object)$input->toArray()],
            $accessToken,
            $requestOptions
        );
        return BulkUpdatePurchaseQuotesOutput::fromArray($data['bulkUpdatePurchaseQuotes'] ?? []);
    }

    public function commitToPurchase(CommitToPurchaseInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): \EBay\OrderManagement\GraphQL\Types\PurchaseQuoteOperations\CommitToPurchase\CommitToPurchaseBusinessRulesViolated|\EBay\OrderManagement\GraphQL\Types\PurchaseQuoteOperations\CommitToPurchase\CommitToPurchaseSuccess|\EBay\OrderManagement\GraphQL\Types\PurchaseQuoteOperations\CommitToPurchase\ReferenceArgumentsNotFound
    {
        $data = $this->dynamic->execute(
            PurchaseQuoteOperations::COMMIT_TO_PURCHASE(),
            ['input' => (object)$input->toArray()],
            $accessToken,
            $requestOptions
        );
        return CommitToPurchaseOutput::fromArray($data['commitToPurchase'] ?? []);
    }

    public function contractCancellation(ContractCancellationInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): \EBay\OrderManagement\GraphQL\Types\CancellationOperations\ContractCancellation\Output\ContractCancellationNotFoundError|\EBay\OrderManagement\GraphQL\Types\CancellationOperations\ContractCancellation\Output\ContractCancellationSuccess
    {
        $data = $this->dynamic->execute(
            CancellationOperations::CONTRACT_CANCELLATION(),
            ['input' => (object)$input->toArray()],
            $accessToken,
            $requestOptions
        );
        return ContractCancellationOutput::fromArray($data['contractCancellation'] ?? []);
    }

    public function createInStoreReturn(CreateInStoreReturnInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): \EBay\OrderManagement\GraphQL\Types\ReturnOperations\CreateInStoreReturn\CreateInStoreReturnInputValidationError|\EBay\OrderManagement\GraphQL\Types\ReturnOperations\CreateInStoreReturn\MultipleLineItemReturnNotSupportedError|\EBay\OrderManagement\GraphQL\Types\ReturnOperations\CreateInStoreReturn\OrderLineItemNotFoundError|\EBay\OrderManagement\GraphQL\Types\ReturnOperations\CreateInStoreReturn\OrderReturn|\EBay\OrderManagement\GraphQL\Types\ReturnOperations\CreateInStoreReturn\ReturnCreationNotAllowedError|\EBay\OrderManagement\GraphQL\Types\ReturnOperations\CreateInStoreReturn\ReturnRequestLineItemRequiredError
    {
        $data = $this->dynamic->execute(
            ReturnOperations::CREATE_IN_STORE_RETURN(),
            ['input' => (object)$input->toArray()],
            $accessToken,
            $requestOptions
        );
        return CreateInStoreReturnOutput::fromArray($data['createInStoreReturn'] ?? []);
    }

    public function createItemCommitmentCancellation(CreateItemCommitmentCancellationInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): \EBay\OrderManagement\GraphQL\Types\CancellationOperations\CreateItemCommitmentCancellation\Output\CreateItemCommitmentCancellationSuccess|\EBay\OrderManagement\GraphQL\Types\CancellationOperations\CreateItemCommitmentCancellation\Output\ItemCommitmentCancellationEligibilityError|\EBay\OrderManagement\GraphQL\Types\CancellationOperations\CreateItemCommitmentCancellation\Output\ItemCommitmentNotFoundError
    {
        $data = $this->dynamic->execute(
            CancellationOperations::CREATE_ITEM_COMMITMENT_CANCELLATION(),
            ['input' => (object)$input->toArray()],
            $accessToken,
            $requestOptions
        );
        return CreateItemCommitmentCancellationOutput::fromArray($data['createItemCommitmentCancellation'] ?? []);
    }

    public function createOrderCancellation(CreateOrderCancellationInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): \EBay\OrderManagement\GraphQL\Types\CancellationOperations\CreateOrderCancellation\CreateOrderCancellationSuccess|\EBay\OrderManagement\GraphQL\Types\CancellationOperations\CreateOrderCancellation\OrderCancellationEligibilityError|\EBay\OrderManagement\GraphQL\Types\CancellationOperations\CreateOrderCancellation\OrderLineItemCancellationEligibilityError|\EBay\OrderManagement\GraphQL\Types\CancellationOperations\CreateOrderCancellation\OrderNotFoundError|\EBay\OrderManagement\GraphQL\Types\CancellationOperations\CreateOrderCancellation\RefundAuthorizationFailedError|\EBay\OrderManagement\GraphQL\Types\CancellationOperations\CreateOrderCancellation\RefundBlockedByPaymentDisputeError|\EBay\OrderManagement\GraphQL\Types\CancellationOperations\CreateOrderCancellation\RefundInstrumentDeclinedError|\EBay\OrderManagement\GraphQL\Types\CancellationOperations\CreateOrderCancellation\RefundInstrumentInsufficientFundsError|\EBay\OrderManagement\GraphQL\Types\CancellationOperations\CreateOrderCancellation\RefundInstrumentInvalidError|\EBay\OrderManagement\GraphQL\Types\CancellationOperations\CreateOrderCancellation\RefundProcessingError
    {
        $data = $this->dynamic->execute(
            CancellationOperations::CREATE_ORDER_CANCELLATION(),
            ['input' => (object)$input->toArray()],
            $accessToken,
            $requestOptions
        );
        return CreateOrderCancellationOutput::fromArray($data['createOrderCancellation'] ?? []);
    }

    public function createPurchaseQuote(CreatePurchaseQuoteInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): \EBay\OrderManagement\GraphQL\Types\PurchaseQuoteOperations\CreatePurchaseQuote\CreatePurchaseQuoteBusinessError|\EBay\OrderManagement\GraphQL\Types\PurchaseQuoteOperations\CreatePurchaseQuote\CreatePurchaseQuoteSuccess
    {
        $data = $this->dynamic->execute(
            PurchaseQuoteOperations::CREATE_PURCHASE_QUOTE(),
            ['input' => (object)$input->toArray()],
            $accessToken,
            $requestOptions
        );
        return CreatePurchaseQuoteOutput::fromArray($data['createPurchaseQuote'] ?? []);
    }

    public function createPurchaseQuoteCancellation(CreatePurchaseQuoteCancellationInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): \EBay\OrderManagement\GraphQL\Types\CancellationOperations\CreatePurchaseQuoteCancellation\CreatePurchaseQuoteCancellationSuccess|\EBay\OrderManagement\GraphQL\Types\CancellationOperations\CreatePurchaseQuoteCancellation\PurchaseQuoteCancellationEligibilityError|\EBay\OrderManagement\GraphQL\Types\CancellationOperations\CreatePurchaseQuoteCancellation\PurchaseQuoteNotFoundError
    {
        $data = $this->dynamic->execute(
            CancellationOperations::CREATE_PURCHASE_QUOTE_CANCELLATION(),
            ['input' => (object)$input->toArray()],
            $accessToken,
            $requestOptions
        );
        return CreatePurchaseQuoteCancellationOutput::fromArray($data['createPurchaseQuoteCancellation'] ?? []);
    }

    public function createReturnRuleListingGroup(CreateReturnRuleListingGroupInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): \EBay\OrderManagement\GraphQL\Types\ReturnOperations\CreateReturnRuleListingGroup\ReturnRuleFeatureNotEnabledError|\EBay\OrderManagement\GraphQL\Types\ReturnOperations\CreateReturnRuleListingGroup\ReturnRuleListingGroup|\EBay\OrderManagement\GraphQL\Types\ReturnOperations\CreateReturnRuleListingGroup\ReturnRuleListingGroupDuplicateListingError|\EBay\OrderManagement\GraphQL\Types\ReturnOperations\CreateReturnRuleListingGroup\ReturnRuleListingGroupInvalidNameError|\EBay\OrderManagement\GraphQL\Types\ReturnOperations\CreateReturnRuleListingGroup\ReturnRuleListingGroupMaxSizeExceededError|\EBay\OrderManagement\GraphQL\Types\ReturnOperations\CreateReturnRuleListingGroup\ReturnRuleListingGroupQuotaExceededError|\EBay\OrderManagement\GraphQL\Types\ReturnOperations\CreateReturnRuleListingGroup\ReturnRuleListingIdsPerRequestLimitExceededError
    {
        $data = $this->dynamic->execute(
            ReturnOperations::CREATE_RETURN_RULE_LISTING_GROUP(),
            ['input' => (object)$input->toArray()],
            $accessToken,
            $requestOptions
        );
        return CreateReturnRuleListingGroupOutput::fromArray($data['createReturnRuleListingGroup'] ?? []);
    }

    public function declineContractCancellation(DeclineContractCancellationInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): \EBay\OrderManagement\GraphQL\Types\CancellationOperations\DeclineContractCancellation\Output\ContractCancellationActionNotPermittedError|\EBay\OrderManagement\GraphQL\Types\CancellationOperations\DeclineContractCancellation\Output\ContractCancellationNotFoundError|\EBay\OrderManagement\GraphQL\Types\CancellationOperations\DeclineContractCancellation\Output\DeclineCancellationInputValidationError|\EBay\OrderManagement\GraphQL\Types\CancellationOperations\DeclineContractCancellation\Output\DeclineContractCancellationSuccess
    {
        $data = $this->dynamic->execute(
            CancellationOperations::DECLINE_CONTRACT_CANCELLATION(),
            ['input' => (object)$input->toArray()],
            $accessToken,
            $requestOptions
        );
        return DeclineContractCancellationOutput::fromArray($data['declineContractCancellation'] ?? []);
    }

    public function declineReturn(DeclineReturnInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): \EBay\OrderManagement\GraphQL\Types\ReturnOperations\DeclineReturn\DeclineReturnInputValidationError|\EBay\OrderManagement\GraphQL\Types\ReturnOperations\DeclineReturn\OrderReturn|\EBay\OrderManagement\GraphQL\Types\ReturnOperations\DeclineReturn\ReturnActionNotPermittedError|\EBay\OrderManagement\GraphQL\Types\ReturnOperations\DeclineReturn\ReturnNotFoundError
    {
        $data = $this->dynamic->execute(
            ReturnOperations::DECLINE_RETURN(),
            ['input' => (object)$input->toArray()],
            $accessToken,
            $requestOptions
        );
        return DeclineReturnOutput::fromArray($data['declineReturn'] ?? []);
    }

    public function deleteReturnRuleListingGroup(DeleteReturnRuleListingGroupInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): \EBay\OrderManagement\GraphQL\Types\ReturnOperations\DeleteReturnRuleListingGroup\DeleteReturnRuleListingGroupSuccess|\EBay\OrderManagement\GraphQL\Types\ReturnOperations\DeleteReturnRuleListingGroup\ReturnRuleFeatureNotEnabledError|\EBay\OrderManagement\GraphQL\Types\ReturnOperations\DeleteReturnRuleListingGroup\ReturnRuleListingGroupNotFoundError
    {
        $data = $this->dynamic->execute(
            ReturnOperations::DELETE_RETURN_RULE_LISTING_GROUP(),
            ['input' => (object)$input->toArray()],
            $accessToken,
            $requestOptions
        );
        return DeleteReturnRuleListingGroupOutput::fromArray($data['deleteReturnRuleListingGroup'] ?? []);
    }

    public function deleteSellerReturnRule(DeleteSellerReturnRuleInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): \EBay\OrderManagement\GraphQL\Types\ReturnOperations\DeleteSellerReturnRule\DeleteSellerReturnRuleSuccess|\EBay\OrderManagement\GraphQL\Types\ReturnOperations\DeleteSellerReturnRule\ReturnRuleFeatureNotEnabledError|\EBay\OrderManagement\GraphQL\Types\ReturnOperations\DeleteSellerReturnRule\ReturnRuleNotFoundError
    {
        $data = $this->dynamic->execute(
            ReturnOperations::DELETE_SELLER_RETURN_RULE(),
            ['input' => (object)$input->toArray()],
            $accessToken,
            $requestOptions
        );
        return DeleteSellerReturnRuleOutput::fromArray($data['deleteSellerReturnRule'] ?? []);
    }

    public function itemCommitments(ItemCommitmentsInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ItemCommitmentsOutput
    {
        $data = $this->dynamic->execute(
            ItemCommitmentOperations::ITEM_COMMITMENTS(),
            ['input' => (object)$input->toArray()],
            $accessToken,
            $requestOptions
        );
        return ItemCommitmentsOutput::fromArray($data['itemCommitments'] ?? []);
    }

    public function itemCommitmentsByIds(ItemCommitmentsByIdsInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): \EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\ItemCommitmentsByIds\ItemCommitmentsByIdsCompleteFailure|\EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\ItemCommitmentsByIds\ItemCommitmentsByIdsPartialFailure|\EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\ItemCommitmentsByIds\ItemCommitmentsByIdsSuccess
    {
        $data = $this->dynamic->execute(
            ItemCommitmentOperations::ITEM_COMMITMENTS_BY_IDS(),
            ['input' => (object)$input->toArray()],
            $accessToken,
            $requestOptions
        );
        return ItemCommitmentsByIdsOutput::fromArray($data['itemCommitmentsByIds'] ?? []);
    }

    public function markItemCommitmentsPaid(MarkItemCommitmentsPaidInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): \EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\MarkItemCommitmentsPaid\MarkItemCommitmentsPaidCompleteFailure|\EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\MarkItemCommitmentsPaid\MarkItemCommitmentsPaidPartialFailure|\EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\MarkItemCommitmentsPaid\MarkItemCommitmentsPaidSuccess
    {
        $data = $this->dynamic->execute(
            ItemCommitmentOperations::MARK_ITEM_COMMITMENTS_PAID(),
            ['input' => (object)$input->toArray()],
            $accessToken,
            $requestOptions
        );
        return MarkItemCommitmentsPaidOutput::fromArray($data['markItemCommitmentsPaid'] ?? []);
    }

    public function markOrdersPaid(MarkOrdersPaidInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): \EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\MarkOrdersPaid\MarkOrdersPaidCompleteFailure|\EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\MarkOrdersPaid\MarkOrdersPaidPartialFailure|\EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\MarkOrdersPaid\MarkOrdersPaidSuccess
    {
        $data = $this->dynamic->execute(
            ItemCommitmentOperations::MARK_ORDERS_PAID(),
            ['input' => (object)$input->toArray()],
            $accessToken,
            $requestOptions
        );
        return MarkOrdersPaidOutput::fromArray($data['markOrdersPaid'] ?? []);
    }

    public function orderInquiry(OrderInquiryInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): \EBay\OrderManagement\GraphQL\Types\InquiryOperations\OrderInquiry\OrderInquiryNotFoundError|\EBay\OrderManagement\GraphQL\Types\InquiryOperations\OrderInquiry\OrderInquirySuccess
    {
        $data = $this->dynamic->execute(
            InquiryOperations::ORDER_INQUIRY(),
            ['input' => (object)$input->toArray()],
            $accessToken,
            $requestOptions
        );
        return OrderInquiryOutput::fromArray($data['orderInquiry'] ?? []);
    }

    public function orderLineItemsByIds(OrderLineItemsByIdsInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): \EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\OrderLineItemsByIds\OrderLineItemsByIdsCompleteFailure|\EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\OrderLineItemsByIds\OrderLineItemsByIdsPartialFailure|\EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\OrderLineItemsByIds\OrderLineItemsByIdsSuccess
    {
        $data = $this->dynamic->execute(
            ItemCommitmentOperations::ORDER_LINE_ITEMS_BY_IDS(),
            ['input' => (object)$input->toArray()],
            $accessToken,
            $requestOptions
        );
        return OrderLineItemsByIdsOutput::fromArray($data['orderLineItemsByIds'] ?? []);
    }

    public function orderReturn(OrderReturnInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): \EBay\OrderManagement\GraphQL\Types\ReturnOperations\OrderReturn\OrderReturn|\EBay\OrderManagement\GraphQL\Types\ReturnOperations\OrderReturn\ReturnNotFoundError
    {
        $data = $this->dynamic->execute(
            ReturnOperations::ORDER_RETURN(),
            $input->toVariables(),
            $accessToken,
            $requestOptions
        );
        return OrderReturnOutput::fromArray($data['orderReturn'] ?? []);
    }

    public function orders(OrdersInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): OrdersOutput
    {
        $data = $this->dynamic->execute(
            ItemCommitmentOperations::ORDERS(),
            ['input' => (object)$input->toArray()],
            $accessToken,
            $requestOptions
        );
        return OrdersOutput::fromArray($data['orders'] ?? []);
    }

    public function ordersByIds(OrdersByIdsInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): \EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\OrdersByIds\OrdersByIdsCompleteFailure|\EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\OrdersByIds\OrdersByIdsPartialFailure|\EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\OrdersByIds\OrdersByIdsSuccess
    {
        $data = $this->dynamic->execute(
            ItemCommitmentOperations::ORDERS_BY_IDS(),
            ['input' => (object)$input->toArray()],
            $accessToken,
            $requestOptions
        );
        return OrdersByIdsOutput::fromArray($data['ordersByIds'] ?? []);
    }

    public function processOrderInquiryRefund(ProcessOrderInquiryRefundInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): \EBay\OrderManagement\GraphQL\Types\InquiryOperations\ProcessOrderInquiryRefund\OrderInquiryActionNotPermittedError|\EBay\OrderManagement\GraphQL\Types\InquiryOperations\ProcessOrderInquiryRefund\OrderInquiryNotFoundError|\EBay\OrderManagement\GraphQL\Types\InquiryOperations\ProcessOrderInquiryRefund\ProcessOrderInquiryRefundSuccess|\EBay\OrderManagement\GraphQL\Types\InquiryOperations\ProcessOrderInquiryRefund\RefundAuthorizationFailedError|\EBay\OrderManagement\GraphQL\Types\InquiryOperations\ProcessOrderInquiryRefund\RefundBlockedByPaymentDisputeError|\EBay\OrderManagement\GraphQL\Types\InquiryOperations\ProcessOrderInquiryRefund\RefundInstrumentDeclinedError|\EBay\OrderManagement\GraphQL\Types\InquiryOperations\ProcessOrderInquiryRefund\RefundInstrumentInsufficientFundsError|\EBay\OrderManagement\GraphQL\Types\InquiryOperations\ProcessOrderInquiryRefund\RefundInstrumentInvalidError|\EBay\OrderManagement\GraphQL\Types\InquiryOperations\ProcessOrderInquiryRefund\RefundProcessingError
    {
        $data = $this->dynamic->execute(
            InquiryOperations::PROCESS_ORDER_INQUIRY_REFUND(),
            ['input' => (object)$input->toArray()],
            $accessToken,
            $requestOptions
        );
        return ProcessOrderInquiryRefundOutput::fromArray($data['processOrderInquiryRefund'] ?? []);
    }

    public function processReturnRefund(ProcessReturnRefundInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): \EBay\OrderManagement\GraphQL\Types\ReturnOperations\ProcessReturnRefund\MultipleRefundWithholdingsNotAllowedError|\EBay\OrderManagement\GraphQL\Types\ReturnOperations\ProcessReturnRefund\OrderReturn|\EBay\OrderManagement\GraphQL\Types\ReturnOperations\ProcessReturnRefund\ProcessReturnRefundInputValidationError|\EBay\OrderManagement\GraphQL\Types\ReturnOperations\ProcessReturnRefund\RefundAuthorizationFailedError|\EBay\OrderManagement\GraphQL\Types\ReturnOperations\ProcessReturnRefund\RefundBlockedByPaymentDisputeError|\EBay\OrderManagement\GraphQL\Types\ReturnOperations\ProcessReturnRefund\RefundInstrumentDeclinedError|\EBay\OrderManagement\GraphQL\Types\ReturnOperations\ProcessReturnRefund\RefundInstrumentInsufficientFundsError|\EBay\OrderManagement\GraphQL\Types\ReturnOperations\ProcessReturnRefund\RefundInstrumentInvalidError|\EBay\OrderManagement\GraphQL\Types\ReturnOperations\ProcessReturnRefund\RefundProcessingError|\EBay\OrderManagement\GraphQL\Types\ReturnOperations\ProcessReturnRefund\ReturnActionNotPermittedError|\EBay\OrderManagement\GraphQL\Types\ReturnOperations\ProcessReturnRefund\ReturnLineItemNotFoundError|\EBay\OrderManagement\GraphQL\Types\ReturnOperations\ProcessReturnRefund\ReturnNotFoundError
    {
        $data = $this->dynamic->execute(
            ReturnOperations::PROCESS_RETURN_REFUND(),
            ['input' => (object)$input->toArray()],
            $accessToken,
            $requestOptions
        );
        return ProcessReturnRefundOutput::fromArray($data['processReturnRefund'] ?? []);
    }

    public function proposeKeepItemWithPartialRefund(ProposeKeepItemWithPartialRefundInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): \EBay\OrderManagement\GraphQL\Types\ReturnOperations\ProposeKeepItemWithPartialRefund\MultipleRefundTermsNotAllowedError|\EBay\OrderManagement\GraphQL\Types\ReturnOperations\ProposeKeepItemWithPartialRefund\OrderReturn|\EBay\OrderManagement\GraphQL\Types\ReturnOperations\ProposeKeepItemWithPartialRefund\ProposeKeepItemWithPartialRefundInputValidationError|\EBay\OrderManagement\GraphQL\Types\ReturnOperations\ProposeKeepItemWithPartialRefund\ReturnActionNotPermittedError|\EBay\OrderManagement\GraphQL\Types\ReturnOperations\ProposeKeepItemWithPartialRefund\ReturnLineItemNotFoundError|\EBay\OrderManagement\GraphQL\Types\ReturnOperations\ProposeKeepItemWithPartialRefund\ReturnNotFoundError|\EBay\OrderManagement\GraphQL\Types\ReturnOperations\ProposeKeepItemWithPartialRefund\ReturnRefundTermsRequiredError
    {
        $data = $this->dynamic->execute(
            ReturnOperations::PROPOSE_KEEP_ITEM_WITH_PARTIAL_REFUND(),
            $input->toVariables(),
            $accessToken,
            $requestOptions
        );
        return ProposeKeepItemWithPartialRefundOutput::fromArray($data['proposeKeepItemWithPartialRefund'] ?? []);
    }

    public function provideRmaNumber(ProvideRmaNumberInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): \EBay\OrderManagement\GraphQL\Types\ReturnOperations\ProvideRmaNumber\OrderReturn|\EBay\OrderManagement\GraphQL\Types\ReturnOperations\ProvideRmaNumber\ProvideRmaNumberInputValidationError|\EBay\OrderManagement\GraphQL\Types\ReturnOperations\ProvideRmaNumber\ReturnActionNotPermittedError|\EBay\OrderManagement\GraphQL\Types\ReturnOperations\ProvideRmaNumber\ReturnNotFoundError
    {
        $data = $this->dynamic->execute(
            ReturnOperations::PROVIDE_RMA_NUMBER(),
            ['input' => (object)$input->toArray()],
            $accessToken,
            $requestOptions
        );
        return ProvideRmaNumberOutput::fromArray($data['provideRmaNumber'] ?? []);
    }

    public function provideShipmentInfoForItemNotReceivedInquiry(ProvideShipmentInfoForItemNotReceivedInquiryInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): \EBay\OrderManagement\GraphQL\Types\InquiryOperations\ProvideShipmentInfoForItemNotReceivedInquiry\OrderInquiryActionNotPermittedError|\EBay\OrderManagement\GraphQL\Types\InquiryOperations\ProvideShipmentInfoForItemNotReceivedInquiry\OrderInquiryNotFoundError|\EBay\OrderManagement\GraphQL\Types\InquiryOperations\ProvideShipmentInfoForItemNotReceivedInquiry\ProvideShipmentInfoForInquiryInputValidationError|\EBay\OrderManagement\GraphQL\Types\InquiryOperations\ProvideShipmentInfoForItemNotReceivedInquiry\ProvideShipmentInfoForItemNotReceivedInquirySuccess
    {
        $data = $this->dynamic->execute(
            InquiryOperations::PROVIDE_SHIPMENT_INFO_FOR_ITEM_NOT_RECEIVED_INQUIRY(),
            ['input' => (object)$input->toArray()],
            $accessToken,
            $requestOptions
        );
        return ProvideShipmentInfoForItemNotReceivedInquiryOutput::fromArray($data['provideShipmentInfoForItemNotReceivedInquiry'] ?? []);
    }

    public function purchaseQuoteLineItemsByIds(PurchaseQuoteLineItemsByIdsInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): \EBay\OrderManagement\GraphQL\Types\PurchaseQuoteOperations\PurchaseQuoteLineItemsByIds\PurchaseQuoteLineItemsByIdsCompleteFailure|\EBay\OrderManagement\GraphQL\Types\PurchaseQuoteOperations\PurchaseQuoteLineItemsByIds\PurchaseQuoteLineItemsByIdsPartialFailure|\EBay\OrderManagement\GraphQL\Types\PurchaseQuoteOperations\PurchaseQuoteLineItemsByIds\PurchaseQuoteLineItemsByIdsSuccess
    {
        $data = $this->dynamic->execute(
            PurchaseQuoteOperations::PURCHASE_QUOTE_LINE_ITEMS_BY_IDS(),
            ['input' => (object)$input->toArray()],
            $accessToken,
            $requestOptions
        );
        return PurchaseQuoteLineItemsByIdsOutput::fromArray($data['purchaseQuoteLineItemsByIds'] ?? []);
    }

    public function purchaseQuotes(PurchaseQuotesInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): PurchaseQuotesOutput
    {
        $data = $this->dynamic->execute(
            PurchaseQuoteOperations::PURCHASE_QUOTES(),
            ['input' => (object)$input->toArray()],
            $accessToken,
            $requestOptions
        );
        return PurchaseQuotesOutput::fromArray($data['purchaseQuotes'] ?? []);
    }

    public function purchaseQuotesByIds(PurchaseQuotesByIdsInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): \EBay\OrderManagement\GraphQL\Types\PurchaseQuoteOperations\PurchaseQuotesByIds\PurchaseQuotesByIdsCompleteFailure|\EBay\OrderManagement\GraphQL\Types\PurchaseQuoteOperations\PurchaseQuotesByIds\PurchaseQuotesByIdsPartialFailure|\EBay\OrderManagement\GraphQL\Types\PurchaseQuoteOperations\PurchaseQuotesByIds\PurchaseQuotesByIdsSuccess
    {
        $data = $this->dynamic->execute(
            PurchaseQuoteOperations::PURCHASE_QUOTES_BY_IDS(),
            ['input' => (object)$input->toArray()],
            $accessToken,
            $requestOptions
        );
        return PurchaseQuotesByIdsOutput::fromArray($data['purchaseQuotesByIds'] ?? []);
    }

    public function recordReturnLabelSentOffline(RecordReturnLabelSentOfflineInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): \EBay\OrderManagement\GraphQL\Types\ReturnOperations\RecordReturnLabelSentOffline\OrderReturn|\EBay\OrderManagement\GraphQL\Types\ReturnOperations\RecordReturnLabelSentOffline\RecordReturnLabelSentOfflineInputValidationError|\EBay\OrderManagement\GraphQL\Types\ReturnOperations\RecordReturnLabelSentOffline\ReturnActionNotPermittedError|\EBay\OrderManagement\GraphQL\Types\ReturnOperations\RecordReturnLabelSentOffline\ReturnNotFoundError
    {
        $data = $this->dynamic->execute(
            ReturnOperations::RECORD_RETURN_LABEL_SENT_OFFLINE(),
            ['input' => (object)$input->toArray()],
            $accessToken,
            $requestOptions
        );
        return RecordReturnLabelSentOfflineOutput::fromArray($data['recordReturnLabelSentOffline'] ?? []);
    }

    public function recordReturnReceived(RecordReturnReceivedInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): \EBay\OrderManagement\GraphQL\Types\ReturnOperations\RecordReturnReceived\OrderReturn|\EBay\OrderManagement\GraphQL\Types\ReturnOperations\RecordReturnReceived\ReturnActionNotPermittedError|\EBay\OrderManagement\GraphQL\Types\ReturnOperations\RecordReturnReceived\ReturnNotFoundError
    {
        $data = $this->dynamic->execute(
            ReturnOperations::RECORD_RETURN_RECEIVED(),
            ['input' => (object)$input->toArray()],
            $accessToken,
            $requestOptions
        );
        return RecordReturnReceivedOutput::fromArray($data['recordReturnReceived'] ?? []);
    }

    public function requestPurchaseQuote(RequestPurchaseQuoteInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): \EBay\OrderManagement\GraphQL\Types\PurchaseQuoteOperations\RequestPurchaseQuote\RequestPurchaseQuoteBusinessError|\EBay\OrderManagement\GraphQL\Types\PurchaseQuoteOperations\RequestPurchaseQuote\RequestPurchaseQuoteSuccess
    {
        $data = $this->dynamic->execute(
            PurchaseQuoteOperations::REQUEST_PURCHASE_QUOTE(),
            ['input' => (object)$input->toArray()],
            $accessToken,
            $requestOptions
        );
        return RequestPurchaseQuoteOutput::fromArray($data['requestPurchaseQuote'] ?? []);
    }

    public function returnRuleListingGroup(ReturnRuleListingGroupInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): \EBay\OrderManagement\GraphQL\Types\ReturnOperations\ReturnRuleListingGroup\ReturnRuleListingGroup|\EBay\OrderManagement\GraphQL\Types\ReturnOperations\ReturnRuleListingGroup\ReturnRuleListingGroupNotFoundError
    {
        $data = $this->dynamic->execute(
            ReturnOperations::RETURN_RULE_LISTING_GROUP(),
            ['input' => (object)$input->toArray()],
            $accessToken,
            $requestOptions
        );
        return ReturnRuleListingGroupOutput::fromArray($data['returnRuleListingGroup'] ?? []);
    }

    public function sellerContractCancellations(SellerContractCancellationsInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): \EBay\OrderManagement\GraphQL\Types\CancellationOperations\SellerContractCancellations\Output\ContractCancellationInvalidDateRangeError|\EBay\OrderManagement\GraphQL\Types\CancellationOperations\SellerContractCancellations\Output\ContractCancellationInvalidPageSizeError|\EBay\OrderManagement\GraphQL\Types\CancellationOperations\SellerContractCancellations\Output\ContractCancellationInvalidSearchInputError|\EBay\OrderManagement\GraphQL\Types\CancellationOperations\SellerContractCancellations\Output\SellerContractCancellationsSuccess
    {
        $data = $this->dynamic->execute(
            CancellationOperations::SELLER_CONTRACT_CANCELLATIONS(),
            ['input' => (object)$input->toArray()],
            $accessToken,
            $requestOptions
        );
        return SellerContractCancellationsOutput::fromArray($data['sellerContractCancellations'] ?? []);
    }

    public function sellerOrderInquiries(SellerOrderInquiriesInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): \EBay\OrderManagement\GraphQL\Types\InquiryOperations\SellerOrderInquiries\OrderInquiryInvalidDateRangeError|\EBay\OrderManagement\GraphQL\Types\InquiryOperations\SellerOrderInquiries\OrderInquiryInvalidPageSizeError|\EBay\OrderManagement\GraphQL\Types\InquiryOperations\SellerOrderInquiries\OrderInquiryInvalidSearchInputError|\EBay\OrderManagement\GraphQL\Types\InquiryOperations\SellerOrderInquiries\SellerOrderInquiries
    {
        $data = $this->dynamic->execute(
            InquiryOperations::SELLER_ORDER_INQUIRIES(),
            ['input' => (object)$input->toArray()],
            $accessToken,
            $requestOptions
        );
        return SellerOrderInquiriesOutput::fromArray($data['sellerOrderInquiries'] ?? []);
    }

    public function sellerOrderReturns(SellerOrderReturnsInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): \EBay\OrderManagement\GraphQL\Types\ReturnOperations\SellerOrderReturns\ReturnActionNotPermittedError|\EBay\OrderManagement\GraphQL\Types\ReturnOperations\SellerOrderReturns\ReturnInvalidDateRangeError|\EBay\OrderManagement\GraphQL\Types\ReturnOperations\SellerOrderReturns\ReturnInvalidPageSizeError|\EBay\OrderManagement\GraphQL\Types\ReturnOperations\SellerOrderReturns\ReturnInvalidSearchInputError|\EBay\OrderManagement\GraphQL\Types\ReturnOperations\SellerOrderReturns\SellerOrderReturns
    {
        $data = $this->dynamic->execute(
            ReturnOperations::SELLER_ORDER_RETURNS(),
            $input->toVariables(),
            $accessToken,
            $requestOptions
        );
        return SellerOrderReturnsOutput::fromArray($data['sellerOrderReturns'] ?? []);
    }

    public function sellerReturnPreference(SellerReturnPreferenceInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): \EBay\OrderManagement\GraphQL\Types\ReturnOperations\SellerReturnPreference\ReturnPreferenceNotFoundError|\EBay\OrderManagement\GraphQL\Types\ReturnOperations\SellerReturnPreference\SellerReturnPreferences
    {
        $data = $this->dynamic->execute(
            ReturnOperations::SELLER_RETURN_PREFERENCE(),
            ['input' => (object)$input->toArray()],
            $accessToken,
            $requestOptions
        );
        return SellerReturnPreferenceOutput::fromArray($data['sellerReturnPreference'] ?? []);
    }

    public function sendOrderInquiryMessage(SendOrderInquiryMessageInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): \EBay\OrderManagement\GraphQL\Types\InquiryOperations\SendOrderInquiryMessage\OrderInquiryActionNotPermittedError|\EBay\OrderManagement\GraphQL\Types\InquiryOperations\SendOrderInquiryMessage\OrderInquiryNotFoundError|\EBay\OrderManagement\GraphQL\Types\InquiryOperations\SendOrderInquiryMessage\SendOrderInquiryMessageInputValidationError|\EBay\OrderManagement\GraphQL\Types\InquiryOperations\SendOrderInquiryMessage\SendOrderInquiryMessageSuccess
    {
        $data = $this->dynamic->execute(
            InquiryOperations::SEND_ORDER_INQUIRY_MESSAGE(),
            ['input' => (object)$input->toArray()],
            $accessToken,
            $requestOptions
        );
        return SendOrderInquiryMessageOutput::fromArray($data['sendOrderInquiryMessage'] ?? []);
    }

    public function sendReturnMessage(SendReturnMessageInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): \EBay\OrderManagement\GraphQL\Types\ReturnOperations\SendReturnMessage\OrderReturn|\EBay\OrderManagement\GraphQL\Types\ReturnOperations\SendReturnMessage\ReturnActionNotPermittedError|\EBay\OrderManagement\GraphQL\Types\ReturnOperations\SendReturnMessage\ReturnNotFoundError|\EBay\OrderManagement\GraphQL\Types\ReturnOperations\SendReturnMessage\SendReturnMessageInputValidationError
    {
        $data = $this->dynamic->execute(
            ReturnOperations::SEND_RETURN_MESSAGE(),
            ['input' => (object)$input->toArray()],
            $accessToken,
            $requestOptions
        );
        return SendReturnMessageOutput::fromArray($data['sendReturnMessage'] ?? []);
    }

    public function submitOrderInquiryReferral(SubmitOrderInquiryReferralInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): \EBay\OrderManagement\GraphQL\Types\InquiryOperations\SubmitOrderInquiryReferral\OrderInquiryActionNotPermittedError|\EBay\OrderManagement\GraphQL\Types\InquiryOperations\SubmitOrderInquiryReferral\OrderInquiryNotFoundError|\EBay\OrderManagement\GraphQL\Types\InquiryOperations\SubmitOrderInquiryReferral\SubmitOrderInquiryReferralInputValidationError|\EBay\OrderManagement\GraphQL\Types\InquiryOperations\SubmitOrderInquiryReferral\SubmitOrderInquiryReferralSuccess
    {
        $data = $this->dynamic->execute(
            InquiryOperations::SUBMIT_ORDER_INQUIRY_REFERRAL(),
            ['input' => (object)$input->toArray()],
            $accessToken,
            $requestOptions
        );
        return SubmitOrderInquiryReferralOutput::fromArray($data['submitOrderInquiryReferral'] ?? []);
    }

    public function submitReturnReferral(SubmitReturnReferralInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): \EBay\OrderManagement\GraphQL\Types\ReturnOperations\SubmitReturnReferral\OrderReturn|\EBay\OrderManagement\GraphQL\Types\ReturnOperations\SubmitReturnReferral\ReturnActionNotPermittedError|\EBay\OrderManagement\GraphQL\Types\ReturnOperations\SubmitReturnReferral\ReturnNotFoundError|\EBay\OrderManagement\GraphQL\Types\ReturnOperations\SubmitReturnReferral\SubmitReturnReferralInputValidationError
    {
        $data = $this->dynamic->execute(
            ReturnOperations::SUBMIT_RETURN_REFERRAL(),
            ['input' => (object)$input->toArray()],
            $accessToken,
            $requestOptions
        );
        return SubmitReturnReferralOutput::fromArray($data['submitReturnReferral'] ?? []);
    }

    public function updateSellerReturnResponseRuleCondition(UpdateSellerReturnResponseRuleConditionInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): \EBay\OrderManagement\GraphQL\Types\ReturnOperations\UpdateSellerReturnResponseRuleCondition\ReturnResponseRule|\EBay\OrderManagement\GraphQL\Types\ReturnOperations\UpdateSellerReturnResponseRuleCondition\ReturnRuleFeatureNotEnabledError|\EBay\OrderManagement\GraphQL\Types\ReturnOperations\UpdateSellerReturnResponseRuleCondition\ReturnRuleInvalidConditionsError|\EBay\OrderManagement\GraphQL\Types\ReturnOperations\UpdateSellerReturnResponseRuleCondition\ReturnRuleMissingConditionError|\EBay\OrderManagement\GraphQL\Types\ReturnOperations\UpdateSellerReturnResponseRuleCondition\ReturnRuleNameError|\EBay\OrderManagement\GraphQL\Types\ReturnOperations\UpdateSellerReturnResponseRuleCondition\ReturnRuleNotFoundError
    {
        $data = $this->dynamic->execute(
            ReturnOperations::UPDATE_SELLER_RETURN_RESPONSE_RULE_CONDITION(),
            ['input' => (object)$input->toArray()],
            $accessToken,
            $requestOptions
        );
        return UpdateSellerReturnResponseRuleConditionOutput::fromArray($data['updateSellerReturnResponseRuleCondition'] ?? []);
    }

    public function updateSellerReturnResponseRulesPriorities(UpdateSellerReturnResponseRulesPrioritiesInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): \EBay\OrderManagement\GraphQL\Types\ReturnOperations\UpdateSellerReturnResponseRulesPriorities\ReturnRuleDuplicateRuleIdsError|\EBay\OrderManagement\GraphQL\Types\ReturnOperations\UpdateSellerReturnResponseRulesPriorities\ReturnRuleFeatureNotEnabledError|\EBay\OrderManagement\GraphQL\Types\ReturnOperations\UpdateSellerReturnResponseRulesPriorities\ReturnRuleInvalidRuleIdsError|\EBay\OrderManagement\GraphQL\Types\ReturnOperations\UpdateSellerReturnResponseRulesPriorities\ReturnRuleMissingRuleIdsError|\EBay\OrderManagement\GraphQL\Types\ReturnOperations\UpdateSellerReturnResponseRulesPriorities\UpdateSellerReturnResponseRulesPrioritiesSuccess
    {
        $data = $this->dynamic->execute(
            ReturnOperations::UPDATE_SELLER_RETURN_RESPONSE_RULES_PRIORITIES(),
            ['input' => (object)$input->toArray()],
            $accessToken,
            $requestOptions
        );
        return UpdateSellerReturnResponseRulesPrioritiesOutput::fromArray($data['updateSellerReturnResponseRulesPriorities'] ?? []);
    }

    public function updateSellerReturnRuleStatus(UpdateSellerReturnRuleStatusInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): \EBay\OrderManagement\GraphQL\Types\ReturnOperations\UpdateSellerReturnRuleStatus\ReturnResponseRule|\EBay\OrderManagement\GraphQL\Types\ReturnOperations\UpdateSellerReturnRuleStatus\ReturnRuleFeatureNotEnabledError|\EBay\OrderManagement\GraphQL\Types\ReturnOperations\UpdateSellerReturnRuleStatus\ReturnRuleNotFoundError|\EBay\OrderManagement\GraphQL\Types\ReturnOperations\UpdateSellerReturnRuleStatus\ReturnRuleStatusUpdateBlockedError|\EBay\OrderManagement\GraphQL\Types\ReturnOperations\UpdateSellerReturnRuleStatus\ReturnToAddressRule
    {
        $data = $this->dynamic->execute(
            ReturnOperations::UPDATE_SELLER_RETURN_RULE_STATUS(),
            ['input' => (object)$input->toArray()],
            $accessToken,
            $requestOptions
        );
        return UpdateSellerReturnRuleStatusOutput::fromArray($data['updateSellerReturnRuleStatus'] ?? []);
    }

    public function updateSellerReturnToAddressRuleCondition(UpdateSellerReturnToAddressRuleConditionInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): \EBay\OrderManagement\GraphQL\Types\ReturnOperations\UpdateSellerReturnToAddressRuleCondition\ReturnRuleFeatureNotEnabledError|\EBay\OrderManagement\GraphQL\Types\ReturnOperations\UpdateSellerReturnToAddressRuleCondition\ReturnRuleInvalidConditionsError|\EBay\OrderManagement\GraphQL\Types\ReturnOperations\UpdateSellerReturnToAddressRuleCondition\ReturnRuleMissingConditionError|\EBay\OrderManagement\GraphQL\Types\ReturnOperations\UpdateSellerReturnToAddressRuleCondition\ReturnRuleNameError|\EBay\OrderManagement\GraphQL\Types\ReturnOperations\UpdateSellerReturnToAddressRuleCondition\ReturnRuleNotFoundError|\EBay\OrderManagement\GraphQL\Types\ReturnOperations\UpdateSellerReturnToAddressRuleCondition\ReturnToAddressRequiredError|\EBay\OrderManagement\GraphQL\Types\ReturnOperations\UpdateSellerReturnToAddressRuleCondition\ReturnToAddressRule
    {
        $data = $this->dynamic->execute(
            ReturnOperations::UPDATE_SELLER_RETURN_TO_ADDRESS_RULE_CONDITION(),
            ['input' => (object)$input->toArray()],
            $accessToken,
            $requestOptions
        );
        return UpdateSellerReturnToAddressRuleConditionOutput::fromArray($data['updateSellerReturnToAddressRuleCondition'] ?? []);
    }

    public function updateSellerReturnToAddressRulesPriorities(UpdateSellerReturnToAddressRulesPrioritiesInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): \EBay\OrderManagement\GraphQL\Types\ReturnOperations\UpdateSellerReturnToAddressRulesPriorities\ReturnRuleDuplicateRuleIdsError|\EBay\OrderManagement\GraphQL\Types\ReturnOperations\UpdateSellerReturnToAddressRulesPriorities\ReturnRuleFeatureNotEnabledError|\EBay\OrderManagement\GraphQL\Types\ReturnOperations\UpdateSellerReturnToAddressRulesPriorities\ReturnRuleInvalidRuleIdsError|\EBay\OrderManagement\GraphQL\Types\ReturnOperations\UpdateSellerReturnToAddressRulesPriorities\ReturnRuleMissingRuleIdsError|\EBay\OrderManagement\GraphQL\Types\ReturnOperations\UpdateSellerReturnToAddressRulesPriorities\UpdateSellerReturnToAddressRulesPrioritiesSuccess
    {
        $data = $this->dynamic->execute(
            ReturnOperations::UPDATE_SELLER_RETURN_TO_ADDRESS_RULES_PRIORITIES(),
            ['input' => (object)$input->toArray()],
            $accessToken,
            $requestOptions
        );
        return UpdateSellerReturnToAddressRulesPrioritiesOutput::fromArray($data['updateSellerReturnToAddressRulesPriorities'] ?? []);
    }

    public function updateSellerRmaPreference(UpdateSellerRmaPreferenceInput $input, ?string $accessToken = null, ?RequestOptions $requestOptions = null): \EBay\OrderManagement\GraphQL\Types\ReturnOperations\UpdateSellerRmaPreference\ReturnPreferenceNotFoundError|\EBay\OrderManagement\GraphQL\Types\ReturnOperations\UpdateSellerRmaPreference\SellerReturnPreferences
    {
        $data = $this->dynamic->execute(
            ReturnOperations::UPDATE_SELLER_RMA_PREFERENCE(),
            ['input' => (object)$input->toArray()],
            $accessToken,
            $requestOptions
        );
        return UpdateSellerRmaPreferenceOutput::fromArray($data['updateSellerRmaPreference'] ?? []);
    }

    /**
     * Execute an arbitrary GraphQL query string and return the raw `data` payload.
     *
     * **WARNING — injection risk.** Never interpolate user-supplied input directly into
     * `$query`. Always pass dynamic values via `$variables` so the server handles
     * escaping.
     *
     * @param array<string, mixed> $variables
     * @return array<string, mixed>
     */
    public function executeRawUnsafe(string $query, array $variables = [], ?string $accessToken = null, ?RequestOptions $requestOptions = null): array
    {
        return $this->dynamic->execute($query, $variables, $accessToken, $requestOptions);
    }
}
