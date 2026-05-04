<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\Results;

abstract readonly class CreateOrderCancellationOutput
{
    abstract public function getTypename(): string;

    public static function fromArray(array $data): CreateOrderCancellationSuccess|CreateOrderCancellationError
    {
        return match ($data['__typename'] ?? null) {
            'CreateOrderCancellationSuccess'           => CreateOrderCancellationSuccess::fromArray($data),
            'OrderCancellationEligibilityError',
            'OrderLineItemCancellationEligibilityError',
            'OrderNotFoundError',
            'RefundAuthorizationFailedError',
            'RefundBlockedByPaymentDisputeError',
            'RefundInstrumentDeclinedError',
            'RefundInstrumentInsufficientFundsError',
            'RefundInstrumentInvalidError',
            'RefundProcessingError'                    => CreateOrderCancellationError::fromArray($data),
            default => throw new \UnexpectedValueException(
                'Unknown __typename: ' . ($data['__typename'] ?? 'null')
            ),
        };
    }
}
