<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\CancellationOperations\ApproveContractCancellation\Output;

final class NotFoundError extends ApproveContractCancellationOutput
{
    public function __construct(
        public readonly ?string $errorCode = null,
        public readonly ?string $errorMessage = null,
        public readonly ?string $requestedContractCancellationId = null,
    ) {
    }

    public function getTypename(): string
    {
        return 'ContractCancellationNotFoundError';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            errorCode: $data['errorCode'] ?? null,
            errorMessage: $data['errorMessage'] ?? null,
            requestedContractCancellationId: $data['requestedContractCancellationId'] ?? null,
        );
    }
}
