<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\CancellationOperations\SellerContractCancellations;

readonly class InvalidPageSizeError extends Output
{
    public function __construct(
        public ?string $errorCode = null,
        public ?string $errorMessage = null,
        public ?int $maxAllowedPageSize = null,
    ) {}

    public function getTypename(): string
    {
        return 'ContractCancellationInvalidPageSizeError';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            errorCode: $data['errorCode'] ?? null,
            errorMessage: $data['errorMessage'] ?? null,
            maxAllowedPageSize: isset($data['maxAllowedPageSize']) ? (int) $data['maxAllowedPageSize'] : null,
        );
    }
}
