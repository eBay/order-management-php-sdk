<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\SellerOrderReturns;

readonly class KeepItemPartialRefundTerm extends ProposedTerm
{
    public function __construct(
        public ?RefundAmount $refundAmount = null,
        public ?string $itemPriceRefundPercentage = null,
        public ?bool $itemShippingPriceWaived = null,
    ) {}

    public function getTypename(): string
    {
        return 'KeepItemPartialRefundTerm';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            refundAmount:              isset($data['refundAmount'])
                ? RefundAmount::fromArray($data['refundAmount'])
                : null,
            itemPriceRefundPercentage: $data['itemPriceRefundPercentage'] ?? null,
            itemShippingPriceWaived:  $data['itemShippingPriceWaived'] ?? null,
        );
    }
}
