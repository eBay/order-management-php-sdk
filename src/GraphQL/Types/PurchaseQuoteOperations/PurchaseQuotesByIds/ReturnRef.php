<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\PurchaseQuoteOperations\PurchaseQuotesByIds;

readonly class ReturnRef
{
    public function __construct(
        public ?string $returnId = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            returnId: $data['returnId'] ?? null,
        );
    }
}
