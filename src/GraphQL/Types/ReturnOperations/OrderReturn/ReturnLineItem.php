<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\OrderReturn;

readonly class ReturnLineItem
{
    public function __construct(
        public ?string $returnLineItemId = null,
        public ?int $requestedQuantity = null,
        public ?ReturnReason $returnReason = null,
        public ?string $returnNote = null,
        public ?OrderLineItemRef $orderLineItem = null,
        /** @var ListingRestockTask[] */
        public array $listingRestockTasks = [],
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            returnLineItemId:   $data['returnLineItemId'] ?? null,
            requestedQuantity:  isset($data['requestedQuantity']) ? (int) $data['requestedQuantity'] : null,
            returnReason:       isset($data['returnReason'])
                ? ReturnReason::fromArray($data['returnReason'])
                : null,
            returnNote:         $data['returnNote'] ?? null,
            orderLineItem:      isset($data['orderLineItem'])
                ? OrderLineItemRef::fromArray($data['orderLineItem'])
                : null,
            listingRestockTasks: array_map(
                fn(array $t) => ListingRestockTask::fromArray($t),
                $data['listingRestockTasks'] ?? []
            ),
        );
    }
}
