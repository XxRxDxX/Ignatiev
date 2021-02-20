<?php namespace Ignatiev;

use core\EquationInterface;

Class QuEquation extends Equation implements EquationInterface
{

    protected function dis($a, $b, $c)
    {
        $x = (($b ** 2) - (4 * $a * $c));
        return $x;
    }

    public function solve($a, $b, $c):array
    {
        $x = $this->dis($a, $b, $c);
        if ($a == 0) {
            return $this->qu_solve($b, $c);
        }
        MyLog::log("Это квадратное уравнение");
        if ($x > 0) {
            return $this->X = array(
                -((($b + sqrt($b ** 2 - 4 * $a * $c)) / 2 * $a)),
                -((($b - sqrt($b ** 2 - 4 * $a * $c)) / 2 * $a))
            );
        }
        if ($x == 0) {
            return $this->X = array(-($b / 2 * $a));
        }

        throw new IgnatievException("Ошибка: уравнение не имеет корней.");

    }
}

?>