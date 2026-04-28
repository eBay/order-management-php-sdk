<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\Results;

abstract class SendOrderInquiryMessageOutput
{
    abstract public function getTypename(): string;

    public static function fromArray(array $data): SendOrderInquiryMessageSuccess|SendOrderInquiryMessageError
    {
        return match ($data['__typename'] ?? null) {
            'SendOrderInquiryMessageSuccess'             => SendOrderInquiryMessageSuccess::fromArray($data),
            'OrderInquiryActionNotPermittedError',
            'OrderInquiryNotFoundError',
            'SendOrderInquiryMessageInputValidationError' => SendOrderInquiryMessageError::fromArray($data),
            default => throw new \UnexpectedValueException(
                'Unknown __typename: ' . ($data['__typename'] ?? 'null')
            ),
        };
    }
}
