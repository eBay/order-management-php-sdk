<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\Results;

readonly class PurchaseQuoteLineItemsByIdsCompleteFailure extends PurchaseQuoteLineItemsByIdsOutput
{
    public function __construct(
        public array $failures = [],
    ) {}

    public function getTypename(): string
    {
        return 'PurchaseQuoteLineItemsByIdsCompleteFailure';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            failures: $data['failures'] ?? [],
        );
    }
}
