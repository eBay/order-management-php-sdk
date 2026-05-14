<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\CancellationOperations\CreateItemCommitmentCancellation\Output;

class NotFoundError extends CreateItemCommitmentCancellationOutput
{
    public ?string $errorCode = null;
    public ?string $errorMessage = null;
    public ?string $itemCommitmentId = null;

    public function getTypename(): string
    {
        return 'ItemCommitmentNotFoundError';
    }

    public static function fromArray(array $data): static
    {
        $instance = new static();
        $instance->errorCode = $data['errorCode'] ?? null;
        $instance->errorMessage = $data['errorMessage'] ?? null;
        $instance->itemCommitmentId = $data['itemCommitmentId'] ?? null;
        return $instance;
    }
}
