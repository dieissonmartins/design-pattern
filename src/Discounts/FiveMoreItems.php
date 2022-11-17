<?php

use Src\DesignPattern\Budget;

class FiveMoreItems extends Discount
{
    public function calculate(Budget $budget): float
    {
        if ($budget->items_qtd > 5) {
            return $budget->value * 0.1;
        }

        return $this->next_discount->calculate($budget);
    }
}