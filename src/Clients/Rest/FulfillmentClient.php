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
use EBay\OrderManagement\Generated\Fulfillment\FulfillmentApiClient;
use EBay\OrderManagement\Generated\Fulfillment\Models\AcceptPaymentDisputeRequest;
use EBay\OrderManagement\Generated\Fulfillment\Models\AddEvidencePaymentDisputeRequest;
use EBay\OrderManagement\Generated\Fulfillment\Models\AddEvidencePaymentDisputeResponse;
use EBay\OrderManagement\Generated\Fulfillment\Models\ContestPaymentDisputeRequest;
use EBay\OrderManagement\Generated\Fulfillment\Models\DisputeSummaryResponse;
use EBay\OrderManagement\Generated\Fulfillment\Models\FileEvidence;
use EBay\OrderManagement\Generated\Fulfillment\Models\IssueRefundRequest;
use EBay\OrderManagement\Generated\Fulfillment\Models\Order;
use EBay\OrderManagement\Generated\Fulfillment\Models\OrderSearchPagedCollection;
use EBay\OrderManagement\Generated\Fulfillment\Models\PaymentDispute;
use EBay\OrderManagement\Generated\Fulfillment\Models\PaymentDisputeActivityHistory;
use EBay\OrderManagement\Generated\Fulfillment\Models\Refund;
use EBay\OrderManagement\Generated\Fulfillment\Models\ShippingFulfillment;
use EBay\OrderManagement\Generated\Fulfillment\Models\ShippingFulfillmentDetails;
use EBay\OrderManagement\Generated\Fulfillment\Models\ShippingFulfillmentPagedCollection;
use EBay\OrderManagement\Generated\Fulfillment\Models\UpdateEvidencePaymentDisputeRequest;
use EBay\OrderManagement\Generated\Fulfillment\Order\Item\Issue_refund\Issue_refundRequestBuilderPostRequestConfiguration;
use EBay\OrderManagement\Generated\Fulfillment\Order\Item\OrderItemRequestBuilderGetRequestConfiguration;
use EBay\OrderManagement\Generated\Fulfillment\Order\Item\Shipping_fulfillment\Item\WithFulfillmentItemRequestBuilderGetRequestConfiguration;
use EBay\OrderManagement\Generated\Fulfillment\Order\Item\Shipping_fulfillment\Shipping_fulfillmentRequestBuilderGetRequestConfiguration;
use EBay\OrderManagement\Generated\Fulfillment\Order\Item\Shipping_fulfillment\Shipping_fulfillmentRequestBuilderPostRequestConfiguration;
use EBay\OrderManagement\Generated\Fulfillment\Order\OrderRequestBuilderGetRequestConfiguration;
use EBay\OrderManagement\Generated\Fulfillment\Payment_dispute_summary\Payment_dispute_summaryRequestBuilderGetRequestConfiguration;
use EBay\OrderManagement\Generated\Fulfillment\Payment_dispute\Item\Accept\AcceptRequestBuilderPostRequestConfiguration;
use EBay\OrderManagement\Generated\Fulfillment\Payment_dispute\Item\Activity\ActivityRequestBuilderGetRequestConfiguration;
use EBay\OrderManagement\Generated\Fulfillment\Payment_dispute\Item\Add_evidence\Add_evidenceRequestBuilderPostRequestConfiguration;
use EBay\OrderManagement\Generated\Fulfillment\Payment_dispute\Item\Contest\ContestRequestBuilderPostRequestConfiguration;
use EBay\OrderManagement\Generated\Fulfillment\Payment_dispute\Item\Fetch_evidence_content\Fetch_evidence_contentRequestBuilderGetRequestConfiguration;
use EBay\OrderManagement\Generated\Fulfillment\Payment_dispute\Item\Update_evidence\Update_evidenceRequestBuilderPostRequestConfiguration;
use EBay\OrderManagement\Generated\Fulfillment\Payment_dispute\Item\Upload_evidence_file\Upload_evidence_fileRequestBuilderPostRequestConfiguration;
use EBay\OrderManagement\Generated\Fulfillment\Payment_dispute\Item\WithPayment_dispute_ItemRequestBuilderGetRequestConfiguration;
use GuzzleHttp\Client as GuzzleClient;
use Microsoft\Kiota\Abstractions\Authentication\BaseBearerTokenAuthenticationProvider;
use Microsoft\Kiota\Http\GuzzleRequestAdapter;

