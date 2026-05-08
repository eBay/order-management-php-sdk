<?php

namespace EBay\OrderManagement\GraphQL\Operations;

final class ItemCommitmentOperations
{
    public static function ITEM_COMMITMENTS(): string
    {
        return file_get_contents(__DIR__ . '/ItemCommitment/ItemCommitments.graphql');
    }

    public static function ITEM_COMMITMENTS_BY_IDS(): string
    {
        return file_get_contents(__DIR__ . '/ItemCommitment/ItemCommitmentsByIds.graphql');
    }

    public static function MARK_ITEM_COMMITMENTS_PAID(): string
    {
        return file_get_contents(__DIR__ . '/ItemCommitment/MarkItemCommitmentsPaid.graphql');
    }

    public static function MARK_ORDERS_PAID(): string
    {
        return file_get_contents(__DIR__ . '/ItemCommitment/MarkOrdersPaid.graphql');
    }

    public static function ORDER_LINE_ITEMS_BY_IDS(): string
    {
        return file_get_contents(__DIR__ . '/ItemCommitment/OrderLineItemsByIds.graphql');
    }

    public static function ORDERS(): string
    {
        return file_get_contents(__DIR__ . '/ItemCommitment/Orders.graphql');
    }

    public static function ORDERS_BY_IDS(): string
    {
        return file_get_contents(__DIR__ . '/ItemCommitment/OrdersByIds.graphql');
    }

    public static function BULK_UPDATE_ITEM_COMMITMENT_TAGS(): string
    {
        return file_get_contents(__DIR__ . '/ItemCommitment/BulkUpdateItemCommitmentTags.graphql');
    }
}
