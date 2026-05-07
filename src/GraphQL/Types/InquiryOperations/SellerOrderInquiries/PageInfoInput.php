<?php
declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\InquiryOperations\SellerOrderInquiries;

readonly class PageInfoInput
{
    public function __construct(
        public int $maxPageSize,
        public ?string $pageCursor = null,
    ) {}

    public function toArray(): array
    {
        $arr = ['maxPageSize' => $this->maxPageSize];
        if ($this->pageCursor !== null) {
            $arr['pageCursor'] = $this->pageCursor;
        }

        return $arr;
    }
}
