<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\Results;

abstract class SellerOrderInquiriesOutput
{
    abstract public function getTypename(): string;

    public static function fromArray(array $data): SellerOrderInquiriesSuccess|SellerOrderInquiriesError
    {
        return match ($data['__typename'] ?? null) {
            'SellerOrderInquiries'                => SellerOrderInquiriesSuccess::fromArray($data),
            'OrderInquiryInvalidDateRangeError',
            'OrderInquiryInvalidPageSizeError',
            'OrderInquiryInvalidSearchInputError' => SellerOrderInquiriesError::fromArray($data),
            default => throw new \UnexpectedValueException(
                'Unknown __typename: ' . ($data['__typename'] ?? 'null')
            ),
        };
    }
}
