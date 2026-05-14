<?php

namespace EBay\OrderManagement\GraphQL\Operations;

final class ItemCommitmentOperations
{
    public static function ITEM_COMMITMENTS(): string
    {
        return file_get_contents(__DIR__ . '/itemCommitments.graphql');
    }

    public static function ITEM_COMMITMENTS_BY_IDS(): string
    {
        return file_get_contents(__DIR__ . '/itemCommitmentsByIds.graphql');
    }

    public static function MARK_ITEM_COMMITMENTS_PAID(): string
    {
        return file_get_contents(__DIR__ . '/markItemCommitmentsPaid.graphql');
    }

    public static function MARK_ORDERS_PAID(): string
    {
        return file_get_contents(__DIR__ . '/markOrdersPaid.graphql');
    }

    public static function ORDER_LINE_ITEMS_BY_IDS(): string
    {
        return file_get_contents(__DIR__ . '/orderLineItemsByIds.graphql');
    }

    public static function ORDERS(): string
    {
        return file_get_contents(__DIR__ . '/orders.graphql');
    }

    public static function ORDERS_BY_IDS(): string
    {
        return file_get_contents(__DIR__ . '/ordersByIds.graphql');
    }

    public static function BULK_UPDATE_ITEM_COMMITMENT_TAGS(): string
    {
        return file_get_contents(__DIR__ . '/bulkUpdateItemCommitmentTags.graphql');
    }

    public static function BULK_UPDATE_ORDER_TAGS(): string
    {
        return file_get_contents(__DIR__ . '/bulkUpdateOrderTags.graphql');
    }
}
