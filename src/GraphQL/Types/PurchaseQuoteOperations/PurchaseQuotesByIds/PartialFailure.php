<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\PurchaseQuoteOperations\PurchaseQuotesByIds;

readonly class PartialFailure extends Output
{
    /**
     * @param SlimPurchaseQuote[] $purchaseQuotes
     * @param Failure[]           $failures
     */
    public function __construct(
        public array $purchaseQuotes = [],
        public array $failures = [],
    ) {}

    public function getTypename(): string
    {
        return 'PurchaseQuotesByIdsPartialFailure';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            purchaseQuotes: array_map(
                fn(array $pq) => SlimPurchaseQuote::fromArray($pq),
                $data['purchaseQuotes'] ?? [],
            ),
            failures: array_map(
                fn(array $f) => Failure::fromArray($f),
                $data['failures'] ?? [],
            ),
        );
    }
}
