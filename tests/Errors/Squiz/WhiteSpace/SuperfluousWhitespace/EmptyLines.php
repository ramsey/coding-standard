<?php

declare(strict_types=1);

namespace Ramsey\Test\CodingStandard\Errors\Squiz\WhiteSpace\SuperfluousWhitespace;

class EmptyLines
{
    public function foo(): void
    {
        $foo = 'bar';


        echo $foo;
    }
}
