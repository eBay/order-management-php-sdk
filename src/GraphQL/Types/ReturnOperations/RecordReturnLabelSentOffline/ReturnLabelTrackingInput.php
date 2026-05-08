<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\RecordReturnLabelSentOffline;

readonly class ReturnLabelTrackingInput
{
    public function __construct(
        public ReturnShippingCarrierInput $shippingCarrier,
        public string $trackingNumber,
        public ?string $labelSentAt = null,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            shippingCarrier: ReturnShippingCarrierInput::fromArray($data['shippingCarrier']),
            trackingNumber: $data['trackingNumber'],
            labelSentAt: $data['labelSentAt'] ?? null,
        );
    }

    public function toArray(): array
    {
        $data = [
            'shippingCarrier' => $this->shippingCarrier->toArray(),
            'trackingNumber'  => $this->trackingNumber,
        ];
        if ($this->labelSentAt !== null) {
            $data['labelSentAt'] = $this->labelSentAt;
        }
        return $data;
    }
}
