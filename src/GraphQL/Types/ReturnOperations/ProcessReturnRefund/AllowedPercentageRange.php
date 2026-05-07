<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\ProcessReturnRefund;

readonly class AllowedPercentageRange
{
    public function __construct(
        public ?string $minValue = null,
        public ?string $maxValue = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            minValue: $data['minValue'] ?? null,
            maxValue: $data['maxValue'] ?? null,
        );
    }
}
