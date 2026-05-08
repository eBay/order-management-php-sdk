<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\AttachReturnShipmentLabel;

readonly class ReturnShipmentLabelInput
{
    public function __construct(
        public string $documentId,
        public ReturnShippingCarrierInput $shippingCarrier,
        public ?string $trackingNumber = null,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            documentId: $data['documentId'],
            shippingCarrier: ReturnShippingCarrierInput::fromArray($data['shippingCarrier']),
            trackingNumber: $data['trackingNumber'] ?? null,
        );
    }

    public function toArray(): array
    {
        $data = [
            'documentId'      => $this->documentId,
            'shippingCarrier' => $this->shippingCarrier->toArray(),
        ];
        if ($this->trackingNumber !== null) {
            $data['trackingNumber'] = $this->trackingNumber;
        }
        return $data;
    }
}
