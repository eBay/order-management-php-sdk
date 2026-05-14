<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\BulkUpdateOrderTags;

readonly class PurchaseTags
{
    /**
     * @param string[] $tags
     */
    public function __construct(
        public ?bool $sellerAcknowledged = null,
        public array $tags = [],
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            sellerAcknowledged: isset($data['sellerAcknowledged']) ? (bool)$data['sellerAcknowledged'] : null,
            tags: $data['tags'] ?? [],
        );
    }
}
