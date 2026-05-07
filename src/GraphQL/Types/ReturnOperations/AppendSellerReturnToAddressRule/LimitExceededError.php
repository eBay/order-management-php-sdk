<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\AppendSellerReturnToAddressRule;

readonly class LimitExceededError extends Output
{
    public function __construct(
        public ?string $errorCode = null,
        public ?string $errorMessage = null,
        public ?int $maxAllowed = null,
    ) {}

    public function getTypename(): string
    {
        return 'ReturnRuleLimitExceededError';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            errorCode:    $data['errorCode'] ?? null,
            errorMessage: $data['errorMessage'] ?? null,
            maxAllowed:   $data['maxAllowed'] ?? null,
        );
    }
}
