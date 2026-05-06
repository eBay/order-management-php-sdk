<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\Results;

readonly class ContractCancellationSuccess extends ContractCancellationOutput
{
    public function __construct(
        public ?CancellationDetail $contractCancellation = null,
    ) {}

    public function getTypename(): string
    {
        return 'ContractCancellationSuccess';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            contractCancellation: isset($data['contractCancellation'])
                ? CancellationDetail::fromArray($data['contractCancellation'])
                : null,
        );
    }
}
