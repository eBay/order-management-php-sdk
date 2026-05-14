<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\ItemCommitments\Input;

readonly class FirstPageInput
{
    public function __construct(
        public FirstFilterInput $filter,
        public int $maxPageSize,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            filter: FirstFilterInput::fromArray($data['filter']),
            maxPageSize: (int) $data['maxPageSize'],
        );
    }

    public function toArray(): array
    {
        return [
            'filter' => $this->filter->toArray(),
            'maxPageSize' => $this->maxPageSize,
        ];
    }
}
