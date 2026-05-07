<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\CancellationOperations\ContractCancellation;

abstract readonly class Output
{
    abstract public function getTypename(): string;

    public static function fromArray(array $data): self
    {
        return match ($data['__typename'] ?? null) {
            'ContractCancellationSuccess' => Success::fromArray($data),
            'ContractCancellationNotFoundError' => NotFoundError::fromArray($data),
            default => throw new \UnexpectedValueException('Unknown __typename: ' . ($data['__typename'] ?? 'null')),
        };
    }
}
