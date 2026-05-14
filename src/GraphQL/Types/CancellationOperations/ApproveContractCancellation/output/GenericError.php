<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\CancellationOperations\ApproveContractCancellation\Output;

final class GenericError extends ApproveContractCancellationOutput
{
    public function __construct(
        public readonly ?string $errorCode = null,
        public readonly ?string $errorMessage = null,
        public readonly ?string $typename = null,
    ) {
    }

    public function getTypename(): string
    {
        return $this->typename ?? '';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            errorCode: $data['errorCode'] ?? null,
            errorMessage: $data['errorMessage'] ?? null,
            typename: $data['__typename'] ?? null,
        );
    }
}
