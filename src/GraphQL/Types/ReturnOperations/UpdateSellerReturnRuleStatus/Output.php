<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\UpdateSellerReturnRuleStatus;

abstract readonly class Output
{
    abstract public function getTypename(): string;

    public static function fromArray(array $data): self
    {
        return match ($data['__typename'] ?? null) {
            'ReturnToAddressRule'                => ReturnToAddressRule::fromArray($data),
            'ReturnResponseRule'                 => ReturnResponseRule::fromArray($data),
            'ReturnRuleNotFoundError'            => NotFoundError::fromArray($data),
            'ReturnRuleStatusUpdateBlockedError' => StatusUpdateBlockedError::fromArray($data),
            'ReturnRuleFeatureNotEnabledError'   => FeatureNotEnabledError::fromArray($data),
            default => throw new \UnexpectedValueException(
                'Unknown __typename: ' . ($data['__typename'] ?? 'null')
            ),
        };
    }
}
