<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\UpdateSellerReturnToAddressRuleCondition;

abstract readonly class Output
{
    abstract public function getTypename(): string;

    public static function fromArray(array $data): self
    {
        return match ($data['__typename'] ?? null) {
            'ReturnToAddressRule'              => ReturnToAddressRule::fromArray($data),
            'ReturnRuleNotFoundError'          => NotFoundError::fromArray($data),
            'ReturnRuleInvalidConditionsError' => GenericError::fromArray($data),
            'ReturnRuleNameError'              => NameError::fromArray($data),
            'ReturnToAddressRequiredError'     => GenericError::fromArray($data),
            'ReturnRuleMissingConditionError'  => GenericError::fromArray($data),
            'ReturnRuleFeatureNotEnabledError' => GenericError::fromArray($data),
            default => throw new \UnexpectedValueException(
                'Unknown __typename: ' . ($data['__typename'] ?? 'null')
            ),
        };
    }
}
