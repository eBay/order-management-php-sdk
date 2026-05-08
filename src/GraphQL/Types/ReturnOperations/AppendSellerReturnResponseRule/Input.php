<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\AppendSellerReturnResponseRule;

readonly class Input
{
    public function __construct(
        public string $name,
        public string $responseStrategyCode,
        public ?ConditionSetInput $conditionSet = null,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            name: $data['name'],
            responseStrategyCode: $data['responseStrategyCode'],
            conditionSet: isset($data['conditionSet'])
                ? ConditionSetInput::fromArray($data['conditionSet'])
                : null,
        );
    }

    public function toArray(): array
    {
        $data = [
            'name'                 => $this->name,
            'responseStrategyCode' => $this->responseStrategyCode,
        ];
        if ($this->conditionSet !== null) {
            $data['conditionSet'] = $this->conditionSet->toArray();
        }
        return $data;
    }
}
