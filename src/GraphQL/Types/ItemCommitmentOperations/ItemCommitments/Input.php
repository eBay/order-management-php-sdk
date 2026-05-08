<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\ItemCommitments;

readonly class Input
{
    public function __construct(
        public ?ItemCommitmentsFirstPageInput $itemCommitmentsFirstPage = null,
        public ?PageInfoInput $itemCommitmentsPage = null,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            itemCommitmentsFirstPage: isset($data['itemCommitmentsFirstPage'])
                ? ItemCommitmentsFirstPageInput::fromArray($data['itemCommitmentsFirstPage'])
                : null,
            itemCommitmentsPage: isset($data['itemCommitmentsPage'])
                ? PageInfoInput::fromArray($data['itemCommitmentsPage'])
                : null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'itemCommitmentsFirstPage' => $this->itemCommitmentsFirstPage?->toArray(),
            'itemCommitmentsPage'      => $this->itemCommitmentsPage?->toArray(),
        ], static fn($v) => $v !== null);
    }
}
