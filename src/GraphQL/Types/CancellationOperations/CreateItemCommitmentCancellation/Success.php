<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\CancellationOperations\CreateItemCommitmentCancellation;

readonly class Success extends Output
{
    public function __construct(
        public ?ItemCommitmentCancellation $itemCommitmentCancellation = null,
    ) {}

    public function getTypename(): string
    {
        return 'CreateItemCommitmentCancellationSuccess';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            itemCommitmentCancellation: isset($data['itemCommitmentCancellation'])
                ? ItemCommitmentCancellation::fromArray($data['itemCommitmentCancellation']) : null,
        );
    }
}
