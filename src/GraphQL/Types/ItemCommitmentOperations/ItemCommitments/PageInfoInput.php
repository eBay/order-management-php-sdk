<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\ItemCommitments;

readonly class PageInfoInput
{
    public function __construct(
        public int $maxPageSize,
        public ?string $pageCursor = null,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            maxPageSize: $data['maxPageSize'],
            pageCursor: $data['pageCursor'] ?? null,
        );
    }

    public function toArray(): array
    {
        $result = ['maxPageSize' => $this->maxPageSize];

        if ($this->pageCursor !== null) {
            $result['pageCursor'] = $this->pageCursor;
        }

        return $result;
    }
}
