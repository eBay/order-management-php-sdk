<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\OrderReturn;

readonly class ReturnOffer
{
    public function __construct(
        public ?ReturnOfferStatus $status = null,
        /** @var ProposedTerm[] */
        public array $proposedTerm = [],
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            status:       isset($data['status'])
                ? ReturnOfferStatus::fromArray($data['status'])
                : null,
            proposedTerm: array_map(
                fn(array $t) => ProposedTerm::fromArray($t),
                $data['proposedTerm'] ?? []
            ),
        );
    }
}
