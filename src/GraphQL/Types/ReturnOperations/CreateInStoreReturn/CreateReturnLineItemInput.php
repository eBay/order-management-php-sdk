<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\CreateInStoreReturn;

readonly class CreateReturnLineItemInput
{
    public function __construct(
        public string $orderLineItemId,
        public string $returnReason,
        public int $quantityReturned = 1,
        public ?string $returnNote = null,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            orderLineItemId: $data['orderLineItemId'],
            returnReason: $data['returnReason'],
            quantityReturned: (int) ($data['quantityReturned'] ?? 1),
            returnNote: $data['returnNote'] ?? null,
        );
    }

    public function toArray(): array
    {
        $data = [
            'orderLineItemId' => $this->orderLineItemId,
            'returnReason'    => $this->returnReason,
            'quantityReturned' => $this->quantityReturned,
        ];
        if ($this->returnNote !== null) {
            $data['returnNote'] = $this->returnNote;
        }
        return $data;
    }
}
