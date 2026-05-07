<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\OrderReturn;

readonly class ReturnOffer
{
    public function __construct(
        public ?ReturnOfferStatus $status = null,
        public ?ProposedTerm $proposedTerm = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            status:       isset($data['status'])
                ? ReturnOfferStatus::fromArray($data['status'])
                : null,
            proposedTerm: isset($data['proposedTerm'])
                ? ProposedTerm::fromArray($data['proposedTerm'])
                : null,
        );
    }
}
