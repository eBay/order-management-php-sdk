<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\Results;

readonly class PurchaseQuotesByIdsCompleteFailure extends PurchaseQuotesByIdsOutput
{
    public function __construct(
        public array $failures = [],
    ) {}

    public function getTypename(): string
    {
        return 'PurchaseQuotesByIdsCompleteFailure';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            failures: $data['failures'] ?? [],
        );
    }
}
