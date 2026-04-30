<?php

namespace EBay\OrderManagement\GraphQL\Operations;

final class PurchaseQuoteOperations
{
    public const BULK_UPDATE_PURCHASE_QUOTES = <<<'GRAPHQL'
        mutation BulkUpdatePurchaseQuotes($input: BulkUpdatePurchaseQuotesInput!) {
            bulkUpdatePurchaseQuotes(input: $input) {
                __typename
                ... on BulkUpdatePurchaseQuotesSuccess {
                    updatedPurchaseQuotes {
                        purchaseQuoteId
                        createdAt
                        updatedAt
                    }
                }
                ... on BulkUpdatePurchaseQuotesPartialFailure {
                    updatedPurchaseQuotes {
                        purchaseQuoteId
                        createdAt
                        updatedAt
                    }
                    failures { errorCode displayMessage inputPurchaseQuoteId retryable }
                }
                ... on BulkUpdatePurchaseQuotesCompleteFailure {
                    failures { errorCode displayMessage inputPurchaseQuoteId retryable }
                }
            }
        }
        GRAPHQL;

    public const CREATE_PURCHASE_QUOTE = <<<'GRAPHQL'
        mutation CreatePurchaseQuote($input: CreatePurchaseQuoteInput!) {
            createPurchaseQuote(input: $input) {
                __typename
                ... on CreatePurchaseQuoteSuccess {
                    purchaseQuote {
                        purchaseQuoteId
                        createdAt
                        updatedAt
                    }
                }
                ... on CreatePurchaseQuoteBusinessError { errorCode errorMessage }
            }
        }
        GRAPHQL;
}
