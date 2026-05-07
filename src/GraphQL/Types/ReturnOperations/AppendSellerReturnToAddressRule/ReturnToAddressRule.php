<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\AppendSellerReturnToAddressRule;

readonly class ReturnToAddressRule extends Output
{
    public function __construct(
        public ?string $ruleId = null,
        public ?string $name = null,
        public ?int $priority = null,
        public ?RuleStatus $status = null,
        public ?ConditionSet $conditionSet = null,
    ) {}

    public function getTypename(): string
    {
        return 'ReturnToAddressRule';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            ruleId:       $data['ruleId'] ?? null,
            name:         $data['name'] ?? null,
            priority:     $data['priority'] ?? null,
            status:       isset($data['status'])
                ? RuleStatus::fromArray($data['status'])
                : null,
            conditionSet: isset($data['conditionSet'])
                ? ConditionSet::fromArray($data['conditionSet'])
                : null,
        );
    }
}
