<?php
declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\InquiryOperations\SellerOrderInquiries;

readonly class InvalidPageSizeError extends Output
{
    public function __construct(
        public ?string $errorCode = null,
        public ?string $errorMessage = null,
        public ?int $maxAllowedPageSize = null,
        public ?int $minAllowedPageSize = null,
        public ?int $requestedPageSize = null,
    ) {}

    public function getTypename(): string
    {
        return 'OrderInquiryInvalidPageSizeError';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            errorCode: $data['errorCode'] ?? null,
            errorMessage: $data['errorMessage'] ?? null,
            maxAllowedPageSize: isset($data['maxAllowedPageSize']) ? (int) $data['maxAllowedPageSize'] : null,
            minAllowedPageSize: isset($data['minAllowedPageSize']) ? (int) $data['minAllowedPageSize'] : null,
            requestedPageSize: isset($data['requestedPageSize']) ? (int) $data['requestedPageSize'] : null,
        );
    }
}
