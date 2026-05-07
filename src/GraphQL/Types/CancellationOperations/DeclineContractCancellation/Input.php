<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\CancellationOperations\DeclineContractCancellation;

readonly class Input
{
    public function __construct(
        public string $cancellationId,
        public ?FulfillmentDetails $fulfillmentDetails = null,
    ) {}

    public function toArray(): array
    {
        return array_filter([
            'cancellationId' => $this->cancellationId,
            'fulfillmentDetails' => $this->fulfillmentDetails?->toArray(),
        ], static fn($v) => $v !== null);
    }
}
