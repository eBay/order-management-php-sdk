<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\UpdateSellerReturnToAddressRulesPriorities;

readonly class ReturnToAddressRule
{
    public function __construct(
        public ?string $ruleId = null,
        public ?string $name = null,
        public ?int $priority = null,
        public ?CodeDisplayText $status = null,
        public ?AddressRoutingStrategy $addressRoutingStrategy = null,
        public ?ConditionSet $conditionSet = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            ruleId:                 $data['ruleId'] ?? null,
            name:                   $data['name'] ?? null,
            priority:               $data['priority'] ?? null,
            status:                 isset($data['status'])
                ? CodeDisplayText::fromArray($data['status'])
                : null,
            addressRoutingStrategy: isset($data['addressRoutingStrategy'])
                ? AddressRoutingStrategy::fromArray($data['addressRoutingStrategy'])
                : null,
            conditionSet:           isset($data['conditionSet'])
                ? ConditionSet::fromArray($data['conditionSet'])
                : null,
        );
    }
}
