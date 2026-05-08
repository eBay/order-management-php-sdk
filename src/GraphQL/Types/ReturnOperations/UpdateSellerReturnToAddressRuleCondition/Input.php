<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\UpdateSellerReturnToAddressRuleCondition;

readonly class Input
{
    public function __construct(
        public string $ruleId,
        public ?ConditionSetInput $conditionSet = null,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            ruleId: $data['ruleId'],
            conditionSet: isset($data['conditionSet'])
                ? ConditionSetInput::fromArray($data['conditionSet'])
                : null,
        );
    }

    public function toArray(): array
    {
        $data = ['ruleId' => $this->ruleId];
        if ($this->conditionSet !== null) {
            $data['conditionSet'] = $this->conditionSet->toArray();
        }
        return $data;
    }
}
