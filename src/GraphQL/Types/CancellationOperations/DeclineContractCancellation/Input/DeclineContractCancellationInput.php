<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\CancellationOperations\DeclineContractCancellation\Input;

final readonly class DeclineContractCancellationInput
{
    public function __construct(
        public string $cancellationId,
        public ?FulfillmentDetails $fulfillmentDetails = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            cancellationId: $data['cancellationId'],
            fulfillmentDetails: isset($data['fulfillmentDetails'])
                ? FulfillmentDetails::fromArray($data['fulfillmentDetails'])
                : null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'cancellationId' => $this->cancellationId,
            'fulfillmentDetails' => $this->fulfillmentDetails?->toArray(),
        ], static fn($v) => $v !== null);
    }
}
