<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\CancellationOperations\CreateItemCommitmentCancellation\Output;

class ItemCommitmentCancellation
{
    public ?string $cancellationId = null;
    public ?CancellationStatus $status = null;
    public ?string $closedAt = null;

    public static function fromArray(array $data): static
    {
        $instance = new static();
        $instance->cancellationId = $data['cancellationId'] ?? null;
        $instance->status = isset($data['status'])
            ? CancellationStatus::fromArray($data['status'])
            : null;
        $instance->closedAt = $data['closedAt'] ?? null;
        return $instance;
    }
}
