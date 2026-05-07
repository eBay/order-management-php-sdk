<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\SellerOrderReturns;

readonly class ReturnNegotiation
{
    public function __construct(
        public ?ReturnOffer $latestReturnOffer = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            latestReturnOffer: isset($data['latestReturnOffer'])
                ? ReturnOffer::fromArray($data['latestReturnOffer'])
                : null,
        );
    }
}
