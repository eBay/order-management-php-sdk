<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\UpdateSellerReturnResponseRuleCondition;

abstract readonly class Output
{
    abstract public function getTypename(): string;

    public static function fromArray(array $data): self
    {
        return match ($data['__typename'] ?? null) {
            'ReturnResponseRule'              => ReturnResponseRule::fromArray($data),
            'ReturnRuleNameError'             => NameError::fromArray($data),
            'ReturnRuleInvalidConditionsError' => InvalidConditionsError::fromArray($data),
            'ReturnRuleNotFoundError'          => NotFoundError::fromArray($data),
            'ReturnRuleFeatureNotEnabledError' => FeatureNotEnabledError::fromArray($data),
            'ReturnRuleMissingConditionError'  => MissingConditionError::fromArray($data),
            default => throw new \UnexpectedValueException(
                'Unknown __typename: ' . ($data['__typename'] ?? 'null')
            ),
        };
    }
}
