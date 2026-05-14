<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\CancellationOperations\ApproveContractCancellation\Output;

final class ActionNotPermittedError extends ApproveContractCancellationOutput
{
    /**
     * @param AvailableAction[] $availableActions
     */
    public function __construct(
        public readonly ?string $errorCode = null,
        public readonly ?string $errorMessage = null,
        public readonly array $availableActions = [],
    ) {
    }

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
                fn(array $a) => AvailableAction::fromArray($a),
                $data['availableActions'] ?? [],
            ),
        );
    }
}
