<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\Results;

readonly class OrderInquirySuccess extends OrderInquiryOutput
{
    public function __construct(
        public ?OrderInquiryData $orderInquiry = null,
    ) {}

    public function getTypename(): string
    {
        return 'OrderInquirySuccess';
    }

    public static function fromArray(array $data): self
    {
        // orderInquiry may be a union type (e.g. ItemNotReceivedInquiry)
        $raw = $data['orderInquiry'] ?? null;
        return new self(
            orderInquiry: $raw !== null ? OrderInquiryData::fromArray($raw) : null,
        );
    }
}
