<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\CreateInStoreReturn;

readonly class MultipleLineItemReturnNotSupportedError extends Output
{
    public function __construct(
        public ?string $errorCode = null,
        public ?int $maxAllowed = null,
    ) {}

    public function getTypename(): string
    {
        return 'MultipleLineItemReturnNotSupportedError';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            errorCode:  $data['errorCode'] ?? null,
            maxAllowed: isset($data['maxAllowed']) ? (int)$data['maxAllowed'] : null,
        );
    }
}
