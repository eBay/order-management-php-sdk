<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\SellerOrderReturns;

readonly class OrderReturnInitialPageInput
{
    public function __construct(
        public OrderReturnFilterInput $filter,
        public OrderReturnSortInput $sort,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            filter: OrderReturnFilterInput::fromArray($data['filter']),
            sort: OrderReturnSortInput::fromArray($data['sort']),
        );
    }

    public function toArray(): array
    {
        return [
            'filter' => $this->filter->toArray(),
            'sort'   => $this->sort->toArray(),
        ];
    }
}
