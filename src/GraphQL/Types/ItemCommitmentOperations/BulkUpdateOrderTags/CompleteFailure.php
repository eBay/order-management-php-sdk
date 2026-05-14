<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\BulkUpdateOrderTags;

readonly class CompleteFailure extends Output
{
    /**
     * @param UpdateOrderError[] $failures
     */
    public function __construct(
        public ?string $errorCode = null,
        public ?string $errorMessage = null,
        public array $failures = [],
    ) {}

    public function getTypename(): string
    {
        return 'BulkUpdateOrderTagsCompleteFailure';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            errorCode: $data['errorCode'] ?? null,
            errorMessage: $data['errorMessage'] ?? null,
            failures: array_map(
                static fn(array $f) => UpdateOrderError::fromArray($f),
                $data['failures'] ?? [],
            ),
        );
    }
}
