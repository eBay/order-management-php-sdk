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

namespace EBay\OrderManagement\Tests\GraphQL;

use PHPUnit\Framework\TestCase;

class ReturnFixtureTest extends TestCase
{
    private static string $fixturesDir = __DIR__ . '/../../fixtures/output';
    private static string $namespace = 'EBay\\OrderManagement\\GraphQL\\Types\\ReturnOperations';

    /** @return list<string> camelCase operation keys */
    private static function operations(): array
    {
        return [
            'addListingsToReturnRuleListingGroup',
            'appendSellerReturnResponseRule',
            'appendSellerReturnToAddressRule',
            'approveReturn',
            'attachReturnShipmentLabel',
            'createInStoreReturn',
            'createReturnRuleListingGroup',
            'declineReturn',
            'deleteReturnRuleListingGroup',
            'deleteSellerReturnRule',
            'orderReturn',
            'processReturnRefund',
            'proposeKeepItemWithPartialRefund',
            'provideRmaNumber',
            'recordReturnLabelSentOffline',
            'recordReturnReceived',
            'returnRuleListingGroup',
            'sellerOrderReturns',
            'sellerReturnPreference',
            'sendReturnMessage',
            'submitReturnReferral',
            'updateSellerReturnResponseRuleCondition',
            'updateSellerReturnResponseRulesPriorities',
            'updateSellerReturnRuleStatus',
            'updateSellerReturnToAddressRuleCondition',
            'updateSellerReturnToAddressRulesPriorities',
            'updateSellerRmaPreference',
        ];
    }

    public static function fixtures(): iterable
    {
        $base = self::$fixturesDir;

        foreach (self::operations() as $opKey) {
            $operation = ucfirst($opKey);
            $dir = $base . '/' . $opKey;

            if (is_dir($dir)) {
                foreach (glob($dir . '/*.json') as $file) {
                    yield $operation . '/' . basename($file, '.json') => [$operation, $opKey, $file];
                }
            } else {
                yield $operation => [$operation, $opKey, $dir . '.json'];
            }
        }
    }

    /** @dataProvider fixtures */
    public function testFixtureParsing(string $operation, string $key, string $file): void
    {
        $data = json_decode(file_get_contents($file), true);

        $class = self::$namespace . '\\' . $operation . '\\Output';
        $result = $class::fromArray($data[$key]);

        $this->assertNotNull($result);
    }
}
