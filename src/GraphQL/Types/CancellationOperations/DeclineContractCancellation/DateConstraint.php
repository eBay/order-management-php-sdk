<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\CancellationOperations\DeclineContractCancellation;

readonly class DateConstraint
{
    public function __construct(
        public ?string $fromDate = null,
        public ?string $toDate = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            fromDate: $data['fromDate'] ?? null,
            toDate: $data['toDate'] ?? null,
        );
    }
}
