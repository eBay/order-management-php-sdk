<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\Orders;

readonly class Input
{
    public function __construct(
        public ?OrdersFirstPageInput $ordersFirstPage = null,
        public ?PageInfoInput $ordersPage = null,
    ) {}

    public function toArray(): array
    {
        $result = [];

        if ($this->ordersFirstPage !== null) {
            $result['ordersFirstPage'] = $this->ordersFirstPage->toArray();
        }

        if ($this->ordersPage !== null) {
            $result['ordersPage'] = $this->ordersPage->toArray();
        }

        return $result;
    }
}
