<?php
declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\InquiryOperations\SellerOrderInquiries;

readonly class InvalidSearchInputError extends Output
{
    public function __construct(
        public ?string $errorCode = null,
        public ?string $errorMessage = null,
    ) {}

    public function getTypename(): string
    {
        return 'OrderInquiryInvalidSearchInputError';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            errorCode: $data['errorCode'] ?? null,
            errorMessage: $data['errorMessage'] ?? null,
        );
    }
}
