<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\PurchaseQuoteOperations\PurchaseQuotes;

readonly class SellerPurchaseQuotes
{
    /**
     * @param PurchaseQuote[] $purchaseQuotes
     */
    public function __construct(
        public array $purchaseQuotes = [],
        public ?Pagination $pagination = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            purchaseQuotes: array_map(
                fn(array $pq) => PurchaseQuote::fromArray($pq),
                $data['purchaseQuotes'] ?? [],
            ),
            pagination: isset($data['pagination']) ? Pagination::fromArray($data['pagination']) : null,
        );
    }
}
