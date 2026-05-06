<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\Results;

readonly class PurchaseLogistics
{
    /**
     * @param FulfillmentPlan[] $fulfillmentPlan
     */
    public function __construct(
        public array $fulfillmentPlan = [],
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            fulfillmentPlan: array_map(
                static fn(array $p) => FulfillmentPlan::fromArray($p),
                $data['fulfillmentPlan'] ?? []
            ),
        );
    }
}
