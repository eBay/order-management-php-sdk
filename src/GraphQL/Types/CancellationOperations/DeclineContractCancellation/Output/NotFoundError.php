<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\CancellationOperations\DeclineContractCancellation\Output;

final readonly class NotFoundError extends DeclineContractCancellationOutput
{
    public function __construct(
        public ?string $errorCode = null,
        public ?string $errorMessage = null,
        public ?string $requestedContractCancellationId = null,
    ) {}

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
