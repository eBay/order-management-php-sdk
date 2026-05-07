<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\UpdateSellerReturnResponseRuleCondition;

readonly class InvalidConditionsError extends Output
{
    public function __construct(
        public ?string $errorCode = null,
        public ?string $errorMessage = null,
        /** @var RuleConditionViolation[] */
        public array $ruleConditionViolation = [],
    ) {}

    public function getTypename(): string
    {
        return 'ReturnRuleInvalidConditionsError';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            errorCode:              $data['errorCode'] ?? null,
            errorMessage:           $data['errorMessage'] ?? null,
            ruleConditionViolation: array_map(
                fn(array $v) => RuleConditionViolation::fromArray($v),
                $data['ruleConditionViolation'] ?? []
            ),
        );
    }
}
