<?php

declare(strict_types=1);

namespace EBay\OrderManagement\Tests\GraphQL;

use PHPUnit\Framework\TestCase;

class CancellationFixtureTest extends TestCase
{
    private static string $fixturesDir = __DIR__ . '/../../fixtures/output/Cancellation';
    private static string $namespace = 'EBay\\OrderManagement\\GraphQL\\Types\\CancellationOperations';

    public static function fixtures(): iterable
    {
        $base = self::$fixturesDir;

        foreach (new \DirectoryIterator($base) as $entry) {
            if ($entry->isDot()) {
                continue;
            }
            $operation = $entry->isDir() ? $entry->getFilename() : basename($entry->getFilename(), '.json');
            $key = lcfirst($operation);

            if ($entry->isDir()) {
                foreach (glob($entry->getPathname() . '/*.json') as $file) {
                    yield $operation . '/' . basename($file, '.json') => [$operation, $key, $file];
                }
            } else {
                yield $operation => [$operation, $key, $entry->getPathname()];
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
