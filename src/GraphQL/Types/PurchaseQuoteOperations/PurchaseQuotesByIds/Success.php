<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\PurchaseQuoteOperations\PurchaseQuotesByIds;

readonly class Success extends Output
{
    /**
     * @param PurchaseQuote[] $purchaseQuotes
     */
    public function __construct(
        public array $purchaseQuotes = [],
    ) {}

    public function getTypename(): string
    {
        return 'PurchaseQuotesByIdsSuccess';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            purchaseQuotes: array_map(
                fn(array $pq) => PurchaseQuote::fromArray($pq),
                $data['purchaseQuotes'] ?? [],
            ),
        );
    }
}
