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

namespace EBay\OrderManagement\Clients\Rest;

use EBay\OrderManagement\Configuration\KiotaAuthProvider;
use EBay\OrderManagement\Configuration\OrderManagementConfiguration;
use EBay\OrderManagement\Configuration\RequestOptions;
use EBay\OrderManagement\Generated\PostOrderApi\PostOrderApiApiClient;
use EBay\OrderManagement\Generated\PostOrderApi\Models\AppealRequest;
use EBay\OrderManagement\Generated\PostOrderApi\Models\BuyerCloseCaseRequest;
use EBay\OrderManagement\Generated\PostOrderApi\Models\BuyerCloseInquiryRequest;
use EBay\OrderManagement\Generated\PostOrderApi\Models\CaseDetailsResponse;
use EBay\OrderManagement\Generated\PostOrderApi\Models\CaseSearchResponse;
use EBay\OrderManagement\Generated\PostOrderApi\Models\CaseVoluntaryRefundRequest;
use EBay\OrderManagement\Generated\PostOrderApi\Models\CreateInquiryRequest;
use EBay\OrderManagement\Generated\PostOrderApi\Models\CreateReturnRequest;
use EBay\OrderManagement\Generated\PostOrderApi\Models\DecideReturnRequest;
use EBay\OrderManagement\Generated\PostOrderApi\Models\EscalateInquiryRequest;
use EBay\OrderManagement\Generated\PostOrderApi\Models\EscalateRequest;
use EBay\OrderManagement\Generated\PostOrderApi\Models\InquiryDetailsResponse;
use EBay\OrderManagement\Generated\PostOrderApi\Models\InquirySearchResponse;
use EBay\OrderManagement\Generated\PostOrderApi\Models\InquiryVoluntaryRefundRequest;
use EBay\OrderManagement\Generated\PostOrderApi\Models\IssueRefundRequest;
use EBay\OrderManagement\Generated\PostOrderApi\Models\MarkAsReceivedRequest;
use EBay\OrderManagement\Generated\PostOrderApi\Models\ProvideLabelRequest;
use EBay\OrderManagement\Generated\PostOrderApi\Models\ProvideShipmentInfoRequest;
use EBay\OrderManagement\Generated\PostOrderApi\Models\ReturnAddressRequest;
use EBay\OrderManagement\Generated\PostOrderApi\Models\SellerProvideRefundInfoRequest;
use EBay\OrderManagement\Generated\PostOrderApi\Models\SendMessageRequest;
use EBay\OrderManagement\Generated\PostOrderApi\Models\ShipmentInfoRequest;
use EBay\OrderManagement\Generated\PostOrderApi\Models\UploadFileRequest;
use EBay\OrderManagement\Generated\PostOrderApi\Models\VoluntaryRefundResponse;
use GuzzleHttp\Client as GuzzleClient;
use Microsoft\Kiota\Abstractions\Authentication\BaseBearerTokenAuthenticationProvider;
use Microsoft\Kiota\Http\GuzzleRequestAdapter;

final class PostOrderApiClient
{
    public function __construct(
        private readonly GuzzleClient $guzzle,
        private readonly OrderManagementConfiguration $config,
    ) {}

    /** @return array<string, string> */
    private function mergedHeaders(?RequestOptions $requestOptions): array
    {
        return array_merge(
            $this->config->defaultRequestOptions->headers,
            $requestOptions !== null ? $requestOptions->headers : []
        );
    }

