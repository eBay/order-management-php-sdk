<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\ReturnRuleListingGroup;

readonly class ListingGroupSuccess extends Output
{
    public function __construct(
        public ?string $returnRuleListingGroupId = null,
        public ?string $groupName = null,
        /** @var ListingItem[] */
        public array $listings = [],
        public ?Pagination $pagination = null,
    ) {}

    public function getTypename(): string
    {
        return 'ReturnRuleListingGroup';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            returnRuleListingGroupId: $data['returnRuleListingGroupId'] ?? null,
            groupName:                $data['groupName'] ?? null,
            listings:                 array_map(
                fn(array $l) => ListingItem::fromArray($l),
                $data['listings'] ?? []
            ),
            pagination: isset($data['pagination'])
                ? Pagination::fromArray($data['pagination'])
                : null,
        );
    }
}
