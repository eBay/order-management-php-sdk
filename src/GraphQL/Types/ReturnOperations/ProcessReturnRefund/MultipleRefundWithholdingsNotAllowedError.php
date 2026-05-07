<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\ProcessReturnRefund;

readonly class MultipleRefundWithholdingsNotAllowedError extends Output
{
    public function __construct(
        public ?string $errorCode = null,
        public ?string $errorMessage = null,
        public ?int $maxAllowed = null,
        public ?int $providedCount = null,
    ) {}

    public function getTypename(): string
    {
        return 'MultipleRefundWithholdingsNotAllowedError';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            errorCode:     $data['errorCode'] ?? null,
            errorMessage:  $data['errorMessage'] ?? null,
            maxAllowed:    isset($data['maxAllowed']) ? (int) $data['maxAllowed'] : null,
            providedCount: isset($data['providedCount']) ? (int) $data['providedCount'] : null,
        );
    }
}
