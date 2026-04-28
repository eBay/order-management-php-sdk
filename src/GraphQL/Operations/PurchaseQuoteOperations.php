<?php

namespace EBay\OrderManagement\GraphQL\Operations;

final class PurchaseQuoteOperations
{
    public const BULK_UPDATE_PURCHASE_QUOTES = <<<'GRAPHQL'
        mutation BulkUpdatePurchaseQuotes($input: BulkUpdatePurchaseQuotesInput!) {
            bulkUpdatePurchaseQuotes(input: $input) {
                __typename
                ... on BulkUpdatePurchaseQuotesSuccess {
                    purchaseQuotes {
                        purchaseQuoteId
                        status
                        lastModifiedDate
                    }
                }
                ... on BulkUpdatePurchaseQuotesPartialFailure {
                    successfulPurchaseQuotes {
                        purchaseQuoteId
                        status
                    }
                    failedPurchaseQuotes { purchaseQuoteId errors { errorCode errorMessage } }
                }
                ... on BulkUpdatePurchaseQuotesCompleteFailure {
                    failedPurchaseQuotes { purchaseQuoteId errors { errorCode errorMessage } }
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
                        status
                        creationDate
                        lastModifiedDate
                    }
                }
                ... on CreatePurchaseQuoteBusinessError { errorCode errorMessage }
            }
        }
        GRAPHQL;
}
