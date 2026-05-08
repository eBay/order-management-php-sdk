<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\CancellationOperations\SellerContractCancellations;

readonly class CancellationSort
{
    public function __construct(
        public string $sortField = 'REQUESTED_AT',
        public string $sortOrder = 'ASC',
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            sortField: $data['sortField'] ?? 'REQUESTED_AT',
            sortOrder: $data['sortOrder'] ?? 'ASC',
        );
    }

    public function toArray(): array
    {
        return [
            'sortField' => $this->sortField,
            'sortOrder' => $this->sortOrder,
        ];
    }
}
