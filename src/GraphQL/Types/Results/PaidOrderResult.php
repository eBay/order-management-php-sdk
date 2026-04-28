<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\Results;

readonly class PaidOrderResult
{
    public function __construct(
        public ?string $orderId = null,
        public ?string $paidDate = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            orderId:  $data['orderId'] ?? null,
            paidDate: $data['paidDate'] ?? null,
        );
    }
}
