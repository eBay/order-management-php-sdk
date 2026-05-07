<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\Orders;

readonly class LogisticsPlanStep
{
    public function __construct(
        public ?MethodName $methodName = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            methodName: isset($data['methodName']) ? MethodName::fromArray($data['methodName']) : null,
        );
    }
}
