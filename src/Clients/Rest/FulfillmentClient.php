<?php

declare(strict_types=1);

namespace EBay\OrderManagement\Clients\Rest;

use EBay\OrderManagement\Configuration\OrderManagementConfiguration;
use EBay\OrderManagement\Configuration\RequestOptions;
use EBay\OrderManagement\Configuration\TokenContext;
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
use EBay\OrderManagement\Generated\Fulfillment\Models\PaymentDisputeActivityHistory;
use EBay\OrderManagement\Generated\Fulfillment\Models\PaymentDispute;
use EBay\OrderManagement\Generated\Fulfillment\Models\Refund;
use EBay\OrderManagement\Generated\Fulfillment\Order\Item\Shipping_fulfillment\Shipping_fulfillmentPostResponse;
use EBay\OrderManagement\Generated\Fulfillment\Models\ShippingFulfillment;
use EBay\OrderManagement\Generated\Fulfillment\Models\ShippingFulfillmentDetails;
use EBay\OrderManagement\Generated\Fulfillment\Models\ShippingFulfillmentPagedCollection;
use EBay\OrderManagement\Generated\Fulfillment\Models\UpdateEvidencePaymentDisputeRequest;
use EBay\OrderManagement\Generated\Fulfillment\Order\Item\OrderItemRequestBuilderGetRequestConfiguration;
use EBay\OrderManagement\Generated\Fulfillment\Order\Item\Issue_refund\Issue_refundRequestBuilderPostRequestConfiguration;
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
use Psr\Http\Message\StreamInterface;

final class FulfillmentClient
{
    public function __construct(
        private readonly FulfillmentApiClient $kiota,
        private readonly OrderManagementConfiguration $config,
    ) {}

    // ── Orders ────────────────────────────────────────────────────────────────

