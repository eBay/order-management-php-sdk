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

final class ReturnOperations
{
    public static function ADD_LISTINGS_TO_RETURN_RULE_LISTING_GROUP(): string
    {
        return file_get_contents(__DIR__ . '/addListingsToReturnRuleListingGroup.graphql')
            ?: throw new \RuntimeException('Failed to read bundled GraphQL file: addListingsToReturnRuleListingGroup.graphql');
    }

    public static function APPEND_SELLER_RETURN_RESPONSE_RULE(): string
    {
        return file_get_contents(__DIR__ . '/appendSellerReturnResponseRule.graphql')
            ?: throw new \RuntimeException('Failed to read bundled GraphQL file: appendSellerReturnResponseRule.graphql');
    }

    public static function APPEND_SELLER_RETURN_TO_ADDRESS_RULE(): string
    {
        return file_get_contents(__DIR__ . '/appendSellerReturnToAddressRule.graphql')
            ?: throw new \RuntimeException('Failed to read bundled GraphQL file: appendSellerReturnToAddressRule.graphql');
    }

    public static function APPROVE_RETURN(): string
    {
        return file_get_contents(__DIR__ . '/approveReturn.graphql')
            ?: throw new \RuntimeException('Failed to read bundled GraphQL file: approveReturn.graphql');
    }

    public static function ATTACH_RETURN_SHIPMENT_LABEL(): string
    {
        return file_get_contents(__DIR__ . '/attachReturnShipmentLabel.graphql')
            ?: throw new \RuntimeException('Failed to read bundled GraphQL file: attachReturnShipmentLabel.graphql');
    }

    public static function CREATE_IN_STORE_RETURN(): string
    {
        return file_get_contents(__DIR__ . '/createInStoreReturn.graphql')
            ?: throw new \RuntimeException('Failed to read bundled GraphQL file: createInStoreReturn.graphql');
    }

    public static function CREATE_RETURN_RULE_LISTING_GROUP(): string
    {
        return file_get_contents(__DIR__ . '/createReturnRuleListingGroup.graphql')
            ?: throw new \RuntimeException('Failed to read bundled GraphQL file: createReturnRuleListingGroup.graphql');
    }

    public static function DECLINE_RETURN(): string
    {
        return file_get_contents(__DIR__ . '/declineReturn.graphql')
            ?: throw new \RuntimeException('Failed to read bundled GraphQL file: declineReturn.graphql');
    }

    public static function DELETE_RETURN_RULE_LISTING_GROUP(): string
    {
        return file_get_contents(__DIR__ . '/deleteReturnRuleListingGroup.graphql')
            ?: throw new \RuntimeException('Failed to read bundled GraphQL file: deleteReturnRuleListingGroup.graphql');
    }

    public static function DELETE_SELLER_RETURN_RULE(): string
    {
        return file_get_contents(__DIR__ . '/deleteSellerReturnRule.graphql')
            ?: throw new \RuntimeException('Failed to read bundled GraphQL file: deleteSellerReturnRule.graphql');
    }

    public static function ORDER_RETURN(): string
    {
        return file_get_contents(__DIR__ . '/orderReturn.graphql')
            ?: throw new \RuntimeException('Failed to read bundled GraphQL file: orderReturn.graphql');
    }

    public static function PROCESS_RETURN_REFUND(): string
    {
        return file_get_contents(__DIR__ . '/processReturnRefund.graphql')
            ?: throw new \RuntimeException('Failed to read bundled GraphQL file: processReturnRefund.graphql');
    }

    public static function PROPOSE_KEEP_ITEM_WITH_PARTIAL_REFUND(): string
    {
        return file_get_contents(__DIR__ . '/proposeKeepItemWithPartialRefund.graphql')
            ?: throw new \RuntimeException('Failed to read bundled GraphQL file: proposeKeepItemWithPartialRefund.graphql');
    }

    public static function PROVIDE_RMA_NUMBER(): string
    {
        return file_get_contents(__DIR__ . '/provideRmaNumber.graphql')
            ?: throw new \RuntimeException('Failed to read bundled GraphQL file: provideRmaNumber.graphql');
    }

