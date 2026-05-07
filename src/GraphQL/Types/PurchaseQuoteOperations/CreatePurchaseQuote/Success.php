<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\PurchaseQuoteOperations\CreatePurchaseQuote;

readonly class Success extends Output
{
    public function __construct(
        public ?PurchaseQuoteRef $purchaseQuote = null,
    ) {}

    public function getTypename(): string
    {
        return 'CreatePurchaseQuoteSuccess';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            purchaseQuote: isset($data['purchaseQuote'])
                ? PurchaseQuoteRef::fromArray($data['purchaseQuote'])
                : null,
        );
    }
}
