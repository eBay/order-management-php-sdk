<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\CancellationOperations\SellerContractCancellations\Input;

final class InitialPageInput
{
    public function __construct(
        public readonly FilterInput $filter,
        public readonly SortInput $sort,
    ) {
    }

    public static function fromArray(array $data): self
    {
        return new self(
            filter: FilterInput::fromArray($data['filter']),
            sort: SortInput::fromArray($data['sort']),
        );
    }

    public function toArray(): array
    {
        return [
            'filter' => $this->filter->toArray(),
            'sort' => $this->sort->toArray(),
        ];
    }
}
