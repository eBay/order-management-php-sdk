<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\CancellationOperations\DeclineContractCancellation;

readonly class AvailableAction
{
    public function __construct(
        public ?string $__typename = null,
        public ?string $code = null,
        public ?string $displayText = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            __typename: $data['__typename'] ?? null,
            code: $data['code'] ?? null,
            displayText: $data['displayText'] ?? null,
        );
    }
}
