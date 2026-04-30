<?php

namespace EBay\OrderManagement\GraphQL\Operations;

final class ReturnOperations
{
    public const APPROVE_RETURN = <<<'GRAPHQL'
        mutation ApproveReturn($input: ApproveReturnInput!) {
            approveReturn(input: $input) {
                __typename
                ... on OrderReturn {
                    returnId
                    status { code }
                    requestedAt
                }
                ... on ApproveReturnInputValidationError { errorCode errorMessage }
                ... on ReturnActionNotPermittedError { errorCode errorMessage }
                ... on ReturnNotFoundError { errorCode errorMessage }
            }
        }
        GRAPHQL;

    public const ATTACH_RETURN_SHIPMENT_LABEL = <<<'GRAPHQL'
        mutation AttachReturnShipmentLabel($input: AttachReturnShipmentLabelInput!) {
            attachReturnShipmentLabel(input: $input) {
                __typename
                ... on OrderReturn {
                    returnId
                    status { code }
                }
                ... on AttachReturnShipmentLabelInputValidationError { errorCode errorMessage }
                ... on MultipleReturnLabelsNotSupportedError { errorCode errorMessage }
                ... on ReturnActionNotPermittedError { errorCode errorMessage }
                ... on ReturnNotFoundError { errorCode errorMessage }
                ... on ReturnShipmentLabelNotFoundError { errorCode errorMessage }
                ... on ReturnShippingLabelRequiredError { errorCode errorMessage }
            }
        }
        GRAPHQL;

    public const DECLINE_RETURN = <<<'GRAPHQL'
        mutation DeclineReturn($input: DeclineReturnInput!) {
            declineReturn(input: $input) {
                __typename
                ... on OrderReturn {
                    returnId
                    status { code }
                }
                ... on DeclineReturnInputValidationError { errorCode errorMessage }
                ... on ReturnActionNotPermittedError { errorCode errorMessage }
                ... on ReturnNotFoundError { errorCode errorMessage }
            }
        }
        GRAPHQL;

    public const ORDER_RETURN = <<<'GRAPHQL'
        query OrderReturn($input: OrderReturnInput!) {
            orderReturn(input: $input) {
                __typename
                ... on OrderReturn {
                    returnId
                    status { code }
                    requestedAt
                    closedAt
                }
                ... on ReturnNotFoundError { errorCode errorMessage }
            }
        }
        GRAPHQL;

    public const PROCESS_RETURN_REFUND = <<<'GRAPHQL'
        mutation ProcessReturnRefund($input: ProcessReturnRefundInput!) {
            processReturnRefund(input: $input) {
                __typename
                ... on OrderReturn {
                    returnId
                    status { code }
                }
                ... on MultipleRefundWithholdingsNotAllowedError { errorCode errorMessage }
                ... on ProcessReturnRefundInputValidationError { errorCode errorMessage }
                ... on RefundAuthorizationFailedError { errorCode errorMessage }
                ... on RefundBlockedByPaymentDisputeError { errorCode errorMessage }
                ... on RefundInstrumentDeclinedError { errorCode errorMessage }
                ... on RefundInstrumentInsufficientFundsError { errorCode errorMessage }
                ... on RefundInstrumentInvalidError { errorCode errorMessage }
                ... on RefundProcessingError { errorCode errorMessage }
                ... on ReturnActionNotPermittedError { errorCode errorMessage }
                ... on ReturnLineItemNotFoundError { errorCode errorMessage }
                ... on ReturnNotFoundError { errorCode errorMessage }
            }
        }
        GRAPHQL;

    public const PROPOSE_KEEP_ITEM_WITH_PARTIAL_REFUND = <<<'GRAPHQL'
        mutation ProposeKeepItemWithPartialRefund($input: ProposeKeepItemWithPartialRefundInput!) {
            proposeKeepItemWithPartialRefund(input: $input) {
                __typename
                ... on OrderReturn {
                    returnId
                    status { code }
                }
                ... on MultipleRefundTermsNotAllowedError { errorCode errorMessage }
                ... on ProposeKeepItemWithPartialRefundInputValidationError { errorCode errorMessage }
                ... on ReturnActionNotPermittedError { errorCode errorMessage }
                ... on ReturnLineItemNotFoundError { errorCode errorMessage }
                ... on ReturnNotFoundError { errorCode errorMessage }
                ... on ReturnRefundTermsRequiredError { errorCode errorMessage }
            }
        }
        GRAPHQL;

