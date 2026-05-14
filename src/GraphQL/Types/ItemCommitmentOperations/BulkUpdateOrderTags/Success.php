<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\BulkUpdateOrderTags;

readonly class Success extends Output
{
    /**
     * @param OrderWithTags[] $updatedOrders
     */
    public function __construct(
        public array $updatedOrders = [],
    ) {}

    public function getTypename(): string
    {
        return 'BulkUpdateOrderTagsSuccess';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            updatedOrders: array_map(
                static fn(array $o) => OrderWithTags::fromArray($o),
                $data['updatedOrders'] ?? [],
            ),
        );
    }
}
