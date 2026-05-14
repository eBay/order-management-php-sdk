<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\ItemCommitments\Output;

readonly class CancellationLineItem
{
    public function __construct(
        public ?string $cancellationLineItemId = null,
        public ?int $cancelledQuantity = null,
        public ?int $requestedQuantity = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            cancellationLineItemId: $data['cancellationLineItemId'] ?? null,
            cancelledQuantity: isset($data['cancelledQuantity']) ? (int) $data['cancelledQuantity'] : null,
            requestedQuantity: isset($data['requestedQuantity']) ? (int) $data['requestedQuantity'] : null,
        );
    }
}
