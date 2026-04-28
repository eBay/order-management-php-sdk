<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\Results;

readonly class PurchaseQuoteData
{
    public function __construct(
        public ?string $purchaseQuoteId = null,
        public ?string $status = null,
        public ?string $creationDate = null,
        public ?string $lastModifiedDate = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            purchaseQuoteId:  $data['purchaseQuoteId'] ?? null,
            status:           $data['status'] ?? null,
            creationDate:     $data['creationDate'] ?? null,
            lastModifiedDate: $data['lastModifiedDate'] ?? null,
        );
    }
}
