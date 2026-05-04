<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\Results;

readonly class BulkUpdateItemCommitmentTagsSuccess extends BulkUpdateItemCommitmentTagsOutput
{
    public function __construct(
        public array $updatedItemCommitments = [],
    ) {}

    public function getTypename(): string
    {
        return 'BulkUpdateItemCommitmentTagsSuccess';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            updatedItemCommitments: $data['updatedItemCommitments'] ?? [],
        );
    }
}
