<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\CreateReturnRuleListingGroup;

readonly class QuotaExceededError extends Output
{
    public function __construct(
        public ?string $errorCode = null,
        public ?string $errorMessage = null,
        public ?int $maxAllowedLists = null,
    ) {}

    public function getTypename(): string
    {
        return 'ReturnRuleListingGroupQuotaExceededError';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            errorCode:      $data['errorCode'] ?? null,
            errorMessage:   $data['errorMessage'] ?? null,
            maxAllowedLists: $data['maxAllowedLists'] ?? null,
        );
    }
}
