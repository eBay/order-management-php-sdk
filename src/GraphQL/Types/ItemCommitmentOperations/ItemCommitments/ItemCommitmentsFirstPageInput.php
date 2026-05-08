<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\ItemCommitments;

readonly class ItemCommitmentsFirstPageInput
{
    public function __construct(
        public ItemCommitmentsFirstFilterInput $filter,
        public int $maxPageSize,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            filter: ItemCommitmentsFirstFilterInput::fromArray($data['filter']),
            maxPageSize: $data['maxPageSize'],
        );
    }

    public function toArray(): array
    {
        return [
            'filter'      => $this->filter->toArray(),
            'maxPageSize' => $this->maxPageSize,
        ];
    }
}
