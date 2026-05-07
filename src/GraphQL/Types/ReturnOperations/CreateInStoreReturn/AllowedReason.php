<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\CreateInStoreReturn;

readonly class AllowedReason
{
    public function __construct(
        public ?string $code = null,
        public ?string $displayText = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            code:        $data['code'] ?? null,
            displayText: $data['displayText'] ?? null,
        );
    }
}
