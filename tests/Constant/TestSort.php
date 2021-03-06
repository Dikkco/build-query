<?php

declare(strict_types=1);

namespace Dikkco\Buildable\Tests\Constant;

abstract class TestSort
{
    const TEST_SORT1 = [
        'create_time' => 'desc',
    ];

    const TEST_SORT2 = [
        'create_time' => 'desc',
        'update_time' => 'asc',
        'sort'        => 'asc',
    ];
}
