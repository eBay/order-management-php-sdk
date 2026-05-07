<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\AddListingsToReturnRuleListingGroup;

readonly class PerRequestLimitError extends Output
{
    public function __construct(
        public ?string $errorCode = null,
        public ?string $errorMessage = null,
        public ?int $requestedCount = null,
        public ?int $perRequestLimit = null,
    ) {}

    public function getTypename(): string
    {
        return 'ReturnRuleListingIdsPerRequestLimitExceededError';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            errorCode:       $data['errorCode'] ?? null,
            errorMessage:    $data['errorMessage'] ?? null,
            requestedCount:  $data['requestedCount'] ?? null,
            perRequestLimit: $data['perRequestLimit'] ?? null,
        );
    }
}
