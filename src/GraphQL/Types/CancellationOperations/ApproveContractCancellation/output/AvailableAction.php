<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\CancellationOperations\ApproveContractCancellation\Output;

final class AvailableAction
{
    public function __construct(
        public readonly ?string $code = null,
        public readonly ?string $displayText = null,
    ) {
    }

    public static function fromArray(array $data): self
    {
        return new self(
            code: $data['code'] ?? null,
            displayText: $data['displayText'] ?? null,
        );
    }
}
