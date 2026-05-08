<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\PurchaseQuoteOperations\BulkUpdatePurchaseQuotes;

readonly class Input
{
    /**
     * @param UpdatePurchaseQuoteInput[] $updates
     */
    public function __construct(
        public array $updates,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            updates: array_map(fn(array $u) => UpdatePurchaseQuoteInput::fromArray($u), $data['updates']),
        );
    }

    public function toArray(): array
    {
        return [
            'updates' => array_map(fn(UpdatePurchaseQuoteInput $u) => $u->toArray(), $this->updates),
        ];
    }
}
