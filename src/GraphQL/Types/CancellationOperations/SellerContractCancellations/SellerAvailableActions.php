<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\CancellationOperations\SellerContractCancellations;

readonly class SellerAvailableActions
{
    /**
     * @param AvailableAction[] $primaryActions
     */
    public function __construct(
        public array $primaryActions = [],
        public ?string $responseDueAt = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            primaryActions: array_map(
                static fn(array $a) => AvailableAction::fromArray($a),
                $data['primaryActions'] ?? [],
            ),
            responseDueAt: $data['responseDueAt'] ?? null,
        );
    }
}
