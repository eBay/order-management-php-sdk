<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\Results;

readonly class DeclineContractCancellationSuccess extends DeclineContractCancellationOutput
{
    public function __construct(
        public ?CancellationData $contractCancellation = null,
    ) {}

    public function getTypename(): string
    {
        return 'DeclineContractCancellationSuccess';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            contractCancellation: isset($data['contractCancellation'])
                ? CancellationData::fromArray($data['contractCancellation'])
                : null,
        );
    }
}
