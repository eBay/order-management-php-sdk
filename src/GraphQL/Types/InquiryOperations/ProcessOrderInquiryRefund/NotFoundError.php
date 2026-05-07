<?php
declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\InquiryOperations\ProcessOrderInquiryRefund;

readonly class NotFoundError extends Output
{
    public function __construct(
        public ?string $errorCode = null,
        public ?string $errorMessage = null,
        public ?string $inquiryId = null,
    ) {}

    public function getTypename(): string
    {
        return 'OrderInquiryNotFoundError';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            errorCode: $data['errorCode'] ?? null,
            errorMessage: $data['errorMessage'] ?? null,
            inquiryId: $data['inquiryId'] ?? null,
        );
    }
}
