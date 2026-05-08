<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\PurchaseQuoteOperations\CreatePurchaseQuote;

readonly class PurchaseQuoteTotalsInput
{
    public function __construct(
        public ?AmountInput $additionalCharge = null,
        public ?AmountInput $shippingDiscount = null,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            additionalCharge: isset($data['additionalCharge']) ? AmountInput::fromArray($data['additionalCharge']) : null,
            shippingDiscount: isset($data['shippingDiscount']) ? AmountInput::fromArray($data['shippingDiscount']) : null,
        );
    }

    public function toArray(): array
    {
        $result = [];
        if ($this->additionalCharge !== null) {
            $result['additionalCharge'] = $this->additionalCharge->toArray();
        }
        if ($this->shippingDiscount !== null) {
            $result['shippingDiscount'] = $this->shippingDiscount->toArray();
        }
        return $result;
    }
}
