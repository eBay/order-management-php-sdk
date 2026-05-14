<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\CancellationOperations\SellerContractCancellations\Input;

final class FilterInput
{
    /**
     * @param string[] $statuses
     */
    public function __construct(
        public readonly ?DateTimeRangeInput $createdBetween = null,
        public readonly array $statuses = ['AWAITING_ACTION_FROM_SELLER'],
    ) {
    }

    public static function fromArray(array $data): self
    {
        return new self(
            createdBetween: isset($data['createdBetween']) ? DateTimeRangeInput::fromArray($data['createdBetween']) : null,
            statuses: $data['statuses'] ?? ['AWAITING_ACTION_FROM_SELLER'],
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'createdBetween' => $this->createdBetween?->toArray(),
            'statuses' => $this->statuses,
        ], static fn($v) => $v !== null);
    }
}
