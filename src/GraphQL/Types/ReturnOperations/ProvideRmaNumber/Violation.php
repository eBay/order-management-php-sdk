<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\ProvideRmaNumber;

abstract readonly class Violation
{
    abstract public function getTypename(): string;

    public static function fromArray(array $data): self
    {
        return match ($data['__typename'] ?? null) {
            'ReturnRmaNumberViolation' => ReturnRmaNumberViolation::fromArray($data),
            default                   => GenericViolation::fromArray($data),
        };
    }
}
