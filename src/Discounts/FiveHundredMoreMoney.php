<?php
namespace Src\DesignPattern\Discounts;

use Src\DesignPattern\Budget;

class FiveHundredMoreMoney extends Discount
{
    public function calculate(Budget $budget): float
    {
        if ($budget->value > 500) {
            return $budget->value * 0.05;
        }

        return $this->next_discount->calculate($budget);
    }
}