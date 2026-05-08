<?php

namespace EBay\OrderManagement\GraphQL\Operations;

final class PurchaseQuoteOperations
{
    public static function PURCHASE_QUOTES(): string
    {
        return file_get_contents(__DIR__ . '/PurchaseQuote/PurchaseQuotes.graphql');
    }

    public static function PURCHASE_QUOTES_BY_IDS(): string
    {
        return file_get_contents(__DIR__ . '/PurchaseQuote/PurchaseQuotesByIds.graphql');
    }

    public static function PURCHASE_QUOTE_LINE_ITEMS_BY_IDS(): string
    {
        return file_get_contents(__DIR__ . '/PurchaseQuote/PurchaseQuoteLineItemsByIds.graphql');
    }

    public static function BULK_UPDATE_PURCHASE_QUOTES(): string
    {
        return file_get_contents(__DIR__ . '/PurchaseQuote/BulkUpdatePurchaseQuotes.graphql');
    }

    public static function CREATE_PURCHASE_QUOTE(): string
    {
        return file_get_contents(__DIR__ . '/PurchaseQuote/CreatePurchaseQuote.graphql');
    }
}
