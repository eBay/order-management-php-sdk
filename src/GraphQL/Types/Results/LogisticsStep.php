<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\Results;

readonly class LogisticsStep
{
    public function __construct(
        public ?DisplayableId $methodName = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            methodName: isset($data['methodName'])
                ? DisplayableId::fromArray($data['methodName'])
                : null,
        );
    }
}
