<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\Results;

abstract class ProvideShipmentInfoForItemNotReceivedInquiryOutput
{
    abstract public function getTypename(): string;

    public static function fromArray(array $data): ProvideShipmentInfoForItemNotReceivedInquirySuccess|ProvideShipmentInfoForItemNotReceivedInquiryError
    {
        return match ($data['__typename'] ?? null) {
            'ProvideShipmentInfoForItemNotReceivedInquirySuccess' => ProvideShipmentInfoForItemNotReceivedInquirySuccess::fromArray($data),
            'OrderInquiryActionNotPermittedError',
            'OrderInquiryNotFoundError',
            'ProvideShipmentInfoForInquiryInputValidationError'   => ProvideShipmentInfoForItemNotReceivedInquiryError::fromArray($data),
            default => throw new \UnexpectedValueException(
                'Unknown __typename: ' . ($data['__typename'] ?? 'null')
            ),
        };
    }
}
