<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\Orders;

readonly class OrdersFirstFilterInput
{
    public function __construct(
        public OrdersDateRangeInput $dateRange,
        public OrdersSortInput $sort,
        public OrdersFilterInput $filter = new OrdersFilterInput(),
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            dateRange: OrdersDateRangeInput::fromArray($data['dateRange']),
            sort: OrdersSortInput::fromArray($data['sort']),
            filter: isset($data['filter'])
                ? OrdersFilterInput::fromArray($data['filter'])
                : new OrdersFilterInput(),
        );
    }

    public function toArray(): array
    {
        return [
            'dateRange' => $this->dateRange->toArray(),
            'filter'    => $this->filter->toArray(),
            'sort'      => $this->sort->toArray(),
        ];
    }
}
