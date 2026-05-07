<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\CancellationOperations\DeclineContractCancellation;

readonly class ActionNotPermittedError extends Output
{
    /**
     * @param AvailableAction[] $availableActions
     */
    public function __construct(
        public ?string $errorCode = null,
        public ?string $errorMessage = null,
        public array $availableActions = [],
    ) {}

    public function getTypename(): string
    {
        return 'ContractCancellationActionNotPermittedError';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            errorCode: $data['errorCode'] ?? null,
            errorMessage: $data['errorMessage'] ?? null,
            availableActions: array_map(
                static fn(array $a) => AvailableAction::fromArray($a),
                $data['availableActions'] ?? [],
            ),
        );
    }
}
