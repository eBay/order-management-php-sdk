<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\CancellationOperations\ApproveContractCancellation\Input;

final class ApproveContractCancellationInput
{
    public function __construct(
        public readonly string $cancellationId,
        public readonly bool $relistAllItems = false,
    ) {
    }

    public static function fromArray(array $data): self
    {
        return new self(
            cancellationId: (string) $data['cancellationId'],
            relistAllItems: (bool) ($data['relistAllItems'] ?? false),
        );
    }

    public function toArray(): array
    {
        return array_filter(
            [
                'cancellationId' => $this->cancellationId,
                'relistAllItems' => $this->relistAllItems,
            ],
            fn($v) => $v !== null,
        );
    }
}
