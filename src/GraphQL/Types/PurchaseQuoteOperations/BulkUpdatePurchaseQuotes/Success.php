<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\PurchaseQuoteOperations\BulkUpdatePurchaseQuotes;

readonly class Success extends Output
{
    /**
     * @param UpdatedPurchaseQuote[] $updatedPurchaseQuotes
     */
    public function __construct(
        public array $updatedPurchaseQuotes = [],
    ) {}

    public function getTypename(): string
    {
        return 'BulkUpdatePurchaseQuotesSuccess';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            updatedPurchaseQuotes: array_map(
                fn(array $pq) => UpdatedPurchaseQuote::fromArray($pq),
                $data['updatedPurchaseQuotes'] ?? [],
            ),
        );
    }
}
