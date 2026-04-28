<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\Results;

readonly class CreateItemCommitmentCancellationSuccess extends CreateItemCommitmentCancellationOutput
{
    public function __construct(
        public ?CancellationData $itemCommitmentCancellation = null,
    ) {}

    public function getTypename(): string
    {
        return 'CreateItemCommitmentCancellationSuccess';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            itemCommitmentCancellation: isset($data['itemCommitmentCancellation'])
                ? CancellationData::fromArray($data['itemCommitmentCancellation'])
                : null,
        );
    }
}
