<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\CancellationOperations\CreatePurchaseQuoteCancellation;

readonly class Input
{
    public function __construct(
        public string $contractCancellationReason,
        public string $purchaseQuoteId,
        public bool $relistAllItems = false,
    ) {}

    public function toArray(): array
    {
        return [
            'contractCancellationReason' => $this->contractCancellationReason,
            'purchaseQuoteId' => $this->purchaseQuoteId,
            'relistAllItems' => $this->relistAllItems,
        ];
    }
}
