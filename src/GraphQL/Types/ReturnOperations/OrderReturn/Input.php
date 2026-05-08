<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\OrderReturn;

readonly class Input
{
    public function __construct(
        public string $returnId,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            returnId: $data['returnId'],
        );
    }

    public function toArray(): array
    {
        return ['returnId' => $this->returnId];
    }
}
