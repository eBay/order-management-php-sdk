<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\PurchaseQuoteOperations\CreatePurchaseQuote;

readonly class PurchaseQuoteLogisticsOptionInput
{
    /**
     * @param PickupLogisticsOptionInput[]|null   $pickup
     * @param ShippingLogisticsOptionInput[]|null $shipping
     */
    public function __construct(
        public ?array $pickup = null,
        public ?array $shipping = null,
    ) {}

    public function toArray(): array
    {
        $result = [];
        if ($this->pickup !== null) {
            $result['pickup'] = array_map(fn(PickupLogisticsOptionInput $p) => $p->toArray(), $this->pickup);
        }
        if ($this->shipping !== null) {
            $result['shipping'] = array_map(fn(ShippingLogisticsOptionInput $s) => $s->toArray(), $this->shipping);
        }
        return $result;
    }
}
