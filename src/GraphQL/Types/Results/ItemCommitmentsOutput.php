<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\Results;

/**
 * Top-level result for the itemCommitments query.
 * Shape: { itemCommitments { buyerItemCommitments(input:{}) { itemCommitments { ... } pagination { ... } } } }
 */
readonly class ItemCommitmentsOutput
{
    public function __construct(
        public ?SellerItemCommitmentsResult $buyerItemCommitments = null,
    ) {}

    public static function fromArray(array $data): self
    {
        // Support both field names for backward compat
        $nested = $data['buyerItemCommitments'] ?? $data['sellerItemCommitments'] ?? null;

        return new self(
            buyerItemCommitments: $nested !== null
                ? SellerItemCommitmentsResult::fromArray($nested)
                : null,
        );
    }
}
