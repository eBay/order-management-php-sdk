<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\SellerOrderReturns;

readonly class OrderReturnFilterInput
{
    public function __construct(
        public string $presets = 'AWAITING_ACTION_FROM_SELLER',
        public ?DateTimeRangeInput $dateRange = null,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            presets: $data['presets'] ?? 'AWAITING_ACTION_FROM_SELLER',
            dateRange: isset($data['dateRange'])
                ? DateTimeRangeInput::fromArray($data['dateRange'])
                : null,
        );
    }

    public function toArray(): array
    {
        $data = ['presets' => $this->presets];
        if ($this->dateRange !== null) {
            $data['dateRange'] = $this->dateRange->toArray();
        }
        return $data;
    }
}
