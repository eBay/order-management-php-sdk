<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\AttachReturnShipmentLabel;

readonly class Input
{
    public function __construct(
        public string $returnId,
        public string $documentId,
    ) {}

    public function toArray(): array
    {
        return [
            'returnId'   => $this->returnId,
            'documentId' => $this->documentId,
        ];
    }
}
