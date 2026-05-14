<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\CreateReturnRuleListingGroup;

readonly class IdsPerRequestLimitExceededError extends Output
{
    public function __construct(
        public ?string $errorCode = null,
        public ?string $errorMessage = null,
        public ?int $perRequestLimit = null,
        public ?int $requestedCount = null,
    ) {}

    public function getTypename(): string
    {
        return 'ReturnRuleListingIdsPerRequestLimitExceededError';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            errorCode:      $data['errorCode'] ?? null,
            errorMessage:   $data['errorMessage'] ?? null,
            perRequestLimit: isset($data['perRequestLimit']) ? (int)$data['perRequestLimit'] : null,
            requestedCount:  isset($data['requestedCount']) ? (int)$data['requestedCount'] : null,
        );
    }
}
