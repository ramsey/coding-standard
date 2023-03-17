<?php

declare(strict_types=1);

try {
    $foo = 123;
} catch (Throwable $throwable) {
    // Empty catch is allowed.
} finally {
}

var_export($foo);
