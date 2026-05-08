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

    public static function fromArray(array $data): static
    {
        return new static(
            purchaseQuoteId: $data['purchaseQuoteId'],
            emailCopyToSeller: (bool)($data['emailCopyToSeller'] ?? false),
            lineItems: isset($data['lineItems'])
                ? array_map(fn(array $li) => PurchaseQuoteItemInput::fromArray($li), $data['lineItems'])
                : null,
            logisticsOptions: isset($data['logisticsOptions'])
                ? PurchaseQuoteLogisticsOptionInput::fromArray($data['logisticsOptions'])
                : null,
            messageToBuyer: $data['messageToBuyer'] ?? null,
            total: isset($data['total']) ? PurchaseQuoteTotalsInput::fromArray($data['total']) : null,
        );
    }

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
