<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\CancellationOperations\SellerContractCancellations\Output;

final class InvalidPageSizeError extends SellerContractCancellationsOutput
{
    public function __construct(
        public readonly ?string $errorCode = null,
        public readonly ?string $errorMessage = null,
        public readonly ?int $maxAllowedPageSize = null,
    ) {
    }

    public function getTypename(): string
    {
        return 'ContractCancellationInvalidPageSizeError';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            errorCode: $data['errorCode'] ?? null,
            errorMessage: $data['errorMessage'] ?? null,
            maxAllowedPageSize: isset($data['maxAllowedPageSize']) ? (int)$data['maxAllowedPageSize'] : null,
        );
    }
}
