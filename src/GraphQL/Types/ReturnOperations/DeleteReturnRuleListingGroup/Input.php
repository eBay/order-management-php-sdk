<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\DeleteReturnRuleListingGroup;

readonly class Input
{
    public function __construct(
        public string $returnRuleListingGroupId,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            returnRuleListingGroupId: $data['returnRuleListingGroupId'],
        );
    }

    public function toArray(): array
    {
        return ['returnRuleListingGroupId' => $this->returnRuleListingGroupId];
    }
}
