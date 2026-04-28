<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\Results;

readonly class ProvideShipmentInfoForItemNotReceivedInquirySuccess extends ProvideShipmentInfoForItemNotReceivedInquiryOutput
{
    public function __construct(
        public ?OrderInquiryData $orderInquiry = null,
    ) {}

    public function getTypename(): string
    {
        return 'ProvideShipmentInfoForItemNotReceivedInquirySuccess';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            orderInquiry: isset($data['orderInquiry'])
                ? OrderInquiryData::fromArray($data['orderInquiry'])
                : null,
        );
    }
}
