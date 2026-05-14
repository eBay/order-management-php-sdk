<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\PurchaseQuoteOperations\RequestPurchaseQuote;

readonly class BusinessError extends Output
{
    public function __construct(
        public ?string $errorCode = null,
        public ?string $errorMessage = null,
        public ?bool $retryable = null,
    ) {}

    public function getTypename(): string
    {
        return 'RequestPurchaseQuoteBusinessError';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            errorCode: $data['errorCode'] ?? null,
            errorMessage: $data['errorMessage'] ?? null,
            retryable: isset($data['retryable']) ? (bool)$data['retryable'] : null,
        );
    }
}
