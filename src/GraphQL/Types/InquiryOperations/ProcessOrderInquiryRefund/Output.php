<?php
declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\InquiryOperations\ProcessOrderInquiryRefund;

abstract readonly class Output
{
    abstract public function getTypename(): string;

    public static function fromArray(array $data): self
    {
        return match ($data['__typename'] ?? null) {
            'ProcessOrderInquiryRefundSuccess' => Success::fromArray($data),
            'OrderInquiryActionNotPermittedError' => ActionNotPermittedError::fromArray($data),
            'OrderInquiryNotFoundError' => NotFoundError::fromArray($data),
            'RefundAuthorizationFailedError',
            'RefundBlockedByPaymentDisputeError',
            'RefundInstrumentDeclinedError',
            'RefundInstrumentInsufficientFundsError',
            'RefundInstrumentInvalidError',
            'RefundProcessingError' => GenericError::fromArray($data),
            default => throw new \UnexpectedValueException('Unknown __typename: ' . ($data['__typename'] ?? 'null')),
        };
    }
}
