<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\Results;

readonly class SellerOrderInquiriesSuccess extends SellerOrderInquiriesOutput
{
    /**
     * @param OrderInquiryData[] $orderInquiries
     */
    public function __construct(
        public array $orderInquiries = [],
        public ?PaginationOutput $pagination = null,
    ) {}

    public function getTypename(): string
    {
        return 'SellerOrderInquiries';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            orderInquiries: array_map(
                static fn(array $i) => OrderInquiryData::fromArray($i),
                $data['orderInquiries'] ?? []
            ),
            pagination: isset($data['pagination'])
                ? PaginationOutput::fromArray($data['pagination'])
                : null,
        );
    }
}
