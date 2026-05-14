<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\CancellationOperations\ContractCancellation\Output;

readonly class Success extends ContractCancellationOutput
{
    public function __construct(
        public ?ContractCancellation $contractCancellation,
    ) {}

    public function getTypename(): string
    {
        return 'ContractCancellationSuccess';
    }

    public static function fromArray(array $data): static
    {
        return new static(
            contractCancellation: isset($data['contractCancellation'])
                ? ContractCancellation::fromArray($data['contractCancellation'])
                : null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            '__typename' => $this->getTypename(),
            'contractCancellation' => $this->contractCancellation?->toArray(),
        ], fn($v) => $v !== null);
    }
}
