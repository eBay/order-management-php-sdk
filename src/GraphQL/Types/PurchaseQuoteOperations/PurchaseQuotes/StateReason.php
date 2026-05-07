<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\PurchaseQuoteOperations\PurchaseQuotes;

readonly class StateReason
{
    public function __construct(
        public ?string $displayName = null,
        public ?string $id = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            displayName: $data['displayName'] ?? null,
            id:          $data['id'] ?? null,
        );
    }
}
