<?php
declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\InquiryOperations\ProvideShipmentInfoForItemNotReceivedInquiry;

readonly class Success extends Output
{
    public function __construct(
        public ?ItemNotReceivedInquiry $orderInquiry = null,
    ) {}

    public function getTypename(): string
    {
        return 'ProvideShipmentInfoForItemNotReceivedInquirySuccess';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            orderInquiry: isset($data['orderInquiry'])
                ? ItemNotReceivedInquiry::fromArray($data['orderInquiry'])
                : null,
        );
    }
}
