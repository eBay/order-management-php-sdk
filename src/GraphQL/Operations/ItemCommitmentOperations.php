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
                        status
                        quantity
                        creationDate
                        lastModifiedDate
                    }
                    pagination {
                        nextCursor
                        previousCursor
                        total
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
                        status
                        quantity
                        creationDate
                        lastModifiedDate
                    }
                }
                ... on ItemCommitmentsByIdsPartialFailure {
                    itemCommitments {
                        itemCommitmentId
                        status
                        quantity
                    }
                    errors { errorCode errorMessage }
                }
                ... on ItemCommitmentsByIdsCompleteFailure {
                    errors { errorCode errorMessage }
                }
            }
        }
        GRAPHQL;

    public const MARK_ORDERS_PAID = <<<'GRAPHQL'
        mutation MarkOrdersPaid($input: MarkOrdersPaidInput!) {
            markOrdersPaid(input: $input) {
                __typename
                ... on MarkOrdersPaidSuccess {
                    orders { orderId paidDate }
                }
                ... on MarkOrdersPaidPartialFailure {
                    successfulOrders { orderId paidDate }
                    failedOrders { orderId errors { errorCode errorMessage } }
                }
                ... on MarkOrdersPaidCompleteFailure {
                    failedOrders { orderId errors { errorCode errorMessage } }
                }
            }
        }
        GRAPHQL;

    public const ORDER_LINE_ITEMS_BY_IDS = <<<'GRAPHQL'
        query OrderLineItemsByIds($input: OrderLineItemsByIdsInput!) {
            orderLineItemsByIds(input: $input) {
                __typename
                ... on OrderLineItemsByIdsSuccess {
                    orderLineItems {
                        lineItemId
                        orderId
                        quantity
                        status
                    }
                }
                ... on OrderLineItemsByIdsPartialFailure {
                    orderLineItems {
                        lineItemId
                        orderId
                        quantity
                        status
                    }
                    errors { errorCode errorMessage }
                }
                ... on OrderLineItemsByIdsCompleteFailure {
                    errors { errorCode errorMessage }
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
                        orderPaymentStatus
                        orderFulfillmentStatus
                        creationDate
                        lastModifiedDate
                    }
                    pagination {
                        nextCursor
                        previousCursor
                        total
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
                        orderPaymentStatus
                        orderFulfillmentStatus
                        creationDate
                        lastModifiedDate
                    }
                }
                ... on OrdersByIdsPartialFailure {
                    orders {
                        orderId
                        orderPaymentStatus
                        orderFulfillmentStatus
                    }
                    errors { errorCode errorMessage }
                }
                ... on OrdersByIdsCompleteFailure {
                    errors { errorCode errorMessage }
                }
            }
        }
        GRAPHQL;
}
