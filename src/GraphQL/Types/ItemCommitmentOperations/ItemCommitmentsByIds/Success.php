<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\ItemCommitmentsByIds;

readonly class Success extends Output
{
    /**
     * @param ItemCommitment[] $itemCommitments
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
                fn(array $ic) => ItemCommitment::fromArray($ic),
                $data['itemCommitments'] ?? []
            ),
        );
    }
}
