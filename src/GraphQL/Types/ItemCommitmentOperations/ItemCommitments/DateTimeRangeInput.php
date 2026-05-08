<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\ItemCommitments;

readonly class DateTimeRangeInput
{
    public function __construct(
        public string $startDateTime,
        public string $endDateTime,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            startDateTime: $data['startDateTime'],
            endDateTime: $data['endDateTime'],
        );
    }

    public function toArray(): array
    {
        return [
            'startDateTime' => $this->startDateTime,
            'endDateTime'   => $this->endDateTime,
        ];
    }
}