    public function checkCancellationEligibility(mixed $body, ?string $accessToken = null, ?RequestOptions $requestOptions = null): void
    {
        $headers = $this->mergedHeaders($requestOptions);
        $this->call($accessToken, fn($api) =>
            $api->postOrder()->v2()->cancellation()->check_eligibility()->post(
                $body,
                new \EBay\OrderManagement\Generated\PostOrderApi\PostOrder\V2\Cancellation\Check_eligibility\Check_eligibilityRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function getCancellation(
        string $cancelId,
        ?string $fieldgroups = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): void
    {
        $headers = $this->mergedHeaders($requestOptions);
        $this->call($accessToken, fn($api) =>
            $api->postOrder()->v2()->cancellation()->byCancelId($cancelId)->get(
                new \EBay\OrderManagement\Generated\PostOrderApi\PostOrder\V2\Cancellation\Item\WithCancelItemRequestBuilderGetRequestConfiguration(
                    headers: $headers,
                    queryParameters: \EBay\OrderManagement\Generated\PostOrderApi\PostOrder\V2\Cancellation\Item\WithCancelItemRequestBuilderGetRequestConfiguration::createQueryParameters(
                        fieldgroups: $fieldgroups,
                    ),
                )
            )->wait()
        );
    }

    public function createCancellationRequest(mixed $body, ?string $accessToken = null, ?RequestOptions $requestOptions = null): void
    {
        $headers = $this->mergedHeaders($requestOptions);
        $this->call($accessToken, fn($api) =>
            $api->postOrder()->v2()->cancellation()->post(
                $body,
                new \EBay\OrderManagement\Generated\PostOrderApi\PostOrder\V2\Cancellation\CancellationRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function confirm(
        string $cancelId,
        mixed $body,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): void
    {
        $headers = $this->mergedHeaders($requestOptions);
        $this->call($accessToken, fn($api) =>
            $api->postOrder()->v2()->cancellation()->byCancelId($cancelId)->confirm()->post(
                $body,
                new \EBay\OrderManagement\Generated\PostOrderApi\PostOrder\V2\Cancellation\Item\Confirm\ConfirmRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function searchCancellations(
        ?string $cancelId = null,
        ?string $creationDateRangeFrom = null,
        ?string $creationDateRangeTo = null,
        ?string $itemId = null,
        ?string $legacyOrderId = null,
        ?string $limit = null,
        ?string $offset = null,
        ?string $role = null,
        ?string $sort = null,
        ?string $transactionId = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): void
    {
        $headers = $this->mergedHeaders($requestOptions);
        $this->call($accessToken, fn($api) =>
            $api->postOrder()->v2()->cancellation()->search()->get(
                new \EBay\OrderManagement\Generated\PostOrderApi\PostOrder\V2\Cancellation\Search\SearchRequestBuilderGetRequestConfiguration(
                    headers: $headers,
                    queryParameters: \EBay\OrderManagement\Generated\PostOrderApi\PostOrder\V2\Cancellation\Search\SearchRequestBuilderGetRequestConfiguration::createQueryParameters(
                        cancel_id: $cancelId,
                        creation_date_range_from: $creationDateRangeFrom,
                        creation_date_range_to: $creationDateRangeTo,
                        item_id: $itemId,
                        legacy_order_id: $legacyOrderId,
                        limit: $limit,
                        offset: $offset,
                        role: $role,
                        sort: $sort,
                        transaction_id: $transactionId,
                    ),
                )
            )->wait()
        );
    }

    public function approveCancellation(string $cancelId, ?string $accessToken = null, ?RequestOptions $requestOptions = null): void
    {
        $headers = $this->mergedHeaders($requestOptions);
        $this->call($accessToken, fn($api) =>
            $api->postOrder()->v2()->cancellation()->byCancelId($cancelId)->approve()->post(
                new \EBay\OrderManagement\Generated\PostOrderApi\PostOrder\V2\Cancellation\Item\Approve\ApproveRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function rejectCancellation(
        string $cancelId,
        mixed $body,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): void
    {
        $headers = $this->mergedHeaders($requestOptions);
        $this->call($accessToken, fn($api) =>
            $api->postOrder()->v2()->cancellation()->byCancelId($cancelId)->reject()->post(
                $body,
                new \EBay\OrderManagement\Generated\PostOrderApi\PostOrder\V2\Cancellation\Item\Reject\RejectRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function appealCaseDecision(
        string $caseId,
        AppealRequest $body,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): void
    {
        $headers = $this->mergedHeaders($requestOptions);
        $this->call($accessToken, fn($api) =>
            $api->postOrder()->v2()->casemanagement()->byCaseId($caseId)->appeal()->post(
                $body,
                new \EBay\OrderManagement\Generated\PostOrderApi\PostOrder\V2\Casemanagement\Item\Appeal\AppealRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function getCase(string $caseId, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ?CaseDetailsResponse
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->postOrder()->v2()->casemanagement()->byCaseId($caseId)->get(
                new \EBay\OrderManagement\Generated\PostOrderApi\PostOrder\V2\Casemanagement\Item\WithCaseItemRequestBuilderGetRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function issueCaseRefund(
        string $caseId,
        CaseVoluntaryRefundRequest $body,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?VoluntaryRefundResponse
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->postOrder()->v2()->casemanagement()->byCaseId($caseId)->issue_refund()->post(
                $body,
                new \EBay\OrderManagement\Generated\PostOrderApi\PostOrder\V2\Casemanagement\Item\Issue_refund\Issue_refundRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function provideCaseReturnAddress(
        string $caseId,
        ReturnAddressRequest $body,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): mixed
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->postOrder()->v2()->casemanagement()->byCaseId($caseId)->provide_return_address()->post(
                $body,
                new \EBay\OrderManagement\Generated\PostOrderApi\PostOrder\V2\Casemanagement\Item\Provide_return_address\Provide_return_addressRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function closeCase(
        string $caseId,
        BuyerCloseCaseRequest $body,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): void
    {
        $headers = $this->mergedHeaders($requestOptions);
        $this->call($accessToken, fn($api) =>
            $api->postOrder()->v2()->casemanagement()->byCaseId($caseId)->close()->post(
                $body,
                new \EBay\OrderManagement\Generated\PostOrderApi\PostOrder\V2\Casemanagement\Item\Close\CloseRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function provideCaseShipmentInfo(
        string $caseId,
        ProvideShipmentInfoRequest $body,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): void
    {
        $headers = $this->mergedHeaders($requestOptions);
        $this->call($accessToken, fn($api) =>
            $api->postOrder()->v2()->casemanagement()->byCaseId($caseId)->provide_shipment_info()->post(
                $body,
                new \EBay\OrderManagement\Generated\PostOrderApi\PostOrder\V2\Casemanagement\Item\Provide_shipment_info\Provide_shipment_infoRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function searchCases(
        ?string $caseCreationDateRangeFrom = null,
        ?string $caseCreationDateRangeTo = null,
        ?string $caseStatusFilter = null,
        ?string $fieldgroups = null,
        ?string $itemId = null,
        ?string $limit = null,
        ?string $offset = null,
        ?string $orderId = null,
        ?string $returnId = null,
        ?string $sort = null,
        ?string $transactionId = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?CaseSearchResponse
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->postOrder()->v2()->casemanagement()->search()->get(
                new \EBay\OrderManagement\Generated\PostOrderApi\PostOrder\V2\Casemanagement\Search\SearchRequestBuilderGetRequestConfiguration(
                    headers: $headers,
                    queryParameters: \EBay\OrderManagement\Generated\PostOrderApi\PostOrder\V2\Casemanagement\Search\SearchRequestBuilderGetRequestConfiguration::createQueryParameters(
                        case_creation_date_range_from: $caseCreationDateRangeFrom,
                        case_creation_date_range_to: $caseCreationDateRangeTo,
                        case_status_filter: $caseStatusFilter,
                        fieldgroups: $fieldgroups,
                        item_id: $itemId,
                        limit: $limit,
                        offset: $offset,
                        order_id: $orderId,
                        return_id: $returnId,
                        sort: $sort,
                        transaction_id: $transactionId,
                    ),
                )
            )->wait()
        );
    }

    public function createInquiry(CreateInquiryRequest $body, ?string $accessToken = null, ?RequestOptions $requestOptions = null): void
    {
        $headers = $this->mergedHeaders($requestOptions);
        $this->call($accessToken, fn($api) =>
            $api->postOrder()->v2()->inquiry()->emptyPathSegment()->post(
                $body,
                new \EBay\OrderManagement\Generated\PostOrderApi\PostOrder\V2\Inquiry\EmptyPathSegmentRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function sendInquiryMessage(
        string $inquiryId,
        SendMessageRequest $body,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): mixed
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->postOrder()->v2()->inquiry()->byInquiryId($inquiryId)->send_message()->post(
                $body,
                new \EBay\OrderManagement\Generated\PostOrderApi\PostOrder\V2\Inquiry\Item\Send_message\Send_messageRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function escalateInquiry(
        string $inquiryId,
        EscalateInquiryRequest $body,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): void
    {
        $headers = $this->mergedHeaders($requestOptions);
        $this->call($accessToken, fn($api) =>
            $api->postOrder()->v2()->inquiry()->byInquiryId($inquiryId)->escalate()->post(
                $body,
                new \EBay\OrderManagement\Generated\PostOrderApi\PostOrder\V2\Inquiry\Item\Escalate\EscalateRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function closeInquiry(
        string $inquiryId,
        BuyerCloseInquiryRequest $body,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): mixed
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->postOrder()->v2()->inquiry()->byInquiryId($inquiryId)->close()->post(
                $body,
                new \EBay\OrderManagement\Generated\PostOrderApi\PostOrder\V2\Inquiry\Item\Close\CloseRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function confirmInquiryRefund(string $inquiryId, ?string $accessToken = null, ?RequestOptions $requestOptions = null): mixed
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->postOrder()->v2()->inquiry()->byInquiryId($inquiryId)->confirm_refund()->post(
                new \EBay\OrderManagement\Generated\PostOrderApi\PostOrder\V2\Inquiry\Item\Confirm_refund\Confirm_refundRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function getInquiry(string $inquiryId, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ?InquiryDetailsResponse
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->postOrder()->v2()->inquiry()->byInquiryId($inquiryId)->get(
                new \EBay\OrderManagement\Generated\PostOrderApi\PostOrder\V2\Inquiry\Item\WithInquiryItemRequestBuilderGetRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function issueInquiryRefund(
        string $inquiryId,
        InquiryVoluntaryRefundRequest $body,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?VoluntaryRefundResponse
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->postOrder()->v2()->inquiry()->byInquiryId($inquiryId)->issue_refund()->post(
                $body,
                new \EBay\OrderManagement\Generated\PostOrderApi\PostOrder\V2\Inquiry\Item\Issue_refund\Issue_refundRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function provideInquiryShipmentInfo(
        string $inquiryId,
        ShipmentInfoRequest $body,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): mixed
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->postOrder()->v2()->inquiry()->byInquiryId($inquiryId)->provide_shipment_info()->post(
                $body,
                new \EBay\OrderManagement\Generated\PostOrderApi\PostOrder\V2\Inquiry\Item\Provide_shipment_info\Provide_shipment_infoRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function searchInquiries(
        ?string $fieldgroups = null,
        ?string $inquiryCreationDateRangeFrom = null,
        ?string $inquiryCreationDateRangeTo = null,
        ?string $inquiryStatus = null,
        ?string $itemId = null,
        ?string $limit = null,
        ?string $offset = null,
        ?string $orderId = null,
        ?string $sort = null,
        ?string $transactionId = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?InquirySearchResponse
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->postOrder()->v2()->inquiry()->search()->get(
                new \EBay\OrderManagement\Generated\PostOrderApi\PostOrder\V2\Inquiry\Search\SearchRequestBuilderGetRequestConfiguration(
                    headers: $headers,
                    queryParameters: \EBay\OrderManagement\Generated\PostOrderApi\PostOrder\V2\Inquiry\Search\SearchRequestBuilderGetRequestConfiguration::createQueryParameters(
                        fieldgroups: $fieldgroups,
                        inquiry_creation_date_range_from: $inquiryCreationDateRangeFrom,
                        inquiry_creation_date_range_to: $inquiryCreationDateRangeTo,
                        inquiry_status: $inquiryStatus,
                        item_id: $itemId,
                        limit: $limit,
                        offset: $offset,
                        order_id: $orderId,
                        sort: $sort,
                        transaction_id: $transactionId,
                    ),
                )
            )->wait()
        );
    }

    public function provideInquiryRefundInfo(
        string $inquiryId,
        SellerProvideRefundInfoRequest $body,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): mixed
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->postOrder()->v2()->inquiry()->byInquiryId($inquiryId)->provide_refund_info()->post(
                $body,
                new \EBay\OrderManagement\Generated\PostOrderApi\PostOrder\V2\Inquiry\Item\Provide_refund_info\Provide_refund_infoRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function createReturnRequest(
        CreateReturnRequest $body,
        ?string $fieldgroups = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): void
    {
        $headers = $this->mergedHeaders($requestOptions);
        $this->call($accessToken, fn($api) =>
            $api->postOrder()->v2()->escapedReturn()->post(
                $body,
                new \EBay\OrderManagement\Generated\PostOrderApi\PostOrder\V2\EscapedReturn\ReturnRequestBuilderPostRequestConfiguration(
                    headers: $headers,
                    queryParameters: \EBay\OrderManagement\Generated\PostOrderApi\PostOrder\V2\EscapedReturn\ReturnRequestBuilderPostRequestConfiguration::createQueryParameters(
                        fieldgroups: $fieldgroups,
                    ),
                )
            )->wait()
        );
    }

    public function getReturn(
        string $returnId,
        ?string $fieldgroups = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): void
    {
        $headers = $this->mergedHeaders($requestOptions);
        $this->call($accessToken, fn($api) =>
            $api->postOrder()->v2()->escapedReturn()->byReturnId($returnId)->get(
                new \EBay\OrderManagement\Generated\PostOrderApi\PostOrder\V2\EscapedReturn\Item\WithReturnItemRequestBuilderGetRequestConfiguration(
                    headers: $headers,
                    queryParameters: \EBay\OrderManagement\Generated\PostOrderApi\PostOrder\V2\EscapedReturn\Item\WithReturnItemRequestBuilderGetRequestConfiguration::createQueryParameters(
                        fieldgroups: $fieldgroups,
                    ),
                )
            )->wait()
        );
    }

    public function searchReturns(
        ?string $creationDateRangeFrom = null,
        ?string $creationDateRangeTo = null,
        ?string $itemId = null,
        ?string $limit = null,
        ?string $offset = null,
        ?string $orderId = null,
        ?string $returnId = null,
        ?string $returnState = null,
        ?string $role = null,
        ?string $sort = null,
        ?string $states = null,
        ?string $transactionId = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): void
    {
        $headers = $this->mergedHeaders($requestOptions);
        $this->call($accessToken, fn($api) =>
            $api->postOrder()->v2()->escapedReturn()->search()->get(
                new \EBay\OrderManagement\Generated\PostOrderApi\PostOrder\V2\EscapedReturn\Search\SearchRequestBuilderGetRequestConfiguration(
                    headers: $headers,
                    queryParameters: \EBay\OrderManagement\Generated\PostOrderApi\PostOrder\V2\EscapedReturn\Search\SearchRequestBuilderGetRequestConfiguration::createQueryParameters(
                        creation_date_range_from: $creationDateRangeFrom,
                        creation_date_range_to: $creationDateRangeTo,
                        item_id: $itemId,
                        limit: $limit,
                        offset: $offset,
                        order_id: $orderId,
                        return_id: $returnId,
                        return_state: $returnState,
                        role: $role,
                        sort: $sort,
                        states: $states,
                        transaction_id: $transactionId,
                    ),
                )
            )->wait()
        );
    }

    public function escalateReturn(
        string $returnId,
        EscalateRequest $body,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): void
    {
        $headers = $this->mergedHeaders($requestOptions);
        $this->call($accessToken, fn($api) =>
            $api->postOrder()->v2()->escapedReturn()->byReturnId($returnId)->escalate()->post(
                $body,
                new \EBay\OrderManagement\Generated\PostOrderApi\PostOrder\V2\EscapedReturn\Item\Escalate\EscalateRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function processReturnRequest(
        string $returnId,
        DecideReturnRequest $body,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): void
    {
        $headers = $this->mergedHeaders($requestOptions);
        $this->call($accessToken, fn($api) =>
            $api->postOrder()->v2()->escapedReturn()->byReturnId($returnId)->decide()->post(
                $body,
                new \EBay\OrderManagement\Generated\PostOrderApi\PostOrder\V2\EscapedReturn\Item\Decide\DecideRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function markItemReceived(
        string $returnId,
        MarkAsReceivedRequest $body,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): void
    {
        $headers = $this->mergedHeaders($requestOptions);
        $this->call($accessToken, fn($api) =>
            $api->postOrder()->v2()->escapedReturn()->byReturnId($returnId)->mark_as_received()->post(
                $body,
                new \EBay\OrderManagement\Generated\PostOrderApi\PostOrder\V2\EscapedReturn\Item\Mark_as_received\Mark_as_receivedRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function issueReturnRefund(
        string $returnId,
        IssueRefundRequest $body,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): void
    {
        $headers = $this->mergedHeaders($requestOptions);
        $this->call($accessToken, fn($api) =>
            $api->postOrder()->v2()->escapedReturn()->byReturnId($returnId)->issue_refund()->post(
                $body,
                new \EBay\OrderManagement\Generated\PostOrderApi\PostOrder\V2\EscapedReturn\Item\Issue_refund\Issue_refundRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function getShipmentTrackingInfo(
        string $returnId,
        ?string $carrierUsed = null,
        ?string $trackingNumber = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): void
    {
        $headers = $this->mergedHeaders($requestOptions);
        $this->call($accessToken, fn($api) =>
            $api->postOrder()->v2()->escapedReturn()->byReturnId($returnId)->tracking()->get(
                new \EBay\OrderManagement\Generated\PostOrderApi\PostOrder\V2\EscapedReturn\Item\Tracking\TrackingRequestBuilderGetRequestConfiguration(
                    headers: $headers,
                    queryParameters: \EBay\OrderManagement\Generated\PostOrderApi\PostOrder\V2\EscapedReturn\Item\Tracking\TrackingRequestBuilderGetRequestConfiguration::createQueryParameters(
                        carrier_used: $carrierUsed,
                        tracking_number: $trackingNumber,
                    ),
                )
            )->wait()
        );
    }

    public function sendReturnMessage(
        string $returnId,
        SendMessageRequest $body,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): void
    {
        $headers = $this->mergedHeaders($requestOptions);
        $this->call($accessToken, fn($api) =>
            $api->postOrder()->v2()->escapedReturn()->byReturnId($returnId)->send_message()->post(
                $body,
                new \EBay\OrderManagement\Generated\PostOrderApi\PostOrder\V2\EscapedReturn\Item\Send_message\Send_messageRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function addShippingLabelInfo(
        string $returnId,
        ProvideLabelRequest $body,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): void
    {
        $headers = $this->mergedHeaders($requestOptions);
        $this->call($accessToken, fn($api) =>
            $api->postOrder()->v2()->escapedReturn()->byReturnId($returnId)->add_shipping_label()->post(
                $body,
                new \EBay\OrderManagement\Generated\PostOrderApi\PostOrder\V2\EscapedReturn\Item\Add_shipping_label\Add_shipping_labelRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function uploadReturnFile(
        string $returnId,
        UploadFileRequest $body,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): void
    {
        $headers = $this->mergedHeaders($requestOptions);
        $this->call($accessToken, fn($api) =>
            $api->postOrder()->v2()->escapedReturn()->byReturnId($returnId)->file()->upload()->post(
                $body,
                new \EBay\OrderManagement\Generated\PostOrderApi\PostOrder\V2\EscapedReturn\Item\File\Upload\UploadRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function getReturnFiles(string $returnId, ?string $accessToken = null, ?RequestOptions $requestOptions = null): void
    {
        $headers = $this->mergedHeaders($requestOptions);
        $this->call($accessToken, fn($api) =>
            $api->postOrder()->v2()->escapedReturn()->byReturnId($returnId)->files()->get(
                new \EBay\OrderManagement\Generated\PostOrderApi\PostOrder\V2\EscapedReturn\Item\Files\FilesRequestBuilderGetRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function getReturnPreferences(?string $accessToken = null, ?RequestOptions $requestOptions = null): void
    {
        $headers = $this->mergedHeaders($requestOptions);
        $this->call($accessToken, fn($api) =>
            $api->postOrder()->v2()->escapedReturn()->preference()->get(
                new \EBay\OrderManagement\Generated\PostOrderApi\PostOrder\V2\EscapedReturn\Preference\PreferenceRequestBuilderGetRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function setReturnPreferences(mixed $body, ?string $accessToken = null, ?RequestOptions $requestOptions = null): void
    {
        $headers = $this->mergedHeaders($requestOptions);
        $this->call($accessToken, fn($api) =>
            $api->postOrder()->v2()->escapedReturn()->preference()->post(
                $body,
                new \EBay\OrderManagement\Generated\PostOrderApi\PostOrder\V2\EscapedReturn\Preference\PreferenceRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    private function call(?string $accessToken, callable $op): mixed
    {
        $token = ($accessToken ?? $this->config->accessToken)
            ?: throw new \RuntimeException('No access token. Pass $accessToken per-call or set OrderManagementConfiguration::$accessToken.');
        return $op($this->buildApiClient($token));
    }

    private function buildApiClient(string $token): PostOrderApiApiClient
    {
        $auth = new BaseBearerTokenAuthenticationProvider(
            new KiotaAuthProvider($token, $this->config->getAllowedHosts())
        );
        $adapter = new GuzzleRequestAdapter($auth, guzzleClient: $this->guzzle);
        $adapter->setBaseUrl($this->config->postOrderApiBaseUrl);
        return new PostOrderApiApiClient($adapter);
    }
}
