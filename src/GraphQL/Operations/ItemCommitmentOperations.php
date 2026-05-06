<?php

namespace EBay\OrderManagement\GraphQL\Operations;

final class ItemCommitmentOperations
{
    public const ITEM_COMMITMENTS = <<<'GRAPHQL'
        query ItemCommitments {
            itemCommitments {
                buyerItemCommitments(input: {}) {
                    itemCommitments {
                        itemCommitmentId
                        createdAt
                        updatedAt
                        committedMarketplace
                        state {
                            ... on ItemCommitmentActive { label }
                            ... on ItemCommitmentCancelled { label cancelledAt reason }
                            ... on ItemCommitmentLocked { label }
                            ... on ItemCommitmentCompleted { label }
                            ... on ItemCommitmentAbandoned { label }
                        }
                        cancellation { cancellationId }
                        refunds { refundId }
                        buyer { legacyUserId }
                        seller { legacyUserId }
                        totals {
                            committedTotal {
                                original { value currency }
                            }
                        }
                        lineItem {
                            quantity
                            item { itemIdVersioned versionId }
                            purchaseFlow {
                                ... on PurchaseFlowBuyItNow { label }
                                ... on PurchaseFlowAuction { label }
                                ... on PurchaseFlowCommitToBuy { label }
                                ... on PurchaseFlowSellerInitiatedOffer { label }
                                ... on PurchaseFlowBestOffer { label }
                                ... on PurchaseFlowRequestTotal { label }
                            }
                        }
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
                        state {
                            ... on ItemCommitmentActive {
                                label
                                fundingState {
                                    ... on PaymentsNotStarted { label }
                                    ... on PaymentsInProgress { label }
                                    ... on PaymentsCompleted { label }
                                    ... on PaymentsFailure { label }
                                }
                                fulfillmentState {
                                    ... on FulfillmentNotStarted { label }
                                    ... on FulfillmentInProgress { label startedAt }
                                    ... on FulfillmentCompleted { label completedAt }
                                }
                                cancelState {
                                    ... on ContractCancelRequested { label requestedAt }
                                    ... on ContractCancelRejected { label rejectedAt reason }
                                    ... on ContractCancelPending { label startedAt }
                                    ... on ContractCancelCompleted { label completedAt refundOutcome }
                                }
                                returnState {
                                    ... on ItemCommitmentReturnRequested { label }
                                    ... on ItemCommitmentReturnClosed { label }
                                }
                            }
                            ... on ItemCommitmentCancelled {
                                label
                                cancelledAt
                                reason
                                cancelState {
                                    ... on ContractCancelRequested { label requestedAt }
                                    ... on ContractCancelRejected { label rejectedAt reason }
                                    ... on ContractCancelPending { label startedAt }
                                    ... on ContractCancelCompleted { label completedAt refundOutcome }
                                }
                            }
                            ... on ItemCommitmentLocked { label }
                            ... on ItemCommitmentCompleted { label }
                            ... on ItemCommitmentAbandoned { label }
                        }
                    }
                }
                ... on ItemCommitmentsByIdsPartialFailure {
                    itemCommitments {
                        itemCommitmentId
                        createdAt
                        updatedAt
                    }
                    failures { errorCode displayMessage inputItemCommitmentId retryable }
                }
                ... on ItemCommitmentsByIdsCompleteFailure {
                    failures { errorCode displayMessage inputItemCommitmentId retryable }
                }
            }
        }
        GRAPHQL;

    public const MARK_ITEM_COMMITMENTS_PAID = <<<'GRAPHQL'
        mutation MarkItemCommitmentsPaid($input: MarkItemCommitmentsPaidInput!) {
            markItemCommitmentsPaid(input: $input) {
                __typename
                ... on MarkItemCommitmentsPaidSuccess {
                    markPaidItemCommitments { itemCommitmentId }
                }
                ... on MarkItemCommitmentsPaidPartialFailure {
                    errorCode
                    errorMessage
                    markPaidItemCommitments { itemCommitmentId }
                    failures { inputItemCommitmentId errorCode displayMessage retryable }
                }
                ... on MarkItemCommitmentsPaidCompleteFailure {
                    errorCode
                    errorMessage
                    failures { inputItemCommitmentId errorCode displayMessage retryable }
                }
            }
        }
        GRAPHQL;

