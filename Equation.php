<?php namespace Ignatiev;

Class Equation{
	public function qu_solve($a, $b){
			if($a == 0){
                throw new IgnatievException("Ошибка: уравнения не существует.");
            }
        MyLog::log("Это линейное уравнение");
			return $this->X=array(-($b/$a));
	}
	protected $X;
}
?>