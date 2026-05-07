<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\UpdateSellerReturnToAddressRulesPriorities;

abstract readonly class AddressRoutingStrategy
{
    abstract public function getTypename(): string;

    public static function fromArray(array $data): self
    {
        return match ($data['__typename'] ?? null) {
            'ReturnToSpecificAddressStrategy'         => SpecificAddressStrategy::fromArray($data),
            'ReturnToNearestSellerAddressStrategy'    => NearestSellerAddressStrategy::fromArray($data),
            'ReturnToOriginalShipFromAddressStrategy' => OriginalShipFromStrategy::fromArray($data),
            default => throw new \UnexpectedValueException(
                'Unknown AddressRoutingStrategy __typename: ' . ($data['__typename'] ?? 'null')
            ),
        };
    }
}
