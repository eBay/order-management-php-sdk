<?php
declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\InquiryOperations\SendOrderInquiryMessage;

readonly class ProvidedInformation
{
    public function __construct(
        public ?string $submitter = null,
        public ?string $submittedAt = null,
        public ?SubmittedInformation $submittedInformation = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            submitter: $data['submitter'] ?? null,
            submittedAt: $data['submittedAt'] ?? null,
            submittedInformation: isset($data['submittedInformation'])
                ? SubmittedInformation::fromArray($data['submittedInformation'])
                : null,
        );
    }
}
