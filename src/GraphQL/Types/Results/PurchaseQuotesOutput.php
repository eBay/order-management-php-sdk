<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\Results;

/**
 * Top-level result for the purchaseQuotes query.
 * Shape: { purchaseQuotes { sellerPurchaseQuotes(input:{}) { purchaseQuotes { ... } pagination { ... } } } }
 */
readonly class PurchaseQuotesOutput
{
    public function __construct(
        public ?SellerPurchaseQuotesResult $sellerPurchaseQuotes = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            sellerPurchaseQuotes: isset($data['sellerPurchaseQuotes'])
                ? SellerPurchaseQuotesResult::fromArray($data['sellerPurchaseQuotes'])
                : null,
        );
    }
}
