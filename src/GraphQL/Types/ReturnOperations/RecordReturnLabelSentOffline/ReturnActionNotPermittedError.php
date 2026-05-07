<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\RecordReturnLabelSentOffline;

readonly class ReturnActionNotPermittedError extends Output
{
    public function __construct(
        public ?string $errorCode = null,
        public ?string $errorMessage = null,
        /** @var AvailableAction[] */
        public array $availableActions = [],
    ) {}

    public function getTypename(): string
    {
        return 'ReturnActionNotPermittedError';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            errorCode:       $data['errorCode'] ?? null,
            errorMessage:    $data['errorMessage'] ?? null,
            availableActions: array_map(
                fn(array $a) => AvailableAction::fromArray($a),
                $data['availableActions'] ?? []
            ),
        );
    }
}
