<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\SellerOrderReturns;

readonly class PageInfoInput
{
    public function __construct(
        public int $maxPageSize,
        public ?string $pageCursor = null,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            maxPageSize: (int) $data['maxPageSize'],
            pageCursor: $data['pageCursor'] ?? null,
        );
    }

    public function toArray(): array
    {
        $data = ['maxPageSize' => $this->maxPageSize];
        if ($this->pageCursor !== null) {
            $data['pageCursor'] = $this->pageCursor;
        }
        return $data;
    }
}
