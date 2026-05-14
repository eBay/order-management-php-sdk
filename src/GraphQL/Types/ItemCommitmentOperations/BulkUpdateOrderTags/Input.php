<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\BulkUpdateOrderTags;

readonly class Input
{
    /**
     * @param UpdateOrderTagInput[] $updates
     */
    public function __construct(
        public array $updates,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            updates: array_map(
                static fn(array $u) => UpdateOrderTagInput::fromArray($u),
                $data['updates'] ?? [],
            ),
        );
    }

    public function toArray(): array
    {
        return [
            'updates' => array_map(fn($u) => $u->toArray(), $this->updates),
        ];
    }
}
