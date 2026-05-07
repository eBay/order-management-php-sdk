<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\RecordReturnLabelSentOffline;

readonly class ReturnShippingCarrierNameViolation extends Violation
{
    public function __construct(
        public ?string $code = null,
        public ?string $displayMessage = null,
        public ?bool $containsInvalidCharacters = null,
        public ?bool $exceededLength = null,
        public ?TrackingNumberConstraint $constraint = null,
    ) {}

    public function getTypename(): string
    {
        return 'ReturnShippingCarrierNameViolation';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            code:                    $data['code'] ?? null,
            displayMessage:          $data['displayMessage'] ?? null,
            containsInvalidCharacters: $data['containsInvalidCharacters'] ?? null,
            exceededLength:          $data['exceededLength'] ?? null,
            constraint:              isset($data['constraint'])
                ? TrackingNumberConstraint::fromArray($data['constraint'])
                : null,
        );
    }
}
