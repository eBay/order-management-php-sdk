<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\UpdateSellerReturnResponseRuleCondition;

readonly class ReturnResponseRule extends Output
{
    public function __construct(
        public ?string $ruleId = null,
        public ?string $name = null,
        public ?int $priority = null,
        public ?CodeDisplayText $responseStrategy = null,
        public ?CodeDisplayText $status = null,
        public ?ConditionSet $conditionSet = null,
    ) {}

    public function getTypename(): string
    {
        return 'ReturnResponseRule';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            ruleId:           $data['ruleId'] ?? null,
            name:             $data['name'] ?? null,
            priority:         $data['priority'] ?? null,
            responseStrategy: isset($data['responseStrategy'])
                ? CodeDisplayText::fromArray($data['responseStrategy'])
                : null,
            status:           isset($data['status'])
                ? CodeDisplayText::fromArray($data['status'])
                : null,
            conditionSet:     isset($data['conditionSet'])
                ? ConditionSet::fromArray($data['conditionSet'])
                : null,
        );
    }
}
