<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\BulkUpdateOrderTags;

readonly class UpdateOrderError
{
    public function __construct(
        public ?string $displayMessage = null,
        public ?string $errorCode = null,
        public ?string $inputOrderId = null,
        public ?bool $retryable = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            displayMessage: $data['displayMessage'] ?? null,
            errorCode: $data['errorCode'] ?? null,
            inputOrderId: $data['inputOrderId'] ?? null,
            retryable: isset($data['retryable']) ? (bool)$data['retryable'] : null,
        );
    }
}
