<?php

namespace Src\DesignPattern;

use FiveHundredMoreMoney;
use FiveMoreItems;
use Not;

class DiscountCalculator
{
    public function calculate(Budget $budget): float
    {

        $pipeline = new Not();
        $pipeline = new FiveHundredMoreMoney($pipeline);
        $pipeline = new FiveMoreItems($pipeline);

        return $pipeline->calculate($budget);
    }
}