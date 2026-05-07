<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\CancellationOperations\ContractCancellation;

readonly class Success extends Output
{
    public function __construct(
        public ?ContractCancellation $contractCancellation = null,
    ) {}

    public function getTypename(): string
    {
        return 'ContractCancellationSuccess';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            contractCancellation: isset($data['contractCancellation'])
                ? ContractCancellation::fromArray($data['contractCancellation']) : null,
        );
    }
}
