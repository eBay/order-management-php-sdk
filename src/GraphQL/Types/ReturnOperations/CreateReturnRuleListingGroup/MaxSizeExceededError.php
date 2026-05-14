<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\CreateReturnRuleListingGroup;

readonly class MaxSizeExceededError extends Output
{
    public function __construct(
        public ?string $errorCode = null,
        public ?string $errorMessage = null,
        public ?int $groupListingLimit = null,
    ) {}

    public function getTypename(): string
    {
        return 'ReturnRuleListingGroupMaxSizeExceededError';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            errorCode:         $data['errorCode'] ?? null,
            errorMessage:      $data['errorMessage'] ?? null,
            groupListingLimit: isset($data['groupListingLimit']) ? (int)$data['groupListingLimit'] : null,
        );
    }
}
