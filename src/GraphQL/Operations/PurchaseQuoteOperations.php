<?php

namespace EBay\OrderManagement\GraphQL\Operations;

final class PurchaseQuoteOperations
{
    public const PURCHASE_QUOTES = <<<'GRAPHQL'
        query PurchaseQuotes {
            purchaseQuotes {
                sellerPurchaseQuotes(input: {}) {
                    pagination {
                        nextCursor
                        previousCursor
                    }
                    purchaseQuotes {
                        purchaseQuoteId
                        createdAt
                        updatedAt
                        state {
                            ... on PurchaseQuoteRequested { label }
                            ... on PurchaseQuoteActive { label }
                            ... on PurchaseQuoteCancelled {
                                label
                                cancelledAt
                                reason { displayName id }
                            }
                            ... on PurchaseQuoteCompleted { label }
                            ... on PurchaseQuoteLocked { label }
                            ... on PurchaseQuoteInvalid {
                                label
                                reason { displayName id }
                            }
                        }
                    }
                }
            }
        }
        GRAPHQL;

    public const PURCHASE_QUOTES_BY_IDS = <<<'GRAPHQL'
        query PurchaseQuotesByIds($input: PurchaseQuotesByIdsInput!) {
            purchaseQuotesByIds(input: $input) {
                __typename
                ... on PurchaseQuotesByIdsSuccess {
                    purchaseQuotes {
                        purchaseQuoteId
                        createdAt
                        updatedAt
                        state {
                            ... on PurchaseQuoteRequested { label }
                            ... on PurchaseQuoteActive { label }
                            ... on PurchaseQuoteCancelled {
                                label
                                cancelledAt
                                reason { displayName id }
                            }
                            ... on PurchaseQuoteInvalid {
                                label
                                reason { displayName id }
                            }
                            ... on PurchaseQuoteLocked { label }
                            ... on PurchaseQuoteCompleted { label }
                        }
                        cancellation { cancellationId }
                        buyer { legacyUserId dataAccessLevel }
                        seller { legacyUserId dataAccessLevel }
                        lineItems {
                            purchaseQuoteLineItemId
                            lineItemSource {
                                ... on ItemCommitment { itemCommitmentId }
                            }
                            cancellation { cancellationId }
                            return {
                                return { returnId }
                            }
                            totals {
                                taxes {
                                    taxAddress {
                                        addressId
                                        addressLine1
                                        addressLine2
                                        city
                                        stateOrProvince
                                        country
                                        postalCode
                                        phone
                                        email
                                    }
                                }
                                total {
                                    original { value currency }
                                }
                            }
                        }
                    }
                }
                ... on PurchaseQuotesByIdsPartialFailure {
                    purchaseQuotes {
                        purchaseQuoteId
                        createdAt
                        updatedAt
                    }
                    failures { errorCode displayMessage inputPurchaseQuoteId retryable }
                }
                ... on PurchaseQuotesByIdsCompleteFailure {
                    failures { errorCode displayMessage inputPurchaseQuoteId retryable }
                }
            }
        }
        GRAPHQL;

    public const PURCHASE_QUOTE_LINE_ITEMS_BY_IDS = <<<'GRAPHQL'
        query PurchaseQuoteLineItemsByIds($input: PurchaseQuoteLineItemsByIdsInput!) {
            purchaseQuoteLineItemsByIds(input: $input) {
                __typename
                ... on PurchaseQuoteLineItemsByIdsSuccess {
                    purchaseQuoteLineItems {
                        purchaseQuoteLineItemId
                        lineItemSource {
                            ... on ItemCommitment { itemCommitmentId }
                        }
                        totals {
                            total {
                                original { value currency }
                            }
                        }
                    }
                }
                ... on PurchaseQuoteLineItemsByIdsPartialFailure {
                    purchaseQuoteLineItems {
                        purchaseQuoteLineItemId
                    }
                    failures { errorCode displayMessage inputPurchaseQuoteLineItemId retryable }
                }
                ... on PurchaseQuoteLineItemsByIdsCompleteFailure {
                    failures { errorCode displayMessage inputPurchaseQuoteLineItemId retryable }
                }
            }
        }
        GRAPHQL;

    public const BULK_UPDATE_PURCHASE_QUOTES = <<<'GRAPHQL'
        mutation BulkUpdatePurchaseQuotes($input: BulkUpdatePurchaseQuotesInput!) {
            bulkUpdatePurchaseQuotes(input: $input) {
                __typename
                ... on BulkUpdatePurchaseQuotesSuccess {
                    updatedPurchaseQuotes { purchaseQuoteId }
                }
                ... on BulkUpdatePurchaseQuotesPartialFailure {
                    errorCode
                    errorMessage
                    updatedPurchaseQuotes { purchaseQuoteId }
                    failures { inputPurchaseQuoteId errorCode displayMessage retryable }
                }
                ... on BulkUpdatePurchaseQuotesCompleteFailure {
                    errorCode
                    errorMessage
                    failures { inputPurchaseQuoteId errorCode displayMessage retryable }
                }
            }
        }
        GRAPHQL;

    public const CREATE_PURCHASE_QUOTE = <<<'GRAPHQL'
        mutation CreatePurchaseQuote($input: CreatePurchaseQuoteInput!) {
            createPurchaseQuote(input: $input) {
                __typename
                ... on CreatePurchaseQuoteSuccess {
                    purchaseQuote { purchaseQuoteId }
                }
                ... on CreatePurchaseQuoteBusinessError {
                    errorCode
                    errorMessage
                    retryable
                }
            }
        }
        GRAPHQL;
}
