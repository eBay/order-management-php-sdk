<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\CancellationOperations\ApproveContractCancellation;

readonly class Input
{
    public function __construct(
        public string $cancellationId,
        public bool $relistAllItems = false,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            cancellationId: $data['cancellationId'],
            relistAllItems: (bool)($data['relistAllItems'] ?? false),
        );
    }

    public function toArray(): array
    {
        return [
            'cancellationId' => $this->cancellationId,
            'relistAllItems' => $this->relistAllItems,
        ];
    }
}
