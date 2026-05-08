<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\ItemCommitmentsByIds;

readonly class Input
{
    /**
     * @param string[] $itemCommitmentIds
     */
    public function __construct(
        public array $itemCommitmentIds,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            itemCommitmentIds: $data['itemCommitmentIds'],
        );
    }

    public function toArray(): array
    {
        return [
            'itemCommitmentIds' => $this->itemCommitmentIds,
        ];
    }
}
