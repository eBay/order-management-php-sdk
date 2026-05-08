<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\UpdateSellerReturnResponseRuleCondition;

readonly class ConditionSetInput
{
    public function __construct(
        public string $operator,
        /** @var array<mixed> */
        public array $ruleConditions,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            operator: $data['operator'],
            ruleConditions: $data['ruleConditions'],
        );
    }

    public function toArray(): array
    {
        return [
            'operator'       => $this->operator,
            'ruleConditions' => $this->ruleConditions,
        ];
    }
}
