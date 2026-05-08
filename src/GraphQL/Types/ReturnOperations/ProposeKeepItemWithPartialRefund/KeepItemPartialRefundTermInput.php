<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\ProposeKeepItemWithPartialRefund;

readonly class KeepItemPartialRefundTermInput
{
    public function __construct(
        public string $returnLineItemId,
        public int $itemPriceRefundPercentage,
        public bool $itemShippingPriceWaived = false,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            returnLineItemId: $data['returnLineItemId'],
            itemPriceRefundPercentage: (int) $data['itemPriceRefundPercentage'],
            itemShippingPriceWaived: (bool) ($data['itemShippingPriceWaived'] ?? false),
        );
    }

    public function toArray(): array
    {
        return [
            'returnLineItemId'          => $this->returnLineItemId,
            'itemPriceRefundPercentage' => $this->itemPriceRefundPercentage,
            'itemShippingPriceWaived'   => $this->itemShippingPriceWaived,
        ];
    }
}
