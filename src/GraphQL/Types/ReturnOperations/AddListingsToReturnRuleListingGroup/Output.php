<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\AddListingsToReturnRuleListingGroup;

abstract readonly class Output
{
    abstract public function getTypename(): string;

    public static function fromArray(array $data): self
    {
        return match ($data['__typename'] ?? null) {
            'ReturnRuleListingGroup'                         => ListingGroupSuccess::fromArray($data),
            'ReturnRuleListingGroupDuplicateListingError'    => DuplicateListingError::fromArray($data),
            'ReturnRuleListingIdsPerRequestLimitExceededError' => PerRequestLimitError::fromArray($data),
            'ReturnRuleListingGroupMaxSizeExceededError'     => MaxSizeExceededError::fromArray($data),
            'ReturnRuleListingGroupNotFoundError'            => ListingGroupNotFoundError::fromArray($data),
            'ReturnRuleFeatureNotEnabledError'               => GenericError::fromArray($data),
            default => throw new \UnexpectedValueException(
                'Unknown __typename: ' . ($data['__typename'] ?? 'null')
            ),
        };
    }
}
