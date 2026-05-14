<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\CancellationOperations\CreateItemCommitmentCancellation\Output;

class Success extends CreateItemCommitmentCancellationOutput
{
    public ?ItemCommitmentCancellation $itemCommitmentCancellation = null;

    public function getTypename(): string
    {
        return 'CreateItemCommitmentCancellationSuccess';
    }

    public static function fromArray(array $data): static
    {
        $instance = new static();
        $instance->itemCommitmentCancellation = isset($data['itemCommitmentCancellation'])
            ? ItemCommitmentCancellation::fromArray($data['itemCommitmentCancellation'])
            : null;
        return $instance;
    }
}
