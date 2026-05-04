<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\Results;

abstract readonly class MarkOrdersPaidOutput
{
    abstract public function getTypename(): string;

    public static function fromArray(array $data): MarkOrdersPaidSuccess|MarkOrdersPaidPartialFailure|MarkOrdersPaidCompleteFailure
    {
        return match ($data['__typename'] ?? null) {
            'MarkOrdersPaidSuccess'        => MarkOrdersPaidSuccess::fromArray($data),
            'MarkOrdersPaidPartialFailure' => MarkOrdersPaidPartialFailure::fromArray($data),
            'MarkOrdersPaidCompleteFailure' => MarkOrdersPaidCompleteFailure::fromArray($data),
            default => throw new \UnexpectedValueException(
                'Unknown __typename: ' . ($data['__typename'] ?? 'null')
            ),
        };
    }
}
