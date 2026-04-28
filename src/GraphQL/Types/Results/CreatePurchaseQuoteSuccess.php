<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\Results;

readonly class CreatePurchaseQuoteSuccess extends CreatePurchaseQuoteOutput
{
    public function __construct(
        public ?PurchaseQuoteData $purchaseQuote = null,
    ) {}

    public function getTypename(): string
    {
        return 'CreatePurchaseQuoteSuccess';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            purchaseQuote: isset($data['purchaseQuote'])
                ? PurchaseQuoteData::fromArray($data['purchaseQuote'])
                : null,
        );
    }
}
