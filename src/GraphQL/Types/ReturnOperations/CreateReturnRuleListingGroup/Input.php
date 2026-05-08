<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\CreateReturnRuleListingGroup;

readonly class Input
{
    public function __construct(
        public string $groupName,
        /** @var string[] */
        public array $listingIds = [],
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            groupName: $data['groupName'],
            listingIds: $data['listingIds'] ?? [],
        );
    }

    public function toArray(): array
    {
        return [
            'groupName'  => $this->groupName,
            'listingIds' => $this->listingIds,
        ];
    }
}
