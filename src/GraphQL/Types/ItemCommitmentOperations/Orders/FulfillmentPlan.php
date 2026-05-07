<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\Orders;

readonly class FulfillmentPlan
{
    /**
     * @param LogisticsPlanStep[] $logisticsPlanSteps
     */
    public function __construct(
        public ?string $planType = null,
        public array $logisticsPlanSteps = [],
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            planType: $data['planType'] ?? null,
            logisticsPlanSteps: array_map(
                fn(array $s) => LogisticsPlanStep::fromArray($s),
                $data['logisticsPlanSteps'] ?? []
            ),
        );
    }
}
