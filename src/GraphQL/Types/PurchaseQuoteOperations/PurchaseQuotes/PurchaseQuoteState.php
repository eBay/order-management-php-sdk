<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\PurchaseQuoteOperations\PurchaseQuotes;

/**
 * Represents any PurchaseQuote state variant.
 * Fields not applicable to a specific variant will be null.
 */
readonly class PurchaseQuoteState
{
    public function __construct(
        public string $typename,
        public ?string $label = null,
        public ?string $cancelledAt = null,
        public ?StateReason $reason = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            typename:    $data['__typename'] ?? 'Unknown',
            label:       $data['label'] ?? null,
            cancelledAt: $data['cancelledAt'] ?? null,
            reason:      isset($data['reason']) ? StateReason::fromArray($data['reason']) : null,
        );
    }
}
