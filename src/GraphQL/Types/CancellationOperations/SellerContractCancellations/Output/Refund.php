<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\CancellationOperations\SellerContractCancellations\Output;

final class Refund
{
    public function __construct(
        public readonly ?string $refundId = null,
    ) {
    }

    public static function fromArray(array $data): self
    {
        return new self(
            refundId: $data['refundId'] ?? null,
        );
    }
}
