<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\Results;

readonly class SellerContractCancellationsSuccess extends SellerContractCancellationsOutput
{
    /**
     * @param CancellationData[] $contractCancellations
     */
    public function __construct(
        public array $contractCancellations = [],
        public ?PaginationOutput $pagination = null,
    ) {}

    public function getTypename(): string
    {
        return 'SellerContractCancellationsSuccess';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            contractCancellations: array_map(
                static fn(array $c) => CancellationData::fromArray($c),
                $data['contractCancellations'] ?? []
            ),
            pagination: isset($data['pagination'])
                ? PaginationOutput::fromArray($data['pagination'])
                : null,
        );
    }
}
