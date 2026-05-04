<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\Results;

readonly class OrderReturnSuccess extends OrderReturnOutput
{
    public function __construct(
        public ?string $returnId = null,
        public ?string $status = null,
        public ?string $statusDisplayText = null,
        public ?string $statusTypename = null,
        public ?string $requester = null,
        public ?string $requestedAt = null,
        public ?string $closedAt = null,
        public array   $returnLineItems = [],
        public ?array  $returnNegotiation = null,
    ) {}

    public function getTypename(): string
    {
        return 'OrderReturn';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            returnId:          $data['returnId'] ?? null,
            status:            $data['status']['code'] ?? null,
            statusDisplayText: $data['status']['displayText'] ?? null,
            statusTypename:    $data['status']['__typename'] ?? null,
            requester:         $data['requester'] ?? null,
            requestedAt:       $data['requestedAt'] ?? null,
            closedAt:          $data['closedAt'] ?? null,
            returnLineItems:   $data['returnLineItems'] ?? [],
            returnNegotiation: $data['returnNegotiation'] ?? null,
        );
    }
}
