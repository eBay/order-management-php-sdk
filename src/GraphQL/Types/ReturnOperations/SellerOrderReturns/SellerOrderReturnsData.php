<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\SellerOrderReturns;

readonly class SellerOrderReturnsData extends Output
{
    public function __construct(
        /** @var OrderReturnItem[] */
        public array $orderReturns = [],
        public ?Pagination $pagination = null,
    ) {}

    public function getTypename(): string
    {
        return 'SellerOrderReturns';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            orderReturns: array_map(
                fn(array $r) => OrderReturnItem::fromArray($r),
                $data['orderReturns'] ?? []
            ),
            pagination: isset($data['pagination'])
                ? Pagination::fromArray($data['pagination'])
                : null,
        );
    }
}
