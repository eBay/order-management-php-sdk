<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\Results;

readonly class OrderInquiryData
{
    public function __construct(
        public ?string $inquiryId = null,
        public ?string $status = null,
        public ?string $type = null,
        public ?string $refundStatus = null,
        public ?string $creationDate = null,
        public ?string $lastModifiedDate = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            inquiryId:        $data['inquiryId'] ?? null,
            status:           $data['status'] ?? null,
            type:             $data['type'] ?? null,
            refundStatus:     $data['refundStatus'] ?? null,
            creationDate:     $data['creationDate'] ?? null,
            lastModifiedDate: $data['lastModifiedDate'] ?? null,
        );
    }
}
