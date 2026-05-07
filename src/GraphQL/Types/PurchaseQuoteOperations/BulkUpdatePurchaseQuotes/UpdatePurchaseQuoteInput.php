<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\PurchaseQuoteOperations\BulkUpdatePurchaseQuotes;

readonly class UpdatePurchaseQuoteInput
{
    /**
     * @param PurchaseQuoteItemInput[]|null $lineItems
     */
    public function __construct(
        public string $purchaseQuoteId,
        public bool $emailCopyToSeller = false,
        public ?array $lineItems = null,
        public ?PurchaseQuoteLogisticsOptionInput $logisticsOptions = null,
        public ?string $messageToBuyer = null,
        public ?PurchaseQuoteTotalsInput $total = null,
    ) {}

    public function toArray(): array
    {
        $result = [
            'purchaseQuoteId'    => $this->purchaseQuoteId,
            'emailCopyToSeller'  => $this->emailCopyToSeller,
        ];
        if ($this->lineItems !== null) {
            $result['lineItems'] = array_map(fn(PurchaseQuoteItemInput $li) => $li->toArray(), $this->lineItems);
        }
        if ($this->logisticsOptions !== null) {
            $result['logisticsOptions'] = $this->logisticsOptions->toArray();
        }
        if ($this->messageToBuyer !== null) {
            $result['messageToBuyer'] = $this->messageToBuyer;
        }
        if ($this->total !== null) {
            $result['total'] = $this->total->toArray();
        }
        return $result;
    }
}
