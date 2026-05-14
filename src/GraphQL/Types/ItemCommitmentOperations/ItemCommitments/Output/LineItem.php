<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\ItemCommitments\Output;

readonly class LineItem
{
    public function __construct(
        public ?int $quantity = null,
        public ?ItemRef $item = null,
        public ?PurchaseFlow $purchaseFlow = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            quantity: isset($data['quantity']) ? (int) $data['quantity'] : null,
            item: isset($data['item'])
                ? ItemRef::fromArray($data['item'])
                : null,
            purchaseFlow: isset($data['purchaseFlow'])
                ? PurchaseFlow::fromArray($data['purchaseFlow'])
                : null,
        );
    }
}
