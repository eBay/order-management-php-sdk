<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\CancellationOperations\ApproveContractCancellation;

readonly class ContractCancellation
{
    public function __construct(
        public ?string $__typename = null,
        public ?string $cancellationId = null,
        public ?CancellationStatus $status = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            __typename:     $data['__typename'] ?? null,
            cancellationId: $data['cancellationId'] ?? null,
            status:         isset($data['status'])
                ? CancellationStatus::fromArray($data['status'])
                : null,
        );
    }
}
