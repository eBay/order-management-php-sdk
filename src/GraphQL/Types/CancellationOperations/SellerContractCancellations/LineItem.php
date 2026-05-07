<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\CancellationOperations\SellerContractCancellations;

readonly class LineItem
{
    /**
     * @param ListingRestockTask[] $listingRestockTasks
     */
    public function __construct(
        public ?string $__typename = null,
        public ?string $cancellationLineItemId = null,
        public ?int $requestedQuantity = null,
        public ?int $cancelledQuantity = null,
        public array $listingRestockTasks = [],
        public ?OrderLineItemRef $orderLineItem = null,
        public ?PurchaseQuoteLineItemRef $purchaseQuoteLineItem = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            __typename: $data['__typename'] ?? null,
            cancellationLineItemId: $data['cancellationLineItemId'] ?? null,
            requestedQuantity: isset($data['requestedQuantity']) ? (int) $data['requestedQuantity'] : null,
            cancelledQuantity: isset($data['cancelledQuantity']) ? (int) $data['cancelledQuantity'] : null,
            listingRestockTasks: array_map(
                static fn(array $t) => ListingRestockTask::fromArray($t),
                $data['listingRestockTasks'] ?? [],
            ),
            orderLineItem: isset($data['orderLineItem'])
                ? OrderLineItemRef::fromArray($data['orderLineItem']) : null,
            purchaseQuoteLineItem: isset($data['purchaseQuoteLineItem'])
                ? PurchaseQuoteLineItemRef::fromArray($data['purchaseQuoteLineItem']) : null,
        );
    }
}
