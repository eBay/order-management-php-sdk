<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\ReturnRuleListingGroup;

readonly class ListingGroupNotFoundError extends Output
{
    public function __construct(
        public ?string $errorCode = null,
        public ?string $errorMessage = null,
        public ?string $returnRuleListingGroupId = null,
    ) {}

    public function getTypename(): string
    {
        return 'ReturnRuleListingGroupNotFoundError';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            errorCode:                $data['errorCode'] ?? null,
            errorMessage:             $data['errorMessage'] ?? null,
            returnRuleListingGroupId: $data['returnRuleListingGroupId'] ?? null,
        );
    }
}
