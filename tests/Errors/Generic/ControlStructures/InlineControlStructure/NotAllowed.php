<?php

declare(strict_types=1);

if (false) echo 'Not true';

if (false) {
    echo 'Not true';
} else echo 'True';

if (false) {
    echo 'Not true';
} elseif (true) echo 'True';

foreach (range(1, 10) as $value) echo $value;

while (false) echo 'foo';

do echo 'foo';
while (false);

for ($i = 0; $i < 10; $i++) echo 'foo';
