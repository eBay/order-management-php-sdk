<?php

namespace EBay\OrderManagement\GraphQL\Operations;

final class CancellationOperations
{
    public const APPROVE_CONTRACT_CANCELLATION = <<<'GRAPHQL'
        mutation ApproveContractCancellation($input: ApproveContractCancellationInput!) {
            approveContractCancellation(input: $input) {
                __typename
                ... on ApproveContractCancellationSuccess {
                    contractCancellation {
                        __typename
                        cancellationId
                        status {
                            __typename
                            code
                            displayText
                        }
                    }
                }
                ... on ContractCancellationActionNotPermittedError {
                    errorCode
                    errorMessage
                    availableActions {
                        __typename
                        code
                        displayText
                    }
                }
                ... on ContractCancellationNotFoundError {
                    errorCode
                    errorMessage
                    requestedContractCancellationId
                }
                ... on RefundAuthorizationFailedError { errorCode errorMessage }
                ... on RefundBlockedByPaymentDisputeError { errorCode errorMessage }
                ... on RefundInstrumentDeclinedError { errorCode errorMessage }
                ... on RefundInstrumentInsufficientFundsError { errorCode errorMessage }
                ... on RefundInstrumentInvalidError { errorCode errorMessage }
                ... on RefundProcessingError { errorCode errorMessage }
            }
        }
        GRAPHQL;

    public const CONTRACT_CANCELLATION = <<<'GRAPHQL'
        query ContractCancellation($input: ContractCancellationInput!) {
            contractCancellation(input: $input) {
                __typename
                ... on ContractCancellationSuccess {
                    contractCancellation {
                        __typename
                        cancellationId
                        lineItems {
                            __typename
                            cancellationLineItemId
                            requestedQuantity
                            cancelledQuantity
                            listingRestockTasks {
                                __typename
                                ... on PostPurchaseListingRelistTask {
                                    relistStatus {
                                        __typename
                                        code
                                        displayText
                                    }
                                    relistedListing { listingId }
                                }
                            }
                            ... on OrderCancellationLineItem {
                                orderLineItem { orderLineItemId }
                            }
                        }
                        requestedAt
                        reason { code displayText }
                        requesterNote
                        requester
                        status {
                            __typename
                            code
                            displayText
                        }
                        closedAt
                        refunds { refundId }
                        sellerAvailableActions {
                            primaryActions {
                                __typename
                                code
                                displayText
                            }
                            responseDueAt
                        }
                        ... on OrderCancellation {
                            lineItems { __typename }
                        }
                    }
                }
                ... on ContractCancellationNotFoundError {
                    errorCode
                    errorMessage
                    requestedContractCancellationId
                }
            }
        }
        GRAPHQL;

    public const CREATE_ITEM_COMMITMENT_CANCELLATION = <<<'GRAPHQL'
        mutation CreateItemCommitmentCancellation($input: CreateItemCommitmentCancellationInput!) {
            createItemCommitmentCancellation(input: $input) {
                __typename
                ... on CreateItemCommitmentCancellationSuccess {
                    itemCommitmentCancellation {
                        __typename
                        cancellationId
                        status {
                            __typename
                            code
                            displayText
                        }
                    }
                }
                ... on ItemCommitmentCancellationEligibilityError {
                    errorCode
                    errorMessage
                    ineligibilityReasons {
                        __typename
                        code
                        displayMessage
                        itemCommitmentId
                        ... on ItemCommitmentCancellationReasonNotAllowed {
                            availableReasons { code displayText }
                        }
                    }
                }
                ... on ItemCommitmentNotFoundError {
                    errorCode
                    errorMessage
                    itemCommitmentId
                }
            }
        }
        GRAPHQL;

    public const CREATE_ORDER_CANCELLATION = <<<'GRAPHQL'
        mutation CreateOrderCancellation($input: CreateOrderCancellationInput!) {
            createOrderCancellation(input: $input) {
                __typename
                ... on CreateOrderCancellationSuccess {
                    orderCancellation {
                        __typename
                        cancellationId
                        status {
                            __typename
                            code
                            displayText
                        }
                    }
                }
                ... on OrderCancellationEligibilityError {
                    errorCode
                    errorMessage
                    ineligibilityReasons {
                        __typename
                        code
                        displayMessage
                        orderId
                        ... on OrderCancellationReasonNotAllowed {
                            availableReasons { code displayText }
                        }
                    }
                }
                ... on OrderLineItemCancellationEligibilityError {
                    errorCode
                    errorMessage
                    ineligibilityReasons {
                        __typename
                        code
                        displayMessage
                        orderLineItemIds
                    }
                }
                ... on OrderNotFoundError {
                    errorCode
                    errorMessage
                    orderId
                }
                ... on RefundAuthorizationFailedError { errorCode errorMessage }
                ... on RefundBlockedByPaymentDisputeError { errorCode errorMessage }
                ... on RefundInstrumentDeclinedError { errorCode errorMessage }
                ... on RefundInstrumentInsufficientFundsError { errorCode errorMessage }
                ... on RefundInstrumentInvalidError { errorCode errorMessage }
                ... on RefundProcessingError { errorCode errorMessage }
            }
        }
        GRAPHQL;

