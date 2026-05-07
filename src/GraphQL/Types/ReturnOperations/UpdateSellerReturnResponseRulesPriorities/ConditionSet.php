<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\UpdateSellerReturnResponseRulesPriorities;

/**
 * Minimal ConditionSet for the priorities response — only __typename of conditions is fetched.
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
