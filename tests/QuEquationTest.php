<?php
use Ignatiev\QuEquation;
use Ignatiev\IgnatievException;
use PHPUnit\Framework\TestCase;

require __DIR__ . './../vendor/autoload.php';

class QuadraticTest extends TestCase {

    /**
     * @dataProvider providerSolve
     */

    public function testSolve($a, $b, $c, $res) {
        $fTest = new QuEquation();
        $this->assertEquals($res, $fTest->solve($a, $b, $c));
    }

    public function providerSolve ()
    {
        return array (
            array (15, 9, 0,[-135 , 0]),
            array (1, 6, -40,[ -10, 4]),
            array (0, 1, 1,[-1]),
            array (0, 1, 2, [-2.0]),

        );
    }

    /**
     * @dataProvider providerSolveEx
     */

    public function testSolveEx($a, $b, $c, $res) {
        $this->expectException(IgnatievException::class);
        $fTest = new QuEquation();
        $this->assertEquals($res, $fTest->solve($a, $b, $c));
    }

    public function providerSolveEx (): array
    {
        return array (
            array (0, 0, 0, 0),
            array (4, 2, 1, 0)
        );
    }
}