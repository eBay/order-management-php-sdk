<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\Results;

readonly class CancellationData
{
    public function __construct(
        public ?string $cancellationId = null,
        public ?string $typename = null,
        public ?string $status = null,
        public ?string $statusDisplayText = null,
        public ?string $statusTypename = null,
        public ?string $requestedAt = null,
        public ?string $closedAt = null,
        public ?string $requester = null,
        public ?string $requesterNote = null,
        public ?array  $reason = null,
        /** @var array[] */
        public array   $lineItems = [],
        /** @var array[] */
        public array   $refunds = [],
        public ?array  $sellerAvailableActions = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            cancellationId:       $data['cancellationId'] ?? null,
            typename:             $data['__typename'] ?? null,
            status:               $data['status']['code'] ?? null,
            statusDisplayText:    $data['status']['displayText'] ?? null,
            statusTypename:       $data['status']['__typename'] ?? null,
            requestedAt:          $data['requestedAt'] ?? null,
            closedAt:             $data['closedAt'] ?? null,
            requester:            $data['requester'] ?? null,
            requesterNote:        $data['requesterNote'] ?? null,
            reason:               $data['reason'] ?? null,
            lineItems:            $data['lineItems'] ?? [],
            refunds:              $data['refunds'] ?? [],
            sellerAvailableActions: $data['sellerAvailableActions'] ?? null,
        );
    }
}
