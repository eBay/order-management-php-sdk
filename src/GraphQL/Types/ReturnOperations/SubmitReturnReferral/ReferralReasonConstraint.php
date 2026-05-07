<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\SubmitReturnReferral;

readonly class ReferralReasonConstraint
{
    public function __construct(
        /** @var ValidReferralReason[] */
        public array $validReferralReasons = [],
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            validReferralReasons: array_map(
                fn(array $r) => ValidReferralReason::fromArray($r),
                $data['validReferralReasons'] ?? []
            ),
        );
    }
}
