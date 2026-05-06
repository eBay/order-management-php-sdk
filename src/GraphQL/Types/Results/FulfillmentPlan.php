<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\Results;

readonly class FulfillmentPlan
{
    /**
     * @param LogisticsStep[] $logisticsPlanSteps
     */
    public function __construct(
        public ?string $planType = null,
        public array $logisticsPlanSteps = [],
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            planType:           $data['planType'] ?? null,
            logisticsPlanSteps: array_map(
                static fn(array $s) => LogisticsStep::fromArray($s),
                $data['logisticsPlanSteps'] ?? []
            ),
        );
    }
}
