<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\UpdateSellerReturnResponseRuleCondition;

readonly class Input
{
    public function __construct(
        public string $ruleId,
        public ?ConditionSetInput $conditionSet = null,
    ) {}

    public function toArray(): array
    {
        $data = ['ruleId' => $this->ruleId];
        if ($this->conditionSet !== null) {
            $data['conditionSet'] = $this->conditionSet->toArray();
        }
        return $data;
    }
}
