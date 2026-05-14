<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\CancellationOperations\CreateItemCommitmentCancellation\Output;

abstract class CreateItemCommitmentCancellationOutput
{
    abstract public function getTypename(): string;

    public static function fromArray(array $data): static
    {
        return match ($data['__typename'] ?? '') {
            'CreateItemCommitmentCancellationSuccess' => Success::fromArray($data),
            'ItemCommitmentCancellationEligibilityError' => EligibilityError::fromArray($data),
            'ItemCommitmentNotFoundError' => NotFoundError::fromArray($data),
            default => throw new \UnexpectedValueException(
                'Unknown __typename: ' . ($data['__typename'] ?? '(missing)')
            ),
        };
    }
}
