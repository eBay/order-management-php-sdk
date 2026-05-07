<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\CancellationOperations\SellerContractCancellations;

readonly class InitialPage
{
    public function __construct(
        public CancellationFilter $filter,
        public CancellationSort $sort,
    ) {}

    public function toArray(): array
    {
        return [
            'filter' => $this->filter->toArray(),
            'sort' => $this->sort->toArray(),
        ];
    }
}
