<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\CreateReturnRuleListingGroup;

abstract readonly class Output
{
    abstract public function getTypename(): string;

    public static function fromArray(array $data): self
    {
        return match ($data['__typename'] ?? null) {
            'ReturnRuleListingGroup'                    => ListingGroupSuccess::fromArray($data),
            'ReturnRuleListingGroupInvalidNameError'    => InvalidNameError::fromArray($data),
            'ReturnRuleListingGroupDuplicateListingError' => DuplicateListingError::fromArray($data),
            'ReturnRuleListingGroupQuotaExceededError'           => QuotaExceededError::fromArray($data),
            'ReturnRuleFeatureNotEnabledError'                   => FeatureNotEnabledError::fromArray($data),
            'ReturnRuleListingGroupMaxSizeExceededError'         => MaxSizeExceededError::fromArray($data),
            'ReturnRuleListingIdsPerRequestLimitExceededError'   => IdsPerRequestLimitExceededError::fromArray($data),
            default => throw new \UnexpectedValueException(
                'Unknown __typename: ' . ($data['__typename'] ?? 'null')
            ),
        };
    }
}
