<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\CancellationOperations\CreateItemCommitmentCancellation\Output;

class CancellationStatus
{
    public ?string $code = null;
    public ?string $displayText = null;

    public static function fromArray(array $data): static
    {
        $instance = new static();
        $instance->code = $data['code'] ?? null;
        $instance->displayText = $data['displayText'] ?? null;
        return $instance;
    }
}
