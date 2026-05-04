<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\Results;

readonly class BulkUpdateItemCommitmentTagsPartialFailure extends BulkUpdateItemCommitmentTagsOutput
{
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
            errorCode:              $data['errorCode'] ?? null,
            errorMessage:           $data['errorMessage'] ?? null,
            updatedItemCommitments: $data['updatedItemCommitments'] ?? [],
            failures:               $data['failures'] ?? [],
        );
    }
}
