<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\PurchaseQuoteOperations\CreatePurchaseQuote;

readonly class Input
{
    /**
     * @param PurchaseQuoteItemInput[] $lineItems
     */
    public function __construct(
        public array $lineItems,
        public PurchaseQuoteLogisticsOptionInput $logisticsOptions,
        public bool $emailCopyToSeller = false,
        public ?string $messageToBuyer = null,
        public ?PurchaseQuoteTotalsInput $total = null,
    ) {}

    public function toArray(): array
    {
        $result = [
            'lineItems'         => array_map(fn(PurchaseQuoteItemInput $li) => $li->toArray(), $this->lineItems),
            'logisticsOptions'  => $this->logisticsOptions->toArray(),
            'emailCopyToSeller' => $this->emailCopyToSeller,
        ];
        if ($this->messageToBuyer !== null) {
            $result['messageToBuyer'] = $this->messageToBuyer;
        }
        if ($this->total !== null) {
            $result['total'] = $this->total->toArray();
        }
        return $result;
    }
}
