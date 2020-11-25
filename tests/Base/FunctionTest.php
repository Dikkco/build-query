<?php

namespace Dikkco\Buildable\Tests\Base;

use Dikkco\Buildable\Buildable;
use Dikkco\Buildable\Constant;
use PHPUnit\Framework\TestCase;

class FunctionTest extends TestCase
{
    use Buildable;

    /**
     * test static func get fuzzy param.
     */
    public function testGetFuzzyParam()
    {
        $key = 'a';

        self::assertEquals($this->getFuzzyParam($key, Constant::ALL), '%'.$key.'%');
        self::assertEquals($this->getFuzzyParam($key, Constant::LEFT), '%'.$key);
        self::assertEquals($this->getFuzzyParam($key, Constant::RIGHT), $key.'%');
    }
}
