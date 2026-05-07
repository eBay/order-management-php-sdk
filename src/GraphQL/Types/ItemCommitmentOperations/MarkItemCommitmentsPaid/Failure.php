<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\MarkItemCommitmentsPaid;

readonly class Failure
{
    public function __construct(
        public ?string $inputItemCommitmentId = null,
        public ?string $errorCode = null,
        public ?string $displayMessage = null,
        public ?bool $retryable = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            inputItemCommitmentId: $data['inputItemCommitmentId'] ?? null,
            errorCode: $data['errorCode'] ?? null,
            displayMessage: $data['displayMessage'] ?? null,
            retryable: isset($data['retryable']) ? (bool) $data['retryable'] : null,
        );
    }
}
