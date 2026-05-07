<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\OrderLineItemsByIds;

readonly class Failure
{
    public function __construct(
        public ?string $errorCode = null,
        public ?string $displayMessage = null,
        public ?string $inputLineItemId = null,
        public ?bool $retryable = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            errorCode: $data['errorCode'] ?? null,
            displayMessage: $data['displayMessage'] ?? null,
            inputLineItemId: $data['inputLineItemId'] ?? null,
            retryable: isset($data['retryable']) ? (bool) $data['retryable'] : null,
        );
    }
}
