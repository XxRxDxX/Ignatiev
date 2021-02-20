<?php
use Ignatiev\MyLog;
use PHPUnit\Framework\TestCase;

require __DIR__ . './../vendor/autoload.php';

class MyLogTest extends TestCase
{
    /**
     * @dataProvider providerLog
     */
    public function testLog($str)
    {
        $this->assertEquals('',  MyLog::log($str));
    }
    public function providerLog ()
    {
        return array (
            array ("asdasdasd"),
            array ("aweqweawd"),
            array (124515),
            array (true),
        );
    }
    public function testLogTex()
    {
        $this->expectException(TypeError::class);
        $this->assertEquals('',  MyLog::log(null));
        $this->assertEquals('',  MyLog::log());
    }
    public function testWrite()
    {
        $this->assertEquals('',   MyLog::write("asd"));
        $this->assertEquals('',   MyLog::write());
    }
}