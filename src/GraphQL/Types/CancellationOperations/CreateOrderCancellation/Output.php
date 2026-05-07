<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\CancellationOperations\CreateOrderCancellation;

abstract readonly class Output
{
    abstract public function getTypename(): string;

    public static function fromArray(array $data): self
    {
        return match ($data['__typename'] ?? null) {
            'CreateOrderCancellationSuccess' => Success::fromArray($data),
            'OrderCancellationEligibilityError' => OrderEligibilityError::fromArray($data),
            'OrderLineItemCancellationEligibilityError' => LineItemEligibilityError::fromArray($data),
            'OrderNotFoundError' => OrderNotFoundError::fromArray($data),
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
