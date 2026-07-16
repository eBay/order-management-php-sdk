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

final class ItemCommitmentOperations
{
    public static function ITEM_COMMITMENTS(): string
    {
        return (string) file_get_contents(__DIR__ . '/itemCommitments.graphql');
    }

    public static function ITEM_COMMITMENTS_BY_IDS(): string
    {
        return (string) file_get_contents(__DIR__ . '/itemCommitmentsByIds.graphql');
    }

    public static function MARK_ITEM_COMMITMENTS_PAID(): string
    {
        return (string) file_get_contents(__DIR__ . '/markItemCommitmentsPaid.graphql');
    }

    public static function MARK_ORDERS_PAID(): string
    {
        return (string) file_get_contents(__DIR__ . '/markOrdersPaid.graphql');
    }

    public static function ORDER_LINE_ITEMS_BY_IDS(): string
    {
        return (string) file_get_contents(__DIR__ . '/orderLineItemsByIds.graphql');
    }

    public static function ORDERS(): string
    {
        return (string) file_get_contents(__DIR__ . '/orders.graphql');
    }

    public static function ORDERS_BY_IDS(): string
    {
        return (string) file_get_contents(__DIR__ . '/ordersByIds.graphql');
    }

    public static function BULK_UPDATE_ITEM_COMMITMENT_TAGS(): string
    {
        return (string) file_get_contents(__DIR__ . '/bulkUpdateItemCommitmentTags.graphql');
    }

    public static function BULK_UPDATE_ORDER_TAGS(): string
    {
        return (string) file_get_contents(__DIR__ . '/bulkUpdateOrderTags.graphql');
    }
}
