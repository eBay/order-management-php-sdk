<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\Results;

readonly class OrderInquiryData
{
    public function __construct(
        public ?string $inquiryId = null,
        public ?string $__typename = null,
        public ?string $status = null,
        public ?string $statusDisplayText = null,
        public ?string $statusTypename = null,
        public ?string $createdAt = null,
        public ?string $closedAt = null,
        public ?string $initiator = null,
        public ?string $responder = null,
        /** @var string[] */
        public array   $inquirers = [],
        /** @var array[] */
        public array   $lineItems = [],
        public ?array  $sellerAvailableActions = null,
        public ?array  $requestedInformation = null,
        public ?array  $providedInformation = null,
        /** @var array[] */
        public array   $cases = [],
        /** @var array[] */
        public array   $refunds = [],
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            inquiryId:             $data['inquiryId'] ?? null,
            __typename:              $data['__typename'] ?? null,
            status:                $data['status']['code'] ?? null,
            statusDisplayText:     $data['status']['displayText'] ?? null,
            statusTypename:        $data['status']['__typename'] ?? null,
            createdAt:             $data['createdAt'] ?? null,
            closedAt:              $data['closedAt'] ?? null,
            initiator:             $data['initiator'] ?? null,
            responder:             $data['responder'] ?? null,
            inquirers:             $data['inquirers'] ?? [],
            lineItems:             $data['lineItems'] ?? [],
            sellerAvailableActions: $data['sellerAvailableActions'] ?? null,
            requestedInformation:  $data['requestedInformation'] ?? null,
            providedInformation:   $data['providedInformation'] ?? null,
            cases:                 $data['cases'] ?? [],
            refunds:               $data['refunds'] ?? [],
        );
    }
}
