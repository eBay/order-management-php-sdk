<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\UpdateSellerReturnResponseRuleCondition;

readonly class ConditionSetInput
{
    public function __construct(
        public string $operator,
        public array $conditions = [],
    ) {}

    public function toArray(): array
    {
        return [
            'operator'   => $this->operator,
            'conditions' => $this->conditions,
        ];
    }
}
