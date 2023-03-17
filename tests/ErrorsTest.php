<?php

declare(strict_types=1);

namespace Ramsey\Test\CodingStandard;

use PHPUnit\Framework\TestCase;
use Spatie\Snapshots\MatchesSnapshots;

use function array_pop;
use function escapeshellarg;
use function escapeshellcmd;
use function exec;
use function implode;
use function realpath;
use function shell_exec;

class ErrorsTest extends TestCase
{
    use MatchesSnapshots;

    public function testExpectedViolations(): void
    {
        $php = shell_exec('which php');
        $phpcs = realpath(__DIR__ . '/../vendor/bin/phpcs');
        $standard = realpath(__DIR__ . '/phpcs.xml');
        $command = escapeshellcmd($php) . ' '
            . escapeshellarg($phpcs) . ' '
            . escapeshellarg("--standard=$standard");

        exec($command, $output);

        // Pop the last 2 lines from the end of the array. The 2nd from last
        // line reports time and memory usage. The last line is an empty string.
        // The time and memory usage can vary between executions, so we want to
        // remove this line to avoid failing tests that can't match this output.
        array_pop($output);
        array_pop($output);

        $this->assertMatchesTextSnapshot(implode("\n", $output));
    }
}
