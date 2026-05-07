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

    public function toArray(): array
    {
        return [
            'dateRange' => $this->dateRange->toArray(),
            'filter'    => $this->filter->toArray(),
            'sort'      => $this->sort->toArray(),
        ];
    }
}
