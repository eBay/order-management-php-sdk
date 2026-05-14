<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\ItemCommitments\Input;

readonly class DateTimeRangeInput
{
    public function __construct(
        public string $endDateTime,
        public string $startDateTime,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            endDateTime: $data['endDateTime'],
            startDateTime: $data['startDateTime'],
        );
    }

    public function toArray(): array
    {
        return [
            'endDateTime' => $this->endDateTime,
            'startDateTime' => $this->startDateTime,
        ];
    }
}
