<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\CancellationOperations\CreateItemCommitmentCancellation;

readonly class IneligibilityReason
{
    /**
     * @param AvailableReason[] $availableReasons
     */
    public function __construct(
        public ?string $__typename = null,
        public ?string $code = null,
        public ?string $displayMessage = null,
        public ?string $itemCommitmentId = null,
        public array $availableReasons = [],
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            __typename: $data['__typename'] ?? null,
            code: $data['code'] ?? null,
            displayMessage: $data['displayMessage'] ?? null,
            itemCommitmentId: $data['itemCommitmentId'] ?? null,
            availableReasons: array_map(
                static fn(array $r) => AvailableReason::fromArray($r),
                $data['availableReasons'] ?? [],
            ),
        );
    }
}
