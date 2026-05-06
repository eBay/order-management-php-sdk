<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\Results;

readonly class OrderStateData
{
    public function __construct(
        public ?string $__typename = null,
        public ?string $label = null,
        public ?FundingStateData $fundingState = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            __typename:   $data['__typename'] ?? null,
            label:        $data['label'] ?? null,
            fundingState: isset($data['fundingState'])
                ? FundingStateData::fromArray($data['fundingState'])
                : null,
        );
    }
}
