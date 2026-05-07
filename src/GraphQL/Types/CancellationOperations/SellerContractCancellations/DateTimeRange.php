<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\CancellationOperations\SellerContractCancellations;

readonly class DateTimeRange
{
    public function __construct(
        public string $endDateTime,
        public string $startDateTime,
    ) {}

    public function toArray(): array
    {
        return [
            'endDateTime' => $this->endDateTime,
            'startDateTime' => $this->startDateTime,
        ];
    }
}
