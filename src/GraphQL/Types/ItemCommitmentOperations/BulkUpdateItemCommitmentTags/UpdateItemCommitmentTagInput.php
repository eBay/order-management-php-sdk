<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\BulkUpdateItemCommitmentTags;

readonly class UpdateItemCommitmentTagInput
{
    /**
     * @param string[] $tags
     */
    public function __construct(
        public string $action,
        public string $itemCommitment,
        public array $tags,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            action: $data['action'],
            itemCommitment: $data['itemCommitment'],
            tags: $data['tags'],
        );
    }

    public function toArray(): array
    {
        return [
            'action'          => $this->action,
            'itemCommitment'  => $this->itemCommitment,
            'tags'            => $this->tags,
        ];
    }
}
