<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\AppendSellerReturnResponseRule;

abstract readonly class RuleCondition
{
    abstract public function getTypename(): string;

    public static function fromArray(array $data): self
    {
        return match ($data['__typename'] ?? null) {
            'ReturnRefundRangeCondition'          => RefundRangeCondition::fromArray($data),
            'ReturnReasonCondition'               => ReasonCondition::fromArray($data),
            'ReturnShipmentOriginCountryCondition' => ShipmentOriginCountryCondition::fromArray($data),
            'ReturnItemCategoryCondition'         => ItemCategoryCondition::fromArray($data),
            'ReturnItemLocationCountryCondition'  => ItemLocationCountryCondition::fromArray($data),
            default => throw new \UnexpectedValueException(
                'Unknown condition __typename: ' . ($data['__typename'] ?? 'null')
            ),
        };
    }
}
