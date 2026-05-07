<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\PurchaseQuoteOperations\PurchaseQuotes;

/**
 * Concrete output for PurchaseQuotes query.
 * Data path: data['purchaseQuotes']['sellerPurchaseQuotes']
 */
readonly class Output
{
    public function __construct(
        public ?SellerPurchaseQuotes $sellerPurchaseQuotes = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            sellerPurchaseQuotes: isset($data['sellerPurchaseQuotes'])
                ? SellerPurchaseQuotes::fromArray($data['sellerPurchaseQuotes'])
                : null,
        );
    }
}
