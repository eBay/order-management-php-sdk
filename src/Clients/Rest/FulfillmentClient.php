<?php

namespace EBay\OrderManagement\Clients\Rest;

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
use Psr\Http\Message\StreamInterface;

final class FulfillmentClient
{
    public function __construct(private readonly FulfillmentApiClient $kiota) {}

    // ── Orders ────────────────────────────────────────────────────────────────

    /**
     * @param string|null $accessToken Per-call token; overrides configuration fallback.
     */
    public function getOrder(string $orderId, ?string $accessToken = null): ?Order
    {
        TokenContext::set($accessToken);
        return $this->kiota->order()->byOrderId($orderId)->get()->wait();
    }

    /**
     * @param string|null $accessToken Per-call token; overrides configuration fallback.
     */
    public function getOrders(?string $accessToken = null): ?OrderSearchPagedCollection
    {
        TokenContext::set($accessToken);
        return $this->kiota->order()->get()->wait();
    }

    /**
     * @param string|null $accessToken Per-call token; overrides configuration fallback.
     */
    public function issueRefund(string $orderId, IssueRefundRequest $body, ?string $accessToken = null): ?Refund
    {
        TokenContext::set($accessToken);
        return $this->kiota->order()->byOrderId($orderId)->issue_refund()->post($body)->wait();
    }

    // ── Shipping Fulfillments ─────────────────────────────────────────────────

    /**
     * @param string|null $accessToken Per-call token; overrides configuration fallback.
     */
    public function getShippingFulfillments(string $orderId, ?string $accessToken = null): ?ShippingFulfillmentPagedCollection
    {
        TokenContext::set($accessToken);
        return $this->kiota->order()->byOrderId($orderId)->shipping_fulfillment()->get()->wait();
    }

    /**
     * @param string|null $accessToken Per-call token; overrides configuration fallback.
     */
    public function createShippingFulfillment(string $orderId, ShippingFulfillmentDetails $body, ?string $accessToken = null): ?Shipping_fulfillmentPostResponse
    {
        TokenContext::set($accessToken);
        return $this->kiota->order()->byOrderId($orderId)->shipping_fulfillment()->post($body)->wait();
    }

    /**
     * @param string|null $accessToken Per-call token; overrides configuration fallback.
     */
    public function getShippingFulfillment(string $orderId, string $fulfillmentId, ?string $accessToken = null): ?ShippingFulfillment
    {
        TokenContext::set($accessToken);
        return $this->kiota->order()->byOrderId($orderId)->shipping_fulfillment()->byFulfillmentId($fulfillmentId)->get()->wait();
    }

    // ── Payment Disputes ──────────────────────────────────────────────────────

    /**
     * @param string|null $accessToken Per-call token; overrides configuration fallback.
     */
    public function getPaymentDispute(string $paymentDisputeId, ?string $accessToken = null): ?PaymentDispute
    {
        TokenContext::set($accessToken);
        return $this->kiota->payment_dispute()->byPayment_dispute_id($paymentDisputeId)->get()->wait();
    }

    /**
     * @param string|null $accessToken Per-call token; overrides configuration fallback.
     */
    public function getPaymentDisputeSummaries(?string $accessToken = null): ?DisputeSummaryResponse
    {
        TokenContext::set($accessToken);
        return $this->kiota->payment_dispute_summary()->get()->wait();
    }

    /**
     * @param string|null $accessToken Per-call token; overrides configuration fallback.
     */
    public function getActivities(string $paymentDisputeId, ?string $accessToken = null): ?PaymentDisputeActivityHistory
    {
        TokenContext::set($accessToken);
        return $this->kiota->payment_dispute()->byPayment_dispute_id($paymentDisputeId)->activity()->get()->wait();
    }

    /**
     * @param string|null $accessToken Per-call token; overrides configuration fallback.
     */
    public function acceptPaymentDispute(string $paymentDisputeId, AcceptPaymentDisputeRequest $body, ?string $accessToken = null): void
    {
        TokenContext::set($accessToken);
        $this->kiota->payment_dispute()->byPayment_dispute_id($paymentDisputeId)->accept()->post($body)->wait();
    }

    /**
     * @param string|null $accessToken Per-call token; overrides configuration fallback.
     */
    public function contestPaymentDispute(string $paymentDisputeId, ContestPaymentDisputeRequest $body, ?string $accessToken = null): void
    {
        TokenContext::set($accessToken);
        $this->kiota->payment_dispute()->byPayment_dispute_id($paymentDisputeId)->contest()->post($body)->wait();
    }

    /**
     * @param string|null $accessToken Per-call token; overrides configuration fallback.
     */
    public function addEvidence(string $paymentDisputeId, AddEvidencePaymentDisputeRequest $body, ?string $accessToken = null): ?AddEvidencePaymentDisputeResponse
    {
        TokenContext::set($accessToken);
        return $this->kiota->payment_dispute()->byPayment_dispute_id($paymentDisputeId)->add_evidence()->post($body)->wait();
    }

    /**
     * @param string|null $accessToken Per-call token; overrides configuration fallback.
     */
    public function updateEvidence(string $paymentDisputeId, UpdateEvidencePaymentDisputeRequest $body, ?string $accessToken = null): void
    {
        TokenContext::set($accessToken);
        $this->kiota->payment_dispute()->byPayment_dispute_id($paymentDisputeId)->update_evidence()->post($body)->wait();
    }

    /**
     * @param string|null $accessToken Per-call token; overrides configuration fallback.
     */
    public function fetchEvidenceContent(string $paymentDisputeId, ?string $accessToken = null): ?StreamInterface
    {
        TokenContext::set($accessToken);
        return $this->kiota->payment_dispute()->byPayment_dispute_id($paymentDisputeId)->fetch_evidence_content()->get()->wait();
    }

    /**
     * @param string|null $accessToken Per-call token; overrides configuration fallback.
     */
    public function uploadEvidenceFile(string $paymentDisputeId, ?string $accessToken = null): ?FileEvidence
    {
        TokenContext::set($accessToken);
        return $this->kiota->payment_dispute()->byPayment_dispute_id($paymentDisputeId)->upload_evidence_file()->post()->wait();
    }
}
