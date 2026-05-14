<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\PurchaseQuoteOperations\RequestPurchaseQuote;

readonly class Input
{
    /**
     * @param PurchaseQuoteItemInput[] $lineItems
     */
    public function __construct(
        public array $lineItems,
        public ?string $messageToSeller = null,
        public ?AddressInput $shippingAddress = null,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            lineItems: array_map(
                static fn(array $i) => PurchaseQuoteItemInput::fromArray($i),
                $data['lineItems'] ?? [],
            ),
            messageToSeller: $data['messageToSeller'] ?? null,
            shippingAddress: isset($data['shippingAddress'])
                ? AddressInput::fromArray($data['shippingAddress'])
                : null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'lineItems'       => array_map(fn($i) => $i->toArray(), $this->lineItems),
            'messageToSeller' => $this->messageToSeller,
            'shippingAddress' => $this->shippingAddress?->toArray(),
        ], static fn($v) => $v !== null);
    }
}
