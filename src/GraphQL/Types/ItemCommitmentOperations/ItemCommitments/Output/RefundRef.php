<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\ItemCommitments\Output;

readonly class RefundRef
{
    public function __construct(
        public ?string $refundId = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            refundId: $data['refundId'] ?? null,
        );
    }
}
