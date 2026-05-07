<?php
declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\InquiryOperations\SellerOrderInquiries;

readonly class Input
{
    public function __construct(
        public ?InitialPageInput $initialPage = null,
        public ?PageInfoInput $pageInfo = null,
    ) {}

    public function toArray(): array
    {
        $arr = [];
        if ($this->initialPage !== null) {
            $arr['initialPage'] = $this->initialPage->toArray();
        }
        if ($this->pageInfo !== null) {
            $arr['pageInfo'] = $this->pageInfo->toArray();
        }

        return $arr;
    }
}
