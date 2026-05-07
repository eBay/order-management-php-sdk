<?php
declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\InquiryOperations\SellerOrderInquiries;

abstract readonly class Output
{
    abstract public function getTypename(): string;

    public static function fromArray(array $data): self
    {
        return match ($data['__typename'] ?? null) {
            'SellerOrderInquiries' => SellerOrderInquiriesResult::fromArray($data),
            'OrderInquiryInvalidDateRangeError' => InvalidDateRangeError::fromArray($data),
            'OrderInquiryInvalidPageSizeError' => InvalidPageSizeError::fromArray($data),
            'OrderInquiryInvalidSearchInputError' => InvalidSearchInputError::fromArray($data),
            default => throw new \UnexpectedValueException('Unknown __typename: ' . ($data['__typename'] ?? 'null')),
        };
    }
}
