<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\CancellationOperations\CreatePurchaseQuoteCancellation;

readonly class Success extends Output
{
    public function __construct(
        public ?PurchaseQuoteCancellation $purchaseQuoteCancellation = null,
    ) {}

    public function getTypename(): string
    {
        return 'CreatePurchaseQuoteCancellationSuccess';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            purchaseQuoteCancellation: isset($data['purchaseQuoteCancellation'])
                ? PurchaseQuoteCancellation::fromArray($data['purchaseQuoteCancellation']) : null,
        );
    }
}
