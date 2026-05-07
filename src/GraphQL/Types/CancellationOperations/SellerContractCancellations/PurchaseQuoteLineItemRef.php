<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\CancellationOperations\SellerContractCancellations;

readonly class PurchaseQuoteLineItemRef
{
    public function __construct(
        public ?string $purchaseQuoteLineItemId = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            purchaseQuoteLineItemId: $data['purchaseQuoteLineItemId'] ?? null,
        );
    }
}
