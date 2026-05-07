<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\ProcessReturnRefund;

readonly class RefundWithholdConstraint
{
    public function __construct(
        public ?AllowedPercentageRange $allowedPercentageRange = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            allowedPercentageRange: isset($data['allowedPercentageRange'])
                ? AllowedPercentageRange::fromArray($data['allowedPercentageRange'])
                : null,
        );
    }
}
