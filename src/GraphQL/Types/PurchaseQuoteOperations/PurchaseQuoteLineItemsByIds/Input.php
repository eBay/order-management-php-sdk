<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\PurchaseQuoteOperations\PurchaseQuoteLineItemsByIds;

readonly class Input
{
    /**
     * @param string[] $purchaseQuoteLineItemId
     */
    public function __construct(
        public array $purchaseQuoteLineItemId,
    ) {}

    public function toArray(): array
    {
        return [
            'purchaseQuoteLineItemId' => $this->purchaseQuoteLineItemId,
        ];
    }
}
