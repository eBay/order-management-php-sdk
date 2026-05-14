<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\CancellationOperations\ContractCancellation\Output;

readonly class Refund
{
    public function __construct(
        public ?string $refundId,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            refundId: $data['refundId'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'refundId' => $this->refundId,
        ], fn($v) => $v !== null);
    }
}
