<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\MarkItemCommitmentsPaid;

readonly class Success extends Output
{
    /**
     * @param MarkedItemCommitment[] $markPaidItemCommitments
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
            markPaidItemCommitments: array_map(
                fn(array $ic) => MarkedItemCommitment::fromArray($ic),
                $data['markPaidItemCommitments'] ?? []
            ),
        );
    }
}
