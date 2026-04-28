<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\Results;

abstract class SellerOrderReturnsOutput
{
    abstract public function getTypename(): string;

    public static function fromArray(array $data): SellerOrderReturnsSuccess|SellerOrderReturnsError
    {
        return match ($data['__typename'] ?? null) {
            'SellerOrderReturns'               => SellerOrderReturnsSuccess::fromArray($data),
            'ReturnActionNotPermittedError',
            'ReturnInvalidDateRangeError',
            'ReturnInvalidPageSizeError',
            'ReturnInvalidSearchInputError'    => SellerOrderReturnsError::fromArray($data),
            default => throw new \UnexpectedValueException(
                'Unknown __typename: ' . ($data['__typename'] ?? 'null')
            ),
        };
    }
}
