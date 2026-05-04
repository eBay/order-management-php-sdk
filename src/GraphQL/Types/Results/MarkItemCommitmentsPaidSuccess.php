<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\Results;

readonly class MarkItemCommitmentsPaidSuccess extends MarkItemCommitmentsPaidOutput
{
    /**
     * @param array<array{itemCommitmentId: string}> $markPaidItemCommitments
     */
    public function __construct(
        public array $markPaidItemCommitments = [],
    ) {}

    public function getTypename(): string
    {
        return 'MarkItemCommitmentsPaidSuccess';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            markPaidItemCommitments: $data['markPaidItemCommitments'] ?? [],
        );
    }
}
