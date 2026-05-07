<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\SendReturnMessage;

readonly class ReturnNoteViolation extends Violation
{
    public function __construct(
        public ?string $code = null,
        public ?string $displayMessage = null,
        public ?bool $exceededLength = null,
        public ?NoteConstraint $constraint = null,
    ) {}

    public function getTypename(): string
    {
        return 'ReturnNoteViolation';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            code:           $data['code'] ?? null,
            displayMessage: $data['displayMessage'] ?? null,
            exceededLength: $data['exceededLength'] ?? null,
            constraint:     isset($data['constraint'])
                ? NoteConstraint::fromArray($data['constraint'])
                : null,
        );
    }
}
