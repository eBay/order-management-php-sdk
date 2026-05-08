<?php
declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\InquiryOperations\SellerOrderInquiries;

readonly class SortInput
{
    public function __construct(
        public string $sortField = 'CREATED_AT',
        public string $sortOrder = 'ASC',
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            sortField: $data['sortField'] ?? 'CREATED_AT',
            sortOrder: $data['sortOrder'] ?? 'ASC',
        );
    }

    public function toArray(): array
    {
        return [
            'sortField' => $this->sortField,
            'sortOrder' => $this->sortOrder,
        ];
    }
}
