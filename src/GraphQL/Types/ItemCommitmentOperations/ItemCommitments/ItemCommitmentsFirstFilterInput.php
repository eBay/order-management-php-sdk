<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\ItemCommitments;

readonly class ItemCommitmentsFirstFilterInput
{
    public function __construct(
        public ItemCommitmentsDateRangeInput $dateRange,
        public ?ItemCommitmentsFilterInput $filter = null,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            dateRange: ItemCommitmentsDateRangeInput::fromArray($data['dateRange']),
            filter: isset($data['filter'])
                ? ItemCommitmentsFilterInput::fromArray($data['filter'])
                : null,
        );
    }

    public function toArray(): array
    {
        $result = [
            'dateRange' => $this->dateRange->toArray(),
        ];

        if ($this->filter !== null) {
            $result['filter'] = $this->filter->toArray();
        }

        return $result;
    }
}
