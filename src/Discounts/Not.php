<?php

use Src\DesignPattern\Budget;

class Not extends Discount
{
    public function __construct()
    {
        parent::__construct(null);
    }

    public function calculate(Budget $budget): float
    {
        return 0;
    }
}