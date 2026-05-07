<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\MarkItemCommitmentsPaid;

readonly class PartialFailure extends Output
{
    /**
     * @param MarkedItemCommitment[] $markPaidItemCommitments
     * @param Failure[] $failures
     */
    public function __construct(
        public ?string $errorCode = null,
        public ?string $errorMessage = null,
        public array $markPaidItemCommitments = [],
        public array $failures = [],
    ) {}

    public function getTypename(): string
    {
        return 'MarkItemCommitmentsPaidPartialFailure';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            errorCode: $data['errorCode'] ?? null,
            errorMessage: $data['errorMessage'] ?? null,
            markPaidItemCommitments: array_map(
                fn(array $ic) => MarkedItemCommitment::fromArray($ic),
                $data['markPaidItemCommitments'] ?? []
            ),
            failures: array_map(
                fn(array $f) => Failure::fromArray($f),
                $data['failures'] ?? []
            ),
        );
    }
}
