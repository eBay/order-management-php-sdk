<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\ItemCommitments;

readonly class Output
{
    public function __construct(
        public ?BuyerItemCommitments $buyerItemCommitments = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            buyerItemCommitments: isset($data['buyerItemCommitments'])
                ? BuyerItemCommitments::fromArray($data['buyerItemCommitments'])
                : null,
        );
    }
}
