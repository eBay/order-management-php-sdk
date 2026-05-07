<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\AppendSellerReturnToAddressRule;

readonly class ReasonCondition extends RuleCondition
{
    public function __construct(
        /** @var CodeDisplayText[] */
        public array $returnReasonList = [],
    ) {}

    public function getTypename(): string
    {
        return 'ReturnReasonCondition';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            returnReasonList: array_map(
                fn(array $r) => CodeDisplayText::fromArray($r),
                $data['returnReasonList'] ?? []
            ),
        );
    }
}
