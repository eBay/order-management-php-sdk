<?php
declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\InquiryOperations\SubmitOrderInquiryReferral;

readonly class NotFoundError extends Output
{
    public function __construct(
        public ?string $inquiryId = null,
        public ?string $errorCode = null,
        public ?string $errorMessage = null,
    ) {}

    public function getTypename(): string
    {
        return 'OrderInquiryNotFoundError';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            inquiryId: $data['inquiryId'] ?? null,
            errorCode: $data['errorCode'] ?? null,
            errorMessage: $data['errorMessage'] ?? null,
        );
    }
}
