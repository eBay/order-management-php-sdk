<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\CancellationOperations\SellerContractCancellations;

readonly class PageInfo
{
    public function __construct(
        public int $maxPageSize,
        public ?string $pageCursor = null,
    ) {}

    public function toArray(): array
    {
        return array_filter([
            'maxPageSize' => $this->maxPageSize,
            'pageCursor' => $this->pageCursor,
        ], static fn($v) => $v !== null);
    }
}
