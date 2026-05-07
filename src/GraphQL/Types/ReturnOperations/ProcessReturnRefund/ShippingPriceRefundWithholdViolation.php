<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\ProcessReturnRefund;

readonly class ShippingPriceRefundWithholdViolation extends Violation
{
    public function __construct(
        public ?string $code = null,
        public ?string $displayMessage = null,
    ) {}

    public function getTypename(): string
    {
        return 'ShippingPriceRefundWithholdViolation';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            code:          $data['code'] ?? null,
            displayMessage: $data['displayMessage'] ?? null,
        );
    }
}
