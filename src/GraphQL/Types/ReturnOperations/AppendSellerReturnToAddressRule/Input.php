<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\AppendSellerReturnToAddressRule;

readonly class Input
{
    public function __construct(
        public string $name,
        public AddressRouteInput $addressRoute,
        public ?ConditionSetInput $conditionSet = null,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            name:         $data['name'],
            addressRoute: AddressRouteInput::fromArray($data['addressRoute']),
            conditionSet: isset($data['conditionSet'])
                ? ConditionSetInput::fromArray($data['conditionSet'])
                : null,
        );
    }

    public function toArray(): array
    {
        $data = [
            'name'         => $this->name,
            'addressRoute' => $this->addressRoute->toArray(),
        ];
        if ($this->conditionSet !== null) {
            $data['conditionSet'] = $this->conditionSet->toArray();
        }
        return $data;
    }
}
