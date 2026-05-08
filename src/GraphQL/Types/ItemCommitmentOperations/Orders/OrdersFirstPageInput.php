<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\Orders;

readonly class OrdersFirstPageInput
{
    public function __construct(
        public OrdersFirstFilterInput $filter,
        public int $maxPageSize,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            filter: OrdersFirstFilterInput::fromArray($data['filter']),
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
