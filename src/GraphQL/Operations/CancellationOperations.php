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

final class CancellationOperations
{
    public static function APPROVE_CONTRACT_CANCELLATION(): string
    {
        return (string) file_get_contents(__DIR__ . '/approveContractCancellation.graphql');
    }

    public static function CONTRACT_CANCELLATION(): string
    {
        return (string) file_get_contents(__DIR__ . '/contractCancellation.graphql');
    }

    public static function CREATE_ITEM_COMMITMENT_CANCELLATION(): string
    {
        return (string) file_get_contents(__DIR__ . '/createItemCommitmentCancellation.graphql');
    }

    public static function CREATE_ORDER_CANCELLATION(): string
    {
        return (string) file_get_contents(__DIR__ . '/createOrderCancellation.graphql');
    }

    public static function CREATE_PURCHASE_QUOTE_CANCELLATION(): string
    {
        return (string) file_get_contents(__DIR__ . '/createPurchaseQuoteCancellation.graphql');
    }

    public static function DECLINE_CONTRACT_CANCELLATION(): string
    {
        return (string) file_get_contents(__DIR__ . '/declineContractCancellation.graphql');
    }

    public static function SELLER_CONTRACT_CANCELLATIONS(): string
    {
        return (string) file_get_contents(__DIR__ . '/sellerContractCancellations.graphql');
    }
}
