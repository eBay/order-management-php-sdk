<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\SendReturnMessage;

readonly class ReturnNotFoundError extends Output
{
    public function __construct(
        public ?string $errorCode = null,
        public ?string $errorMessage = null,
        public ?string $requestedReturnId = null,
    ) {}

    public function getTypename(): string
    {
        return 'ReturnNotFoundError';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            errorCode:         $data['errorCode'] ?? null,
            errorMessage:      $data['errorMessage'] ?? null,
            requestedReturnId: $data['requestedReturnId'] ?? null,
        );
    }
}
