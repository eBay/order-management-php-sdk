<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\Results;

readonly class DisplayableId
{
    public function __construct(
        public string $id,
        public string $displayName,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            id:          $data['id'],
            displayName: $data['displayName'],
        );
    }
}
