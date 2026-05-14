<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\CancellationOperations\DeclineContractCancellation\Output;

final readonly class ValidationError extends DeclineContractCancellationOutput
{
    /**
     * @param Violation[] $violations
     */
    public function __construct(
        public ?string $errorCode = null,
        public ?string $errorMessage = null,
        public array $violations = [],
    ) {}

    public function getTypename(): string
    {
        return 'DeclineCancellationInputValidationError';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            errorCode: $data['errorCode'] ?? null,
            errorMessage: $data['errorMessage'] ?? null,
            violations: array_map(static fn($v) => Violation::fromArray($v), $data['violations'] ?? []),
        );
    }
}
