<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\Results;

readonly class PurchaseQuoteData
{
    public function __construct(
        public ?string $purchaseQuoteId = null,
        public ?string $createdAt = null,
        public ?string $updatedAt = null,
        public ?array  $state = null,
        public ?array  $cancellation = null,
        public ?array  $buyer = null,
        public ?array  $seller = null,
        /** @var array[] */
        public array   $lineItems = [],
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            purchaseQuoteId: $data['purchaseQuoteId'] ?? null,
            createdAt:       $data['createdAt'] ?? null,
            updatedAt:       $data['updatedAt'] ?? null,
            state:           $data['state'] ?? null,
            cancellation:    $data['cancellation'] ?? null,
            buyer:           $data['buyer'] ?? null,
            seller:          $data['seller'] ?? null,
            lineItems:       $data['lineItems'] ?? [],
        );
    }
}
