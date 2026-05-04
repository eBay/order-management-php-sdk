<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\Results;

readonly class AttachReturnShipmentLabelSuccess extends AttachReturnShipmentLabelOutput
{
    public function __construct(
        public ?string $returnId = null,
        public ?string $status = null,
        public ?string $statusDisplayText = null,
        public ?string $statusTypename = null,
    ) {}

    public function getTypename(): string
    {
        return 'OrderReturn';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            returnId:          $data['returnId'] ?? null,
            status:            $data['status']['code'] ?? null,
            statusDisplayText: $data['status']['displayText'] ?? null,
            statusTypename:    $data['status']['__typename'] ?? null,
        );
    }
}
