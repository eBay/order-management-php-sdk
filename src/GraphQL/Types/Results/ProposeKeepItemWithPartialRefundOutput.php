<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\Results;

abstract readonly class ProposeKeepItemWithPartialRefundOutput
{
    abstract public function getTypename(): string;

    public static function fromArray(array $data): ProposeKeepItemWithPartialRefundSuccess|ProposeKeepItemWithPartialRefundError
    {
        return match ($data['__typename'] ?? null) {
            'OrderReturn'                                         => ProposeKeepItemWithPartialRefundSuccess::fromArray($data),
            'MultipleRefundTermsNotAllowedError',
            'ProposeKeepItemWithPartialRefundInputValidationError',
            'ReturnActionNotPermittedError',
            'ReturnLineItemNotFoundError',
            'ReturnNotFoundError',
            'ReturnRefundTermsRequiredError'                       => ProposeKeepItemWithPartialRefundError::fromArray($data),
            default => throw new \UnexpectedValueException(
                'Unknown __typename: ' . ($data['__typename'] ?? 'null')
            ),
        };
    }
}
