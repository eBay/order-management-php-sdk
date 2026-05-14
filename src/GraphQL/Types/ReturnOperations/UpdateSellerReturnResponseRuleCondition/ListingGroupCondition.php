<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\UpdateSellerReturnResponseRuleCondition;

readonly class ListingGroupCondition extends RuleCondition
{
    public function __construct(
        public ?string $returnRuleListingGroupId = null,
    ) {}

    public function getTypename(): string
    {
        return 'ReturnListingGroupCondition';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            returnRuleListingGroupId: $data['returnRuleListingGroupId'] ?? null,
        );
    }
}
