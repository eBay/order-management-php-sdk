<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\CancellationOperations\DeclineContractCancellation;

readonly class ShippedDateViolation extends Violation
{
    public function __construct(
        public ?string $code = null,
        public ?string $displayMessage = null,
        public ?DateConstraint $constraint = null,
    ) {}

    public function getTypename(): string
    {
        return 'CancellationShippedDateViolation';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            code: $data['code'] ?? null,
            displayMessage: $data['displayMessage'] ?? null,
            constraint: isset($data['constraint'])
                ? DateConstraint::fromArray($data['constraint']) : null,
        );
    }
}
