<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\CreateInStoreReturn;

readonly class ReturnIneligibleQuantityExceeded extends IneligibilityReason
{
    public function __construct(
        public ?string $code = null,
        public ?string $displayMessage = null,
        public ?OrderLineItemRef $orderLineItem = null,
        public ?int $requestedQuantity = null,
        public ?int $returnableQuantity = null,
    ) {}

    public function getTypename(): string
    {
        return 'ReturnIneligibleQuantityExceeded';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            code:              $data['code'] ?? null,
            displayMessage:    $data['displayMessage'] ?? null,
            orderLineItem:     isset($data['orderLineItem'])
                ? OrderLineItemRef::fromArray($data['orderLineItem'])
                : null,
            requestedQuantity: isset($data['requestedQuantity']) ? (int) $data['requestedQuantity'] : null,
            returnableQuantity: isset($data['returnableQuantity']) ? (int) $data['returnableQuantity'] : null,
        );
    }
}
