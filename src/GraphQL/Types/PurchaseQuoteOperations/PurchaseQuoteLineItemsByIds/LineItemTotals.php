<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\PurchaseQuoteOperations\PurchaseQuoteLineItemsByIds;

readonly class LineItemTotals
{
    public function __construct(
        public ?ConvertedAmount $total = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            total: isset($data['total']) ? ConvertedAmount::fromArray($data['total']) : null,
        );
    }
}
