<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\UpdateSellerReturnRuleStatus;

readonly class StatusUpdateBlockedError extends Output
{
    public function __construct(
        public ?string $errorCode = null,
        public ?string $errorMessage = null,
        public ?string $requestedRuleId = null,
    ) {}

    public function getTypename(): string
    {
        return 'ReturnRuleStatusUpdateBlockedError';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            errorCode:       $data['errorCode'] ?? null,
            errorMessage:    $data['errorMessage'] ?? null,
            requestedRuleId: $data['requestedRuleId'] ?? null,
        );
    }
}
