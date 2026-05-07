<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\UpdateSellerReturnToAddressRuleCondition;

readonly class ItemCategoryCondition extends RuleCondition
{
    public function __construct(
        /** @var ItemCategory[] */
        public array $categories = [],
    ) {}

    public function getTypename(): string
    {
        return 'ReturnItemCategoryCondition';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            categories: array_map(
                fn(array $c) => ItemCategory::fromArray($c),
                $data['categories'] ?? []
            ),
        );
    }
}
