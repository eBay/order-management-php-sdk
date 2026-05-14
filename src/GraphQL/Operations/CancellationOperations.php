<?php

namespace EBay\OrderManagement\GraphQL\Operations;

final class CancellationOperations
{
    public static function APPROVE_CONTRACT_CANCELLATION(): string
    {
        return file_get_contents(__DIR__ . '/approveContractCancellation.graphql');
    }

    public static function CONTRACT_CANCELLATION(): string
    {
        return file_get_contents(__DIR__ . '/contractCancellation.graphql');
    }

    public static function CREATE_ITEM_COMMITMENT_CANCELLATION(): string
    {
        return file_get_contents(__DIR__ . '/createItemCommitmentCancellation.graphql');
    }

    public static function CREATE_ORDER_CANCELLATION(): string
    {
        return file_get_contents(__DIR__ . '/createOrderCancellation.graphql');
    }

    public static function CREATE_PURCHASE_QUOTE_CANCELLATION(): string
    {
        return file_get_contents(__DIR__ . '/createPurchaseQuoteCancellation.graphql');
    }

    public static function DECLINE_CONTRACT_CANCELLATION(): string
    {
        return file_get_contents(__DIR__ . '/declineContractCancellation.graphql');
    }

    public static function SELLER_CONTRACT_CANCELLATIONS(): string
    {
        return file_get_contents(__DIR__ . '/sellerContractCancellations.graphql');
    }
}
