<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\CancellationOperations\ContractCancellation\Output;

readonly class NotFoundError extends ContractCancellationOutput
{
    public function __construct(
        public ?string $errorCode,
        public ?string $errorMessage,
        public ?string $requestedContractCancellationId,
    ) {}

    public function getTypename(): string
    {
        return 'ContractCancellationNotFoundError';
    }

    public static function fromArray(array $data): static
    {
        return new static(
            errorCode: $data['errorCode'] ?? null,
            errorMessage: $data['errorMessage'] ?? null,
            requestedContractCancellationId: $data['requestedContractCancellationId'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            '__typename' => $this->getTypename(),
            'errorCode' => $this->errorCode,
            'errorMessage' => $this->errorMessage,
            'requestedContractCancellationId' => $this->requestedContractCancellationId,
        ], fn($v) => $v !== null);
    }
}
