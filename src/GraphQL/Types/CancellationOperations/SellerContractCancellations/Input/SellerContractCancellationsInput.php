<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\CancellationOperations\SellerContractCancellations\Input;

final class SellerContractCancellationsInput
{
    public function __construct(
        public readonly ?InitialPageInput $initialPage = null,
        public readonly ?PageInfoInput $pageInfo = null,
    ) {
    }

    public static function fromArray(array $data): self
    {
        return new self(
            initialPage: isset($data['initialPage']) ? InitialPageInput::fromArray($data['initialPage']) : null,
            pageInfo: isset($data['pageInfo']) ? PageInfoInput::fromArray($data['pageInfo']) : null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'initialPage' => $this->initialPage?->toArray(),
            'pageInfo' => $this->pageInfo?->toArray(),
        ], static fn($v) => $v !== null);
    }
}
