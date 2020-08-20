<?php

declare(strict_types=1);

namespace Ramsey\Test\CodingStandard\Sniffs;

use Mockery\MockInterface;
use Ramsey\CodingStandard\Sniffs\Example;
use Ramsey\Test\CodingStandard\RamseyTestCase;

/**
 * This example test exists so that the test runner executes something.
 * We can remove this when we add any custom sniffs or helper methods to our
 * coding standards.
 */
class ExampleTest extends RamseyTestCase
{
    public function testGreet(): void
    {
        /** @var Example & MockInterface $example */
        $example = $this->mockery(Example::class);
        $example->shouldReceive('greet')->passthru();

        $this->assertSame('Hello, Friends!', $example->greet('Friends'));
    }
}
