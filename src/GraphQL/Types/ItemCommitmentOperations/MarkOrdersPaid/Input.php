<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\MarkOrdersPaid;

readonly class Input
{
    /**
     * @param string[] $orderIds
     */
    public function __construct(
        public array $orderIds,
    ) {}

    public function toArray(): array
    {
        return [
            'orderIds' => $this->orderIds,
        ];
    }
}
