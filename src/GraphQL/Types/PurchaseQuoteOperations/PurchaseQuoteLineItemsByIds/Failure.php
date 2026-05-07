<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\PurchaseQuoteOperations\PurchaseQuoteLineItemsByIds;

readonly class Failure
{
    public function __construct(
        public ?string $errorCode = null,
        public ?string $displayMessage = null,
        public ?string $inputPurchaseQuoteLineItemId = null,
        public ?bool $retryable = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            errorCode:                    $data['errorCode'] ?? null,
            displayMessage:               $data['displayMessage'] ?? null,
            inputPurchaseQuoteLineItemId: $data['inputPurchaseQuoteLineItemId'] ?? null,
            retryable:                    isset($data['retryable']) ? (bool) $data['retryable'] : null,
        );
    }
}
