<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\CreateInStoreReturn;

abstract readonly class IneligibilityReason
{
    abstract public function getTypename(): string;

    public static function fromArray(array $data): self
    {
        return match ($data['__typename'] ?? null) {
            'ReturnIneligibleQuantityExceeded'   => ReturnIneligibleQuantityExceeded::fromArray($data),
            'ReturnIneligibleReasonNotAllowed'   => ReturnIneligibleReasonNotAllowed::fromArray($data),
            'ReturnIneligibleReturnNotAccepted',
            'ReturnIneligibleInquiryExists',
            'ReturnIneligibleReturnExists',
            'ReturnIneligibleTooEarly',
            'ReturnIneligibleReturnWindowElapsed',
            'ReturnIneligibleRefundIssued',
            'ReturnIneligiblePaymentDisputeExists',
            'ReturnIneligibleInStoreReturnNotSupported',
            'ReturnIneligibleCancellationExists' => GenericIneligibilityReason::fromArray($data),
            default                             => GenericIneligibilityReason::fromArray($data),
        };
    }
}
