<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\PurchaseQuoteOperations\PurchaseQuotesByIds;

/**
 * Represents the source of a line item (e.g. ItemCommitment).
 */
readonly class LineItemSource
{
    public function __construct(
        public ?string $itemCommitmentId = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            itemCommitmentId: $data['itemCommitmentId'] ?? null,
        );
    }
}
