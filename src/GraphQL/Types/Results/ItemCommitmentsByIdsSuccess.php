<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\Results;

readonly class ItemCommitmentsByIdsSuccess extends ItemCommitmentsByIdsOutput
{
    /**
     * @param ItemCommitmentData[] $itemCommitments
     */
    public function __construct(
        public array $itemCommitments = [],
    ) {}

    public function getTypename(): string
    {
        return 'ItemCommitmentsByIdsSuccess';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            itemCommitments: array_map(
                static fn(array $c) => ItemCommitmentData::fromArray($c),
                $data['itemCommitments'] ?? []
            ),
        );
    }
}
