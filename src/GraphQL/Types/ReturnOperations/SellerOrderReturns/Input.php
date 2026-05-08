<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\SellerOrderReturns;

readonly class Input
{
    public function __construct(
        public ?OrderReturnInitialPageInput $initialPage = null,
        public ?PageInfoInput $pagination = null,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            initialPage: isset($data['initialPage'])
                ? OrderReturnInitialPageInput::fromArray($data['initialPage'])
                : null,
            pagination: isset($data['pagination'])
                ? PageInfoInput::fromArray($data['pagination'])
                : null,
        );
    }

    public function toArray(): array
    {
        $data = [];
        if ($this->initialPage !== null) {
            $data['initialPage'] = $this->initialPage->toArray();
        }
        if ($this->pagination !== null) {
            $data['pagination'] = $this->pagination->toArray();
        }
        return $data;
    }
}
