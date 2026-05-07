<?php
declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\InquiryOperations\SellerOrderInquiries;

readonly class FilterInput
{
    public function __construct(
        public ?DateTimeRange $createdBetween = null,
        public ?string $listingId = null,
        public ?string $orderId = null,
        public ?string $presets = null,
    ) {}

    public function toArray(): array
    {
        $arr = [];
        if ($this->createdBetween !== null) {
            $arr['createdBetween'] = $this->createdBetween->toArray();
        }
        if ($this->listingId !== null) {
            $arr['listingId'] = $this->listingId;
        }
        if ($this->orderId !== null) {
            $arr['orderId'] = $this->orderId;
        }
        if ($this->presets !== null) {
            $arr['presets'] = $this->presets;
        }

        return $arr;
    }
}
