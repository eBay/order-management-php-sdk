<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\AttachReturnShipmentLabel;

readonly class ReturnShipmentLabelNotFoundError extends Output
{
    public function __construct(
        public ?string $errorCode = null,
        public ?string $errorMessage = null,
        public ?string $requestedDocumentId = null,
    ) {}

    public function getTypename(): string
    {
        return 'ReturnShipmentLabelNotFoundError';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            errorCode:           $data['errorCode'] ?? null,
            errorMessage:        $data['errorMessage'] ?? null,
            requestedDocumentId: $data['requestedDocumentId'] ?? null,
        );
    }
}
