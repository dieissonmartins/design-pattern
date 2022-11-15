<?php

namespace Src\DesignPattern;

class DiscountCalculator
{
    public function calculate(Budget $budget): float
    {
        $aux = $budget->value;

        if ($budget->items_qtd > 5) {
            $aux = $budget->value * 0.1;
        }

        if($budget->value > 500) {
            $aux = $budget->value * 0.05;
        }

        $ret = $aux;

        return $ret;
    }
}