<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\PurchaseQuoteOperations\CreatePurchaseQuote;

readonly class PickupLogisticsOptionInput
{
    public function __construct(
        public AmountInput $cost,
        public string $displayName,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            cost: AmountInput::fromArray($data['cost']),
            displayName: $data['displayName'],
        );
    }

    public function toArray(): array
    {
        return [
            'cost'        => $this->cost->toArray(),
            'displayName' => $this->displayName,
        ];
    }
}
