<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\AppendSellerReturnToAddressRule;

readonly class ConditionSet
{
    public function __construct(
        public ?string $operator = null,
        /** @var RuleCondition[] */
        public array $conditions = [],
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            operator:   $data['operator'] ?? null,
            conditions: array_map(
                fn(array $c) => RuleCondition::fromArray($c),
                $data['conditions'] ?? []
            ),
        );
    }
}
