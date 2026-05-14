<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\CancellationOperations\ContractCancellation\Output;

readonly class CancellationStatus
{
    public function __construct(
        public ?string $code,
        public ?string $displayText,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            code: $data['code'] ?? null,
            displayText: $data['displayText'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'code' => $this->code,
            'displayText' => $this->displayText,
        ], fn($v) => $v !== null);
    }
}
