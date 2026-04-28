<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\Results;

readonly class ProposeKeepItemWithPartialRefundSuccess extends ProposeKeepItemWithPartialRefundOutput
{
    public function __construct(
        public ?string $returnId = null,
        public ?string $status = null,
    ) {}

    public function getTypename(): string
    {
        return 'OrderReturn';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            returnId: $data['returnId'] ?? null,
            status:   $data['status'] ?? null,
        );
    }
}
