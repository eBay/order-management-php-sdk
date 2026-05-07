<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\CancellationOperations\CreatePurchaseQuoteCancellation;

readonly class NotFoundError extends Output
{
    public function __construct(
        public ?string $errorCode = null,
        public ?string $errorMessage = null,
        public ?string $purchaseQuoteId = null,
    ) {}

    public function getTypename(): string
    {
        return 'PurchaseQuoteNotFoundError';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            errorCode: $data['errorCode'] ?? null,
            errorMessage: $data['errorMessage'] ?? null,
            purchaseQuoteId: $data['purchaseQuoteId'] ?? null,
        );
    }
}
