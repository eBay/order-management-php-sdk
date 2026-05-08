<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\AppendSellerReturnToAddressRule;

readonly class Input
{
    public function __construct(
        public string $name,
        public string $addressRoutingStrategyCode,
        public ?string $returnAddressId = null,
        public ?ConditionSetInput $conditionSet = null,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            name: $data['name'],
            addressRoutingStrategyCode: $data['addressRoutingStrategyCode'],
            returnAddressId: $data['returnAddressId'] ?? null,
            conditionSet: isset($data['conditionSet'])
                ? ConditionSetInput::fromArray($data['conditionSet'])
                : null,
        );
    }

    public function toArray(): array
    {
        $data = [
            'name'                      => $this->name,
            'addressRoutingStrategyCode' => $this->addressRoutingStrategyCode,
        ];
        if ($this->returnAddressId !== null) {
            $data['returnAddressId'] = $this->returnAddressId;
        }
        if ($this->conditionSet !== null) {
            $data['conditionSet'] = $this->conditionSet->toArray();
        }
        return $data;
    }
}
