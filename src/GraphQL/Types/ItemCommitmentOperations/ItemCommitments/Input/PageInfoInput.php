<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\ItemCommitments\Input;

readonly class PageInfoInput
{
    public function __construct(
        public int $maxPageSize,
        public ?string $pageCursor = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            maxPageSize: (int) $data['maxPageSize'],
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
