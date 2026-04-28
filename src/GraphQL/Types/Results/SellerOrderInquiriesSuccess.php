<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\Results;

readonly class SellerOrderInquiriesSuccess extends SellerOrderInquiriesOutput
{
    /**
     * @param OrderInquiryData[] $inquiries
     */
    public function __construct(
        public array $inquiries = [],
        public ?PaginationOutput $pagination = null,
    ) {}

    public function getTypename(): string
    {
        return 'SellerOrderInquiries';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            inquiries: array_map(
                static fn(array $i) => OrderInquiryData::fromArray($i),
                $data['inquiries'] ?? []
            ),
            pagination: isset($data['pagination'])
                ? PaginationOutput::fromArray($data['pagination'])
                : null,
        );
    }
}
