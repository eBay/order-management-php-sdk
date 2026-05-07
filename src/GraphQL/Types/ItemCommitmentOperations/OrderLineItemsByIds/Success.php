<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\OrderLineItemsByIds;

readonly class Success extends Output
{
    /**
     * @param LineItem[] $lineItems
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
                fn(array $li) => LineItem::fromArray($li),
                $data['lineItems'] ?? []
            ),
        );
    }
}
