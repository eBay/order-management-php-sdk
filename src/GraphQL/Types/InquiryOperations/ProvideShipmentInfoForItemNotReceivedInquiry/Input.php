<?php
declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\InquiryOperations\ProvideShipmentInfoForItemNotReceivedInquiry;

readonly class Input
{
    /**
     * @param TrackingInput[] $trackings
     */
    public function __construct(
        public string $inquiryId,
        public array $trackings,
    ) {}

    public function toArray(): array
    {
        return [
            'inquiryId' => $this->inquiryId,
            'trackings' => array_map(fn(TrackingInput $t) => $t->toArray(), $this->trackings),
        ];
    }
}
