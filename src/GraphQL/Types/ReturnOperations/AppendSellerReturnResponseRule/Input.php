<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\AppendSellerReturnResponseRule;

readonly class Input
{
    public function __construct(
        public string $name,
        public string $responseStrategy,
        public ?ConditionSetInput $conditionSet = null,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            name: $data['name'],
            responseStrategy: $data['responseStrategy'],
            conditionSet: isset($data['conditionSet'])
                ? ConditionSetInput::fromArray($data['conditionSet'])
                : null,
        );
    }

    public function toArray(): array
    {
        $data = [
            'name'                 => $this->name,
            'responseStrategy' => $this->responseStrategy,
        ];
        if ($this->conditionSet !== null) {
            $data['conditionSet'] = $this->conditionSet->toArray();
        }
        return $data;
    }
}
