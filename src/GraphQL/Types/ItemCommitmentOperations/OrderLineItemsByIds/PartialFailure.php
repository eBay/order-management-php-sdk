<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\OrderLineItemsByIds;

readonly class PartialFailure extends Output
{
    /**
     * @param LineItem[] $lineItems
     * @param Failure[] $failures
     */
    public function __construct(
        public array $lineItems = [],
        public array $failures = [],
    ) {}

    public function getTypename(): string
    {
        return 'OrderLineItemsByIdsPartialFailure';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            lineItems: array_map(
                fn(array $li) => LineItem::fromArray($li),
                $data['lineItems'] ?? []
            ),
            failures: array_map(
                fn(array $f) => Failure::fromArray($f),
                $data['failures'] ?? []
            ),
        );
    }
}
