<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\ItemCommitments\Input;

readonly class DateRangeInput
{
    public function __construct(
        public DateTimeRangeInput $dateTimeRange,
        public string $dateType,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            dateTimeRange: DateTimeRangeInput::fromArray($data['dateTimeRange']),
            dateType: $data['dateType'],
        );
    }

    public function toArray(): array
    {
        return [
            'dateTimeRange' => $this->dateTimeRange->toArray(),
            'dateType' => $this->dateType,
        ];
    }
}
