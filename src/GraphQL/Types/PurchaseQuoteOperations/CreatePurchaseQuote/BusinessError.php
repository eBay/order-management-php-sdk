<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\PurchaseQuoteOperations\CreatePurchaseQuote;

readonly class BusinessError extends Output
{
    public function __construct(
        public string $errorCode,
        public string $errorMessage,
        public bool $retryable,
    ) {}

    public function getTypename(): string
    {
        return 'CreatePurchaseQuoteBusinessError';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            errorCode:    $data['errorCode'] ?? '',
            errorMessage: $data['errorMessage'] ?? '',
            retryable:    (bool) ($data['retryable'] ?? false),
        );
    }
}
