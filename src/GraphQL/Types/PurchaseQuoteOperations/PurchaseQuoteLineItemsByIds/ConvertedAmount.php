<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\PurchaseQuoteOperations\PurchaseQuoteLineItemsByIds;

readonly class ConvertedAmount
{
    public function __construct(
        public ?Amount $original = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            original: isset($data['original']) ? Amount::fromArray($data['original']) : null,
        );
    }
}
