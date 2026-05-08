<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\SubmitReturnReferral;

readonly class ReturnReferralReasonViolation extends Violation
{
    public function __construct(
        public ?string $code = null,
        public ?string $displayMessage = null,
        public ?string $invalidReferralReason = null,
        public ?ReferralReasonConstraint $constraint = null,
    ) {}

    public function getTypename(): string
    {
        return 'ReturnReferralReasonViolation';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            code:                 $data['code'] ?? null,
            displayMessage:       $data['displayMessage'] ?? null,
            invalidReferralReason: is_string($data['invalidReferralReason'] ?? null)
                ? $data['invalidReferralReason']
                : null,
            constraint:           isset($data['constraint'])
                ? ReferralReasonConstraint::fromArray($data['constraint'])
                : null,
        );
    }
}
