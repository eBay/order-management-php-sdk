<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\CancellationOperations\DeclineContractCancellation;

readonly class Input
{
    public function __construct(
        public string $cancellationId,
        public ?FulfillmentDetails $fulfillmentDetails = null,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            cancellationId: $data['cancellationId'],
            fulfillmentDetails: isset($data['fulfillmentDetails']) ? FulfillmentDetails::fromArray($data['fulfillmentDetails']) : null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'cancellationId' => $this->cancellationId,
            'fulfillmentDetails' => $this->fulfillmentDetails !== null ? (object)$this->fulfillmentDetails->toArray() : null,
        ], static fn($v) => $v !== null);
    }
}
