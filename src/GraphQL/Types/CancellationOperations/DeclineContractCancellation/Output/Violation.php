<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\CancellationOperations\DeclineContractCancellation\Output;

abstract readonly class Violation
{
    abstract public function getTypename(): string;

    public static function fromArray(array $data): self
    {
        return match ($data['__typename'] ?? '') {
            'CancellationTrackingNumberViolation' => TrackingNumberViolation::fromArray($data),
            'CancellationShippingCarrierCodeViolation' => ShippingCarrierCodeViolation::fromArray($data),
            'CancellationShippedDateViolation' => ShippedDateViolation::fromArray($data),
            default => throw new \UnexpectedValueException(
                'Unknown Violation __typename: ' . ($data['__typename'] ?? '(none)')
            ),
        };
    }
}
