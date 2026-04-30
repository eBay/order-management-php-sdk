<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\Results;

readonly class GraphQLError
{
    public function __construct(
        public ?string $errorCode = null,
        public ?string $displayMessage = null,
        public ?string $inputOrderId = null,
        public ?string $inputLineItemId = null,
        public ?string $inputItemCommitmentId = null,
        public ?string $inputPurchaseQuoteId = null,
        public ?bool   $retryable = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            errorCode:             $data['errorCode'] ?? null,
            displayMessage:        $data['displayMessage'] ?? null,
            inputOrderId:          $data['inputOrderId'] ?? null,
            inputLineItemId:       $data['inputLineItemId'] ?? null,
            inputItemCommitmentId: $data['inputItemCommitmentId'] ?? null,
            inputPurchaseQuoteId:  $data['inputPurchaseQuoteId'] ?? null,
            retryable:             isset($data['retryable']) ? (bool) $data['retryable'] : null,
        );
    }
}
