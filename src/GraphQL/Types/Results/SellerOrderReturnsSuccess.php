<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\Results;

readonly class SellerOrderReturnsSuccess extends SellerOrderReturnsOutput
{
    /**
     * @param OrderReturnData[] $orderReturns
     */
    public function __construct(
        public array $orderReturns = [],
        public ?PaginationOutput $pagination = null,
    ) {}

    public function getTypename(): string
    {
        return 'SellerOrderReturns';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            orderReturns: array_map(
                static fn(array $r) => OrderReturnData::fromArray($r),
                $data['orderReturns'] ?? []
            ),
            pagination: isset($data['pagination'])
                ? PaginationOutput::fromArray($data['pagination'])
                : null,
        );
    }
}
