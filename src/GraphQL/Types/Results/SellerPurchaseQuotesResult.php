<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\Results;

readonly class SellerPurchaseQuotesResult
{
    /**
     * @param PurchaseQuoteData[] $purchaseQuotes
     */
    public function __construct(
        public array $purchaseQuotes = [],
        public ?PaginationOutput $pagination = null,
    ) {}

    public static function fromArray(array $data): self
    {
        $nested = $data['sellerPurchaseQuotes'] ?? $data;

        return new self(
            purchaseQuotes: array_map(
                static fn(array $q) => PurchaseQuoteData::fromArray($q),
                $nested['purchaseQuotes'] ?? []
            ),
            pagination: isset($nested['pagination'])
                ? PaginationOutput::fromArray($nested['pagination'])
                : null,
        );
    }
}
