<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\OrdersByIds;

readonly class Input
{
    /**
     * @param string[] $orderIds
     */
    public function __construct(
        public array $orderIds,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            orderIds: $data['orderIds'],
        );
    }

    public function toArray(): array
    {
        return [
            'orderIds' => $this->orderIds,
        ];
    }
}
