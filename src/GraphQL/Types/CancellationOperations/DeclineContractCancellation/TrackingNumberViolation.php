<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\CancellationOperations\DeclineContractCancellation;

readonly class TrackingNumberViolation extends Violation
{
    public function __construct(
        public ?string $code = null,
        public ?string $displayMessage = null,
        public ?StringConstraint $constraint = null,
        public ?bool $exceededLength = null,
        public ?bool $containsInvalidCharacters = null,
    ) {}

    public function getTypename(): string
    {
        return 'CancellationTrackingNumberViolation';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            code: $data['code'] ?? null,
            displayMessage: $data['displayMessage'] ?? null,
            constraint: isset($data['constraint'])
                ? StringConstraint::fromArray($data['constraint']) : null,
            exceededLength: isset($data['exceededLength']) ? (bool) $data['exceededLength'] : null,
            containsInvalidCharacters: isset($data['containsInvalidCharacters'])
                ? (bool) $data['containsInvalidCharacters'] : null,
        );
    }
}
