<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\Orders;

readonly class OrderState
{
    public function __construct(
        private string $typename,
        public ?string $label = null,
        public ?FundingState $fundingState = null,
    ) {}

    public function getTypename(): string
    {
        return $this->typename;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            typename: $data['__typename'] ?? 'Unknown',
            label: $data['label'] ?? null,
            fundingState: isset($data['fundingState']) ? FundingState::fromArray($data['fundingState']) : null,
        );
    }
}
