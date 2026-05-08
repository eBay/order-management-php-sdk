<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\OrderLineItemsByIds;

readonly class Input
{
    /**
     * @param string[] $lineItemIds
     */
    public function __construct(
        public array $lineItemIds,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            lineItemIds: $data['lineItemIds'],
        );
    }

    public function toArray(): array
    {
        return [
            'lineItemIds' => $this->lineItemIds,
        ];
    }
}
