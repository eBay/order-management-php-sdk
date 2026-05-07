<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\CreateInStoreReturn;

readonly class OrderReturnData extends Output
{
    public function __construct(
        public ?string $returnId = null,
        public ?ReturnStatus $status = null,
    ) {}

    public function getTypename(): string
    {
        return 'OrderReturn';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            returnId: $data['returnId'] ?? null,
            status:   isset($data['status']) ? ReturnStatus::fromArray($data['status']) : null,
        );
    }
}
