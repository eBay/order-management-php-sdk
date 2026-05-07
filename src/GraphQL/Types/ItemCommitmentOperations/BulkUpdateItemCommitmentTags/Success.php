<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\BulkUpdateItemCommitmentTags;

readonly class Success extends Output
{
    /**
     * @param UpdatedItemCommitment[] $updatedItemCommitments
     */
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
            updatedItemCommitments: array_map(
                fn(array $ic) => UpdatedItemCommitment::fromArray($ic),
                $data['updatedItemCommitments'] ?? []
            ),
        );
    }
}
