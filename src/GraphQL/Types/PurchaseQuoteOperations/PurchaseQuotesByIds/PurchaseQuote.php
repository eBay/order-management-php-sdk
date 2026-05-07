<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\PurchaseQuoteOperations\PurchaseQuotesByIds;

readonly class PurchaseQuote
{
    /**
     * @param LineItem[] $lineItems
     */
    public function __construct(
        public ?string $purchaseQuoteId = null,
        public ?string $createdAt = null,
        public ?string $updatedAt = null,
        public ?PurchaseQuoteState $state = null,
        public ?Cancellation $cancellation = null,
        public ?Party $buyer = null,
        public ?Party $seller = null,
        public array $lineItems = [],
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            purchaseQuoteId: $data['purchaseQuoteId'] ?? null,
            createdAt:       $data['createdAt'] ?? null,
            updatedAt:       $data['updatedAt'] ?? null,
            state:           isset($data['state']) ? PurchaseQuoteState::fromArray($data['state']) : null,
            cancellation:    isset($data['cancellation']) ? Cancellation::fromArray($data['cancellation']) : null,
            buyer:           isset($data['buyer']) ? Party::fromArray($data['buyer']) : null,
            seller:          isset($data['seller']) ? Party::fromArray($data['seller']) : null,
            lineItems:       array_map(fn(array $li) => LineItem::fromArray($li), $data['lineItems'] ?? []),
        );
    }
}
