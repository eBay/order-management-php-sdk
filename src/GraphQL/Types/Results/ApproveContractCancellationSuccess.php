<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\Results;

readonly class ApproveContractCancellationSuccess extends ApproveContractCancellationOutput
{
    public function __construct(
        public ?CancellationData $contractCancellation = null,
    ) {}

    public function getTypename(): string
    {
        return 'ApproveContractCancellationSuccess';
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
