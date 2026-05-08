<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\PurchaseQuoteOperations\BulkUpdatePurchaseQuotes;

readonly class PurchaseQuoteItemInput
{
    public function __construct(
        public string $itemCommitmentId,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            itemCommitmentId: $data['itemCommitmentId'],
        );
    }

    public function toArray(): array
    {
        return [
            'itemCommitmentId' => $this->itemCommitmentId,
        ];
    }
}
