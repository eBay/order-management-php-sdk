<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\Results;

abstract readonly class ProcessOrderInquiryRefundOutput
{
    abstract public function getTypename(): string;

    public static function fromArray(array $data): ProcessOrderInquiryRefundSuccess|ProcessOrderInquiryRefundError
    {
        return match ($data['__typename'] ?? null) {
            'ProcessOrderInquiryRefundSuccess'  => ProcessOrderInquiryRefundSuccess::fromArray($data),
            'OrderInquiryActionNotPermittedError',
            'OrderInquiryNotFoundError',
            'RefundAuthorizationFailedError',
            'RefundBlockedByPaymentDisputeError',
            'RefundInstrumentDeclinedError',
            'RefundInstrumentInsufficientFundsError',
            'RefundInstrumentInvalidError',
            'RefundProcessingError'              => ProcessOrderInquiryRefundError::fromArray($data),
            default => throw new \UnexpectedValueException(
                'Unknown __typename: ' . ($data['__typename'] ?? 'null')
            ),
        };
    }
}
