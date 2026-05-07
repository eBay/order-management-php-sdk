<?php
declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\InquiryOperations\SellerOrderInquiries;

readonly class SellerOrderInquiriesResult extends Output
{
    /**
     * @param ItemNotReceivedInquiry[] $orderInquiries
     */
    public function __construct(
        public array $orderInquiries = [],
        public ?Pagination $pagination = null,
    ) {}

    public function getTypename(): string
    {
        return 'SellerOrderInquiries';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            orderInquiries: array_map(
                fn(array $i) => ItemNotReceivedInquiry::fromArray($i),
                $data['orderInquiries'] ?? [],
            ),
            pagination: isset($data['pagination'])
                ? Pagination::fromArray($data['pagination'])
                : null,
        );
    }
}
