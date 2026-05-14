<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\AppendSellerReturnToAddressRule;

abstract readonly class RuleCondition
{
    abstract public function getTypename(): string;

    public static function fromArray(array $data): self
    {
        return match ($data['__typename'] ?? null) {
            'ReturnReasonCondition'               => ReasonCondition::fromArray($data),
            'ReturnItemCategoryCondition'         => ItemCategoryCondition::fromArray($data),
            'ReturnShipmentOriginCountryCondition' => ShipmentOriginCountryCondition::fromArray($data),
            'ReturnItemLocationCountryCondition'  => ItemLocationCountryCondition::fromArray($data),
            'ReturnRefundRangeCondition'          => RefundRangeCondition::fromArray($data),
            'ReturnListingGroupCondition'         => ListingGroupCondition::fromArray($data),
            default => throw new \UnexpectedValueException(
                'Unknown condition __typename: ' . ($data['__typename'] ?? 'null')
            ),
        };
    }
}
