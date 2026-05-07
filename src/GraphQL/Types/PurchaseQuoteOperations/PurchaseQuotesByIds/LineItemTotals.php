<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\PurchaseQuoteOperations\PurchaseQuotesByIds;

readonly class LineItemTotals
{
    public function __construct(
        public ?Taxes $taxes = null,
        public ?ConvertedAmount $total = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            taxes: isset($data['taxes']) ? Taxes::fromArray($data['taxes']) : null,
            total: isset($data['total']) ? ConvertedAmount::fromArray($data['total']) : null,
        );
    }
}
