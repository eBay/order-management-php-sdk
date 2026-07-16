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

namespace EBay\OrderManagement\GraphQL\Operations;

final class ReturnOperations
{
    public static function APPROVE_RETURN(): string
    {
        return (string) file_get_contents(__DIR__ . '/approveReturn.graphql');
    }

    public static function ATTACH_RETURN_SHIPMENT_LABEL(): string
    {
        return (string) file_get_contents(__DIR__ . '/attachReturnShipmentLabel.graphql');
    }

    public static function DECLINE_RETURN(): string
    {
        return (string) file_get_contents(__DIR__ . '/declineReturn.graphql');
    }

    public static function ORDER_RETURN(): string
    {
        return (string) file_get_contents(__DIR__ . '/orderReturn.graphql');
    }

    public static function PROCESS_RETURN_REFUND(): string
    {
        return (string) file_get_contents(__DIR__ . '/processReturnRefund.graphql');
    }

    public static function PROPOSE_KEEP_ITEM_WITH_PARTIAL_REFUND(): string
    {
        return (string) file_get_contents(__DIR__ . '/proposeKeepItemWithPartialRefund.graphql');
    }

    public static function PROVIDE_RMA_NUMBER(): string
    {
        return (string) file_get_contents(__DIR__ . '/provideRmaNumber.graphql');
    }

    public static function RECORD_RETURN_LABEL_SENT_OFFLINE(): string
    {
        return (string) file_get_contents(__DIR__ . '/recordReturnLabelSentOffline.graphql');
    }

    public static function RECORD_RETURN_RECEIVED(): string
    {
        return (string) file_get_contents(__DIR__ . '/recordReturnReceived.graphql');
    }

    public static function SELLER_ORDER_RETURNS(): string
    {
        return (string) file_get_contents(__DIR__ . '/sellerOrderReturns.graphql');
    }

    public static function SELLER_RETURN_PREFERENCE(): string
    {
        return (string) file_get_contents(__DIR__ . '/sellerReturnPreference.graphql');
    }

    public static function SEND_RETURN_MESSAGE(): string
    {
        return (string) file_get_contents(__DIR__ . '/sendReturnMessage.graphql');
    }

    public static function SUBMIT_RETURN_REFERRAL(): string
    {
        return (string) file_get_contents(__DIR__ . '/submitReturnReferral.graphql');
    }

    public static function UPDATE_SELLER_RMA_PREFERENCE(): string
    {
        return (string) file_get_contents(__DIR__ . '/updateSellerRmaPreference.graphql');
    }

    public static function CREATE_IN_STORE_RETURN(): string
    {
        return (string) file_get_contents(__DIR__ . '/createInStoreReturn.graphql');
    }

    public static function RETURN_RULE_LISTING_GROUP(): string
    {
        return (string) file_get_contents(__DIR__ . '/returnRuleListingGroup.graphql');
    }

    public static function CREATE_RETURN_RULE_LISTING_GROUP(): string
    {
        return (string) file_get_contents(__DIR__ . '/createReturnRuleListingGroup.graphql');
    }

    public static function ADD_LISTINGS_TO_RETURN_RULE_LISTING_GROUP(): string
    {
        return (string) file_get_contents(__DIR__ . '/addListingsToReturnRuleListingGroup.graphql');
    }

    public static function DELETE_RETURN_RULE_LISTING_GROUP(): string
    {
        return (string) file_get_contents(__DIR__ . '/deleteReturnRuleListingGroup.graphql');
    }

    public static function DELETE_SELLER_RETURN_RULE(): string
    {
        return (string) file_get_contents(__DIR__ . '/deleteSellerReturnRule.graphql');
    }

    public static function APPEND_SELLER_RETURN_RESPONSE_RULE(): string
    {
        return (string) file_get_contents(__DIR__ . '/appendSellerReturnResponseRule.graphql');
    }

    public static function APPEND_SELLER_RETURN_TO_ADDRESS_RULE(): string
    {
        return (string) file_get_contents(__DIR__ . '/appendSellerReturnToAddressRule.graphql');
    }

    public static function UPDATE_SELLER_RETURN_RESPONSE_RULE_CONDITION(): string
    {
        return (string) file_get_contents(__DIR__ . '/updateSellerReturnResponseRuleCondition.graphql');
    }

    public static function UPDATE_SELLER_RETURN_RESPONSE_RULES_PRIORITIES(): string
    {
        return (string) file_get_contents(__DIR__ . '/updateSellerReturnResponseRulesPriorities.graphql');
    }

    public static function UPDATE_SELLER_RETURN_RULE_STATUS(): string
    {
        return (string) file_get_contents(__DIR__ . '/updateSellerReturnRuleStatus.graphql');
    }

    public static function UPDATE_SELLER_RETURN_TO_ADDRESS_RULE_CONDITION(): string
    {
        return (string) file_get_contents(__DIR__ . '/updateSellerReturnToAddressRuleCondition.graphql');
    }

    public static function UPDATE_SELLER_RETURN_TO_ADDRESS_RULES_PRIORITIES(): string
    {
        return (string) file_get_contents(__DIR__ . '/updateSellerReturnToAddressRulesPriorities.graphql');
    }
}
