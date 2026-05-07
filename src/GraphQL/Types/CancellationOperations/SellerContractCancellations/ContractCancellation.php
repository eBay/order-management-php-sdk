<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\CancellationOperations\SellerContractCancellations;

readonly class ContractCancellation
{
    /**
     * @param LineItem[] $lineItems
     * @param Refund[]   $refunds
     */
    public function __construct(
        public ?string $__typename = null,
        public ?string $cancellationId = null,
        public array $lineItems = [],
        public ?string $requestedAt = null,
        public ?CancellationReason $reason = null,
        public ?string $requesterNote = null,
        public ?string $requester = null,
        public ?CancellationStatus $status = null,
        public ?string $closedAt = null,
        public array $refunds = [],
        public ?SellerAvailableActions $sellerAvailableActions = null,
        public ?ItemCommitmentRef $itemCommitment = null,
        public ?PurchaseQuoteRef $purchaseQuote = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            __typename: $data['__typename'] ?? null,
            cancellationId: $data['cancellationId'] ?? null,
            lineItems: array_map(
                static fn(array $li) => LineItem::fromArray($li),
                $data['lineItems'] ?? [],
            ),
            requestedAt: $data['requestedAt'] ?? null,
            reason: isset($data['reason']) ? CancellationReason::fromArray($data['reason']) : null,
            requesterNote: $data['requesterNote'] ?? null,
            requester: $data['requester'] ?? null,
            status: isset($data['status']) ? CancellationStatus::fromArray($data['status']) : null,
            closedAt: $data['closedAt'] ?? null,
            refunds: array_map(
                static fn(array $r) => Refund::fromArray($r),
                $data['refunds'] ?? [],
            ),
            sellerAvailableActions: isset($data['sellerAvailableActions'])
                ? SellerAvailableActions::fromArray($data['sellerAvailableActions']) : null,
            itemCommitment: isset($data['itemCommitment'])
                ? ItemCommitmentRef::fromArray($data['itemCommitment']) : null,
            purchaseQuote: isset($data['purchaseQuote'])
                ? PurchaseQuoteRef::fromArray($data['purchaseQuote']) : null,
        );
    }
}
