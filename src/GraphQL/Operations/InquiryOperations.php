<?php

namespace EBay\OrderManagement\GraphQL\Operations;

final class InquiryOperations
{
    public static function ORDER_INQUIRY(): string
    {
        return file_get_contents(__DIR__ . '/orderInquiry.graphql');
    }

    public static function PROCESS_ORDER_INQUIRY_REFUND(): string
    {
        return file_get_contents(__DIR__ . '/processOrderInquiryRefund.graphql');
    }

    public static function PROVIDE_SHIPMENT_INFO_FOR_ITEM_NOT_RECEIVED_INQUIRY(): string
    {
        return file_get_contents(__DIR__ . '/provideShipmentInfoForItemNotReceivedInquiry.graphql');
    }

    public static function SELLER_ORDER_INQUIRIES(): string
    {
        return file_get_contents(__DIR__ . '/sellerOrderInquiries.graphql');
    }

    public static function SEND_ORDER_INQUIRY_MESSAGE(): string
    {
        return file_get_contents(__DIR__ . '/sendOrderInquiryMessage.graphql');
    }

    public static function SUBMIT_ORDER_INQUIRY_REFERRAL(): string
    {
        return file_get_contents(__DIR__ . '/submitOrderInquiryReferral.graphql');
    }
}
