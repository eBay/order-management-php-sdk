<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\CancellationOperations\SellerContractCancellations;

readonly class Input
{
    public function __construct(
        public ?InitialPage $initialPage = null,
        public ?PageInfo $pageInfo = null,
    ) {}

    public function toArray(): array
    {
        return array_filter([
            'initialPage' => $this->initialPage?->toArray(),
            'pageInfo' => $this->pageInfo?->toArray(),
        ], static fn($v) => $v !== null);
    }
}
