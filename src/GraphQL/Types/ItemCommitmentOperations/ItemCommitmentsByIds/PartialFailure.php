<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\ItemCommitmentsByIds;

readonly class PartialFailure extends Output
{
    /**
     * @param ItemCommitment[] $itemCommitments
     * @param Failure[] $failures
     */
    public function __construct(
        public array $itemCommitments = [],
        public array $failures = [],
    ) {}

    public function getTypename(): string
    {
        return 'ItemCommitmentsByIdsPartialFailure';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            itemCommitments: array_map(
                fn(array $ic) => ItemCommitment::fromArray($ic),
                $data['itemCommitments'] ?? []
            ),
            failures: array_map(
                fn(array $f) => Failure::fromArray($f),
                $data['failures'] ?? []
            ),
        );
    }
}
