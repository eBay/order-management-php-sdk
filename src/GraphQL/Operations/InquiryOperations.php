<?php

namespace EBay\OrderManagement\GraphQL\Operations;

final class InquiryOperations
{
    public const ORDER_INQUIRY = <<<'GRAPHQL'
        query OrderInquiry($input: OrderInquiryInput!) {
            orderInquiry(input: $input) {
                __typename
                ... on OrderInquirySuccess {
                    orderInquiry {
                        inquiryId
                        status { code }
                        createdAt
                    }
                }
                ... on OrderInquiryNotFoundError { errorCode errorMessage }
            }
        }
        GRAPHQL;

    public const PROCESS_ORDER_INQUIRY_REFUND = <<<'GRAPHQL'
        mutation ProcessOrderInquiryRefund($input: ProcessOrderInquiryRefundInput!) {
            processOrderInquiryRefund(input: $input) {
                __typename
                ... on ProcessOrderInquiryRefundSuccess {
                    orderInquiry {
                        inquiryId
                        status { code }
                    }
                }
                ... on OrderInquiryActionNotPermittedError { errorCode errorMessage }
                ... on OrderInquiryNotFoundError { errorCode errorMessage }
                ... on RefundAuthorizationFailedError { errorCode errorMessage }
                ... on RefundBlockedByPaymentDisputeError { errorCode errorMessage }
                ... on RefundInstrumentDeclinedError { errorCode errorMessage }
                ... on RefundInstrumentInsufficientFundsError { errorCode errorMessage }
                ... on RefundInstrumentInvalidError { errorCode errorMessage }
                ... on RefundProcessingError { errorCode errorMessage }
            }
        }
        GRAPHQL;

    public const PROVIDE_SHIPMENT_INFO_FOR_ITEM_NOT_RECEIVED_INQUIRY = <<<'GRAPHQL'
        mutation ProvideShipmentInfoForItemNotReceivedInquiry($input: ProvideShipmentInfoForItemNotReceivedInquiryInput!) {
            provideShipmentInfoForItemNotReceivedInquiry(input: $input) {
                __typename
                ... on ProvideShipmentInfoForItemNotReceivedInquirySuccess {
                    orderInquiry {
                        inquiryId
                        status { code }
                    }
                }
                ... on OrderInquiryActionNotPermittedError { errorCode errorMessage }
                ... on OrderInquiryNotFoundError { errorCode errorMessage }
                ... on ProvideShipmentInfoForInquiryInputValidationError { errorCode errorMessage }
            }
        }
        GRAPHQL;

    public const SELLER_ORDER_INQUIRIES = <<<'GRAPHQL'
        query SellerOrderInquiries($input: SellerOrderInquiriesInput!) {
            sellerOrderInquiries(input: $input) {
                __typename
                ... on SellerOrderInquiries {
                    orderInquiries {
                        inquiryId
                        status { code }
                        createdAt
                    }
                    pagination {
                        nextCursor
                        previousCursor
                    }
                }
                ... on OrderInquiryInvalidDateRangeError { errorCode errorMessage }
                ... on OrderInquiryInvalidPageSizeError { errorCode errorMessage }
                ... on OrderInquiryInvalidSearchInputError { errorCode errorMessage }
            }
        }
        GRAPHQL;

    public const SEND_ORDER_INQUIRY_MESSAGE = <<<'GRAPHQL'
        mutation SendOrderInquiryMessage($input: SendOrderInquiryMessageInput!) {
            sendOrderInquiryMessage(input: $input) {
                __typename
                ... on SendOrderInquiryMessageSuccess {
                    orderInquiry {
                        inquiryId
                        status { code }
                    }
                }
                ... on OrderInquiryActionNotPermittedError { errorCode errorMessage }
                ... on OrderInquiryNotFoundError { errorCode errorMessage }
                ... on SendOrderInquiryMessageInputValidationError { errorCode errorMessage }
            }
        }
        GRAPHQL;

    public const SUBMIT_ORDER_INQUIRY_REFERRAL = <<<'GRAPHQL'
        mutation SubmitOrderInquiryReferral($input: SubmitOrderInquiryReferralInput!) {
            submitOrderInquiryReferral(input: $input) {
                __typename
                ... on SubmitOrderInquiryReferralSuccess {
                    orderInquiry {
                        inquiryId
                        status { code }
                    }
                }
                ... on OrderInquiryActionNotPermittedError { errorCode errorMessage }
                ... on OrderInquiryNotFoundError { errorCode errorMessage }
                ... on SubmitOrderInquiryReferralInputValidationError { errorCode errorMessage }
            }
        }
        GRAPHQL;
}
