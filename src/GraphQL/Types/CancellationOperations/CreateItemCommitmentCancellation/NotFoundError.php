<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\CancellationOperations\CreateItemCommitmentCancellation;

readonly class NotFoundError extends Output
{
    public function __construct(
        public ?string $errorCode = null,
        public ?string $errorMessage = null,
        public ?string $itemCommitmentId = null,
    ) {}

    public function getTypename(): string
    {
        return 'ItemCommitmentNotFoundError';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            errorCode: $data['errorCode'] ?? null,
            errorMessage: $data['errorMessage'] ?? null,
            itemCommitmentId: $data['itemCommitmentId'] ?? null,
        );
    }
}
