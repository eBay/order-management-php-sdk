<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\ItemCommitments\Input;

readonly class FirstFilterInput
{
    public function __construct(
        public DateRangeInput $dateRange,
        public FilterInput $filter,
        public SortInput $sort,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            dateRange: DateRangeInput::fromArray($data['dateRange']),
            filter: isset($data['filter'])
                ? FilterInput::fromArray($data['filter'])
                : new FilterInput(),
            sort: SortInput::fromArray($data['sort']),
        );
    }

    public function toArray(): array
    {
        return [
            'dateRange' => $this->dateRange->toArray(),
            'filter' => $this->filter->toArray(),
            'sort' => $this->sort->toArray(),
        ];
    }
}
