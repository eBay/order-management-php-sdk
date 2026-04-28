<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\Results;

abstract class OrderReturnOutput
{
    abstract public function getTypename(): string;

    public static function fromArray(array $data): OrderReturnSuccess|OrderReturnError
    {
        return match ($data['__typename'] ?? null) {
            'OrderReturn'          => OrderReturnSuccess::fromArray($data),
            'ReturnNotFoundError'  => OrderReturnError::fromArray($data),
            default => throw new \UnexpectedValueException(
                'Unknown __typename: ' . ($data['__typename'] ?? 'null')
            ),
        };
    }
}
