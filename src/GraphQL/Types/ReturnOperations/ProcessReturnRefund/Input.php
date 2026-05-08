<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\ProcessReturnRefund;

readonly class Input
{
    public function __construct(
        public string $returnId,
        /** @var string[] */
        public array $returnLineItemIds = [],
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            returnId: $data['returnId'],
            returnLineItemIds: $data['returnLineItemIds'] ?? [],
        );
    }

    public function toArray(): array
    {
        return [
            'returnId'          => $this->returnId,
            'returnLineItemIds' => $this->returnLineItemIds,
        ];
    }
}
