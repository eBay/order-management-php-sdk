<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\OrderReturn;

readonly class OrderReturnData extends Output
{
    public function __construct(
        public ?string $returnId = null,
        public ?string $requester = null,
        public ?string $requestedAt = null,
        public ?string $closedAt = null,
        public ?ReturnStatus $status = null,
        /** @var ReturnLineItem[] */
        public array $returnLineItems = [],
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
            requester:         $data['requester'] ?? null,
            requestedAt:       $data['requestedAt'] ?? null,
            closedAt:          $data['closedAt'] ?? null,
            status:            isset($data['status'])
                ? ReturnStatus::fromArray($data['status'])
                : null,
            returnLineItems:   array_map(
                fn(array $li) => ReturnLineItem::fromArray($li),
                $data['returnLineItems'] ?? []
            ),
            returnNegotiation: isset($data['returnNegotiation'])
                ? ReturnNegotiation::fromArray($data['returnNegotiation'])
                : null,
        );
    }
}
