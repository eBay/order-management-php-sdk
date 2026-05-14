<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\CancellationOperations\DeclineContractCancellation\Output;

final readonly class StringConstraint
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
