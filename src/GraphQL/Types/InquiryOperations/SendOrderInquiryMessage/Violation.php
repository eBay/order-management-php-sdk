<?php
declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\InquiryOperations\SendOrderInquiryMessage;

readonly class Violation
{
    public function __construct(
        public ?string $code = null,
        public ?string $displayMessage = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            code: $data['code'] ?? null,
            displayMessage: $data['displayMessage'] ?? null,
        );
    }
}
