<?php

declare(strict_types=1);

namespace EBay\OrderManagement\Tests\GraphQL;

use PHPUnit\Framework\TestCase;

class CancellationFixtureTest extends TestCase
{
    private static string $fixturesDir = __DIR__ . '/../../fixtures/output';
    private static string $namespace = 'EBay\\OrderManagement\\GraphQL\\Types\\CancellationOperations';

    /** @return list<string> camelCase operation keys */
    private static function operations(): array
    {
        return [
            'approveContractCancellation',
            'contractCancellation',
            'createItemCommitmentCancellation',
            'createOrderCancellation',
            'createPurchaseQuoteCancellation',
            'declineContractCancellation',
            'sellerContractCancellations',
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
