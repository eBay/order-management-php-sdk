<?php

// Copyright 2026 eBay Inc.
//
// Licensed under the Apache License, Version 2.0 (the "License");
// you may not use this file except in compliance with the License.
// You may obtain a copy of the License at
//
//     http://www.apache.org/licenses/LICENSE-2.0
//
// Unless required by applicable law or agreed to in writing, software
// distributed under the License is distributed on an "AS IS" BASIS,
// WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
// See the License for the specific language governing permissions and
// limitations under the License.

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Operations;

final class InquiryOperations
{
    public static function ORDER_INQUIRY(): string
    {
        return file_get_contents(__DIR__ . '/orderInquiry.graphql')
            ?: throw new \RuntimeException('Failed to read bundled GraphQL file: orderInquiry.graphql');
    }

    public static function PROCESS_ORDER_INQUIRY_REFUND(): string
    {
        return file_get_contents(__DIR__ . '/processOrderInquiryRefund.graphql')
            ?: throw new \RuntimeException('Failed to read bundled GraphQL file: processOrderInquiryRefund.graphql');
    }

    public static function PROVIDE_SHIPMENT_INFO_FOR_ITEM_NOT_RECEIVED_INQUIRY(): string
    {
        return file_get_contents(__DIR__ . '/provideShipmentInfoForItemNotReceivedInquiry.graphql')
            ?: throw new \RuntimeException('Failed to read bundled GraphQL file: provideShipmentInfoForItemNotReceivedInquiry.graphql');
    }

    public static function SELLER_ORDER_INQUIRIES(): string
    {
        return file_get_contents(__DIR__ . '/sellerOrderInquiries.graphql')
            ?: throw new \RuntimeException('Failed to read bundled GraphQL file: sellerOrderInquiries.graphql');
    }

    public static function SEND_ORDER_INQUIRY_MESSAGE(): string
    {
        return file_get_contents(__DIR__ . '/sendOrderInquiryMessage.graphql')
            ?: throw new \RuntimeException('Failed to read bundled GraphQL file: sendOrderInquiryMessage.graphql');
    }

    public static function SUBMIT_ORDER_INQUIRY_REFERRAL(): string
    {
        return file_get_contents(__DIR__ . '/submitOrderInquiryReferral.graphql')
            ?: throw new \RuntimeException('Failed to read bundled GraphQL file: submitOrderInquiryReferral.graphql');
    }
}
