<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\PurchaseQuoteOperations\PurchaseQuotesByIds;

readonly class Input
{
    /**
     * @param string[] $purchaseQuoteIds
     */
    public function __construct(
        public array $purchaseQuoteIds,
    ) {}

    public function toArray(): array
    {
        return [
            'purchaseQuoteIds' => $this->purchaseQuoteIds,
        ];
    }
}
