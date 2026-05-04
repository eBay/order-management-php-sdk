<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\Results;

abstract readonly class UpdateSellerRmaPreferenceOutput
{
    abstract public function getTypename(): string;

    public static function fromArray(array $data): UpdateSellerRmaPreferenceSuccess|UpdateSellerRmaPreferenceError
    {
        return match ($data['__typename'] ?? null) {
            'SellerReturnPreferences'      => UpdateSellerRmaPreferenceSuccess::fromArray($data),
            'ReturnPreferenceNotFoundError' => UpdateSellerRmaPreferenceError::fromArray($data),
            default => throw new \UnexpectedValueException(
                'Unknown __typename: ' . ($data['__typename'] ?? 'null')
            ),
        };
    }
}
