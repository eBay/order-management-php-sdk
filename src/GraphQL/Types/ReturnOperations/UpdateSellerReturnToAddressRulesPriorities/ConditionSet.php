<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\UpdateSellerReturnToAddressRulesPriorities;

/**
 * Minimal ConditionSet — priorities response only fetches __typename of conditions.
 */
readonly class ConditionSet
{
    public function __construct(
        public ?string $operator = null,
        /** @var string[] raw __typename values */
        public array $conditionTypenames = [],
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            operator:           $data['operator'] ?? null,
            conditionTypenames: array_map(
                fn(array $c) => $c['__typename'] ?? '',
                $data['conditions'] ?? []
            ),
        );
    }
}
