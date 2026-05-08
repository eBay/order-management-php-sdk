<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\CreateInStoreReturn;

readonly class Input
{
    public function __construct(
        /** @var CreateReturnLineItemInput[] */
        public array $returnLineItemInput,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            returnLineItemInput: array_map(
                fn(array $i) => CreateReturnLineItemInput::fromArray($i),
                $data['returnLineItemInput'],
            ),
        );
    }

    public function toArray(): array
    {
        return [
            'returnLineItemInput' => array_map(fn(CreateReturnLineItemInput $i) => $i->toArray(), $this->returnLineItemInput),
        ];
    }
}
