<?php
use Ignatiev\Equation;
use Ignatiev\IgnatievException;
use PHPUnit\Framework\TestCase;

require __DIR__ . './../vendor/autoload.php';

class EquationTest extends TestCase {

    /**
     * @dataProvider providerQu_solve
     */

    public function testQu_solve($a, $b, $res) {
        $fTest = new Equation();
        $this->assertEquals($res, $fTest->qu_solve($a, $b));
    }

    public function providerQu_solve ()
    {
        return array (
            array (2, 2, [-1]),
            array (-4, 4, [1]),
            array (440, 44, [-0.1]),

        );
    }

    /**
     * @dataProvider providerQu_solveEx
     */

    public function testQu_solveEx($a, $b, $res) {
        $this->expectException(IgnatievException::class);
        $fTest = new Equation();
        $this->assertEquals($res, $fTest->qu_solve($a, $b));
    }

    public function providerQu_solveEx ()
    {
        return array (
            array (0, 1, 0),
            array (0, 0, 0),
            array (null, null, 0),

        );
    }
}