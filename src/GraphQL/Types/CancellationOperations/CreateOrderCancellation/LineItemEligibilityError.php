<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\CancellationOperations\CreateOrderCancellation;

readonly class LineItemEligibilityError extends Output
{
    /**
     * @param LineItemIneligibilityReason[] $lineItemIneligibilityReasons
     */
    public function __construct(
        public ?string $errorCode = null,
        public ?string $errorMessage = null,
        public array $lineItemIneligibilityReasons = [],
    ) {}

    public function getTypename(): string
    {
        return 'OrderLineItemCancellationEligibilityError';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            errorCode: $data['errorCode'] ?? null,
            errorMessage: $data['errorMessage'] ?? null,
            lineItemIneligibilityReasons: array_map(
                static fn(array $r) => LineItemIneligibilityReason::fromArray($r),
                $data['lineItemIneligibilityReasons'] ?? $data['ineligibilityReasons'] ?? [],
            ),
        );
    }
}
