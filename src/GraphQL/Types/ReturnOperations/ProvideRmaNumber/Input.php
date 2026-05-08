<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\ProvideRmaNumber;

readonly class Input
{
    public function __construct(
        public string $returnId,
        public ?string $rmaNumber = null,
        public bool $rmaRequirementWaived = false,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            returnId: $data['returnId'],
            rmaNumber: $data['rmaNumber'] ?? null,
            rmaRequirementWaived: (bool) ($data['rmaRequirementWaived'] ?? false),
        );
    }

    public function toArray(): array
    {
        $data = [
            'returnId'             => $this->returnId,
            'rmaRequirementWaived' => $this->rmaRequirementWaived,
        ];
        if ($this->rmaNumber !== null) {
            $data['rmaNumber'] = $this->rmaNumber;
        }
        return $data;
    }
}
