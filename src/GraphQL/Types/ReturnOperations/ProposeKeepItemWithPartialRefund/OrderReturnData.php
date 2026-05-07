<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\ProposeKeepItemWithPartialRefund;

readonly class OrderReturnData extends Output
{
    public function __construct(
        public ?string $returnId = null,
        public ?ReturnStatus $status = null,
        public ?ReturnNegotiation $returnNegotiation = null,
    ) {}

    public function getTypename(): string
    {
        return 'OrderReturn';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            returnId:          $data['returnId'] ?? null,
            status:            isset($data['status'])
                ? ReturnStatus::fromArray($data['status'])
                : null,
            returnNegotiation: isset($data['returnNegotiation'])
                ? ReturnNegotiation::fromArray($data['returnNegotiation'])
                : null,
        );
    }
}
