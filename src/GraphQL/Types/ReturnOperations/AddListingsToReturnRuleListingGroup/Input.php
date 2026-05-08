<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\AddListingsToReturnRuleListingGroup;

readonly class Input
{
    public function __construct(
        public string $returnRuleListingGroupId,
        /** @var string[] */
        public array $listingIds = [],
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            returnRuleListingGroupId: $data['returnRuleListingGroupId'],
            listingIds: $data['listingIds'] ?? [],
        );
    }

    public function toArray(): array
    {
        return [
            'returnRuleListingGroupId' => $this->returnRuleListingGroupId,
            'listingIds'               => $this->listingIds,
        ];
    }
}
