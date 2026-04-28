<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\Results;

readonly class ItemCommitmentData
{
    public function __construct(
        public ?string $itemCommitmentId = null,
        public ?string $status = null,
        public ?int $quantity = null,
        public ?string $creationDate = null,
        public ?string $lastModifiedDate = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            itemCommitmentId: $data['itemCommitmentId'] ?? null,
            status:           $data['status'] ?? null,
            quantity:         isset($data['quantity']) ? (int) $data['quantity'] : null,
            creationDate:     $data['creationDate'] ?? null,
            lastModifiedDate: $data['lastModifiedDate'] ?? null,
        );
    }
}
