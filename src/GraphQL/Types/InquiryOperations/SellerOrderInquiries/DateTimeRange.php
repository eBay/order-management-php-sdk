<?php
declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\InquiryOperations\SellerOrderInquiries;

readonly class DateTimeRange
{
    public function __construct(
        public string $startDateTime,
        public string $endDateTime,
    ) {}

    public function toArray(): array
    {
        return [
            'startDateTime' => $this->startDateTime,
            'endDateTime' => $this->endDateTime,
        ];
    }
}
