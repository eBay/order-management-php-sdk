<?php
declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\InquiryOperations\SellerOrderInquiries;

readonly class SortInput
{
    public function __construct(
        public string $sortField = 'CREATED_AT',
        public string $sortOrder = 'ASC',
    ) {}

    public function toArray(): array
    {
        return [
            'sortField' => $this->sortField,
            'sortOrder' => $this->sortOrder,
        ];
    }
}