final class FulfillmentClient
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

    public function getOrder(
        string $orderId,
        ?string $fieldGroups = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?Order
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->order()->byOrderId($orderId)->get(
                new OrderItemRequestBuilderGetRequestConfiguration(
                    headers: $headers,
                    queryParameters: OrderItemRequestBuilderGetRequestConfiguration::createQueryParameters(
                        fieldGroups: $fieldGroups,
                    ),
                )
            )->wait()
        );
    }

    public function getOrders(
        ?string $fieldGroups = null,
        ?string $filter = null,
        ?string $limit = null,
        ?string $offset = null,
        ?string $orderIds = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?OrderSearchPagedCollection
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->order()->get(
                new OrderRequestBuilderGetRequestConfiguration(
                    headers: $headers,
                    queryParameters: OrderRequestBuilderGetRequestConfiguration::createQueryParameters(
                        fieldGroups: $fieldGroups,
                        filter: $filter,
                        limit: $limit,
                        offset: $offset,
                        orderIds: $orderIds,
                    ),
                )
            )->wait()
        );
    }

    public function issueRefund(
        string $orderId,
        IssueRefundRequest $body,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?Refund
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->order()->byOrderId($orderId)->issue_refund()->post(
                $body,
                new Issue_refundRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function getShippingFulfillments(string $orderId, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ?ShippingFulfillmentPagedCollection
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->order()->byOrderId($orderId)->shipping_fulfillment()->get(
                new Shipping_fulfillmentRequestBuilderGetRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function createShippingFulfillment(
        string $orderId,
        ShippingFulfillmentDetails $body,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): mixed
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->order()->byOrderId($orderId)->shipping_fulfillment()->post(
                $body,
                new Shipping_fulfillmentRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function getShippingFulfillment(
        string $fulfillmentId,
        string $orderId,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?ShippingFulfillment
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->order()->byOrderId($orderId)->shipping_fulfillment()->byFulfillmentId($fulfillmentId)->get(
                new WithFulfillmentItemRequestBuilderGetRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function getPaymentDispute(string $paymentDisputeId, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ?PaymentDispute
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->payment_dispute()->byPayment_dispute_id($paymentDisputeId)->get(
                new WithPayment_dispute_ItemRequestBuilderGetRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function fetchEvidenceContent(
        string $paymentDisputeId,
        ?string $evidenceId = null,
        ?string $fileId = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): void
    {
        $headers = $this->mergedHeaders($requestOptions);
        $this->call($accessToken, fn($api) =>
            $api->payment_dispute()->byPayment_dispute_id($paymentDisputeId)->fetch_evidence_content()->get(
                new Fetch_evidence_contentRequestBuilderGetRequestConfiguration(
                    headers: $headers,
                    queryParameters: Fetch_evidence_contentRequestBuilderGetRequestConfiguration::createQueryParameters(
                        evidence_id: $evidenceId,
                        file_id: $fileId,
                    ),
                )
            )->wait()
        );
    }

    public function getActivities(string $paymentDisputeId, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ?PaymentDisputeActivityHistory
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->payment_dispute()->byPayment_dispute_id($paymentDisputeId)->activity()->get(
                new ActivityRequestBuilderGetRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function getPaymentDisputeSummaries(
        ?string $orderId = null,
        ?string $buyerUsername = null,
        ?string $openDateFrom = null,
        ?string $openDateTo = null,
        ?string $paymentDisputeStatus = null,
        ?string $limit = null,
        ?string $offset = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?DisputeSummaryResponse
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->payment_dispute_summary()->get(
                new Payment_dispute_summaryRequestBuilderGetRequestConfiguration(
                    headers: $headers,
                    queryParameters: Payment_dispute_summaryRequestBuilderGetRequestConfiguration::createQueryParameters(
                        order_id: $orderId,
                        buyer_username: $buyerUsername,
                        open_date_from: $openDateFrom,
                        open_date_to: $openDateTo,
                        payment_dispute_status: $paymentDisputeStatus,
                        limit: $limit,
                        offset: $offset,
                    ),
                )
            )->wait()
        );
    }

    public function contestPaymentDispute(
        string $paymentDisputeId,
        ContestPaymentDisputeRequest $body,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): void
    {
        $headers = $this->mergedHeaders($requestOptions);
        $this->call($accessToken, fn($api) =>
            $api->payment_dispute()->byPayment_dispute_id($paymentDisputeId)->contest()->post(
                $body,
                new ContestRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function acceptPaymentDispute(
        string $paymentDisputeId,
        AcceptPaymentDisputeRequest $body,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): void
    {
        $headers = $this->mergedHeaders($requestOptions);
        $this->call($accessToken, fn($api) =>
            $api->payment_dispute()->byPayment_dispute_id($paymentDisputeId)->accept()->post(
                $body,
                new AcceptRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function uploadEvidenceFile(
        string $paymentDisputeId,
        mixed $body,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?FileEvidence
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->payment_dispute()->byPayment_dispute_id($paymentDisputeId)->upload_evidence_file()->post(
                $body,
                new Upload_evidence_fileRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function addEvidence(
        string $paymentDisputeId,
        AddEvidencePaymentDisputeRequest $body,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?AddEvidencePaymentDisputeResponse
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->payment_dispute()->byPayment_dispute_id($paymentDisputeId)->add_evidence()->post(
                $body,
                new Add_evidenceRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function updateEvidence(
        string $paymentDisputeId,
        UpdateEvidencePaymentDisputeRequest $body,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): void
    {
        $headers = $this->mergedHeaders($requestOptions);
        $this->call($accessToken, fn($api) =>
            $api->payment_dispute()->byPayment_dispute_id($paymentDisputeId)->update_evidence()->post(
                $body,
                new Update_evidenceRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    private function call(?string $accessToken, callable $op): mixed
    {
        $token = ($accessToken ?? $this->config->accessToken)
            ?: throw new \RuntimeException('No access token. Pass $accessToken per-call or set OrderManagementConfiguration::$accessToken.');
        return $op($this->buildApiClient($token));
    }

    private function buildApiClient(string $token): FulfillmentApiClient
    {
        $auth = new BaseBearerTokenAuthenticationProvider(
            new KiotaAuthProvider($token, $this->config->getAllowedHosts())
        );
        $adapter = new GuzzleRequestAdapter($auth, guzzleClient: $this->guzzle);
        $adapter->setBaseUrl($this->config->fulfillmentBaseUrl);
        return new FulfillmentApiClient($adapter);
    }
}
