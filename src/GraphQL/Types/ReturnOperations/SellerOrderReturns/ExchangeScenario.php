<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\SellerOrderReturns;

abstract readonly class ExchangeScenario
{
    abstract public function getTypename(): string;

    public static function fromArray(array $data): self
    {
        return match ($data['__typename'] ?? null) {
            'ExchangeAmount'                    => ExchangeAmount::fromArray($data),
            'InvalidExchangeScenarioInputError' => InvalidExchangeScenarioInputError::fromArray($data),
            default => throw new \UnexpectedValueException(
                'Unknown __typename: ' . ($data['__typename'] ?? 'null')
            ),
        };
    }
}
