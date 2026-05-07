<?php
declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\InquiryOperations\SellerOrderInquiries;

readonly class InitialPageInput
{
    public function __construct(
        public FilterInput $filter,
        public SortInput $sort,
    ) {}

    public function toArray(): array
    {
        return [
            'filter' => $this->filter->toArray(),
            'sort' => $this->sort->toArray(),
        ];
    }
}
