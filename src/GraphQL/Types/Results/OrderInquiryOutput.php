<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\Results;

abstract readonly class OrderInquiryOutput
{
    abstract public function getTypename(): string;

    public static function fromArray(array $data): OrderInquirySuccess|OrderInquiryError
    {
        return match ($data['__typename'] ?? null) {
            'OrderInquirySuccess'      => OrderInquirySuccess::fromArray($data),
            'OrderInquiryNotFoundError' => OrderInquiryError::fromArray($data),
            default => throw new \UnexpectedValueException(
                'Unknown __typename: ' . ($data['__typename'] ?? 'null')
            ),
        };
    }
}