    /**
     * @param string|null $fieldGroups Controls what is returned in the response (e.g. TAX_BREAKDOWN).
     * @param string|null $accessToken Per-call token; overrides configuration fallback.
     */
    public function getOrder(string $orderId, ?string $fieldGroups = null, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ?Order
    {
        TokenContext::set($accessToken);
        $rc = new OrderItemRequestBuilderGetRequestConfiguration(
            headers: $this->mergeHeaders($requestOptions),
            queryParameters: OrderItemRequestBuilderGetRequestConfiguration::createQueryParameters(
                fieldGroups: $fieldGroups,
            ),
        );
        return $this->kiota->order()->byOrderId($orderId)->get($rc)->wait();
    }

    /**
     * @param string|null $fieldGroups Controls what is returned in the response (e.g. TAX_BREAKDOWN).
     * @param string|null $filter Comma-separated filter criteria (creationdate, lastmodifieddate, orderfulfillmentstatus).
     * @param string|null $limit Maximum orders per page (default 50, max 200).
     * @param string|null $offset Number of orders to skip (zero-based).
     * @param string|null $orderIds Comma-separated list of order IDs to retrieve (max 50); ignores other filters.
     * @param string|null $accessToken Per-call token; overrides configuration fallback.
     */
    public function getOrders(?string $fieldGroups = null, ?string $filter = null, ?string $limit = null, ?string $offset = null, ?string $orderIds = null, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ?OrderSearchPagedCollection
    {
        TokenContext::set($accessToken);
        $rc = new OrderRequestBuilderGetRequestConfiguration(
            headers: $this->mergeHeaders($requestOptions),
            queryParameters: OrderRequestBuilderGetRequestConfiguration::createQueryParameters(
                fieldGroups: $fieldGroups,
                filter: $filter,
                limit: $limit,
                offset: $offset,
                orderIds: $orderIds,
            ),
        );
        return $this->kiota->order()->get($rc)->wait();
    }

    /**
     * @param string|null $accessToken Per-call token; overrides configuration fallback.
     */
    public function issueRefund(string $orderId, IssueRefundRequest $body, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ?Refund
    {
        TokenContext::set($accessToken);
        $rc = new Issue_refundRequestBuilderPostRequestConfiguration(headers: $this->mergeHeaders($requestOptions));
        return $this->kiota->order()->byOrderId($orderId)->issue_refund()->post($body, $rc)->wait();
    }

    // ── Shipping Fulfillments ─────────────────────────────────────────────────

    /**
     * @param string|null $accessToken Per-call token; overrides configuration fallback.
     */
    public function getShippingFulfillments(string $orderId, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ?ShippingFulfillmentPagedCollection
    {
        TokenContext::set($accessToken);
        $rc = new Shipping_fulfillmentRequestBuilderGetRequestConfiguration(headers: $this->mergeHeaders($requestOptions));
        return $this->kiota->order()->byOrderId($orderId)->shipping_fulfillment()->get($rc)->wait();
    }

    /**
     * @param string|null $accessToken Per-call token; overrides configuration fallback.
     */
    public function createShippingFulfillment(string $orderId, ShippingFulfillmentDetails $body, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ?Shipping_fulfillmentPostResponse
    {
        TokenContext::set($accessToken);
        $rc = new Shipping_fulfillmentRequestBuilderPostRequestConfiguration(headers: $this->mergeHeaders($requestOptions));
        return $this->kiota->order()->byOrderId($orderId)->shipping_fulfillment()->post($body, $rc)->wait();
    }

    /**
     * @param string|null $accessToken Per-call token; overrides configuration fallback.
     */
    public function getShippingFulfillment(string $orderId, string $fulfillmentId, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ?ShippingFulfillment
    {
        TokenContext::set($accessToken);
        $rc = new WithFulfillmentItemRequestBuilderGetRequestConfiguration(headers: $this->mergeHeaders($requestOptions));
        return $this->kiota->order()->byOrderId($orderId)->shipping_fulfillment()->byFulfillmentId($fulfillmentId)->get($rc)->wait();
    }

    // ── Payment Disputes ──────────────────────────────────────────────────────

    /**
     * @param string|null $accessToken Per-call token; overrides configuration fallback.
     */
    public function getPaymentDispute(string $paymentDisputeId, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ?PaymentDispute
    {
        TokenContext::set($accessToken);
        $rc = new WithPayment_dispute_ItemRequestBuilderGetRequestConfiguration(headers: $this->mergeHeaders($requestOptions));
        return $this->kiota->payment_dispute()->byPayment_dispute_id($paymentDisputeId)->get($rc)->wait();
    }

    /**
     * @param string|null $buyerUsername Filter by eBay buyer user ID.
     * @param string|null $limit Maximum disputes per page (default 200, max 200).
     * @param string|null $offset Number of records to skip (zero-based).
     * @param string|null $openDateFrom Start of dispute open-date range (ISO 8601 UTC).
     * @param string|null $openDateTo End of dispute open-date range (ISO 8601 UTC).
     * @param string|null $orderId Filter by order ID; ignores all other filters.
     * @param string|null $paymentDisputeStatus Filter by dispute status (e.g. OPEN, ACTION_NEEDED).
     * @param string|null $accessToken Per-call token; overrides configuration fallback.
     */
    public function getPaymentDisputeSummaries(?string $buyerUsername = null, ?string $limit = null, ?string $offset = null, ?string $openDateFrom = null, ?string $openDateTo = null, ?string $orderId = null, ?string $paymentDisputeStatus = null, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ?DisputeSummaryResponse
    {
        TokenContext::set($accessToken);
        $rc = new Payment_dispute_summaryRequestBuilderGetRequestConfiguration(
            headers: $this->mergeHeaders($requestOptions),
            queryParameters: Payment_dispute_summaryRequestBuilderGetRequestConfiguration::createQueryParameters(
                buyer_username: $buyerUsername,
                limit: $limit,
                offset: $offset,
                open_date_from: $openDateFrom,
                open_date_to: $openDateTo,
                order_id: $orderId,
                payment_dispute_status: $paymentDisputeStatus,
            ),
        );
        return $this->kiota->payment_dispute_summary()->get($rc)->wait();
    }

    /**
     * @param string|null $accessToken Per-call token; overrides configuration fallback.
     */
    public function getActivities(string $paymentDisputeId, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ?PaymentDisputeActivityHistory
    {
        TokenContext::set($accessToken);
        $rc = new ActivityRequestBuilderGetRequestConfiguration(headers: $this->mergeHeaders($requestOptions));
        return $this->kiota->payment_dispute()->byPayment_dispute_id($paymentDisputeId)->activity()->get($rc)->wait();
    }

    /**
     * @param string|null $accessToken Per-call token; overrides configuration fallback.
     */
    public function acceptPaymentDispute(string $paymentDisputeId, AcceptPaymentDisputeRequest $body, ?string $accessToken = null, ?RequestOptions $requestOptions = null): void
    {
        TokenContext::set($accessToken);
        $rc = new AcceptRequestBuilderPostRequestConfiguration(headers: $this->mergeHeaders($requestOptions));
        $this->kiota->payment_dispute()->byPayment_dispute_id($paymentDisputeId)->accept()->post($body, $rc)->wait();
    }

    /**
     * @param string|null $accessToken Per-call token; overrides configuration fallback.
     */
    public function contestPaymentDispute(string $paymentDisputeId, ContestPaymentDisputeRequest $body, ?string $accessToken = null, ?RequestOptions $requestOptions = null): void
    {
        TokenContext::set($accessToken);
        $rc = new ContestRequestBuilderPostRequestConfiguration(headers: $this->mergeHeaders($requestOptions));
        $this->kiota->payment_dispute()->byPayment_dispute_id($paymentDisputeId)->contest()->post($body, $rc)->wait();
    }

    /**
     * @param string|null $accessToken Per-call token; overrides configuration fallback.
     */
    public function addEvidence(string $paymentDisputeId, AddEvidencePaymentDisputeRequest $body, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ?AddEvidencePaymentDisputeResponse
    {
        TokenContext::set($accessToken);
        $rc = new Add_evidenceRequestBuilderPostRequestConfiguration(headers: $this->mergeHeaders($requestOptions));
        return $this->kiota->payment_dispute()->byPayment_dispute_id($paymentDisputeId)->add_evidence()->post($body, $rc)->wait();
    }

    /**
     * @param string|null $accessToken Per-call token; overrides configuration fallback.
     */
    public function updateEvidence(string $paymentDisputeId, UpdateEvidencePaymentDisputeRequest $body, ?string $accessToken = null, ?RequestOptions $requestOptions = null): void
    {
        TokenContext::set($accessToken);
        $rc = new Update_evidenceRequestBuilderPostRequestConfiguration(headers: $this->mergeHeaders($requestOptions));
        $this->kiota->payment_dispute()->byPayment_dispute_id($paymentDisputeId)->update_evidence()->post($body, $rc)->wait();
    }

    /**
     * @param string|null $evidenceId Identifier of the evidential file set.
     * @param string|null $fileId Identifier of the specific evidential file within the file set.
     * @param string|null $accessToken Per-call token; overrides configuration fallback.
     */
    public function fetchEvidenceContent(string $paymentDisputeId, ?string $evidenceId = null, ?string $fileId = null, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ?StreamInterface
    {
        TokenContext::set($accessToken);
        $rc = new Fetch_evidence_contentRequestBuilderGetRequestConfiguration(
            headers: $this->mergeHeaders($requestOptions),
            queryParameters: Fetch_evidence_contentRequestBuilderGetRequestConfiguration::createQueryParameters(
                evidence_id: $evidenceId,
                file_id: $fileId,
            ),
        );
        return $this->kiota->payment_dispute()->byPayment_dispute_id($paymentDisputeId)->fetch_evidence_content()->get($rc)->wait();
    }

    /**
     * @param string|null $accessToken Per-call token; overrides configuration fallback.
     */
    public function uploadEvidenceFile(string $paymentDisputeId, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ?FileEvidence
    {
        TokenContext::set($accessToken);
        $rc = new Upload_evidence_fileRequestBuilderPostRequestConfiguration(headers: $this->mergeHeaders($requestOptions));
        return $this->kiota->payment_dispute()->byPayment_dispute_id($paymentDisputeId)->upload_evidence_file()->post(null, $rc)->wait();
    }

    // ── Internal ──────────────────────────────────────────────────────────────

    /**
     * Merges default and per-call headers; default headers do not overwrite
     * values already present (matching C# tryAdd semantics).
     *
     * @return array<string,string>
     */
    private function mergeHeaders(?RequestOptions $requestOptions): array
    {
        $merged = [];
        // Default headers go in first (lower priority — tryAdd semantics)
        foreach ($this->config->defaultRequestOptions->headers as $key => $value) {
            $merged[$key] = $value;
        }
        // Per-call headers overwrite defaults
        if ($requestOptions !== null) {
            foreach ($requestOptions->headers as $key => $value) {
                $merged[$key] = $value;
            }
        }
        return $merged;
    }
}
