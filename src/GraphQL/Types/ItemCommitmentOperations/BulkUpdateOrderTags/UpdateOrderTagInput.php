<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\BulkUpdateOrderTags;

readonly class UpdateOrderTagInput
{
    /**
     * @param string[] $tags
     */
    public function __construct(
        public string $action,
        public string $orderId,
        public array $tags,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            action: $data['action'],
            orderId: $data['orderId'],
            tags: $data['tags'] ?? [],
        );
    }

    public function toArray(): array
    {
        return [
            'action'  => $this->action,
            'orderId' => $this->orderId,
            'tags'    => $this->tags,
        ];
    }
}
