<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\Results;

readonly class PurchaseQuoteLineItemsByIdsPartialFailure extends PurchaseQuoteLineItemsByIdsOutput
{
    public function __construct(
        public array $purchaseQuoteLineItems = [],
        public array $failures = [],
    ) {}

    public function getTypename(): string
    {
        return 'PurchaseQuoteLineItemsByIdsPartialFailure';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            purchaseQuoteLineItems: $data['purchaseQuoteLineItems'] ?? [],
            failures:               $data['failures'] ?? [],
        );
    }
}
