<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\CancellationOperations\SellerContractCancellations\Input;

final class SortInput
{
    public function __construct(
        public readonly ?string $sortField = 'REQUESTED_AT',
        public readonly ?string $sortOrder = 'ASC',
    ) {
    }

    public static function fromArray(array $data): self
    {
        return new self(
            sortField: $data['sortField'] ?? 'REQUESTED_AT',
            sortOrder: $data['sortOrder'] ?? 'ASC',
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'sortField' => $this->sortField,
            'sortOrder' => $this->sortOrder,
        ], static fn($v) => $v !== null);
    }
}
