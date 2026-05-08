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

    public static function fromArray(array $data): static
    {
        return new static(
            contractCancellationReason: $data['contractCancellationReason'],
            purchaseQuoteId: $data['purchaseQuoteId'],
            relistAllItems: (bool)($data['relistAllItems'] ?? false),
        );
    }

    public function toArray(): array
    {
        return [
            'contractCancellationReason' => $this->contractCancellationReason,
            'purchaseQuoteId' => $this->purchaseQuoteId,
            'relistAllItems' => $this->relistAllItems,
        ];
    }
}
