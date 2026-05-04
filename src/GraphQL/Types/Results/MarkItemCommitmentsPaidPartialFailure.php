<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\Results;

readonly class MarkItemCommitmentsPaidPartialFailure extends MarkItemCommitmentsPaidOutput
{
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
            errorCode:               $data['errorCode'] ?? null,
            errorMessage:            $data['errorMessage'] ?? null,
            markPaidItemCommitments: $data['markPaidItemCommitments'] ?? [],
            failures:                $data['failures'] ?? [],
        );
    }
}
