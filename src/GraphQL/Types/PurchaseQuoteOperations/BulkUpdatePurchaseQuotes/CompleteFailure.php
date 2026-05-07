<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\PurchaseQuoteOperations\BulkUpdatePurchaseQuotes;

readonly class CompleteFailure extends Output
{
    /**
     * @param Failure[] $failures
     */
    public function __construct(
        public ?string $errorCode = null,
        public ?string $errorMessage = null,
        public array $failures = [],
    ) {}

    public function getTypename(): string
    {
        return 'BulkUpdatePurchaseQuotesCompleteFailure';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            errorCode:    $data['errorCode'] ?? null,
            errorMessage: $data['errorMessage'] ?? null,
            failures:     array_map(
                fn(array $f) => Failure::fromArray($f),
                $data['failures'] ?? [],
            ),
        );
    }
}
