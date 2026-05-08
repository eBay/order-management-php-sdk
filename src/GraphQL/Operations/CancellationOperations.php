<?php

namespace EBay\OrderManagement\GraphQL\Operations;

final class CancellationOperations
{
    public static function APPROVE_CONTRACT_CANCELLATION(): string
    {
        return file_get_contents(__DIR__ . '/Cancellation/ApproveContractCancellation.graphql');
    }

    public static function CONTRACT_CANCELLATION(): string
    {
        return file_get_contents(__DIR__ . '/Cancellation/ContractCancellation.graphql');
    }

    public static function CREATE_ITEM_COMMITMENT_CANCELLATION(): string
    {
        return file_get_contents(__DIR__ . '/Cancellation/CreateItemCommitmentCancellation.graphql');
    }

    public static function CREATE_ORDER_CANCELLATION(): string
    {
        return file_get_contents(__DIR__ . '/Cancellation/CreateOrderCancellation.graphql');
    }

    public static function CREATE_PURCHASE_QUOTE_CANCELLATION(): string
    {
        return file_get_contents(__DIR__ . '/Cancellation/CreatePurchaseQuoteCancellation.graphql');
    }

    public static function DECLINE_CONTRACT_CANCELLATION(): string
    {
        return file_get_contents(__DIR__ . '/Cancellation/DeclineContractCancellation.graphql');
    }

    public static function SELLER_CONTRACT_CANCELLATIONS(): string
    {
        return file_get_contents(__DIR__ . '/Cancellation/SellerContractCancellations.graphql');
    }
}
