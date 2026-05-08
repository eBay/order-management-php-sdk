<?php
declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\InquiryOperations\ProcessOrderInquiryRefund;

readonly class Input
{
    public function __construct(
        public string $inquiryId,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            inquiryId: $data['inquiryId'],
        );
    }

    public function toArray(): array
    {
        return ['inquiryId' => $this->inquiryId];
    }
}
