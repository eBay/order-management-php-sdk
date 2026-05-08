<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\CancellationOperations\CreateItemCommitmentCancellation;

readonly class Input
{
    public function __construct(
        public string $contractCancellationReason,
        public string $itemCommitmentId,
        public bool $relistItem = false,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            contractCancellationReason: $data['contractCancellationReason'],
            itemCommitmentId: $data['itemCommitmentId'],
            relistItem: (bool)($data['relistItem'] ?? false),
        );
    }

    public function toArray(): array
    {
        return [
            'contractCancellationReason' => $this->contractCancellationReason,
            'itemCommitmentId' => $this->itemCommitmentId,
            'relistItem' => $this->relistItem,
        ];
    }
}
