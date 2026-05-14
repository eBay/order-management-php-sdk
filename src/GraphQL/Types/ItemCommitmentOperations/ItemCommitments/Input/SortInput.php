<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\ItemCommitments\Input;

readonly class SortInput
{
    public function __construct(
        public string $sortField,
        public string $sortOrder,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            sortField: $data['sortField'],
            sortOrder: $data['sortOrder'],
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
