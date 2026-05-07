<?php
declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\InquiryOperations\SubmitOrderInquiryReferral;

readonly class InquiryCase
{
    public function __construct(
        public ?string $caseId = null,
        public ?CaseStatus $status = null,
        public ?string $initiator = null,
        public ?CaseReason $reason = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            caseId: $data['caseId'] ?? null,
            status: isset($data['status']) ? CaseStatus::fromArray($data['status']) : null,
            initiator: $data['initiator'] ?? null,
            reason: isset($data['reason']) ? CaseReason::fromArray($data['reason']) : null,
        );
    }
}
