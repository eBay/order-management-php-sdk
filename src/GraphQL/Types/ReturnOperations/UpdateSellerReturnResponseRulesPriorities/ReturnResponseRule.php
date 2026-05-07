<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\UpdateSellerReturnResponseRulesPriorities;

readonly class ReturnResponseRule
{
    public function __construct(
        public ?string $ruleId = null,
        public ?string $name = null,
        public ?int $priority = null,
        public ?CodeDisplayText $status = null,
        public ?CodeDisplayText $responseStrategy = null,
        public ?ConditionSet $conditionSet = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            ruleId:           $data['ruleId'] ?? null,
            name:             $data['name'] ?? null,
            priority:         $data['priority'] ?? null,
            status:           isset($data['status'])
                ? CodeDisplayText::fromArray($data['status'])
                : null,
            responseStrategy: isset($data['responseStrategy'])
                ? CodeDisplayText::fromArray($data['responseStrategy'])
                : null,
            conditionSet:     isset($data['conditionSet'])
                ? ConditionSet::fromArray($data['conditionSet'])
                : null,
        );
    }
}
