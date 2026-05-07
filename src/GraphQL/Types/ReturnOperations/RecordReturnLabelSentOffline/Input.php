<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\RecordReturnLabelSentOffline;

readonly class Input
{
    public function __construct(
        public string $returnId,
        public ?string $carrierName = null,
        public ?string $trackingNumber = null,
    ) {}

    public function toArray(): array
    {
        $arr = ['returnId' => $this->returnId];
        if ($this->carrierName !== null) {
            $arr['carrierName'] = $this->carrierName;
        }
        if ($this->trackingNumber !== null) {
            $arr['trackingNumber'] = $this->trackingNumber;
        }
        return $arr;
    }
}
