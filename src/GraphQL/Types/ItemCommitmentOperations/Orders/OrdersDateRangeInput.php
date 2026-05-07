<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\Orders;

readonly class OrdersDateRangeInput
{
    public function __construct(
        public DateTimeRangeInput $dateTimeRange,
        public string $dateType,
    ) {}

    public function toArray(): array
    {
        return [
            'dateTimeRange' => $this->dateTimeRange->toArray(),
            'dateType'      => $this->dateType,
        ];
    }
}
