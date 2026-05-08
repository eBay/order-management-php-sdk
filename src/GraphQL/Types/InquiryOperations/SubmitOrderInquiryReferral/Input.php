<?php
declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\InquiryOperations\SubmitOrderInquiryReferral;

readonly class Input
{
    public function __construct(
        public string $inquiryId,
        public string $referralReasonCode,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            inquiryId: $data['inquiryId'],
            referralReasonCode: $data['referralReasonCode'],
        );
    }

    public function toArray(): array
    {
        return [
            'inquiryId' => $this->inquiryId,
            'referralReasonCode' => $this->referralReasonCode,
        ];
    }
}
