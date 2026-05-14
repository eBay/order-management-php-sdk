<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\CancellationOperations\ApproveContractCancellation\Output;

final class Success extends ApproveContractCancellationOutput
{
    public function __construct(
        public readonly ?ContractCancellation $contractCancellation = null,
    ) {
    }

    public function getTypename(): string
    {
        return 'ApproveContractCancellationSuccess';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            contractCancellation: isset($data['contractCancellation'])
                ? ContractCancellation::fromArray($data['contractCancellation'])
                : null,
        );
    }
}