    public const MARK_ORDERS_PAID = <<<'GRAPHQL'
        mutation MarkOrdersPaid($input: MarkOrdersPaidInput!) {
            markOrdersPaid(input: $input) {
                __typename
                ... on MarkOrdersPaidSuccess {
                    markPaidOrders {
                        orderId placedAt updatedAt
                        logistics {
                            fulfillmentPlan {
                                planType
                                logisticsPlanSteps {
                                    methodName { id displayName }
                                }
                            }
                        }
                        orderState {
                            __typename
                            ... on OrderAbandoned { label }
                            ... on OrderCancelled { label }
                            ... on OrderConfirmed {
                                label
                                fundingState {
                                    __typename
                                    ... on PaymentsCompleted { label }
                                    ... on PaymentsFailure { label }
                                    ... on PaymentsInProgress { label }
                                    ... on PaymentsNotStarted { label }
                                }
                            }
                            ... on OrderPlaced { label }
                        }
                    }
                }
                ... on MarkOrdersPaidPartialFailure {
                    errorCode
                    errorMessage
                    markPaidOrders {
                        orderId placedAt updatedAt
                        logistics {
                            fulfillmentPlan {
                                planType
                                logisticsPlanSteps {
                                    methodName { id displayName }
                                }
                            }
                        }
                        orderState {
                            __typename
                            ... on OrderAbandoned { label }
                            ... on OrderCancelled { label }
                            ... on OrderConfirmed {
                                label
                                fundingState {
                                    __typename
                                    ... on PaymentsCompleted { label }
                                    ... on PaymentsFailure { label }
                                    ... on PaymentsInProgress { label }
                                    ... on PaymentsNotStarted { label }
                                }
                            }
                            ... on OrderPlaced { label }
                        }
                    }
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
        query Orders($input: OrdersInput!) {
            orders {
                sellerOrders(input: $input) {
                    orders {
                        orderId
                        placedAt
                        updatedAt
                        buyer { legacyUserId }
                        logistics {
                            fulfillmentPlan {
                                planType
                                logisticsPlanSteps {
                                    methodName { id displayName }
                                }
                            }
                        }
                        orderState {
                            __typename
                            ... on OrderAbandoned { label }
                            ... on OrderCancelled { label }
                            ... on OrderConfirmed {
                                label
                                fundingState {
                                    __typename
                                    ... on PaymentsCompleted { label }
                                    ... on PaymentsFailure { label }
                                    ... on PaymentsInProgress { label }
                                    ... on PaymentsNotStarted { label }
                                }
                            }
                            ... on OrderPlaced { label }
                        }
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
                        logistics {
                            fulfillmentPlan {
                                planType
                                logisticsPlanSteps {
                                    methodName { id displayName }
                                }
                            }
                        }
                    }
                }
                ... on OrdersByIdsPartialFailure {
                    orders {
                        orderId
                        placedAt
                        updatedAt
                        logistics {
                            fulfillmentPlan {
                                planType
                                logisticsPlanSteps {
                                    methodName { id displayName }
                                }
                            }
                        }
                    }
                    failures { errorCode displayMessage inputOrderId retryable }
                }
                ... on OrdersByIdsCompleteFailure {
                    failures { errorCode displayMessage inputOrderId retryable }
                }
            }
        }
        GRAPHQL;

    public const BULK_UPDATE_ITEM_COMMITMENT_TAGS = <<<'GRAPHQL'
        mutation BulkUpdateItemCommitmentTags($input: BulkUpdateItemCommitmentTagsInput!) {
            bulkUpdateItemCommitmentTags(input: $input) {
                __typename
                ... on BulkUpdateItemCommitmentTagsSuccess {
                    updatedItemCommitments { itemCommitmentId }
                }
                ... on BulkUpdateItemCommitmentTagsPartialFailure {
                    errorCode
                    errorMessage
                    updatedItemCommitments { itemCommitmentId }
                    failures { inputItemCommitmentId errorCode displayMessage retryable }
                }
                ... on BulkUpdateItemCommitmentTagsCompleteFailure {
                    errorCode
                    errorMessage
                    failures { inputItemCommitmentId errorCode displayMessage retryable }
                }
            }
        }
        GRAPHQL;
}
