<?php

// Copyright 2026 eBay Inc.
//
// Licensed under the Apache License, Version 2.0 (the "License");
// you may not use this file except in compliance with the License.
// You may obtain a copy of the License at
//
//     http://www.apache.org/licenses/LICENSE-2.0
//
// Unless required by applicable law or agreed to in writing, software
// distributed under the License is distributed on an "AS IS" BASIS,
// WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
// See the License for the specific language governing permissions and
// limitations under the License.

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Operations;

final class PurchaseQuoteOperations
{
    public static function BULK_UPDATE_PURCHASE_QUOTES(): string
    {
        return file_get_contents(__DIR__ . '/bulkUpdatePurchaseQuotes.graphql')
            ?: throw new \RuntimeException('Failed to read bundled GraphQL file: bulkUpdatePurchaseQuotes.graphql');
    }

    public static function COMMIT_TO_PURCHASE(): string
    {
        return file_get_contents(__DIR__ . '/commitToPurchase.graphql')
            ?: throw new \RuntimeException('Failed to read bundled GraphQL file: commitToPurchase.graphql');
    }

    public static function CREATE_PURCHASE_QUOTE(): string
    {
        return file_get_contents(__DIR__ . '/createPurchaseQuote.graphql')
            ?: throw new \RuntimeException('Failed to read bundled GraphQL file: createPurchaseQuote.graphql');
    }

    public static function PURCHASE_QUOTE_LINE_ITEMS_BY_IDS(): string
    {
        return file_get_contents(__DIR__ . '/purchaseQuoteLineItemsByIds.graphql')
            ?: throw new \RuntimeException('Failed to read bundled GraphQL file: purchaseQuoteLineItemsByIds.graphql');
    }

    public static function PURCHASE_QUOTES(): string
    {
        return file_get_contents(__DIR__ . '/purchaseQuotes.graphql')
            ?: throw new \RuntimeException('Failed to read bundled GraphQL file: purchaseQuotes.graphql');
    }

    public static function PURCHASE_QUOTES_BY_IDS(): string
    {
        return file_get_contents(__DIR__ . '/purchaseQuotesByIds.graphql')
            ?: throw new \RuntimeException('Failed to read bundled GraphQL file: purchaseQuotesByIds.graphql');
    }

    public static function REQUEST_PURCHASE_QUOTE(): string
    {
        return file_get_contents(__DIR__ . '/requestPurchaseQuote.graphql')
            ?: throw new \RuntimeException('Failed to read bundled GraphQL file: requestPurchaseQuote.graphql');
    }
}
