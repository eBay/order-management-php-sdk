<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\CancellationOperations\CreateOrderCancellation;

readonly class OrderEligibilityError extends Output
{
    /**
     * @param OrderIneligibilityReason[] $orderIneligibilityReasons
     */
    public function __construct(
        public ?string $errorCode = null,
        public ?string $errorMessage = null,
        public array $orderIneligibilityReasons = [],
    ) {}

    public function getTypename(): string
    {
        return 'OrderCancellationEligibilityError';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            errorCode: $data['errorCode'] ?? null,
            errorMessage: $data['errorMessage'] ?? null,
            orderIneligibilityReasons: array_map(
                static fn(array $r) => OrderIneligibilityReason::fromArray($r),
                $data['orderIneligibilityReasons'] ?? $data['ineligibilityReasons'] ?? [],
            ),
        );
    }
}
