<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\ItemCommitments\Output;

readonly class CancellationRef
{
    /**
     * @param CancellationLineItem[] $lineItems
     */
    public function __construct(
        public ?string $cancellationId = null,
        public array $lineItems = [],
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            cancellationId: $data['cancellationId'] ?? null,
            lineItems: array_map(
                static fn(array $li) => CancellationLineItem::fromArray($li),
                $data['lineItems'] ?? [],
            ),
        );
    }
}
