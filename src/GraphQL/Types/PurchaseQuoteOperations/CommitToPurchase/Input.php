<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\PurchaseQuoteOperations\CommitToPurchase;

readonly class Input
{
    public function __construct(
        public string $itemId,
        public AmountInput $price,
        public int $quantity = 1,
        public bool $userConsentReceived = false,
        public bool $userVerifiedAsAdult = false,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            itemId: $data['itemId'],
            price: AmountInput::fromArray($data['price']),
            quantity: (int)($data['quantity'] ?? 1),
            userConsentReceived: (bool)($data['userConsentReceived'] ?? false),
            userVerifiedAsAdult: (bool)($data['userVerifiedAsAdult'] ?? false),
        );
    }

    public function toArray(): array
    {
        return [
            'itemId'               => $this->itemId,
            'price'                => $this->price->toArray(),
            'quantity'             => $this->quantity,
            'userConsentReceived'  => $this->userConsentReceived,
            'userVerifiedAsAdult'  => $this->userVerifiedAsAdult,
        ];
    }
}
