<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\SellerOrderReturns;

readonly class Input
{
    public function __construct(
        public ?string $cursor = null,
        public ?int $pageSize = null,
        public ?string $fromDate = null,
        public ?string $toDate = null,
        public ?string $returnStatus = null,
    ) {}

    public function toArray(): array
    {
        $arr = [];
        if ($this->cursor !== null) {
            $arr['cursor'] = $this->cursor;
        }
        if ($this->pageSize !== null) {
            $arr['pageSize'] = $this->pageSize;
        }
        if ($this->fromDate !== null) {
            $arr['fromDate'] = $this->fromDate;
        }
        if ($this->toDate !== null) {
            $arr['toDate'] = $this->toDate;
        }
        if ($this->returnStatus !== null) {
            $arr['returnStatus'] = $this->returnStatus;
        }
        return $arr;
    }
}
