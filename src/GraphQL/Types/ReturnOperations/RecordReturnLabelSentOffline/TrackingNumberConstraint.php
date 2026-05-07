<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\RecordReturnLabelSentOffline;

readonly class TrackingNumberConstraint
{
    public function __construct(
        public ?CharacterLimit $characterLimit = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            characterLimit: isset($data['characterLimit'])
                ? CharacterLimit::fromArray($data['characterLimit'])
                : null,
        );
    }
}
