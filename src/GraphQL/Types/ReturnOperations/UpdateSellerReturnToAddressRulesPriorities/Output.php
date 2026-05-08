<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\UpdateSellerReturnToAddressRulesPriorities;

abstract readonly class Output
{
    abstract public function getTypename(): string;

    public static function fromArray(array $data): self
    {
        return match ($data['__typename'] ?? null) {
            'UpdateSellerReturnToAddressRulesPrioritiesSuccess' => Success::fromArray($data),
            'ReturnRuleMissingRuleIdsError'                    => MissingRuleIdsError::fromArray($data),
            'ReturnRuleDuplicateRuleIdsError'                  => DuplicateRuleIdsError::fromArray($data),
            'ReturnRuleInvalidRuleIdsError'                    => InvalidRuleIdsError::fromArray($data),
            'ReturnRuleFeatureNotEnabledError'                 => FeatureNotEnabledError::fromArray($data),
            default => throw new \UnexpectedValueException(
                'Unknown __typename: ' . ($data['__typename'] ?? 'null')
            ),
        };
    }
}
