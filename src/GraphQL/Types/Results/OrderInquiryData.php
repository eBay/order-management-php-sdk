<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\Results;

readonly class OrderInquiryData
{
    public function __construct(
        public ?string $inquiryId = null,
        public ?string $status = null,
        public ?string $createdAt = null,
    ) {}

    public static function fromArray(array $data): self
    {
        $statusCode = isset($data['status']['code']) ? $data['status']['code'] : null;

        return new self(
            inquiryId: $data['inquiryId'] ?? null,
            status:    $statusCode,
            createdAt: $data['createdAt'] ?? null,
        );
    }
}
