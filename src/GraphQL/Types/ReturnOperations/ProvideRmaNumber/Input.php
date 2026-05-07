<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\ProvideRmaNumber;

readonly class Input
{
    public function __construct(
        public string $returnId,
        public string $rmaNumber,
    ) {}

    public function toArray(): array
    {
        return [
            'returnId'  => $this->returnId,
            'rmaNumber' => $this->rmaNumber,
        ];
    }
}
