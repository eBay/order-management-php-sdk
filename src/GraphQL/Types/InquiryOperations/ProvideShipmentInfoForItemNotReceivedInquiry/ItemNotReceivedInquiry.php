<?php
declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\InquiryOperations\ProvideShipmentInfoForItemNotReceivedInquiry;

readonly class ItemNotReceivedInquiry
{
    public function __construct(
        public ?string $__typename = null,
        public ?string $inquiryId = null,
        public ?ProvidedInformation $providedInformation = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            __typename: $data['__typename'] ?? null,
            inquiryId: $data['inquiryId'] ?? null,
            providedInformation: isset($data['providedInformation'])
                ? ProvidedInformation::fromArray($data['providedInformation'])
                : null,
        );
    }
}
