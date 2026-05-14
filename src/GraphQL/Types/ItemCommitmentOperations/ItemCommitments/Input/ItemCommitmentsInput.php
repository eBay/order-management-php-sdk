<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\ItemCommitments\Input;

readonly class ItemCommitmentsInput
{
    public function __construct(
        public ?FirstPageInput $itemCommitmentsFirstPage = null,
        public ?PageInfoInput $itemCommitmentsPage = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            itemCommitmentsFirstPage: isset($data['itemCommitmentsFirstPage'])
                ? FirstPageInput::fromArray($data['itemCommitmentsFirstPage'])
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
            'itemCommitmentsPage' => $this->itemCommitmentsPage?->toArray(),
        ], static fn($v) => $v !== null);
    }
}
