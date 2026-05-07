<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\AppendSellerReturnResponseRule;

readonly class RefundRangeCondition extends RuleCondition
{
    public function __construct(
        public ?MoneyAmount $minRefundAmount = null,
        public ?MoneyAmount $maxRefundAmount = null,
    ) {}

    public function getTypename(): string
    {
        return 'ReturnRefundRangeCondition';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            minRefundAmount: isset($data['minRefundAmount'])
                ? MoneyAmount::fromArray($data['minRefundAmount'])
                : null,
            maxRefundAmount: isset($data['maxRefundAmount'])
                ? MoneyAmount::fromArray($data['maxRefundAmount'])
                : null,
        );
    }
}
