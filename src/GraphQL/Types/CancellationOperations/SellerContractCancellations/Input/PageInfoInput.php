<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\CancellationOperations\SellerContractCancellations\Input;

final class PageInfoInput
{
    public function __construct(
        public readonly int $maxPageSize,
        public readonly ?string $pageCursor = null,
    ) {
    }

    public static function fromArray(array $data): self
    {
        return new self(
            maxPageSize: $data['maxPageSize'],
            pageCursor: $data['pageCursor'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'maxPageSize' => $this->maxPageSize,
            'pageCursor' => $this->pageCursor,
        ], static fn($v) => $v !== null);
    }
}
