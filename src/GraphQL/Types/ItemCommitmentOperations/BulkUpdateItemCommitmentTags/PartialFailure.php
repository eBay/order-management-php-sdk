<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\BulkUpdateItemCommitmentTags;

readonly class PartialFailure extends Output
{
    /**
     * @param UpdatedItemCommitment[] $updatedItemCommitments
     * @param Failure[] $failures
     */
    public function __construct(
        public ?string $errorCode = null,
        public ?string $errorMessage = null,
        public array $updatedItemCommitments = [],
        public array $failures = [],
    ) {}

    public function getTypename(): string
    {
        return 'BulkUpdateItemCommitmentTagsPartialFailure';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            errorCode: $data['errorCode'] ?? null,
            errorMessage: $data['errorMessage'] ?? null,
            updatedItemCommitments: array_map(
                fn(array $ic) => UpdatedItemCommitment::fromArray($ic),
                $data['updatedItemCommitments'] ?? []
            ),
            failures: array_map(
                fn(array $f) => Failure::fromArray($f),
                $data['failures'] ?? []
            ),
        );
    }
}
