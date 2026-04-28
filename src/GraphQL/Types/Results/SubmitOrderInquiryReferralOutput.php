<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\Results;

abstract class SubmitOrderInquiryReferralOutput
{
    abstract public function getTypename(): string;

    public static function fromArray(array $data): SubmitOrderInquiryReferralSuccess|SubmitOrderInquiryReferralError
    {
        return match ($data['__typename'] ?? null) {
            'SubmitOrderInquiryReferralSuccess'             => SubmitOrderInquiryReferralSuccess::fromArray($data),
            'OrderInquiryActionNotPermittedError',
            'OrderInquiryNotFoundError',
            'SubmitOrderInquiryReferralInputValidationError' => SubmitOrderInquiryReferralError::fromArray($data),
            default => throw new \UnexpectedValueException(
                'Unknown __typename: ' . ($data['__typename'] ?? 'null')
            ),
        };
    }
}
