<?php

namespace EBay\OrderManagement\GraphQL\Operations;

final class ItemCommitmentOperations
{
    public const ITEM_COMMITMENTS = <<<'GRAPHQL'
        query ItemCommitments {
            itemCommitments {
                sellerItemCommitments(input: {}) {
                    itemCommitments {
                        itemCommitmentId
                        createdAt
                        updatedAt
                    }
                    pagination {
                        nextCursor
                        previousCursor
                    }
                }
            }
        }
        GRAPHQL;

    public const ITEM_COMMITMENTS_BY_IDS = <<<'GRAPHQL'
        query ItemCommitmentsByIds($input: ItemCommitmentsByIdsInput!) {
            itemCommitmentsByIds(input: $input) {
                __typename
                ... on ItemCommitmentsByIdsSuccess {
                    itemCommitments {
                        itemCommitmentId
                        createdAt
                        updatedAt
                    }
                }
                ... on ItemCommitmentsByIdsPartialFailure {
                    itemCommitments {
                        itemCommitmentId
                        createdAt
                    }
                    failures { errorCode displayMessage inputItemCommitmentId retryable }
                }
                ... on ItemCommitmentsByIdsCompleteFailure {
                    failures { errorCode displayMessage inputItemCommitmentId retryable }
                }
            }
        }
        GRAPHQL;

    public const MARK_ORDERS_PAID = <<<'GRAPHQL'
        mutation MarkOrdersPaid($input: MarkOrdersPaidInput!) {
            markOrdersPaid(input: $input) {
                __typename
                ... on MarkOrdersPaidSuccess {
                    markPaidOrders { orderId placedAt updatedAt }
                }
                ... on MarkOrdersPaidPartialFailure {
                    markPaidOrders { orderId placedAt updatedAt }
                    failures { errorCode displayMessage inputOrderId retryable }
                }
                ... on MarkOrdersPaidCompleteFailure {
                    failures { errorCode displayMessage inputOrderId retryable }
                }
            }
        }
        GRAPHQL;

    public const ORDER_LINE_ITEMS_BY_IDS = <<<'GRAPHQL'
        query OrderLineItemsByIds($input: OrderLineItemsByIdsInput!) {
            orderLineItemsByIds(input: $input) {
                __typename
                ... on OrderLineItemsByIdsSuccess {
                    lineItems {
                        orderLineItemId
                        createdAt
                        updatedAt
                    }
                }
                ... on OrderLineItemsByIdsPartialFailure {
                    lineItems {
                        orderLineItemId
                        createdAt
                        updatedAt
                    }
                    failures { errorCode displayMessage inputLineItemId retryable }
                }
                ... on OrderLineItemsByIdsCompleteFailure {
                    failures { errorCode displayMessage inputLineItemId retryable }
                }
            }
        }
        GRAPHQL;

    public const ORDERS = <<<'GRAPHQL'
        query Orders {
            orders {
                sellerOrders(input: {}) {
                    orders {
                        orderId
                        placedAt
                        updatedAt
                    }
                    pagination {
                        nextCursor
                        previousCursor
                    }
                }
            }
        }
        GRAPHQL;

    public const ORDERS_BY_IDS = <<<'GRAPHQL'
        query OrdersByIds($input: OrdersByIdsInput!) {
            ordersByIds(input: $input) {
                __typename
                ... on OrdersByIdsSuccess {
                    orders {
                        orderId
                        placedAt
                        updatedAt
                    }
                }
                ... on OrdersByIdsPartialFailure {
                    orders {
                        orderId
                        placedAt
                        updatedAt
                    }
                    failures { errorCode displayMessage inputOrderId retryable }
                }
                ... on OrdersByIdsCompleteFailure {
                    failures { errorCode displayMessage inputOrderId retryable }
                }
            }
        }
        GRAPHQL;
}
