<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\PurchaseQuoteOperations\RequestPurchaseQuote;

readonly class Success extends Output
{
    public function __construct(
        public ?PurchaseQuote $purchaseQuote = null,
    ) {}

    public function getTypename(): string
    {
        return 'RequestPurchaseQuoteSuccess';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            purchaseQuote: isset($data['purchaseQuote']) ? PurchaseQuote::fromArray($data['purchaseQuote']) : null,
        );
    }
}
