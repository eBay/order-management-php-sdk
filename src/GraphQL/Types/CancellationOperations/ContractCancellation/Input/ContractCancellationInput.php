<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\CancellationOperations\ContractCancellation\Input;

readonly class ContractCancellationInput
{
    public function __construct(public string $cancellationId) {}

    public static function fromArray(array $data): static
    {
        return new static(cancellationId: $data['cancellationId']);
    }

    public function toArray(): array
    {
        return ['cancellationId' => $this->cancellationId];
    }
}
