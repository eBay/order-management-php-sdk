<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\AttachReturnShipmentLabel;

readonly class Input
{
    public function __construct(
        public string $returnId,
        /** @var ReturnShipmentLabelInput[] */
        public array $returnShipmentLabels,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            returnId: $data['returnId'],
            returnShipmentLabels: array_map(
                fn(array $l) => ReturnShipmentLabelInput::fromArray($l),
                $data['returnShipmentLabels'],
            ),
        );
    }

    public function toArray(): array
    {
        return [
            'returnId'             => $this->returnId,
            'returnShipmentLabels' => array_map(fn(ReturnShipmentLabelInput $l) => $l->toArray(), $this->returnShipmentLabels),
        ];
    }
}
