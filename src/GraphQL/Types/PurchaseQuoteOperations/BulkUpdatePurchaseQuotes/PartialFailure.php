<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\PurchaseQuoteOperations\BulkUpdatePurchaseQuotes;

readonly class PartialFailure extends Output
{
    /**
     * @param UpdatedPurchaseQuote[] $updatedPurchaseQuotes
     * @param Failure[]              $failures
     */
    public function __construct(
        public ?string $errorCode = null,
        public ?string $errorMessage = null,
        public array $updatedPurchaseQuotes = [],
        public array $failures = [],
    ) {}

    public function getTypename(): string
    {
        return 'BulkUpdatePurchaseQuotesPartialFailure';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            errorCode:             $data['errorCode'] ?? null,
            errorMessage:          $data['errorMessage'] ?? null,
            updatedPurchaseQuotes: array_map(
                fn(array $pq) => UpdatedPurchaseQuote::fromArray($pq),
                $data['updatedPurchaseQuotes'] ?? [],
            ),
            failures: array_map(
                fn(array $f) => Failure::fromArray($f),
                $data['failures'] ?? [],
            ),
        );
    }
}
