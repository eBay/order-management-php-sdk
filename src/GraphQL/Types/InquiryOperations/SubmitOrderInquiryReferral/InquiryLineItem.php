<?php
declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\InquiryOperations\SubmitOrderInquiryReferral;

readonly class InquiryLineItem
{
    public function __construct(
        public ?string $inquiryLineItemId = null,
        public ?int $quantity = null,
        public ?OrderLineItemRef $orderLineItem = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            inquiryLineItemId: $data['inquiryLineItemId'] ?? null,
            quantity: isset($data['quantity']) ? (int) $data['quantity'] : null,
            orderLineItem: isset($data['orderLineItem'])
                ? OrderLineItemRef::fromArray($data['orderLineItem'])
                : null,
        );
    }
}
