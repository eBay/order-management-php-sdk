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
                        cancellationId
                        cancellationState
                        creationDate
                        lastModifiedDate
                    }
                }
                ... on ContractCancellationActionNotPermittedError { errorCode errorMessage }
                ... on ContractCancellationNotFoundError { errorCode errorMessage }
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
                        cancellationId
                        cancellationState
                        creationDate
                        lastModifiedDate
                    }
                }
                ... on ContractCancellationNotFoundError { errorCode errorMessage }
            }
        }
        GRAPHQL;

    public const CREATE_ITEM_COMMITMENT_CANCELLATION = <<<'GRAPHQL'
        mutation CreateItemCommitmentCancellation($input: CreateItemCommitmentCancellationInput!) {
            createItemCommitmentCancellation(input: $input) {
                __typename
                ... on CreateItemCommitmentCancellationSuccess {
                    itemCommitmentCancellation {
                        cancellationId
                        cancellationState
                        creationDate
                        lastModifiedDate
                    }
                }
                ... on ItemCommitmentCancellationEligibilityError { errorCode errorMessage }
                ... on ItemCommitmentNotFoundError { errorCode errorMessage }
            }
        }
        GRAPHQL;

    public const CREATE_ORDER_CANCELLATION = <<<'GRAPHQL'
        mutation CreateOrderCancellation($input: CreateOrderCancellationInput!) {
            createOrderCancellation(input: $input) {
                __typename
                ... on CreateOrderCancellationSuccess {
                    orderCancellation {
                        cancellationId
                        cancellationState
                        creationDate
                        lastModifiedDate
                    }
                }
                ... on OrderCancellationEligibilityError { errorCode errorMessage }
                ... on OrderLineItemCancellationEligibilityError { errorCode errorMessage }
                ... on OrderNotFoundError { errorCode errorMessage }
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
                        cancellationId
                        cancellationState
                        creationDate
                        lastModifiedDate
                    }
                }
                ... on PurchaseQuoteCancellationEligibilityError { errorCode errorMessage }
                ... on PurchaseQuoteNotFoundError { errorCode errorMessage }
            }
        }
        GRAPHQL;

    public const DECLINE_CONTRACT_CANCELLATION = <<<'GRAPHQL'
        mutation DeclineContractCancellation($input: DeclineContractCancellationInput!) {
            declineContractCancellation(input: $input) {
                __typename
                ... on DeclineContractCancellationSuccess {
                    contractCancellation {
                        cancellationId
                        cancellationState
                        creationDate
                        lastModifiedDate
                    }
                }
                ... on ContractCancellationActionNotPermittedError { errorCode errorMessage }
                ... on ContractCancellationNotFoundError { errorCode errorMessage }
                ... on DeclineCancellationInputValidationError { errorCode errorMessage }
            }
        }
        GRAPHQL;

    public const SELLER_CONTRACT_CANCELLATIONS = <<<'GRAPHQL'
        query SellerContractCancellations($input: SellerContractCancellationsInput!) {
            sellerContractCancellations(input: $input) {
                __typename
                ... on SellerContractCancellationsSuccess {
                    contractCancellations {
                        cancellationId
                        cancellationState
                        creationDate
                        lastModifiedDate
                    }
                    pagination {
                        nextCursor
                        previousCursor
                        total
                    }
                }
                ... on ContractCancellationInvalidDateRangeError { errorCode errorMessage }
                ... on ContractCancellationInvalidPageSizeError { errorCode errorMessage }
                ... on ContractCancellationInvalidSearchInputError { errorCode errorMessage }
            }
        }
        GRAPHQL;
}
