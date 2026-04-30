<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\Results;

readonly class OrderLineItemsByIdsSuccess extends OrderLineItemsByIdsOutput
{
    /**
     * @param OrderLineItemData[] $lineItems
     */
    public function __construct(
        public array $lineItems = [],
    ) {}

    public function getTypename(): string
    {
        return 'OrderLineItemsByIdsSuccess';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            lineItems: array_map(
                static fn(array $i) => OrderLineItemData::fromArray($i),
                $data['lineItems'] ?? []
            ),
        );
    }
}
