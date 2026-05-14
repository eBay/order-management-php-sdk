<?php

namespace EBay\OrderManagement\GraphQL\Operations;

final class PurchaseQuoteOperations
{
    public static function PURCHASE_QUOTES(): string
    {
        return file_get_contents(__DIR__ . '/purchaseQuotes.graphql');
    }

    public static function PURCHASE_QUOTES_BY_IDS(): string
    {
        return file_get_contents(__DIR__ . '/purchaseQuotesByIds.graphql');
    }

    public static function PURCHASE_QUOTE_LINE_ITEMS_BY_IDS(): string
    {
        return file_get_contents(__DIR__ . '/purchaseQuoteLineItemsByIds.graphql');
    }

    public static function BULK_UPDATE_PURCHASE_QUOTES(): string
    {
        return file_get_contents(__DIR__ . '/bulkUpdatePurchaseQuotes.graphql');
    }

    public static function CREATE_PURCHASE_QUOTE(): string
    {
        return file_get_contents(__DIR__ . '/createPurchaseQuote.graphql');
    }

    public static function COMMIT_TO_PURCHASE(): string
    {
        return file_get_contents(__DIR__ . '/commitToPurchase.graphql');
    }

    public static function REQUEST_PURCHASE_QUOTE(): string
    {
        return file_get_contents(__DIR__ . '/requestPurchaseQuote.graphql');
    }
}
