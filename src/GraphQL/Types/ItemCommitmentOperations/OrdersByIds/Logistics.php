<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\OrdersByIds;

readonly class Logistics
{
    public function __construct(
        public ?FulfillmentPlan $fulfillmentPlan = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            fulfillmentPlan: isset($data['fulfillmentPlan'])
                ? FulfillmentPlan::fromArray($data['fulfillmentPlan'])
                : null,
        );
    }
}
