<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\CancellationOperations\SellerContractCancellations\Output;

final class Success extends SellerContractCancellationsOutput
{
    /**
     * @param ContractCancellation[] $contractCancellations
     */
    public function __construct(
        public readonly array $contractCancellations = [],
        public readonly ?Pagination $pagination = null,
    ) {
    }

    public function getTypename(): string
    {
        return 'SellerContractCancellationsSuccess';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            contractCancellations: array_map(
                static fn($c) => ContractCancellation::fromArray($c),
                $data['contractCancellations'] ?? []
            ),
            pagination: isset($data['pagination']) ? Pagination::fromArray($data['pagination']) : null,
        );
    }
}
