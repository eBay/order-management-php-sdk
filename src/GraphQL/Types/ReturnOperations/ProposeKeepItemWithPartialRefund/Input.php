<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\ProposeKeepItemWithPartialRefund;

readonly class Input
{
    public function __construct(
        public string $returnId,
        /** @var KeepItemPartialRefundTermInput[] */
        public array $keepItemPartialRefundTerms,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            returnId: $data['returnId'],
            keepItemPartialRefundTerms: array_map(
                fn(array $t) => KeepItemPartialRefundTermInput::fromArray($t),
                $data['keepItemPartialRefundTerms'],
            ),
        );
    }

    public function toArray(): array
    {
        return [
            'returnId'                   => $this->returnId,
            'keepItemPartialRefundTerms' => array_map(fn(KeepItemPartialRefundTermInput $t) => $t->toArray(), $this->keepItemPartialRefundTerms),
        ];
    }
}
