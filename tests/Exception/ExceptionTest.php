<?php

namespace Dikkco\Buildable\Tests\Exception;

use Dikkco\Buildable\Buildable;
use Dikkco\Buildable\Exception\NotExistException;
use Dikkco\Buildable\Tests\Constant\TestData;
use PHPUnit\Framework\TestCase;

class ExceptionTest extends TestCase
{
    use Buildable;

    /**
     * test NotExistException.
     *
     * @throws NotExistException
     */
    public function testNotExistException()
    {
        //Test 1. test exception
        $this->expectException(NotExistException::class);
        $this->expectExceptionMessage('This value is not exist.');
        $this->expectExceptionCode(1);

        //Test 2. key not exist
        $key = 'test';
        $this->initial([])->param(TestData::TEST_DATA2)->key($key, 4)->result();
    }
}
