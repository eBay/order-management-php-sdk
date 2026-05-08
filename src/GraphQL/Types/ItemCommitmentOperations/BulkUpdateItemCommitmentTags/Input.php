<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\BulkUpdateItemCommitmentTags;

readonly class Input
{
    /**
     * @param UpdateItemCommitmentTagInput[] $itemCommitmentTagUpdates
     */
    public function __construct(
        public array $itemCommitmentTagUpdates,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            itemCommitmentTagUpdates: array_map(
                fn(array $u) => UpdateItemCommitmentTagInput::fromArray($u),
                $data['itemCommitmentTagUpdates'],
            ),
        );
    }

    public function toArray(): array
    {
        return [
            'itemCommitmentTagUpdates' => array_map(
                fn(UpdateItemCommitmentTagInput $u) => $u->toArray(),
                $this->itemCommitmentTagUpdates
            ),
        ];
    }
}
