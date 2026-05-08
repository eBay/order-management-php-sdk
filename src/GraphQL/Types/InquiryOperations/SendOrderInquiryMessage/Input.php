<?php
declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\InquiryOperations\SendOrderInquiryMessage;

readonly class Input
{
    public function __construct(
        public string $inquiryId,
        public string $message,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            inquiryId: $data['inquiryId'],
            message: $data['message'],
        );
    }

    public function toArray(): array
    {
        return [
            'inquiryId' => $this->inquiryId,
            'message' => $this->message,
        ];
    }
}
