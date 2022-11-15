<?php

namespace Src\DesignPattern;

class DiscountCalculator
{
    public function calculate(Budget $budget): float
    {
        if ($budget->items_qtd > 5) {
            $aux = $budget->value * 0.1;

        } else {
            $aux = $budget->value;
        }

        $ret = $aux;

        return $ret;
    }
}