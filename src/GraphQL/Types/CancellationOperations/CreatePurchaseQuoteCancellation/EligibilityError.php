<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\CancellationOperations\CreatePurchaseQuoteCancellation;

readonly class EligibilityError extends Output
{
    /**
     * @param IneligibilityReason[] $ineligibilityReasons
     */
    public function __construct(
        public ?string $errorCode = null,
        public ?string $errorMessage = null,
        public array $ineligibilityReasons = [],
    ) {}

    public function getTypename(): string
    {
        return 'PurchaseQuoteCancellationEligibilityError';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            errorCode: $data['errorCode'] ?? null,
            errorMessage: $data['errorMessage'] ?? null,
            ineligibilityReasons: array_map(
                static fn(array $r) => IneligibilityReason::fromArray($r),
                $data['ineligibilityReasons'] ?? [],
            ),
        );
    }
}
