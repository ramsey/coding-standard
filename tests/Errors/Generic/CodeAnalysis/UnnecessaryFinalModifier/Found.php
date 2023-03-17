<?php

declare(strict_types=1);

namespace Ramsey\Test\CodingStandard\Errors\Generic\CodeAnalysis\UnnecessaryFinalModifier;

final class Found
{
    final public function foo(): void
    {
    }
}