    public static function RECORD_RETURN_LABEL_SENT_OFFLINE(): string
    {
        return file_get_contents(__DIR__ . '/recordReturnLabelSentOffline.graphql')
            ?: throw new \RuntimeException('Failed to read bundled GraphQL file: recordReturnLabelSentOffline.graphql');
    }

    public static function RECORD_RETURN_RECEIVED(): string
    {
        return file_get_contents(__DIR__ . '/recordReturnReceived.graphql')
            ?: throw new \RuntimeException('Failed to read bundled GraphQL file: recordReturnReceived.graphql');
    }

    public static function RETURN_RULE_LISTING_GROUP(): string
    {
        return file_get_contents(__DIR__ . '/returnRuleListingGroup.graphql')
            ?: throw new \RuntimeException('Failed to read bundled GraphQL file: returnRuleListingGroup.graphql');
    }

    public static function SELLER_ORDER_RETURNS(): string
    {
        return file_get_contents(__DIR__ . '/sellerOrderReturns.graphql')
            ?: throw new \RuntimeException('Failed to read bundled GraphQL file: sellerOrderReturns.graphql');
    }

    public static function SELLER_RETURN_PREFERENCE(): string
    {
        return file_get_contents(__DIR__ . '/sellerReturnPreference.graphql')
            ?: throw new \RuntimeException('Failed to read bundled GraphQL file: sellerReturnPreference.graphql');
    }

    public static function SEND_RETURN_MESSAGE(): string
    {
        return file_get_contents(__DIR__ . '/sendReturnMessage.graphql')
            ?: throw new \RuntimeException('Failed to read bundled GraphQL file: sendReturnMessage.graphql');
    }

    public static function SUBMIT_RETURN_REFERRAL(): string
    {
        return file_get_contents(__DIR__ . '/submitReturnReferral.graphql')
            ?: throw new \RuntimeException('Failed to read bundled GraphQL file: submitReturnReferral.graphql');
    }

    public static function UPDATE_SELLER_RETURN_RESPONSE_RULE_CONDITION(): string
    {
        return file_get_contents(__DIR__ . '/updateSellerReturnResponseRuleCondition.graphql')
            ?: throw new \RuntimeException('Failed to read bundled GraphQL file: updateSellerReturnResponseRuleCondition.graphql');
    }

    public static function UPDATE_SELLER_RETURN_RESPONSE_RULES_PRIORITIES(): string
    {
        return file_get_contents(__DIR__ . '/updateSellerReturnResponseRulesPriorities.graphql')
            ?: throw new \RuntimeException('Failed to read bundled GraphQL file: updateSellerReturnResponseRulesPriorities.graphql');
    }

    public static function UPDATE_SELLER_RETURN_RULE_STATUS(): string
    {
        return file_get_contents(__DIR__ . '/updateSellerReturnRuleStatus.graphql')
            ?: throw new \RuntimeException('Failed to read bundled GraphQL file: updateSellerReturnRuleStatus.graphql');
    }

    public static function UPDATE_SELLER_RETURN_TO_ADDRESS_RULE_CONDITION(): string
    {
        return file_get_contents(__DIR__ . '/updateSellerReturnToAddressRuleCondition.graphql')
            ?: throw new \RuntimeException('Failed to read bundled GraphQL file: updateSellerReturnToAddressRuleCondition.graphql');
    }

    public static function UPDATE_SELLER_RETURN_TO_ADDRESS_RULES_PRIORITIES(): string
    {
        return file_get_contents(__DIR__ . '/updateSellerReturnToAddressRulesPriorities.graphql')
            ?: throw new \RuntimeException('Failed to read bundled GraphQL file: updateSellerReturnToAddressRulesPriorities.graphql');
    }

    public static function UPDATE_SELLER_RMA_PREFERENCE(): string
    {
        return file_get_contents(__DIR__ . '/updateSellerRmaPreference.graphql')
            ?: throw new \RuntimeException('Failed to read bundled GraphQL file: updateSellerRmaPreference.graphql');
    }
}
