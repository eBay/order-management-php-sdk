<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\ProposeKeepItemWithPartialRefund;

readonly class Input
{
    public function __construct(
        public string $returnId,
        public string $returnLineItemId,
        public string $refundPercentage,
    ) {}

    public function toArray(): array
    {
        return [
            'returnId'          => $this->returnId,
            'returnLineItemId'  => $this->returnLineItemId,
            'refundPercentage'  => $this->refundPercentage,
        ];
    }
}
