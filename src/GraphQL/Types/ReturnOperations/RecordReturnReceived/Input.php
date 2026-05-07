<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\RecordReturnReceived;

readonly class Input
{
    public function __construct(
        public string $returnId,
    ) {}

    public function toArray(): array
    {
        return ['returnId' => $this->returnId];
    }
}