    public const PROVIDE_RMA_NUMBER = <<<'GRAPHQL'
        mutation ProvideRmaNumber($input: ProvideRmaNumberInput!) {
            provideRmaNumber(input: $input) {
                __typename
                ... on OrderReturn {
                    returnId
                    status { code }
                }
                ... on ProvideRmaNumberInputValidationError { errorCode errorMessage }
                ... on ReturnActionNotPermittedError { errorCode errorMessage }
                ... on ReturnNotFoundError { errorCode errorMessage }
            }
        }
        GRAPHQL;

    public const RECORD_RETURN_LABEL_SENT_OFFLINE = <<<'GRAPHQL'
        mutation RecordReturnLabelSentOffline($input: RecordReturnLabelSentOfflineInput!) {
            recordReturnLabelSentOffline(input: $input) {
                __typename
                ... on OrderReturn {
                    returnId
                    status { code }
                }
                ... on RecordReturnLabelSentOfflineInputValidationError { errorCode errorMessage }
                ... on ReturnActionNotPermittedError { errorCode errorMessage }
                ... on ReturnNotFoundError { errorCode errorMessage }
            }
        }
        GRAPHQL;

    public const RECORD_RETURN_RECEIVED = <<<'GRAPHQL'
        mutation RecordReturnReceived($input: RecordReturnReceivedInput!) {
            recordReturnReceived(input: $input) {
                __typename
                ... on OrderReturn {
                    returnId
                    status { code }
                }
                ... on ReturnActionNotPermittedError { errorCode errorMessage }
                ... on ReturnNotFoundError { errorCode errorMessage }
            }
        }
        GRAPHQL;

    public const SELLER_ORDER_RETURNS = <<<'GRAPHQL'
        query SellerOrderReturns($input: SellerOrderReturnsInput!) {
            sellerOrderReturns(input: $input) {
                __typename
                ... on SellerOrderReturns {
                    orderReturns {
                        returnId
                        status { code }
                        requestedAt
                        closedAt
                    }
                    pagination {
                        nextCursor
                        previousCursor
                    }
                }
                ... on ReturnActionNotPermittedError { errorCode errorMessage }
                ... on ReturnInvalidDateRangeError { errorCode errorMessage }
                ... on ReturnInvalidPageSizeError { errorCode errorMessage }
                ... on ReturnInvalidSearchInputError { errorCode errorMessage }
            }
        }
        GRAPHQL;

    public const SELLER_RETURN_PREFERENCE = <<<'GRAPHQL'
        query SellerReturnPreference($input: SellerReturnPreferenceInput!) {
            sellerReturnPreference(input: $input) {
                __typename
                ... on SellerReturnPreferences {
                    listingMarketplace
                    rmaPreference { preferenceStatus }
                }
                ... on ReturnPreferenceNotFoundError { errorCode errorMessage }
            }
        }
        GRAPHQL;

    public const SEND_RETURN_MESSAGE = <<<'GRAPHQL'
        mutation SendReturnMessage($input: SendReturnMessageInput!) {
            sendReturnMessage(input: $input) {
                __typename
                ... on OrderReturn {
                    returnId
                    status { code }
                }
                ... on ReturnActionNotPermittedError { errorCode errorMessage }
                ... on ReturnNotFoundError { errorCode errorMessage }
                ... on SendReturnMessageInputValidationError { errorCode errorMessage }
            }
        }
        GRAPHQL;

    public const SUBMIT_RETURN_REFERRAL = <<<'GRAPHQL'
        mutation SubmitReturnReferral($input: SubmitReturnReferralInput!) {
            submitReturnReferral(input: $input) {
                __typename
                ... on OrderReturn {
                    returnId
                    status { code }
                }
                ... on ReturnActionNotPermittedError { errorCode errorMessage }
                ... on ReturnNotFoundError { errorCode errorMessage }
                ... on SubmitReturnReferralInputValidationError { errorCode errorMessage }
            }
        }
        GRAPHQL;

    public const UPDATE_SELLER_RMA_PREFERENCE = <<<'GRAPHQL'
        mutation UpdateSellerRmaPreference($input: UpdateSellerRmaPreferenceInput!) {
            updateSellerRmaPreference(input: $input) {
                __typename
                ... on SellerReturnPreferences {
                    listingMarketplace
                    rmaPreference { preferenceStatus }
                }
                ... on ReturnPreferenceNotFoundError { errorCode errorMessage }
            }
        }
        GRAPHQL;
}
