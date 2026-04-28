<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\Results;

abstract class SellerReturnPreferenceOutput
{
    abstract public function getTypename(): string;

    public static function fromArray(array $data): SellerReturnPreferencesResult|SellerReturnPreferenceError
    {
        return match ($data['__typename'] ?? null) {
            'SellerReturnPreferences'          => SellerReturnPreferencesResult::fromArray($data),
            'ReturnPreferenceNotFoundError'     => SellerReturnPreferenceError::fromArray($data),
            default => throw new \UnexpectedValueException(
                'Unknown __typename: ' . ($data['__typename'] ?? 'null')
            ),
        };
    }
}
