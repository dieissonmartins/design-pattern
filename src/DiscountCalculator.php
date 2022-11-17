<?php

namespace Src\DesignPattern;

use Src\DesignPattern\Discounts\FiveHundredMoreMoney;
use Src\DesignPattern\Discounts\FiveMoreItems;
use Src\DesignPattern\Discounts\Not;

class DiscountCalculator
{
    public function calculate(Budget $budget): float
    {
        $pipeline = new FiveMoreItems(new FiveHundredMoreMoney(new Not()));

        return $pipeline->calculate($budget);
    }
}