    public const CREATE_PURCHASE_QUOTE_CANCELLATION = <<<'GRAPHQL'
        mutation CreatePurchaseQuoteCancellation($input: CreatePurchaseQuoteCancellationInput!) {
            createPurchaseQuoteCancellation(input: $input) {
                __typename
                ... on CreatePurchaseQuoteCancellationSuccess {
                    purchaseQuoteCancellation {
                        __typename
                        cancellationId
                        status {
                            __typename
                            code
                            displayText
                        }
                    }
                }
                ... on PurchaseQuoteCancellationEligibilityError {
                    errorCode
                    errorMessage
                    ineligibilityReasons {
                        __typename
                        code
                        displayMessage
                        purchaseQuoteId
                        ... on PurchaseQuoteCancellationReasonNotAllowed {
                            availableReasons { code displayText }
                        }
                    }
                }
                ... on PurchaseQuoteNotFoundError {
                    errorCode
                    errorMessage
                    purchaseQuoteId
                }
            }
        }
        GRAPHQL;

    public const DECLINE_CONTRACT_CANCELLATION = <<<'GRAPHQL'
        mutation DeclineContractCancellation($input: DeclineContractCancellationInput!) {
            declineContractCancellation(input: $input) {
                __typename
                ... on DeclineContractCancellationSuccess {
                    contractCancellation {
                        __typename
                        cancellationId
                        status {
                            __typename
                            code
                            displayText
                        }
                    }
                }
                ... on ContractCancellationActionNotPermittedError {
                    errorCode
                    errorMessage
                    availableActions {
                        __typename
                        code
                        displayText
                    }
                }
                ... on ContractCancellationNotFoundError {
                    errorCode
                    errorMessage
                    requestedContractCancellationId
                }
                ... on DeclineCancellationInputValidationError {
                    errorCode
                    errorMessage
                    violations {
                        __typename
                        code
                        displayMessage
                        ... on CancellationTrackingNumberViolation {
                            constraint {
                                characterLimit { minLength maxLength }
                            }
                            exceededLength
                            containsInvalidCharacters
                        }
                        ... on CancellationShippingCarrierCodeViolation {
                            constraint {
                                characterLimit { minLength maxLength }
                            }
                            exceededLength
                            containsInvalidCharacters
                        }
                        ... on CancellationShippedDateViolation {
                            constraint { fromDate toDate }
                        }
                    }
                }
            }
        }
        GRAPHQL;

    public const SELLER_CONTRACT_CANCELLATIONS = <<<'GRAPHQL'
        query SellerContractCancellations($input: SellerContractCancellationsInput!) {
            sellerContractCancellations(input: $input) {
                __typename
                ... on SellerContractCancellationsSuccess {
                    contractCancellations {
                        __typename
                        cancellationId
                        lineItems {
                            __typename
                            cancellationLineItemId
                            requestedQuantity
                            cancelledQuantity
                            listingRestockTasks {
                                __typename
                                ... on PostPurchaseListingRelistTask {
                                    relistStatus {
                                        __typename
                                        code
                                        displayText
                                    }
                                    relistedListing { listingId }
                                }
                            }
                            ... on OrderCancellationLineItem {
                                orderLineItem { orderLineItemId }
                            }
                            ... on PurchaseQuoteCancellationLineItem {
                                purchaseQuoteLineItem { purchaseQuoteLineItemId }
                            }
                        }
                        requestedAt
                        reason {
                            __typename
                            code
                            displayText
                        }
                        requesterNote
                        requester
                        status {
                            __typename
                            code
                            displayText
                        }
                        closedAt
                        refunds { refundId }
                        sellerAvailableActions {
                            primaryActions {
                                __typename
                                code
                                displayText
                            }
                            responseDueAt
                        }
                        ... on ItemCommitmentCancellation {
                            itemCommitment { itemCommitmentId }
                        }
                        ... on PurchaseQuoteCancellation {
                            purchaseQuote { purchaseQuoteId }
                        }
                    }
                    pagination {
                        nextCursor
                        previousCursor
                    }
                }
                ... on ContractCancellationInvalidDateRangeError {
                    errorCode
                    errorMessage
                }
                ... on ContractCancellationInvalidPageSizeError {
                    errorCode
                    errorMessage
                    maxAllowedPageSize
                }
                ... on ContractCancellationInvalidSearchInputError {
                    errorCode
                    errorMessage
                }
            }
        }
        GRAPHQL;
}
