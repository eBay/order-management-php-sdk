<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\ItemCommitmentsByIds;

readonly class CompleteFailure extends Output
{
    /**
     * @param Failure[] $failures
     */
    public function __construct(
        public array $failures = [],
    ) {}

    public function getTypename(): string
    {
        return 'ItemCommitmentsByIdsCompleteFailure';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            failures: array_map(
                fn(array $f) => Failure::fromArray($f),
                $data['failures'] ?? []
            ),
        );
    }
}
