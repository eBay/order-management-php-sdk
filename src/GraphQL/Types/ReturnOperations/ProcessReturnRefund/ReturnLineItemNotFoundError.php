<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\ProcessReturnRefund;

readonly class ReturnLineItemNotFoundError extends Output
{
    public function __construct(
        public ?string $errorCode = null,
        public ?string $errorMessage = null,
        /** @var string[] */
        public array $requestedLineItemIds = [],
    ) {}

    public function getTypename(): string
    {
        return 'ReturnLineItemNotFoundError';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            errorCode:            $data['errorCode'] ?? null,
            errorMessage:         $data['errorMessage'] ?? null,
            requestedLineItemIds: $data['requestedLineItemIds'] ?? [],
        );
    }
}
